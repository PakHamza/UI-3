<!doctype html>
<html class="no-js" lang="en">

<head>

<!--
<link rel="stylesheet" type="text/css" media="all" href="css/app.css">
-->


<link rel="stylesheet" type="text/css" media="screen" href="css/report.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/rbc.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/waterfall.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/filmstrip.css">





    <script type="text/javascript" src="css/jquery.js"></script>




<style>
/* ADD Check CSS */

body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 90%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #63028F;
    color: white;
    padding: 10px 18px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 8%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #63028F;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}




/* EDIT DELETE DROP DOWN CSS */
.dropbtn {
  background-color: #fff;
  color: white;
  padding: 2px;
  font-size: 14px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 120px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 4px 4px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #fff;}
</style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Tool: Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css2/bootstrap.min.css">
	
	<link href="css2/app.css" rel="stylesheet">

    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css2/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css2/owl.carousel.css">
    <link rel="stylesheet" href="css2/owl.theme.css">
    <link rel="stylesheet" href="css2/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css2/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css2/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css2/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css2/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css2/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css2/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css2/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css2/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
   
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css2/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js2/vendor/modernizr-2.8.3.min.js"></script>
	
	 <!-- ADD CHECK JS  -->
	<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
	
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                <strong><img src="img/logo/logosn.png" alt="" /></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        
      <li class="active"> <a class="has-arrow" href="#"> <i class="fa big-icon fa-calendar icon-wrap"></i> 
        <span class="mini-click-non">Monitoring</span> </a> 
        <ul class="submenu-angle" aria-expanded="true">
                                <li><a title="Dashboard v.1" href="#"><i class="fa fa-rocket sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Page Speed</span></a></li>
                                <li><a title="Dashboard v.2" href="#"><i class="fa fa-users sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Visitors Insight (RUM)</span></a></li>
                                <li><a title="Dashboard v.3" href="#"><i class="fa fa-cube sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Pixel Detection</span></a></li>
                                <li><a title="Product List" href="#"><i class="fa fa-arrows sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Ping Service</span></a></li>
                                <li><a title="Product Edit" href="#"><i class="fa fa-file-code-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Front-End Errors</span></a></li>
                                <li><a title="Product Detail" href="#"><i class="fa fa-gift sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Campaignig</span></a></li>
                                <li><a title="Product Cart" href="#"><i class="fa fa-folder-open sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Checkout Availability</span></a></li>
                                <li><a title="Product Payment" href="#"><i class="fa fa-suitcase sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Shipping Methods </span></a></li>
                                <li><a title="Analytics" href="#"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Payment Gateway </span></a></li>
                                
                            </ul>
                        </li>
						
						<li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-bell icon-wrap"></i> 
        <span class="mini-click-non">Teams</span></a> 
        <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="#"><i class="fa fa-plus-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Add Teams</span></a></li>
                                <li><a title="Data Maps" href="#"><i class="fa fa-retweet sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Team List</span></a></li>
                            </ul>
                        </li>
						
						
                        
      <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-cogs icon-wrap"></i> 
        <span class="mini-click-non">3rd-Party Integ</span></a> 
        <ul class="submenu-angle" aria-expanded="false">
                                
                            </ul>
                        </li>
						
						
                        
      <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-bell icon-wrap"></i> 
        <span class="mini-click-non">Alerts</span></a> 
        <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="Google Map" href="#"><i class="fa fa-plus-circle sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Add Alerts</span></a></li>
                                <li><a title="Data Maps" href="#"><i class="fa fa-retweet sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Manage Alerts</span></a></li>
                               
                                
                            </ul>
                        </li>
                        
      <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa big-icon fa-bar-chart icon-wrap"></i> 
        <span class="mini-click-non">Reports</span></a> 
        <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="File Manager" href="#"><i class="fa fa-line-chart sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Uptime Reports</span></a></li>
                                <li><a title="Blog" href="#"><i class="fa fa-building sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Page Speed Report</span></a></li>
                                <li><a title="Blog Details" href="#"><i class="fa fa-database sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Database Transactions</span></a></li>
                                <li><a title="404 Page" href="#"><i class="fa fa-check-square-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Checkout Errors</span></a></li>
                                <li><a title="500 Page" href="#"><i class="fa fa-hospital-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Site Down Errors</span></a></li>
  								<li><a title="500 Page" href="#"><i class="fa fa-building-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Site Down duration</span></a></li>
  								<li><a title="500 Page" href="#"><i class="fa fa-file-text-o sub-icon-mg" aria-hidden="true"></i> <span class="mini-sub-pro">Count of Outrages</span></a></li>
                            </ul>
                        </li>
                        
     
                           
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="fa fa-bars"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="index.php" class="nav-link">Dashboard</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Monitoring</a>
                                                </li>
												 <li class="nav-item"><a href="editteam.php" class="nav-link">Teams</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Third-Party Integration</a>
                                                </li>
                                                <li class="nav-item"><a href="#" class="nav-link">Alerts</a>
                                                </li>
												<li class="nav-item"><a href="#" class="nav-link">Reports</a>
                                                </li>
											
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                           
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Experience Monitoring <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="#">Page Speed</a>
                                                </li>
                                              
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#others" href="#">Third-Party Integrations <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                          
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Alerts<span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Add Alerts</a>
                                                </li>
                                                <li><a href="data-maps.html">Manage Alerts</a>
                                                </li>
                                          
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Reports <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Uptime Reports</a>
                                                </li>
                                                <li><a href="line-charts.html">Page Speed Report</a>
                                                </li>
                                                <li><a href="area-charts.html">Database Transactions</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Checkout Errors</a>
                                                </li>
                                                <li><a href="c3.html">Site Down Errors</a>
                                                </li>
                                                <li><a href="sparkline.html">Site Down duration</a>
                                                </li>
                                                <li><a href="peity.html">Count of Outrages</a>
                                                </li>
                                            </ul>
                                        </li>
                                     
                                     
                                     
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Contact Us <span class="admin-project-icon adminpro-icon adminpro-down-arrow"></span></a>
                                           
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
			
			
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                       
                    </div>
                </div>
            </div>
        </div>
        <div class="section-admin container-fluid">
            <div class="row admin text-center">
                
      <div class="col-md-12"> 
        <div class="row"> </div>
      </div>
            </div>
        </div>
        
		
		
	
        <div class="traffic-analysis-area">
            <div class="container-fluid">
                <div class="row">
                    
					
					
                    
                </div>
            </div>
        </div>
       
       
        
        <div class="calender-area mg-tb-30">
            <div class="container-fluid">
                <div class="row">
                    
        <div class="col-lg-12"> 
          <div class="calender-inner"> 
		  
		  
            <!-- Main Content goes here -->
			
			
			
			

<div id="rbc-headings-container" class="rbc-headings-container pd-container rbc" align="right">
<a href="#check=5339548" data-check-id="5339548" class="pd-js-editCheckButton pd-button pd-button-small pd-button-flr">Edit check</a>
</div>

<div id="rbc-headings-container" class="rbc-headings-container pd-container rbc">
<h2 style="display:inline-block;">Last 7 days (16 Jul-23 Jul)</h2><br><span style="color:#999;">Compared to previous period (09 Jul-16 Jul)</span>
</div>

<div id="rbc-report-container" class="pd-container pd-container-padded rbc"><div class="pd-rbc-info-items">
    <div class="pd-rbc-grid-3">
            
          <div class="pd-rbc-info-item"> 
            <div class="pd-rbc-info-item-title">Performance grade</div>
            <div class="pd-rbc-info-item-main"> 
              <div class="pd-rbc-info-item-main-perf pd-rbc-perf-grade pd-rbc-perf-grade-B">B</div>
              85<span>/100</span> </div>
            <div class="pd-rbc-info-item-sub">No previous data</div>
          </div>
    </div>

    <div class="pd-rbc-grid-3">
            
          <div class="pd-rbc-info-item"> 
            <div class="pd-rbc-info-item-title">Load time</div>
            <div class="pd-rbc-info-item-main">420<span style="text-transform: uppercase;">ms</span></div>
            <div class="pd-rbc-info-item-sub">No previous data</div>
          </div>
    </div>

    <div class="pd-rbc-grid-3">
            
          <div class="pd-rbc-info-item"> 
            <div class="pd-rbc-info-item-title">Page size</div>
            <div class="pd-rbc-info-item-main">495.01<span>KB</span></div>
            <div class="pd-rbc-info-item-sub">No previous data</div>
          </div>
    </div>

    <div class="pd-rbc-grid-3">
            
          <div class="pd-rbc-info-item"> 
            <div class="pd-rbc-info-item-title">Requests</div>
            <div class="pd-rbc-info-item-main">13<span></span></div>
            <div class="pd-rbc-info-item-sub">No previous data</div>
          </div>
    </div>
</div>











	
	
			
			
		
			
           
			
			
            <!-- Main Content END here -->
			
			
          </div>
        </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    
        <div class="col-lg-12"> 
          <div class="footer-copy-right"> 
            <p>Copyright &copy; 2019 Tool All rights reserved.</p>
          </div>
        </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="js2/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js2/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js2/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js2/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js2/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js2/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js2/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js2/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js2/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js2/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js2/metisMenu/metisMenu.min.js"></script>
    <script src="js2/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js2/morrisjs/raphael-min.js"></script>
    <script src="js2/morrisjs/morris.js"></script>
    <script src="js2/morrisjs/morris-active.js"></script>
    <!-- morrisjs JS
		============================================ -->
    <script src="js2/sparkline/jquery.sparkline.min.js"></script>
    <script src="js2/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js2/calendar/moment.min.js"></script>
    <script src="js2/calendar/fullcalendar.min.js"></script>
    <script src="js2/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js2/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js2/main.js"></script>
</body>

</html>