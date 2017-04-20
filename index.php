<?php//่หkkfokdosfmdksngksndkg
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Inspire an Education Category Flat Bootstrap responsive Website Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Inspire Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/popup-box.css" rel="stylesheet" type="text/css" media="all" />

<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" 	href="css/chocolat.css" type="text/css" media="all">
<!--// css -->
<!-- font -->
<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,100italic,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
	<!-- Popup-Box-JavaScript -->
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<script type="text/javascript">
		$(function() {
			$('.gallery-grids a').Chocolat();
		});
	</script>
	<!-- //Popup-Box-JavaScript -->
	<!-- start-smooth-scrolling -->
			<script type="text/javascript" src="js/move-top.js"></script>
			<script type="text/javascript" src="js/easing.js"></script>
			<script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
			</script>
	<!-- //start-smoth-scrolling -->
		<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<script type="text/javascript" src="js/modernizr.custom.53451.js"></script> 
 <script>
						$(document).ready(function() {
						$('.popup-with-zoom-anim').magnificPopup({
							type: 'inline',
							fixedContentPos: false,
							fixedBgPos: true,
							overflowY: 'auto',
							closeBtnInside: true,
							preloader: false,
							midClick: true,
							removalDelay: 300,
							mainClass: 'my-mfp-zoom-in'
						});
																						
						});
