<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 23:57:10
         compiled from "/var/www/svarog/templates/bootstrap/admin/setup/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12093976665a897826c6f374-40900096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b269eee890204d27183073f5a0b2a15c34d7234d' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/setup/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12093976665a897826c6f374-40900096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERRORS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a897826c8c761_59909064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a897826c8c761_59909064')) {function content_5a897826c8c761_59909064($_smarty_tpl) {?> <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <i class="fa fa-question fa-fw"></i> Setup Checks<br />
        </div>
        <div class="panel-body">
        <?php if (count($_smarty_tpl->tpl_vars['ERRORS']->value)>0) {?>
          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['errors'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['errors']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['name'] = 'errors';
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['ERRORS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['errors']['total']);
?>
           <div class="row">
            <div class="col-lg-12">
              <div class="panel panel-<?php if ($_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['level']>=2) {?>danger
              <?php } elseif ($_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['level']==1) {?>warning
              <?php } elseif ($_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['level']==0) {?>info<?php }?>">
                <div class="panel-heading">
                  <i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['level']>=2) {?>times-circle
                                  <?php } elseif ($_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['level']==1) {?>warning
                                  <?php } elseif ($_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['level']==0) {?>info<?php }?> fa-fw"></i> <strong><?php echo $_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['name'];?>
</strong>
                </div>
                <div class="panel-body">
                  <p><?php echo $_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['description'];?>
</p>
                  <p><pre style='width:35%'>$config.<a href="<?php echo $_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['helplink'];?>
"><?php echo $_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['configvalue'];?>
</a></pre></p>
                  <p><?php echo $_smarty_tpl->tpl_vars['ERRORS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['errors']['index']]['extdesc'];?>
</p>
                </div>
              </div>
            </div>
            <!-- /.col-lg-12 -->
          </div>
          <?php endfor; endif; ?>
        <?php }?>
        </div>
        <div class="panel-footer">
		<li>To disable these checks, set skip_config_tests to true in global.inc.php</li>
	</div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
  </div>
<?php }} ?>
