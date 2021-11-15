<?php

namespace App\Actions\Fortify;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    public function update($user, array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'skill' => ['nullable', 'string', 'max:255'],
            'career' => ['nullable', 'string', 'max:2000'],
            'twitter_account' => ['nullable', 'string', 'max:255'],
            'facebook_account' => ['nullable', 'string', 'max:255'],
            'instagram_account' => ['nullable', 'string', 'max:255'],
            'qiita_account' => ['nullable', 'string', 'max:255'],
            'github_account' => ['nullable', 'string', 'max:255'],
            'self_pr' => ['nullable', 'string', 'max:2000'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['photo']);
        }

        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
                'skill' => $input['skill'],
                'career' => $input['carrer'],
                'twitter_account' => $input['twitter_account'],
                'facebook_account' => $input['facebook_account'],
                'instagram_account' => $input['instagram_account'],
                'qiita_account' => $input['qiita_account'],
                'github_account' => $input['github_account'],
                'self_pr' => $input['self_pr'],
            ])->save();
        }
    }

    /**
     * Update the given verified user's profile information.
     *
     * @param  mixed  $user
     * @param  array  $input
     * @return void
     */
    protected function updateVerifiedUser($user, array $input)
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
