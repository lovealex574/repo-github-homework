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
					<h3 class="attention mobile__fix">SHOPPING CART</h3>
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
				<div class="shoping__card__main">
					<div class="card__preview">
						<div class="card__preview__item">
							<img src="img/hoody__men__squere.png" alt="" style="max-width: 260px;">
							<div class="card__preview__item__text">
								<h4 class="card_title">MANGO  PEOPLE  T-SHIRT</h4>
								<div class="close__cross">
									<img class="cross__img" src="img/cross.png" alt="">
								</div>
								<p>Price: $300</p>
								<p>Color: Red</p>
								<p>Size: Xl</p>
								<p>Quantity:</p>
							</div>
						</div>
						<div class="card__preview__item">
							<img src="img/chinos__men__yellow.png" alt="" style="max-width: 260px;">
							<div class="card__preview__item__text">
								<h4 class="card_title">MANGO  PEOPLE  T-SHIRT</h4>
								<div class="close__cross">
									<img class="cross__img" src="img/cross.png" alt="">
								</div>
								<p>Price: $300</p>
								<p>Color: Red</p>
								<p>Size: Xl</p>
								<p>Quantity:</p>
							</div>
						</div>
						<div class="buttons__card__choise">
							<button class="card__btn__choise">CLEAR SHOPPING CART</button>
							<button class="card__btn__choise">CONTINUE SHOPPING</button>
						</div>
					</div>
					<div>
						<div class="form__delivery">
							<form class="form__adress">
								<p>SHIPPING ADRESS</p>
								<input class="form__adress__text text" type="text" value="Bangladesh">
								<input class="form__adress__text text" type="text" value="State">
								<input class="form__adress__text text" type="text" value="Postcode / Zip">
								<button class="btn__form__adress">GET A QUOTE</button>
							</form>
							<div class="purchaise__test">
								<div class="cash__calc">
									<div class="sub__total">SUB TOTAL $900</div>
									<div class="grand__total">GRAND TOTAL $900</div>
								</div>
								<hr class="purchaise__horizon__line">
								<button class="btn__cash__calc">PROCEED TO CHECKOUT</button>
							</div>
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