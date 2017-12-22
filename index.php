<?php defined('_JEXEC') or die; ?>
<!DOCTYPE html>
<html>
	<head>
		<title>Music Report</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />
		<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans:300,400,700&amp;subset=latin-ext" rel="stylesheet">
		<jdoc:include type="head" />
		<script type="text/javascript" src="templates/tplvs/js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="templates/tplvs/js/Template.js"></script>	
	
		<link rel="stylesheet" href="templates/tplvs/css/owl.carousel.min.css" />
		<link rel="stylesheet" href="templates/tplvs/css/style.css" />
	</head>
	<body>
	
		<header>	<!-- górna partia strony -->
		<div class="topline"> 	<!-- pasek czarny góra -->
			<div class="center">	<!-- prowadnice -->
				<div class="left">	<!-- lewa strona paska -->
					<ul>					
					<li>
						<a href="#">
						<img src=".../templates/tplvs/images/socialmedia/facebook.png" alt="facebook icon"/>
						</a>
					</li>				
					<li>
						<a href="#">
						<img src=".../templates/tplvs/images/socialmedia/vimeo.png" alt="vimeo icon"/>
						</a>
					</li>					
					<li>					
						<a href="#">
						<img src=".../templates/tplvs/images/socialmedia/cloud.png" alt="snd icon"/>
						</a>						
					</li>					
					</ul>
					<a href="" class="redbutton">DODAJ UTWÓR</a>
				</div>				
				<div class="right">	<!-- prawa strona paska -->
					<ul>					
					<li>
						<a href="#">
						<span>0</span>
						<img src=".../templates/tplvs/images/icons/settings1.png" alt="settings"/>
						</a>
					</li>					
					<li>
						<a href="#">
						<span class="red">3</span>
						<img src=".../templates/tplvs/images/icons/bell.png" alt="bell"/>
						</a>
					</li>					
					<li>					
						<a href="#">
						<span>0</span>
						<img src=".../templates/tplvs/images/icons/cart.png" alt="cart"/>
						</a>						
					</li>					
					</ul>
					<p><a href="#">Zaloguj się</a> lub <a href="#" class="register">Zarejestruj</a></p>						
				</div>
			</div>
		</div>
		<div class="botline">		
		
			<div class="bottom">
				<div class="left"></div>
				<div class="right"></div>
			</div>
			
			<div class="top center">
				<div class="left">
					<a href="/">
						<img src=".../templates/tplvs/images/pasekdol/logo.png" alt="" />
					</a>
				</div>
																<!-- menu -->
				<div class="right">
					<nav>
					<a href="#" onclick="Template.burger(); return false">menu<span></span></a>			
						<jdoc:include type="modules" name="menu" />
					</nav>
																<!-- wyszukiwarka -->
						<form action="" method="get">
							<input type="text" name="wyszukaj" placeholder="Wyszukaj utwór..." />
							<button type="submit" name="search">wyślij</button>
						</form>
					<div>
						<a href="#"><img src=".../templates/tplvs/images/pasekdol/settings2.png" alt=""/></a>
						<a href="#" class="zaawansowane">wyszukiwanie zaawansowane</a>
					</div>
				</div>
			</div>
			<div class="line"></div>
		</div>
	</header>
																<!-- slider -->
	<section>
		<jdoc:include type="modules" name="slider" style="xhtml"/>
																<!-- sklep -->
		<jdoc:include type="modules" name="programs" />
		
		
		<?php
		$app = JFactory::getApplication();
		$menu = $app->getMenu();
		if ($menu->getActive() != $menu->getDefault()) { ?>
			<div class="mojartykul">
				<jdoc:include type="component" />
			</div>
		
		<?php }
		?>
		
		
																<!-- kategorie muzyczne -->
																
		
		
		<div class="category">
			<div class="center">
				<div class="left">
					<h3 class="headertop">Kategorie muzyczne</h3>
					<jdoc:include type="modules" name="muzyka" />
					<div>
						<a href="" class="play">zobacz wszystkie</a>
					</div>
				</div>
				<div class="right">
				  <h3 class="headertop">Ostatnio dodane - <span>Disco Polo</span></h3>
				  <ul>
				  	<li>	
				  		<div class="lefts">
				  			<p class="tytul">Lorem ipsum - dolor sit (2017)</p>
			  			  <ul>
								<li><div class="back">back</div></li>
								<li><div class="play">play</div></li>
								<li><div class="rewind">rewind</div></li>
							</ul>
						  <div class="odtwarzacz">
								<div class="player">123</div>
								<span class="start">00:23</span>
								<span class="koniec">04:12</span>
							</div>
			  		  </div>
				  		<div class="rights">
				  			<ul>
				  				<li>
									<a href="" class="ulub" ><strong>ulubione</strong></a>
								</li>
								<li>
									<a href="" class="zakup">zakup utwór</a>
								</li>
							</ul>
				  			
				  		</div>
				  	</li>
				  	<li>	
				  		<div class="lefts">
				  			<p class="tytul">Lorem ipsum - dolor sit (2017)</p>
			  			  <ul>
								<li><div class="back">back</div></li>
								<li><div class="play">play</div></li>
								<li><div class="rewind">rewind</div></li>
							</ul>
						  <div class="odtwarzacz">
								<div class="player">123</div>
								<span class="start">00:23</span>
								<span class="koniec">04:12</span>
							</div>
			  		  </div>
				  		<div class="rights">
				  			<ul>
				  				<li>
									<a href="" class="ulub"><strong>ulubione</strong></a>
								</li>
								<li>
									<a href="" class="zakup">zakup utwór</a>
								</li>
							</ul>
				  			
				  		</div>
				  	</li>
				  	<li>	
				  		<div class="lefts">
				  			<p class="tytul">Lorem ipsum - dolor sit (2017)</p>
			  			  <ul>
								<li><div class="back">back</div></li>
								<li><div class="play">play</div></li>
								<li><div class="rewind">rewind</div></li>
							</ul>
						  <div class="odtwarzacz">
								<div class="player">123</div>
								<span class="start">00:23</span>
								<span class="koniec">04:12</span>
							</div>
			  		  </div>
				  		<div class="rights">
				  			<ul>
				  				<li>
									<a href="" class="ulub"><strong>ulubione</strong></a>
								</li>
								<li>
									<a href="" class="zakup">zakup utwór</a>
								</li>
							</ul>
				  			
				  		</div>
				  	</li>
				  	<li>	
				  		<div class="lefts">
				  			<p class="tytul">Lorem ipsum - dolor sit (2017)</p>
			  			  <ul>
								<li><div class="back">back</div></li>
								<li><div class="play">play</div></li>
								<li><div class="rewind">rewind</div></li>
							</ul>
						  <div class="odtwarzacz">
								<div class="player">123</div>
								<span class="start">00:23</span>
								<span class="koniec">04:12</span>
							</div>
			  		  </div>
				  		<div class="rights">
				  			<ul>
				  				<li>
									<a href="" class="ulub"><strong>ulubione</strong></a>
								</li>
								<li>
									<a href="" class="zakup">zakup utwór</a>
								</li>
							</ul>
		
				  		</div>
				  	</li>
				  </ul>
				  <ul class="pages">
					<li>1</li>
					<li>2</li>
					<li>3</li>
					<li>4</li>
					<li>...</li>
					<li>89</li>
				   </ul>
			  	</div>
			</div>
		</div>
																<!-- filmy -->
		<div class="movies">
			<div class="center">
				<div class="left" style="background-image:url(.../templates/tplvs/images/bg/bg_movie.jpg)">	
					<div class="content">
						<span class="date">
						<strong>15</strong>mar
						</span>
						<div class="przycisk">
							<div class="startplay">pressplay</div>
						</div>
						<div class="bot">
							<p>Kategoria - <span class="color">początki projektowania</span></p>
							<h2>lorem ipsum dolor sit amet</h2>
							<ul>
								<li>
									<a href="" class="zakup">zakup tutorial</a>
								</li>
								<li>
									<a href="" class="ulub">ulubione</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="right">
					<div class="content2">
						<h3 class="headertop">Pozostałe tutoriale</h3>
					</div>
					<ul>
						<li style="background-image:url(.../templates/tplvs/images/bg/bg_movie.jpg)">
							<div class="teksty">
								<p class="lorem">Lorem ipsum dolor sit amet</p>
								<p>Kategoria - <span class="color">Początki projektowania</span></p>
							</div>
							<div class="links">
								<a href="" class="zakup">zakup</a>
								<a href="" class="ulub">ulubione</a>
							</div>
						</li>
						<li style="background-image:url(.../templates/tplvs/images/bg/bg_movie.jpg)">
							<div class="teksty">
								<p class="lorem">Lorem ipsum dolor sit amet</p>
								<p>Kategoria - <span class="color">Początki projektowania</span></p>
							</div>
							<div class="links">
								<a href="" class="zakup">zakup</a>
								<a href="" class="ulub">ulubione</a>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="articles" style="background-image:url(.../templates/tplvs/images/bg/bg_artrank.jpg)">
			<div class="center">
				<div class="left">
					<h3 class="headertop">Ostatnio na blogu</h3>
					<ul class="lewa">
						<li>
							<div class="artbox">
								<div class="art-title" style="background-image:url(.../templates/tplvs/images/bg/bg_art.jpg)">
									<span class="data">15 maj 2017</span>
									<p class="title">lorem ipsum dolor sit amet</p>
								</div>
								<div class="opis-button">
									<div class="opis">Nunc mattis nunc et elit posuere, quis dignissim
									risus vestibulum. Proin nec metus vitae 
									erat luctus mattis.
									</div>
									<a href="" class="button">Czytaj więcej</a>
								</div>
							</div>
						</li>
						<li>
							<div class="artbox">
								<div class="art-title" style="background-image:url(.../templates/tplvs/images/bg/bg_art.jpg)">
									<span class="data">15 maj 2017</span>
									<p class="title">lorem ipsum dolor sit amet</p>
								</div>
								<div class="opis-button">
									<div class="opis">Nunc mattis nunc et elit posuere, quis dignissim
									risus vestibulum. Proin nec metus vitae 
									erat luctus mattis.
									</div>
									<a href="" class="button">Czytaj więcej</a>
								</div>
							</div>
						</li>
					</ul>
					<ul class="prawa">
						<li>
							<div class="artbox">
								<div class="art-title" style="background-image:url(.../templates/tplvs/images/bg/bg_art.jpg)">
									<span class="data">15 maj 2017</span>
									<p class="title">lorem ipsum dolor sit amet</p>
								</div>
								<div class="opis-button">
									<div class="opis">Nunc mattis nunc et elit posuere, quis dignissim
									risus vestibulum. Proin nec metus vitae 
									erat luctus mattis.
									</div>
									<a href="" class="button">Czytaj więcej</a>
								</div>
							</div>
						</li>
						<li>
							<div class="artbox">
								<div class="art-title" style="background-image:url(.../templates/tplvs/images/bg/bg_art.jpg)">
									<span class="data">15 maj 2017</span>
									<p class="title">lorem ipsum dolor sit amet</p>
								</div>
								<div class="opis-button">
									<div class="opis">Nunc mattis nunc et elit posuere, quis dignissim
									risus vestibulum. Proin nec metus vitae 
									erat luctus mattis.
									</div>
									<a href="" class="button">Czytaj więcej</a>
								</div>
							</div>
						</li>
					</ul>
					<div class="button" style="text-align: center;">	
						<a href="" class="redbutton">Zobacz blog</a>
					</div>
				</div>
				<div class="right">
					<div class="rank">
						<h3 class="headertop">Ranking - <span>Komentarze</span></h3>
						<div class="user-top">
							<span class="user">UserNr1</span>
							<div class="wynik">12001</div>
						</div>
						<div class="user-top">
							<span class="user">UserNr2</span>
							<div class="wynik">10190</div>
						</div>
						<div class="user-top">
							<span class="user">UserNr3</span>
							<div class="wynik">9512</div>
						</div>
						<div class="user-top">
							<span class="user">UserNr4</span>
							<div class="wynik">6120</div>
						</div>
						<div class="user-top">
							<span class="user">UserNr5</span>
							<div class="wynik">5770</div>
						</div>
					</div>
					<div class="suck">
						<div class="suckdiv">
							<span class="tekst">Miejsce na <strong>Twoją Reklamę</strong></span>
							<span class="wymiary">340 x 280px</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="partners">
			<ul>
				<li>
					<a href=""><img src=".../templates/tplvs/images/logo_grey.png" /></a>
				</li>
				<li>
					<a href=""><img src=".../templates/tplvs/images/logo_grey.png" /></a>
				</li>
				<li>
					<a href=""><img src=".../templates/tplvs/images/logo_grey.png" /></a>
				</li>
				<li>
					<a href=""><img src=".../templates/tplvs/images/logo_grey.png" /></a>
				</li>
			</ul>
		</div>
		<div class="stopka">
			<div class="center">
				<p class="sign">Zapisz się do </p>
				<span>newsletter'a</span>
				<form action="" method="get">
					<input type="text" name="wyszukaj" placeholder="Twój adres e-mail..." />
					<button type="submit" name="search">Zapisuję się</button>
				</form>
				<p class="txt">
				Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut posuere dui at sodales 
				lorem non bibendum lacinia. Quisque quis condimentum magna.
				</p>
			</div>
		</div>
	</section>
	
	<script type="text/javascript">
		Template.slider();
	</script>
	<script>
		Template.ulubione();
	
	</script>
	<div class="footer">
	<jdoc:include type="modules" name="stopkaa" />
	<span class="footer2edit">TWORZENIE STRON INTERNETOWYCH / PAWEŁ JĘDRASIK</span>
	</div>
	
	</body>
</html>
