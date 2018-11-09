<?php /* Smarty version Smarty-3.1.16, created on 2018-02-20 23:50:14
         compiled from "/var/www/svarog/templates/mail/notifications/change_pw.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10032064035a8c19860b7159-72370512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a54e61f0d12bcdb4ba36ad1ae9c2fbd983c9a1fd' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/change_pw.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10032064035a8c19860b7159-72370512',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8c19861656a1_98453849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c19861656a1_98453849')) {function content_5a8c19861656a1_98453849($_smarty_tpl) {?><html>
<body>
<p>You have a pending request to change your password.</p>
<p>If you initiated this request, please follow the link below to confirm your changes. If you did NOT, please notify an administrator.</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit&cp_token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit&cp_token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
