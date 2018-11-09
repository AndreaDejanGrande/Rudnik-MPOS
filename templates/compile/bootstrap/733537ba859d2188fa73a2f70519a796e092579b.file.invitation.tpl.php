<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 21:14:43
         compiled from "/var/www/svarog/templates/bootstrap/admin/dashboard/invitation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8898308365a8b303311b846-72124254%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '733537ba859d2188fa73a2f70519a796e092579b' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/dashboard/invitation.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8898308365a8b303311b846-72124254',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INVITATION_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8b303311eb10_41062475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8b303311eb10_41062475')) {function content_5a8b303311eb10_41062475($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-users fa-fw"></i> <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=admin&action=invitations">Invitations</a>
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Total</th>
              <th>Activated</th>
              <th>Outstanding</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['total'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['activated'];?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['INVITATION_INFO']->value['outstanding'];?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
