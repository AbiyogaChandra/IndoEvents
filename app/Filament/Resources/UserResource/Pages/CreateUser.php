<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use Filament\Actions;
use App\Models\Profile;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Initialize profile photo path
        $profilePhotoPath = null;

        // Ensure profile data exists
        if (isset($data['profile'])) {
            // Check if a profile photo was uploaded or if a profile photo URL is provided
            if (isset($data['profile']['profile_photo'])) {
                $profilePhotoPath = $data['profile']['profile_photo'];
            } elseif (isset($data['profile_photo_url'])) {
                // If no photo was uploaded, try to fetch from URL
                $avatarUrl = $data['profile_photo_url'];
                $fileName = time() . "_" . Str::slug($data['profile']['display_name'], '_') . '.png';
                $avatarContent = Http::withOptions(['verify' => false])->get($avatarUrl)->body();
                $filePath = 'uploads/' . $fileName;
                Storage::disk('public')->put($filePath, $avatarContent);
                $profilePhotoPath = $filePath;
            }

            // Create the Profile record
            $profile = Profile::create([
                'display_name' => Str::limit($data['profile']['display_name'], 50),
                'profile_photo' => $profilePhotoPath,
            ]);

            // Add the profile_id to the User's data
            $data['profile_id'] = $profile->id;

            // Remove profile fields from User data to prevent errors
            unset($data['profile']);
            unset($data['profile_photo_url']);
        }

        // Return the modified data for user creation
        return $data;
    }

    protected function getRedirectUrl(): string
    {
        return static::$resource::getUrl('index');
    }
}
