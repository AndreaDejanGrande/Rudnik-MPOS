<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 21:14:43
         compiled from "/var/www/svarog/templates/bootstrap/admin/dashboard/mpos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6037774565a8b30330ee4f0-23131475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f10fe00c65e5c3973da1846c5963dba298c6efd' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/dashboard/mpos.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6037774565a8b30330ee4f0-23131475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VERSION' => 0,
    'CRON_ERROR' => 0,
    'CRON_DISABLED' => 0,
    'WALLET_ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8b303310c5a8_80273146',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8b303310c5a8_80273146')) {function content_5a8b303310c5a8_80273146($_smarty_tpl) {?><div class="row">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-info fa-fw"></i> MPOS Version Information
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Component</th>
              <th>Current</th>
              <th>Installed</th>
              <th>Online</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><strong>MPOS</strong></td>
              <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE'];?>
</font></td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CORE']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE'];?>
</font>
              </td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CORE']==$_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CORE']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CORE'];?>
</font>
              </td>
            </tr>
            <tr>
              <td><strong>Config</strong></td>
              <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG'];?>
</font></td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['CONFIG']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG'];?>
</font>
              </td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['CONFIG']==$_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CONFIG']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['CONFIG'];?>
</font>
              </td>
            </tr>
            <tr>
              <td><strong>Database</strong></td>
              <td><font color="green"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB'];?>
</font></td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB']==$_smarty_tpl->tpl_vars['VERSION']->value['CURRENT']['DB']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB'];?>
</font>
              </td>
              <td>
                <font color="<?php if ($_smarty_tpl->tpl_vars['VERSION']->value['INSTALLED']['DB']==$_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['DB']) {?>green<?php } else { ?>red<?php }?>"><?php echo $_smarty_tpl->tpl_vars['VERSION']->value['ONLINE']['DB'];?>
</font>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-question fa-fw"></i> MPOS Status
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th colspan="2">Cronjobs</th>
              <th>Wallet</th>
            </tr>
            <tr>
              <th><strong>Errors</strong></th>
              <th><strong>Disabled</strong></th>
              <th><strong>Errors</strong></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_ERROR']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_ERROR']->value;?>
<?php }?></a>
              </td>
              <td>
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=monitoring"><?php if ($_smarty_tpl->tpl_vars['CRON_DISABLED']->value==0) {?>None - OK<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['CRON_DISABLED']->value;?>
<?php }?></a>
              </td>
              <td>
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=wallet"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['WALLET_ERROR']->value)===null||$tmp==='' ? "None - OK" : $tmp);?>
</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>




<?php }} ?>
