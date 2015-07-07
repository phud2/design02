<!doctype html>
    
    <html>
        <head> 
            <title> FAQs </title>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link href="css/main.css" rel="stylesheet" />
            <link href="css/faqs.css" rel="stylesheet" />
            <link rel="stylesheet" href="css/flipclock.css">
            <link rel="stylesheet" href="css/font-awesome.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
            <script src="js/flipclock.js"></script>
            <script src="js/clock.js"></script>
            <script src="js/nav-mobile-menu.js"></script>
            <script src="js/jquery.velocity.min.js"></script>
            <script src="js/pb-widget.js"></script>
            <script>
              $(function() {

                $("#start").on('click', function(){
                    // setup
                    var fiberOpticBar = $('#fiberOptic .number-pb').NumberProgressBar({
                      style: 'fiberOptic'
                    })
                    var fiberOpticBarStart = function() {
                      fiberOpticBar.reach(100, {
                        duration: 2000,
                      });
                    }

                    var userBar = $('#user .number-pb').NumberProgressBar({
                      style: 'user'
                    })
                    var userStart = function() {
                      userBar.reach(100, {
                        duration: 20000,
                      });
                    }

                    // start
                    fiberOpticBarStart();
                    userStart();
                });

              });
            </script>
        </head>
        <body>
            <div class="main-wrapper">
                <header>                
                    <?php
                        include "header.php";
                    ?>
<!--begin hero section-->                    
                    <div class="hero content">
                        <div class="hero-background">
                            <div class="hero-header-vertical-middle">
                                <h1 class="hero-header-title text-center">What is Fiber Internet</h1>
                                <div>
                                    <p class="hero-header-sub-header text-center">It's cutting-edge and faster than anything else out there.</p> 
                                    <p class="hero-header-sub-header text-center">How can I get it?</p>
                                </div>
                            </div>
                        </div>
                    </div>   
<!--end hero section-->               
                </header>
<!--begin mobile call now banner-->
                <div class="call-now-top">
                    <div>
                        <p class="mobile-call-now">Call Now!!</p>
                    </div>
                    <p class="mobile-call-number">1.800.123.1234</p>
                </div>
<!--end mobile call now banner-->
<!-- begin jumpto section -->              
                <div class="content dark  link-color">                    
                    <h2 class="article-header header-font">FAQs</h2>

                    <h6 class="sub-header-tops mobile-margin-header">Here's your guide to navigating fiber Internet</h6>
                    
                    <div class="center add-margin-tb-three small-desktop-width-all tablet-width-half">
                        <!--what is fiber internet link-->
                        <div class="center text-center small-desktop-width-all link-hover">
                            <a href="#what-is" class="small-desktop-link">
                               <h2 class="make-inline-block hover-effect">What is fiber Internet?</h2>
                               <i class="fa fa-info-circle fa-4x add-margin-left-two vertical-align-middle mobile-hide tablet-hide"></i>
                            </a>
                        <!--end what is fiber link-->
                        <!--start is DSL fiber section-->
                            <a href="#dsl" class="small-desktop-link">
                                <i class="fa fa-question-circle fa-4x add-margin-left-fifteen add-margin-right-two vertical-align-middle mobile-hide tablet-hide"></i>
                                <h2 class="make-inline-block hover-effect">Is DSL fiber Internet?</h2>
                            </a>                            
                        </div>
                        <!--end is DSL fiber-->
                    </div>
                    
                    <div class="center add-margin-tb-three small-desktop-width-all">
                        <!--start how fast link-->
                        <div class="center text-center small-desktop-width-all tablet-width-half link-hover">
                            <a href="#how-fast" class="small-desktop-link">
                               <h2 class="make-inline-block  add-margin-left-two add-margin-right-two">How fast is fiber Internet?</h2>
                               <i class="fa fa-fighter-jet fa-4x vertical-align-middle mobile-hide tablet-hide hover-effect"></i>
                            </a>
                        <!--end how fast link-->
                        <!--start get fiber link-->
                            <a href="#get-fiber" class="small-desktop-link">
                                <i class="fa fa-phone fa-4x add-margin-left-fifteen add-margin-right-one vertical-align-middle mobile-hide tablet-hide"></i>
                                <h2 class="make-inline-block hover-effect">How do I get fiber Internet?</h2>
                            </a>                            
                        </div>
                        <!--end get fiber link-->
                    </div>
                    <!--start fiber to the home link-->
                    <div class="center width-most add-margin-tb-three">
                        <div class="center width-most text-center link-hover">
                            <a href="#ftth" class="ftth-small-desktop-link">
                                <i class="fa fa-home fa-4x mobile-hide tablet-hide"></i>
                                <h2 id="what-is">What is fiber to the home?</h2>
                            </a>                            
                        </div>
                    </div>
                    <!--end fiber to the home link-->
                </div>
