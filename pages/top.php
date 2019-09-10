<?php 
  session_start(); 
  $siteLink = "/YesAcupunctureClinic/";
  //$siteLink = "/";
  $language = "en";
  if (isset($_COOKIE["language"])){
    $language = $_COOKIE['language'];
    //echo "<script>alert('$language')</script>";
  }
  
?>

<!DOCTYPE html>
<html lang="kr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Yes Acupuncture Clinic</title>

  <!-- css -->
  <link href="<?=$siteLink?>css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?=$siteLink?>fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link href="<?=$siteLink?>plugins/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css">
  <link href="<?=$siteLink?>css/nivo-lightbox.css" rel="stylesheet" />
  <link href="<?=$siteLink?>css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="<?=$siteLink?>css/owl.carousel.css" rel="stylesheet" media="screen" />
  <link href="<?=$siteLink?>css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="<?=$siteLink?>css/animate.css" rel="stylesheet" />
  <link href="<?=$siteLink?>css/style.css" rel="stylesheet">
  <link href="<?=$siteLink?>img/yes_favicon.ico" rel="shortcut icon">

  <!-- template skin -->
  <link id="t-colors" href="<?=$siteLink?>css/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">


  <div id="wrapper">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
      <div class="top-area">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-md-6">
              <p class="bold text-left">Call or text us <a href="tel:+64 021 686 354" style="color:#ffffff;"> 021 686 354</a></p>
            </div>
            <div class="col-sm-6 col-md-6 text-right">
        			<div class="btn-group" id="langDropdown">
        					
                  <select id="langDropdown" class="form-control" style="width:100px;color:#000000;background-color:#f1f1f1;font-weight:bold;">
                    <option value="en">English</option>
                    <option value="kr">Korean</option>
                  </select>
      				</div>
              <input type="button" id="btnLogin" class="btn btn-primary" value="Login" onclick="goLogin();"/>
              <a href="<?=$siteLink?>management/booking_list.php" id="btnAdmin" target="_blank" class="btn small btn-info" style="display: none;">Admin site</a>
              <input type="button" id="btnLogout" class="btn btn-primary" style="display: none;" value="Logout" onclick="goLogout();"/>
            </div>
          </div>
        </div>
      </div>
      <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
			       <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="<?=$siteLink?>index.php">
            <img id="logo" src="<?=$siteLink?>img/logo_en.jpg" alt="Yes Acupuncture logo" height="40" />
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=$siteLink?>index.php#intro">Home</a></li>
            <li><a href="<?=$siteLink?>index.php#callaction">Service</a></li>
            <li><a href="<?=$siteLink?>index.php#doctor">Staff</a></li>
            <li><a href="<?=$siteLink?>index.php#contactus">Contact Us</a></li>
            <li><a href="<?=$siteLink?>index.php#pricing">Price</a></li>
            <li><a href="<?=$siteLink?>pages/make_appointment.php">Make an appointment</a></li>
            <!--
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>More <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="index.html">Home CTA</a></li>
                <li><a href="index-form.html">Home Form</a></li>
                <li><a href="index-video.html">Home video</a></li>
              </ul>
            </li>
          -->
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
    </nav>