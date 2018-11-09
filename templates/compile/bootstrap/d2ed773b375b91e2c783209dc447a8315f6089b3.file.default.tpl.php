<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:30:29
         compiled from "/var/www/svarog/templates/bootstrap/dashboard//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7248921665a8874c5cf7d74-16065285%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2ed773b375b91e2c783209dc447a8315f6089b3' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/dashboard//default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7248921665a8874c5cf7d74-16065285',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'GLOBAL' => 0,
    'DISABLED_API' => 0,
    'INTERVAL' => 0,
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874c5dbf981_68742380',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874c5dbf981_68742380')) {function content_5a8874c5dbf981_68742380($_smarty_tpl) {?><?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
<script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/date.format.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/soundjs-0.6.0.min.js"></script>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-align-left fa-fw"></i> Overview</h4>
      </div>
      <div class="panel-body text-center">
        <div class="row">
          <div class="col-lg-12">
          
          <?php $_smarty_tpl->tpl_vars['PAYOUT_SYSTEM'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], null, 0);?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/round_statistics/".((string)$_smarty_tpl->tpl_vars['PAYOUT_SYSTEM']->value)."/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/account_data/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php if (!$_smarty_tpl->tpl_vars['DISABLED_API']->value) {?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/worker_information/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php }?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/blocks/default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          </div>
        </div>
      </div>
      <div class="panel-footer">
        <h6>Refresh interval: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval'])===null||$tmp==='' ? "10" : $tmp);?>
 seconds, worker and account <?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_long_refresh_interval'])===null||$tmp==='' ? "10" : $tmp);?>
 seconds. Hashrate based on shares submitted in the past <?php echo (($tmp = @$_smarty_tpl->tpl_vars['INTERVAL']->value)===null||$tmp==='' ? "5" : $tmp);?>
 minutes.</h6>
      </div>
    </div>
  </div>
</div>
  
  <?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js/api.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } else { ?>
  <?php echo $_smarty_tpl->getSubTemplate ("dashboard/js/static.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>
<?php }?>
<?php }} ?>
