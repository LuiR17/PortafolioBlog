<?php

namespace App\Services\Admin;

use App\Models\User;
use Illuminate\Support\Facades\Storage;


class ProfileService
{
    public function update(User $user, array $data): void
    {
        if (isset($data['profile_photo'])) {

            // borrar imagen anterior
            if ($user->profile_photo) {
                Storage::delete($user->profile_photo);
            }

            // guardar nueva imagen
            $data['profile_photo'] = $data['profile_photo']->store('profiles');
        }

        $user->update($data);
    }
}
