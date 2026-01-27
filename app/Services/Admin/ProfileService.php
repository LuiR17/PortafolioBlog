<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Throwable;

class ProfileService
{
    public function update(User $user, array $data): User
    {
        try {
            // Handle profile photo upload
            if (
                isset($data['profile_photo']) &&
                $data['profile_photo'] instanceof \Illuminate\Http\UploadedFile &&
                $data['profile_photo']->isValid()
            ) {
                // Delete old profile photo if exists
                if ($user->profile_photo) {
                    Storage::delete($user->profile_photo);
                }

                // Store new profile photo
                $data['profile_photo'] = $data['profile_photo']->store('profiles');
            }

            // Update user data
            $user->update($data);

            return $user;
        } catch (Throwable $e) {
            Log::error('Error updating profile', [
                'user_id' => $user->id,
                'error' => $e->getMessage(),
            ]);

            throw $e;
        }
    }
}
