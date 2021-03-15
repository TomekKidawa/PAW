<?php
/* Smarty version 3.1.39, created on 2021-03-15 20:37:35
  from 'C:\xampp\htdocs\test_szablon_1\templates\main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604fb77fcebdf2_53178871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e6e5d1655ea185608dc60f3346ef279ed73d4ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test_szablon_1\\templates\\main.php',
      1 => 1615638965,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fb77fcebdf2_53178871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
                <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? "Opis domyślny" : $tmp);?>
">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/css/noscript.css" /></noscript>
	</head>
        <body>
            	<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper" class="divided">

				<!--PIERWSZA|| One -->
					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1>Kalkulator kredytowy</h1>
							<p class="major"><?php echo $_smarty_tpl->tpl_vars['page_description']->value;?>
</p>
							<ul class="actions stacked">
								<li><a href="#seven" class="button big wide smooth-scroll-middle">Przejdz do Kalkulatora</a></li>
							</ul>
						</div>
						<div class="image">
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/kalkulator.jpg" alt="" />
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
							<img src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/images/skarbonka1.jpg" alt="" />
						</div>
					</section>
			
                                
                                
                                
		
				<!--KALKULATOR|| Seven -->
					<section  class="wrapper style1 align-center" id="seven">
					<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1077844342604fb77fce9766_32215543', 'content');
?>

					</section>
                                                                               
				<!-- STOPKA -->
					<footer class="wrapper style1 align-center">
						<div class="inner">
                                                    <h3><?php echo $_smarty_tpl->tpl_vars['page_footer']->value;?>
</h3>
							<p>&copy; Tomek Kidawa <a href="https://github.com/TomekKidawa" class="icon brands style1 fa-github"><span class="label">Github</span></a> || Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/assets/js/main.js"><?php echo '</script'; ?>
>

 
       
	</body>
</html><?php }
/* {block 'content'} */
class Block_1077844342604fb77fce9766_32215543 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1077844342604fb77fce9766_32215543',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
