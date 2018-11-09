<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:30:29
         compiled from "/var/www/svarog/templates/bootstrap/dashboard/blocks/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:337722375a8874c5e2e9c2-16886456%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86c4aefe1ebc4e572799060134cdfd1576671725' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/dashboard/blocks/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '337722375a8874c5e2e9c2-16886456',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DISABLED_DASHBOARD' => 0,
    'DISABLED_DASHBOARD_API' => 0,
    'BLOCKSFOUND' => 0,
    'GLOBAL' => 0,
    'percentage' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874c5e49581_52985635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874c5e49581_52985635')) {function content_5a8874c5e49581_52985635($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
if (!is_callable('smarty_function_math')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.math.php';
?><?php if (!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD']->value&&!$_smarty_tpl->tpl_vars['DISABLED_DASHBOARD_API']->value) {?>
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title"><i class="fa fa-desktop fa-fw"></i> Last Found Blocks</h4>
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-bordered table-hover table-striped"> 
         <thead>
          <tr>
            <th class="text-right">Height</th>
            <th class="text-center">Finder</th>
            <th class="text-right">Time</th>
            <th class="text-right">Difficulty</th>
            <th class="text-right">Amount</th>
            <th class="text-right">Expected Shares</th>
            <th class="text-right">Actual Shares</th>
            <th class="text-right">Percentage</th>
          </tr>
          </thead>
          <tbody id="b-blocks">
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total']);
?>
            <tr>
              <td class="text-right"><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
</td>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['finder'])===null||$tmp==='' ? "unknown" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
              <td class="text-right"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['time'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['difficulty'],"4");?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['amount'],"2");?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares']);?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares']);?>
</td>
              <td class="text-right">
                <?php echo smarty_function_math(array('assign'=>"percentage",'equation'=>"shares / estshares * 100",'shares'=>(($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'])===null||$tmp==='' ? "0" : $tmp),'estshares'=>$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares']),$_smarty_tpl);?>

                <font color="<?php if (($_smarty_tpl->tpl_vars['percentage']->value<=100)) {?>green<?php } else { ?>red<?php }?>"><?php echo number_format($_smarty_tpl->tpl_vars['percentage']->value,"2");?>
</font>
              </td>
            </tr>
<?php endfor; endif; ?>
          </tbody>
        </table>
      </div>
      <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockfindersound']['enabled'])===null||$tmp==='' ? "1" : $tmp)) {?>
      <div id="togglesound" class="togglesound">
        <div class="panel-footer text-right">
          <button id="muteButton" type="button" class="btn-xs btn-success toggleSoundButton"><i class="fa fa-volume-up"></i></button>
        </div>
      </div>
      <?php }?>
    </div>
  </div>
<?php }?><?php }} ?>
