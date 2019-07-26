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
<div class="report-block-container">
<div id="report-block-load_time" class="report-block report-fullwidth" >
<div class="report-block-header report-header-tight">
<h2 id="load_time-title">Page load time</h2>
              
            <div class="tooltip-container" data-identifier="load_time"> 
              <div class="tooltip-content"> 
                <p><strong>Page load time</strong></p>
              </div>
            </div>
            </div><div id="report-block-load_time-chart"><div id="load_time-chart" class="pd-chart" data-highcharts-chart="0">
                
              <div class="highcharts-container" id="highcharts-0" style="position: relative; overflow: hidden; width: 899px; height: 300px; text-align: left; line-height: normal; z-index: 0; left: 0px; top: 0.5px;"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="899" height="300"><desc>Created 
                with Highcharts 4.0.3</desc><defs><clipPath id="highcharts-1"><rect x="0" y="0" width="827" height="250"></rect></clipPath></defs><rect x="0" y="0" width="899" height="300" strokeWidth="0" fill="rgba(0, 0, 0, 0.0)" class=" highcharts-background"></rect><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 62 9.5 L 889 9.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 62 60.5 L 889 60.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 62 110.5 L 889 110.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 62 160.5 L 889 160.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 62 210.5 L 889 210.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 62 260.5 L 889 260.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series" visibility="visible" zIndex="0.1" transform="translate(62,10) scale(1 1)" clip-path="url(#highcharts-1)"><path fill="rgba(94,183,249,0.25)" d="M 99.04191616766467 213 L 103.9940119760479 102.19999999999999 L 108.94610778443113 206.9 L 113.89820359281437 194.6 L 118.8502994011976 204.1 L 123.80239520958084 204.7 L 128.75449101796406 205.2 L 133.7065868263473 202.7 L 138.65868263473052 209.2 L 143.61077844311376 207.8 L 148.562874251497 203.6 L 153.51497005988023 209 L 158.46706586826346 211.2 L 163.4191616766467 207.8 L 168.37125748502993 203.6 L 173.32335329341316 209.6 L 178.2754491017964 209.9 L 183.22754491017963 205.8 L 188.17964071856287 207.8 L 193.1317365269461 211.4 L 198.08383233532933 210 L 203.03592814371257 203.6 L 207.9880239520958 208.3 L 212.94011976047904 205.9 L 217.89221556886227 185.8 L 222.8443113772455 203.2 L 227.79640718562874 181.5 L 232.74850299401197 208 L 237.7005988023952 193.3 L 242.65269461077844 204.2 L 247.60479041916167 200.7 L 252.5568862275449 208.1 L 257.5089820359281 202.8 L 262.4610778443114 208.1 L 267.4131736526946 206.6 L 272.36526946107784 209.8 L 277.31736526946105 208 L 282.2694610778443 201.8 L 287.2215568862275 207.5 L 292.1736526946108 199.8 L 297.125748502994 207.5 L 302.07784431137725 198.6 L 307.02994011976045 203 L 311.9820359281437 205.9 L 316.9341317365269 212.5 L 321.8862275449102 210.9 L 326.8383233532934 211.3 L 331.79041916167665 213.4 L 336.74251497005986 209 L 341.6946107784431 211.1 L 346.6467065868263 208.3 L 351.5988023952096 209.4 L 356.5508982035928 210.8 L 361.50299401197606 208.8 L 366.45508982035926 214 L 371.4071856287425 213 L 376.35928143712573 209.4 L 381.311377245509 211.2 L 386.2634730538922 206 L 391.21556886227546 208.2 L 396.16766467065867 202.4 L 401.11976047904193 206.2 L 406.07185628742513 206.7 L 411.0239520958084 214.4 L 415.9760479041916 208.8 L 420.92814371257487 205.7 L 425.88023952095807 212.2 L 430.83233532934133 210 L 435.78443113772454 205.2 L 440.73652694610774 208.2 L 445.688622754491 206.6 L 450.6407185628742 209.1 L 455.5928143712575 207.4 L 460.5449101796407 207.8 L 465.49700598802394 143.5 L 470.44910179640715 207.4 L 475.4011976047904 207.2 L 480.3532934131736 206.6 L 485.3053892215569 201.6 L 490.2574850299401 204.4 L 495.20958083832335 193.8 L 500.16167664670655 209 L 505.1137724550898 203.3 L 510.065868263473 208.4 L 515.0179640718562 209.2 L 519.9700598802395 207.2 L 524.9221556886228 208.8 L 529.874251497006 204 L 534.8263473053892 210.4 L 539.7784431137725 198.3 L 544.7305389221557 201.4 L 549.6826347305389 212.1 L 554.6347305389221 208.7 L 559.5868263473054 210 L 564.5389221556886 208.8 L 569.4910179640718 209.9 L 574.443113772455 203.6 L 579.3952095808384 199.6 L 584.3473053892216 207 L 589.2994011976048 211.8 L 594.251497005988 202.5 L 599.2035928143713 208.4 L 604.1556886227545 202.8 L 609.1077844311377 209.4 L 614.0598802395209 208.6 L 619.0119760479042 207.4 L 623.9640718562874 207.4 L 628.9161676646706 200 L 633.8682634730538 206.8 L 638.8203592814372 201.2 L 643.7724550898204 208.2 L 648.7245508982036 206.4 L 653.6766467065868 200.5 L 658.62874251497 197.4 L 663.5808383233533 192.6 L 668.5329341317365 212.2 L 673.4850299401197 208.4 L 678.4371257485029 208.7 L 683.3892215568862 209.2 L 688.3413173652694 207.6 L 693.2934131736527 209.3 L 698.2455089820359 209.7 L 703.1976047904192 204.6 L 708.1497005988024 212.2 L 713.1017964071856 211.6 L 718.0538922155688 207.4 L 723.0059880239521 197.9 L 727.9580838323353 208.7 L 732.9101796407185 209.4 L 737.8622754491017 210.8 L 742.814371257485 211.3 L 747.7664670658683 209.2 L 752.7185628742515 207.8 L 757.6706586826347 204.1 L 762.622754491018 206 L 767.5748502994012 211.6 L 772.5269461077844 209 L 777.4790419161676 212.2 L 782.4311377245509 189.8 L 787.3832335329341 208 L 792.3353293413173 202.9 L 797.2874251497005 203.2 L 802.2395209580839 206.8 L 807.1916167664671 209.6 L 812.1437125748503 207.8 L 817.0958083832335 208.6 L 822.0479041916168 49.29999999999998 L 827 180.39999999999998 L 827 250 L 99.04191616766467 250" zIndex="0"></path><path fill="none" d="M 99.04191616766467 213 L 103.9940119760479 102.19999999999999 L 108.94610778443113 206.9 L 113.89820359281437 194.6 L 118.8502994011976 204.1 L 123.80239520958084 204.7 L 128.75449101796406 205.2 L 133.7065868263473 202.7 L 138.65868263473052 209.2 L 143.61077844311376 207.8 L 148.562874251497 203.6 L 153.51497005988023 209 L 158.46706586826346 211.2 L 163.4191616766467 207.8 L 168.37125748502993 203.6 L 173.32335329341316 209.6 L 178.2754491017964 209.9 L 183.22754491017963 205.8 L 188.17964071856287 207.8 L 193.1317365269461 211.4 L 198.08383233532933 210 L 203.03592814371257 203.6 L 207.9880239520958 208.3 L 212.94011976047904 205.9 L 217.89221556886227 185.8 L 222.8443113772455 203.2 L 227.79640718562874 181.5 L 232.74850299401197 208 L 237.7005988023952 193.3 L 242.65269461077844 204.2 L 247.60479041916167 200.7 L 252.5568862275449 208.1 L 257.5089820359281 202.8 L 262.4610778443114 208.1 L 267.4131736526946 206.6 L 272.36526946107784 209.8 L 277.31736526946105 208 L 282.2694610778443 201.8 L 287.2215568862275 207.5 L 292.1736526946108 199.8 L 297.125748502994 207.5 L 302.07784431137725 198.6 L 307.02994011976045 203 L 311.9820359281437 205.9 L 316.9341317365269 212.5 L 321.8862275449102 210.9 L 326.8383233532934 211.3 L 331.79041916167665 213.4 L 336.74251497005986 209 L 341.6946107784431 211.1 L 346.6467065868263 208.3 L 351.5988023952096 209.4 L 356.5508982035928 210.8 L 361.50299401197606 208.8 L 366.45508982035926 214 L 371.4071856287425 213 L 376.35928143712573 209.4 L 381.311377245509 211.2 L 386.2634730538922 206 L 391.21556886227546 208.2 L 396.16766467065867 202.4 L 401.11976047904193 206.2 L 406.07185628742513 206.7 L 411.0239520958084 214.4 L 415.9760479041916 208.8 L 420.92814371257487 205.7 L 425.88023952095807 212.2 L 430.83233532934133 210 L 435.78443113772454 205.2 L 440.73652694610774 208.2 L 445.688622754491 206.6 L 450.6407185628742 209.1 L 455.5928143712575 207.4 L 460.5449101796407 207.8 L 465.49700598802394 143.5 L 470.44910179640715 207.4 L 475.4011976047904 207.2 L 480.3532934131736 206.6 L 485.3053892215569 201.6 L 490.2574850299401 204.4 L 495.20958083832335 193.8 L 500.16167664670655 209 L 505.1137724550898 203.3 L 510.065868263473 208.4 L 515.0179640718562 209.2 L 519.9700598802395 207.2 L 524.9221556886228 208.8 L 529.874251497006 204 L 534.8263473053892 210.4 L 539.7784431137725 198.3 L 544.7305389221557 201.4 L 549.6826347305389 212.1 L 554.6347305389221 208.7 L 559.5868263473054 210 L 564.5389221556886 208.8 L 569.4910179640718 209.9 L 574.443113772455 203.6 L 579.3952095808384 199.6 L 584.3473053892216 207 L 589.2994011976048 211.8 L 594.251497005988 202.5 L 599.2035928143713 208.4 L 604.1556886227545 202.8 L 609.1077844311377 209.4 L 614.0598802395209 208.6 L 619.0119760479042 207.4 L 623.9640718562874 207.4 L 628.9161676646706 200 L 633.8682634730538 206.8 L 638.8203592814372 201.2 L 643.7724550898204 208.2 L 648.7245508982036 206.4 L 653.6766467065868 200.5 L 658.62874251497 197.4 L 663.5808383233533 192.6 L 668.5329341317365 212.2 L 673.4850299401197 208.4 L 678.4371257485029 208.7 L 683.3892215568862 209.2 L 688.3413173652694 207.6 L 693.2934131736527 209.3 L 698.2455089820359 209.7 L 703.1976047904192 204.6 L 708.1497005988024 212.2 L 713.1017964071856 211.6 L 718.0538922155688 207.4 L 723.0059880239521 197.9 L 727.9580838323353 208.7 L 732.9101796407185 209.4 L 737.8622754491017 210.8 L 742.814371257485 211.3 L 747.7664670658683 209.2 L 752.7185628742515 207.8 L 757.6706586826347 204.1 L 762.622754491018 206 L 767.5748502994012 211.6 L 772.5269461077844 209 L 777.4790419161676 212.2 L 782.4311377245509 189.8 L 787.3832335329341 208 L 792.3353293413173 202.9 L 797.2874251497005 203.2 L 802.2395209580839 206.8 L 807.1916167664671 209.6 L 812.1437125748503 207.8 L 817.0958083832335 208.6 L 822.0479041916168 49.29999999999998 L 827 180.39999999999998" stroke="#5eb7f9" stroke-width="2" zIndex="1" stroke-linejoin="round" stroke-linecap="round"></path><path fill="none" d="M 89.04191616766467 213 L 99.04191616766467 213 L 103.9940119760479 102.19999999999999 L 108.94610778443113 206.9 L 113.89820359281437 194.6 L 118.8502994011976 204.1 L 123.80239520958084 204.7 L 128.75449101796406 205.2 L 133.7065868263473 202.7 L 138.65868263473052 209.2 L 143.61077844311376 207.8 L 148.562874251497 203.6 L 153.51497005988023 209 L 158.46706586826346 211.2 L 163.4191616766467 207.8 L 168.37125748502993 203.6 L 173.32335329341316 209.6 L 178.2754491017964 209.9 L 183.22754491017963 205.8 L 188.17964071856287 207.8 L 193.1317365269461 211.4 L 198.08383233532933 210 L 203.03592814371257 203.6 L 207.9880239520958 208.3 L 212.94011976047904 205.9 L 217.89221556886227 185.8 L 222.8443113772455 203.2 L 227.79640718562874 181.5 L 232.74850299401197 208 L 237.7005988023952 193.3 L 242.65269461077844 204.2 L 247.60479041916167 200.7 L 252.5568862275449 208.1 L 257.5089820359281 202.8 L 262.4610778443114 208.1 L 267.4131736526946 206.6 L 272.36526946107784 209.8 L 277.31736526946105 208 L 282.2694610778443 201.8 L 287.2215568862275 207.5 L 292.1736526946108 199.8 L 297.125748502994 207.5 L 302.07784431137725 198.6 L 307.02994011976045 203 L 311.9820359281437 205.9 L 316.9341317365269 212.5 L 321.8862275449102 210.9 L 326.8383233532934 211.3 L 331.79041916167665 213.4 L 336.74251497005986 209 L 341.6946107784431 211.1 L 346.6467065868263 208.3 L 351.5988023952096 209.4 L 356.5508982035928 210.8 L 361.50299401197606 208.8 L 366.45508982035926 214 L 371.4071856287425 213 L 376.35928143712573 209.4 L 381.311377245509 211.2 L 386.2634730538922 206 L 391.21556886227546 208.2 L 396.16766467065867 202.4 L 401.11976047904193 206.2 L 406.07185628742513 206.7 L 411.0239520958084 214.4 L 415.9760479041916 208.8 L 420.92814371257487 205.7 L 425.88023952095807 212.2 L 430.83233532934133 210 L 435.78443113772454 205.2 L 440.73652694610774 208.2 L 445.688622754491 206.6 L 450.6407185628742 209.1 L 455.5928143712575 207.4 L 460.5449101796407 207.8 L 465.49700598802394 143.5 L 470.44910179640715 207.4 L 475.4011976047904 207.2 L 480.3532934131736 206.6 L 485.3053892215569 201.6 L 490.2574850299401 204.4 L 495.20958083832335 193.8 L 500.16167664670655 209 L 505.1137724550898 203.3 L 510.065868263473 208.4 L 515.0179640718562 209.2 L 519.9700598802395 207.2 L 524.9221556886228 208.8 L 529.874251497006 204 L 534.8263473053892 210.4 L 539.7784431137725 198.3 L 544.7305389221557 201.4 L 549.6826347305389 212.1 L 554.6347305389221 208.7 L 559.5868263473054 210 L 564.5389221556886 208.8 L 569.4910179640718 209.9 L 574.443113772455 203.6 L 579.3952095808384 199.6 L 584.3473053892216 207 L 589.2994011976048 211.8 L 594.251497005988 202.5 L 599.2035928143713 208.4 L 604.1556886227545 202.8 L 609.1077844311377 209.4 L 614.0598802395209 208.6 L 619.0119760479042 207.4 L 623.9640718562874 207.4 L 628.9161676646706 200 L 633.8682634730538 206.8 L 638.8203592814372 201.2 L 643.7724550898204 208.2 L 648.7245508982036 206.4 L 653.6766467065868 200.5 L 658.62874251497 197.4 L 663.5808383233533 192.6 L 668.5329341317365 212.2 L 673.4850299401197 208.4 L 678.4371257485029 208.7 L 683.3892215568862 209.2 L 688.3413173652694 207.6 L 693.2934131736527 209.3 L 698.2455089820359 209.7 L 703.1976047904192 204.6 L 708.1497005988024 212.2 L 713.1017964071856 211.6 L 718.0538922155688 207.4 L 723.0059880239521 197.9 L 727.9580838323353 208.7 L 732.9101796407185 209.4 L 737.8622754491017 210.8 L 742.814371257485 211.3 L 747.7664670658683 209.2 L 752.7185628742515 207.8 L 757.6706586826347 204.1 L 762.622754491018 206 L 767.5748502994012 211.6 L 772.5269461077844 209 L 777.4790419161676 212.2 L 782.4311377245509 189.8 L 787.3832335329341 208 L 792.3353293413173 202.9 L 797.2874251497005 203.2 L 802.2395209580839 206.8 L 807.1916167664671 209.6 L 812.1437125748503 207.8 L 817.0958083832335 208.6 L 822.0479041916168 49.29999999999998 L 827 180.39999999999998 L 837 180.39999999999998" stroke-linejoin="round" visibility="visible" stroke="rgba(192,192,192,0.0001)" stroke-width="22" zIndex="2" class=" highcharts-tracker" style=""></path></g><g class="highcharts-markers highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(62,10) scale(1 1)" style="" clip-path="none"><path fill="#5eb7f9" d="M 827 178.39999999999998 C 829.664 178.39999999999998 829.664 182.39999999999998 827 182.39999999999998 C 824.336 182.39999999999998 824.336 178.39999999999998 827 178.39999999999998 Z"></path><path fill="#5eb7f9" d="M 822 47.29999999999998 C 824.664 47.29999999999998 824.664 51.29999999999998 822 51.29999999999998 C 819.336 51.29999999999998 819.336 47.29999999999998 822 47.29999999999998 Z"></path><path fill="#5eb7f9" d="M 817 206.6 C 819.664 206.6 819.664 210.6 817 210.6 C 814.336 210.6 814.336 206.6 817 206.6 Z"></path><path fill="#5eb7f9" d="M 812 205.8 C 814.664 205.8 814.664 209.8 812 209.8 C 809.336 209.8 809.336 205.8 812 205.8 Z"></path><path fill="#5eb7f9" d="M 807 207.6 C 809.664 207.6 809.664 211.6 807 211.6 C 804.336 211.6 804.336 207.6 807 207.6 Z"></path><path fill="#5eb7f9" d="M 802 204.8 C 804.664 204.8 804.664 208.8 802 208.8 C 799.336 208.8 799.336 204.8 802 204.8 Z"></path><path fill="#5eb7f9" d="M 797 201.2 C 799.664 201.2 799.664 205.2 797 205.2 C 794.336 205.2 794.336 201.2 797 201.2 Z"></path><path fill="#5eb7f9" d="M 792 200.9 C 794.664 200.9 794.664 204.9 792 204.9 C 789.336 204.9 789.336 200.9 792 200.9 Z"></path><path fill="#5eb7f9" d="M 787 206 C 789.664 206 789.664 210 787 210 C 784.336 210 784.336 206 787 206 Z"></path><path fill="#5eb7f9" d="M 782 187.8 C 784.664 187.8 784.664 191.8 782 191.8 C 779.336 191.8 779.336 187.8 782 187.8 Z"></path><path fill="#5eb7f9" d="M 777 210.2 C 779.664 210.2 779.664 214.2 777 214.2 C 774.336 214.2 774.336 210.2 777 210.2 Z"></path><path fill="#5eb7f9" d="M 772 207 C 774.664 207 774.664 211 772 211 C 769.336 211 769.336 207 772 207 Z"></path><path fill="#5eb7f9" d="M 767 209.6 C 769.664 209.6 769.664 213.6 767 213.6 C 764.336 213.6 764.336 209.6 767 209.6 Z"></path><path fill="#5eb7f9" d="M 762 204 C 764.664 204 764.664 208 762 208 C 759.336 208 759.336 204 762 204 Z"></path><path fill="#5eb7f9" d="M 757 202.1 C 759.664 202.1 759.664 206.1 757 206.1 C 754.336 206.1 754.336 202.1 757 202.1 Z"></path><path fill="#5eb7f9" d="M 752 205.8 C 754.664 205.8 754.664 209.8 752 209.8 C 749.336 209.8 749.336 205.8 752 205.8 Z"></path><path fill="#5eb7f9" d="M 747 207.2 C 749.664 207.2 749.664 211.2 747 211.2 C 744.336 211.2 744.336 207.2 747 207.2 Z"></path><path fill="#5eb7f9" d="M 742 209.3 C 744.664 209.3 744.664 213.3 742 213.3 C 739.336 213.3 739.336 209.3 742 209.3 Z"></path><path fill="#5eb7f9" d="M 737 208.8 C 739.664 208.8 739.664 212.8 737 212.8 C 734.336 212.8 734.336 208.8 737 208.8 Z"></path><path fill="#5eb7f9" d="M 732 207.4 C 734.664 207.4 734.664 211.4 732 211.4 C 729.336 211.4 729.336 207.4 732 207.4 Z"></path><path fill="#5eb7f9" d="M 727 206.7 C 729.664 206.7 729.664 210.7 727 210.7 C 724.336 210.7 724.336 206.7 727 206.7 Z"></path><path fill="#5eb7f9" d="M 723 195.9 C 725.664 195.9 725.664 199.9 723 199.9 C 720.336 199.9 720.336 195.9 723 195.9 Z"></path><path fill="#5eb7f9" d="M 718 205.4 C 720.664 205.4 720.664 209.4 718 209.4 C 715.336 209.4 715.336 205.4 718 205.4 Z"></path><path fill="#5eb7f9" d="M 713 209.6 C 715.664 209.6 715.664 213.6 713 213.6 C 710.336 213.6 710.336 209.6 713 209.6 Z"></path><path fill="#5eb7f9" d="M 708 210.2 C 710.664 210.2 710.664 214.2 708 214.2 C 705.336 214.2 705.336 210.2 708 210.2 Z"></path><path fill="#5eb7f9" d="M 703 202.6 C 705.664 202.6 705.664 206.6 703 206.6 C 700.336 206.6 700.336 202.6 703 202.6 Z"></path><path fill="#5eb7f9" d="M 698 207.7 C 700.664 207.7 700.664 211.7 698 211.7 C 695.336 211.7 695.336 207.7 698 207.7 Z"></path><path fill="#5eb7f9" d="M 693 207.3 C 695.664 207.3 695.664 211.3 693 211.3 C 690.336 211.3 690.336 207.3 693 207.3 Z"></path><path fill="#5eb7f9" d="M 688 205.6 C 690.664 205.6 690.664 209.6 688 209.6 C 685.336 209.6 685.336 205.6 688 205.6 Z"></path><path fill="#5eb7f9" d="M 683 207.2 C 685.664 207.2 685.664 211.2 683 211.2 C 680.336 211.2 680.336 207.2 683 207.2 Z"></path><path fill="#5eb7f9" d="M 678 206.7 C 680.664 206.7 680.664 210.7 678 210.7 C 675.336 210.7 675.336 206.7 678 206.7 Z"></path><path fill="#5eb7f9" d="M 673 206.4 C 675.664 206.4 675.664 210.4 673 210.4 C 670.336 210.4 670.336 206.4 673 206.4 Z"></path><path fill="#5eb7f9" d="M 668 210.2 C 670.664 210.2 670.664 214.2 668 214.2 C 665.336 214.2 665.336 210.2 668 210.2 Z"></path><path fill="#5eb7f9" d="M 663 190.6 C 665.664 190.6 665.664 194.6 663 194.6 C 660.336 194.6 660.336 190.6 663 190.6 Z"></path><path fill="#5eb7f9" d="M 658 195.4 C 660.664 195.4 660.664 199.4 658 199.4 C 655.336 199.4 655.336 195.4 658 195.4 Z"></path><path fill="#5eb7f9" d="M 653 198.5 C 655.664 198.5 655.664 202.5 653 202.5 C 650.336 202.5 650.336 198.5 653 198.5 Z"></path><path fill="#5eb7f9" d="M 648 204.4 C 650.664 204.4 650.664 208.4 648 208.4 C 645.336 208.4 645.336 204.4 648 204.4 Z"></path><path fill="#5eb7f9" d="M 643 206.2 C 645.664 206.2 645.664 210.2 643 210.2 C 640.336 210.2 640.336 206.2 643 206.2 Z"></path><path fill="#5eb7f9" d="M 638 199.2 C 640.664 199.2 640.664 203.2 638 203.2 C 635.336 203.2 635.336 199.2 638 199.2 Z"></path><path fill="#5eb7f9" d="M 633 204.8 C 635.664 204.8 635.664 208.8 633 208.8 C 630.336 208.8 630.336 204.8 633 204.8 Z"></path><path fill="#5eb7f9" d="M 628 198 C 630.664 198 630.664 202 628 202 C 625.336 202 625.336 198 628 198 Z"></path><path fill="#5eb7f9" d="M 623 205.4 C 625.664 205.4 625.664 209.4 623 209.4 C 620.336 209.4 620.336 205.4 623 205.4 Z"></path><path fill="#5eb7f9" d="M 619 205.4 C 621.664 205.4 621.664 209.4 619 209.4 C 616.336 209.4 616.336 205.4 619 205.4 Z"></path><path fill="#5eb7f9" d="M 614 206.6 C 616.664 206.6 616.664 210.6 614 210.6 C 611.336 210.6 611.336 206.6 614 206.6 Z"></path><path fill="#5eb7f9" d="M 609 207.4 C 611.664 207.4 611.664 211.4 609 211.4 C 606.336 211.4 606.336 207.4 609 207.4 Z"></path><path fill="#5eb7f9" d="M 604 200.8 C 606.664 200.8 606.664 204.8 604 204.8 C 601.336 204.8 601.336 200.8 604 200.8 Z"></path><path fill="#5eb7f9" d="M 599 206.4 C 601.664 206.4 601.664 210.4 599 210.4 C 596.336 210.4 596.336 206.4 599 206.4 Z"></path><path fill="#5eb7f9" d="M 594 200.5 C 596.664 200.5 596.664 204.5 594 204.5 C 591.336 204.5 591.336 200.5 594 200.5 Z"></path><path fill="#5eb7f9" d="M 589 209.8 C 591.664 209.8 591.664 213.8 589 213.8 C 586.336 213.8 586.336 209.8 589 209.8 Z"></path><path fill="#5eb7f9" d="M 584 205 C 586.664 205 586.664 209 584 209 C 581.336 209 581.336 205 584 205 Z"></path><path fill="#5eb7f9" d="M 579 197.6 C 581.664 197.6 581.664 201.6 579 201.6 C 576.336 201.6 576.336 197.6 579 197.6 Z"></path><path fill="#5eb7f9" d="M 574 201.6 C 576.664 201.6 576.664 205.6 574 205.6 C 571.336 205.6 571.336 201.6 574 201.6 Z"></path><path fill="#5eb7f9" d="M 569 207.9 C 571.664 207.9 571.664 211.9 569 211.9 C 566.336 211.9 566.336 207.9 569 207.9 Z"></path><path fill="#5eb7f9" d="M 564 206.8 C 566.664 206.8 566.664 210.8 564 210.8 C 561.336 210.8 561.336 206.8 564 206.8 Z"></path><path fill="#5eb7f9" d="M 559 208 C 561.664 208 561.664 212 559 212 C 556.336 212 556.336 208 559 208 Z"></path><path fill="#5eb7f9" d="M 554 206.7 C 556.664 206.7 556.664 210.7 554 210.7 C 551.336 210.7 551.336 206.7 554 206.7 Z"></path><path fill="#5eb7f9" d="M 549 210.1 C 551.664 210.1 551.664 214.1 549 214.1 C 546.336 214.1 546.336 210.1 549 210.1 Z"></path><path fill="#5eb7f9" d="M 544 199.4 C 546.664 199.4 546.664 203.4 544 203.4 C 541.336 203.4 541.336 199.4 544 199.4 Z"></path><path fill="#5eb7f9" d="M 539 196.3 C 541.664 196.3 541.664 200.3 539 200.3 C 536.336 200.3 536.336 196.3 539 196.3 Z"></path><path fill="#5eb7f9" d="M 534 208.4 C 536.664 208.4 536.664 212.4 534 212.4 C 531.336 212.4 531.336 208.4 534 208.4 Z"></path><path fill="#5eb7f9" d="M 529 202 C 531.664 202 531.664 206 529 206 C 526.336 206 526.336 202 529 202 Z"></path><path fill="#5eb7f9" d="M 524 206.8 C 526.664 206.8 526.664 210.8 524 210.8 C 521.336 210.8 521.336 206.8 524 206.8 Z"></path><path fill="#5eb7f9" d="M 519 205.2 C 521.664 205.2 521.664 209.2 519 209.2 C 516.336 209.2 516.336 205.2 519 205.2 Z"></path><path fill="#5eb7f9" d="M 515 207.2 C 517.664 207.2 517.664 211.2 515 211.2 C 512.336 211.2 512.336 207.2 515 207.2 Z"></path><path fill="#5eb7f9" d="M 510 206.4 C 512.664 206.4 512.664 210.4 510 210.4 C 507.336 210.4 507.336 206.4 510 206.4 Z"></path><path fill="#5eb7f9" d="M 505 201.3 C 507.664 201.3 507.664 205.3 505 205.3 C 502.336 205.3 502.336 201.3 505 201.3 Z"></path><path fill="#5eb7f9" d="M 500 207 C 502.664 207 502.664 211 500 211 C 497.336 211 497.336 207 500 207 Z"></path><path fill="#5eb7f9" d="M 495 191.8 C 497.664 191.8 497.664 195.8 495 195.8 C 492.336 195.8 492.336 191.8 495 191.8 Z"></path><path fill="#5eb7f9" d="M 490 202.4 C 492.664 202.4 492.664 206.4 490 206.4 C 487.336 206.4 487.336 202.4 490 202.4 Z"></path><path fill="#5eb7f9" d="M 485 199.6 C 487.664 199.6 487.664 203.6 485 203.6 C 482.336 203.6 482.336 199.6 485 199.6 Z"></path><path fill="#5eb7f9" d="M 480 204.6 C 482.664 204.6 482.664 208.6 480 208.6 C 477.336 208.6 477.336 204.6 480 204.6 Z"></path><path fill="#5eb7f9" d="M 475 205.2 C 477.664 205.2 477.664 209.2 475 209.2 C 472.336 209.2 472.336 205.2 475 205.2 Z"></path><path fill="#5eb7f9" d="M 470 205.4 C 472.664 205.4 472.664 209.4 470 209.4 C 467.336 209.4 467.336 205.4 470 205.4 Z"></path><path fill="#5eb7f9" d="M 465 141.5 C 467.664 141.5 467.664 145.5 465 145.5 C 462.336 145.5 462.336 141.5 465 141.5 Z"></path><path fill="#5eb7f9" d="M 460 205.8 C 462.664 205.8 462.664 209.8 460 209.8 C 457.336 209.8 457.336 205.8 460 205.8 Z"></path><path fill="#5eb7f9" d="M 455 205.4 C 457.664 205.4 457.664 209.4 455 209.4 C 452.336 209.4 452.336 205.4 455 205.4 Z"></path><path fill="#5eb7f9" d="M 450 207.1 C 452.664 207.1 452.664 211.1 450 211.1 C 447.336 211.1 447.336 207.1 450 207.1 Z"></path><path fill="#5eb7f9" d="M 445 204.6 C 447.664 204.6 447.664 208.6 445 208.6 C 442.336 208.6 442.336 204.6 445 204.6 Z"></path><path fill="#5eb7f9" d="M 440 206.2 C 442.664 206.2 442.664 210.2 440 210.2 C 437.336 210.2 437.336 206.2 440 206.2 Z"></path><path fill="#5eb7f9" d="M 435 203.2 C 437.664 203.2 437.664 207.2 435 207.2 C 432.336 207.2 432.336 203.2 435 203.2 Z"></path><path fill="#5eb7f9" d="M 430 208 C 432.664 208 432.664 212 430 212 C 427.336 212 427.336 208 430 208 Z"></path><path fill="#5eb7f9" d="M 425 210.2 C 427.664 210.2 427.664 214.2 425 214.2 C 422.336 214.2 422.336 210.2 425 210.2 Z"></path><path fill="#5eb7f9" d="M 420 203.7 C 422.664 203.7 422.664 207.7 420 207.7 C 417.336 207.7 417.336 203.7 420 203.7 Z"></path><path fill="#5eb7f9" d="M 415 206.8 C 417.664 206.8 417.664 210.8 415 210.8 C 412.336 210.8 412.336 206.8 415 206.8 Z"></path><path fill="#5eb7f9" d="M 411 212.4 C 413.664 212.4 413.664 216.4 411 216.4 C 408.336 216.4 408.336 212.4 411 212.4 Z"></path><path fill="#5eb7f9" d="M 406 204.7 C 408.664 204.7 408.664 208.7 406 208.7 C 403.336 208.7 403.336 204.7 406 204.7 Z"></path><path fill="#5eb7f9" d="M 401 204.2 C 403.664 204.2 403.664 208.2 401 208.2 C 398.336 208.2 398.336 204.2 401 204.2 Z"></path><path fill="#5eb7f9" d="M 396 200.4 C 398.664 200.4 398.664 204.4 396 204.4 C 393.336 204.4 393.336 200.4 396 200.4 Z"></path><path fill="#5eb7f9" d="M 391 206.2 C 393.664 206.2 393.664 210.2 391 210.2 C 388.336 210.2 388.336 206.2 391 206.2 Z"></path><path fill="#5eb7f9" d="M 386 204 C 388.664 204 388.664 208 386 208 C 383.336 208 383.336 204 386 204 Z"></path><path fill="#5eb7f9" d="M 381 209.2 C 383.664 209.2 383.664 213.2 381 213.2 C 378.336 213.2 378.336 209.2 381 209.2 Z"></path><path fill="#5eb7f9" d="M 376 207.4 C 378.664 207.4 378.664 211.4 376 211.4 C 373.336 211.4 373.336 207.4 376 207.4 Z"></path><path fill="#5eb7f9" d="M 371 211 C 373.664 211 373.664 215 371 215 C 368.336 215 368.336 211 371 211 Z"></path><path fill="#5eb7f9" d="M 366 212 C 368.664 212 368.664 216 366 216 C 363.336 216 363.336 212 366 212 Z"></path><path fill="#5eb7f9" d="M 361 206.8 C 363.664 206.8 363.664 210.8 361 210.8 C 358.336 210.8 358.336 206.8 361 206.8 Z"></path><path fill="#5eb7f9" d="M 356 208.8 C 358.664 208.8 358.664 212.8 356 212.8 C 353.336 212.8 353.336 208.8 356 208.8 Z"></path><path fill="#5eb7f9" d="M 351 207.4 C 353.664 207.4 353.664 211.4 351 211.4 C 348.336 211.4 348.336 207.4 351 207.4 Z"></path><path fill="#5eb7f9" d="M 346 206.3 C 348.664 206.3 348.664 210.3 346 210.3 C 343.336 210.3 343.336 206.3 346 206.3 Z"></path><path fill="#5eb7f9" d="M 341 209.1 C 343.664 209.1 343.664 213.1 341 213.1 C 338.336 213.1 338.336 209.1 341 209.1 Z"></path><path fill="#5eb7f9" d="M 336 207 C 338.664 207 338.664 211 336 211 C 333.336 211 333.336 207 336 207 Z"></path><path fill="#5eb7f9" d="M 331 211.4 C 333.664 211.4 333.664 215.4 331 215.4 C 328.336 215.4 328.336 211.4 331 211.4 Z"></path><path fill="#5eb7f9" d="M 326 209.3 C 328.664 209.3 328.664 213.3 326 213.3 C 323.336 213.3 323.336 209.3 326 209.3 Z"></path><path fill="#5eb7f9" d="M 321 208.9 C 323.664 208.9 323.664 212.9 321 212.9 C 318.336 212.9 318.336 208.9 321 208.9 Z"></path><path fill="#5eb7f9" d="M 316 210.5 C 318.664 210.5 318.664 214.5 316 214.5 C 313.336 214.5 313.336 210.5 316 210.5 Z"></path><path fill="#5eb7f9" d="M 311 203.9 C 313.664 203.9 313.664 207.9 311 207.9 C 308.336 207.9 308.336 203.9 311 203.9 Z"></path><path fill="#5eb7f9" d="M 307 201 C 309.664 201 309.664 205 307 205 C 304.336 205 304.336 201 307 201 Z"></path><path fill="#5eb7f9" d="M 302 196.6 C 304.664 196.6 304.664 200.6 302 200.6 C 299.336 200.6 299.336 196.6 302 196.6 Z"></path><path fill="#5eb7f9" d="M 297 205.5 C 299.664 205.5 299.664 209.5 297 209.5 C 294.336 209.5 294.336 205.5 297 205.5 Z"></path><path fill="#5eb7f9" d="M 292 197.8 C 294.664 197.8 294.664 201.8 292 201.8 C 289.336 201.8 289.336 197.8 292 197.8 Z"></path><path fill="#5eb7f9" d="M 287 205.5 C 289.664 205.5 289.664 209.5 287 209.5 C 284.336 209.5 284.336 205.5 287 205.5 Z"></path><path fill="#5eb7f9" d="M 282 199.8 C 284.664 199.8 284.664 203.8 282 203.8 C 279.336 203.8 279.336 199.8 282 199.8 Z"></path><path fill="#5eb7f9" d="M 277 206 C 279.664 206 279.664 210 277 210 C 274.336 210 274.336 206 277 206 Z"></path><path fill="#5eb7f9" d="M 272 207.8 C 274.664 207.8 274.664 211.8 272 211.8 C 269.336 211.8 269.336 207.8 272 207.8 Z"></path><path fill="#5eb7f9" d="M 267 204.6 C 269.664 204.6 269.664 208.6 267 208.6 C 264.336 208.6 264.336 204.6 267 204.6 Z"></path><path fill="#5eb7f9" d="M 262 206.1 C 264.664 206.1 264.664 210.1 262 210.1 C 259.336 210.1 259.336 206.1 262 206.1 Z"></path><path fill="#5eb7f9" d="M 257 200.8 C 259.664 200.8 259.664 204.8 257 204.8 C 254.336 204.8 254.336 200.8 257 200.8 Z"></path><path fill="#5eb7f9" d="M 252 206.1 C 254.664 206.1 254.664 210.1 252 210.1 C 249.336 210.1 249.336 206.1 252 206.1 Z"></path><path fill="#5eb7f9" d="M 247 198.7 C 249.664 198.7 249.664 202.7 247 202.7 C 244.336 202.7 244.336 198.7 247 198.7 Z"></path><path fill="#5eb7f9" d="M 242 202.2 C 244.664 202.2 244.664 206.2 242 206.2 C 239.336 206.2 239.336 202.2 242 202.2 Z"></path><path fill="#5eb7f9" d="M 237 191.3 C 239.664 191.3 239.664 195.3 237 195.3 C 234.336 195.3 234.336 191.3 237 191.3 Z"></path><path fill="#5eb7f9" d="M 232 206 C 234.664 206 234.664 210 232 210 C 229.336 210 229.336 206 232 206 Z"></path><path fill="#5eb7f9" d="M 227 179.5 C 229.664 179.5 229.664 183.5 227 183.5 C 224.336 183.5 224.336 179.5 227 179.5 Z"></path><path fill="#5eb7f9" d="M 222 201.2 C 224.664 201.2 224.664 205.2 222 205.2 C 219.336 205.2 219.336 201.2 222 201.2 Z"></path><path fill="#5eb7f9" d="M 217 183.8 C 219.664 183.8 219.664 187.8 217 187.8 C 214.336 187.8 214.336 183.8 217 183.8 Z"></path><path fill="#5eb7f9" d="M 212 203.9 C 214.664 203.9 214.664 207.9 212 207.9 C 209.336 207.9 209.336 203.9 212 203.9 Z"></path><path fill="#5eb7f9" d="M 207 206.3 C 209.664 206.3 209.664 210.3 207 210.3 C 204.336 210.3 204.336 206.3 207 206.3 Z"></path><path fill="#5eb7f9" d="M 203 201.6 C 205.664 201.6 205.664 205.6 203 205.6 C 200.336 205.6 200.336 201.6 203 201.6 Z"></path><path fill="#5eb7f9" d="M 198 208 C 200.664 208 200.664 212 198 212 C 195.336 212 195.336 208 198 208 Z"></path><path fill="#5eb7f9" d="M 193 209.4 C 195.664 209.4 195.664 213.4 193 213.4 C 190.336 213.4 190.336 209.4 193 209.4 Z"></path><path fill="#5eb7f9" d="M 188 205.8 C 190.664 205.8 190.664 209.8 188 209.8 C 185.336 209.8 185.336 205.8 188 205.8 Z"></path><path fill="#5eb7f9" d="M 183 203.8 C 185.664 203.8 185.664 207.8 183 207.8 C 180.336 207.8 180.336 203.8 183 203.8 Z"></path><path fill="#5eb7f9" d="M 178 207.9 C 180.664 207.9 180.664 211.9 178 211.9 C 175.336 211.9 175.336 207.9 178 207.9 Z"></path><path fill="#5eb7f9" d="M 173 207.6 C 175.664 207.6 175.664 211.6 173 211.6 C 170.336 211.6 170.336 207.6 173 207.6 Z"></path><path fill="#5eb7f9" d="M 168 201.6 C 170.664 201.6 170.664 205.6 168 205.6 C 165.336 205.6 165.336 201.6 168 201.6 Z"></path><path fill="#5eb7f9" d="M 163 205.8 C 165.664 205.8 165.664 209.8 163 209.8 C 160.336 209.8 160.336 205.8 163 205.8 Z"></path><path fill="#5eb7f9" d="M 158 209.2 C 160.664 209.2 160.664 213.2 158 213.2 C 155.336 213.2 155.336 209.2 158 209.2 Z"></path><path fill="#5eb7f9" d="M 153 207 C 155.664 207 155.664 211 153 211 C 150.336 211 150.336 207 153 207 Z"></path><path fill="#5eb7f9" d="M 148 201.6 C 150.664 201.6 150.664 205.6 148 205.6 C 145.336 205.6 145.336 201.6 148 201.6 Z"></path><path fill="#5eb7f9" d="M 143 205.8 C 145.664 205.8 145.664 209.8 143 209.8 C 140.336 209.8 140.336 205.8 143 205.8 Z"></path><path fill="#5eb7f9" d="M 138 207.2 C 140.664 207.2 140.664 211.2 138 211.2 C 135.336 211.2 135.336 207.2 138 207.2 Z"></path><path fill="#5eb7f9" d="M 133 200.7 C 135.664 200.7 135.664 204.7 133 204.7 C 130.336 204.7 130.336 200.7 133 200.7 Z"></path><path fill="#5eb7f9" d="M 128 203.2 C 130.664 203.2 130.664 207.2 128 207.2 C 125.336 207.2 125.336 203.2 128 203.2 Z"></path><path fill="#5eb7f9" d="M 123 202.7 C 125.664 202.7 125.664 206.7 123 206.7 C 120.336 206.7 120.336 202.7 123 202.7 Z"></path><path fill="#5eb7f9" d="M 118 202.1 C 120.664 202.1 120.664 206.1 118 206.1 C 115.336 206.1 115.336 202.1 118 202.1 Z"></path><path fill="#5eb7f9" d="M 113 192.6 C 115.664 192.6 115.664 196.6 113 196.6 C 110.336 196.6 110.336 192.6 113 192.6 Z"></path><path fill="#5eb7f9" d="M 108 204.9 C 110.664 204.9 110.664 208.9 108 208.9 C 105.336 208.9 105.336 204.9 108 204.9 Z"></path><path fill="#5eb7f9" d="M 103 100.19999999999999 C 105.664 100.19999999999999 105.664 104.19999999999999 103 104.19999999999999 C 100.336 104.19999999999999 100.336 100.19999999999999 103 100.19999999999999 Z"></path><path fill="#5eb7f9" d="M 99 211 C 101.664 211 101.664 215 99 215 C 96.336 215 96.336 211 99 211 Z"></path></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="106.5688622754491" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>17 
                Jul</tspan></text><text x="225.4191616766467" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>18 
                Jul</tspan></text><text x="344.2694610778443" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>19 
                Jul</tspan></text><text x="463.11976047904193" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>20 
                Jul</tspan></text><text x="581.9700598802395" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>21 
                Jul</tspan></text><text x="700.8203592814372" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>22 
                Jul</tspan></text><text x="819.6706586826347" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>23 
                Jul</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="47" text-anchor="end" style="width:277px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="263.5" opacity="1">0ms</text><text x="47" text-anchor="end" style="width:277px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="213.5" opacity="1">500ms</text><text x="47" text-anchor="end" style="width:277px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="163.5" opacity="1">1s</text><text x="47" text-anchor="end" style="width:277px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="113.5" opacity="1">1.5s</text><text x="47" text-anchor="end" style="width:277px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="63.5" opacity="1">2s</text><text x="47" text-anchor="end" style="width:277px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="13.5" opacity="1">2.5s</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)"><path fill="#f7f7f7" d="M 5 0 L 11 0 C 16 0 16 0 16 5 L 16 11 C 16 16 16 16 11 16 L 5 16 C 0 16 0 16 0 11 L 0 5 C 0 0 0 0 5 0"></path></g></svg> 
                <div class="highcharts-tooltip" style="position: absolute; left: 0px; top: -9999px;"><span style="position: absolute; white-space: nowrap; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(107, 107, 107); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" zindex="1"></span></div>
              </div>
              </div></div><div id="report-block-load_time-table"></div></div></div><div class="report-block-container"><div id="report-block-filmstrip" class="report-block report-fullwidth" style=""><div class="report-block-header report-header-tight"><h2 id="filmstrip-title">Latest filmstrip</h2>
              
            <div class="tooltip-container" data-identifier="filmstrip"> 
              <div class="tooltip-content"> 
                <p><strong>Latest filmstrip</strong></p>
              </div>
            </div>
            </div>
    
            
          <div id="filmstrip" class="pd-rbc-filmstrip-container"> 
            <div class="pd-rbc-filmstrip-background"></div>
            <div class="pd-rbc-filmstrip-line" style="transform: translate3d(334.75px, 0px, 0px);"></div>
            <ul style="width: 523px; transform: translate3d(334.75px, 0px, 0px);">
              <li class="pd-rbc-filmstrip-item"> <img draggable="false" class="pd-rbc-filmstrip-image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQ0AAADwCAYAAAAaaTF7AAAC8UlEQVR4nO3UwQ3AIBDAsNL9dz5WIC+EZE+QV9bMzAdw6L8dALzFNIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIDENIBkA5lsBdwRL5zeAAAAAElFTkSuQmCC"> 
                <span class="pd-rbc-filmstrip-caption">0.0 s</span> </li>
              <li class="pd-rbc-filmstrip-item"> <img draggable="false" class="pd-rbc-filmstrip-image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAADwCAYAAADb7nvXAAADDElEQVR4nO3UQQ0AIBDAMMC/50PFQkJaBXttz8wsgMB5HQD8y2CAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQMRggYzBAxmCAjMEAGYMBMgYDZAwGyBgMkDEYIGMwQMZggIzBABmDATIGA2QMBsgYDJAxGCBjMEDGYICMwQAZgwEyBgNkDAbIGAyQudWRBdwB8J/PAAAAAElFTkSuQmCC"> 
                <span class="pd-rbc-filmstrip-caption">0.5 s</span> </li>
              <li class="pd-rbc-filmstrip-item"> <img draggable="false" class="pd-rbc-filmstrip-image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARgAAADwCAYAAADb7nvXAAANq0lEQVR4nO3dz29dZ17H8c/znOPra8dufjjxNOSHg5XSSaZM1JlIEAFFKlVVTVFnilCHUqmVCmy6YDmLzj/Ajg0LFqxQg1SEKrpDXVCJVhkxggEG6EyiNkx/ZNqS5odrO9e+95zny+L43DhRJ6H2/cb33Pt+SW6cxPFxF+ej53nOcz5PMDMTANzF5qhIKSmEoBijJKksy/7v668LISgQMADuxswUQrglPCSp2+0qz/N+0KSU+p+bmfKd+XEBNEUdLiklpZSU57neeustnT9/Xu12W0VRKMsyPfLII1pYWFCv11OeV9HCCAbAHdXToTpgzp49q/vvv1+nT5/W3NyciqLQ+++/rzfeeEMPP/ywzpw50/83AwmY24dPAJqrvpfraZCZKaWkLMv0+uuvK89zHThwQAcPHlSr1VJRFJqcnNTExIReeeUVPfnkk1pYWGCKBODuzEwxRl29elWXL1/Wc889p2eeeUbPPvusrly5opWVFd24cUOPPvqonnrqKb355pt6/vnnq+nUIH6AOunqXwE02+33cghBH330kQ4fPqxWq6UzZ87o+PHjOnXqlNbW1pRS0vz8vObn51WWZX9dZiABU5SmPAs6+y8f6+9/fFn7duVKaRDfGcC9EKN0dbXQd75+QM+dPti/p6VqBGNm6na7mp6eVlmWeuedd3Ty5El1Oh2trq6q2+3qoYce0pEjR5RlmcqyVJ7ngwmYau0l6Pynq/rWyf164sScymSKkRENMOxSMmUx6B9+ckXnP12VdPOeljb2s4SgAwcO6Ny5c8qyTEePHtW+ffsUQtDa2pqKotD8/LxWVlbU7XbVarUGP0VqZVGH9kzq4O7JQXxbAPfQoT2TunR9TdKtU6T6CdLhw4e1srKiixcvan19XdevX9f6+rpWV1fV6/W0uLiot99+Ww888ED/3wx0kdckdYskM1O5kYoAhlt9r3aLpC96Dlw/HY4x6vHHH9drr72ml19+WXNzc7d83blz53Tp0iW9+OKL/Q13A3+KVA+nQmDRF2iC+l690/0aY1RZllpYWNDTTz+tV199VTMzMzp06JA6nY4++OAD7d+/Xy+88EL/qROPqQHcVb0vpg6ZY8eO6aWXXtLFixd15coV7du3T2fOnNHc3Fx/QbgOKwIGwB1t3niXZVl/l+7i4qIWFxf7X7f5Bcj66wkYAHf0i150TJv2omyeYm3+egIGwB39oo20d1tjDSEouv1UAMYeAQPADQEDwA0BA8ANAQPAjetTJAqogPHGCAaAG9cRDO8iAcPPUlJdzTBorgGTUtLy8qrMEmEDDIFkUgzVrzJTuz2pVtuvXsV9DWZ9fb3/jgKAndXOpdWeNJ1L60VV5D051Xa7nvsUqT6EiYAB7j2z6mN6wvSDT6I+Wwv6wwdL/eOHUT9fifru1zbeMXK6P1nkBUZY1fVi6hTSqf1Jn3WkP/+3TD/8NOrXv5LUS5LX+otEwAAjrR6cmKQ8SM8/WGp/W/qDB0rtnzIVyW3wIomAAUaeWVAMQaUFdVPQ7x8vNTth6hRBMVQh5IW6BmCEhVAfO1J/Li11qxqFGG7+uRcCBhhxt54QIGUbn3uHi8QUCYAjAgaAGwIGGHOeLyW77+StPwAMl9uPGPHgvpM3z3NeFQCGkFlSlkXXnbyuARNj1N69uz0vAWCbijJJWQMDhqkRMPw8Zxcs8gJwQ+EUMO4cZxqMYAC4IWAAuGGRF4Ab1mCAMdfo0u/V1RvuuwUB3J1ZVTxVl36bmdqTLU1Mttyu6T5F6nTW2MkL7LC60W4iSsuFNJVLZZnUDaG5pwpQ+g3srHrUMp2bfvhp1GohfXsx6QcfR72/FPV7J31LvymcAkaeab2Qvro36eyFTJf/O9MnN4K+vdBTmaSM0m8AWxHCxpqLqrOQ/uhEqfVSeuZ4qYVZU4/SbwBbVZ2LVJV7FynIFPTiiVJzbdPqPSj9JmCAEVaNTkxmQWGj5HupG1Smm+FC6TeALbv5gCVQ+g1gdBAwANwQMMCYo/QbwMCNROl3lkWFENjJCwyZeqd9Y3fyhhC0d+8ez0sA2KZk8nqZmroGYNw1tq6BtRdg+DV6DQbAkKP0G0ATETAA3LAGA8ANazDAmGvsU6SUkjqdNUYywI6qqxrCRum3KVmQWdJkq6W8NeF2Zfcp0urqDUq/gR1mklqxarf7vFeVfsuSZGruqQKUfgM7a3Pp97/+b1Rp0mNHkv79s6j3rkf97q9Q+g1gW0zdUjo2m/TKhVzX1qWfXot64kihavGC0m8AWxBCdZOXSdrblv7kZKGLS0HfWSx1Ym9St6QyE8AWmUkKQTGY1sugPJr+9FSpTiEt94JmJ+uv8bk+AQOMsBA2el8U+k+PlrrVqCZulIBzbAmALasesNw8WSDe8ne+12YEA4yB208WkHzPQ6oxggHghoABxhyl3wAGbiRKv2MMkqL7YhKAL6sq5G/sTl5Kv4HhFkJoduk37yABw62xdQ2svQDDr9FrMACGHKXfAJqIgAHghjUYAG5YgwHGXKOfIq2trTOSAXZYkJQ2Po+qajSTmVoTE8pyvxhwP1VgeXmF0m9gh5mkySgpSJ2eNJlL0ZJSe5dm7mvoqQKUfgM7qy79nspMP74SlEfp175iunA96N1rUY8db/CrAgCGgJmKJM1Pmc5eyLXcS/rnT6J++2CxsfJC6TeALQihOgupl6SD09Ifnyz09s+jnjia9M35pHVKvwFsVTX7CcqCqVMG7cpN3/tGoV4pfd4Nmm1R+g1gi+rSb22UfpcWtNqr8qRf+u14faZIwIi7vfQ73PJ3ck0YRjDAGKD0G8DIIWCAMUfpN4CBG4nS780fAIZHfV82didvVfq92/38WwBfnpkUY2juPpgQgrIs87wEgG0qygbXNQAYbo1egwEw5Cj9BtBEBAwAN6zBAHDDGgww5hpd+t3tdu/JS1UA7qy+DesoSWaayHNFx60k7qXfS0vLlH4DO8wkTWbVA6O1UmpFKVNS0d6lmftm3K5L6TcwwurS73Zm+um1oKlcOrnP9NFK0HvXg35jwfdVAZ4iAaPOTMmk6Vz623cz/ehy0N9cyJRMyoJE6TeALQmh+uiW0i/fZ3rhwVJ/926m3/qlpN88mLRG6TeArdpc+n2jCNo/Zfr+6UKStETpN4Dt6Jd+h6r0u0hVkpgo/QYwAKFKmX7pt3QzVCj9BrBtlH4DGDkEDDDmPN8ZJGAAuOFUAWBMNf5UgRij9uzZrZuvWQEYJjFGWTIpNvBt6hCCJiZ4UAUMM0q/Abhp7BSJN6iBBuApEoAmImAAuGENBoAb1mCAMdfo0u9er1C1D4awAXbSF5V+51mmEP1WSu5B6ffnKsuk6LSRB8DdmUmtzJQsqFtKeZRylcqmdmlmtsGl31Xxd2C6BOyAqvTb1Mqli0tRMxPS0VnT1bWg80uZvrGL0m8A22FS2Dhd4K/PZ/rZctDZC5murkkTzglAwAAjrC79Xiulr+4xffd4qb/8r0yn9ic9diSpU0jBcX2UF4WAEba59Hu1CDo6a/r+Nwu1sk2l346rF4xggBFWl36bqtLv9TJsHGNSjVvM5Fp2QMAAI+5m6bcUVZV/V38uKXAuEoBt2vwUt/7M+8gSiREMAEcEDDDmKP0G0Eju7yKlZEopsZMXGDIppVEo/Z69JyfIAfiyTFmWNbv0u9VqeV4CwDZR+g3ATWOnSKy7AA3AUyQATUTAAHDDGgwAN6zBAGOu0aXfZVnKsZEPwP9TPaEIoWpoMJOyGBRCg0u/r11bYicvsMNMUitKpUlFkrIgZSFpoj2tXU0v/a4/ANxb1ajFNBGlD1eCdrdM+9pSp6hKwE9MUfoNYBvMqhHLak/6q5/kWupKZy9k+p/loFYm10Y7CqeAEVYPTDqF9PU5Uwil/uxHuX7ncNLjh0p1Cmmm3dCdvAB2Vr/0W6aVIujEXtP3Hi412zIt94JmJin9BrBFdem3QlX6vVYG7cpNvXIjVZxLvxnBACMuhNDf9BplKjeVfhul3wC2i9JvACOHgAHghoABxpznS8n3oPQ78aoAMIRGovT7vvtmN/4nPK8E4Msyk/K84aXf7fak5yUAbBOl3wDcNHaKxLoL0ACUfgNoIgIGgBsCBoAbAgaAGwIGgBsCBoAbAgaAGwIGgBsCBoAbAgaAGwIGgBsCBoAbAgaAGwIGgBsCBoAbAgaAGwIGgBsCBoAbAgaAm4F38pbJVJSmMpln1SeAAanv1TIN/oYdeMDsnc6VZ0F5RuE30AT1vbp3evBnAAzkO1bHkwSZmf7inz7UW+9dV5l8T4wDMBhmpiwG/celZX3t/l39PxvEWUnBBnB4UTJTDEE/u9LRf368Up3iaBIzJGD4hY3/mEm/enBGx+am+vf0tr/3IAIGAL7IwKZIIQQlY2EXaLIQpBhC/57e9vdjBAPAC/tgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4IWAAuCFgALghYAC4+T8Dj39VxPAdiQAAAABJRU5ErkJggg=="> 
                <span class="pd-rbc-filmstrip-caption">1.0 s</span> </li>
            </ul>
          </div>

