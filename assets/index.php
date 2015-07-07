<!doctype html>
	
	<html>
		<head> 
			<title> Home </title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
			<link rel="stylesheet" href="css/cssReset.css">
            <link href="css/main.css" rel="stylesheet" />
			<link rel="stylesheet" href="css/home.css"  />
			<link rel="stylesheet" href="css/flipclock.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="js/flipclock.js"></script>
			<script src="js/home.js"></script>
            <script src="js/clock.js"></script>
            <script src="js/nav-mobile-menu.js"></script>
		</head>
		<body>
			<div class="main-wrapper">
				<header>				
                    <?php
                        include "header.php";
                    ?>
<!--begin hero section-->                    
                    <div class="hero">
                        <div class="hero-background"> 
                        	<div class="home-hero">
                        		<!--start first hero column/right side of hero-->                                
                        		<div class="first-col">
                        			<h1> The Fabric of Instant Internet </h1>
	                        	    <h6 class="hero-sub-header"> Faster broadband speed, a new world of possibilities </h6>
	                     	       	<p class="desktop-hide">With speeds that dwarf basic broadband, Fiber Internet is instant Internet. Download files and watch TV, with no buffering.</p>
	                            	<div class="button-move">
	                                    <a href="#difference" class="button-style hero-button mobile-hide"> Call Now </a>
	                     	       	</div> 
									<p class="mobile-hide">Download two dozen songs in a second, an HD TV show in 3 seconds, or an HD movie in just more than 36 seconds. Do more, at greater speeds, with fiber Internet.</p>
								</div>
								<!--end first column-->
							</div>
								<!--start second hero/left column-->
                            	<div class="second-col mobile-hide">
                            		<p>Fiber Internet changes the game.</p>
									<p class="hero-bottom">That capacity means more than just fast Internet. Residential fiber Internet customers can qualify for other home services, too. A fiber-optic network can carry TV and home phone, with unmatched speed and clarity.</p>
                            	</div>
                            	<!--end second hero column-->
<!--end hero section-->
                       	 	</div>
                      	</div>
                    </div>
                </header>

 <!--start mobile call now banner-->
           		<section class="call-now-top">
					<div>
						<p class="mobile-call-now">Call Now!!</p>
					</div>
					<p class="mobile-call-number">1.800.123.1234</p>
				</section>
<!--end mobile call now banner-->
<!--start fiber internet section-->				
				<div class="content dark">
					<h6 class="article-header header-font"> Fiber Internet </h6>
					<div class="div-1-content">
						<p class="text-center special-p">
						With speeds that dwarf basic broadband, Fiber Internet is instant Internet. </p> 
                    <p class="text-center special-p">Download files and watch TV, with no buffering.  A fiber Internet connection provides adequate </p>  
					<p class="text-center special-p">bandwidth for the most media-richInternet activity. And it has enough heft to do it all at once. 
					</p>	
					</div>
				</div>
