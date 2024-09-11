<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Models\Profile;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/auth/google/redirect', function (Request $request) {
    return Socialite::driver("google")->redirect();
});

Route::get('/auth/google/callback', function (Request $request) {
    $googleUser = Socialite::driver("google")->user();

    $avatarUrl = $googleUser->getAvatar();
    $fileName = time() . "_" . Str::limit($googleUser->name, 20) . '.jpg';
    $avatarContent = Http::withOptions(['verify' => false])->get($avatarUrl)->body();
    //$avatarContent = file_get_contents($avatarUrl);
    Storage::disk('public')->put('uploads/' . $fileName, $avatarContent);
    $filePath = 'uploads/' . $fileName;

    $profile = Profile::create(
        [
            'display_name' => Str::limit($googleUser->name, 50),
            'profile_photo' => $filePath
        ]
    );

    $maxAttempts = 10;
    $attempt = 0;

    $baseName = Str::limit($googleUser->name, 16, '');
    do {
        $randomNumber = rand(1000, 9999);
        $randomUsername = $baseName . $randomNumber;

        $exists = DB::table('users')->where('username', $randomUsername)->exists();
        
        $attempt++;

    } while ($exists && $attempt < $maxAttempts);

    $randomPassword = Str::password(12);
    $user = User::updateOrCreate(
        ['google_id' => $googleUser->id],
        [
            'email' => $googleUser->email,
            'password' => $randomPassword,
            'username' => $randomUsername,
            'level' => "user",
            'profile_id' => $profile->id
        ]
    );

    //Auth::login($user);

    return dd($googleUser);
});

Route::get('/profiles', [ProfileController::class, 'index']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('register');
});

Route::get('/my-events', function () {
    return view('my_events');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
});