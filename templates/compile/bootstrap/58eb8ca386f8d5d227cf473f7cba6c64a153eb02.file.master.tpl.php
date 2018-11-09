<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:26:31
         compiled from "/var/www/svarog/templates/bootstrap/master.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1178882415a8873d7f1b657-27423486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58eb8ca386f8d5d227cf473f7cba6c64a153eb02' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/master.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1178882415a8873d7f1b657-27423486',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
    'CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8873d8068695_30242316',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8873d8068695_30242316')) {function content_5a8873d8068695_30242316($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.capitalize.php';
?><!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['title'];?>
 - <?php echo smarty_modifier_capitalize((($tmp = @htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "home" : $tmp));?>
</title>
  
  <!--[if lt IE 9]>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/ie.css" type="text/css" media="screen" />
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->

  <!--[if IE]><script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/excanvas.js"></script><![endif]-->
  <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['statistics']['analytics']['enabled']) {?>
  <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['statistics']['analytics']['code'];?>

  <?php }?>
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/bootstrap-switch.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/plugins/morris/morris-0.5.1.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/plugins/timeline/timeline.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/mpos.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/plugins/metisMenu/metisMenu.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/sparklines.css" rel="stylesheet">
  <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['website_design'])===null||$tmp==='' ? "default" : $tmp)!="default") {?>
  <link href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/css/design/<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['website_design'];?>
.css" rel="stylesheet">
  <?php }?>
  
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.cookie.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.md5.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/bootstrap.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/bootstrap-switch.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/dataTables/jquery.dataTables.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/dataTables/dataTables.bootstrap.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/metisMenu/jquery.metisMenu.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/raphael-2.1.2.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/morris/morris-0.5.1.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/plugins/sparkline/jquery.sparkline.min.js"></script>
  <script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/mpos.js"></script>
</head>
<body>
  <div id="wrapper">
    <?php echo $_smarty_tpl->getSubTemplate ("global/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <?php echo $_smarty_tpl->getSubTemplate ("global/navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


    <div id="page-wrapper"><br />
    
    <?php if (is_array((($tmp = @$_SESSION['POPUP'])===null||$tmp==='' ? '' : $tmp))) {?>
      <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['popup'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['name'] = 'popup';
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'] = is_array($_loop=$_SESSION['POPUP']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['popup']['total']);
?>
      <div class="<?php if ((($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['DISMISS'])===null||$tmp==='' ? '' : $tmp)=="yes") {?>alert-dismissable <?php }?> <?php echo (($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['TYPE'])===null||$tmp==='' ? "alert alert-info" : $tmp);?>
 <?php if ((($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['ID'])===null||$tmp==='' ? "static" : $tmp)=="static"&&$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['notificationshide']==1) {?>autohide<?php }?>" id="<?php echo (($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['ID'])===null||$tmp==='' ? "static" : $tmp);?>
">
        <?php if ((($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['DISMISS'])===null||$tmp==='' ? "no" : $tmp)=="yes") {?>
        <button id="<?php echo (($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['ID'])===null||$tmp==='' ? "static" : $tmp);?>
" type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php }?>
        <?php if ((($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['TYPE'])===null||$tmp==='' ? "alert alert-info" : $tmp)=="alert alert-info") {?>
        <span class="glyphicon glyphicon-info-sign">&nbsp;</span>
        <?php } elseif ((($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['TYPE'])===null||$tmp==='' ? "alert alert-info" : $tmp)=="alert alert-warning") {?>
        <span class="glyphicon glyphicon-info-sign">&nbsp;</span>
        <?php } elseif ((($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['TYPE'])===null||$tmp==='' ? "alert alert-info" : $tmp)=="alert alert-danger") {?>
        <span class="glyphicon glyphicon-remove-circle">&nbsp;</span>
        <?php } elseif ((($tmp = @$_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['TYPE'])===null||$tmp==='' ? "alert alert-info" : $tmp)=="alert alert-success") {?>
        <span class="glyphicon glyphicon-ok-circle">&nbsp;</span>
        <?php }?>
        <?php echo $_SESSION['POPUP'][$_smarty_tpl->getVariable('smarty')->value['section']['popup']['index']]['CONTENT'];?>

      </div>
      <?php endfor; endif; ?>
    <?php }?>
    
    <?php if ($_smarty_tpl->tpl_vars['CONTENT']->value!="empty"&&$_smarty_tpl->tpl_vars['CONTENT']->value!='') {?>
      <?php if (file_exists((dirname($_smarty_tpl->source->filepath)).("/".((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value)))) {?>
        <?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['PAGE']->value)."/".((string)$_smarty_tpl->tpl_vars['ACTION']->value)."/".((string)$_smarty_tpl->tpl_vars['CONTENT']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

      <?php } else { ?>
        Missing template for this page
      <?php }?>
    <?php }?>
    </div>
    <?php echo $_smarty_tpl->getSubTemplate ("global/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </body>
</html>
<?php }} ?>
