<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 00:03:46
         compiled from "/var/www/svarog/templates/bootstrap/admin/wallet/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1434279075a8979b280a144-79648693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d1ee1a20991bc0ce321f4d608cd3467ba31cd06' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/wallet/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1434279075a8979b280a144-79648693',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8979b2812ec9_54592585',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8979b2812ec9_54592585')) {function content_5a8979b2812ec9_54592585($_smarty_tpl) {?><div class="row">
  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/balance.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/status.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/peers.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php echo $_smarty_tpl->getSubTemplate ("admin/wallet/accounts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
