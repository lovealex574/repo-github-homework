<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>shop</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="media.css">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link rel="icon" href="img/online-shopping.svg" type="image/svg+xml">
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
		
		<script src="https://use.fontawesome.com/edb75e1452.js"></script>

		
		
	</head>
	<body>
		
		<!--	top section		-->

		<div class="top">
			<div class="navbar">

				<?php include ('navbar.html'); ?>

			</div>	
			<div class="catalog__page__top">
				<div class="shoping__card__top conteiner">
				<div class="catalog__top__title">
					<h3 class="attention mobile__fix">REGISTRATION</h3>
				</div>
				<div class="catalog__top__items text">
			<!--
					<a class="catalog__top__item" href="index.php">HOME</a>
					<a class="catalog__top__item" href="catalog.php">MEN</a>
					<a class="attention" href="#">NEW ARRIVALS</a>
			-->
				</div>
				</div>
			</div>
		</div>

		<!--	END top section		-->

		<!--	center srction		-->
		
		<div class="center__content conteiner">
			
			<div>
				<div class="reg__card__main">
					<div>
						<div class="form__reg">
							<form class="form__reg__main">
								<p class="reg__form__title">Your Name</p>
								<input class="form__reg__text text" type="text" value="First Name">
								<input class="form__reg__text text" type="text" value="Last Name">
								<div class="choice__gender">
									<p class="gender__items"><input class="gender__item" type="checkbox" value="Male">Male</p>
									<p class="gender__items"><input class="gender__item" type="checkbox" value="Female">Female</p>
								</div>
								<p class="reg__form__title">Your Name</p>
								<input class="form__reg__text text" type="text" value="First Name">
								<input class="form__reg__text text" type="text" value="Last Name">									<p class="fine__print">Please use 8 or more characters, with at least 1 number and a mixture of uppercase and lowercase letters</p>
								<a class="btn__form__reg" href="#">JOIN NOW</a>
							</form>
						</div>
					</div>

					<div>
						<div class="reg__plus">
							<p>LOYALTY HAS ITS PERKS</p>
							<p class="advantage">Get in on the loyalty program where you can earn points and unlock serious perks. Starting with these as soon as you join:</p>
							<ul class="reg__text__lists">
								<li class="reg__text__list">15% off welcome offer</li>
								<li class="reg__text__list">Free shipping, returns and exchanges on all orders</li>
								<li class="reg__text__list">$10 off a purchase on your birthday</li>
								<li class="reg__text__list">Early access to products</li>
								<li class="reg__text__list">Exclusive offers & rewards</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div>

		<!--	END center section		-->
		
		<!--	footer section		-->
		
		<div class="footer">
			
			<!--	footer__top		-->
			
		<!--	<div class="footer__top">
				<div class="footer__menu conteiner">
					<div class="footer__menu__item">
						<img class="footer__icon" src="img/icon__delivery.svg" alt="">
						<h4>Free Delivery</h4>
						<p class="footer__top__text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
					</div>
					<div class="footer__menu__item">
						<img class="footer__icon" src="img/icon__sale.svg" alt="">
						<h4>Sales & discounts</h4>
						<p class="footer__top__text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
					</div>
					<div class="footer__menu__item">
						<img class="footer__icon" src="img/icon__crown.svg" alt="">
						<h4>Quality assurance</h4>
						<p class="footer__top__text">Worldwide delivery on all. Authorit tively morph next-generation innov tion with extensive models.</p>
					</div>
				</div>
			</div>		-->
			
			<!--	footer__middle		-->
			
			<div class="footer__middle">
				<div class="footer__shadowbox">
					<div class="footer__middle__content conteiner">
						<div class="footer__content">
							<div class="face__user"></div>
							<p class="footer__content__text">“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum“</p>
						</div>
						<div class="footer__content__form">
							<h3>SUBSCRIBE</h3>
							<p class="form__text">FOR OUR NEWLETTER AND PROMOTION</p>
							<div class="double__button">
								<input class="button__form" type="email" value="Enter Your Email">
								<div class="button__submite">
									<a>Subscribe</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--	footer__end		-->
			
			<div class="footer__end">
				<div class="footer__end__elements conteiner">
					<p class="footer__end__element">
						&copy; <?php echo date ("Y");?>  Brand  All Rights Reserved.
					</p>
					<div class="footer__end__element">
						<div class="cube__sourse">
							<i class="fa fa-facebook" aria-hidden="true"></i>
						</div>
						<div class="cube__sourse">
							<i class="fa fa-instagram" aria-hidden="true"></i>
						</div>
						<div class="cube__sourse">
							<i class="fa fa-pinterest-p" aria-hidden="true"></i>
						</div>
						<div class="cube__sourse">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--	END footer section		-->		


	</body>
	
</html>