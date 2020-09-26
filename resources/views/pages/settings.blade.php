@extends('layouts.main')
@section('title', 'Settings')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">
  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Settings
    </h1>
  </div>
  
  <!-- Content Row -->
  
  <form method="POST" action="{{ route('password-update') }}">
    @csrf
    <div class="form-group">
      <label for="oldpassword" class="name">{{ __('Old Password') }}</label>
      <input type="password" class="form-control @error('oldpassword') is-invalid @enderror" id="oldpassword" name="oldpassword" required autocomplete="oldpassword">
      @if(session('error'))
      <small id="oldpassword" class="form-text text-danger">Maaf ! {{ session('error') }}</small>
      @endif
      @if ($errors->has('oldpassword'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('oldpassword') }}</strong>
      </span>
      @endif
      
    </div>
    <div class="form-group">
      <label for="password" class="name">{{ __('New Password') }}</label>
      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="new-password">
      @error('password')
      <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
    <div class="form-group">
      <label for="password-confirm" class="name">{{ __('Confirm Password') }}</label>
      <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
    </div>
    <button type="submit" class="btn btn-danger">{{ __('Change Password') }}</button>
  </form>
  
</div>
  
  
  
  @endsection