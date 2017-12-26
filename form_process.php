<html>
<head>
	<title>CyclingLand</title>
	<meta name="keywords" content="Lemo, Personal Assistant, Change Log, Android">
	<meta name="description" content="All projects made by Remco Land, change log of Lemo Assistant, HTML tests and more">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<!-- Import my own Stylesheet -->
		<link href="css/cyclingland.css" rel="stylesheet">
	<!-- Import Loader -->
		<link href="css/loader.css" rel="stylesheet">
	<!-- Import Google Icon Font -->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Import materialize.css -->
		<link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
	<!-- Import Animations -->
		<link rel="stylesheet" href="css/animate.min.css">
	<!-- Smooth scroll -->
		<script src="https://cyclingland.github.io/dist/js/smooth-scroll.js"></script>
	<script src="https://cyclingland.github.io/js/smooth_link.js"></script>
	<!-- Navbar -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/materialize.js"> </script>
		<script>
		$( document ).ready(function(){
			$(".button-collapse").sideNav();
			})
		</script>
		<script>
		$(document).ready(function(){
			$('.parallax').parallax();
			});
		</script> 
<!-- Start SnowScript -->
	<script type="text/javascript" src="js/snowstorm.js"></script>
<script type="text/javascript">
snowStorm.snowColor = '#FFFFFF'; // blue-ish snow!?
snowStorm.flakesMaxActive = 96;  // show more snow on screen at once
snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
</script>

<!-- End SnowScript-->
</head>
	<!-- Navbar -->
<header>
    <div class="navbar-fixed" id="top">
        <nav>
            <div class="nav-wrapper" style="background-color:dodgerblue;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);"> <a href="#top" class="brand-logo center"><img src="Logo CyclingLand(transparant).png" alt="Logo Cyclingland" style="width:65px;height:auto"></a>
                <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
                <ul class="right hide-on-med-and-down">
                    <li><a class="waves-effect waves-light" href="#intro">Intro</a></li>
          			<li><a class="waves-effect waves-light" href="#about">Over mij</a></li>
         			<li><a class="waves-effect waves-light" href="youtube.html">YouTube</a></li>
                </ul>
            </div>
        </nav>
    </div>
   <!-- Move the sidenav outside of .navbar-fixed -->
    <ul class="side-nav" id="mobile-demo">
        <li><a href="#intro">Intro</a></li>
        <li><a href="#about">Over mij</a></li>
        <li><a href="youtube.html">YouTube</a></li>
    </ul>
</header>
<body>
<?php

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = 'lemoassistant@gmail.com';
$subject = 'Nieuw message from contact form';
	
mail ($to, $subject, $message, "From: " . $first_name . $last_name);
echo "The message has been sent";

?>
</body>