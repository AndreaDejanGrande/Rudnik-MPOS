<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 03:57:10
         compiled from "/var/www/svarog/templates/bootstrap/account/notifications/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1971070795a89b066388680-91764151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2367bf4184bc3826d68b46dad979bf8ec74bef60' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/notifications/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1971070795a89b066388680-91764151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'PUSHNOTIFICATIONS' => 0,
    'PUSHSETTINGS' => 0,
    'text' => 0,
    'name' => 0,
    'DISABLE_IDLEWORKERNOTIFICATIONS' => 0,
    'SETTINGS' => 0,
    'DISABLE_BLOCKNOTIFICATIONS' => 0,
    'DISABLE_POOLNEWSLETTER' => 0,
    'NOTIFICATIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89b066407e91_50765819',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89b066407e91_50765819')) {function content_5a89b066407e91_50765819($_smarty_tpl) {?><div class="row">
   <div class="col-lg-4">
	  <form method="POST" role="form">
	    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
	    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
	    <input type="hidden" name="do" value="save">
	    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
	    
	    <div class="panel panel-info">
	      <div class="panel-heading">
	        <i class="fa fa-gear fa-fw"></i> Push Notification Settings
	      </div>
	      <div class="panel-body no-padding">
	        <table class="table table-striped table-bordered table-hover">
	          <tbody>
   	            <tr>
	              <td>
	                <label>Push Notifications</label>
	              </td>
	              <td>
	              	<select name="pushnotification-class" class="form-control select-mini" id="push-notifications">
	              		<option value="0">Disabled</option>
	              		<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['name'] = 'pushnotification';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total']);
?>
	              			<option value="<?php echo $_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pushnotification']['index']]['class'];?>
"<?php if ($_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pushnotification']['index']]['class']==$_smarty_tpl->tpl_vars['PUSHSETTINGS']->value['class']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pushnotification']['index']]['name'];?>
</option>
	              		<?php endfor; endif; ?>
	              	</select>
	              </td>
	          </tbody>
	          <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['name'] = 'pushnotification';
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['pushnotification']['total']);
?>
	          <tbody class="push-notifications-params" data-class-name="<?php echo $_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pushnotification']['index']]['class'];?>
