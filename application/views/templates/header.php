<!DOCTYPE html>
<html lang="en">
<head id="Head1"><meta charset="utf-8"><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description">
	<meta name="keywords">
	<meta name="author" content="humans.txt">
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/UM.ico" type="image/x-icon">
	
	<title>NANOCAT &amp; Research &amp; Centre</title>

	<!-- Facebook Metadata /-->
	<meta property="fb:page_id"><meta property="og:image"><meta property="og:description"><meta property="og:title">

	<!-- Google+ Metadata /-->
	<meta itemprop="name"><meta itemprop="description"><meta itemprop="image">

    <script src="<?php echo base_url(); ?>assets/js/modernizr-2.6.2.min.js" type="text/javascript"></script>

	<!-- script for I am not robot plugin from google -->
	<script src='https://www.google.com/recaptcha/api.js'></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<meta name="Generator" content="Sitefinity 8.1.5802.0 PU"><link rel="canonical" href="https://www.um.edu.my/about-um/administration/deputy-vc-s-office/research-innovation">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/ie10-viewport-bug-workaround.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/raddropdownlist.css" type="text/css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/custom.css" type="text/css" rel="stylesheet">
	
	<!-- <link href="<?php echo base_url(); ?>assets/css/gumby.css" type="text/css" rel="stylesheet"> -->

	<style type="text/css" media="all">
		.jumbotron {
			background-image: url("<?php echo base_url(); ?>assets/images/banner-academics.jpg");
			background-size: cover;
		}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
	<!-- Updated JavaScript url -->
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.js"></script>
	
	<!-- Updated stylesheet url -->
	<link rel="stylesheet" href="//jonthornton.github.io/jquery-timepicker/jquery.timepicker.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="sub-nav">
				<div class="sf_colsOut subNav-list" data-placeholder-label="Sub-Nav List">
					<div id="SubNav_T25EA5401039_Col00" class="sf_colsIn">
						<div class="sfNavWrp sfNavHorizontalDropDownWrp ">
							<ul id="SubNav_T25EA5401037_ctl00_ctl00_navigationUl" class="sfNavHorizontalDropDown sfNavList nav">
								<li><a href="<?php echo base_url(); ?>booking/equipments">Book Equipments</a></li>
								<?php
									if ($this->session->userdata('rolePermissions') !== '1') { 
								?>
									<li><a href="#">Charges Structure</a></li>
								<?php
									}
									if ($this->session->userdata('rolePermissions') !== '1') {
								?>
										<li><a href="#">Contact</a></li>
								<?php
									}
								?>
								<?php
									if ($this->session->userdata('rolePermissions') !== '1') {
								?>
										<li><a href="#">About</a></li>
								<?php
									}
								?>
								<?php
									if ($this->session->userdata('rolePermissions') === '1') {
								?>
										<li><a href="<?php echo base_url().'admin/maintainUser' ?>">Maintain User</a></li>
								<?php
									}
									if($this->session->userdata('logged_in') /* && $this->session->userdata('rolePermissions') !== '1' */) {
								?>
										<li><a href="<?php echo base_url().'booking/history' ?>">History</a></li>
								<?php
									}
								?>
								<?php
									if($this->session->userdata('logged_in') && $this->session->userdata('rolePermissions') === '1') {
								?>
										<li><a href="<?php echo base_url().'admin/dashboard' ?>">Dashboard</a></li>
								<?php
									}
								?>
							</ul>
						</div>
					</div>
				</div>
				<div class="sf_colsOut search" data-placeholder-label="Search">
					<div id="SubNav_T25EA5401039_Col01" class="sf_colsIn">
						<div id="SubNav_T25EA5401044">
							<style type="text/css">
								.ui-autocomplete-loading {
									background: white right center no-repeat !important;
								}
							</style>
						</div>
					</div>
				</div>
				<div class="sf_colsOut quickApply" data-placeholder-label="Apply Now">
					<div id="SubNav_T25EA5401039_Col02" class="sf_colsIn">
						<?php  
							if(!$this->session->userdata('logged_in')) {
						?>
								<div class="btnApply"><a href="<?php echo base_url(); ?>user/login">Login In</a></div>
						<?php  
							} else {
						?>
								<div class="btnApply"><a href="<?php echo base_url(); ?>user/logout">Log Out</a></div>
						<?php
							}
						?>
					</div>
				</div>
			</div>
		    <nav class="navbar">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo base_url(); ?>/">
						<img src="<?php echo base_url(); ?>assets/images/nano_logo.png">
					</a>
				</div>
		    </nav>
    	</div>
	</header>
