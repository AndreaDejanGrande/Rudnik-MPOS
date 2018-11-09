<?php /* Smarty version Smarty-3.1.16, created on 2018-03-08 16:36:08
         compiled from "/var/www/svarog/templates/mail/pin/reset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17534300885aa0cbc82a0ef1-15178493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '819c46d8c0dc2712360edecb635177261b9fed44' => 
    array (
      0 => '/var/www/svarog/templates/mail/pin/reset.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17534300885aa0cbc82a0ef1-15178493',
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
  'unifunc' => 'content_5aa0cbc82e0bd8_21481224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa0cbc82e0bd8_21481224')) {function content_5aa0cbc82e0bd8_21481224($_smarty_tpl) {?><html>
<body>
<p>Hello <?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
,</p><br />
<p>You have requested a PIN reset through our online form.</p>
<p>Randomly Generated PIN: <?php echo $_smarty_tpl->tpl_vars['DATA']->value['pin'];?>
</p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>
