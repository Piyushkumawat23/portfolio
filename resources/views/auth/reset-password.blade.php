@extends('layouts.guest')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card card-warning card-outline shadow-sm">
        <div class="card-header text-center">
          <h4 class="card-title mb-0">Reset Password</h4>
        </div>

        <div class="card-body">
          <form method="POST" action="{{ route('password.store') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input id="email"
                     type="email"
                     name="email"
                     value="{{ old('email', $request->email) }}"
                     required autofocus autocomplete="username"
                     class="form-control @error('email') is-invalid @enderror">
              @error('email')
                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
              @enderror
            </div>

            <!-- Password -->
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input id="password"
                     type="password"
                     name="password"
                     required autocomplete="new-password"
                     class="form-control @error('password') is-invalid @enderror">
              @error('password')
                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
              @enderror
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
              <label for="password_confirmation" class="form-label">Confirm Password</label>
              <input id="password_confirmation"
                     type="password"
                     name="password_confirmation"
                     required autocomplete="new-password"
                     class="form-control @error('password_confirmation') is-invalid @enderror">
              @error('password_confirmation')
                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
              @enderror
            </div>

            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-warning">
                Reset Password
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
