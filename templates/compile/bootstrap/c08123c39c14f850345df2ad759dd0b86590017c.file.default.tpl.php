<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 16:06:33
         compiled from "/var/www/svarog/templates/bootstrap/statistics/blockfinder/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19274809575a89a4890b9a47-78159099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c08123c39c14f850345df2ad759dd0b86590017c' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/blockfinder/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19274809575a89a4890b9a47-78159099',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a4890cb498_98436700',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a4890cb498_98436700')) {function content_5a89a4890cb498_98436700($_smarty_tpl) {?><div class="row">
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_top.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? '' : $tmp)) {?>
<?php echo $_smarty_tpl->getSubTemplate ("statistics/blockfinder/finder_own.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('SHORT'=>true), 0);?>

<?php }?>
</div><?php }} ?>
