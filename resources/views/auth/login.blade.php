{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.guest')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card card-warning card-outline shadow-sm">
        <div class="card-header text-center">
          <h4 class="card-title mb-0">Login</h4>
        </div>

        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="card-body">

            {{-- Email --}}
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email"
                     class="form-control @error('email') is-invalid @enderror"
                     name="email" id="email"
                     value="{{ old('email') }}" required autofocus autocomplete="username">
              @error('email')
                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
              @enderror
            </div>

            {{-- Password --}}
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password"
                     class="form-control @error('password') is-invalid @enderror"
                     name="password" id="password"
                     required autocomplete="current-password">
              @error('password')
                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
              @enderror
            </div>

            {{-- Remember Me --}}
            <div class="mb-3 form-check">
              <input class="form-check-input" type="checkbox"
                     name="remember" id="remember"
                     {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">Remember me</label>
            </div>
          </div>

          <div class="card-footer d-flex justify-content-between align-items-center">
            <button type="submit" class="btn btn-warning">Log In</button>
            @if (Route::has('password.request'))
              <a class="btn btn-link" href="{{ route('password.request') }}">
                Forgot Password?
              </a>
            @endif
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
