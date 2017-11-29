<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Remove Envato Frame -->
  <script>(top !== self && top.location.replace(self.location.href));</script>

	<meta charset="utf-8">

	<title>Comebuy</title>
	<meta name="description" content="">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


	<!-- Chrome, Firefox OS and Opera -->
	<meta name="theme-color" content="#000">
	<!-- Windows Phone -->
	<meta name="msapplication-navbutton-color" content="#000">
	<!-- iOS Safari -->
	<meta name="apple-mobile-web-app-status-bar-style" content="#000">

	<link rel="icon" type="image/png" href="img/icons/favicon.png" sizes="32x32">
  <link rel="stylesheet" href="Views/lib/css/main.min.css">
  <link rel="stylesheet" href="Views/lib/css/W3/W3.css">
	<link rel="stylesheet" href="Views/lib/css/FA/font-awesome.css">
	<link rel="stylesheet" href="Views/lib/css/home.css">
	<?php 
		if(isset($cart_css))
			echo $cart_css;
		if(isset($list_css))
			echo $list_css;
		if(isset($signin_css))
			echo $signin_css;
		if(isset($signup_css))
			echo $signup_css;
		if(isset($profile_css))
			echo $profile_css;
		if(isset($travelers_css))
			echo $travelers_css;
		if(isset($details_css))
			echo $details_css;
	 ?>


</head>

<body>
    
	<div id="my-page">

		<!-- HEADER -->
		<div id="my-header">