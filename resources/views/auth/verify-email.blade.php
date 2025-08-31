@extends('layouts.guest')

@section('content')
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-6 col-lg-6">
      <div class="card card-warning card-outline shadow-sm">
        <div class="card-header text-center">
          <h4 class="card-title mb-0">Verify Your Email</h4>
        </div>

        <div class="card-body">
          <p class="text-muted mb-4">
            Thanks for signing up! Before getting started, please verify your email address by clicking on the link
            we just emailed to you. <br>
            If you didn’t receive the email, we’ll gladly send you another.
          </p>

          {{-- Success Message --}}
          @if (session('status') == 'verification-link-sent')
            <div class="alert alert-success mb-4">
              A new verification link has been sent to the email address you provided during registration.
            </div>
          @endif

          <div class="d-flex justify-content-between">
            {{-- Resend Verification --}}
            <form method="POST" action="{{ route('verification.send') }}">
              @csrf
              <button type="submit" class="btn btn-warning">
                Resend Verification Email
              </button>
            </form>

            {{-- Logout --}}
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" class="btn btn-outline-secondary">
                Log Out
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
