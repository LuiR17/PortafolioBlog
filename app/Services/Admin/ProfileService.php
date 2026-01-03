<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Storage;


class ProfileService
{
    public function update(User $user, array $data): void
    {
        if (isset($data['profile_photo'])){
            if ($user->profile_photo){
                Storage::disk('public')->delete($user->profile_photo);
            }

            $data['profile_photo'] = $data['profile_photo']
                ->store('profiles', 'public');
        }

        $user->update($data);
    }
}