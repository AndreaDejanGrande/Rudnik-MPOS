<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 03:18:11
         compiled from "/var/www/svarog/templates/bootstrap/statistics/blockfinder/finder_own.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4458966545a89a743b5dde4-43792788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7101d3db399c6f9855496528f63397d977299acc' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/blockfinder/finder_own.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4458966545a89a743b5dde4-43792788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BLOCKSSOLVEDBYWORKER' => 0,
    'rank' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a743b70c49_50124538',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a743b70c49_50124538')) {function content_5a89a743b70c49_50124538($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-desktop fa-fw"></i> Blocks found by own Workers
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Rank</th>
              <th>Worker</th>
              <th>Blocks</th>
              <th>Coins Generated</th>
            </tr>
          </thead>
          <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['block'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['block']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['name'] = 'block';
$_smarty_tpl->tpl_vars['smarty']->value['section']['block']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['BLOCKSSOLVEDBYWORKER']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
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
              <td><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
              <td><?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['BLOCKSSOLVEDBYWORKER']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['finder'])===null||$tmp==='' ? "unknown/deleted" : $tmp), ENT_QUOTES, 'UTF-8', true);?>
</td>
              <td><?php echo $_smarty_tpl->tpl_vars['BLOCKSSOLVEDBYWORKER']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['solvedblocks'];?>
</td>
              <td><?php echo number_format($_smarty_tpl->tpl_vars['BLOCKSSOLVEDBYWORKER']->value[$_smarty_tpl->getVariable('smarty')->value['section']['block']['index']]['generatedcoins']);?>
</td>
            </tr>
<?php endfor; endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div><?php }} ?>
