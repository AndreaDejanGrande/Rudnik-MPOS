<?php /* Smarty version Smarty-3.1.16, created on 2018-04-03 03:06:20
         compiled from "/var/www/svarog/templates/mail/invitations/body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1011087915ac254fc4407c7-07754362%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79c4195a4e0f9060eead0aa515d785449f1630a4' => 
    array (
      0 => '/var/www/svarog/templates/mail/invitations/body.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1011087915ac254fc4407c7-07754362',
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
  'unifunc' => 'content_5ac254fc5be891_18257197',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac254fc5be891_18257197')) {function content_5ac254fc5be891_18257197($_smarty_tpl) {?><html>
<body>
<p>Hello valued miner,</p><br />
<p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['username'];?>
 invited you to participate on this pool:
<p><a href="http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
">http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? '' : $tmp)=="on") {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register&token=<?php echo $_smarty_tpl->tpl_vars['DATA']->value['token'];?>
</a></p>
<?php if ($_smarty_tpl->tpl_vars['DATA']->value['message']) {?><p>Personal message:</p><p><?php echo $_smarty_tpl->tpl_vars['DATA']->value['message'];?>
</p><?php }?>
<p></p>
<p>Cheers,</p>
<p><?php echo $_smarty_tpl->tpl_vars['WEBSITENAME']->value;?>
</p>
</body>
</html>
<?php }} ?>