</script>	
</head>
<body>
	<div class="header" style="height: 60px">
		<div class="container">
			<div class="w3l_header_right">
				<ul>
                    <?php
                    if(!isset($_SESSION["type_user"]))
                    {
                        ?>
                        <li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Sign In</a></li>
                        <li><a class="book popup-with-zoom-anim button-isi zoomIn animated" data-wow-delay=".5s" href="#small-dialog2"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Sign Up</a></li>
                        <?php
                    }
                    else {
                        ?>
                        <li><a href="controller/homepage.php?logout=<?php echo "logout" ?>"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Log Out</a></li>
                        <?php
                    }
                    ?>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
			
		</div>
	</div>
	<div class="logo-navigation-w3layouts">
		<div class="container">
		<div class="logo-w3">
			<a href="#"><h1><img src="images/eng.png" alt=" " /><span>Lab CPE</span></h1></a>
		</div>
		<div class="navigation agileits w3layouts">
			<nav class="navbar agileits w3layouts navbar-default">
				<div class="navbar-header agileits w3layouts">
					<button type="button" class="navbar-toggle agileits w3layouts collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only agileits w3layouts">Toggle navigation</span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
						<span class="icon-bar agileits w3layouts"></span>
					</button>
				</div>
				<div class="navbar-collapse agileits w3layouts collapse hover-effect" id="navbar">
					<ul class="agileits w3layouts">
                        <?php if(isset($_SESSION["type_user"])){ ?>
						<li class="agileits w3layouts active"><a href="#banner" data-toggle="tab">หน้าแรก</a></li>
						<li class="agileits w3layouts">
                            <a class="scroll" href="#about" data-toggle="tab">
                                <?php
                                    if($_SESSION["type_user"] == "admin") {
                                        echo "จัดการผู้ใช้";
                                    }
                                    else {
                                        echo "แก้ไขข้อมูลส่วนตัว";
                                    }
                                ?>
                            </a>
                        </li>
						<li class="agileits w3layouts">
                            <a class="scroll" href="#team" data-toggle="tab">
                                <?php
                                if($_SESSION["type_user"] == "admin") {
                                    echo "Upload";
                                }
                                else {
                                    echo "Upload งานตัวเอง";
                                }
                                ?>
                            </a>
                        </li>
						<li class="agileits w3layouts">
                            <a class="scroll" href="#services" data-toggle="tab">
                                <?php
                                if($_SESSION["type_user"] == "admin") {
                                    echo "จัดการไฟล์";
                                }
                                else {
                                    echo "ดูไฟล์ตนเอง";
                                }
                                ?>
                            </a>
                        </li>
						<li class="agileits w3layouts"><a class="scroll" href="#gallery" data-toggle="tab">Gallery</a></li>
						<li class="agileits w3layouts"><a class="scroll" href="#contact" data-toggle="tab">Contact</a></li>
                        <?php }else { ?>
                            <li class="agileits w3layouts active"><a href="#banner" data-toggle="tab">หน้าแรก</a></li>
                            <li class="agileits w3layouts"><a class="scroll" href="#gallery" data-toggle="tab">รวมรูปภาพ</a></li>
                            <li class="agileits w3layouts"><a class="scroll" href="#services" data-toggle="tab">รวมผลงาน</a></li>
                            <li class="agileits w3layouts"><a class="scroll" href="#contact" data-toggle="tab">Contact</a></li>
                        <?php } ?>
					</ul>
				</div>
			</nav>
		</div>
		<div class="clearfix"></div>
		</div>
	</div>

	<div class="tab-content">
	<div class="banner tab-pane fade in active"  id="banner">
		<h3>Teach students how</h3>
		<h2><span>To </span>learn</h2>
		<h4>Our goal is to transform them</h4>
		<div class="arrow">
			<a href="#contact" class="scroll" data-toggle="tab"><img src="images/arrow.png" alt=" " /></a>
		</div>
	</div>
	<!-- Member -->

	<div class="about-w3-agile tab-pane fade" id="about">
		<div class="container">
			<div class="wthree_about_grids">
				<div class="wthree_about_grid_left">
                    <?php
                    if(isset($_SESSION["type_user"])){
                        if($_SESSION["type_user"] == "admin") {
                            ?>
                            <h3>Member</h3>
                            <table class="table" style="">
                                <tr>
                                    <th width="50px">ID</th>
                                    <th width="100px">ชื่อ</th>
                                    <th width="100px">นามสกุล</th>
                                    <th width="100px">Username</th>
                                    <th width="100px">Password</th>
                                    <th width="100px">เบอร์โทรศัพท์</th>
                                    <th width="120px">E-mail</th>
                                    <th width="120px">Type User</th>
                                    <th width="120px">ยืนยันสมาชิก</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>อรรถชัย</td>
                                    <td>บุญเหล็ง</td>
                                    <td>user123</td>
                                    <td>123456</td>
                                    <td>0858253730</td>
                                    <td>rap.ab1610@gmail.com</td>
                                    <td>User</td>
                                    <td>Access</td>
                                </tr>
                            </table>

                            <?php
                        }}
                    ?>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //about -->

	<!-- team -->
	<div class="team tab-pane fade" id="team">
		<div class="container">
			<h3>Meet Our Team</h3>
			<div class="agile_team_grids">
				<div class="col-md-3 agile_team_grid  agile_team_gridf">
					<div class="agile_team_grid_main">
						<img src="images/t1.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Guy Ritchie</h4>
						<p>Professor</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid2">
					<div class="agile_team_grid_main">
						<img src="images/t2.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Martina</h4>
						<p>Asst.Proffesor</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid3">
					<div class="agile_team_grid_main">
						<img src="images/t3.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Lisa kristen</h4>
						<p>College Dean</p>
					</div>
				</div>
				<div class="col-md-3 agile_team_grid agile_team_grid4">
					<div class="agile_team_grid_main">
						<img src="images/t4.jpg" alt=" " class="img-responsive" />
						<div class="p-mask">
							<ul class="social-icons">
								<li><a href="#" class="icon-button twitter"><i class="icon-twitter"></i><span></span></a></li>
								<li><a href="#" class="icon-button google"><i class="icon-google"></i><span></span></a></li>
								<li><a href="#" class="icon-button v"><i class="icon-v"></i><span></span></a></li>
								<li><a href="#" class="icon-button pinterest"><i class="pinterest"></i><span></span></a></li>
							</ul>
						</div>
					</div>
					<div class="agile_team_grid1">
						<h4>Rose Alba</h4>
						<p>HOD</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
	<div class="services tab-pane fade" id="services">
		<div class="container">
			<h3>Our services</h3>
			<div class="col-md-4 services-grids services-grids1">
				<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
				<h4>Curabitur eget</h4>
				<p>Integer sapien dolor, commodo non enim eu, faucibus luctus odio. </p>
			</div>
			<div class="col-md-4 services-grids services-grids2">
				<span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
				<h4>Dolor magna</h4>
				<p>Vivamus efficitur consequat ante, vel tincidunt dui volutpat in. Etiam blandit</p>
			</div>
			<div class="col-md-4 services-grids services-grids3">
				<span class="glyphicon glyphicon-book" aria-hidden="true"></span>
				<h4>lacinia posuere</h4>
				<p>Maecenas ante lorem, sollicitudin eu risus a, dignissim tincidunt est.  </p>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- Gallery -->
	<div class="gallery tab-pane fade" id="gallery">
		<div class="container">
			<h3>GALLERY</h3>
			<div class="gallery-grids">
				<div class="col-md-6 col-sm-6 gallery-grids-left gallery-grids-left-gallery1-top">
					<div class="gallery-grid">
						<a class="example-image-link" href="images/gallery-1.jpg" data-lightbox="example-set" data-title="">
							<div class="grid">
								<figure class="effect-apollo">
									<img src="images/gallery-1.jpg" alt=""/>
										<figcaption></figcaption>
								</figure>
							</div>
						</a>
					</div>
					<div class="gallery-grids-left-sub">
						<div class="col-md-6 col-sm-6 gallery-grids-left-subl">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/gallery-4.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/gallery-4.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
							<div class="gallery-grid gallery-grid-sub grid-middle gallery-grid-sub-left-bottom">
								<a class="example-image-link" href="images/gallery-5.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/gallery-5.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 gallery-grids-left-subr gallery-grids-left-subr-long">
							<div class="gallery-grid">
								<a class="example-image-link" href="images/gallery-7.jpg" data-lightbox="example-set" data-title="">
									<div class="grid">
										<figure class="effect-apollo">
											<img src="images/gallery-7.jpg" alt=""/>
												<figcaption></figcaption>
										</figure>
									</div>
								</a>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6 gallery-grids-left">
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-grids-right-first">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-2.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-2.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-grids-right-two">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-3.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-3.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="gallery-grids-right1 gallery-grids-right-hand">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-6.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-6.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-8">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-8.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-8.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 gallery-grids-right gallery-9">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/gallery-9.jpg" data-lightbox="example-set" data-title="">
								<div class="grid">
									<figure class="effect-apollo">
										<img src="images/gallery-9.jpg" alt=""/>
											<figcaption></figcaption>
									</figure>
								</div>
							</a>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>

		</div>
	</div>
	<!-- //Gallery -->

	<div class="contact-w3-agileits tab-pane fade" id="contact">
		<div class="container">
			<div class="col-md-5 contact-left-w3ls">
				<h3>Contact info</h3>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Visit us</h4>
						<h5>Parma Via Modena,BO, Italy</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="mail">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Mail us</h4>
						<h5><a href="mailto:info@example.com">info@example.com</a></h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="call">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-phone" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Call us</h4>
						<h5>+18044261149</h5>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="visit">
					<div class="col-md-2 contact-icon-wthree">
						<span class="glyphicon glyphicon-time" aria-hidden="true"></span>
					</div>
					<div class="col-md-10 contact-text-agileinf0">
						<h4>Work hours</h4>
						<h5>Mon-Sat 09:00 AM - 05:00PM</h5>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="col-md-7 contact-right-w3l">
				<h3>Leave message</h3>
				<form action="#" method="post">
					<input type="text"  class="name" name="name" placeholder="First Name" required="">
					<input type="text"  class="name" name="name" placeholder="Last Name" required="">
					<input type="text"  class="name" name="name" placeholder="Email" required="">
					<input type="text"  class="name" name="name" placeholder="Subject" required="">
					<textarea placeholder="Your Message" required=""></textarea>
					<input type="submit" value="SEND MESSAGE">
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="footer-w3l">
		<p>Kasetsart University Kamphaeng Saen Campus</p>
	</div>
	</div>
<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<h3>Sign In </h3>
			<form action="controller/homepage.php" method="post">
				<input type="text" name="username" class="email" placeholder="Username" required=""/>
				<input type="password" name="password" class="password" placeholder="Password" required=""/>
				<ul>
				<li>
					<input type="checkbox" id="brand1" value="">
					<label for="brand1"><span></span>Remember me</label>
				</li>
			</ul>
            <a href="#">Forgot Password?</a><br>
			<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="chklogin">
			</form>
	</div>
</div>
<div class="pop-up"> 
	<div id="small-dialog2" class="mfp-hide book-form">
		<h3>Sign Up</h3>
			<form action="#" method="post">
				<input type="text" name="Name" placeholder="Your Name" required=""/>
				<input type="text" name="Email" class="email" placeholder="Email" required=""/>
				<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
				<input type="password" name="Password" class="password" placeholder="Confirm Password" required=""/>
				<input type="submit" value="Sign Up">
			</form>
    </div>
</div>
</body>
</html>