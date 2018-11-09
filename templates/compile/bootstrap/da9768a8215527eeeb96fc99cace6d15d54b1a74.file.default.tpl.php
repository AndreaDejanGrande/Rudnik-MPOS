<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 05:03:02
         compiled from "/var/www/svarog/templates/bootstrap/account/invitations/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11892931285a89bfd6cce5f9-68060234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da9768a8215527eeeb96fc99cace6d15d54b1a74' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/invitations/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11892931285a89bfd6cce5f9-68060234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'INVITATIONS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89bfd6ce9761_93385087',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89bfd6ce9761_93385087')) {function content_5a89bfd6ce9761_93385087($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
?><div class="row">
  <form class="col-lg-4" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="POST" role="form">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-envelope fa-fw"></i> Invitation
      </div>
      <div class="panel-body">
        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
        <input type="hidden" name="do" value="sendInvitation">
        <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
        <div class="form-group">
          <label>E-Mail</label>
          <input class="form-control" type="text" name="data[email]" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['data']['email'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="30" />
        </div>
        <div class="form-group">
          <label>Message</label>
          <textarea class="form-control" name="data[message]" rows="5"><?php echo (($tmp = @htmlspecialchars($_REQUEST['data']['message'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "Please accept my invitation to this awesome pool." : $tmp);?>
</textarea>
        </div>
      </div>
      <div class="panel-footer">
        <input type="submit" value="Invite" class="btn btn-success btn-sm">
      </div>
    </div>
  </form>

  <div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-mail-reply fa-fw"></i> Past Invitations
      </div>
      <div class="panel-body">
      
        <div class="table-responsive">
          <table class="table table-hover">
            <thead style="font-size:13px;">
              <tr>
                <th>E-Mail</th>
                <th>Sent</th>
                <th>Activated</th>
              </tr>
            </thead>
            <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['invite'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['name'] = 'invite';
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['INVITATIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['invite']['total']);
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['email'];?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['time'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
                <td><i class="icon-<?php if ($_smarty_tpl->tpl_vars['INVITATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['invite']['index']]['is_activated']) {?>ok<?php } else { ?>cancel<?php }?>"></i></td>
              </tr>
<?php endfor; endif; ?>
            <tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