<!-- end fiber internet - first content div -->
<!-- begin what is fiber internet-->
            <div class="content">
					<div class="centered">					
						<h2 class="article-header header-font">Fiber Internet and TV</h2>
						<p class="centered">Fiber Internet makes it possible to stream, download, play games online and more. Its also a viable replacement for cable TV. Many carriers offer a Double Play bundle with Internet and Digital TV. </p>
                        <br> <br>
						<p class="centered">Some also have a Triple Play option that includes Digital Phone.</p>
						
                        <div class="video-container">

                            <div class="video-left">
                                <h3 class="sub-header video-headers"> Fiber </h3>
                                <video class="placeholder-video" controls>
                                      <source src="video/hd.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                 <img src="images/hd.png" class="placeholder-image" alt="non hd video">
                            </div>

                            <div class="video-right"> 
                                <h3 class="sub-header video-headers"> General </h3>
                                <video class="placeholder-video" controls>
                                      <source src="video/notHD.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <img src="images/notHD.png" class="placeholder-image" alt="non hd video">
                            </div>
                        </div>
                        <!-- /. video container -->
                    
						<div class="hardware-special-col centered"> 
													
								<h3 class="why-hd">Why HD?</h3>
										
								<p class="centered">HD, or high definition TV, delivers smooth, vibrant picture and sound. Movies, sporting events and images in online gaming come through with unmatched clarity.</p>
							 								
						</div>	
					</div>
				</div>
				<div class="content dark">
					<div class="centered">
						<!--start left column-->
						<div class="left add-margin-left-fifteen">
							<img class="placeholder" src="images/lights.png">
							<p class="no-margin text-center"><strong>Cable and DSL can't do that.</strong></p>
						</div>	
						<!-- end left column  -->
						<!--start right column-->
						<div class="right">
							<h2 class="article-header2">What is Fiber Internet?</h2>
							<p>Cable and DSL Internet travel by copper wiring.</p>
							<p>Fiber Internet moves through a more advanced network.</p>
							<p>Hair-thin strands of flexible glass make up a fiber-optic cable. An insulated reflective sheath acts as a mirror around these strands. Pulses of light carry digital data along the network. The speed and reliability leaves cable connections in the dust.</p>
							<p>Streamed movies and video conferences happen in real time. Phone calls and TV picture and sound come through with crystal clarity. Fiber-optic Internet providers deliver speeds at 117% of advertised figures during peak usage time, according to FCC reports.</p>
						</div>
						<!-- end right column  -->
					</div>
				</div>
<!--end what is fiber internet-->
				
<!--begin difference between fiber and cable-->				
				<div class="content" id="difference">
					<div class="centered">
						<h3 class="article-header header-font">What's the difference between cable and fiber?</h3>
							<div>
								<!--start left column-->
								<div class="left-text-margins shadow-right mobile-difference-text">
									<p class="desktop-hide mobile-difference-header">X100</p>
									<p class="desktop-hide mobile-difference-subheader"><strong>Speeds 100 times faster than typical broadband access changed the game.</strong></p>

									<p>For decades, copper wires have carried communications networks. DSL providers used these networks to deliver Internet service.</p>
									<p>Cable and DSL Internet were instant hits. Speeds of as fast as 8Mbps represented a quantum leap from dial-up capacity. But web-user profiles evolved from home-based PCs to households with several web-enabled devices. As many users streamed as did surf.</p> 
									<p>Cable's promised speeds fell short of demand.</p>
									<p>Enter fiber optics, and Gigabit Internet.</p>
								</div>
								<!-- end left column -->
								<!--start right column-->
								<div class="float-right right-text-margins mobile-hide">
									<img src="images/meter-one.png" alt="speedometer" class="speedometer" />
									<p><strong>Speeds 100 times faster than typical broadband access changed the game.</strong></p>
								</div>
								<!--end right column-->
							</div>
						</div> 
				</div>
<!-- end difference between fiber and cable -->
<!--start desktop call now banner-->
				<div class="content call-banner-container">
					<div class="centered add-width call-banner">
						<p class="call-action">
							HURRY AND CALL US TODAY!
						</p>	
						<img class="small-circle" src="images/phone-icon-temp.png">
						<p class="call-number">
							1800.123.4567
						</p>
					</div>
				</div>
