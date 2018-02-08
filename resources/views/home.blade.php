@extends('layouts.app')

@section('content')
<section class="section">
  <div class="container">
    <div class="column is-half is-offset-3">
      <h1 class="title">Welcome to Drive App</h1>
      <h2 class="subtitle"></h2>Please login to start your journey</h2>
      @include('_includes.login-form')
    </div>
  </div>
</section>
@endsection
