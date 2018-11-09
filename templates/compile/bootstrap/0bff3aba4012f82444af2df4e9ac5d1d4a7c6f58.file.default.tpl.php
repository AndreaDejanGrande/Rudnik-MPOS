<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:30:29
         compiled from "/var/www/svarog/templates/bootstrap/dashboard/worker_information/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18261047365a8874c5e2adc5-29123481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bff3aba4012f82444af2df4e9ac5d1d4a7c6f58' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/dashboard/worker_information/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18261047365a8874c5e2adc5-29123481',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874c5e2d120_63836207',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874c5e2d120_63836207')) {function content_5a8874c5e2d120_63836207($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value) {?>
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-desktop fa-fw"></i> Worker Information</h4>
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-bordered table-hover table-striped"> 
         <thead>
          <tr>
            <th>Worker</th>
            <th>Hashrate</th>
            <th>Difficulty</th>
          </tr>
          </thead>
          <tbody id="b-workers">
            <td colspan="3" class="text-center">No worker information available</td>
          </tbody>
        </table>
      </div>
    </div>
  </div>
<?php }?>
<?php }} ?>
