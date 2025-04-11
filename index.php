<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<!DOCTYPE html>
<html>

<head>
	<title>Food Waste Management System|||Home Page</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- jQuery (Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<!-- Custom Theme files -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--webfont-->
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,700italic,400italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
	<!--webfont-->
	<!--js-->
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!---- start-smoth-scrolling---->
</head>

<body>
	<?php include_once("includes/header.php"); ?>
	<!-- banner -->
	<div class="banner">
		<div class="container">
			<!-- responsiveslides -->
			<script src="js/responsiveslides.min.js"></script>
			<script>
				// You can also use "$(window).load(function() {"
				$(function() {
					// Slideshow 4
					$("#slider3").responsiveSlides({
						auto: true,
						pager: false,
						nav: false,
						speed: 500,
						namespace: "callbacks",
						before: function() {
							$('.events').append("<li>before event fired.</li>");
						},
						after: function() {
							$('.events').append("<li>after event fired.</li>");
						}
					});
				});
			</script>
			<!-- responsiveslides -->
			<div id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-info">
							<h3>WE NEED YOUR SUPPORT</h3>
							<p>Imagine a world where no one goes to bed hungry—where every child, every family,
								 has enough to eat. You have the power to make that world a reality.Your generosity can turn an empty plate into a meal,
								  a moment of struggle into a moment of comfort.Hunger can be defeated—one donation at a time!</p>
							<a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="banner-info">
							<h3>HELP TURN TEARS TO SURES</h3>
							<p>Hunger is a battle that many fight every day, but together, we can be the solution.
								A simple act of donating food can fill an empty stomach and bring hope to those struggling.
								Every meal donated is a step toward a brighter, more compassionate world.
								 Be the reason someone feels cared for today—because giving is not just about food, it's about love and humanity.
								</p>
							<a href="about.php" class="hvr-rectangle-out button">READ MORE</a>
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->

	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<?php

			$ret = mysqli_query($con, "select * from tblpages where PageType='aboutus' ");
			$cnt = 1;
			while ($row = mysqli_fetch_array($ret)) {

			?>
				<div class="welcome-head">

					<p><?php echo $row['PageDescription']; ?></p>
				</div>

		</div><?php } ?>
	</div>
	<!-- //welcome -->
	<!-- mission -->
	<div class="mission">
		<div class="container">
			<div class="mission-header">
				<h3>OUR MISSION</h3>
			</div>
			<div class="mission-grids">
				<div class="col-md-6 mission-left">
					<img src="images/333.jpg" alt="" />
				</div>
				<div class="col-md-6 mission-right">
					<div class="mis-one">
						<div class="mis-left">
							<img src="images/444.png" alt="" />
						</div>
						<div class="mis-right">
							<h3>HELP & SUPPORT</h3>
							<p>Our mission is to provide nourishment and support to those in need,
								 ensuring that no one goes hungry. Through compassion and action,
								  we strive to make a lasting impact on food security.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mis-one">
						<div class="mis-left">
							<img src="images/555.png" alt="" />
						</div>
						<div class="mis-right">
							<h3>Starve Free World</h3>
							<p>Our mission is to create a hunger-free world where everyone has access to nutritious food.
								 We are committed to ending starvation through sustainable solutions and collective action.</p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="mis-one">
						<div class="mis-left">
							<img src="images/666.png" alt="" />
						</div>
						<div class="mis-right">
							<h3>Helping Hand</h3>
							<p>Our mission is to be a helping hand for foodless people, providing them with nourishment and hope.
								 We strive to combat hunger with compassion, support, and sustainable solutions.</p>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!-- //mission -->

	<!-- //success -->
	<?php include_once("includes/footer.php"); ?>
	<!-- smooth scrolling -->
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
			$().UItoTop({
				easingType: 'easeOutQuart'
			});
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!-- //smooth scrolling -->

</body>

</html>