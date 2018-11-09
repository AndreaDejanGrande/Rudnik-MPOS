<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 14:35:18
         compiled from "/var/www/svarog/templates/mail/register/confirm_email.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9757002945a898f26c9e191-68279418%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '825c981a5b7ab8a6756fc911c9d10025551eada0' => 
    array (
      0 => '/var/www/svarog/templates/mail/register/confirm_email.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9757002945a898f26c9e191-68279418',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
    'WEBSITENAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a898f26d477a9_38753825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a898f26d477a9_38753825')) {function content_5a898f26d477a9_38753825($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have created a new account. In order to complete the registration process please follow this link:</p>
<p>http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=confirm&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</p>
<p></p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>
