<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:30:29
         compiled from "/var/www/svarog/templates/bootstrap/dashboard/round_statistics/prop/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16927734225a8874c5de2864-92910324%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d35d31de466848ba4c039765f5346d3c18ccc94' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/dashboard/round_statistics/prop/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16927734225a8874c5de2864-92910324',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874c5de8733_41513308',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874c5de8733_41513308')) {function content_5a8874c5de8733_41513308($_smarty_tpl) {?>  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <i class="fa fa-spinner fa-fw"></i> Round Information
        </h4>
      </div>
      <?php $_smarty_tpl->tpl_vars['PAYOUT_SYSTEM'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
      <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_statistics/".((string)$_smarty_tpl->tpl_vars['PAYOUT_SYSTEM']->value)."/round.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <i class="fa fa-cloud fa-fw"></i> Share Information
        </h4>
      </div>
      <?php $_smarty_tpl->tpl_vars['PAYOUT_SYSTEM'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
      <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_statistics/".((string)$_smarty_tpl->tpl_vars['PAYOUT_SYSTEM']->value)."/shares.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
  </div>
<?php }} ?>
