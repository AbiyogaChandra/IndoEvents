<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use App\Models\Profile;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $profileData = $data['profile'] ?? [];
        unset($data['profile']); 

        $user = parent::handleRecordCreation($data);

        $profilePhotoPath = null;

        if (isset($profileData['profile_photo'])) {
            $profilePhotoPath = $profileData['profile_photo'];
        } elseif (!empty($data['profile_photo_url'])) {
            $avatarUrl = $data['profile_photo_url'];
            $fileName = time() . "_" . Str::slug($profileData['display_name'], '_') . '.png';
    
            $avatarContent = Http::withOptions(['verify' => false])->get($avatarUrl)->body();
    
            $filePath = 'uploads/' . $fileName;
            Storage::disk('public')->put($filePath, $avatarContent);
            $profilePhotoPath = $filePath;
        }
    
        Profile::create([
            'display_name' => Str::limit($profileData['display_name'], 50),
            'profile_photo' => $profilePhotoPath,
            'user_id' => $user->id,
        ]);

        return $user;
    }

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
}
