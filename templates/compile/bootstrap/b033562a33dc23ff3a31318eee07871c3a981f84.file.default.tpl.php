<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 23:29:14
         compiled from "/var/www/svarog/templates/bootstrap/admin/poolworkers/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:284218095a89fe3a145cd6-59188476%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b033562a33dc23ff3a31318eee07871c3a981f84' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/poolworkers/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284218095a89fe3a145cd6-59188476',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'DISABLE_IDLEWORKERNOTIFICATIONS' => 0,
    'WORKERS' => 0,
    'CTOKEN' => 0,
    'LIMIT' => 0,
    'FILTERS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89fe3a1da379_58532570',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89fe3a1da379_58532570')) {function content_5a89fe3a1da379_58532570($_smarty_tpl) {?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-desktop fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
 Current Active Pool Workers
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>Worker Name</th>
                <th>Password</th>
                <th>Active</th>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']!=1&&$_smarty_tpl->tpl_vars['DISABLE_IDLEWORKERNOTIFICATIONS']->value!=1) {?><th>Monitor</th><?php }?>
                <th>Khash/s</th>
                <th>Difficulty</th>
                <th style="padding-right: 25px;">Avg Difficulty</th>
              </tr>
            </thead>
            
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
            <tbody>
              <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['password'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td align="center"><i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']>0) {?>check<?php } else { ?>times<?php }?> fa-fw"></i></td>
                <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['disable_notifications']!=1&&$_smarty_tpl->tpl_vars['DISABLE_IDLEWORKERNOTIFICATIONS']->value!=1) {?>
                <td align="center"><i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['monitor']) {?>check<?php } else { ?>times<?php }?> fa-fw"></i></td>
                <?php }?>
                <td><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']))===null||$tmp==='' ? "0" : $tmp);?>
</td>
                <td><?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']>0) {?><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['difficulty'],"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0<?php }?></td>
                <td style="padding-right: 25px;"><?php if ($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['hashrate']>0) {?><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['WORKERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['worker']['index']]['avg_difficulty'],"2"))===null||$tmp==='' ? "0" : $tmp);?>
<?php } else { ?>0<?php }?></td>
              </tr>
              <?php endfor; endif; ?>
              
            </tbody>
          </table>
        </div>
        <div class="panel-body">
          <form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
" />
            <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
            <ul class="pager">
              <li class="previous <?php if ((($tmp = @$_GET['start'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>disabled<?php }?>">
                <a href="<?php if ((($tmp = @$_GET['start'])===null||$tmp==='' ? "0" : $tmp)<=0) {?>#<?php } else { ?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?><?php }?>"> &larr;</a>
              </li>
              <li class="next">
                <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>"> &rarr;</a>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </div>
  </div>
</div> 
<?php }} ?>
