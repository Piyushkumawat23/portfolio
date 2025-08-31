@extends('layouts.guest')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
      <div class="card card-warning card-outline shadow-sm">
        <div class="card-header text-center">
          <h4 class="card-title mb-0">Forgot Password</h4>
        </div>

        <div class="card-body">
          <p class="text-muted mb-4">
            Forgot your password? No problem. Just enter your email address and we’ll send you a password reset link.
          </p>

          {{-- Session Status --}}
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif

          <form method="POST" action="{{ route('password.email') }}">
            @csrf

            {{-- Email --}}
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input id="email"
                     type="email"
                     name="email"
                     value="{{ old('email') }}"
                     required autofocus
                     class="form-control @error('email') is-invalid @enderror">
              @error('email')
                <span class="invalid-feedback d-block"><strong>{{ $message }}</strong></span>
              @enderror
            </div>

            <div class="d-flex justify-content-end">
              <button type="submit" class="btn btn-warning">
                Send Reset Link
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