</div></div><div class="report-block-container"><div id="report-block-waterfall" class="report-block report-fullwidth waterfall short" style=""><div class="report-block-header report-header-tight"><h2 id="waterfall-title">Latest timeline</h2>
              
            <div class="tooltip-container" data-identifier="waterfall"> 
              <div class="tooltip-content"> 
                <p><strong>Latest timeline</strong></p>
              </div>
            </div>
            </div>
    <div class="report-block-filters">
        <select id="waterfall-sortbox" name="waterfall-sort" class="pd-select report-block-header-select">
            <option value="loadOrder" selected="selected">Sort by load order</option>
            <option value="fileSize">Sort by file size</option>
            <option value="fileType">Sort by file type</option>
            <option value="url">Sort by URL</option>
            <option value="loadTime">Sort by load time</option>
        </select>
              
            <div class="pd-actions-search"> <span class="pd-actions-search-icon icon-magnify"></span> 
              <input id="waterfall-filterbox" class="input input-text pd-actions-search-input" type="text" placeholder="Filter...">
            </div>
    </div>

    <ul class="states-list">
        <li class="state-item state-dns">DNS</li>
        <li class="state-item state-ssl">SSL</li>
        <li class="state-item state-connect">Connect</li>
        <li class="state-item state-send">Send</li>
        <li class="state-item state-wait">Wait</li>
        <li class="state-item state-receive">Receive</li>
    </ul>

    <ul class="markers-list">
    <li class="marker-item marker-thick">
        <div class="marker-item-color" style="background-color: #ff1919"></div>
        Filmstrip position
    </li>

    <li class="marker-item ">
        <div class="marker-item-color" style="background-color: #3361b6"></div>
        First byte received
    </li>

    <li class="marker-item ">
        <div class="marker-item-color" style="background-color: #ffb737"></div>
        DOM content loaded
    </li>

    <li class="marker-item ">
        <div class="marker-item-color" style="background-color: #6ec437"></div>
        On load
    </li>
