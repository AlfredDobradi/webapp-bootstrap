@extends('layouts.master')

@section('content')
    <md-content ng-controller="WelcomeController" layout-padding layout="column" ng-cloak>
        <h2 ng-cloak>@{{ welcomeHeader }}</h2>
        <p>
            This is just a simple welcome page without any purpose.
        </p>
        <p>
            <md-button class="md-raised" target="_blank" href="https://github.com/AlfredDobradi/webapp-bootstrap">
                <md-icon class="md-accent material-icons">favorite</md-icon>
                Check the project on Github!
            </md-button>
        </p>
    </md-content>
@stop