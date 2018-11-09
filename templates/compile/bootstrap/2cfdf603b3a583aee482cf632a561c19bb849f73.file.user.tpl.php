<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 21:14:43
         compiled from "/var/www/svarog/templates/bootstrap/admin/dashboard/user.tpl" */ ?>
<?php /*%%SmartyHeaderCode:650385285a8b303310e652-49076215%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2cfdf603b3a583aee482cf632a561c19bb849f73' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/dashboard/user.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '650385285a8b303310e652-49076215',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_INFO' => 0,
    'USER_LOGINS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8b3033114db7_02618085',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8b3033114db7_02618085')) {function content_5a8b3033114db7_02618085($_smarty_tpl) {?><div class="row">
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-user fa-fw"></i> Users
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Total</th>
              <th>Active</th>
              <th>Locked</th>
              <th>Admins</th>
              <th>No Fees</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['total'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['active'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['locked'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['admins'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_INFO']->value['nofees'];?>
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
        <i class="fa fa-sign-in fa-fw"></i> Logins
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>24 hours</th>
              <th>7 days</th>
              <th>1 month</th>
              <th>6 months</th>
              <th>1 year</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['24hours'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['7days'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['6month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_LOGINS']->value['1year'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div><?php }} ?>
