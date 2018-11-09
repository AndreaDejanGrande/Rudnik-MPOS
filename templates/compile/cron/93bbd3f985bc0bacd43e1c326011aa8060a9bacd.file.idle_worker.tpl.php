<?php /* Smarty version Smarty-3.1.16, created on 2018-03-27 20:10:01
         compiled from "/var/www/svarog/templates/mail/notifications/idle_worker.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16890060875abaa5198c8281-75652872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93bbd3f985bc0bacd43e1c326011aa8060a9bacd' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/idle_worker.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16890060875abaa5198c8281-75652872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5abaa519904576_22504906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5abaa519904576_22504906')) {function content_5abaa519904576_22504906($_smarty_tpl) {?><html>
<body>
<p>One of your workers is currently IDLE: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['worker'];?>
</p>
<p>We have not received any shares for this worker in the past 10 minutes.</p>
<p>Since monitoring is enabled for this worker, this notification was sent.</p>
<br />
<p>Please check your workers!</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
