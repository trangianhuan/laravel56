<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
  <div id="app">
      <main-app></main-app>
  </div>
  <script src="{{ asset('js/app-admin.js') }}"></script>

</body>
</html>