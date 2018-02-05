@extends('layouts.app')

@section('content')
<div class="section">
  <div class="container">
    <h1 class="title">Register</h1>
    <form method="POST" action="{{ route('register') }}">
      {{ csrf_field() }}
      
      <div class="field">
        <label for="nickname" class="label">Nickname</label>
        <div class="control">
          <input id="nickname" type="text" class="input{{$errors->has('nickname') ? ' is-danger' : '' }}" name="nickname" value="{{ old('nickname') }}" required autofocus>
          
          @if ($errors->has('nickname'))
          <p class="help is-danger">
            {{ $errors->first('nickname') }}
          </p>
          @endif
        </div>
      </div>
      <div class="field">
        <label for="first_name" class="label">First name</label>
        <div class="control">
          <input id="first_name" type="text" name="first_name" value="{{old('first_name')}}" class="input{{$errors->has('first_name') ? ' is-danger' : '' }}">
        </div>
        @if($errors->has('first_name'))
        <p class="help is-danger">{{$errors->first('first_name')}}</p>
        @endif
      </div>
      <div class="field">
        <label for="last_name" class="label">Last name</label>
        <div class="control">
          <input id="last_name" type="text" name="last_name" value="{{old('last_name')}}" class="input{{$errors->has('last_name') ? ' is-danger' : '' }}">
        </div>
        @if($errors->has('last_name'))
        <p class="help is-danger">{{$errors->first('last_name')}}</p>
        @endif
      </div>
      <div class="field">
        <label for="email" class="label">E-Mail Address</label>
        
        <div class="control">
          <input id="email" type="email" class="input{{$errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" required>
          
          @if ($errors->has('email'))
          <p class="help is-danger">
            {{ $errors->first('email') }}
          </p>
          @endif
        </div>
      </div>
      
      <div class="field">
        <label for="password" class="label">Password</label>
        
        <div class="control">
          <input id="password" type="password" class="input{{$errors->has('password') ? ' is-danger' : '' }}" name="password" required>
          
          @if ($errors->has('password'))
          <p class="help is-danger">
            {{ $errors->first('password') }}
          </p>
          @endif
        </div>
      </div>
      
      <div class="field">
        <label for="password-confirm" class="label">Confirm Password</label>
        
        <div class="control">
          <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
        </div>
      </div>
      
      <div class="field">
        <div class="control">
          <button type="submit" class="button is-primary">
            Register
          </button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
