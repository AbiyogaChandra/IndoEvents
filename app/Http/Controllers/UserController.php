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
        $messages = [
            'email.unique' => 'Sudah ada akun yang menggunakan alamat e-mail itu.',
            'password.min' => 'Kata sandi harus terdiri dari minimal 8 karakter.',
            'password.confirmed' => 'Pengulangan kata sandi tidak sama.',
            'username.unique' => 'Sudah ada akun yang menggunakan nama akun itu.',
        ];

        $request->validate([
            'email' => 'required|string|email|max:320|unique:users',
            'password' => 'required|string|min:8|max:255|confirmed',
            'username' => 'required|string|max:20|unique:users'
        ], $messages);
        
        try {

            $user = User::create([
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'username' => $request->username,
            ]);

            $profile = Profile::create(
                [
                    'display_name' => Str::limit($request->username, 50),
                    'user_id' => $user->id
                ]
            );

            Auth::login($user);

            return redirect('/home')->with('success', 'Pembuatan akun berhasil!');
            
        } catch (Exception $e) {
            return redirect('/register')->with('error', 'Pembuatan akun gagal!');
        }
    }

    public function login(Request $request)
    {
        $messages = [
            'email.exists' => 'Tidak ada akun yang menggunakan alamat e-mail itu.',
            'password.required' => 'Kata sandi wajib diisi.',
        ];

        // Validate the input
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ], $messages);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect('/home')->with('success', 'Berhasil masuk.');
        } else {
            return redirect('/login')->withErrors(['incorrect' => 'Alamat e-mail atau kata sandi salah.']);;
        }
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
            Auth::login($user);
        } elseif (User::where('email', $googleUser->email)->exists()) {
            $user = User::where('email', $googleUser->email)->first();
            Auth::login($user);
        } else {
            $baseName = Str::limit($googleUser->name, 16, '');
            $baseName = preg_replace('/\s+/', '', $baseName);

            $randomUsername = generateRandomUsername($baseName);

            $randomPassword = Str::password(16);
            $randomPassword = Hash::make($randomPassword);
            $user = User::create(
                [
                    'email' => $googleUser->email,
                    'password' => $randomPassword,
                    'username' => $randomUsername
                ]
            );
            $user->google_id = $googleUser->id;
            $user->save();

            $avatarUrl = $googleUser->getAvatar();
            $fileName = time() . "_" . $baseName . '.png';
            $avatarContent = Http::withOptions(['verify' => false])->get($avatarUrl)->body();
            $filePath = 'uploads/' . $fileName;
            Storage::disk('public')->put($filePath, $avatarContent);

            $profile = Profile::create(
                [
                    'display_name' => Str::limit($googleUser->name, 50),
                    'profile_photo' => $filePath,
                    'user_id' => $user->id
                ]
            );

            Auth::login($user);
        }
        return redirect('/home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home');
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