<!--end jumpto section-->
<!--start what is fiber section-->             
                <div class="content">
                    <span class="anchor"></span>
                    <h2 class="header-font faqs-article-header">What is fiber Internet?</h2>
                    
                    <p class="width-most center" >It's the most advanced means of data delivery for Internet, digital phone and TV. 
                    Pulses of light travel through optical
                     fibers made of hair-thin strands of flexible glass. Fiber sends data quicker than copper can. This makes it a popular upgrade
                      from aging networks.</p>

                    <div class="center width-most">
                      <img src="images/wires.png" class="medium-icon vertical-align-top add-margin-top-five">
                  
                      <div class="make-inline-block width-half add-margin-left-five mobile-margin tablet-width-all tablet-margin">
                            <p class="add-margin-top-ten">Degradation and signal interference aren't concerns with fiber networks. 
                            You can't say the same for cable.</p>

                            <p class="add-margin-top-ten">Fiber Internet reaches speeds several times faster than DSL or cable. It's delivered on
                             a dedicated line. That 
                            ensures consistent speeds of as much as 100 times faster than standard broadband. Users can stream, download, and play
                             online games without buffering.</p>
                      </div>
                    </div>  
                </div>
<!--end what is fiber section-->
<!--start desktop call now -->              
            
                <div class="content call-banner-container">
					<div class="centered add-width call-banner">
						<p class="call-action">
							Call Us today for fiber internet options where you live.
						</p>	
						<img class="small-circle" src="images/phone-icon-temp.png">
						<p class="call-number">
							1800.123.4567
						</p>
					</div>
				</div>
<!--end desktop call now-->                
<!--start how fast section -->
            <div class="content">
                <span class="anchor"></span>
                <h2 id="how-fast" class="header-font article-header">How fast is fiber Internet?</h2>
                    
                <p class="width-most center" >Fiber Internet blows away standard broadband for speed. Fiber Internet providers cite speeds of
                1 Gigabit per second (1,000Mbps). Cable connections typically range from 3 to 24Mbps.</p>
                <div class="centered">
                    <section id="fiberOptic">
                        <h4 class="title">Fiber</h4>
                        <article>
                            <div class="number-pb">
                              <div class="number-pb-shown dream"></div>
                              <div class="number-pb-num">up to 1000 Mpbs</div>
                            </div>
                        </article>
                    </section>

                    <section id="user">
                        <h4 class="title">Me</h4>
                        <article>
                            <div class="number-pb">
                              <div class="number-pb-shown sun"></div>
                              <div class="number-pb-num">10 Mpbs</div>
                            </div>
                        </article>
                    </section>
                        
                    <div class="button-container">
                        <button id="start">Start Race</button>
                    </div>
                </div>
                <!--/.centered-->
            </div>
<!--end how fast section-->
			<div class="content call-banner-container">
					<div class="centered add-width call-banner">
						<p class="call-action">
							Call now to get your head start!
						</p>	
						<img class="small-circle" src="images/phone-icon-temp.png">
						<p class="call-number">
							1800.123.4567
						</p>
					</div>
				</div>
