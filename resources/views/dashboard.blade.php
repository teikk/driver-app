@extends('layouts.dashboard')

@section('content')
  <section class="section">
    <div class="containter">
      <div class="columns is-centered">
        <header class="column is-half">
          <h1 class="title">Welcome {{Auth::user()->nickname}}</h1>
          <p class="subtitle">
            Here you can <a href="#" class="has-text-primary">order a car</a> or <a href="#" class="has-text-primary">become a Driver</a> yourself.
          </p>
        </header>
      </div>
    </div>
  </section>
@endsection