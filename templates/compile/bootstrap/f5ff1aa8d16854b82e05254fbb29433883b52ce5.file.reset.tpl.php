<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 19:38:24
         compiled from "/var/www/svarog/templates/mail/password/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3228085645a89d630464bc8-47257633%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ff1aa8d16854b82e05254fbb29433883b52ce5' => 
    array (
      0 => '/var/www/svarog/templates/mail/password/reset.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3228085645a89d630464bc8-47257633',
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
  'unifunc' => 'content_5a89d630489976_38374586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89d630489976_38374586')) {function content_5a89d630489976_38374586($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a password reset through our online form. In order to complete the request please follow this link:</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password&action=change&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<p>You will be asked to change your password. You can then use this new password to login to your account.</p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>
