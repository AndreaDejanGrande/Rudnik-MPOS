<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 00:03:46
         compiled from "/var/www/svarog/templates/bootstrap/admin/wallet/accounts.tpl" */ ?>
<?php /*%%SmartyHeaderCode:359722925a8979b287e1c9-33636089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14cbfb773f76b134448c9f98c006bbf008e52829' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/wallet/accounts.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '359722925a8979b287e1c9-33636089',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACCOUNTS' => 0,
    'NAME' => 0,
    'VALUE' => 0,
    'ACCOUNTADDRESSES' => 0,
    'ACCOUNT' => 0,
    'ADDRESS1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8979b288a726_17434644',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8979b288a726_17434644')) {function content_5a8979b288a726_17434644($_smarty_tpl) {?>  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <i class="fa fa-users fa-fw"></i> Wallet Accounts
        </div>
        <div class="panel-body ">
          <div class="panel-group">
<?php  $_smarty_tpl->tpl_vars['VALUE'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['VALUE']->_loop = false;
 $_smarty_tpl->tpl_vars['NAME'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCOUNTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['VALUE']->key => $_smarty_tpl->tpl_vars['VALUE']->value) {
$_smarty_tpl->tpl_vars['VALUE']->_loop = true;
 $_smarty_tpl->tpl_vars['NAME']->value = $_smarty_tpl->tpl_vars['VALUE']->key;
?>
            <div class="panel panel-default">
              <div class="panel-heading">
                <i class="fa fa-user fa-fw"></i> Account: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['NAME']->value)===null||$tmp==='' ? "Default" : $tmp);?>

              </div>
              <div class="panel-body">
                <div class="col-lg-4">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <i class="fa fa-money fa-fw"></i> Balance Info
                    </div>
                    <div class="table-responsive panel-body no-padding">
                      <table class="table table-striped table-bordered table-hover">
                        <tr>
                          <td class="col-lg-4">Balance</td>
                          <td class="col-lg-12"><?php echo number_format($_smarty_tpl->tpl_vars['VALUE']->value,"8");?>
</td>
                        </tr>
                      </table>
                    </div>
                  </div>
                </div>

<?php  $_smarty_tpl->tpl_vars['ADDRESS'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ADDRESS']->_loop = false;
 $_smarty_tpl->tpl_vars['ACCOUNT'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCOUNTADDRESSES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ADDRESS']->key => $_smarty_tpl->tpl_vars['ADDRESS']->value) {
$_smarty_tpl->tpl_vars['ADDRESS']->_loop = true;
 $_smarty_tpl->tpl_vars['ACCOUNT']->value = $_smarty_tpl->tpl_vars['ADDRESS']->key;
?>
<?php if ($_smarty_tpl->tpl_vars['ACCOUNT']->value==$_smarty_tpl->tpl_vars['NAME']->value) {?>

                <div class="col-lg-8">
                  <div class="panel panel-info">
                    <div class="panel-heading">
                      <i class="fa fa-book fa-fw"></i> Addresses assigned to Account <?php echo (($tmp = @$_smarty_tpl->tpl_vars['ACCOUNT']->value)===null||$tmp==='' ? "Default" : $tmp);?>

                    </div>
                    <div class="table-responsive panel-body no-padding">
                      <table class="table table-striped table-bordered table-hover">
                        <tbody>
<?php  $_smarty_tpl->tpl_vars['ADDRESS1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ADDRESS1']->_loop = false;
 $_smarty_tpl->tpl_vars['ACCOUNT1'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['ACCOUNTADDRESSES']->value[$_smarty_tpl->tpl_vars['ACCOUNT']->value]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['ADDRESS1']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['ADDRESS1']->key => $_smarty_tpl->tpl_vars['ADDRESS1']->value) {
$_smarty_tpl->tpl_vars['ADDRESS1']->_loop = true;
 $_smarty_tpl->tpl_vars['ACCOUNT1']->value = $_smarty_tpl->tpl_vars['ADDRESS1']->key;
 $_smarty_tpl->tpl_vars['ADDRESS1']->iteration++;
?>
<?php if (!(1 & $_smarty_tpl->tpl_vars['ADDRESS1']->iteration / 1)) {?>
                            <td><?php echo $_smarty_tpl->tpl_vars['ADDRESS1']->value;?>
</td>
                          </tr>
<?php } else { ?>
                          <tr>
                            <td><?php echo $_smarty_tpl->tpl_vars['ADDRESS1']->value;?>
</td>
<?php }?>
<?php } ?>
                        <tbody>
                      </table>
<?php }?>
<?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <br>
            </div>
<?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
