<?php /* Smarty version Smarty-3.1.16, created on 2018-02-26 10:30:02
         compiled from "/var/www/svarog/templates/mail/notifications/new_block.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10678824625a93e1aa3dbf55-57683166%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c57a0d25c1aaac91d15f4f190365558efa78a3be' => 
    array (
      0 => '/var/www/svarog/templates/mail/notifications/new_block.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10678824625a93e1aa3dbf55-57683166',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a93e1aa471538_46331865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a93e1aa471538_46331865')) {function content_5a93e1aa471538_46331865($_smarty_tpl) {?><html>
<p>Block Number <?php echo $_smarty_tpl->tpl_vars['DATA']->value['height'];?>
 has been discovered by <?php echo $_smarty_tpl->tpl_vars['DATA']->value['finder'];?>
 with a total value of <?php echo $_smarty_tpl->tpl_vars['DATA']->value['amount'];?>
 <?php echo $_smarty_tpl->tpl_vars['DATA']->value['currency'];?>
! The current difficulty is <?php echo $_smarty_tpl->tpl_vars['DATA']->value['difficulty'];?>
.</p>
<body>
<br/>
<br/>
</body>
</html>
<?php }} ?>
