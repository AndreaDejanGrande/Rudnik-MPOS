<?php /* Smarty version Smarty-3.1.16, created on 2018-02-20 17:35:03
         compiled from "/var/www/svarog/templates/mail/notifications/success_login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19962559105a8c5c47982607-41095363%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7fe33b44e431e8e8fa62a0544c90eff2bef80c9' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/success_login.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19962559105a8c5c47982607-41095363',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8c5c47e05ae7_91866711',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8c5c47e05ae7_91866711')) {function content_5a8c5c47e05ae7_91866711($_smarty_tpl) {?><html>
<body>
<p>Your account has successfully logged in</p>
<p>User: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINUSER'];?>
</p>
<p>IP: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINIP'];?>
</p>
<p>Time: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['LOGINTIME'];?>
</p>
<p>If you initiated this login, you can ignore this message. If you did NOT, please notify an administrator.</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
