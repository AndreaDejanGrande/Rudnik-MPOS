<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:39:13
         compiled from "/var/www/svarog/templates/bootstrap/statistics/pool/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5736885595a8876d15667f2-49374403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '907de57da93c4c811b1bff93e53163087a8bf746' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/pool/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5736885595a8876d15667f2-49374403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8876d1579a28_29981289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8876d1579a28_29981289')) {function content_5a8876d1579a28_29981289($_smarty_tpl) {?><!-- Wrapper -->
<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/contributors_hashrate.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/pool/general_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/small_table.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</div>
<?php }} ?>
