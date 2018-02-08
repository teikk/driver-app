<form method="POST" action="{{ route('login') }}">
  {{ csrf_field() }}

  <div class="field">
    <label for="email" class="label">E-Mail Address</label>

    <div class="control">
      <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}"
        required autofocus> @if ($errors->has('email'))
      <p class="help is-danger">
        <strong>{{ $errors->first('email') }}</strong>
      </p>
      @endif
    </div>
  </div>

  <div class="field">
    <label for="password" class="label">Password</label>

    <div class="control">
      <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" required> @if ($errors->has('password'))
      <p class="help is-danger">
        <strong>{{ $errors->first('password') }}</strong>
      </p>
      @endif
    </div>
  </div>

  <div class="field">
    <label class="checkbox">
      <input type="checkbox" name="remember" {{ old( 'remember') ? 'checked' : '' }}> Remember Me
    </label>
  </div>

  <div class="field is-grouped">
    <div class="control">
      <button type="submit" class="button is-success">
        Login
      </button>
    </div>
    <div class="control">
      <a class="button is-text" href="{{ route('password.request') }}">
        Forgot Your Password?
      </a>
    </div>
  </div>
  <div class="field is-grouped">
    <div class="control">
      Don't have an account yet? <a class="has-text-primary" href="{{route('register')}}">Register now</a>
    </div>
  </div>
</form>