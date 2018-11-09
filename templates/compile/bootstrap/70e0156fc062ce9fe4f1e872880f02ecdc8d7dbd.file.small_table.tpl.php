<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:39:13
         compiled from "/var/www/svarog/templates/bootstrap/statistics/blocks/small_table.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4025263765a8876d16bac08-11259378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70e0156fc062ce9fe4f1e872880f02ecdc8d7dbd' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/blocks/small_table.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4025263765a8876d16bac08-11259378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKSFOUND' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8876d16d08f3_05763287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8876d16d08f3_05763287')) {function content_5a8876d16d08f3_05763287($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-th fa-fw"></i> Last Found Blocks
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Block</th>
              <th>Finder</th>
              <th>Time</th>
              <th class="text-right">Actual Shares</th>
            </tr>
          </thead>
          <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total']);
?>
            <tr>
              <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
              <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['blockhash'];?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</a></td>
              <?php } else { ?>
              <td><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</td>
              <?php }?>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['finder'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
              <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['time'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares']);?>
</td>
            </tr>
<?php endfor; endif; ?>
          </tbody>
        </table>
      </div>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
      <div class="panel-footer">
          <h6>Note: Round Earnings are not credited until <font class="confirmations"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations'];?>
</font> confirms.</h6>
      </div>
<?php }?>
    </div>
  </div>
<?php }} ?>
