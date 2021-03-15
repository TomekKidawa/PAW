<?php
/* Smarty version 3.1.39, created on 2021-03-15 21:12:24
  from 'C:\xampp\htdocs\test_szablon_1\app\szablon.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_604fbfa82dc853_57322649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9d3597c6e4be4648f4722583b7d0ba6c917a5d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\test_szablon_1\\app\\szablon.php',
      1 => 1615839037,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_604fbfa82dc853_57322649 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_336802357604fbfa82cc335_40590772', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2111892871604fbfa82ccba3_43186212', 'content');
?>
                       

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.php");
}
/* {block 'footer'} */
class Block_336802357604fbfa82cc335_40590772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_336802357604fbfa82cc335_40590772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykladowa tresc stopki z szablonu<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_2111892871604fbfa82ccba3_43186212 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_2111892871604fbfa82ccba3_43186212',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

 
				<!--KALKULATOR|| Seven -->
					
<div class="inner medium">
        <h2>Kalkulator kredytowy</h2>

        <form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_cred.php#seven" method="post">
                <div class="fields">
                        <div class="field">
                                <label for="email">Kwota:</label>
                                <input id="id_kwota" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" placeholder="wprowadź kwote" />
                        </div>
                        <div class="field">
                                <label for="email">Lata:</label>
                                <input id="id_lata>" type="text" name="lata" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['lata'];?>
" placeholder="wprowadź lata"  />
                        </div>
                        <div class="field">
                                <label for="email">Oprocentowanie:</label>
                                <input id="id_opr" type="text" name="opr" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['opr'];?>
" placeholder="wprowadź oprocentowanie"  />  
                        </div>

                </div>
                <ul class="actions special">
                        <li><input type="submit" value="Oblicz"  /></li>
                </ul>
        </form>


                <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
               <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
                        <ol style="padding: 10px 10px 10px 30px; border-radius: 0.5em; background-color: #EDCCB6; width:43em;">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                                <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
        <?php }?>

        <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
        <div style="padding: 1em; border-radius: 0.5em; background-color: #C8DCB8; width:43em;">


        Rata kredytu: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
zł

        </div>
        <?php }?>

 </div>
					
                            
<?php
}
}
/* {/block 'content'} */
}
