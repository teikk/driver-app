<nav class="navbar is-dark" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="{{route('home')}}">
      Drive
    </a>

    <button class="button navbar-burger">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <div class="navbar-menu">
    <div class="navbar-start">
      @yield('navbar.start')
    </div>
    <div class="navbar-end">
      @yield('navbar.end')
    </div>
</nav>