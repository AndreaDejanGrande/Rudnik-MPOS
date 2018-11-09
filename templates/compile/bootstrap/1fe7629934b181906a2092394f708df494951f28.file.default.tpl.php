<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:36:28
         compiled from "/var/www/svarog/templates/bootstrap/account/workers/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21309753975a88762c69a620-66287910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1fe7629934b181906a2092394f708df494951f28' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/workers/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21309753975a88762c69a620-66287910',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'GLOBAL' => 0,
    'DISABLE_IDLEWORKERNOTIFICATIONS' => 0,
    'WORKERS' => 0,
    'username' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a88762c6d0bd5_29724974',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a88762c6d0bd5_29724974')) {function content_5a88762c6d0bd5_29724974($_smarty_tpl) {?><div class="row">
  <form class="col-lg-3" method="POST" role="form">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="do" value="add">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-plus-square-o fa-fw"></i> Add New Worker
      </div>
        <div class="panel-body">
          <div class="form-group">
            <label>Worker Name</label>
            <input class="form-control" type="text" name="username" value="user" size="10" maxlength="20" required>
          </div>
          <div class="form-group">
            <label>Worker Password</label>
            <input class="form-control" type="text" name="password" value="password" size="10" maxlength="20" required>
          </div>
        </div>
      <div class="panel-footer">
        <input type="submit" value="Add New Worker" class="btn btn-success btn-sm">
      </div>
    </div>
  </form>

  <div class="col-lg-9">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-gears fa-fw"></i> Worker Configuration
      </div>
      <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post" role="form">
        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="do" value="update">
        <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
        <div class="panel-body no-padding">
          <div class="table-responsive">
          <table class="table">
             <thead>
                <tr>
                  <th class="smallwidth">Worker Login</th>
                  <th class="smallwidth">Worker Password</th>
                  <th class="text-center">Active</th>
                  <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']!=1&&$_smarty_tpl->tpl_vars['DISABLE_IDLEWORKERNOTIFICATIONS']->value!=1) {?><th class="text-center">Monitor</th><?php }?>
                  <th class="text-right">Khash/s</th>
                  <th class="text-right">Difficulty</th>
                  <th class="text-center">Action</th>
                </tr>
             </thead>
             <tbody>
               
               <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['worker'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['name'] = 'worker';
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['WORKERS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['worker']['total']);
?>
               <?php $_smarty_tpl->tpl_vars["username"] = new Smarty_variable(explode(htmlspecialchars(".", ENT_QUOTES, 'UTF-8', true),$_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['username'],2), null, 0);?> 
               <tr>
                 <td>
                  <div class="input-group input-group-sm clear">
                    <span <?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']>0) {?>style="color: orange"<?php }?> class="input-group-addon"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value[0], ENT_QUOTES, 'UTF-8', true);?>
.</span>
                    <input type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][username]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['username']->value[1], ENT_QUOTES, 'UTF-8', true);?>
" size="10" required class="name" />
                  </div>
                 </td>
                 <td><input class="form-control" type="text" name="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][password]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['password'], ENT_QUOTES, 'UTF-8', true);?>
" size="10" required></td>
                 <td class="text-center"><i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']>0) {?>check<?php } else { ?>times<?php }?> fa-fw"></i></td>
                 <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']!=1&&$_smarty_tpl->tpl_vars['DISABLE_IDLEWORKERNOTIFICATIONS']->value!=1) {?>
                 <td class="text-center">
                   <input type="hidden" name="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][monitor]" value="0" />
                   <input type="checkbox" class="switch" data-size="mini"  name="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][monitor]" id="data[<?php echo $_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'];?>
][monitor]" value="1" <?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['monitor']) {?>checked<?php }?>/>
                 </td>
                 <?php }?>
                 <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']);?>
</td>
                 <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['difficulty'],"2");?>
</td>
                 <td class="text-center"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=delete&id=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['id'], ENT_QUOTES, 'UTF-8', true);?>
&ctoken=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
"><i class="fa fa-trash-o fa-fw"></i></a></td>
               </tr>
               <?php endfor; endif; ?>
               
             </tbody>
            </table>
          </div>
          <div class="panel-footer">
            <input type="submit" class="btn btn-success btn-sm" value="Update Workers">
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php }} ?>
