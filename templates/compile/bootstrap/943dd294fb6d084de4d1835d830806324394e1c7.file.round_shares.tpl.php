<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:45:15
         compiled from "/var/www/svarog/templates/bootstrap/statistics/round/round_shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10695314745a88783bd8c037-57006119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '943dd294fb6d084de4d1835d830806324394e1c7' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/round/round_shares.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10695314745a88783bd8c037-57006119',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROUNDSHARES' => 0,
    'GLOBAL' => 0,
    'data' => 0,
    'rank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a88783bd9d799_14183751',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a88783bd9d799_14183751')) {function content_5a88783bd9d799_14183751($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-refresh fa-fw"></i> Round Shares
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover <?php if ($_smarty_tpl->tpl_vars['ROUNDSHARES']->value) {?>datatable<?php }?>">
            <thead>
              <tr>
                <th>Rank</th>
                <th>User Name</th>
                <th>Valid</th>
                <th>Invalid</th>
                <th>Invalid %</th>
              </tr>
            </thead>
            <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ROUNDSHARES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['id']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
              <tr<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)==$_smarty_tpl->tpl_vars['data']->value['username']) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?> style="background-color:#99EB99;"<?php } else { ?><?php }?>>
                <td><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['data']->value['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['data']->value['username'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['valid']);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['data']->value['invalid']);?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['data']->value['invalid']>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['data']->value['invalid']/$_smarty_tpl->tpl_vars['data']->value['valid']*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
              </tr>
<?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