<!--start fiber to the home -->
            <div class="dark content">
                <span class="anchor"></span>
                    <div id="ftth" class="width-most center text-center">
                        <i class="fa fa-home font-210 mobile-hide"></i>
                    </div>
                    <h2 class="header-font faqs-article-header">What is fiber to the home?</h2>
                    <div class="width-most center text-center">
                        <i class="fa fa-home font-210 desktop-hide"></i>
                    </div>      
                       
                    <p class="width-most center" >Fiber to the home (FTTH) means a direct optical fiber connection to a home or business. FTTH
                     doesn't need the infrastructure used in cable or DSL connections. It delivers data on a much faster network for Internet, 
                     TV and phone services. Cable and DSL providers struggle to extend speeds on existing infrastructure. However, fiber 
                     Internet operates on a future-ready network.</p>

                    <p class="width-most center">Fiber-optic networks can improve efficiency and speed without upgrades in structure. 
                    Consumers have shifted from 
                    PC-based Internet activity to usage that reaches across enabled devices. Smart homes and Smart TVs also connect to the 
                    Internet, and need more bandwidth.</p>
            </div>
<!--end fiber to the home-->
<!--start is dsl fiber -->             
            <div class="content">
                <span class="anchor"></span>
                <h2 id="dsl" class="header-font article-header">Is DSL fiber Internet?</h2>

                <div class="center width-most">
                  <img src="images/woman-sitting.png" class="woman-image vertical-align-top add-margin-top-five mobile-width-most-center">
              
                  <div class="make-inline-block width-half add-margin-left-five tablet-width-all tablet-margin">
                        <p class="add-margin-top-ten">No. DSL, or Digital Subscriber Line, uses copper wire in phone lines for Internet 
                        access. DSL's speed consistency depends on distance between home and provider. A signal becomes weaker and travels
                         slower over greater distances.</p>


                        <p class="add-margin-top-ten">A smaller, lighter-weight cable in fiber Internet is more efficient than DSL copper.
                         Glass fibers don't generate electricity, reducing interference. Fiber optic signals travel separate from the 
                         electrical grid. A power outage won't interrupt your fiber Internet connection.</p>      
                  </div>
                </div>
                <!--/.center-->  
            </div>
<!--end is dsl fiber-->                
<!--start how do i get fiber -->             
                <div class="dark content">
                    <h2 id="get-fiber" class="header-font article-header">How do I get fiber Internet?</h2>
                    <img src="images/man-on-phone-and-computer.png" class="man-image vertical-align-top add-margin-left-fifteen add-margin-top-five desktop-hide">

                    <p class="width-most center text-center" >Check fiber Internet providers' websites. Fiber neighborhoods are concise. 
                    Providers need 
                    only your address to check. </p>

                    <div class="center width-most">
                      
                  
                      <div class="make-inline-block width-half add-margin-left-five mobile-margin tablet-width-all tablet-margin">
                            <p class="add-margin-top-ten mobile-margin mobile-add-bottom-margin-five">You can also learn which areas providers will expand coverage. Sign up for notifications
                             if your town isn't in current or planned coverage. Implementation is often demand-based. Track local news for 
                             carriers' interest to expand their fiber footprint.</p>

                            <p class="add-margin-top-ten mobile-margin mobile-add-bottom-margin-five">Consider bundle packages, too. They combine Internet with digital phone and TV 
                            service, or both. Or call us. We'll check your address for availability of fiber-optic networks.</p>
                                                          
                      </div>
                      
                      <img src="images/man-on-phone-and-computer.png" class="man-image vertical-align-top  add-margin-top-five mobile-hide tablet-hide">
                    </div>  
                </div>                
<!--end how do i get fiber -->
                
<!-- content end -->            
                <footer>
                    <?php
                        include "footer.php";
                    ?>      
                </footer>
            </div>      
        </body>
    </html>
