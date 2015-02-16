@extends('template.template')

@section('title') Crowdie Registration - Profile Information @stop

@section('header_scripts')
	
	<!-- HEADER SCRIPT FOR REGISTER CROWDIE -->
	<!-- CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootswatch/3.1.1/simplex/bootstrap.min.css">
	<link rel="stylesheet" href="sign_up/style.css">
	
	<!-- JS -->
	<!-- load angular, nganimate, and ui-router -->
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.16/angular-animate.min.js"></script>
	<script src="sign_up/app.js"></script>
@stop

@section('body_content')

	<div ng-app="formApp">
		<!-- views will be injected here -->
		<div class="container">
			<div ui-view></div>
		</div>
	</div>

@stop