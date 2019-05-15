<html>
<head>
	<title>Land Designs</title>
	<meta name="keywords" content="Remco Land">
	<meta name="description" content="Looking for a new design for your website, a new trailer for your YouTube channel, or an instagram post design? Request your design now on Land Designs">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	<meta name="theme-color" content="#FFFFFF" />	<!-- Import my own Stylesheet -->
	<link href="css/cyclingland.css" rel="stylesheet">
	<link href="css/land-designs.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/timeline.css"> <!-- Resource style -->
	<link href="https://afeld.github.io/emoji-css/emoji.css" rel="stylesheet">

		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<header>
	<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
	  <a class="navbar-brand" href="#">
        <img src="Logo_Vierkant.png" width="55" height="55" alt="Logo">
      </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav mr-auto ">
		  <li class="nav-item">
			<a class="nav-link" href="index.html">Home</a>
		  </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  Portfolio
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
			  <a class="dropdown-item" href="portfolio.html">Overview</a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="/portfolio/intro.html">Intros &amp; Outros</a>
			  <a class="dropdown-item" href="/portfolio/graphics.html">Banners &amp; Avatars</a>
			  <a class="dropdown-item" href="/portfolio/thumbnail.html">Thumbnails</a>
				<a class="dropdown-item" href="/portfolio/trailer.html">Trailers</a>
				<a class="dropdown-item" href="/portfolio/social.html">Social Posts</a>
			  <div class="dropdown-divider"></div>
			  <a class="dropdown-item" href="/portfolio/vlogbattle.html">Vlogbattle Breda</a>
			  <a class="dropdown-item" href="mosweb">MOS</a>
			</div>
		  </li>
			<!-- Google Search -->	
			<script>
  (function() {
    var cx = '004084777620002307613:qznm5a3yrli';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:searchbox-only resultsUrl="search"></gcse:searchbox-only>
		</ul>
	  </div>
	</nav>
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