</ul>

    <table id="waterfall-table" class="waterfall">
        <colgroup>
            <col width="25">
            <col width="25%">
            <col width="85">
            <col>
        </colgroup>
        <thead>
            <tr>
                <th>&nbsp;</th>
                <th>File/path</th>
                <th class="size">Size</th>
                <th class="timeline">
                    <div class="scale"><span class="scale-item" style="width: 108.4px">0.0s</span><span class="scale-item" style="width: 108.4px">0.3s</span><span class="scale-item" style="width: 108.4px">0.6s</span><span class="scale-item" style="width: 108.4px">0.9s</span><span class="scale-item" style="width: 108.4px">1.2s</span><span class="scale-item" style="width: 108.4px">1.5s</span></div>
                </th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <td>&nbsp;</td>
                <td class="num-requests"></td>
                <td class="size">495.01 KB</td>
                <td class="load-time right">1.00 s</td>
            </tr>
        </tfoot>
        <tbody>
        
    <tr class="request ">
        <td>
            <div class="icon icon-html"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/index.php" href="http://drhasanrizvi.org/quran/index.php">index.php</a>
        </td>
        <td class="size" abbr="96319">94.06 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 0%; width: 1.30871%; visibility: visible; min-width: 1px;">19.8289999971</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0.902154%; visibility: visible; min-width: 1px;">13.6690000072</div>
                <div class="bar send" style="width: 0.003432%; visibility: visible; min-width: 1px;">0.0519999885</div>
                <div class="bar wait" style="width: 46.9295%; visibility: visible; min-width: 1px;">711.0530000064</div>
                <div class="bar receive" style="width: 1.76537%; visibility: visible; min-width: 1px;">26.7480000257</div>
                <div class="timeline-start">0 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row ">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="96125">96125</dt>
                    
                    <dd>x-powered-by</dd>
                    <dt title="PHP/7.1.1">PHP/7.1.1</dt>
                    
                    <dd>age</dd>
                    <dt title="1">1</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="text/html; charset=UTF-8">text/html; charset=UTF-8</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8">text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>upgrade-insecure-requests</dd>
                    <dt title="1">1</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request odd">
        <td>
            <div class="icon icon-js"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/js/jquery-3.2.1.min.js" href="http://drhasanrizvi.org/quran/js/jquery-3.2.1.min.js">jquery-3.2.1.min.js</a>
        </td>
        <td class="size" abbr="86995">84.96 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 49.632%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar send" style="width: 0.008448%; visibility: visible; min-width: 1px;">0.1280000433</div>
                <div class="bar wait" style="width: 4.98274%; visibility: visible; min-width: 1px;">75.4959999467</div>
                <div class="bar receive" style="width: 1.7488%; visibility: visible; min-width: 1px;">26.496999979</div>
                <div class="timeline-start">752 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row odd">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="86659">86659</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Sun, 12 May 2019 20:33:26 GMT">Sun, 12 May 2019 20:33:26 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;15283-588b6b63f3693&quot;">"15283-588b6b63f3693"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="application/x-javascript">application/x-javascript</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="*/*">*/*</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request ">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/option.png" href="http://drhasanrizvi.org/quran/assets/img/option.png">option.png</a>
        </td>
        <td class="size" abbr="7955">7.77 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 50.16%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar send" style="width: 0.00429%; visibility: visible; min-width: 1px;">0.0649999711</div>
                <div class="bar wait" style="width: 4.62455%; visibility: visible; min-width: 1px;">70.0690000085</div>
                <div class="bar receive" style="width: 0.034848%; visibility: visible; min-width: 1px;">0.5279999971</div>
                <div class="timeline-start">760 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row ">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="7636">7636</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Mon, 20 May 2019 19:35:46 GMT">Mon, 20 May 2019 19:35:46 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;1dd4-58956d6b60880&quot;">"1dd4-58956d6b60880"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request odd">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/font-decrease2.png" href="http://drhasanrizvi.org/quran/assets/img/font-decrease2.png">font-decrease2.png</a>
        </td>
        <td class="size" abbr="5908">5.77 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 50.16%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar send" style="width: 0.004488%; visibility: visible; min-width: 1px;">0.0680000521</div>
                <div class="bar wait" style="width: 3.54829%; visibility: visible; min-width: 1px;">53.7619999959</div>
                <div class="bar receive" style="width: 0.03729%; visibility: visible; min-width: 1px;">0.5650000572</div>
                <div class="timeline-start">760 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row odd">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="5589">5589</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Mon, 24 Jun 2019 14:41:34 GMT">Mon, 24 Jun 2019 14:41:34 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;15d5-58c12cf040380&quot;">"15d5-58c12cf040380"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request ">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/font-increase2.png" href="http://drhasanrizvi.org/quran/assets/img/font-increase2.png">font-increase2.png</a>
        </td>
        <td class="size" abbr="6194">6.05 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 50.16%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar send" style="width: 0.003762%; visibility: visible; min-width: 1px;">0.0570000266</div>
                <div class="bar wait" style="width: 3.78114%; visibility: visible; min-width: 1px;">57.2899999679</div>
                <div class="bar receive" style="width: 0.03234%; visibility: visible; min-width: 1px;">0.4900000095</div>
                <div class="timeline-start">760 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row ">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="5875">5875</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Mon, 24 Jun 2019 14:38:10 GMT">Mon, 24 Jun 2019 14:38:10 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;16f3-58c12c2db3880&quot;">"16f3-58c12c2db3880"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request odd">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/icon-search.png" href="http://drhasanrizvi.org/quran/assets/img/icon-search.png">icon-search.png</a>
        </td>
        <td class="size" abbr="675">675 B</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 50.16%; width: 0.02277%; visibility: visible; min-width: 1px;">0.3450000077</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0.875688%; visibility: visible; min-width: 1px;">13.2679999806</div>
                <div class="bar send" style="width: 0.002706%; visibility: visible; min-width: 1px;">0.0409999629</div>
                <div class="bar wait" style="width: 4.12744%; visibility: visible; min-width: 1px;">62.5369999907</div>
                <div class="bar receive" style="width: 0.024552%; visibility: visible; min-width: 1px;">0.3720000386</div>
                <div class="timeline-start">760 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row odd">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="358">358</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Sun, 12 May 2019 20:33:45 GMT">Sun, 12 May 2019 20:33:45 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;166-588b6b75e8151&quot;">"166-588b6b75e8151"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request ">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/icons-search.png" href="http://drhasanrizvi.org/quran/assets/img/icons-search.png">icons-search.png</a>
        </td>
        <td class="size" abbr="675">675 B</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 51.018%; width: 0.023496%; visibility: visible; min-width: 1px;">0.355999975</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0.893706%; visibility: visible; min-width: 1px;">13.5410000221</div>
                <div class="bar send" style="width: 0.002376%; visibility: visible; min-width: 1px;">0.0359999831</div>
                <div class="bar wait" style="width: 4.14493%; visibility: visible; min-width: 1px;">62.8020000295</div>
                <div class="bar receive" style="width: 0.019074%; visibility: visible; min-width: 1px;">0.2889999747</div>
                <div class="timeline-start">773 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row ">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="358">358</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Sun, 12 May 2019 20:33:46 GMT">Sun, 12 May 2019 20:33:46 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;166-588b6b76b084d&quot;">"166-588b6b76b084d"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request odd">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/cancel.png" href="http://drhasanrizvi.org/quran/assets/img/cancel.png">cancel.png</a>
        </td>
        <td class="size" abbr="673">673 B</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 51.018%; width: 0.011418%; visibility: visible; min-width: 1px;">0.1730000367</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0.892848%; visibility: visible; min-width: 1px;">13.5279999813</div>
                <div class="bar send" style="width: 0.001914%; visibility: visible; min-width: 1px;">0.028999988</div>
                <div class="bar wait" style="width: 3.99742%; visibility: visible; min-width: 1px;">60.5670000077</div>
                <div class="bar receive" style="width: 0.025542%; visibility: visible; min-width: 1px;">0.3869999647</div>
                <div class="timeline-start">773 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row odd">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="356">356</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Sun, 12 May 2019 20:33:43 GMT">Sun, 12 May 2019 20:33:43 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;164-588b6b74459f9&quot;">"164-588b6b74459f9"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request ">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/expand-button.png" href="http://drhasanrizvi.org/quran/assets/img/expand-button.png">expand-button.png</a>
        </td>
        <td class="size" abbr="756">756 B</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 51.018%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar send" style="width: 0.006336%; visibility: visible; min-width: 1px;">0.0960000325</div>
                <div class="bar wait" style="width: 4.1452%; visibility: visible; min-width: 1px;">62.8060000017</div>
                <div class="bar receive" style="width: 0.019404%; visibility: visible; min-width: 1px;">0.29399997</div>
                <div class="timeline-start">773 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row ">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="439">439</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Thu, 20 Jun 2019 18:19:34 GMT">Thu, 20 Jun 2019 18:19:34 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;1b7-58bc563477980&quot;">"1b7-58bc563477980"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request odd">
        <td>
            <div class="icon icon-other"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/fonts/mn1.ttf" href="http://drhasanrizvi.org/quran/assets/fonts/mn1.ttf">mn1.ttf</a>
        </td>
        <td class="size" abbr="102089">99.70 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 57.816%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0.849156%; visibility: visible; min-width: 1px;">12.8660000046</div>
                <div class="bar send" style="width: 0.003366%; visibility: visible; min-width: 1px;">0.0510000391</div>
                <div class="bar wait" style="width: 5.50097%; visibility: visible; min-width: 1px;">83.3479999565</div>
                <div class="bar receive" style="width: 1.75144%; visibility: visible; min-width: 1px;">26.5370000005</div>
                <div class="timeline-start">876 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row odd">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="101792">101792</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Sun, 12 May 2019 20:33:39 GMT">Sun, 12 May 2019 20:33:39 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;18da0-588b6b7060501&quot;">"18da0-588b6b7060501"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>origin</dd>
                    <dt title="http://drhasanrizvi.org">http://drhasanrizvi.org</dt>
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>accept</dd>
                    <dt title="*/*">*/*</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request ">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/img/sura-title.png" href="http://drhasanrizvi.org/quran/assets/img/sura-title.png">sura-title.png</a>
        </td>
        <td class="size" abbr="5903">5.76 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 59.07%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar send" style="width: 0.00462%; visibility: visible; min-width: 1px;">0.0700000091</div>
                <div class="bar wait" style="width: 4.2401%; visibility: visible; min-width: 1px;">64.2440000083</div>
                <div class="bar receive" style="width: 0.05313%; visibility: visible; min-width: 1px;">0.8049999475</div>
                <div class="timeline-start">895 ms</div>
            </div>
        </td>
    </tr>
    <tr class="open_row ">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="5584">5584</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Sun, 12 May 2019 20:33:47 GMT">Sun, 12 May 2019 20:33:47 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;15d0-588b6b778fe88&quot;">"15d0-588b6b778fe88"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/png">image/png</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request odd">
        <td>
            <div class="icon icon-other"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="http://drhasanrizvi.org/quran/assets/fonts/Al%20Majeed%20Quranic%20Font_shiped.ttf" href="http://drhasanrizvi.org/quran/assets/fonts/Al%20Majeed%20Quranic%20Font_shiped.ttf">Al%20Majeed%20Quranic%20Font_shiped.ttf</a>
        </td>
        <td class="size" abbr="177533">173.37 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 66.132%; width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar ssl" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar connect" style="width: 0%; visibility: visible; min-width: 1px;">0</div>
                <div class="bar send" style="width: 0.005214%; visibility: visible; min-width: 1px;">0.0789999613</div>
                <div class="bar wait" style="width: 3.65713%; visibility: visible; min-width: 1px;">55.4110000376</div>
                <div class="bar receive" style="width: 0.997194%; visibility: visible; min-width: 1px;">15.1089999676</div>
                <div class="timeline-start">1.00 s</div>
            </div>
        </td>
    </tr>
    <tr class="open_row odd">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>content-length</dd>
                    <dt title="177236">177236</dt>
                    
                    <dd>age</dd>
                    <dt title="0">0</dt>
                    
                    <dd>expires</dd>
                    <dt title="Tue, 23 Jul 2019 18:34:40 GMT">Tue, 23 Jul 2019 18:34:40 GMT</dt>
                    
                    <dd>server</dd>
                    <dt title="Apache/2">Apache/2</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Sun, 12 May 2019 20:33:28 GMT">Sun, 12 May 2019 20:33:28 GMT</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;2b454-588b6b65dbb1c&quot;">"2b454-588b6b65dbb1c"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="max-age=14400">max-age=14400</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>accept-ranges</dd>
                    <dt title="bytes">bytes</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>origin</dd>
                    <dt title="http://drhasanrizvi.org">http://drhasanrizvi.org</dt>
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate">gzip, deflate</dt>
                    
                    <dd>host</dd>
                    <dt title="drhasanrizvi.org">drhasanrizvi.org</dt>
                    
                    <dd>accept</dd>
                    <dt title="*/*">*/*</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>connection</dd>
                    <dt title="keep-alive">keep-alive</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>


    <tr class="request ">
        <td>
            <div class="icon icon-image"></div>
        </td>
        <td class="waterfall-url">
            <a class="filename " title="https://i2.wp.com/alquran.pro/wp-content/uploads/2018/01/cropped-alquran.pro-logo-v2-1.png?w=512&amp;ssl=1" href="https://i2.wp.com/alquran.pro/wp-content/uploads/2018/01/cropped-alquran.pro-logo-v2-1.png?w=512&amp;ssl=1">cropped-alquran.pro-logo-v2-1.png?w=512&amp;ssl=1</a>
        </td>
        <td class="size" abbr="11074">10.81 KB</td>
        <td class="timeline">
            <a href="#" class="rowfold close"></a>

            <div class="timeline-bars">
                <div class="bar dns" style="margin-left: 66.792%; width: 0.081972%; visibility: visible; min-width: 1px;">1.2419999694</div>
                <div class="bar ssl" style="width: 0.728442%; visibility: visible; min-width: 1px;">11.0369999893</div>
                <div class="bar connect" style="width: 0.836418%; visibility: visible; min-width: 1px;">12.6729999902</div>
                <div class="bar send" style="width: 0.018282%; visibility: visible; min-width: 1px;">0.2769999555</div>
                <div class="bar wait" style="width: 0.107976%; visibility: visible; min-width: 1px;">1.6360000009</div>
                <div class="bar receive" style="width: 0.076098%; visibility: visible; min-width: 1px;">1.1529999971</div>
                <div class="timeline-start">1.01 s</div>
            </div>
        </td>
    </tr>
    <tr class="open_row ">
        <td colspan="4">
            <div class="headers-response">
                <h4>Response Headers
                    <div class="headers-status-code response-status-200">200</div>
                </h4>
                <dl class="headers">
                    
                    <dd>status</dd>
                    <dt title="200">200</dt>
                    
                    <dd>x-bytes-saved</dd>
                    <dt title="22315">22315</dt>
                    
                    <dd>content-length</dd>
                    <dt title="10768">10768</dt>
                    
                    <dd>x-nc</dd>
                    <dt title="HIT dca 1">HIT dca 1</dt>
                    
                    <dd>x-content-type-options</dd>
                    <dt title="nosniff">nosniff</dt>
                    
                    <dd>expires</dd>
                    <dt title="Thu, 01 Jul 2021 02:09:01 GMT">Thu, 01 Jul 2021 02:09:01 GMT</dt>
                    
                    <dd>vary</dd>
                    <dt title="Accept">Accept</dt>
                    
                    <dd>server</dd>
                    <dt title="nginx">nginx</dt>
                    
                    <dd>last-modified</dd>
                    <dt title="Mon, 01 Jul 2019 14:09:01 GMT">Mon, 01 Jul 2019 14:09:01 GMT</dt>
                    
                    <dd>etag</dd>
                    <dt title="&quot;8f1bdce824a1acba&quot;">"8f1bdce824a1acba"</dt>
                    
                    <dd>link</dd>
                    <dt title="&lt;https://alquran.pro/wp-content/uploads/2018/01/cropped-alquran.pro-logo-v2-1.png&gt;; rel=&quot;canonical&quot;">&lt;https://alquran.pro/wp-content/uploads/2018/01/cropped-alquran.pro-logo-v2-1.png&gt;; rel="canonical"</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="public, max-age=63115200">public, max-age=63115200</dt>
                    
                    <dd>date</dd>
                    <dt title="Tue, 23 Jul 2019 14:34:40 GMT">Tue, 23 Jul 2019 14:34:40 GMT</dt>
                    
                    <dd>content-type</dd>
                    <dt title="image/webp">image/webp</dt>
                    
                </dl>
            </div>
            <div class="headers-request">
                <h4>Request Headers</h4>
                <dl class="headers">
                    
                    <dd>accept-language</dd>
                    <dt title="en-US,en;q=0.8">en-US,en;q=0.8</dt>
                    
                    <dd>accept-encoding</dd>
                    <dt title="gzip, deflate, br">gzip, deflate, br</dt>
                    
                    <dd>accept</dd>
                    <dt title="image/webp,image/apng,image/*,*/*;q=0.8">image/webp,image/apng,image/*,*/*;q=0.8</dt>
                    
                    <dd>user-agent</dd>
                    <dt title="Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)">Mozilla/5.0
 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Ubuntu 
