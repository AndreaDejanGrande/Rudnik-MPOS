<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 15:20:22
         compiled from "/var/www/svarog/templates/mail/notifications/withdraw_funds.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10329849615a8a5086872287-33482940%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a4e3c425e3467f733eee1af542136f95211a45c' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/withdraw_funds.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10329849615a8a5086872287-33482940',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8a508692fa92_74510874',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8a508692fa92_74510874')) {function content_5a8a508692fa92_74510874($_smarty_tpl) {?><html>
<body>
<p>You have a pending request to manually withdraw funds.</p>
<p>If you initiated this request, please follow the link below to confirm your changes. If you did NOT, please notify an administrator.</p>
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit&wf_token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit&wf_token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
