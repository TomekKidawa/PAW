{extends file="main.tpl"}
{* przy zdefiniowanych folderach nie trzeba już podawać pełnej ścieżki *}

{block name=footer}przykladowa tresc stopki z szablonu{/block}

{block name=content}
 
<div id="wrapper" class="divided">

                                <header class="banner style align-right onscroll-fade-in">
                                    <div class="header">
                                        <a href="{$conf->action_url}logout" class="button medium">wyloguj</a>
                                    </div>
                                </header>
    
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
                                                            
                                                    <img src="{$conf->app_url}/images/kalkulator.jpg" alt="alt" />
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
                                                    <img src="{$conf->app_url}/images/skarbonka1.jpg" alt="" />
						</div>
					</section>
			
                                
                                
                                
		
				<!--KALKULATOR|| Seven -->
					<section  class="wrapper style1 align-center" id="seven">
					<div class="inner medium">
                                        <h2>Kalkulator kredytowy</h2>

                                        <form action="{$conf->action_root}calcCompute" method="post">
                                                <div class="fields">
                                                        <div class="field">
                                                                <label for="email">Kwota:</label>
                                                                <input id="id_kwota" type="text" name="kwota" value="{$form->kwota}" placeholder="wprowadź kwote" />
                                                        </div>
                                                        <div class="field">
                                                                <label for="email">Lata:</label>
                                                                <input id="id_lata>" type="text" name="lata" value="{$form->lata}" placeholder="wprowadź lata"  />
                                                        </div>
                                                        <div class="field">
                                                                <label for="email">Oprocentowanie:</label>
                                                                <input id="id_opr" type="text" name="opr" value="{$form->opr}" placeholder="wprowadź oprocentowanie"  />  
                                                        </div>

                                                </div>
                                                <ul class="actions special">
                                                        <li><input type="submit" value="Oblicz"  /></li>
                                                </ul>
                                        </form>


                                                        {* wyświeltenie listy błędów, jeśli istnieją *}
                                                    {include file='messages.tpl'}

                                                    {if isset($res->result)}
                                                    <div class="messages info">
                                                            Wynik: {$res->result}
                                                    </div>
                                                    {/if}

                                    </div>
                                    </section>

                     <!-- STOPKA -->
                    <footer class="wrapper style1 align-center">
                            <div class="inner">
                                <h3>{$page_footer}</h3>
                                    <p>&copy; Tomek Kidawa <a href="https://github.com/TomekKidawa" class="icon brands style1 fa-github"><span class="label">Github</span></a> || Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
                            </div>
                    </footer>

</div>
                                                        
                                                        
<script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
<script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
<script src="{$conf->app_url}/assets/js/browser.min.js"></script>
<script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
<script src="{$conf->app_url}/assets/js/util.js"></script>
<script src="{$conf->app_url}/assets/js/main.js"></script>


                            
{/block}                       
