<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 16:06:23
         compiled from "/var/www/svarog/templates/bootstrap/statistics/blocks/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13798106645a89a47fb52325-29596771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64f2d4e07d98ef3462689334b1ae972dd889363e' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/blocks/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13798106645a89a47fb52325-29596771',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a47fb678b0_84133568',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a47fb678b0_84133568')) {function content_5a89a47fb678b0_84133568($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_shares_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/block_overview_time.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("statistics/blocks/blocks_found_details.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
