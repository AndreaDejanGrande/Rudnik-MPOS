<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 19:14:02
         compiled from "/var/www/svarog/templates/mail/notifications/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11628130305a887efa1b7583-26672230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f8d25ef1c199ff135aca7e5f6701dcf15cbe132' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/error.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11628130305a887efa1b7583-26672230',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'text' => 0,
    'message' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a887efa20ed40_28992382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a887efa20ed40_28992382')) {function content_5a887efa20ed40_28992382($_smarty_tpl) {?>  <?php echo $_smarty_tpl->getSubTemplate ("../global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <h1>An error occured!</h1>
  <p>This should never happen. Please review the error output below.</p>
  <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
  <tr>
    <td>
    <table cellpadding="0" cellspacing="1" border="0" align="left" width="800px">

<?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['DATA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
 $_smarty_tpl->tpl_vars['text']->value = $_smarty_tpl->tpl_vars['message']->key;
?>
  <?php if ($_smarty_tpl->tpl_vars['text']->value!='email'&&$_smarty_tpl->tpl_vars['text']->value!='subject') {?>
      <tr>
        <th align="left" width="150px"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</th>
        <td><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</td>
      </tr>
  <?php }?>
<?php } ?>

    </table>
    </td>
  </tr>
  </table>
  <?php echo $_smarty_tpl->getSubTemplate ("../global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
