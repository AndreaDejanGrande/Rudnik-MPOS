<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 02:49:35
         compiled from "/var/www/svarog/templates/bootstrap/account/edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1001003605a89a08f361db6-03904084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b06910a01f8c6f3d6f35baff1562c8c08efd906' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/edit/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1001003605a89a08f361db6-03904084',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a08f36e7d5_47811674',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a08f36e7d5_47811674')) {function content_5a89a08f36e7d5_47811674($_smarty_tpl) {?><div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("account/edit/detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("account/edit/password.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("account/edit/cashout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("account/edit/resetpin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div><?php }} ?>
