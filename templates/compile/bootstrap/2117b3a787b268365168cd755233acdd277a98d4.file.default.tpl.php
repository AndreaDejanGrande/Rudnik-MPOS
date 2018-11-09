<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:45:15
         compiled from "/var/www/svarog/templates/bootstrap/statistics/round/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2641618425a88783bd02824-41943187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2117b3a787b268365168cd755233acdd277a98d4' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/round/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2641618425a88783bd02824-41943187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a88783bd1b1a0_70283184',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a88783bd1b1a0_70283184')) {function content_5a88783bd1b1a0_70283184($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/pplns_round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</div>
<?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='prop') {?>
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_transactions.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>
<?php } else { ?>
   <div class="row">
   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/block_stats.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   <?php echo $_smarty_tpl->getSubTemplate ("statistics/round/round_shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

   </div>
<?php }?>
<?php }} ?>
