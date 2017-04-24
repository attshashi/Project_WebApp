<?php
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
        <?php
            include_once "Member.php";
            include_once "Upload.php";
            include_once "Manage_file.php";
            include_once "Gallery.php";
            include_once "Contract.php";
        ?>
<div class="pop-up"> 
	<div id="small-dialog" class="mfp-hide book-form">
		<h3>Sign In </h3>
			<form action="controller/homepage.php" method="post">
				<input type="text" name="username" class="email" placeholder="Username" required=""/>
				<input type="password" name="password" class="password" placeholder="Password" required=""/>
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
                <input type="text" name="Username" placeholder="Userame" required=""/>
				<input type="text" name="Email" class="email" placeholder="Email" required=""/>
				<input type="password" name="Password" class="password" placeholder="Password" required=""/>	
				<input type="password" name="Password" class="password" placeholder="Confirm Password" required=""/>
				<input type="submit" value="Sign Up">
			</form>
    </div>
</div>
</body>
</html>