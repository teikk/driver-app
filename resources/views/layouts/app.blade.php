<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>@yield('title','Drive App')</title>
  <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
  @yield('styles')
</head>
<body>
  @include('_includes.navbar')

  @yield('content')

  <script src="{{asset('js/app.js')}}"></script>
  @yield('scripts')
</body>
</html>