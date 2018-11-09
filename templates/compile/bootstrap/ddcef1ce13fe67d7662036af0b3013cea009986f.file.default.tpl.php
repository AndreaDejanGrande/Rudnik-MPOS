<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 04:14:31
         compiled from "/var/www/svarog/templates/bootstrap/admin/user/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16265895405a89b4779d0829-83483514%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ddcef1ce13fe67d7662036af0b3013cea009986f' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/user/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16265895405a89b4779d0829-83483514',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'LIMIT' => 0,
    'FILTERS' => 0,
    'ADMIN' => 0,
    'LOCKED' => 0,
    'NOFEE' => 0,
    'USERS' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89b477af1886_05999319',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89b477af1886_05999319')) {function content_5a89b477af1886_05999319($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
?><script language="javascript">
    function storeFee(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=fee&account_id=" + id + "&ctoken=<?php echo htmlspecialchars($_REQUEST['ctoken'], ENT_QUOTES, 'UTF-8', true);?>
",
     });
    }
    function storeLock(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=lock&account_id=" + id + "&ctoken=<?php echo htmlspecialchars($_REQUEST['ctoken'], ENT_QUOTES, 'UTF-8', true);?>
",
     });
    }
    function storeAdmin(id) {
      $.ajax({
       type: "POST",
       url: "<?php echo $_SERVER['SCRIPT_NAME'];?>
",
       data: "page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=admin&account_id=" + id + "&ctoken=<?php echo htmlspecialchars($_REQUEST['ctoken'], ENT_QUOTES, 'UTF-8', true);?>
",
     });
    }
</script>

<div class="row">
  <form class="col-lg-12" role="form">
    <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
    <input type="hidden" name="do" value="query">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-search fa-fw"></i> User Search
      </div>
      <div class="panel-body">
        <ul class="pager">
          <?php if ((($tmp = @$_REQUEST['start'])===null||$tmp==='' ? "0" : $tmp)>0) {?> 
          <li class="previous" disabled>
            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)-$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>">← Prev</a>
          <?php } else { ?>
          <li class="previous disabled">
            <a href="#">← Prev</a>
          <?php }?>
          </li>
          <li class="next">
            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&start=<?php echo (($tmp = @htmlspecialchars($_REQUEST['start'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? "0" : $tmp)+$_smarty_tpl->tpl_vars['LIMIT']->value;?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['FILTERS']->value)===null||$tmp==='' ? '' : $tmp)) {?><?php echo $_smarty_tpl->tpl_vars['FILTERS']->value;?>
<?php }?>">Next →</a>
          </li>
        </ul>
        <div class="form-group">
          <label>Account</label>
          <input size="20" class="form-control" type="text" name="filter[account]" value="<?php echo (($tmp = @$_REQUEST['filter']['account'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </div>
        <div class="form-group">
          <label>E-Mail</label>
          <input size="20" class="form-control" type="text" name="filter[email]" value="<?php echo (($tmp = @$_REQUEST['filter']['email'])===null||$tmp==='' ? '' : $tmp);?>
" />
        </div>
        <div class="form-group">
          <label>Is Admin</label>
          <?php echo smarty_function_html_options(array('class'=>"form-control select-mini",'name'=>"filter[is_admin]",'options'=>$_smarty_tpl->tpl_vars['ADMIN']->value,'selected'=>(($tmp = @$_REQUEST['filter']['is_admin'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

        </div>
        <div class="form-group">
          <label>Is Locked</label>
          <?php echo smarty_function_html_options(array('class'=>"form-control select-mini",'name'=>"filter[is_locked]",'options'=>$_smarty_tpl->tpl_vars['LOCKED']->value,'selected'=>(($tmp = @$_REQUEST['filter']['is_locked'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

        </div>
        <div class="form-group">
          <label>No Fees</label>
          <?php echo smarty_function_html_options(array('class'=>"form-control select-mini",'name'=>"filter[no_fees]",'options'=>$_smarty_tpl->tpl_vars['NOFEE']->value,'selected'=>(($tmp = @$_REQUEST['filter']['no_fees'])===null||$tmp==='' ? '' : $tmp)),$_smarty_tpl);?>

        </div>
      </div>
      <div class="panel-footer">
        <input type="submit" value="Search" class="btn btn-success btn-sm">
      </div>
    </div>
  </form>
</div>


<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-info fa-fw"></i> User Information
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-striped table-bordered table-hover <?php if ($_smarty_tpl->tpl_vars['USERS']->value) {?>datatable<?php }?>">
            <thead>
              <tr>
                <th class="h6">ID</th>
                <th class="h6">Username</th>
                <th class="h6">eMail</th>
                <th class="h6" style="padding-right:10px">Shares</th>
                <th class="h6" style="padding-right:10px">Hashrate</th>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
                <th class="h6" style="padding-right:10px">Est. Donation</th>
                <th class="h6" style="padding-right:10px">Est. Payout</th>
<?php } else { ?>
                <th class="h6" style="padding-right:10px">Est. 24 Hours</th>
<?php }?>
                <th class="h6" style="padding-right:10px">Balance</th>
                <th class="h6" style="padding-right:10px">Reg. Date</th>
                <th class="h6" style="padding-right:10px">Last Login</th>
                <th class="h6">Admin</th>
                <th class="h6">Locked</th>
                <th class="h6">No Fees</th>
              </tr>
            </thead>
            <tbody>

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['user'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['user']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['name'] = 'user';
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'] = is_array($_loop=(($tmp = @$_smarty_tpl->tpl_vars['USERS']->value)===null||$tmp==='' ? '' : $tmp)) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['user']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['user']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['user']['total']);
?>
              <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
</td>
                <td><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=userdetails&id=<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['username'], ENT_QUOTES, 'UTF-8', true);?>
</a></td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['email'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['shares']['valid'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['hashrate'];?>
</td>
<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']!='pps') {?>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['donation'],"8");?>
</td>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['payout'],"8");?>
</td>
<?php } else { ?>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['estimates']['hours24'],"8");?>
</td>
<?php }?>
                <td><?php echo number_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['balance'],"8");?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['signup_timestamp'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
                <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['last_login'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
                <td>
                  <input type="hidden" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
                  <input type="checkbox" onclick="storeAdmin(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_admin']) {?>checked<?php }?> />
                  <label for="admin[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
                </td>
                <td>
                  <input type="hidden" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
                  <input type="checkbox" onclick="storeLock(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['is_locked']) {?>checked<?php }?> />
                  <label for="locked[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
                </td>
                <td>
                  <input type="hidden" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="0"/>
                  <input type="checkbox" onclick="storeFee(<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
)" name="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" value="1" id="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['no_fees']) {?>checked<?php }?> />
                  <label for="nofee[<?php echo $_smarty_tpl->tpl_vars['USERS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['user']['index']]['id'];?>
]"></label>
                </td>
              </tr>
<?php endfor; endif; ?>

            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
