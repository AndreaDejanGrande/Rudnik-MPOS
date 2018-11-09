<?php /* Smarty version Smarty-3.1.16, created on 2018-02-27 03:01:35
         compiled from "/var/www/svarog/templates/mail/contactform/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11643945675a942f5f5d96f0-60555170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b13c23a8db30ab2d60289b570457034074ce53a' => 
    array (
      0 => '/var/www/svarog/templates/mail/contactform/body.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11643945675a942f5f5d96f0-60555170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'WEBSITENAME' => 0,
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a942f5f65de29_05221844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a942f5f65de29_05221844')) {function content_5a942f5f65de29_05221844($_smarty_tpl) {?><html>
<body>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
 Message,</p>
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderName'];?>
 Sent you a message</p>
<p>Senders Email: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderEmail'];?>
</p>
<p>Subject: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderSubject'];?>
</p>
<p>Personal message:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['senderMessage'];?>
</p>
<p></p>
</body>
</html>
<?php }} ?>
