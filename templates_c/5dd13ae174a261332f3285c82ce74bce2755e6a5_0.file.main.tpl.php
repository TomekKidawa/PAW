<?php
/* Smarty version 3.1.39, created on 2021-04-09 11:42:54
  from 'C:\xampp\htdocs\php_project_paw3\app\views\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6070219e7f0056_29521317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5dd13ae174a261332f3285c82ce74bce2755e6a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_project_paw3\\app\\views\\templates\\main.tpl',
      1 => 1617961372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6070219e7f0056_29521317 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="pl">
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
                <meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['page_description']->value)===null||$tmp==='' ? 'Opis domyślny' : $tmp);?>
">
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
                <noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
                <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/style.css" />
	</head>
        <body>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17147915896070219e7ef874_63368044', 'content');
?>

       
	</body>
</html><?php }
/* {block 'content'} */
class Block_17147915896070219e7ef874_63368044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_17147915896070219e7ef874_63368044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 Domyślna treść zawartości .... <?php
}
}
/* {/block 'content'} */
}
