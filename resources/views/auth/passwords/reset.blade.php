@extends('layouts.app')

@section('content')
<div class="section">
  <div class="container">
    <form method="POST" action="{{ route('password.request') }}">
      {{ csrf_field() }}
      
      <input type="hidden" name="token" value="{{ $token }}">
      
      <div class="field">
        <label for="email" class="label">E-Mail Address</label>
        
        <div class="control">
          <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ $email or old('email') }}" required autofocus>
          
          @if ($errors->has('email'))
          <p class="help is-danger">
            <strong>{{ $errors->first('email') }}</strong>
          </p>
          @endif
        </div>
      </div>
      
      <div class="field">
        <label for="password" class="label">Password</label>
        
        <div class="control">
          <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required>
          
          @if ($errors->has('password'))
          <p class="help is-danger">
            <strong>{{ $errors->first('password') }}</strong>
          </p>
          @endif
        </div>
      </div>
      
      <div class="field">
        <label for="password-confirm" class="label">Confirm Password</label>
        <div class="control">
          <input id="password-confirm" type="password" class="input{{ $errors->has('password_confirmation') ? ' is-danger' : '' }}" name="password_confirmation" required>
          
          @if ($errors->has('password_confirmation'))
          <p class="help is-danger">
            <strong>{{ $errors->first('password_confirmation') }}</strong>
          </p>
          @endif
        </div>
      </div>
      
      <div class="field">
        <div class="control">
          <button type="submit" class="button is-primary">
            Reset Password
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
