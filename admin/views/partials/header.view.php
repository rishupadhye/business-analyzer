
<!DOCTYPE html>
<head>

<!-- Basic Page Needs
================================================== -->
<title>BAnalyzer Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/main.css" id="colors">

</head>

<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->
<header id="header-container" class="fixed fullwidth dashboard">

	<!-- Header -->
	<div id="header" class="not-sticky">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="images/logo.png" alt=""></a>
					<a href="index.html" class="dashboard-logo"><img src="images/logo2.png" alt=""></a>
				</div>

				<!-- Mobile Navigation -->
				<div class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation" class="style-1">
					<ul id="responsive">

						
					</ul>
				</nav>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->

			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Header Widget -->
				<div class="header-widget">
					
					<!-- User Menu -->
					<div class="user-menu">

						<!-- <ul>
							<li><a href="dashboard.html"><i class="sl sl-icon-settings"></i> Dashboard</a></li>
							<li><a href="dashboard-messages.html"><i class="sl sl-icon-envelope-open"></i> Messages</a></li>
							<li><a href="dashboard-bookings.html"><i class="fa fa-calendar-check-o"></i> Bookings</a></li>
							<li><a href="index.html"><i class="sl sl-icon-power"></i> Logout</a></li>
						</ul> -->
					</div>

					<a href="addproperty.php" class="button border with-icon">Add Property <i class="fa fa-plus"></i></a>
				</div>
				<!-- Header Widget / End -->
			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->


<!-- Dashboard -->
<div id="dashboard">

	<!-- Navigation
	================================================== -->

	<!-- Responsive Navigation Trigger -->
	<a href="#" class="dashboard-responsive-nav-trigger"><i class="fa fa-reorder"></i> Dashboard Navigation</a>

	<div class="dashboard-nav">
		<div class="dashboard-nav-inner">

			<ul data-submenu-title="Main">
				<li class="active"><a href="index.php"><i class="fa fa-th"></i> Dashboard</a></li>
				<li><a href="listings.php"><i class="fa fa-home"></i> My Properties</a></li>
				<li><a href="enquiries.php"><i class="fa fa-comments"></i> Enquiries </a></li>
					<li><a href="analysis.php"><i class="fa fa-line-chart"></i> Analysis </a></li>	
			<!--
				<ul data-submenu-title="Listings">		
				<li class="active"><a><i class="sl sl-icon-layers"></i> My Listings</a>
					<ul>
						<li><a href="listings.php">On-Going projects <span class="nav-tag green">6</span></a></li>
						<li><a href="listings.php">Completed projects  <span class="nav-tag yellow">1</span></a></li>
						<li><a href="listings.php">All <span class="nav-tag red">2</span></a></li>
					</ul>	
			
			</ul>
			-->
		

			<ul data-submenu-title="Account">
				<!--<li><a href="dashboard-my-profile.html"><i class="fa fa-cog"></i> Settings</a></li>-->
				<li><a href="logout.php"><i class="fa fa-sign-out"></i> Logout</a></li>
			</ul>
			
		</div>
	</div>
	<!-- Navigation / End -->


	<!-- Content
	================================================== -->
	<div class="dashboard-content">