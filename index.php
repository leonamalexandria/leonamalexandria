<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="fonts/Roboto" rel="stylesheet">
	<script src="https://kit.fontawesome.com/0ac4ca22f0.js" crossorigin="anonymous"></script>

	<title>Leonam - tema</title>
</head>
<body>

	<section class="topo">
		<div class="center">

			<header>
				<div class="logo">Leonam Alexandria</div><!--logo-->
			</header>

			<ul class="menu-desktop">
				<li><a href="">Home</a></li>
				<li><a href="">English version</a></li>
				<li><a href="">Contato</a></li>
			</ul>

			<div class="menu-mobile">
				<i class="fa-solid fa-bars"></i>
				<ul>
					<li><a href="">Home</a></li>
					<li><a href="">English version</a></li>
					<li><a href="">Contato</a></li>
				</ul>
			</div><!--menu-mobile-->

			<div class="clear"></div>
			<br />
			<br />
			<div class="w50 time-descricao">
				<h2>Olá, meu nome é Leonam Alexandria</h2>
				<p>Desenvolvedor Junior</p>
				<a target="_blank" href="...">Download CV</a>
			</div><!--w50 time-descricao-->
			<div class="w50 time-imagem">
				<img src="images/IMG1.jpg" />
			</div><!--w50 time-imagem-->
			<div class="clear"></div>
		</div><!--center-->
	</section><!--topo-->

	<div class="circle"><i class="fa-solid fa-sort"></i></div>

	<section class="clientes-slider">

		<div class="center">
			<div style="max-width: 700px; margin: 0 auto; overflow: hidden;" class="slider-container">
				<img src="images/php.jpg" />
				<img src="images/css.jpg" />
				<img src="images/js.jpg" />
				<img src="images/php-elephant.jpg" />
				<img src="images/html.jpg" />
				<img src="images/wordpress.jpg" />
			</div>
		</div><!--center-->
	</section>
	<div class="clear"></div>
	<br />

	<section class="sobre">
		<div class="center">
			<div class="w50 sobre-descricao">
				<h2>Eu sou um desenvolvedor Website</h2>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
			</div><!--sobre-descricao-->

			<div class="w50 sobre-imagem">
				<img src="images/IMG1.jpg" />
			</div><!--sobre-imagem-->

			<div class="clear"></div>
		</div><!--center-->
	</section><!--sobre-->

	<section class="projetos">
		<div class="center">
			<h2>PROJETOS</h2>

			<div class="sites">
				<div class="box-single-sites">
					<img src="images/php-elephant.jpg" />
					<h3>Site sobre tal projeto1</h3>
				</div><!--box-single-sites-->

				<div class="box-single-sites">
					<img src="images/php-elephant.jpg" />
					<h3>Site sobre tal projeto2</h3>
				</div><!--box-single-sites-->

				<div class="box-single-sites">
					<img src="images/php-elephant.jpg" />
					<h3>Site sobre tal projeto3</h3>
				</div><!--box-single-sites-->
			</div><!--sites-->
		<div class="clear"></div>
		</div><!--center-->
	</section><!--projetos-->

	<section class="depoimentos">
		<div class="center">
			<h2>Depoimentos</h2>
			<div class="depoimento-box">
				<div class="depoimento-single">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<p>Cadu Maverick</p>
					<img src="images/php-elephant.jpg">
				</div><!--Depoimento-single-->
				<div class="depoimento-single">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<p>Cadu Maverick</p>
					<img src="images/php-elephant.jpg">
				</div><!--Depoimento-single-->
				<div class="depoimento-single">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
					<p>Cadu Maverick</p>
					<img src="images/php-elephant.jpg">
				</div><!--Depoimento-single-->
			</div><!--Depoimento-box-->
		</div><!--Center-->
	</section><!--Depoimentos-->

	<footer>
		<section class="metodologia">
			<div class="center">
				<h2>Conheça nossa Metodologia</h2>
				<p>O que acha de fazermos o que mais gostamos de fazer? Conversar? <br />Entre em contato pelo Email </p>
				<a href="/contato">Entrar em contato</a>
			</div><!--Center-->
		</section><!--Metodologia-->

		<div class="center">
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">contato</a>
				<a href="">FAQ</a>
			</div><!--col--footer-->
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">contato</a>
				<a href="">FAQ</a>
			</div><!--col--footer-->
			<div class="col-footer">
				<h2>Suporte</h2>
				<a href="">contato</a>
				<a href="">FAQ</a>
			</div><!--col--footer-->
			<div style="width: 40%; text-align: right;" class="col-footer">
				<img src="images/php-elephant.jpg">
			</div><!--col--footer-->
		</div><!--Center-->
	</footer>

<script src="js/jquery.js"></script>
<script src="js/slick.min.js"></script>

<script type="text/javascript">

	$('section.clientes-slider .slider-container').slick({
		dots: true,
		arrows:false,
	    infinite: false,
	    speed:1000,
	    slidesToShow: 4,
	    autoplay: true,
	    centerMode:false,
	    autoplaySpeed: 3000,
	    pauseOnHover:false,
	    responsive: 
	    [
	    {
	      breakpoint: 768,
	      settings: {
	        slidesToShow: 2
	      }
	    }
	    ]
	});

	$('section.depoimentos .depoimento-box').slick({
		dots: true,
		arrows:false,
	    infinite: true,
	    speed:1000,
	    slidesToShow: 1,
	    centerMode:false,
	});
</script>

<script>
	//Menu responsivo.
	$('.menu-mobile i').click(function(){
		$('.menu-mobile').find('ul').slideToggle();
	})
</script>

</body>
</html>