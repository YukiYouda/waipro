<x-jet-form-section submit="updateProfileInformation">
    <x-slot name="title">
        {{ __('Profile Information') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your account\'s profile information and email address.') }}
    </x-slot>

    <x-slot name="form">
        <!-- Profile Photo -->
        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
            <div x-data="{photoName: null, photoPreview: null}" class="col-span-6 sm:col-span-4">
                <!-- Profile Photo File Input -->
                <input type="file" class="hidden"
                            wire:model="photo"
                            x-ref="photo"
                            x-on:change="
                                    photoName = $refs.photo.files[0].name;
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photoPreview = e.target.result;
                                    };
                                    reader.readAsDataURL($refs.photo.files[0]);
                            " />

                <x-jet-label for="photo" value="{{ __('Photo') }}" />

                <!-- Current Profile Photo -->
                <div class="mt-2" x-show="! photoPreview">
                    <img src="{{ $this->user->profile_photo_url }}" alt="{{ $this->user->name }}" class="rounded-full h-20 w-20 object-cover">
                </div>

                <!-- New Profile Photo Preview -->
                <div class="mt-2" x-show="photoPreview">
                    <span class="block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center"
                          x-bind:style="'background-image: url(\'' + photoPreview + '\');'">
                    </span>
                </div>

                <x-jet-secondary-button class="mt-2 mr-2" type="button" x-on:click.prevent="$refs.photo.click()">
                    {{ __('Select A New Photo') }}
                </x-jet-secondary-button>

                @if ($this->user->profile_photo_path)
                    <x-jet-secondary-button type="button" class="mt-2" wire:click="deleteProfilePhoto">
                        {{ __('Remove Photo') }}
                    </x-jet-secondary-button>
                @endif

                <x-jet-input-error for="photo" class="mt-2" />
            </div>
        @endif

        <!-- Name -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="name" value="{{ __('Name') }}" />
            <x-jet-input id="name" type="text" class="mt-1 block w-full" wire:model.defer="state.name" autocomplete="name" />
            <x-jet-input-error for="name" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="email" value="{{ __('Email') }}" />
            <x-jet-input id="email" type="email" class="mt-1 block w-full" wire:model.defer="state.email" />
            <x-jet-input-error for="email" class="mt-2" />
        </div>

        <!-- skill -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="skill" value="{{ __('スキル') }}" />
            <x-jet-input id="skill" type="skill" class="mt-1 block w-full" wire:model.defer="state.skill" />
            <x-jet-input-error for="skill" class="mt-2" />
        </div>

        <!-- career -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="career" value="{{ __('経歴') }}" />
            <x-jet-input id="carrer" type="carrer" class="mt-1 block w-full" wire:model.defer="state.career" />
            <x-jet-input-error for="career" class="mt-2" />
        </div>

        <!-- twitter_account -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="twitter_account" value="{{ __('twitterアカウント') }}" />
            <x-jet-input id="twitter_account" type="twitter_account" class="mt-1 block w-full" wire:model.defer="state.twitter_account" />
            <x-jet-input-error for="twitter_account" class="mt-2" />
        </div>

        <!-- facebook_account -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="facebook_account" value="{{ __('facebookアカウント') }}" />
            <x-jet-input id="facebook_account" type="facebook_account" class="mt-1 block w-full" wire:model.defer="state.facebook_account" />
            <x-jet-input-error for="facebook_account" class="mt-2" />
        </div>

        <!-- instagram_account -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="instagram_account" value="{{ __('instagramアカウント') }}" />
            <x-jet-input id="instagram_account" type="instagram_account" class="mt-1 block w-full" wire:model.defer="state.instagram_account" />
            <x-jet-input-error for="instagram_account" class="mt-2" />
        </div>

        <!-- qiita_account -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="qiita_account" value="{{ __('qiitaアカウント') }}" />
            <x-jet-input id="qiita_account" type="qiita_account" class="mt-1 block w-full" wire:model.defer="state.qiita_account" />
            <x-jet-input-error for="qiita_account" class="mt-2" />
        </div>

        <!-- github_account -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="github_account" value="{{ __('githubアカウント') }}" />
            <x-jet-input id="github_account" type="github_account" class="mt-1 block w-full" wire:model.defer="state.github_account" />
            <x-jet-input-error for="github_account" class="mt-2" />
        </div>

        <!-- Profile -->
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="self_pr" value="{{ __('自己PR') }}" />
            <textarea name="self_pr" id="self_pr" cols="30" rows="5" class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm block mt-1 w-full" required  wire:model.defer="state.self_pr" ></textarea>
            <x-jet-input-error for="self_pr" class="mt-2" />
        </div>

    </x-slot>

    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button wire:loading.attr="disabled" wire:target="photo">
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>
