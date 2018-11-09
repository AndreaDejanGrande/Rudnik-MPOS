<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:45:15
         compiled from "/var/www/svarog/templates/bootstrap/statistics/round/round_transactions.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18333546115a88783bd9f645-95708984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ce6af2d66643823113f02bd812204f23ce44e12' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/round/round_transactions.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18333546115a88783bd9f645-95708984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROUNDTRANSACTIONS' => 0,
    'GLOBAL' => 0,
    'ROUNDSHARES' => 0,
    'BLOCKDETAILS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a88783bdc32f2_61499812',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a88783bdc32f2_61499812')) {function content_5a88783bdc32f2_61499812($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        Round Transactions
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover <?php if ($_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value) {?>datatable<?php }?>">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Type</th>
                <th>Round Shares</th>
                <th>Round %</th>
                <th>Amount</th>
              </tr>
            </thead>
            <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['name'] = 'txs';
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['total']);
?>
              <tr<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)==$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['username']) {?> style="background-color:#99EB99;"<?php } else { ?><?php }?>>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['username'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
                <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['type'])===null||$tmp==='' ? '' : $tmp);?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid']);?>
</td>
                <td><?php echo number_format((($tmp = @((100/$_smarty_tpl->tpl_vars['BLOCKDETAILS']->value['shares'])*$_smarty_tpl->tpl_vars['ROUNDSHARES']->value[$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['uid']]['valid']))===null||$tmp==='' ? "0" : $tmp),"2");?>
</td>
                <td><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['ROUNDTRANSACTIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['amount'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td>
              </tr>
<?php endfor; endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
