@extends('layouts.master')

@section('content')
    <md-content ng-controller="WelcomeController" layout-padding layout="column">
        <h2 ng-cloak>@{{ welcomeHeader }}</h2>
        <p>
            This is just a simple welcome page without any purpose.
        </p>
    </md-content>
@stop