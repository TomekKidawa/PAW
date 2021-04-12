<?php
/* Smarty version 3.1.39, created on 2021-04-09 13:04:48
  from 'C:\xampp\htdocs\php_project_paw3\app\views\szablon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_607034d0e03c47_14802535',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0c75228f294377f1a97abbd897d568eef6b9f750' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_project_paw3\\app\\views\\szablon.tpl',
      1 => 1617966287,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_607034d0e03c47_14802535 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1432009568607034d0df84c9_51791078', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80234919607034d0df8d08_49123318', 'content');
?>
                       
<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_1432009568607034d0df84c9_51791078 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1432009568607034d0df84c9_51791078',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykladowa tresc stopki z szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_80234919607034d0df8d08_49123318 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_80234919607034d0df8d08_49123318',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
<div id="wrapper" class="divided">

                                <header class="banner style align-right onscroll-fade-in">
                                    <div class="header">
                                        <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="button medium">wyloguj</a>
                                    </div>
                                </header>
    
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
                                                            
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/kalkulator.jpg" alt="alt" />
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
                                                    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/skarbonka1.jpg" alt="" />
						</div>
					</section>
			
                                
                                
                                
		
				<!--KALKULATOR|| Seven -->
					<section  class="wrapper style1 align-center" id="seven">
					<div class="inner medium">
                                        <h2>Kalkulator kredytowy</h2>

                                        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
                                                <div class="fields">
                                                        <div class="field">
                                                                <label for="email">Kwota:</label>
                                                                <input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
" placeholder="wprowadź kwote" />
                                                        </div>
                                                        <div class="field">
                                                                <label for="email">Lata:</label>
                                                                <input id="id_lata>" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
" placeholder="wprowadź lata"  />
                                                        </div>
                                                        <div class="field">
                                                                <label for="email">Oprocentowanie:</label>
                                                                <input id="id_opr" type="text" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->opr;?>
" placeholder="wprowadź oprocentowanie"  />  
                                                        </div>

                                                </div>
                                                <ul class="actions special">
                                                        <li><input type="submit" value="Oblicz"  /></li>
                                                </ul>
                                        </form>


                                                                                                            <?php $_smarty_tpl->_subTemplateRender('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                                                    <?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
                                                    <div class="messages info">
                                                            Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

                                                    </div>
                                                    <?php }?>

                                    </div>
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
                                                        
                                                        
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrollex.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/util.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/js/main.js"><?php echo '</script'; ?>
>


                            
<?php
}
}
/* {/block 'content'} */
}
