@extends('layouts.app')

@section('content')
<div class="section">
  <div class="container">
    @if (session('status'))
    <div class="notification is-success">
      {{ session('status') }}
    </div>
    @endif
    
    <h1 class="title">Restore your password</h1>
    <form method="POST" action="{{ route('password.email') }}">
      {{ csrf_field() }}
      
      <div class="field">
        <label for="email" class="label">E-Mail Address</label>
        
        <div class="control">
          <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
          
          @if ($errors->has('email'))
          <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
          </span>
          @endif
        </div>
      </div>
      
      <div class="field">
        <div class="control">
          <button type="submit" class="button is-primary">
            Send Password Reset Link
          </button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