">
				<?php  $_smarty_tpl->tpl_vars['text'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['text']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pushnotification']['index']]['parameters']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['text']->key => $_smarty_tpl->tpl_vars['text']->value) {
$_smarty_tpl->tpl_vars['text']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['text']->key;
?>
					<tr>
						<td><label><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</label></td>
						<td><input class="form-control" type="text" name="pushnotification[<?php echo $_smarty_tpl->tpl_vars['PUSHNOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['pushnotification']['index']]['class'];?>
][<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
]" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['PUSHSETTINGS']->value['params'][$_smarty_tpl->tpl_vars['name']->value])===null||$tmp==='' ? '' : $tmp);?>
"/></td>
					</tr>
				<?php } ?>
	          </tbody>
	          <?php endfor; endif; ?>
	        </table>
   	      </div>
	     </div>
	    
	    <div class="panel panel-info">
	      <div class="panel-heading">
	        <i class="fa fa-gear fa-fw"></i> Notification Settings
	      </div>
	      <div class="panel-body no-padding push-notifications-disabled" id="push-notifications-pannel">
	        <table class="table table-striped table-bordered table-hover">
	          <thread>
	        	<tr>
	        	  <th>Event</th>
	        	  <th>Email</th>
	        	  <th class="push-notifications">Push</th>
	        	</tr>
	          </thread>
	          <tbody>
	            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['DISABLE_IDLEWORKERNOTIFICATIONS']->value)===null||$tmp==='' ? '' : $tmp)!=1) {?>
	            <tr>
	              <td>
	                <label>Idle Worker</label>
	              </td>
	              <td>
	                <input type="hidden" name="data[idle_worker]" value="0" />
	                <input type="checkbox" class="switch" data-size="mini" name="data[idle_worker]" id="idle_worker" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['idle_worker'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	              <td class="push-notifications">
	                <input type="hidden" name="data[push_idle_worke]" value="0" />
	                <input type="checkbox" class="switch" data-size="mini" name="data[push_idle_worke]" id="push_idle_worke" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['push_idle_worke'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	            </tr>
	            <?php }?>
	            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['DISABLE_BLOCKNOTIFICATIONS']->value)===null||$tmp==='' ? '' : $tmp)!=1) {?>
	            <tr>
	              <td>
	                <label>New Blocks</label>
	              </td>
	              <td>
	                <input type="hidden" name="data[new_block]" value="0" />
	                <input type="checkbox"class="switch" data-size="mini" name="data[new_block]" id="new_block" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['new_block'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	              <td class="push-notifications">
	                <input type="hidden" name="data[push_new_block]" value="0" />
	                <input type="checkbox"class="switch" data-size="mini" name="data[push_new_block]" id="new_block" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['push_new_block'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	            </tr>
	            <?php }?>
	            <tr>
	              <td>
	                <label>Payout</label>
	              </td>
	              <td>
	                <input type="hidden" name="data[payout]" value="0" />
	                <input type="checkbox" class="switch" data-size="mini" name="data[payout]" id="payout" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['payout'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	              <td class="push-notifications">
	                <input type="hidden" name="data[push_payout]" value="0" />
	                <input type="checkbox" class="switch" data-size="mini" name="data[push_payout]" id="push_payout" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['push_payout'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	            </tr>
	            <tr>
	              <td>
	                <label>Successful Login</label>
	              </td>
	              <td>
	                <input type="hidden" name="data[success_login]" value="0" />
	                <input type="checkbox" class="switch" data-size="mini"  name="data[success_login]" id="success_login" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['success_login'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	              <td class="push-notifications">
	                <input type="hidden" name="data[push_success_lo]" value="0" />
	                <input type="checkbox" class="switch" data-size="mini"  name="data[push_success_lo]" id="push_success_lo" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['push_success_lo'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	            </tr>
	            <?php if ((($tmp = @$_smarty_tpl->tpl_vars['DISABLE_POOLNEWSLETTER']->value)===null||$tmp==='' ? '' : $tmp)!=1) {?>
	            <tr>
	              <td>
	                <label>Pool Newsletter</label>
	              </td>
	              <td>
	                <input type="hidden" name="data[newsletter]" value="0" />
	                <input type="checkbox"class="switch" data-size="mini" name="data[newsletter]" id="newsletter" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['newsletter'])===null||$tmp==='' ? "1" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	              <td class="push-notifications">
	                <input type="hidden" name="data[push_newsletter]" value="0" />
	                <input type="checkbox"class="switch" data-size="mini" name="data[push_newsletter]" id="push_newsletter" value="1"<?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value['push_newsletter'])===null||$tmp==='' ? "0" : $tmp)==1) {?>checked<?php }?> />
	              </td>
	            </tr>
	            <?php }?>
	          </tbody>
	        </table>
	      </div>
	      <div class="panel-footer">
	        <input type="submit" value="Update" class="btn btn-success btn-sm">
	      </div>
	    </form>
	 </div>
  </div>

  <div class="col-lg-8">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-clock-o fa-fw"></i> Notification History
      </div>
      <div class="panel-body no-padding">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>Time</th>
                <th>Type</th>
                <th>Active</th>
              </tr>
            </thead>
            <tbody>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['notification']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['name'] = 'notification';
$_smarty_tpl->tpl_vars['smarty']->value['section']['notification']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NOTIFICATIONS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['time'];?>
</td>
                <td>
<?php if ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='new_block') {?>New Block
<?php } elseif ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='payout') {?>Payout
<?php } elseif ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='idle_worker') {?>Idle Worker
<?php } elseif ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['type']=='success_login') {?>Successful Login
<?php }?>
                </td>
                <td>
                 <i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['NOTIFICATIONS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['notification']['index']]['active']) {?>check<?php } else { ?>times<?php }?> fa-fw"></i>
                </td>
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
