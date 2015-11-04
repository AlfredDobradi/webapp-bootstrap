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
<body layout="column" layout-fill>
    <md-toolbar>
        <div class="md-toolbar-tools">
            <h2>
                <span>Angular Material + Laravel bootstrap</span>
            </h2>
            <span flex></span>
            <md-button class="md-fab" href="https://github.com/AlfredDobradi/webapp-bootstrap">
                <md-icon class="material-icons">favorite</md-icon>
            </md-button>
        </div>
    </md-toolbar>

    @yield('content')

    <script src="{{ elixir('assets/js/vendor.js') }}"></script>
    <script src="{{ elixir('assets/js/app.js') }}"></script>
</body>
</html>