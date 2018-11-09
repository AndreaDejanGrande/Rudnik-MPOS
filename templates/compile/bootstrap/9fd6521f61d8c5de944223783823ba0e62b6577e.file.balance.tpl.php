<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 00:03:46
         compiled from "/var/www/svarog/templates/bootstrap/admin/wallet/balance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19741499245a8979b2815888-45845363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9fd6521f61d8c5de944223783823ba0e62b6577e' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/wallet/balance.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19741499245a8979b2815888-45845363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BALANCE' => 0,
    'LOCKED' => 0,
    'UNCONFIRMED' => 0,
    'NEWMINT' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8979b282ada9_49820900',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8979b282ada9_49820900')) {function content_5a8979b282ada9_49820900($_smarty_tpl) {?>  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-money fa-fw"></i> Balance Summary
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <tr>
            <td>Wallet Balance</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['BALANCE']->value,"8");?>
</td>
          </tr>
          <tr>
            <td>Locked for users</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['LOCKED']->value,"8");?>
</td>
          </tr>
          <tr>
            <td>Unconfirmed</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['UNCONFIRMED']->value,"8");?>
</td>
          </tr>
<?php if ($_smarty_tpl->tpl_vars['NEWMINT']->value>=0) {?>
          <tr>
            <td>Liquid Assets</td>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['getbalancewithunconfirmed']) {?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value-$_smarty_tpl->tpl_vars['UNCONFIRMED']->value+(($tmp = @$_smarty_tpl->tpl_vars['NEWMINT']->value)===null||$tmp==='' ? "0" : $tmp)),"8");?>
</td>
            <?php } else { ?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value+(($tmp = @$_smarty_tpl->tpl_vars['NEWMINT']->value)===null||$tmp==='' ? "0" : $tmp)),"8");?>
</td>
            <?php }?>
          </tr>
          <tr>
            <td>PoS New Mint</td>
            <td><?php echo number_format($_smarty_tpl->tpl_vars['NEWMINT']->value,"8");?>
</td>
          </tr>
<?php } else { ?>
          <tr>
            <td>Liquid Assets</td>
            <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['getbalancewithunconfirmed']) {?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value-$_smarty_tpl->tpl_vars['UNCONFIRMED']->value),"8");?>
</td>
            <?php } else { ?>
            <td><?php echo number_format(($_smarty_tpl->tpl_vars['BALANCE']->value-$_smarty_tpl->tpl_vars['LOCKED']->value),"8");?>
</td>
            <?php }?>
          </tr>
<?php }?>
        </table>
      </div>
    </div>
  </div>
<?php }} ?>
