<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 01:53:38
         compiled from "/var/www/svarog/templates/bootstrap/account/earnings/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4348824485a899372b36163-50710565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8ba0f62c7b334fb0c1b1bb8ca68ea18cd81de3' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/earnings/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4348824485a899372b36163-50710565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISABLE_TRANSACTIONSUMMARY' => 0,
    'GLOBAL' => 0,
    'SUMMARY' => 0,
    'type' => 0,
    'total' => 0,
    'BYTIME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a899372cb1785_45518811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a899372cb1785_45518811')) {function content_5a899372cb1785_45518811($_smarty_tpl) {?><?php if ((($tmp = @$_smarty_tpl->tpl_vars['DISABLE_TRANSACTIONSUMMARY']->value)===null||$tmp==='' ? "0" : $tmp)!=1) {?>
<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-money fa-fw"></i> Total <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 Earning Reports
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-info">
              <div class="panel-heading">
                <i class="fa fa-credit-card fa-fw"></i> Summary
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-condensed">
                    <thead>
                      <tr>
                        <th class="col-xs-1"></th>
                        <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value) {
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
                        <th><?php echo $_smarty_tpl->tpl_vars['type']->value;?>
</th>
                        <?php } ?>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-xs-1">All Time</td>
                        <?php  $_smarty_tpl->tpl_vars['total'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['total']->_loop = false;
 $_smarty_tpl->tpl_vars['type'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SUMMARY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['total']->key => $_smarty_tpl->tpl_vars['total']->value) {
$_smarty_tpl->tpl_vars['total']->_loop = true;
 $_smarty_tpl->tpl_vars['type']->value = $_smarty_tpl->tpl_vars['total']->key;
?>
                        <td class="right"><?php echo number_format($_smarty_tpl->tpl_vars['total']->value,"8");?>
</td>
                        <?php } ?>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="panel panel-info">
              <div class="panel-heading">
                <i class="fa fa-clock-o fa-fw"></i> Sorted by Time
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered table-condensed">
                    <thead>
                      <tr>
                        <th class="col-xs-1"></th>
                        <th>Credit</th>
                        <th>Bonus</th>
                        <th>Debit AP</th>
                        <th>Debit MP</th>
                        <th>Donation</th>
                        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['fees']>0) {?>
                        <th>Fee</th>
                        <?php }?>
                        <th>TXFee</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="col-xs-1">Last Hour</th>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourCredit'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourBonus'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourDebitAP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourDebitMP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourDonation'],"8");?>
</td>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourFee'],"8");?>
</td>
                        <?php }?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1HourTXFee'],"8");?>
</td>
                      </tr>
                      <tr>
                        <td class="col-xs-1">Last Day</th>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourCredit'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourBonus'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourDebitAP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourDebitMP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourDonation'],"8");?>
</td>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourFee'],"8");?>
</td>
                        <?php }?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['24HourTXFee'],"8");?>
</td>
                      </tr>
                      <tr>
                        <td class="col-xs-1">Last Week</th>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekCredit'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekBonus'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekDebitAP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekDebitMP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekDonation'],"8");?>
</td>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekFee'],"8");?>
</td>
                        <?php }?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1WeekTXFee'],"8");?>
</td>
                      </tr>
                      <tr>
                        <td class="col-xs-1">Last Month</th>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthCredit'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthBonus'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthDebitAP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthDebitMP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthDonation'],"8");?>
</td>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthFee'],"8");?>
</td>
                        <?php }?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1MonthTXFee'],"8");?>
</td>
                      </tr>
                      <tr>
                        <td class="col-xs-1">Last Year</th>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearCredit'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearBonus'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearDebitAP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearDebitMP'],"8");?>
</td>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearDonation'],"8");?>
</td>
                        <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['fees'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearFee'],"8");?>
</td>
                        <?php }?>
                        <td><?php echo number_format($_smarty_tpl->tpl_vars['BYTIME']->value['1YearTXFee'],"8");?>
</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }?>


<?php }} ?>
