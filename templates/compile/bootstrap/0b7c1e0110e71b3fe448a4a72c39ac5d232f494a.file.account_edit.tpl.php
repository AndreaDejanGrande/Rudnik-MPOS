<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 02:49:46
         compiled from "/var/www/svarog/templates/mail/notifications/account_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10250301555a89a09a400314-74689461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b7c1e0110e71b3fe448a4a72c39ac5d232f494a' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/account_edit.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10250301555a89a09a400314-74689461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a09a40e203_11372544',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a09a40e203_11372544')) {function content_5a89a09a40e203_11372544($_smarty_tpl) {?><html>
<body>
<p>You have a pending request to change your account details.</p>
<p>If you initiated this request, please follow the link below to confirm your changes. If you did NOT, please notify an administrator.</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit&ea_token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit&ea_token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