<!--end desktop call now banner-->
<!--begin key metrics-->		
				<div class="dark content">
					<div class="centered add-width">
						<h6 class="article-header header-font">How does fiber match up with cable on these key metrics?</h6>	
					</div>
					<div class="centered">
						<!--begin first column-->
						<div class="float-left three-col icons-column">
							<!--begin depedability box-->
							<div class="box-wrapper dependability-box center add-margin-top-ten">
                            	<div id="dependabilityTriangle" class="active-triangle"></div>
                                	<div id="dependabilityBox" class="side-squares active-box text-center add-margin-tb-three center add-xoverflow">
                                	<i class="fa fa-chain fa-3x add-margin-top-ten"></i>
                                    <br>
                                	<p class="text-center no-margin">Dependability</p>
                            	</div>
                            </div>
							<!-- end dependability box -->
							<!--begin speed box-->
							<div class="box-wrapper speed-box center add-margin-top-ten">
                            	<div id="speedTriangle" class="inactive-triangle"></div>
                                	<div id="speedBox" class="side-squares inactive-box text-center add-margin-tb-three center add-xoverflow">
                                	<i class="fa fa-fighter-jet fa-3x add-margin-top-ten"></i>
                                    <br>
                                	<p class="text-center no-margin">Speed</p>
                            	</div>
                            </div>
                            <!--end speed box-->
						</div>
						<!-- end first column -->
						<!--begin second column/fiber text-->
						<div class="three-col second-col2">
							<h6 class="article-header underline">Fiber</h6>
							<p id="fiberTextArea">
								Fiber Internet isn't reliant on electrical power. The network isn't subject to interference 
                                common for cable connections.
							</p>

						</div>
						<!-- end second column/fiber text  -->
						<!--begin third column/cable text -->
						<div class="float-right three-col third-col2">	
							<h6 class="article-header underline">Cable</h6>
							<p id="cableTextArea">
								Cable is reliable, unless you live far from your provider office. Your distance from the source 
                                will impact the likelihood of diminished speeds.
							</p>
						</div>
						<!-- end third column/cable text -->
					</div>
				</div>
<!--end key metrics -->
<!--begin speed section-->				
				<div class="content">
					<div class="centered add-width">
						<h6 class="article-header header-font">What can you do with that kind of speed?</h6>
						<p>
							Global connections and real-time social media activity rely on instant speed. </p>
						<p>The sheer 
                            volume of data transmission also has other benefits.
						</p>	
					</div>
					<!--start four columns section-->
					<div class="width-100">
						<!--start first column-->
						<div class="float-left four-col shadow-right right-padding small-desktop-column-padding mobile-padding">
							<div class="icon-circle text-center">
                            	<i class="fa fa-wifi fa-3x add-margin-top-ten"></i>
							</div>
                            <h6 class="sub-header">Data Savings</h6>
							<p>
								Connect enabled devices-like your smartphone or tablet-to 
                                home Wi-Fi to reduce mobile data usage
							</p>
						</div>
						<!--end first column-->
						<!--start second column-->
						<div class="four-col left-padding-10 shadow-right right-padding  small-desktop-column-padding mobile-padding">
							<div class="icon-circle text-center">
                            	<i class="fa fa-cloud-download fa-3x add-margin-top-ten"></i>
							</div>
							<h6 class="sub-header">Symmetrical Speed</h6>
							<p>
								For some fiber providers, a gig is good for uploading and downloading
							</p>
						</div>
						<!-- end second column -->
						<!--start third column-->
						<div class="four-col left-padding-10 shadow-right right-padding small-desktop-column-padding mobile-padding">
							<div class="icon-circle text-center">
                            	<i class="fa fa-users fa-3x"></i>
							</div>
							<h6 class="sub-header">Simultaneous Use</h6>
							<p>
								Everyone in the house can stream music, movies, and more, at once
							</p>
						</div>
						<!-- end third column -->
						<!--start fourth column-->
						<div class="add-margin-left-three four-col mobile-padding">	
							<div class="icon-circle text-center">
                            	<i class="fa fa-clock-o fa-3x"></i>
							</div>
							<h6 class="sub-header">Heavy Demand</h6>
							<p>
								A gig is enough to support households connected around the clock
							</p>
						</div>
						<!-- end fourth column-->
					</div>
					<!-- end four columns container -->
				</div>
<!-- end what can you do with that speed div -->
			</div>
				<footer>
					<?php
						include "footer.php";
					?>		
				</footer>
			</div>
			<!--./ main wrapper -->		
		</body>
	</html>