<?php /* Smarty version Smarty-3.1.16, created on 2018-02-26 03:08:06
         compiled from "/var/www/svarog/templates/mail/notifications/payout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16262378425a937a160f8069-48375668%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '406f6de3552592478f21f7d5f93bc3e19d143c38' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/payout.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16262378425a937a160f8069-48375668',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a937a16129ab3_44234761',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a937a16129ab3_44234761')) {function content_5a937a16129ab3_44234761($_smarty_tpl) {?><html>
<body>
<p>You account has been debited and the coins have been sent to your wallet.</p>
<p>Amount: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['amount'];?>
</p>
<br/>
<br/>
</body>
</html>
<?php }} ?>
