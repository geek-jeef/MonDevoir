@extends('../layouts/app')

@section('subhead')
  <title>{{ __('Profil') }}</title>
@endsection

@section('subcontent')
  <div class="intro-y flex items-center mt-8">
    <h2 class="text-lg font-medium mr-auto">{{ __('Profil') }}</</h2>
  </div>

  <div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
      @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        @livewire('profile.update-profile-information-form')

        <x-jet-section-border />
      @endif

      @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
          @livewire('profile.update-password-form')
        </div>

        <x-jet-section-border />
      @endif

      @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <div class="mt-10 sm:mt-0">
          @livewire('profile.two-factor-authentication-form')
        </div>

        <x-jet-section-border />
      @endif

      <div class="mt-10 sm:mt-0">
        @livewire('profile.logout-other-browser-sessions-form')
      </div>

      @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        <x-jet-section-border />

        <div class="mt-10 sm:mt-0">
          @livewire('profile.delete-user-form')
        </div>
      @endif
    </div>
  </div>
  
@endsection



{{-- }}
<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Profile') }}
    </h2>
  </x-slot>

  <div>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
      @if (Laravel\Fortify\Features::canUpdateProfileInformation())
        @livewire('profile.update-profile-information-form')

        <x-jet-section-border />
      @endif

      @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
        <div class="mt-10 sm:mt-0">
          @livewire('profile.update-password-form')
        </div>

        <x-jet-section-border />
      @endif

      @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
        <div class="mt-10 sm:mt-0">
          @livewire('profile.two-factor-authentication-form')
        </div>

        <x-jet-section-border />
      @endif

      <div class="mt-10 sm:mt-0">
        @livewire('profile.logout-other-browser-sessions-form')
      </div>

      @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
        <x-jet-section-border />

        <div class="mt-10 sm:mt-0">
          @livewire('profile.delete-user-form')
        </div>
      @endif
    </div>
  </div>
</x-app-layout>
--}}