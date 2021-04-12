<?php
/* Smarty version 3.1.39, created on 2021-04-09 12:25:54
  from 'C:\xampp\htdocs\php_project_paw3\app\views\LoginView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60702bb23022a7_96950639',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '874e9a5a639005675d8a81d7e4103665a96a6dcc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_project_paw3\\app\\views\\LoginView.tpl',
      1 => 1617963937,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60702bb23022a7_96950639 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53464802760702bb22fafc8_76235694', 'content');
?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'content'} */
class Block_53464802760702bb22fafc8_76235694 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_53464802760702bb22fafc8_76235694',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    
<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
        <div class="content">
                <h1>logowanie</h1>
         <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
          <div class="fields">
                  <div class="field">
                          <label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
                  </div>
                  <div class="field">
                          <label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
                  </div>
          </div>
          <ul class="actions special">
                  <li><input type="submit" value="zaloguj"  /></li>
          </ul>
  </form>       
            
        </div>
          
        <div class="image">
            
            <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/kalkulator1.jpg" alt="alt" />
        </div>
</section>


<?php
}
}
/* {/block 'content'} */
}
