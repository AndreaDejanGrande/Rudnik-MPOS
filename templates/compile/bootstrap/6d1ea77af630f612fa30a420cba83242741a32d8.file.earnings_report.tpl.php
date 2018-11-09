<?php /* Smarty version Smarty-3.1.16, created on 2018-02-27 16:22:13
         compiled from "/var/www/svarog/templates/bootstrap/admin/reports/earnings_report.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4444686995a9577a5e1c584-41751253%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d1ea77af630f612fa30a420cba83242741a32d8' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/reports/earnings_report.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4444686995a9577a5e1c584-41751253',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKLIMIT' => 0,
    'USERNAME' => 0,
    'GLOBAL' => 0,
    'REPORTDATA' => 0,
    'totalshares' => 0,
    'totalvalid' => 0,
    'totalinvalid' => 0,
    'pplnsshares' => 0,
    'pplnsvalid' => 0,
    'pplnsinvalid' => 0,
    'amount' => 0,
    'userpplnsshares' => 0,
    'usertotalshares' => 0,
    'percentage1' => 0,
    'percentage2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a9577a6017b66_79645618',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9577a6017b66_79645618')) {function content_5a9577a6017b66_79645618($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.math.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-info fa-fw"></i> Earnings Report Last <?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
 Blocks For User: <?php echo $_smarty_tpl->tpl_vars['USERNAME']->value;?>

      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th class="h6">Block</th>
                <th class="h6">Round Shares</th>
                <th class="h6">Round Valid</th>
                <th class="h6">Invalid</th>
                <th class="h6">Invalid %</th>
                <th class="h6">Round %</th>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
                <th class="h6">PPLNS Shares</th>
                <th class="h6">PPLNS Valid</th>
                <th class="h6">Invalid</th>
                <th class="h6">Invalid %</th>
                <th class="h6">PPLNS %</th>
                <th class="h6">Variance</th>
                <?php }?>
                <th class="h6" style="padding-right: 25px;">Amount</th>
              </tr>
            </thead>
            <tbody>
<?php $_smarty_tpl->tpl_vars['percentage'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalinvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['usertotalshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['totalpercentage'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['pplnsshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['userpplnsshares'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['pplnsvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['pplnsinvalid'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['txs']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['name'] = 'txs';
$_smarty_tpl->tpl_vars['smarty']->value['section']['txs']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['REPORTDATA']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
      <?php $_smarty_tpl->tpl_vars["totalshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['totalvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['totalvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['totalinvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['totalinvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars["pplnsshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['pplnsvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['pplnsinvalid'] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsinvalid']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid'], null, 0);?>
      <?php $_smarty_tpl->tpl_vars['amount'] = new Smarty_variable($_smarty_tpl->tpl_vars['amount']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user_credit'], null, 0);?>
      <?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?>
        <?php $_smarty_tpl->tpl_vars["userpplnsshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['userpplnsshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'], null, 0);?>
      <?php }?>
      <?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']>0) {?>
        <?php $_smarty_tpl->tpl_vars["usertotalshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['usertotalshares']->value+$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'], null, 0);?>
      <?php }?>
              <tr>
                <td class="h6"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['height'];?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['height'])===null||$tmp==='' ? "0" : $tmp);?>
</a></td>
                <td class="h6"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td class="h6"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td class="h6"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid']>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['invalid']/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']>0) {?><?php echo number_format(((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']),"2");?>
<?php } else { ?>0.00<?php }?></td>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
                <td class="h6"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td class="h6"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td class="h6"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid']>0&&$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_invalid']/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares']>0&&$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?><?php echo (($tmp = @number_format(((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid']>0&&$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']>0) {?><?php echo smarty_function_math(array('assign'=>"percentage1",'equation'=>(100/(((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['valid'])/((100/$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['pplns_shares'])*$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid'])))),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user']['pplns_valid']==0) {?><?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(100, null, 0);?><?php }?>
                <font color="<?php if (($_smarty_tpl->tpl_vars['percentage1']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['percentage1']->value,"2"))===null||$tmp==='' ? "0" : $tmp);?>
</font></b></td>
                <?php }?>
                <td class="h6" style="padding-right: 25px;"><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->getVariable('smarty')->value['section']['txs']['index']]['user_credit'])===null||$tmp==='' ? "0" : $tmp),"8");?>
</td>
                <?php $_smarty_tpl->tpl_vars['percentage1'] = new Smarty_variable(0, null, 0);?>
              </tr>
<?php endfor; endif; ?>
              <tr>
                <td class="h6"><b>Totals</b></td>
                <td class="h6"><?php echo number_format($_smarty_tpl->tpl_vars['totalshares']->value);?>
</td>
                <td class="h6"><?php echo number_format($_smarty_tpl->tpl_vars['totalvalid']->value);?>
</td>
                <td class="h6"><?php echo number_format($_smarty_tpl->tpl_vars['totalinvalid']->value);?>
</td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['totalinvalid']->value>0&&$_smarty_tpl->tpl_vars['totalvalid']->value>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['totalinvalid']->value/$_smarty_tpl->tpl_vars['totalvalid']->value*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['usertotalshares']->value>0&&$_smarty_tpl->tpl_vars['totalvalid']->value>0) {?><?php echo (($tmp = @number_format(((100/$_smarty_tpl->tpl_vars['usertotalshares']->value)*$_smarty_tpl->tpl_vars['totalvalid']->value),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
                <td class="h6"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsshares']->value);?>
</td>
                <td class="h6"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsvalid']->value);?>
</td>
                <td class="h6"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsinvalid']->value);?>
</td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['pplnsinvalid']->value>0&&$_smarty_tpl->tpl_vars['pplnsvalid']->value>0) {?><?php echo (($tmp = @number_format(($_smarty_tpl->tpl_vars['pplnsinvalid']->value/$_smarty_tpl->tpl_vars['pplnsvalid']->value*100),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['userpplnsshares']->value>0&&$_smarty_tpl->tpl_vars['pplnsvalid']->value>0) {?><?php echo (($tmp = @number_format(((100/$_smarty_tpl->tpl_vars['userpplnsshares']->value)*$_smarty_tpl->tpl_vars['pplnsvalid']->value),"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0.00<?php }?></td>
                <td class="h6"><?php if ($_smarty_tpl->tpl_vars['totalvalid']->value>0&&$_smarty_tpl->tpl_vars['pplnsvalid']->value>0) {?><?php echo smarty_function_math(array('assign'=>"percentage2",'equation'=>(100/(((100/$_smarty_tpl->tpl_vars['usertotalshares']->value)*$_smarty_tpl->tpl_vars['totalvalid']->value)/((100/$_smarty_tpl->tpl_vars['userpplnsshares']->value)*$_smarty_tpl->tpl_vars['pplnsvalid']->value)))),$_smarty_tpl);?>
<?php } elseif ($_smarty_tpl->tpl_vars['pplnsvalid']->value==0) {?><?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(0, null, 0);?><?php } else { ?><?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(100, null, 0);?><?php }?>
                <font color="<?php if (($_smarty_tpl->tpl_vars['percentage2']->value>=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['percentage2']->value,"2"))===null||$tmp==='' ? "0" : $tmp);?>
</font></b></td>
                <?php }?>
                <td class="h6" style="padding-right: 25px;"><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['amount']->value)===null||$tmp==='' ? "0" : $tmp),"8");?>
</td>
                <?php $_smarty_tpl->tpl_vars['percentage2'] = new Smarty_variable(0, null, 0);?>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
