<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pizza Hits</title>
    <!--Font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!--Scroll reveal CDN-->
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<style>
	@import url('https://fonts.googleapis.com/css?family=Cabin|Herr+Von+Muellerhoff|Source+Sans+Pro:400,900&display=swap');
*,
*::before,
*::after{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

:root{
    --main-font: 'Source Sans Pro', sans-serif;
    --secondary-font: 'Herr Von Muellerhoff', cursive;
    --body-font: 'Cabin', sans-serif;
    --main-font-color-dark: #252525;
    --secondary-font-color: #c59d5f;
    --body-font-color: #515151;
}
html{
	font-family: var(--body-font);
	font-size: 10px;
	color: var(--body-font-color);
	scroll-behavior: smooth;
}
body{
	overflow-x: hidden; 
}
section{
	padding: 3.9rem 0;
	overflow: hidden;
}
img{
	width: 100%;
	max-width: 100%;
}
img .admin{
	width: 100%;
	max-width: 100%;
	right: 20;
}
a{
	text-decoration: none;
}
p{
	font-size: 1.6rem;
}
.container{
	width: 100%;
	max-width: 122.5rem;
	margin: 0 auto;
	padding: 0 2 4rem;
}
header{
	width: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1;
	background-image: linear-gradient(to bottom, rgba(0,0,0,.5),transparent);
}
.nav{
	height: 7.2rem;
	display: flex;
	align-items: center;
	justify-content: center;
}
.menu-toggle{
	color: #fff;
	font-size: 2.2rem;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	right: 2.5rem;
	cursor: pointer;
	z-index: 1500;
}
.fa-times{
	display: none;
}
.nav-list{
	list-style: none;
	position: fixed;
	top: 0;
	left: 0;
	width: 80%;
	height: 100vh;
	background-color: var(--main-font-color-dark);
	padding: 4.4rem;
	display: flex;
	flex-direction: column;
	justify-content: space-around;
	z-index: 1250;
	transform: translateX(-100%);
	transition: transform .5s;
}
.nav::before{
	content: '';
	position: fixed;
	top: 0;
	left: 0;
	width: 100vw;
	height: 100vh;
	background-color: rgba(0,0,0,.8);
	z-index: 1000;
	opacity: 0;
	transform: scale(0);
	transition: opacity .5s;
}
.open .fa-times{
	display: block;
}
.open .fa-bars{
	display: none;
}
.open .nav-list{
	transform: translateX(0);
}
.open .nav::before{
	opacity: 1;
	transform: scale(1);
}
.nav-item{
	border-bottom: 2px solid rgba(255,255,255,.3);
}
.nav-link{
	display: block;
	color: #fff;
	text-transform: uppercase;
	font-size: 1.5rem;
	letter-spacing: 2px;
	margin-right: -2px;
	transition: color .5s;
}
.nav-link:hover{
	color: var(--secondary-font-color);
}
.hero{
	width: 100%;
	height: 100vh;
	background: url("images/back.jpg") center no-repeat;
	background-size: cover;
	display: flex;
	align-items: center;
	justify-content: center;
	text-align: center;
}
.sub-headline{
	font-size: 8.5rem;
	font-family: var(--secondary-font);
	color: var(--secondary-font-color);
	font-weight: 100;
	line-height: .4;
	letter-spacing: 2px;
	opacity: 0;
	animation: fadeUp .5s forwards;
	animation-delay: .5s;
}
.first-letter{
	text-transform: uppercase;
	font-size: 10.3rem;
}
.headline{
	color: #fff;
	font-size: 3.7rem;
	font-family: var(--main-font);
	text-transform: uppercase;
	font-weight: 900;
	letter-spacing: .5rem;
	margin-right: -.5rem;
	animation: scale .5s forwards;
}
.separator{
	display: flex;
	align-items: center;
	justify-content: center;
}
.line{
	width: 100%;
	max-width: 8.4rem;
	height: .25rem;
	background-color: #fff;
	position: relative;
	opacity: 0;
	animation: grow 2s forwards;
	animation-delay: .9s;
}
.line-right::before,
.line-left::before{
	content: '';
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	border: .6rem solid transparent;
	opacity: 0;
	animation: grow .5s forwards;
	animation-delay: 1.2s;
}
.line-right::before{
	border-right-color: #fff;
	right: 0;
}
.line-left::before{
	border-left-color: #fff;
	left: 0;
}
.asterisk{
	font-size: 1.2rem;
	color: var(--secondary-font-color);
	margin: 0 1.6rem;
	opacity: 0;
	animation: spin .5s forwards;
	animation-delay: .7s;
}
.single-animation{
	opacity: 0;
	animation: fadeDown .5s forwards;
	animation-delay: 1.5s;
}
.headline-description h5{
	color: #fff;
	font-size: 1.4rem;
	font-weight: 100;
	text-transform: uppercase;
	margin-bottom: 1.2rem;
	letter-spacing: 3px;
	margin-right: -3px;
}
.btn{
	display: inline-block;
	text-transform: uppercase;
	letter-spacing: 2px;
	margin-right: -2px;
}
.cta-btn{
	font-size: 1.1rem;
	background-color: #fff;
	padding: .9rem 1.8rem;
	color: var(--body-font-color);
	border-radius: .4rem;
	transition: background-color .5s;
}
.cta-btn:hover,
.cta-btn:focus{
	color: #fff;
	background-color: var(--secondary-font-color);
}
.global-headline{
	text-align: center;
	margin-top: 3.9rem;
}
.discover-our-story .global-headline{
	margin-top: 6.9rem;
}
.global-headline .asterisk{
	color: var(--body-font-color);
	margin: 2.4rem 0;
}
.headline-dark{
	color: var(--main-font-color-dark);
	letter-spacing: .7rem;
	margin-right: -.7rem;
}
.global-headline .sub-headline{
	letter-spacing: -1px;
	line-height: .42;
}
.restaurant-info{
	text-align: center;
}
.restaurant-description{
	margin-bottom: 3rem;
}
.restaurant-description p{
	line-height: 1.6;
	margin-bottom: 2.4rem;
}
.body-btn{
	font-size: 1.5rem;
	color: var(--secondary-font-color);
	position: relative;
	transition: color .5s;
}
.body-btn::before{
	content: '';
	position: absolute;
	left: 0;
	bottom: -3px;
	width: 100%;
	height: 2px;
	background-color: var(--secondary-font-color);
	transition: background-color .5s;
}
.body-btn:hover,
.body-btn:focus{
	color: var(--main-font-color-dark);
}
.body-btn:hover::before,
.body-btn:focus::before{
	background-color: var(--main-font-color-dark);
}
.tasteful-recipes{
	background: url("http://localhost/Kp_Pizzahits/images/gambar22.jpg") center no-repeat;
	background-size: cover;
}
.between{
	min-height: 65vh;
	display: flex;
	align-items: center;
}
.image-group{
	display: grid;
	grid-template-columns: repeat(2, 1fr);
	grid-gap: 1.5rem;
}
.discover-our-menu .restaurant-description{
	padding-top: 3rem;
	margin-bottom: 0;
}
.perfect-blend{
	background: url("http://localhost/Kp_Pizzahits/images/gambar20.jpg") center no-repeat;
	background-size: cover;
}
footer{
	padding: 7.9rem 0;
	background-color: #121212;
	color: #fff;
	text-align: center;
	position: relative;
}
.back-to-top{
	width: 7rem;
	height: 7rem;
	background-color: #121212;
	position: absolute;
	top: -3rem;
	left: 50%;
	transform: translateX(-50%);
	border-radius: 50%;
}
.back-to-top i{
	display: block;
	color: #fff;
	font-size: 2rem;
	padding: 2rem;
	animation: up 2s infinite;
}
.footer-content{
	overflow: hidden;
}
.footer-content h4{
	font-size: 1.9rem;
	text-transform: uppercase;
	font-weight: 100;
	letter-spacing: 3px;
	margin-bottom: 3rem;
}
.footer-content .asterisk{
	margin: 2.4rem 0;
}
.footer-content-about{
	margin-bottom: 5.4rem;
}
.footer-content-about p{
	line-height: 2;
}
.social-icons{
	list-style: none;
	margin-bottom: 5.4rem;
	display: flex;
	justify-content: center;
}
.social-icons i{
	font-size: 2rem;
	color: #fff;
	padding: .8rem 2rem;
	opacity: .5;
	transition: color .5s;
}
.social-icons i:hover,
.social-icons i:focus{
	color: var(--secondary-font-color);
}
.newsletter-form{
	width: 100%;
	position: relative;
	display: flex;
	justify-content: center;
}
.newsletter-input{
	width: 100%;
	max-width: 25rem;
	padding: 1rem;
	border-radius: .4rem;
}
.newsletter-btn{
	background-color: transparent;
	border: none;
	color: var(--main-font-color-dark);
	cursor: pointer;
	font-size: 1.6rem;
	padding: 1px .6rem;
	position: absolute;
	top: 50%;
	transform: translateY(-50%);
	margin-left: 15rem;
	left: 8.5rem;
}
@media screen and (min-width: 900px){
	section{
		padding: 7.9rem;
	}
	.menu-toggle{
		display: none;
	}
	.nav{
		justify-content: space-between;
	}
	.nav-list{
		position: initial;
		width: initial;
		height: initial;
		background-color: transparent;
		padding: 0;
		justify-content: initial;
		flex-direction: row;
		transform: initial;
		transition: initial;
	}
	.nav-item{
		margin: 0 2.4rem;
		border: none;
	}
	.nav-item:last-child{
		margin-right: 0;
	}
	.nav-link{
		font-size: 1.3rem;
	}
	.active{
		position: relative;
	}
	.active::before{
		content: '';
		position: absolute;
		width: 100%;
		height: 2px;
		background-color: #fff;
		left: 0;
		bottom: -3px;
	}
	.sub-headline{
		font-size: 10rem;
	}
	.first-letter{
		font-size: 12.2rem;
	}
	.headline{
		font-size: 4.7rem;
		letter-spacing: .8rem;
	}
	.line{
		max-width: 11.4rem;
	}
	.restaurant-info{
		display: flex;
		align-items: center;
	}
	.restaurant-info > div{
		flex: 1;
	}
	.padding-right{
		padding-right: 7rem;
	}
	.footer-content{
		max-width: 77.5rem;
		margin: auto;
	}
	.footer-content-about{
		max-width: 51.3rem;
		margin: 0 auto 5.4rem;
	}
	.footer-content-divider{
		display: flex;
		justify-content: space-between;
	}
	.social-media,
	.newsletter-form{
		width: 100%;
		max-width: 27.3rem;
		margin: 0 1rem;
	}
	.social-icons i{
		opacity: 1;
	}
	.newsletter-btn{
		margin-left: 7.5rem;
	}
}
@keyframes fadeUp{
	0%{
		transform: translateY(4rem);
	}
	100%{
		opacity: 1;
		transform: translateY(0);
	}
}
@keyframes scale{
	0%{
		transform: scale(2);
	}
	100%{
		opacity: 1;
		transform: scale(1);
	}
}
@keyframes grow{
	0%{
		width: 0;
	}
	100%{
		opacity: 1;
		width: 100%;
	}
}
@keyframes spin{
	0%{
		transform: rotate(0);
	}
	100%{
		opacity: 1;
		transform: rotate(-360deg);
	}
}
@keyframes fadeDown{
	0%{
		transform: translateY(-1rem);
	}
	100%{
		opacity: 1;
		transform: translateY(0);
	}
}
@keyframes up{
	0%{
		opacity: 0;
	}
	50%{
		opacity: 1;
	}
	100%{
		opacity: 0;
		transform: translateY(-1rem);
	}
}
</style>
<body>
	<header>
		<div class="container">
			<nav class="nav">
				<div class="menu-toggle">
					<i class="fas fa-bars"></i>
					<i class="fas fa-times"></i>
				</div>
				<a href="home.php" class="logo"><img src="images/1.PNG" alt=""></a>
				<a href="home.php"><img src="images/admin.PNG" class="admin" alt=""></a>
				<ul class="nav-list">
					<li class="nav-item">
						<a href="home.php" class="nav-link active">HOME</a>
					</li>
					<li class="nav-item">
						<a href="home.php?logout='1'" class="nav-link">LOG OUT</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">NOTIF/PESANAN</a>
					</li>
					<li class="nav-item">
						<a href="#" class="nav-link">CONTACT</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="hero" id="hero">
		<div class="container">
			<h2 class="sub-headline">
				<span class="first-letter">W</span>elcome
			</h2>
			<h1 class="headline"><?php echo $_SESSION['username']; ?></h1>
			<div class="headline-description">
				<div class="separator">
					<div class="line line-left"></div>
					<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					<div class="line line-right"></div>
				</div>
				<div class="single-animation">
					<h3>Ready to opened</h3>
					<a href="#" class="btn cta-btn">Explorer</a>
				</div>
			</div>
		</div>
	</section>
	<section class="discover-our-story">
		<div class="container">
			<div class="restaurant-info">
				<div class="restaurant-description padding-right animate-left">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">D</span>iscover
						</h2>
						<h1 class="headline headline-dark">Our Story</h1>
						<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					</div>
					<p>Restoran pizza hits bangkalan berdiri pada tanggal 24 januari 2020. Pizza hits bangkalan merupakan restoran pizza pertama yang hadir dikota bangkalan. Dengan menu varia pizza yang bervariasi anda dapat menemukan rasa pizza yang lezat sesuai dengan selera yang anda inginkan.</p>
					<a href="#" class="btn body-btn">About Us</a>
				</div>
				<div class="restaurant-info-img animate-right">
					<img src="images/IMG_20210125_123208.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<section class="tasteful-recipes between">
		<div class="container">
			<div class="global-headline">
				<div class="animate-top">
					<h2 class="sub-headline">
						<span class="first-letter">T</span>asteful
					</h2>
				</div>
				<div class="animate-bottom">
					<h1 class="headline">Recipes</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="discover-our-menu">
		<div class="container">
			<div class="restaurant-info">
				<div class="image-group padding-right animate-left">
					<img src="http://localhost/Kp_Pizzahits/images/gambar23.jpg" alt="">
					<img src="http://localhost/Kp_Pizzahits/images/gambar24.jpg" alt="">
					<img src="http://localhost/Kp_Pizzahits/images/gambar25.jpg" alt="">
					<img src="http://localhost/Kp_Pizzahits/images/gambar28.jpg" alt="">
				</div>
				<div class="restaurant-description animate-right">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">D</span>iscover
						</h2>
						<h1 class="headline headline-dark">Menu</h1>
						<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<a href="menu.php" class="btn body-btn">View the full menu</a>
				</div>
			</div>
		</div>
	</section>
	<section class="perfect-blend between">
		<div class="container">
			<div class="global-headline">
				<div class="animate-top">
					<h2 class="sub-headline">
						<span class="first-letter">T</span>he perfect
					</h2>
				</div>
				<div class="animate-bottom">
					<h1 class="headline">Blend</h1>
				</div>
			</div>
		</div>
	</section>
	<section class="culinary-delight">
		<div class="container">
			<div class="restaurant-info">
				<div class="restaurant-description padding-right animate-left">
					<div class="global-headline">
						<h2 class="sub-headline">
							<span class="first-letter">C</span>ulinary
						</h2>
						<h1 class="headline headline-dark">Delight</h1>
						<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					</div>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
					<a href="#" class="btn body-btn">Make a Reservation</a>
				</div>
				<div class="image-group">
					<img class="animate-top" src="images/IMG_0340 (1).jpg" alt="">
					<img class="animate-bottom" src="images/IMG_2367.jpg" alt="">
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="back-to-top">
				<a href="#hero"><i class="fas fa-chevron-up"></i></a>
			</div>
			<div class="footer-content">
				<div class="footer-content-about animate-up">
					<h4>About Pizzahits</h4>
					<div class="asterisk"><i class="fas fa-asterisk"></i></div>
					<p>Lorem Ipsum dolor sit amet, consecteture adipisicing elit. Delectus dolorum, ex laudantium quia quos repellendus sit ullam voluptatem. A adipisci aliquam debitis dolorem est fugiat nulla provident quaerat, quis unde
					</p>
				</div>
				<div class="footer-content-divider animate-bottom">
					<div class="social-media">
						<h4>Follow along</h4>
						<ul class="social-icons">
							<li>
								<a href="https://www.facebook.com/pizzahitz.bangkalan"><i class="fab fa-facebook"></i></a>
							</li>
							<li>
								<a href="https://www.instagram.com/pizzahits_bangkalan/"><i class="fab fa-instagram"></i></a>
							</li>
							<li>
								<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d989.9152100987254!2d112.72933177883621!3d-7.049081455835226!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd805028bbe290d%3A0xdddd501c773ae89f!2sPIZZA%20HITS%20BANGKALAN!5e0!3m2!1sid!2sid!4v1595949776745!5m2!1sid!2sid" width="800" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> -->
								<a href="#"><i class="fas fa-map-marker-alt"></i></a>
							</li>
							<li>
								<a href="https://api.whatsapp.com/send/?phone=%2B6285236510160&text&app_absent=0"><i class="fab fa-whatsapp-square"></i></a>
							</li>
						</ul>
					</div>
					<div class="newsletter-container">
						<h4>Newsletter</h4>
						<form action="" class="newsletter-form">
							<input type="text" class="newsletter-input" placeholder="Your email address...">

							<button class="newsletter-btn" type="submit">
								<i class="fas fa-envelope"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script type="text/Javascript">
		function myFunction(){
		const selectElement = function(element){
			return document.querySelector(element);
		};
		let menuToggler = selectElement('.menu-toggle');
		let body = selectElment('body');

		menuToggler.addEventListener('click', function (){
			body.classList.toggle('open');
		});

		window.sr = ScrollReveal();

		sr.reveal('.animate-left', {
			origin: 'left',
			duration: 1000,
			distance: '25rem',
			delay: 300
		});
		sr.reveal('.animate-right', {
			origin: 'right' ,
			duration: 1000 ,
			distance: '25rem',
			delay: 600
		});
		sr.reveal('.animate-top', {
			origin: 'top',
			duration: 1000,
			distance: '25rem',
			delay: 600
		});
		sr.reveal('.animate-bottom', {
			origin: 'bottom',
			duration: 1000,
			distance: '25rem',
			delay: 600
		});	
	</script>
</body>
</html>