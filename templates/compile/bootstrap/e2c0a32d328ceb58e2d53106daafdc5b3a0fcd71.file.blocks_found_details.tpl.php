<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 16:06:23
         compiled from "/var/www/svarog/templates/bootstrap/statistics/blocks/blocks_found_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3897123885a89a47fcdcdf7-35709528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2c0a32d328ceb58e2d53106daafdc5b3a0fcd71' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/blocks/blocks_found_details.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3897123885a89a47fcdcdf7-35709528',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKLIMIT' => 0,
    'GLOBAL' => 0,
    'BLOCKSFOUND' => 0,
    'totalshares' => 0,
    'count' => 0,
    'pplnsshares' => 0,
    'totalexpectedshares' => 0,
    'percentage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a47fdca218_59374114',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a47fdca218_59374114')) {function content_5a89a47fdca218_59374114($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.math.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-tasks fa-fw"></i> Last <?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
 Blocks Found
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th class="text-center">Block</th>
                <th class="text-center">Validity</th>
                <th class="text-left">Finder</th>
                <th class="text-right">Time</th>
                <th class="text-right">Difficulty</th>
                <th class="text-right">Amount</th>
                <th class="text-right">Expected Shares</th>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?><th class="text-right">PPLNS Shares</th><?php }?>
                <th class="text-right">Actual Shares</th>
                <th  class="text-right">Percentage</th>
              </tr>
            </thead>
            <tbody>
              <?php $_smarty_tpl->tpl_vars['count'] = new Smarty_variable(0, null, 0);?>
              <?php $_smarty_tpl->tpl_vars['totalexpectedshares'] = new Smarty_variable(0, null, 0);?>
              <?php $_smarty_tpl->tpl_vars['totalshares'] = new Smarty_variable(0, null, 0);?>
              <?php $_smarty_tpl->tpl_vars['pplnsshares'] = new Smarty_variable(0, null, 0);?>
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
              <?php $_smarty_tpl->tpl_vars["totalshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalshares']->value+$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'], null, 0);?>
              <?php $_smarty_tpl->tpl_vars["count"] = new Smarty_variable($_smarty_tpl->tpl_vars['count']->value+1, null, 0);?>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?><?php $_smarty_tpl->tpl_vars["pplnsshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['pplnsshares']->value+$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['pplns_shares'], null, 0);?><?php }?>
              <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
                <td class="text-center"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</a></td>
              <?php } else { ?>
                <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</td>
              <?php }?>
              <td class="text-center">
              <?php if ($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations']>=$_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']) {?>
                <span class="label label-success">Confirmed</span>
              <?php } elseif ($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations']==-1) {?>
                <span class="label label-danger">Orphan</span>
              <?php } else { ?>
                <span class="label label-warning"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations']-$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['confirmations'];?>
 left</span>
              <?php }?>
              </td>
                <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['finder'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
                <td class="text-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['time'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['difficulty'],"4");?>
</td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['amount'],"2");?>
</td>
                <td class="text-right">
                <?php $_smarty_tpl->tpl_vars["totalexpectedshares"] = new Smarty_variable($_smarty_tpl->tpl_vars['totalexpectedshares']->value+$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares'], null, 0);?>
                  <?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares']);?>

                </td>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['pplns_shares']);?>
</td>
                <?php }?>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares']);?>
</td>
                <td class="text-right">
                  <?php echo smarty_function_math(array('assign'=>"percentage",'equation'=>"shares / estshares * 100",'shares'=>(($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'])===null||$tmp==='' ? "0" : $tmp),'estshares'=>$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares']),$_smarty_tpl);?>

                  <font color="<?php if (($_smarty_tpl->tpl_vars['percentage']->value<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage']->value,"2");?>
</font>
                </td>
              </tr>
              <?php endfor; endif; ?>
              <tr>
                <td colspan="6"><b>Totals</b></td>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['totalexpectedshares']->value);?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['pplnsshares']->value);?>
</td>
                <?php }?>
                <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['totalshares']->value);?>
</td>
                <td class="text-right"><?php if ($_smarty_tpl->tpl_vars['count']->value>0) {?><font color="<?php if ((($_smarty_tpl->tpl_vars['totalshares']->value/$_smarty_tpl->tpl_vars['totalexpectedshares']->value*100)<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format(($_smarty_tpl->tpl_vars['totalshares']->value/$_smarty_tpl->tpl_vars['totalexpectedshares']->value*100),"2");?>
</font><?php } else { ?>0<?php }?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="panel-footer">
        <h6><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>Round Earnings are not credited until <font class="confirmations"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['confirmations'];?>
</font> confirms.<?php }?></h6>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
