<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood AID</title>
<link href="css/lightbox.css" rel="stylesheet" />
    <link href="StyleSheet.css" rel="stylesheet" type="text/css" />

    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--slider-->
<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
     <script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
<script src="js/jquery.flexslider.js" type="text/javascript"></script>
  
 <script type="text/javascript">
     $(function () {
         SyntaxHighlighter.all();
     });
     $(window).load(function () {
         $('.flexslider').flexslider({
             animation: "slide",
             animationLoop: false,
             itemWidth: 210,
             itemMargin: 5,
             minItems: 2,
             maxItems: 4,
             start: function (slider) {
                 $('body').removeClass('loading');
             }
         });
     });
  </script>
</head>


<body>
 <div style= "background-color : gainsboro;">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<h1 style="font-size:60px; color: #bb0c00; float:center;"><img src="pic/logo.png" alt="">BLOOD AID</h1>
		</div>
		
			<form action="search1.php">
			<input type="text" placeholder="Search.." name="search">
			<button type="submit"><img src="pic/search.png" alt=""></button>
			</form>
		
	</div>
</div>
</div>
<div class="nav_bg">
<div class="wrap">
		<?php require('header.php');?>
	</div>

        <div>

          <div class="h_btm_bg">
<div class="wrap">
<div class="h_btm">
	<div class="header-para">
		<!--<img src="cpics/welcome.png"/>	-->	
	
	</div>  
	
	<div class="clear"></div>
</div>
</div>
</div>
<div class="s_bg">
<div class="wrap">
<div class="main_cont">


<div class="main">
	<div class="content">		
			<h4>Blood Request Post:</h4><br>
			
	</div>
	<div class="sidebar">
			<h2>Latest News</h2>
			<div class="blog_posts">

    <marquee direction="up" scrolldelay="300"><table >
<tr><td>
                         <div class="blog_desc">
						<div class="blog_heading">
							<span style="font-weight:bold"><b>HDFC Bank sets Guinness record in blood collection</b>
<p>The blood donation camp organised by HDFC Bank on December 6, 2013 involving 61,902 participants has found a place in Guinness Book of Records as the largest such drive on a single day</p></span>
							
						 </div>	
                         <br />
	<span style="font-weight:bold"><b>World Blood Donor Day: Poor health reduces women blood donors in Bangladesh</b>
<p>While the overall number of blood donors in Bangladesh has grown over the years, women constitute only a tiny 10 percent share owing to health problems like pernicious anaemia and low haemoglobin levels or being underweight</p></span>
					  </div>
                        </td></tr>
                   
                </table></marquee>  
				 
					 <div class="clear"></div>	
				</div>	
			
			
	</div>
	<div class="clear"></div>
	</div>
</div>
</div>
</div>

        </div>
        <div class="clear"></div>
<div class="ftr-bg">
<div class="wrap">
<div class="footer">
	<div class="f_nav">
		<ul>
			<li class="active"><a href="home(afer).php">Home</a></li>			
			<li><a href="donar.php">Donor</a></li>
			<li><a href="index.php">Log out</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			
            </ul>
	</div>
		<div class="copy">
			<p class="title">Blood Aid 2019 </p>
		</div>
	<div class="clear"></div>
</div>
</div>
</div>
</body>
</html>