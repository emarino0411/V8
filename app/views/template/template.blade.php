<!DOCTYPE html>
<html lang="en">
  
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes"> 

	<link href="admin_template/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="admin_template/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" />
	
	<link href="admin_template/css/font-awesome.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">

	<link href="admin_template/css/style.css" rel="stylesheet" type="text/css">
	<link href="admin_template/css/pages/signin.css" rel="stylesheet" type="text/css">

	<link href="global_style.css" rel="stylesheet" type="text/css">
	@yield('header_scripts')

</head>

<body>
	<div class="navbar navbar-fixed-top">	
		<% $header %> <!-- Web Header -->	

	</div> <!-- /navbar -->


	<div class="container">
		@yield('body_content')
	</div>
<!-- Admin jquery / js  -->
<script src="admin_template/js/jquery-1.7.2.min.js"></script>
<script src="admin_template/js/bootstrap.js"></script>


@yield('footer_js')

</body>

 </html>
