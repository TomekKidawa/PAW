<!doctype html>
<html lang="pl">
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
                <meta name="description" content="{$page_description|default:"Opis domyślny"}">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{$app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css" /></noscript>
	</head>
        <body>
            	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!--PIERWSZA|| One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Kalkulator kredytowy</h1>
							<p class="major">{$page_description}</p>
							<ul class="actions stacked">
								<li><a href="#seven" class="button big wide smooth-scroll-middle">Przejdz do Kalkulatora</a></li>
							</ul>
						</div>
						<div class="image">
                                                    <img src="{$app_url}/images/kalkulator.jpg" alt="" />
						</div>
					</section>

                                
                                
                                
				<!--SWINKA|| Two -->
					<section class="spotlight style1 orient-right content-align-left image-position-center onscroll-image-fade-in" id="first">
						<div class="content">
							<h2>Jak działa kalkulator?</h2>
                                                        <p>Noo tu bierze, liczy ciach bajera dobrze robi kalkulator dobrze </br> dobrze liczy chlopak.</p>
							<ul class="actions stacked">
								<li><a href="#seven" class="button">Chce juz liczyć!</a></li>
							</ul>
						</div>
						<div class="image">
							<img src="{$app_url}/images/skarbonka1.jpg" alt="" />
						</div>
					</section>
			
                                
                                
                                
		
				<!--KALKULATOR|| Seven -->
					<section  class="wrapper style1 align-center" id="seven">
					{block name=content} Domyślna treść zawartości .... {/block}
					</section>
                                                                               
				<!-- STOPKA -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
                                                    <h3>{$page_footer}</h3>
							<p>&copy; Tomek Kidawa <a href="https://github.com/TomekKidawa" class="icon brands style1 fa-github"><span class="label">Github</span></a> || Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="{$app_url}/assets/js/jquery.min.js"></script>
			<script src="{$app_url}/assets/js/jquery.scrollex.min.js"></script>
			<script src="{$app_url}/assets/js/jquery.scrolly.min.js"></script>
			<script src="{$app_url}/assets/js/browser.min.js"></script>
			<script src="{$app_url}/assets/js/breakpoints.min.js"></script>
			<script src="{$app_url}/assets/js/util.js"></script>
			<script src="{$app_url}/assets/js/main.js"></script>

 
       
	</body>
</html>