<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Exception;
use DB;

function generateRandomUsername($baseName) {
    $minNumber = 0;
    $maxNumber = 9999;

    $usedNumbers = [];
    $existingUsers = DB::table('users')->where('username', 'like', $baseName . '%')->pluck('username');

    foreach ($existingUsers as $username) {
        if (preg_match('/\d+$/', $username, $matches)) {
            $usedNumbers[] = (int)$matches[0];
        }
    }

    $availableNumbers = array_diff(range($minNumber, $maxNumber), $usedNumbers);
    if (empty($availableNumbers)) {
        throw new Exception('No available numbers for username generation.');
    }

    $randomNumber = $availableNumbers[array_rand($availableNumbers)];
    $randomNumber = sprintf('%.4d', $randomNumber);

    return $baseName . $randomNumber;
}

class UserController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:20',
            'email' => 'required|string|email|max:320',
            'password' => 'required|string|min:8|max:255',
        ]);

        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->intended('/');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:320',
            'password' => 'required|string|max:255',
        ]);

        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect()->intended('/home');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback() 
    {
        $googleUser = Socialite::driver("google")->user();

        if (User::where('google_id', $googleUser->id)->exists()) {
            $user = User::where('google_id', $googleUser->id)->first();
        } elseif (User::where('email', $googleUser->email)->exists()) {
            $user = User::where('email', $googleUser->email)->first();
        } else {
            $baseName = Str::limit($googleUser->name, 16, '');
            $baseName = preg_replace('/\s+/', '', $baseName);

            $avatarUrl = $googleUser->getAvatar();
            $fileName = time() . "_" . $baseName . '.png';
            $avatarContent = Http::withOptions(['verify' => false])->get($avatarUrl)->body();
            $filePath = 'uploads/' . $fileName;
            Storage::disk('public')->put($filePath, $avatarContent);

            $profile = Profile::create(
                [
                    'display_name' => Str::limit($googleUser->name, 50),
                    'profile_photo' => $filePath
                ]
            );

            $randomUsername = generateRandomUsername($baseName);

            $randomPassword = Str::password(16);
            $randomPassword = Hash::make($randomPassword);
            $user = User::create(
                [
                    'email' => $googleUser->email,
                    'password' => $randomPassword,
                    'username' => $randomUsername,
                    'level' => "user",
                    'profile_id' => $profile->id,
                    'google_id' => $googleUser->id
                ]
            );
        }
        //Auth::login($user);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //find post by ID
        
    }
}
