@extends('template.template')

@section('title') Crowdie Registration - Profile Information @stop

@section('header_scripts')
	
	<!-- HEADER SCRIPT FOR REGISTER CROWDIE -->
	<!-- CSS -->
	<link rel="stylesheet" href="bootswatch/3.1.1/simplex/bootstrap.min.css">
	<link rel="stylesheet" href="sign_up/style.css">
	
@stop

@section('body_content')

	<div ng-app="formApp">
		<!-- views will be injected here -->
		<div class="container">
			<div ui-view></div>
		</div>
	</div>

@stop

@section('footer_js')
<!-- Angular files -->
<script src="angular/ajax/libs/angularjs/1.2.16/angular.min.js"></script>
<!-- Angular Routing -->
<script src="angular/ajax/libs/angular-ui-router/0.2.10/angular-ui-router.min.js"></script>
<!-- Angular animate -->
<script src="angular/ajax/libs/angularjs/1.2.16/angular-animate.min.js"></script>

<!-- Add the masking angular UI -->
<script src="angular/ui.utils/ui-utils-ieshiv.min.js"></script>
<script src="angular/ui.utils/ui-utils.min.js"></script>
<!-- Angular bootstrap -->
<script src="angular/ui.bootstrap/ui-bootstrap-tpls-0.12.0.js"></script>
<!-- JS -->
<!-- load angular, nganimate, and ui-router -->
<script src="sign_up/app.js"></script>

@stop