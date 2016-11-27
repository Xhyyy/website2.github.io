<?php include_once("database.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Online English-learning platform that connects Chinese students with qualified english teachers.">
    <meta name="author" content="">

    <title>Xhyrhylle</title>
    <link href="css/jquery.lightbox-0.5.css" type="text/css" media="screen" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full-slider.css?<?php echo(time()); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <div id="wrapper">
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
        <div class="container-inner">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <div class="logo-holder pull-left">
            <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Xhy Logo" /></a>
            </div>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li>
                      <a href="index.php">Home</a>
                  </li>
                  <li>
                      <a href="categories.php">Categories</a>
                  </li>
                  <li>
                      <a href="howto.php">How To's</a>
                  </li>
                  <li>
                      <a href="gallery.php">Gallery</a>
                  </li>
              </ul>
          </div>
          <!-- /.navbar-collapse -->
        </div><!-- /.container-inner -->
        </div>
        <!-- /.container -->
    </nav>

    <div id="banner-holder" class="clearfix">
			<div class="container banner-holder-inner">
      <!-- Full Page Image Background Carousel Header -->
      <header id="myCarousel" class="carousel slide">
          <!-- Indicators -->
          <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
  
          <!-- Wrapper for Slides -->
          <div class="carousel-inner">
              <div class="item active">
                  <!-- Set the first background image using inline CSS below. -->
                  <div class="fill" style="background-image:url(images/banner1.png);"></div>
                  <div class="carousel-caption">
                      <h2></h2>
                  </div>
              </div>
              <div class="item">
                  <!-- Set the second background image using inline CSS below. -->
                  <div class="fill" style="background-image:url(images/banner2.png);"></div>
                  <div class="carousel-caption">
                      <h2></h2>
                  </div>
              </div>
              <div class="item">
                  <!-- Set the third background image using inline CSS below. -->
                  <div class="fill" style="background-image:url(images/banner3.png);"></div>
                  <div class="carousel-caption">
                      <h2></h2>
                  </div>
              </div>
          </div>
  
          <!-- Controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="icon-prev"></span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="icon-next"></span>
          </a>
      </header>
      </div>
		</div>
