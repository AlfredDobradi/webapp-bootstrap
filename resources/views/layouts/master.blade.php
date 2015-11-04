<!doctype html>
<html lang="en" ng-app="bootstrap">
<head>
<meta charset="UTF-8">
    <title>Angular Material + Laravel webapp bootstrap</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ elixir('assets/css/vendor.css') }}">
    <link rel="stylesheet" href="{{ elixir('assets/css/app.css') }}">
</head>
<body>
    @yield('content')

    <script src="{{ elixir('assets/js/vendor.js') }}"></script>
    <script src="{{ elixir('assets/js/app.js') }}"></script>
</body>
</html>