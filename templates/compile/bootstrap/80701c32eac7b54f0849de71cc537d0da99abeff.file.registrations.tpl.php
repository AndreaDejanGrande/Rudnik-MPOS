<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 21:14:43
         compiled from "/var/www/svarog/templates/bootstrap/admin/dashboard/registrations.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14094181785a8b3033116200-78091806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80701c32eac7b54f0849de71cc537d0da99abeff' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/dashboard/registrations.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14094181785a8b3033116200-78091806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'USER_REGISTRATIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8b303311a652_99021261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8b303311a652_99021261')) {function content_5a8b303311a652_99021261($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-pencil fa-fw"></i> <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=registrations">Registrations</a>
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
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['24hours'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['7days'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['1month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['6month'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['USER_REGISTRATIONS']->value['1year'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
