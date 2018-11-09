<?php /* Smarty version Smarty-3.1.16, created on 2018-02-21 01:45:38
         compiled from "/var/www/svarog/templates/mail/notifications/locked.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5156901325a8ccf4255b7f0-59313855%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54481d164d5ba2cfb34d1c6032bab2b3cff16036' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/locked.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5156901325a8ccf4255b7f0-59313855',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8ccf42804ff5_78967842',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8ccf42804ff5_78967842')) {function content_5a8ccf42804ff5_78967842($_smarty_tpl) {?><html>
<body>
<p>You account has been locked due to too many failed password or PIN attempts. Please follow the URL below to unlock your account.</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=unlock&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=unlock&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
