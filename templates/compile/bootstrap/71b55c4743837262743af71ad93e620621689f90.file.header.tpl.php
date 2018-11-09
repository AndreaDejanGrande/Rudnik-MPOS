<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:26:32
         compiled from "/var/www/svarog/templates/bootstrap/global/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6553798695a8873d806de40-31011342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71b55c4743837262743af71ad93e620621689f90' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/global/header.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6553798695a8873d806de40-31011342',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PoolArray' => 0,
    'pooldata' => 0,
    'PoolURL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8873d8117f03_11626828',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8873d8117f03_11626828')) {function content_5a8873d8117f03_11626828($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_relative_date')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.relative_date.php';
?>        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['poolnav_enabled'])===null||$tmp==='' ? "false" : $tmp)) {?>
                <ul class="nav navbar-nav navbar-top-links">
                  <li class="dropdown">
                    <a href="#" class="navbar-brand dropdown-toggle" data-toggle="dropdown"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'];?>
 <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                      <?php $_smarty_tpl->tpl_vars["PoolArray"] = new Smarty_variable(explode("\n",$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['poolnav_pools']), null, 0);?>
                      <?php  $_smarty_tpl->tpl_vars['pooldata'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['pooldata']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PoolArray']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['pooldata']->key => $_smarty_tpl->tpl_vars['pooldata']->value) {
$_smarty_tpl->tpl_vars['pooldata']->_loop = true;
?>
                      <?php $_smarty_tpl->tpl_vars["PoolURL"] = new Smarty_variable(explode("|",$_smarty_tpl->tpl_vars['pooldata']->value), null, 0);?>
                      <?php if (count($_smarty_tpl->tpl_vars['PoolURL']->value)>1) {?>
                      <li class="h4"><a href="<?php echo $_smarty_tpl->tpl_vars['PoolURL']->value[1];?>
"><i class="fa fa-angle-double-right fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['PoolURL']->value[0];?>
</a></li>
                      <?php }?>
                      <?php } ?>
                    </ul>
                  </li>
                </ul>
                <?php } else { ?>
                <a class="navbar-brand" href="<?php echo $_SERVER['SCRIPT_NAME'];?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'];?>
</a>
                <?php }?>
            </div>

            <ul class="nav navbar-top-links navbar-right">
				<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @count($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['lastnotifications']))===null||$tmp==='' ? "0" : $tmp)!=0) {?>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bullhorn fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                    

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['name'] = 'notification';
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['lastnotifications']) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['total']);
?>
                        <li>
                            <a href="#">
                                <div>
                                    <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['lastnotifications'][$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='new_block') {?><i class="fa fa-th-large fa-fw"></i> New Block
                                    <?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['lastnotifications'][$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='payout') {?><i class="fa fa-money fa-fw"></i> Payout
                                    <?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['lastnotifications'][$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='idle_worker') {?><i class="fa fa-desktop fa-fw"></i> IDLE Worker
                                    <?php } elseif ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['lastnotifications'][$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='success_login') {?><i class="fa fa-sign-in fa-fw"></i> Successful Login
                                    <?php }?>
                                    <span class="pull-right text-muted small"><?php echo smarty_modifier_relative_date($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['lastnotifications'][$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['time']);?>
</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
<?php endfor; endif; ?>

                        <li>
                            <a class="text-center" href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=notifications">
                                <strong>See All Notifications</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </li>
                <?php }?>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)) {?><?php echo htmlspecialchars($_SESSION['USERDATA']['username'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?>Guest<?php }?> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                    	<?php if ((($tmp = @$_SESSION['AUTHENTICATED'])===null||$tmp==='' ? "0" : $tmp)==1) {?>
                        <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=dashboard"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=edit"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers"><i class="fa fa-desktop fa-fw"></i> Workers</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                        <?php } else { ?>
                        <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                        <li><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register"><i class="fa fa-pencil fa-fw"></i> Sign Up</a>
                        </li>
                        <?php }?>
                    </ul>
                </li>
            </ul>
        </nav>
<?php }} ?>
