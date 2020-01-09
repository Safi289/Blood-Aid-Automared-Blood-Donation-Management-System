<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Blood AID</title>
        <link href="css/lightbox.css" rel="stylesheet" />
        <link href="StyleSheet.css" rel="stylesheet" type="text/css" />
        
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            .mySlides {display:none;
                /*
                width: 600px;
                height: 400px;
                */
            }
        </style>

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
        <style>
            .w3-content w3-section {
                width: 100%;
                height: 60%;
            }
            .w3-content w3-section img{
                width: 500px;
                height: 300px;
            }
        </style>
    </head>


    <body>
        <div style= "background-color : #E9DCC9; border-top: 1px solid rgba(214, 195, 167, 0.34);">
            <div class="wrap">
                <div class="header">
                    <div class="logo">
                        <a href="home(after).php"><img src="pic/logo.png" alt="" style="height:80px;width:120px;" ><img src="Images/nameddd.png" alt="" style="height:90px;width:180px;" ></a>
                    </div>
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
                                    <div class="w3-content w3-section" >
                                        <img class="mySlides" src="Images/bloodgiving.PNG" >
                                        <img class="mySlides" src="Images/blooddesign.PNG" >
                                        <img class="mySlides" src="Images/first.PNG" >
                                        <img class="mySlides" src="Images/second.png" >
                                        <img class="mySlides" src="Images/factstart.png" >
                                        <img class="mySlides" src="Images/fact1.PNG" style="height=500px;width=300px;">
                                        <img class="mySlides" src="Images/fact2.PNG" >
                                        <img class="mySlides" src="Images/fact4.jpg" >
                                        <img class="mySlides" src="Images/fact5.png" >
                                        <img class="mySlides" src="Images/fact6.png" >
                                        <img class="mySlides" src="Images/fact7.png" >
                                        <img class="mySlides" src="Images/last%20image.PNG" >
                                        <img class="mySlides" src="Images/before%20last.png" >
                                        <!--                                    <img class="mySlides" src="" style="width:100%">-->
                                    </div>

                                </div>
                                <div class="sidebar">
                                    <h2>Latest News</h2>
                                    <div class="blog_posts">

                                        <marquee direction="up" scrolldelay="150"><table >
                                            <tr><td>
                                                <div class="blog_desc">
                                                    <div class="blog_heading">
                                                        <span style="font-weight:bold"><a href="http://www.searo.who.int/bangladesh/blooddonor/en/" target="_blank"><b>Bangladesh is still to meet the demand of safe blood supply - WHO</b>
                                                            <p>Over 600,000 units of blood were collected in 2016 against an estimated demand of 800,000.Bangladesh has received only 31 percent of its blood from voluntary donors</p></a></span>

                                                    </div>
                                                    <br />
                                                    <div class="blog_heading">
                                                        <span style="font-weight:bold"><a href="https://www.guinnessworldrecords.com/world-records/541023-most-blood-donated-apheresis-platelets" target="_blank"><b>Most blood donated - apheresis (platelets)</b>
                                                            <p>The most blood donated through apheresis (platelets) is 1,197 presentations, and was achieved by James Kuhlmann (USA) in Buffalo, New York, USA, as verified on 20 April 2017.</p></a></span>

                                                    </div>	
                                                    <br />
                                                    <span style="font-weight:bold"><a href="http://www.searo.who.int/bangladesh/wbdd2018/en/" target="_blank"><b>World Blood Donor Day 2018: An action of solidarity</b>
                                                        <p>Every year, on 14 June, countries around the world celebrate World Blood Donor Day.The theme of this year’s campaign is blood donation as an action of solidarity, under the slogan ‘Be there for someone else. Give blood. Share life’. The Government of Bangladesh along with development partners including WHO, Non-Government Organizations and philanthropic organizations observe the day, acknowledging the contribution of the voluntary, unpaid blood donors for their life-saving gifts of blood.</p></a></span>
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
        <script>
            var myIndex = 0;
            carousel();

            function carousel() {
                var i;
                var x = document.getElementsByClassName("mySlides");
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";  
                }
                myIndex++;
                if (myIndex > x.length) {myIndex = 1}    
                x[myIndex-1].style.display = "block";  
                setTimeout(carousel, 4000); // Change image every 2 seconds
            }
        </script>
        </html>