Chromium/61.0.3163.100 Chrome/61.0.3163.100 Safari/537.36 
PingdomPageSpeed/1.0 (pingbot/2.0; +http://www.pingdom.com/)</dt>
                    
                    <dd>referer</dd>
                    <dt title="http://drhasanrizvi.org/quran/index.php">http://drhasanrizvi.org/quran/index.php</dt>
                    
                    <dd>pragma</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                    <dd>cache-control</dd>
                    <dt title="no-cache">no-cache</dt>
                    
                </dl>
            </div>
            <div class="clear"></div>
        </td>
    </tr>

</tbody>
    </table>
    
        <div id="waterfall-collapsed-fade" class="collapsed-fade"></div>
        <div id="waterfall-show-all" class="show-all">Show all</div>
        <div id="waterfall-show-less" class="show-less">Show less</div>
    

    <div id="waterfall-marker-tooltip" class="marker-tooltip"></div>
<div class="marker " id="waterfall-ttfb-marker" style="left: 600.326px;">
        <div class="marker-line" style="background-color: #3361b6"></div>
    </div><div class="marker " id="waterfall-content-load-marker" style="left: 653.37px;">
        <div class="marker-line" style="background-color: #ffb737"></div>
    </div><div class="marker " id="waterfall-load-marker" style="left: 690.75px;">
        <div class="marker-line" style="background-color: #6ec437"></div>
    </div><div class="marker marker-thick" id="waterfall-filmstrip-marker" style="left: 334.75px;">
        <div class="marker-line" style="background-color: #ff1919"></div>
    </div></div></div>
	
	
	<div class="report-block-container" >
	<div id="report-block-test_result" class="report-block report-fullwidth" >
	<div class="report-block-header report-header-tight">
	<h2 id="test_result-title">Latest tests</h2>
              
            <div class="tooltip-container" data-identifier="test_result"> 
              <div class="tooltip-content"> 
                <p><strong>Latest tests</strong></p>
                <p>View details of individual page loads.</p>
              </div>
            </div>
            </div><div id="report-block-test_result-chart"></div><div id="report-block-test_result-table"><div id="test_result-table" class="report-chart-table pd-table-container pd-table-clickable">
                
              <div class="pd-table-container"> 
                <table class="pd-table" name="all">
                  <thead>
                    <tr> 
                      <th class="pd-table-th" style="width: 25%;">Date &amp; Time</th>
                      <th class="pd-table-th" style="text-align: right;">Load 
                        Time</th>
                      <th class="pd-table-th" style="text-align: right;">Page 
                        Size</th>
                      <th class="pd-table-th" style="text-align: right;">Requests</th>
                      <th class="pd-table-th" style="width: 15%;text-align: right;">Perf. 
                        grade</th>
                      <th class="pd-table-th" style="width: 20px;"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-pd-table-index="0" class="pd-rbc-row data-color"> 
                      <td>23/07/2019 19:34:39</td>
                      <td style="text-align:right;">1s</td>
                      <td style="text-align:right;">495.01 KB</td>
                      <td style="text-align:right;">13</td>
                      <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                        <span> 85/100</span> </td>
                      <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                      </td>
                    </tr>
                    <tr data-pd-table-index="1" class="pd-rbc-row data-color"> 
                      <td>23/07/2019 19:05:28</td>
                      <td style="text-align:right;">393ms</td>
                      <td style="text-align:right;">495.01 KB</td>
                      <td style="text-align:right;">13</td>
                      <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                        <span> 85/100</span> </td>
                      <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                      </td>
                    </tr>
                    <tr data-pd-table-index="2" class="pd-rbc-row data-color"> 
                      <td>23/07/2019 18:34:39</td>
                      <td style="text-align:right;">392ms</td>
                      <td style="text-align:right;">495.01 KB</td>
                      <td style="text-align:right;">13</td>
                      <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                        <span> 85/100</span> </td>
                      <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                      </td>
                    </tr>
                    <tr data-pd-table-index="3" class="pd-rbc-row data-color"> 
                      <td>23/07/2019 18:04:39</td>
                      <td style="text-align:right;">3.62s</td>
                      <td style="text-align:right;">495.01 KB</td>
                      <td style="text-align:right;">13</td>
                      <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                        <span> 85/100</span> </td>
                      <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                      </td>
                    </tr>
                    <tr data-pd-table-index="4" class="pd-rbc-row data-color"> 
                      <td>23/07/2019 17:34:39</td>
                      <td style="text-align:right;">436ms</td>
                      <td style="text-align:right;">495.01 KB</td>
                      <td style="text-align:right;">13</td>
                      <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                        <span> 85/100</span> </td>
                      <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                      </td>
                    </tr>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
    <div class="report-show-all footer">
        <button class="report-show-all-button">Show more &gt;</button>
    </div></div></div></div></div><div class="report-block-container">
	<div id="report-block-size_by_type" class="report-block report-block-halfwidth" style="float: left; clear: left;" >
	<div class="report-block-header report-header-tight" >
	
	<h2 id="size_by_type-title">Content size by content type</h2>
             <div class="tooltip-container" data-identifier="size_by_type">
              <div class="tooltip-content">
                <p><strong>Content size by content type</strong></p>
                <p>Find out what content type has the largest size.</p>
              </div>
            </div>
            </div><div id="report-block-size_by_type-chart"><div id="size_by_type-chart" class="pd-chart" data-highcharts-chart="1">
                
              <div class="highcharts-container" id="highcharts-2" style="position: relative; overflow: hidden; width: 438px; height: 300px; text-align: left; line-height: normal; z-index: 0; left: 0px; top: 0.5px;"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="438" height="300"><desc>Created 
                with Highcharts 4.0.3</desc><defs><clipPath id="highcharts-3"><rect x="0" y="0" width="348" height="250"></rect></clipPath></defs><rect x="0" y="0" width="438" height="300" strokeWidth="0" fill="rgba(0, 0, 0, 0.0)" class=" highcharts-background"></rect><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 80 10.5 L 428 10.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 52.5 L 428 52.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 93.5 L 428 93.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 135.5 L 428 135.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 177.5 L 428 177.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 218.5 L 428 218.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 260.5 L 428 260.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" style="" clip-path="url(#highcharts-3)"><rect x="39" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="51" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="63" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="76" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="88" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="101" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="113" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="126" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="138" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="150" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="163" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="175" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="188" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="200" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="213" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="225" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="237" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="250" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="262" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="275" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="287" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="300" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="312" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="324" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect><rect x="337" y="45" width="10" height="40" fill="#b276b2" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" style="" clip-path="url(#highcharts-3)"><rect x="39" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="51" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="63" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="76" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="88" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="101" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="113" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="126" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="138" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="150" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="163" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="175" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="188" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="200" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="213" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="225" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="237" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="250" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="262" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="275" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="287" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="300" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="312" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="324" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect><rect x="337" y="85" width="10" height="13" fill="#5da5da" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" style="" clip-path="url(#highcharts-3)"><rect x="39" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="51" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="63" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="76" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="88" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="101" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="113" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="126" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="138" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="150" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="163" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="175" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="188" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="200" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="213" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="225" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="237" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="250" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="262" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="275" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="287" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="300" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="312" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="324" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect><rect x="337" y="98" width="10" height="117" fill="#f17cb0" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" style="" clip-path="url(#highcharts-3)"><rect x="39" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="51" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="63" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="76" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="88" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="101" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="113" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="126" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="138" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="150" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="163" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="175" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="188" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="200" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="213" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="225" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="237" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="250" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="262" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="275" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="287" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="300" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="312" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="324" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect><rect x="337" y="215" width="10" height="36" fill="#faa43a" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" clip-path="none"></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="104.85714285714286" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>17 
                Jul</tspan></text><text x="154.57142857142856" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>18 
                Jul</tspan></text><text x="204.28571428571428" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>19 
                Jul</tspan></text><text x="254" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>20 
                Jul</tspan></text><text x="303.71428571428567" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>21 
                Jul</tspan></text><text x="353.42857142857144" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>22 
                Jul</tspan></text><text x="403.1428571428571" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>23 
                Jul</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="263.5" opacity="1"><tspan>0 
                bytes</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="221.83333333333331" opacity="1"><tspan>97.66 
                KB</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="180.16666666666666" opacity="1"><tspan>195.31 
                KB</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="138.5" opacity="1"><tspan>292.97 
                KB</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="96.83333333333331" opacity="1"><tspan>390.63 
                KB</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="55.16666666666666" opacity="1"><tspan>488.28 
                KB</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="13.499999999999972" opacity="1"><tspan>585.94 
                KB</tspan></text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)"><path fill="#f7f7f7" d="M 5 0 L 11 0 C 16 0 16 0 16 5 L 16 11 C 16 16 16 16 11 16 L 5 16 C 0 16 0 16 0 11 L 0 5 C 0 0 0 0 5 0"></path></g></svg> 
                <div class="highcharts-tooltip" style="position: absolute; left: 0px; top: -9999px;"><span style="position: absolute; white-space: nowrap; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(107, 107, 107); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" zindex="1"></span></div>
              </div>
              </div></div><div id="report-block-size_by_type-table"><div id="size_by_type-table" class="report-chart-table pd-table-container">
              <div class="pd-table-container">
                <table class="pd-table" name="all">
                  <thead>
                    <tr>
                      <th class="pd-table-th" style="width: 80%;">content type</th>
                      <th class="pd-table-th" style="text-align:right;">median</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-pd-table-index="0" id="rbc-102111110116" class="pd-rbc-row data-color pd-table-nonclickable">
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 56.99999999999999%, #FFFFFF 56.99999999999999%, #FFFFFF 56.99999999999999%);
background: -webkit-gradient(linear, left top, right top, color-stop(56.99999999999999%,#F7F7F7), color-stop(56.99999999999999%,#FFFFFF), color-stop(56.99999999999999%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 56.99999999999999%,#FFFFFF 56.99999999999999%,#FFFFFF 56.99999999999999%);
background: -o-linear-gradient(left,  #F7F7F7 56.99999999999999%,#FFFFFF 56.99999999999999%,#FFFFFF 56.99999999999999%);
background: linear-gradient(to right,  #F7F7F7 56.99999999999999%,#FFFFFF 56.99999999999999%,#FFFFFF 56.99999999999999%);"> 
                        <div class="pd-table-fake-row" style="border-left: 4px solid #f17cb0;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-font" style="padding-right:6px"></div>
                                font </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>273.65 KB</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="1" id="rbc-10011199" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 19%, #FFFFFF 19%, #FFFFFF 19%);
background: -webkit-gradient(linear, left top, right top, color-stop(19%,#F7F7F7), color-stop(19%,#FFFFFF), color-stop(19%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 19%,#FFFFFF 19%,#FFFFFF 19%);
background: -o-linear-gradient(left,  #F7F7F7 19%,#FFFFFF 19%,#FFFFFF 19%);
background: linear-gradient(to right,  #F7F7F7 19%,#FFFFFF 19%,#FFFFFF 19%);"> 
                        <div class="pd-table-fake-row" style="border-left: 4px solid #b276b2;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-doc" style="padding-right:6px"></div>
                                doc </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>94.25 KB</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="2" id="rbc-11599114105112116" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 18%, #FFFFFF 18%, #FFFFFF 18%);
background: -webkit-gradient(linear, left top, right top, color-stop(18%,#F7F7F7), color-stop(18%,#FFFFFF), color-stop(18%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 18%,#FFFFFF 18%,#FFFFFF 18%);
background: -o-linear-gradient(left,  #F7F7F7 18%,#FFFFFF 18%,#FFFFFF 18%);
background: linear-gradient(to right,  #F7F7F7 18%,#FFFFFF 18%,#FFFFFF 18%);"> 
                        <div class="pd-table-fake-row" style="border-left: 4px solid #faa43a;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-script" style="padding-right:6px"></div>
                                script </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>85.28 KB</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="3" id="rbc-10510997103101" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 6%, #FFFFFF 6%, #FFFFFF 6%);
background: -webkit-gradient(linear, left top, right top, color-stop(6%,#F7F7F7), color-stop(6%,#FFFFFF), color-stop(6%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 6%,#FFFFFF 6%,#FFFFFF 6%);
background: -o-linear-gradient(left,  #F7F7F7 6%,#FFFFFF 6%,#FFFFFF 6%);
background: linear-gradient(to right,  #F7F7F7 6%,#FFFFFF 6%,#FFFFFF 6%);"> <div class="pd-table-fake-row" style="border-left: 4px solid #5da5da;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-image" style="padding-right:6px"></div>
                                image </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>30.55 KB</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr> 
                      <td>Total</td>
                      <td style="text-align:right;">483.73 KB</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              </div></div></div></div><div class="report-block-container"><div id="report-block-request_by_type" class="report-block report-block-halfwidth" style="float: right; clear: right;"><div class="report-block-header report-header-tight"><h2 id="request_by_type-title">Requests by content type</h2>
              
            <div class="tooltip-container" data-identifier="request_by_type"> 
              <div class="tooltip-content"> 
                <p><strong>Requests size by content type</strong></p>
                <p>Find out what content type has the most requests.</p>
              </div>
            </div>
            </div><div id="report-block-request_by_type-chart"><div id="request_by_type-chart" class="pd-chart" data-highcharts-chart="2">
                
              <div class="highcharts-container" id="highcharts-4" style="position: relative; overflow: hidden; width: 438px; height: 300px; text-align: left; line-height: normal; z-index: 0; left: 0.5px; top: 0.5px;"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="438" height="300"><desc>Created 
                with Highcharts 4.0.3</desc><defs><clipPath id="highcharts-5"><rect x="0" y="0" width="379" height="250"></rect></clipPath></defs><rect x="0" y="0" width="438" height="300" strokeWidth="0" fill="rgba(0, 0, 0, 0.0)" class=" highcharts-background"></rect><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 49 10.5 L 428 10.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 49 52.5 L 428 52.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 49 93.5 L 428 93.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 49 135.5 L 428 135.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 49 177.5 L 428 177.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 49 218.5 L 428 218.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 49 260.5 L 428 260.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" style="" clip-path="url(#highcharts-5)"><rect x="42" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="55" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="69" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="83" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="96" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="110" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="123" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="137" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="150" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="164" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="177" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="191" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="204" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="218" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="231" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="245" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="259" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="272" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="286" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="299" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="313" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="326" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="340" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="353" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect><rect x="367" y="51" width="11" height="17" fill="#b276b2" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" style="" clip-path="url(#highcharts-5)"><rect x="42" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="55" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="69" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="83" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="96" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="110" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="123" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="137" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="150" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="164" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="177" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="191" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="204" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="218" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="231" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="245" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="259" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="272" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="286" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="299" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="313" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="326" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="340" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="353" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect><rect x="367" y="68" width="11" height="133" fill="#5da5da" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" style="" clip-path="url(#highcharts-5)"><rect x="42" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="55" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="69" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="83" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="96" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="110" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="123" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="137" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="150" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="164" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="177" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="191" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="204" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="218" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="231" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="245" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="259" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="272" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="286" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="299" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="313" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="326" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="340" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="353" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect><rect x="367" y="201" width="11" height="33" fill="#f17cb0" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" style="" clip-path="url(#highcharts-5)"><rect x="42" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="55" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="69" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="83" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="96" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="110" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="123" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="137" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="150" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="164" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="177" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="191" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="204" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="218" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="231" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="245" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="259" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="272" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="286" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="299" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="313" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="326" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="340" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="353" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect><rect x="367" y="234" width="11" height="17" fill="#faa43a" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(49,10) scale(1 1)" clip-path="none"></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="76.07142857142857" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>17 
                Jul</tspan></text><text x="130.21428571428572" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>18 
                Jul</tspan></text><text x="184.35714285714283" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>19 
                Jul</tspan></text><text x="238.49999999999997" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>20 
                Jul</tspan></text><text x="292.6428571428571" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>21 
                Jul</tspan></text><text x="346.7857142857143" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>22 
                Jul</tspan></text><text x="400.92857142857144" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>23 
                Jul</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="34" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="263.5" opacity="1">0</text><text x="34" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="221.83333333333331" opacity="1">2.5</text><text x="34" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="180.16666666666666" opacity="1">5</text><text x="34" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="138.5" opacity="1">7.5</text><text x="34" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="96.83333333333331" opacity="1">10</text><text x="34" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="55.16666666666666" opacity="1">12.5</text><text x="34" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="13.499999999999972" opacity="1">15</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)"><path fill="#f7f7f7" d="M 5 0 L 11 0 C 16 0 16 0 16 5 L 16 11 C 16 16 16 16 11 16 L 5 16 C 0 16 0 16 0 11 L 0 5 C 0 0 0 0 5 0"></path></g></svg> 
                <div class="highcharts-tooltip" style="position: absolute; left: 0px; top: -9999px;"><span style="position: absolute; white-space: nowrap; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(107, 107, 107); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" zindex="1"></span></div>
              </div>
              </div></div><div id="report-block-request_by_type-table"><div id="request_by_type-table" class="report-chart-table pd-table-container">
                
              <div class="pd-table-container"> 
                <table class="pd-table" name="all">
                  <thead>
                    <tr> 
                      <th class="pd-table-th" style="width: 80%;">content type</th>
                      <th class="pd-table-th" style="text-align:right;">median</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-pd-table-index="0" id="rbc-10510997103101" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 67%, #FFFFFF 67%, #FFFFFF 67%);
background: -webkit-gradient(linear, left top, right top, color-stop(67%,#F7F7F7), color-stop(67%,#FFFFFF), color-stop(67%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 67%,#FFFFFF 67%,#FFFFFF 67%);
background: -o-linear-gradient(left,  #F7F7F7 67%,#FFFFFF 67%,#FFFFFF 67%);
background: linear-gradient(to right,  #F7F7F7 67%,#FFFFFF 67%,#FFFFFF 67%);"> 
                        <div class="pd-table-fake-row" style="border-left: 4px solid #5da5da;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-image" style="padding-right:6px"></div>
                                image </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>8</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="1" id="rbc-102111110116" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 17%, #FFFFFF 17%, #FFFFFF 17%);
background: -webkit-gradient(linear, left top, right top, color-stop(17%,#F7F7F7), color-stop(17%,#FFFFFF), color-stop(17%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 17%,#FFFFFF 17%,#FFFFFF 17%);
background: -o-linear-gradient(left,  #F7F7F7 17%,#FFFFFF 17%,#FFFFFF 17%);
background: linear-gradient(to right,  #F7F7F7 17%,#FFFFFF 17%,#FFFFFF 17%);"> 
                        <div class="pd-table-fake-row" style="border-left: 4px solid #f17cb0;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-font" style="padding-right:6px"></div>
                                font </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>2</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="2" id="rbc-11599114105112116" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 8%, #FFFFFF 8%, #FFFFFF 8%);
background: -webkit-gradient(linear, left top, right top, color-stop(8%,#F7F7F7), color-stop(8%,#FFFFFF), color-stop(8%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);
background: -o-linear-gradient(left,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);
background: linear-gradient(to right,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);"> <div class="pd-table-fake-row" style="border-left: 4px solid #faa43a;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-script" style="padding-right:6px"></div>
                                script </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>1</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="3" id="rbc-10011199" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 8%, #FFFFFF 8%, #FFFFFF 8%);
background: -webkit-gradient(linear, left top, right top, color-stop(8%,#F7F7F7), color-stop(8%,#FFFFFF), color-stop(8%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);
background: -o-linear-gradient(left,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);
background: linear-gradient(to right,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);"> <div class="pd-table-fake-row" style="border-left: 4px solid #b276b2;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> 
                                <div class="icon icon-doc" style="padding-right:6px"></div>
                                doc </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>1</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr> 
                      <td>Total</td>
                      <td style="text-align:right;">12</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              </div></div></div></div><div class="report-block-container"><div id="report-block-size_by_domain" class="report-block report-block-halfwidth" style="float: left; clear: left;"><div class="report-block-header report-header-tight"><h2 id="size_by_domain-title">Content size by domain</h2>
              
            <div class="tooltip-container" data-identifier="size_by_domain"> 
              <div class="tooltip-content"> 
                <p><strong>Content size by domain</strong></p>
                <p>See the distribution of content sizes on your domain versus 
                  third party domains.</p>
              </div>
            </div>
            </div><div id="report-block-size_by_domain-chart"><div id="size_by_domain-chart" class="pd-chart" data-highcharts-chart="3">
                
              <div class="highcharts-container" id="highcharts-6" style="position: relative; overflow: hidden; width: 438px; height: 300px; text-align: left; line-height: normal; z-index: 0; left: 0px; top: 0.5px;"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="438" height="300"><desc>Created 
                with Highcharts 4.0.3</desc><defs><clipPath id="highcharts-7"><rect x="0" y="0" width="348" height="250"></rect></clipPath></defs><rect x="0" y="0" width="438" height="300" strokeWidth="0" fill="rgba(0, 0, 0, 0.0)" class=" highcharts-background"></rect><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 80 10.5 L 428 10.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 93.5 L 428 93.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 177.5 L 428 177.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 80 260.5 L 428 260.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" style="" clip-path="url(#highcharts-7)"><rect x="39" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="51" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="63" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="76" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="88" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="101" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="113" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="126" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="138" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="150" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="163" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="175" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="188" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="200" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="213" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="225" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="237" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="250" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="262" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="275" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="287" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="300" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="312" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="324" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect><rect x="337" y="40" width="10" height="5" fill="#3361b6" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" style="" clip-path="url(#highcharts-7)"><rect x="39" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="51" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="63" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="76" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="88" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="101" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="113" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="126" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="138" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="150" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="163" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="175" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="188" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="200" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="213" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="225" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="237" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="250" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="262" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="275" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="287" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="300" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="312" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="324" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="337" y="45" width="10" height="206" fill="#1fc1d1" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(80,10) scale(1 1)" clip-path="none"></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="104.85714285714286" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>17 
                Jul</tspan></text><text x="154.57142857142856" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>18 
                Jul</tspan></text><text x="204.28571428571428" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>19 
                Jul</tspan></text><text x="254" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>20 
                Jul</tspan></text><text x="303.71428571428567" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>21 
                Jul</tspan></text><text x="353.42857142857144" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>22 
                Jul</tspan></text><text x="403.1428571428571" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>23 
                Jul</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="263.5" opacity="1"><tspan>0 
                bytes</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="180.16666666666666" opacity="1"><tspan>195.31 
                KB</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="96.83333333333331" opacity="1"><tspan>390.63 
                KB</tspan></text><text x="65" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="13.499999999999972" opacity="1"><tspan>585.94 
                KB</tspan></text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)"><path fill="#f7f7f7" d="M 5 0 L 11 0 C 16 0 16 0 16 5 L 16 11 C 16 16 16 16 11 16 L 5 16 C 0 16 0 16 0 11 L 0 5 C 0 0 0 0 5 0"></path></g></svg> 
                <div class="highcharts-tooltip" style="position: absolute; left: 0px; top: -9999px;"><span style="position: absolute; white-space: nowrap; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(107, 107, 107); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" zindex="1"></span></div>
              </div>
              </div></div><div id="report-block-size_by_domain-table"><div id="size_by_domain-table" class="report-chart-table pd-table-container">
                
              <div class="pd-table-container"> 
                <table class="pd-table" name="all">
                  <thead>
                    <tr> 
                      <th class="pd-table-th" style="width: 80%;">domains</th>
                      <th class="pd-table-th" style="text-align:right;">median</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-pd-table-index="0" id="rbc-10511011610111411097108" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 98%, #FFFFFF 98%, #FFFFFF 98%);
background: -webkit-gradient(linear, left top, right top, color-stop(98%,#F7F7F7), color-stop(98%,#FFFFFF), color-stop(98%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 98%,#FFFFFF 98%,#FFFFFF 98%);
background: -o-linear-gradient(left,  #F7F7F7 98%,#FFFFFF 98%,#FFFFFF 98%);
background: linear-gradient(to right,  #F7F7F7 98%,#FFFFFF 98%,#FFFFFF 98%);"> 
                        <div class="pd-table-fake-row" style="border-left: 4px solid #1fc1d1;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> internal </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>483.73 KB</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="1" id="rbc-10112011610111411097108" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 2%, #FFFFFF 2%, #FFFFFF 2%);
background: -webkit-gradient(linear, left top, right top, color-stop(2%,#F7F7F7), color-stop(2%,#FFFFFF), color-stop(2%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 2%,#FFFFFF 2%,#FFFFFF 2%);
background: -o-linear-gradient(left,  #F7F7F7 2%,#FFFFFF 2%,#FFFFFF 2%);
background: linear-gradient(to right,  #F7F7F7 2%,#FFFFFF 2%,#FFFFFF 2%);"> <div class="pd-table-fake-row" style="border-left: 4px solid #3361b6;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> external </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>11.28 KB</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr> 
                      <td>Total</td>
                      <td style="text-align:right;">495.01 KB</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              </div></div></div></div><div class="report-block-container"><div id="report-block-request_by_domain" class="report-block report-block-halfwidth" style="float: right; clear: right;"><div class="report-block-header report-header-tight"><h2 id="request_by_domain-title">Requests by domain</h2>
              
            <div class="tooltip-container" data-identifier="request_by_domain"> 
              <div class="tooltip-content"> 
                <p><strong>Requests by domain</strong></p>
                <p>See the distribution of requests done from your domain versus 
                  third party domains.</p>
              </div>
            </div>
            </div><div id="report-block-request_by_domain-chart"><div id="request_by_domain-chart" class="pd-chart" data-highcharts-chart="4">
                
              <div class="highcharts-container" id="highcharts-8" style="position: relative; overflow: hidden; width: 438px; height: 300px; text-align: left; line-height: normal; z-index: 0; left: 0.5px; top: 0.5px;"><svg version="1.1" style="font-family:&quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif;font-size:12px;" xmlns="http://www.w3.org/2000/svg" width="438" height="300"><desc>Created 
                with Highcharts 4.0.3</desc><defs><clipPath id="highcharts-9"><rect x="0" y="0" width="389" height="250"></rect></clipPath></defs><rect x="0" y="0" width="438" height="300" strokeWidth="0" fill="rgba(0, 0, 0, 0.0)" class=" highcharts-background"></rect><g class="highcharts-grid" zIndex="1"></g><g class="highcharts-grid" zIndex="1"><path fill="none" d="M 39 10.5 L 428 10.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 39 93.5 L 428 93.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 39 177.5 L 428 177.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path><path fill="none" d="M 39 260.5 L 428 260.5" stroke="#DCDCDC" stroke-width="1" zIndex="1" opacity="1"></path></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-axis" zIndex="2"></g><g class="highcharts-series-group" zIndex="3"><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(39,10) scale(1 1)" style="" clip-path="url(#highcharts-9)"><rect x="43" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="57" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="71" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="85" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="99" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="113" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="126" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="140" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="154" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="168" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="182" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="196" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="210" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="224" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="238" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="251" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="265" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="279" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="293" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="307" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="321" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="335" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="349" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="363" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect><rect x="376" y="34" width="12" height="17" fill="#3361b6" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(39,10) scale(1 1)" clip-path="none"></g><g class="highcharts-series highcharts-tracker" visibility="visible" zIndex="0.1" transform="translate(39,10) scale(1 1)" style="" clip-path="url(#highcharts-9)"><rect x="43" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="57" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="71" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="85" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="99" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="113" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="126" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="140" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="154" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="168" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="182" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="196" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="210" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="224" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="238" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="251" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="265" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="279" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="293" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="307" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="321" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="335" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="349" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="363" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect><rect x="376" y="51" width="12" height="200" fill="#1fc1d1" rx="0" ry="0"></rect></g><g class="highcharts-markers" visibility="visible" zIndex="0.1" transform="translate(39,10) scale(1 1)" clip-path="none"></g></g><g class="highcharts-axis-labels highcharts-xaxis-labels" zIndex="7"><text x="66.78571428571429" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>17 
                Jul</tspan></text><text x="122.35714285714286" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>18 
                Jul</tspan></text><text x="177.92857142857144" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>19 
                Jul</tspan></text><text x="233.50000000000003" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>20 
                Jul</tspan></text><text x="289.07142857142856" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>21 
                Jul</tspan></text><text x="344.64285714285717" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>22 
                Jul</tspan></text><text x="400.2142857142857" text-anchor="middle" style="color:#606060;cursor:default;font-size:11px;fill:#606060;" y="280" opacity="1"><tspan>23 
                Jul</tspan></text></g><g class="highcharts-axis-labels highcharts-yaxis-labels" zIndex="7"><text x="24" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="263.5" opacity="1">0</text><text x="24" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="180.16666666666666" opacity="1">5</text><text x="24" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="96.83333333333331" opacity="1">10</text><text x="24" text-anchor="end" style="width:125px;color:#A6A6A6;cursor:default;font-size:11px;fill:#A6A6A6;" y="13.499999999999972" opacity="1">15</text></g><g class="highcharts-tooltip" zIndex="8" style="cursor:default;padding:0;white-space:nowrap;" transform="translate(0,-9999)"><path fill="#f7f7f7" d="M 5 0 L 11 0 C 16 0 16 0 16 5 L 16 11 C 16 16 16 16 11 16 L 5 16 C 0 16 0 16 0 11 L 0 5 C 0 0 0 0 5 0"></path></g></svg> 
                <div class="highcharts-tooltip" style="position: absolute; left: 0px; top: -9999px;"><span style="position: absolute; white-space: nowrap; font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px; color: rgb(107, 107, 107); margin-left: 0px; margin-top: 0px; left: 8px; top: 8px;" zindex="1"></span></div>
              </div>
              </div></div><div id="report-block-request_by_domain-table"><div id="request_by_domain-table" class="report-chart-table pd-table-container">
                
              <div class="pd-table-container"> 
                <table class="pd-table" name="all">
                  <thead>
                    <tr> 
                      <th class="pd-table-th" style="width: 80%;">domains</th>
                      <th class="pd-table-th" style="text-align:right;">median</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr data-pd-table-index="0" id="rbc-10511011610111411097108" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 92%, #FFFFFF 92%, #FFFFFF 92%);
background: -webkit-gradient(linear, left top, right top, color-stop(92%,#F7F7F7), color-stop(92%,#FFFFFF), color-stop(92%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 92%,#FFFFFF 92%,#FFFFFF 92%);
background: -o-linear-gradient(left,  #F7F7F7 92%,#FFFFFF 92%,#FFFFFF 92%);
background: linear-gradient(to right,  #F7F7F7 92%,#FFFFFF 92%,#FFFFFF 92%);"> 
                        <div class="pd-table-fake-row" style="border-left: 4px solid #1fc1d1;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> internal </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>12</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                    <tr data-pd-table-index="1" id="rbc-10112011610111411097108" class="pd-rbc-row data-color pd-table-nonclickable"> 
                      <td colspan="2" style="background: -moz-linear-gradient(left,  #F7F7F7 8%, #FFFFFF 8%, #FFFFFF 8%);
background: -webkit-gradient(linear, left top, right top, color-stop(8%,#F7F7F7), color-stop(8%,#FFFFFF), color-stop(8%,#FFFFFF));
background: -webkit-linear-gradient(left,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);
background: -o-linear-gradient(left,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);
background: linear-gradient(to right,  #F7F7F7 8%,#FFFFFF 8%,#FFFFFF 8%);"> <div class="pd-table-fake-row" style="border-left: 4px solid #3361b6;"> 
                          <div class="pd-table-row-flash "></div>
                          <div class="pd-table-fake-cells"> 
                            <div class="pd-table-fake-cell" style="width: 80%;"> 
                              <div> external </div>
                            </div>
                            <div class="pd-table-fake-cell" style="width: 20%;text-align:right;"> 
                              <div>1</div>
                            </div>
                          </div>
                        </div></td>
                    </tr>
                  </tbody>
                  <tfoot>
                    <tr> 
                      <td>Total</td>
                      <td style="text-align:right;">13</td>
                    </tr>
                  </tfoot>
                </table>
              </div>
              </div></div></div></div></div>
            </div>
        </div>
</div>

<div id="mithrilInfoboxContainer" style="z-index:301;"><div class="infobox__root___29yzw"></div></div>
<div id="mithrilModal"></div>


<!-- ADROLL PIXEL -->
<!-- ADROLL PIXEL END -->



<div id="popup-content-templates" class="templates">
    

    <div id="methodPopup" style="display: none; width: 600px;">

        <form id="methodSelect">
            <input type="hidden" name="index">
            <input type="hidden" name="id">
            
      <div class="input-row"> 
        <label class="label-left" for="pd-method-type" style="width: 35%;">How 
        should we contact you?</label>
        <div class="pd-input-select-wrapper pd-select pd-select-white pd-select-60 pd-js-method-type"> 
          <select name="name" class="pd-select pd-select-white pd-select-60 pd-js-method-type" id="pd-method-type">
            <option value="email" selected="selected">Email</option>
            <option value="sms">Text / SMS (cellphone)</option>
            <option value="webhook">URL / Webhook</option>
            <option value="twitter_dm">Twitter (DM)</option>
            <!-- <option value="twitter">Twitter</option> -->
          </select>
          <span class="pd-input-select-wrappertext">Email</span></div>
      </div>
        </form>

        <form name="email">
            
      <div class="input-row"> 
        <label class="label-left" for="pd-email" style="width: 35%;">Email address</label>
        <input id="pd-email" class="input input-text" name="address" type="text" style="width: 60%;">
      </div>
        </form>

        <form name="twitter_dm">
            
      <div class="input-row"> 
        <label class="label-left" for="pd-twitter-dm-username" style="width: 35%;">Twitter 
        Username</label>
        <span style="position: absolute; margin-top: 14px; margin-left: 10px;" class="pd-weak">@</span> 
        <input id="pd-twitter-dm-username" class="input input-text" name="user" type="text" style="width: 60%; padding-left: 23px;">
      </div>

            <span class="pd-weak">Direct Messages will be sent from <strong class="pd-strong">@pingdomalert</strong>. You must follow this account for us to be able to send Direct Messages to you.</span>
        </form>

        <form name="webhook">

            
      <div class="input-row"> 
        <label class="label-left" for="pd-url" style="width: 35%;">Webhook URL</label>
        <input id="pd-url" class="input input-text" name="url" type="text" style="width: 60%;">
      </div>

            <span class="pd-weak"></span>
        </form>

        <form name="sms">
            
      <div class="input-row"> 
        <label class="label-left" for="pd-sms-prefix" style="width: 35%;">Cellphone 
        number</label>
        <div style="width: 60%; display: inline-block; vertical-align:top;" class="pd-multi-input-container"> 
          <div class="pd-input-select-wrapper pd-select pd-select-white width-2-3"> 
            <select name="country_code" class="pd-select pd-select-white width-2-3" id="pd-sms-prefix">
              <option value="" selected="selected">Country code</option>
              <option value="93">Afghanistan (+93)</option>
              <option value="355">Albania (+355)</option>
              <option value="213">Algeria (+213)</option>
              <option value="1684">American Samoa (+1684)</option>
              <option value="376">Andorra (+376)</option>
              <option value="244">Angola (+244)</option>
              <option value="1672">Antarctica Scott Base (+1672)</option>
              <option value="1268">Antigua and Barbuda (+1268)</option>
              <option value="54">Argentina (+54)</option>
              <option value="374">Armenia (+374)</option>
              <option value="297">Aruba (+297)</option>
              <option value="61">Australia (+61)</option>
              <option value="43">Austria (+43)</option>
              <option value="994">Azerbaijan (+994)</option>
              <option value="1242">Bahamas (+1242)</option>
              <option value="973">Bahrain (+973)</option>
              <option value="880">Bangladesh (+880)</option>
              <option value="1246">Barbados (+1246)</option>
              <option value="375">Belarus (+375)</option>
              <option value="32">Belgium (+32)</option>
              <option value="501">Belize (+501)</option>
              <option value="229">Benin (+229)</option>
              <option value="1441">Bermuda (+1441)</option>
              <option value="975">Bhutan (+975)</option>
              <option value="591">Bolivia (+591)</option>
              <option value="599">Bonaire, Saint Eustatius and Saba (+599)</option>
              <option value="387">BosniaHerzegovina (+387)</option>
              <option value="267">Botswana (+267)</option>
              <option value="55">Brazil (+55)</option>
              <option value="246">British Indian Ocean Territory (+246)</option>
              <option value="1284">British Virgin Islands (+1284)</option>
              <option value="673">Brunei (+673)</option>
              <option value="359">Bulgaria (+359)</option>
              <option value="226">Burkina Faso (+226)</option>
              <option value="257">Burundi (+257)</option>
              <option value="855">Cambodia (+855)</option>
              <option value="237">Cameroon (+237)</option>
              <option value="1">Canada (+1)</option>
              <option value="238">Cape Verde (+238)</option>
              <option value="1345">Cayman Islands (+1345)</option>
              <option value="236">Central African Republic (+236)</option>
              <option value="235">Chad (+235)</option>
              <option value="56">Chile (+56)</option>
              <option value="86">China (+86)</option>
              <option value="61">Christmas Island (+61)</option>
              <option value="61">Cocos Islands (+61)</option>
              <option value="57">Colombia (+57)</option>
              <option value="269">Comoros (+269)</option>
              <option value="242">Congo (+242)</option>
              <option value="682">Cook Islands (+682)</option>
              <option value="506">Costa Rica (+506)</option>
              <option value="385">Croatia (+385)</option>
              <option value="599">Curacao (+599)</option>
              <option value="357">Cyprus (+357)</option>
              <option value="420">Czech Republic (+420)</option>
              <option value="243">Democratic Republic Of The Congo (+243)</option>
              <option value="45">Denmark (+45)</option>
              <option value="253">Djibouti (+253)</option>
              <option value="1767">Dominica (+1767)</option>
              <option value="1809">Dominican Republic (+1809)</option>
              <option value="1829">Dominican Republic 2 (+1829)</option>
              <option value="593">Ecuador (+593)</option>
              <option value="20">Egypt (+20)</option>
              <option value="503">El Salvador (+503)</option>
              <option value="240">Equatorial Guinea (+240)</option>
              <option value="291">Eritrea (+291)</option>
              <option value="372">Estonia (+372)</option>
              <option value="251">Ethiopia (+251)</option>
              <option value="298">Faeroe Islands (+298)</option>
              <option value="500">Falkland Islands (+500)</option>
              <option value="691">Federated States of Micronesia (+691)</option>
              <option value="679">Fiji Islands (+679)</option>
              <option value="358">Finland (+358)</option>
              <option value="33">France (+33)</option>
              <option value="596">French Antilles (Martinique) (+596)</option>
              <option value="594">French Guiana (+594)</option>
              <option value="689">French Polynesia (+689)</option>
              <option value="241">Gabonese Republic (+241)</option>
              <option value="220">Gambia (+220)</option>
              <option value="995">Georgia (+995)</option>
              <option value="49">Germany (+49)</option>
              <option value="233">Ghana (+233)</option>
              <option value="350">Gibraltar (+350)</option>
              <option value="30">Greece (+30)</option>
              <option value="299">Greenland (+299)</option>
              <option value="1473">Grenada (+1473)</option>
              <option value="590">Guadeloupe (+590)</option>
              <option value="1671">Guam (+1671)</option>
              <option value="502">Guatemala (+502)</option>
              <option value="224">Guinea (+224)</option>
              <option value="245">GuineaBissau (+245)</option>
              <option value="592">Guyana (+592)</option>
              <option value="509">Haiti (+509)</option>
              <option value="504">Honduras (+504)</option>
              <option value="852">Hong Kong (+852)</option>
              <option value="36">Hungary (+36)</option>
              <option value="354">Iceland (+354)</option>
              <option value="91">India (+91)</option>
              <option value="62">Indonesia (+62)</option>
              <option value="964">Iraq (+964)</option>
              <option value="353">Ireland (+353)</option>
              <option value="972">Israel (+972)</option>
              <option value="39">Italy (+39)</option>
              <option value="225">Ivory Coast (+225)</option>
              <option value="1876">Jamaica (+1876)</option>
              <option value="81">Japan (+81)</option>
              <option value="44">Jersey (+44)</option>
              <option value="962">Jordan (+962)</option>
              <option value="7">Kazakhstan (+7)</option>
              <option value="254">Kenya (+254)</option>
              <option value="686">Kiribati (+686)</option>
              <option value="82">Korea, South (+82)</option>
              <option value="383">Kosovo (+383)</option>
              <option value="965">Kuwait (+965)</option>
              <option value="996">Kyrgyzstan (+996)</option>
              <option value="371">Latvia (+371)</option>
              <option value="961">Lebanon (+961)</option>
              <option value="266">Lesotho (+266)</option>
              <option value="231">Liberia (+231)</option>
              <option value="218">Libya (+218)</option>
              <option value="423">Liechtenstein (+423)</option>
              <option value="370">Lithuania (+370)</option>
              <option value="352">Luxembourg (+352)</option>
              <option value="853">Macao (+853)</option>
              <option value="389">Macedonia (+389)</option>
              <option value="261">Madagascar (+261)</option>
              <option value="265">Malawi (+265)</option>
              <option value="60">Malaysia (+60)</option>
              <option value="960">Maldives (+960)</option>
              <option value="223">Mali (+223)</option>
              <option value="356">Malta (+356)</option>
              <option value="692">Marshall Islands (+692)</option>
              <option value="222">Mauritania (+222)</option>
              <option value="230">Mauritius (+230)</option>
              <option value="262">Mayotte (+262)</option>
              <option value="269">Mayotte Island (+269)</option>
              <option value="52">Mexico (Bands 48) (+52)</option>
              <option value="373">Moldova (+373)</option>
              <option value="377">Monaco (+377)</option>
              <option value="976">Mongolia (+976)</option>
              <option value="382">Montenegro (+382)</option>
              <option value="212">Morocco (+212)</option>
              <option value="258">Mozambique (+258)</option>
              <option value="95">Myanmar (+95)</option>
              <option value="264">Namibia (+264)</option>
              <option value="674">Nauru (+674)</option>
              <option value="977">Nepal (+977)</option>
              <option value="31">Netherlands (+31)</option>
              <option value="687">New Caledonia (+687)</option>
              <option value="64">New Zealand (+64)</option>
              <option value="505">Nicaragua (+505)</option>
              <option value="227">Niger (+227)</option>
              <option value="234">Nigeria (+234)</option>
              <option value="683">Niue (+683)</option>
              <option value="672">Norfolk Island (+672)</option>
              <option value="1670">Northern Marianas Islands (+1670)</option>
              <option value="47">Norway (+47)</option>
              <option value="968">Oman (+968)</option>
              <option value="92">Pakistan (+92)</option>
              <option value="680">Palau (+680)</option>
              <option value="970">Palestinian National Authority (+970)</option>
              <option value="507">Panama (+507)</option>
              <option value="675">Papua New Guinea (+675)</option>
              <option value="595">Paraguay (+595)</option>
              <option value="51">Peru (+51)</option>
              <option value="63">Philippines (+63)</option>
              <option value="870">Pitcairn (+870)</option>
              <option value="48">Poland (+48)</option>
              <option value="351">Portugal (+351)</option>
              <option value="1787">Puerto Rico 1 (+1787)</option>
              <option value="1939">Puerto Rico 2 (+1939)</option>
              <option value="974">Qatar (+974)</option>
              <option value="262">Reunion (+262)</option>
              <option value="262">Reunion Island (+262)</option>
              <option value="40">Romania (+40)</option>
              <option value="7">Russia (+7)</option>
              <option value="250">Rwanda (+250)</option>
              <option value="590">Saint Barthelemy (+590)</option>
              <option value="290">Saint Helena (+290)</option>
              <option value="590">Saint Martin (+590)</option>
              <option value="508">Saint Pierre and Miquelon (+508)</option>
              <option value="378">San Marino (+378)</option>
              <option value="239">Sao Tome (+239)</option>
              <option value="966">Saudi Arabia (+966)</option>
              <option value="221">Senegal (+221)</option>
              <option value="381">Serbia (+381)</option>
              <option value="248">Seychelles (+248)</option>
              <option value="232">Sierra Leone (+232)</option>
              <option value="65">Singapore (+65)</option>
              <option value="421">Slovakia (+421)</option>
              <option value="386">Slovenia (+386)</option>
              <option value="677">Solomon Islands (+677)</option>
              <option value="252">Somalia (+252)</option>
              <option value="27">South Africa (+27)</option>
              <option value="211">South Sudan (+211)</option>
              <option value="34">Spain (+34)</option>
              <option value="94">Sri Lanka (+94)</option>
              <option value="1869">St. Kitts and Nevis (+1869)</option>
              <option value="1758">St. Lucia (+1758)</option>
              <option value="599">St. Maarten (+599)</option>
              <option value="508">St. Pierre and Miguelon (+508)</option>
              <option value="1809">St. Vincent (+1809)</option>
              <option value="597">Suriname (+597)</option>
              <option value="47">Svalbard and Jan Mayen (+47)</option>
              <option value="268">Swaziland (+268)</option>
              <option value="46">Sweden (+46)</option>
              <option value="41">Switzerland (+41)</option>
              <option value="886">Taiwan (+886)</option>
              <option value="992">Tajikistan (+992)</option>
              <option value="255">Tanzania (+255)</option>
              <option value="66">Thailand (+66)</option>
              <option value="228">Togo (+228)</option>
              <option value="676">Tonga (+676)</option>
              <option value="1868">Trinidad and Tobago (+1868)</option>
              <option value="216">Tunisia (+216)</option>
              <option value="90">Turkey (+90)</option>
              <option value="993">Turkmenistan (+993)</option>
              <option value="1649">Turks and Caicos (+1649)</option>
              <option value="688">Tuvalu (+688)</option>
              <option value="1340">U.S. Virgin Islands (+1340)</option>
              <option value="256">Uganda (+256)</option>
              <option value="380">Ukraine (+380)</option>
              <option value="971">United Arab Emirates (+971)</option>
              <option value="44">United Kingdom (+44)</option>
              <option value="1">United States Minor Outlying Islands (+1)</option>
              <option value="1">United States of America (+1)</option>
              <option value="598">Uruguay (+598)</option>
              <option value="998">Uzbekistan Tashkent (+998)</option>
              <option value="678">Vanuatu (+678)</option>
              <option value="39">Vatican City (+39)</option>
              <option value="58">Venezuela (+58)</option>
              <option value="84">Vietnam (+84)</option>
              <option value="681">Wallis And Futuna Islands (+681)</option>
              <option value="212">Western Sahara (+212)</option>
              <option value="685">Western Samoa (+685)</option>
              <option value="967">Yemen (+967)</option>
              <option value="260">Zambia (+260)</option>
              <option value="263">Zimbabwe (+263)</option>
            </select>
            <span class="pd-input-select-wrappertext">Country code</span></div>
          <input class="input input-text width-1-3" type="text" name="number" placeholder="000 555 55 55" style="float: right;">
        </div>
      </div>

            
      <div class="input-row"> 
        <label class="label-left" for="pd-sms-provider" style="width: 35%;">Default 
        Provider</label>
        <div style="width: 60%; display: inline-block;" class="pd-multi-input-container"> 
          <div class="pd-input-select-wrapper pd-select pd-select-white width-1-1"> 
            <select name="provider" class="pd-select pd-select-white width-1-1" id="pd-sms-provider">
              <option value="nexmo" selected="selected">Nexmo (Recommended)</option>
              <option value="bulksms">BulkSMS</option>
              <option value="esendex">Esendex</option>
              <option value="cellsynt">Cellsynt</option>
            </select>
            <span class="pd-input-select-wrappertext">Nexmo (Recommended)</span></div>
        </div>
      </div>

            <span class="pd-weak">
              <p class="bottomMarg">You can use the Send test SMS button to verify that your cell phone can receive SMS via the selected provider.</p>
              <p>You can also view the provider network coverage here:
                <a href="https://help.nexmo.com/hc/en-us/sections/200622473-Country-Specific-Features-and-Restrictions" target="_blank">Nexmo</a>,
                <a href="http://www.bulksms.com/pricing/all/" target="_blank">BulkSMS</a>,
                <a href="https://www.cellsynt.com/" target="_blank">Cellsynt</a>
                and <a href="http://www.esendex.co.uk/" target="_blank">Esendex</a>.</p>
            </span>

            <div id="sms_error" class="pd-weak" style="color: red; display: none; margin-top: 20px;">
                There was an error sending the SMS, are you sure you have enough TEST SMS credits?<br>
                Please contact support if you would like to refill your credits.
            </div>

        </form>

        <form name="twitter" style="display: none;">
            <span class="pd-weak">After clicking "Add" you will be 
redirected to Twitter to authorize Pingdom. This is only necessary if 
you want Pingdom to send alerts with your Twiter user.</span>
        </form>

    </div>

</div>
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/lodash.js"></script>
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/hamster-1.js"></script>
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/rbc.js"></script>
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/rbc-base.js"></script>
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/summarySuccess.js"></script><div id="" class="popup-modal" style="display: none;">
        <div class="popup-modal-heading">Edit Page Speed Check</div>
        <div class="popup-modal-close icon-cross"></div>
        
  <div class="popup-modal-content"> 
    <form id="rbc-edit-modal-form">
      <div class="input-row"> 
        <label class="label-left" for="rbc-modal-check-url" style="width: 18%">URL:</label>
        <input id="rbc-modal-check-url" class="input input-text width-1-2" name="url" style="width: 82%; margin: 0;" type="text" placeholder="www.example.com">
      </div>
      <div class="input-row"> 
        <label class="label-left" for="rbc-modal-check-title" style="width: 18%">Name:</label>
        <input id="rbc-modal-check-title" class="input input-text width-1-2" name="title" style="width: 82%; margin: 0;" type="text" placeholder="">
      </div>
      <div class="input-row"> 
        <label class="label-left" style="width: 18%">Check interval:</label>
        <span class="form-text form-text-left"><strong>30 minutes</strong></span> 
      </div>
      <div class="input-row"> 
        <label class="label-left" style="width: 18%">Test from:</label>
        <div class="js-region-selector"></div>
      </div>
    </form>
  </div>
        <div class="popup-modal-actions">
            <div class="popup-modal-actions-inner"><button class="pd-button pd-button-large " data-id="Cancel">Cancel</button><button class="pd-button pd-button-large  pd-button-primary" data-id="Modify check">Modify check</button></div>
        </div>
        <div class="popup-modal-message"></div>
    </div><div id="popup-shield" class="popup-shield"></div><div id="" class="popup-dialog" style="display: none;"></div>
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/waterfall.js"></script>
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/filmstrip.js"></script>



<div id="feature-notification-root"></div>
<link rel="stylesheet" type="text/css" media="all" href="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/featureNotification.css">
<script type="text/javascript" src="../../../Users/NOOR%20TECH/Desktop/New%20folder%20(2)/PageSpeedReport_files/featureNotification.js" async="true"></script>
<div id="" class="popup-modal pd-modal-contact-support" style="display: none;">
        <div class="popup-modal-heading">Contact Support</div>
        <div class="popup-modal-close icon-cross"></div>
        
  <div class="popup-modal-content"> 
    <form id="contact-support-content-template">
      <input type="hidden" name="url">
      <input type="hidden" name="hash">
      <div class="input-row"> 
        <label class="label-left label-required" for="contact-support-name">Name</label>
        <input id="contact-support-name" class="input input-text" name="name" type="text" placeholder="Your Name">
      </div>
      <div class="input-row"> 
        <label class="label-left label-required" for="contact-support-email">Email</label>
        <input id="contact-support-email" class="input input-text" name="email" type="text" placeholder="name@example.com">
      </div>
      <div class="input-row"> 
        <label class="label-left label-required" for="contact-subject">Subject</label>
        <div class="input-section"> 
          <div class="input-section-row"> 
            <div class="input-radio-unit"> 
              <div class="pd-input-radio-wrapper pd-input-radio"> 
                <input id="contact-subject-support" class="pd-input-radio js-contact-subject pd-styled-radio" name="subject" type="radio" value="technical" checked="checked">
                <label class="pd-input-radio-wrapperlabel" for="contact-subject-support"></label>
              </div>
              <label id="label-contact-subject-support" for="contact-subject-support" class="label-right">Technical 
              support</label>
            </div>
            <div class="input-radio-unit"> 
              <div class="pd-input-radio-wrapper pd-input-radio"> 
                <input id="contact-subject-billing" class="pd-input-radio js-contact-subject pd-styled-radio" name="subject" type="radio" value="billing">
                <label class="pd-input-radio-wrapperlabel" for="contact-subject-billing"></label>
              </div>
              <label for="contact-subject-billing" class="label-right">Billing</label>
            </div>
          </div>
          <div class="input-section-row"> 
            <div class="input-radio-unit"> 
              <div class="pd-input-radio-wrapper pd-input-radio"> 
                <input id="contact-subject-sales" class="pd-input-radio js-contact-subject pd-styled-radio" name="subject" type="radio" value="sales">
                <label class="pd-input-radio-wrapperlabel" for="contact-subject-sales"></label>
              </div>
              <label for="contact-subject-sales" class="label-right">Sales</label>
            </div>
            <div class="input-radio-unit"> 
              <div class="pd-input-radio-wrapper pd-input-radio"> 
                <input id="contact-subject-other" class="pd-input-radio js-contact-subject pd-styled-radio" name="subject" type="radio" value="other">
                <label class="pd-input-radio-wrapperlabel" for="contact-subject-other"></label>
              </div>
              <label for="contact-subject-other" class="label-right">Other</label>
            </div>
          </div>
        </div>
      </div>
      <div class="input-row"> 
        <label class="label-left label-required" for="contact-support-message">Message</label>
        <textarea id="contact-support-message" class="input input-textarea" name="message" placeholder="Type here..."></textarea>
      </div>
    </form>
  </div>
        <div class="popup-modal-actions">
            <div class="popup-modal-actions-inner"><button class="pd-button pd-button-large " data-id="Cancel">Cancel</button><button class="pd-button pd-button-large  pd-button-primary" data-id="Send Message">Send Message</button></div>
        </div>
        <div class="popup-modal-message"></div>
    </div>
	
	
	
	<div id="" class="popup-modal" style="display: none;">
     
   
        

     
    <div class="popup-modal-message"></div>
    </div><div class="popup-modal popup-modal-styleguide sg-modal cc-modal" style="display: none;">
        
  <div class="popup-modal-content"> </div>
        <div class="popup-modal-actions"><button class="sg-button left" data-id="Cancel">Cancel</button><button class="sg-button green right pd-button-primary" data-id="Add credit card">Add credit card</button></div>
    </div><script type="text/javascript" id="">function setupPendo(){(function(d){(function(a,b,g,e,c){c=a[e]=a[e]||{};c._q=[];var f=["initialize","identify","updateOptions","pageLoad"];a=0;for(e=f.length;a<e;++a)(function(a){c[a]=c[a]||function(){c._q[a===f[0]?"unshift":"push"]([a].concat([].slice.call(arguments,0)))}})(f[a]);a=b.createElement(g);a.async=!0;a.src="https://cdn.pendo.io/agent/static/"+d+"/pendo.js";b=b.getElementsByTagName(g)[0];b.parentNode.insertBefore(a,b)})(window,document,"script","pendo");pendo.initialize({visitor:{id:window.MyPingdom.currentAccount.login_user_account_id},
account:{id:window.MyPingdom.currentAccount.account_id,test_account:window.MyPingdom.currentAccount.skipMessaging,planLevel:window.MyPingdom.currentAccount.service_type,monthsSinceSignUp:Math.floor((+new Date/1E3-window.MyPingdom.currentAccount.account_properties.account_creation_time)/86400/30)}})})("b5074c35-780e-41c0-6bae-ed9e16229898")}
(function(){function d(){a--;0>a||(window.MyPingdom&&window.MyPingdom.currentAccount&&window.MyPingdom.currentAccount.account_id&&window.MyPingdom.currentAccount.login_user_account_id&&void 0!=window.MyPingdom.currentAccount.skipMessaging?setupPendo():setTimeout(d,1500))}var a=3;d()})();</script><div id="" class="popup-modal popup-modal-bare sg-modal subscriptions-modal" style="display: none;">
        
  <div class="popup-modal-content"> 
    <div class="popup-modal-close icon-cross"></div>
    <h3 class="title"> Got everything you need?<br>
      Upgrade and get more from your Pingdom </h3>
    <ul class="list list-subscriptions">
      <li class="list-item list-item-subscriptions list-item-active"> 
        <div class="list-item-header"> 
          <h4 class="title">Pingdom Advanced</h4>
          <p class="subtitle">Advanced Web Monitoring</p>
        </div>
        <div class="list-item-content"> 
          <p class="price">$89.95/mo</p>
          <ul class="list list-subscription-features">
            <li class="list-item"><strong>5</strong> Page Speed Checks</li>
            <li class="list-item"><strong>80</strong> Uptime Checks</li>
            <li class="list-item"><strong>999999</strong> Real User Monitoring 
              sites</li>
            <li class="list-item"><strong>350</strong> free SMS alerts</li>
          </ul>
        </div>
        <div class="list-item-footer"> <a href="#" class="sg-button button-continue-using">Continue 
          using</a> </div>
      </li>
      <li class="list-item list-item-subscriptions "> 
        <div class="list-item-header"> 
          <h4 class="title">Pingdom Professional</h4>
          <p class="subtitle">The All-Inclusive Suite</p>
        </div>
        <div class="list-item-content"> 
          <p class="price">$249.00/mo</p>
          <ul class="list list-subscription-features">
            <li class="list-item"><strong>25</strong> Page Speed Checks</li>
            <li class="list-item"><strong>250</strong> Uptime Checks</li>
            <li class="list-item"><strong>999999</strong> Real User Monitoring 
              sites</li>
            <li class="list-item"><strong>500</strong> free SMS alerts</li>
          </ul>
        </div>
        <div class="list-item-footer"> <a href="https://my.pingdom.com/account/upgrade/PINGDOM_PROFESSIONAL_2015" class="sg-button green">Upgrade</a> 
        </div>
      </li>
      <li class="list-item list-item-subscriptions "> 
        <div class="list-item-header"> 
          <h4 class="title">Pingdom Enterprise</h4>
          <p class="subtitle">For Extensive Monitoring</p>
        </div>
        <div class="list-item-content"> 
          <p class="price">$495.00/mo</p>
          <ul class="list list-subscription-features">
            <li class="list-item"><strong>50</strong> Page Speed Checks</li>
            <li class="list-item"><strong>500</strong> Uptime Checks</li>
            <li class="list-item"><strong>999999</strong> Real User Monitoring 
              sites</li>
            <li class="list-item"><strong>1000</strong> free SMS alerts</li>
          </ul>
        </div>
        <div class="list-item-footer"> <a href="https://my.pingdom.com/account/upgrade/PINGDOM_ENTERPRISE_2015" class="sg-button green">Upgrade</a> 
        </div>
      </li>
    </ul>
    <a href="https://my.pingdom.com/account/subscription" class="text-muted view-subscriptions">View 
    all subscriptions</a> </div>
    </div><div class="pd-popup-panel rbc-testPanel" style="display: none;">
    
  
<div class="pd-popup-panel-inner-container"> 
  <div class="pd-popup-panel-heading-container"> 
    <div class="pd-popup-panel-close-button"> <i class="icon icon-cross"></i> 
    </div>
    <h2 class="pd-popup-panel-heading">Latest tests</h2>
  </div>
  <div class="pd-popup-panel-content-container"> 
    <div class="pd-popup-panel-content"> 
      <div> 
        <div class="header header--open">Today</div>
        <div class="message" style="display: none;">Loading...</div>
        <div class="message">No tests this day</div>
        <div id="test_result-table" class="report-chart-table pd-table-container pd-table-clickable"> 
          <div class="pd-table-container"> 
            <table class="pd-table" name="all">
              <thead>
                <tr> 
                  <th class="pd-table-th" style="width: 25%;">Date &amp; Time</th>
                  <th class="pd-table-th" style="text-align: right;">Load Time</th>
                  <th class="pd-table-th" style="text-align: right;">Page Size</th>
                  <th class="pd-table-th" style="text-align: right;">Requests</th>
                  <th class="pd-table-th" style="width: 15%;text-align: right;">Perf. 
                    grade</th>
                  <th class="pd-table-th" style="width: 20px;"></th>
                </tr>
              </thead>
              <tbody>
                <tr data-pd-table-index="0" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 19:34:39</td>
                  <td style="text-align:right;">1s</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="1" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 19:05:28</td>
                  <td style="text-align:right;">393ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="2" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 18:34:39</td>
                  <td style="text-align:right;">392ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="3" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 18:04:39</td>
                  <td style="text-align:right;">3.62s</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="4" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 17:34:39</td>
                  <td style="text-align:right;">436ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="5" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 17:04:39</td>
                  <td style="text-align:right;">393ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="6" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 16:34:39</td>
                  <td style="text-align:right;">351ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="7" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 16:04:39</td>
                  <td style="text-align:right;">494ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="8" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 15:35:24</td>
                  <td style="text-align:right;">375ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="9" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 15:04:39</td>
                  <td style="text-align:right;">432ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="10" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 14:34:39</td>
                  <td style="text-align:right;">393ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="11" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 14:05:28</td>
                  <td style="text-align:right;">471ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="12" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 13:34:39</td>
                  <td style="text-align:right;">554ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="13" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 13:04:39</td>
                  <td style="text-align:right;">383ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
                <tr data-pd-table-index="14" class="pd-rbc-row data-color"> 
                  <td>23/07/2019 12:34:39</td>
                  <td style="text-align:right;">471ms</td>
                  <td style="text-align:right;">495.01 KB</td>
                  <td style="text-align:right;">13</td>
                  <td style="text-align:right;"> <span class="pd-rbc-perf-grade pd-rbc-perf-grade-small pd-rbc-perf-grade-B">B</span> 
                    <span> 85/100</span> </td>
                  <td> <span class="icon-arrow-right pd-table-js-arrow"></span> 
                  </td>
                </tr>
              </tbody>
              <tfoot>
              </tfoot>
            </table>
          </div>
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