<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 21:14:42
         compiled from "/var/www/svarog/templates/bootstrap/admin/dashboard/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11275804695a8b3032ef3489-28099001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3631e1b77764c86b28fedb32042d5702b2fac845' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/dashboard/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11275804695a8b3032ef3489-28099001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8b30330eadc6_23036382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8b30330eadc6_23036382')) {function content_5a8b30330eadc6_23036382($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/mpos.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/user.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/registrations.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_invitations'])===null||$tmp==='' ? "0" : $tmp)==0) {?>
  <?php echo $_smarty_tpl->getSubTemplate ("admin/dashboard/invitation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
</div>
<?php }} ?>
