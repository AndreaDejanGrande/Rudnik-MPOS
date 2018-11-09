<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:26:32
         compiled from "/var/www/svarog/templates/bootstrap/home//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4342291835a8873d81b5385-93152248%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '020211ba147a44ad6fa720d9b33baf1551eae01b' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/home//default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4342291835a8873d81b5385-93152248',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8873d81bca53_52056101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8873d81bca53_52056101')) {function content_5a8873d81bca53_52056101($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['newsstyle'])===null||$tmp==='' ? "0" : $tmp)==0) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("home/news_all.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ("home/news_accordion.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>
