<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 16:06:23
         compiled from "/var/www/svarog/templates/bootstrap/statistics/blocks/block_shares_graph.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5871583855a89a47fb6ac32-96432600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3002261ff67c26d26a2ad98fdeaa0f045a6d7df7' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/blocks/block_shares_graph.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5871583855a89a47fb6ac32-96432600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKSFOUND' => 0,
    'USEBLOCKAVERAGE' => 0,
    'GLOBAL' => 0,
    'BLOCKLIMIT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a47fc17677_08154639',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a47fc17677_08154639')) {function content_5a89a47fc17677_08154639($_smarty_tpl) {?><script type="text/javascript">
$(function () {

      var blockdata = [
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] = ((int) -1) == 0 ? 1 : (int) -1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['total'] = min(ceil(($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'] > 0 ? $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start'] : $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['start']+1)/abs($_smarty_tpl->tpl_vars['smarty']->value['section']['block']['step'])), $_smarty_tpl->tpl_vars['smarty']->value['section']['block']['max']);
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
?>{
          blockHeight:    <?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['height'];?>
,
          estShares:      <?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['estshares'];?>
,
          actShares:      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['shares'])===null||$tmp==='' ? "0" : $tmp);?>
,
          <?php if ($_smarty_tpl->tpl_vars['USEBLOCKAVERAGE']->value) {?>
          avgShares:      <?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['block_avg'])===null||$tmp==='' ? "0" : $tmp);?>
,
          <?php }?>
          <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>
          pplnsShares:    <?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['pplns_shares'])===null||$tmp==='' ? "0" : $tmp);?>
,
          <?php }?>
          },
        <?php endfor; endif; ?>
      ];

      Morris.Area({
        parseTime: false,
        behaveLikeLine: true,
        element: 'block-area-chart',
        data: blockdata,
        xkey: 'blockHeight',
        ykeys : ['estShares', <?php if ($_smarty_tpl->tpl_vars['USEBLOCKAVERAGE']->value) {?>'avgShares', <?php }?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>'pplnsShares', <?php }?> 'actShares'],
        labels : ['Expected Shares', <?php if ($_smarty_tpl->tpl_vars['USEBLOCKAVERAGE']->value) {?>'Average Shares', <?php }?><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system']=='pplns') {?>'PPLNS Shares',<?php }?> 'Actual Shares'],
        pointSize: 2,
        lineColors: ['#2D9C2F','#D58665','#2D619C','#FF0000'],
        pointFillColors: ['#FFFFFF'],
        hideHover: 'auto',
        resize: true,
        fillOpacity: 0.05
      });
});
</script>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-th fa-fw"></i> Block Shares
      </div>
      <div class="panel-body">
        <ul class="pager">
          <li class="previous">
            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php if (is_array($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value)&&count($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value)>($_smarty_tpl->tpl_vars['BLOCKLIMIT']->value-1)) {?><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[$_smarty_tpl->tpl_vars['BLOCKLIMIT']->value-1]['height'];?>
<?php }?>&prev=1"> &larr;</a>
          </li>
          <li class="next">
            <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php if (is_array($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value)&&count($_smarty_tpl->tpl_vars['BLOCKSFOUND']->value)>0) {?><?php echo $_smarty_tpl->tpl_vars['BLOCKSFOUND']->value[0]['height'];?>
<?php }?>&next=1"> &rarr;</a>
          </li>
        </ul>
        <div class="flot-chart">
          <div id="block-area-chart"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
