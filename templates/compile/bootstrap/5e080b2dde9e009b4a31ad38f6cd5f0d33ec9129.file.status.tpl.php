<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 00:03:46
         compiled from "/var/www/svarog/templates/bootstrap/admin/wallet/status.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20710883795a8979b282cad5-75373717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e080b2dde9e009b4a31ad38f6cd5f0d33ec9129' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/wallet/status.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20710883795a8979b282cad5-75373717',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'COININFO' => 0,
    'ADDRESSCOUNT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8979b2835d72_13244124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8979b2835d72_13244124')) {function content_5a8979b2835d72_13244124($_smarty_tpl) {?>  <div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-info fa-fw"></i> Wallet Status
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <th>Version</th>
            <th>Protocol Version</th>
            <th>Wallet Version</th>
            <th>Peers</th>
            <th>Status</th>
            <th>Blocks</th>
            <th>Accounts</th>
          </thead>
          <tbody>
            <tr>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['version'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['protocolversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['walletversion'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['connections'])===null||$tmp==='' ? '' : $tmp);?>
</td>
              <td><font color="<?php if ($_smarty_tpl->tpl_vars['COININFO']->value['errors']) {?>red<?php } else { ?>green<?php }?>"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['errors'])===null||$tmp==='' ? "OK" : $tmp);?>
</font></td>
              <td><?php echo (($tmp = @$_smarty_tpl->tpl_vars['COININFO']->value['blocks'])===null||$tmp==='' ? "0" : $tmp);?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['ADDRESSCOUNT']->value;?>
</td>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
<?php }} ?>
