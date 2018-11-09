<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:39:13
         compiled from "/var/www/svarog/templates/bootstrap/statistics/pool/general_stats.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1689935775a8876d168a923-38356673%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c8d14dd2c235574075118100a8d028fcff09833' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/pool/general_stats.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1689935775a8876d168a923-38356673',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'NETWORK' => 0,
    'ESTTIME' => 0,
    'ESTIMATES' => 0,
    'CURRENTBLOCK' => 0,
    'CURRENTBLOCKHASH' => 0,
    'LASTBLOCK' => 0,
    'TIMESINCELAST' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8876d16b6773_68417026',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8876d16b6773_68417026')) {function content_5a8876d16b6773_68417026($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_seconds_to_words')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.seconds_to_words.php';
?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-bar-chart-o fa-fw"></i> General Statistics
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <tbody>
            <tr>
              <th width="50%">Pool Hash Rate</th>
              <td width="70%"><span id="b-hashrate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'],"3");?>
</span> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</td>
            </tr>
            <tr>
              <th>Pool Efficiency</th>
              <td><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><?php echo number_format(($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100),"2");?>
%<?php } else { ?>0%<?php }?></td>
            </tr>
            <tr>
              <th>Current Active Workers</th>
              <td id="b-workers"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['workers']);?>
</td>
            </tr>
            <tr>
              <th>Current Difficulty</th>
              <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']) {?>
              <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><span id="b-diff"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</span></a></td>
              <?php } else { ?>
              <td><span id="b-diff"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['difficulty'],"8");?>
</span></td>
              <?php }?>
            </tr>
            <tr>
              <th>Est. Next Difficulty</th>
              <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['disabled']) {?>
              <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['chaininfo']['url'];?>
" target="_new"><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'],"8");?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</a></td>
              <?php } else { ?>
              <td><?php echo number_format($_smarty_tpl->tpl_vars['NETWORK']->value['EstNextDifficulty'],"8");?>
 (Change in <?php echo $_smarty_tpl->tpl_vars['NETWORK']->value['BlocksUntilDiffChange'];?>
 Blocks)</td>
              <?php }?>
            </tr>
            <tr>
              <th>Est. Avg. Time per Round (Network)</th>
              <td><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['NETWORK']->value['EstTimePerBlock']);?>
</td>
            </tr>
            <tr>
              <th>Est. Avg. Time per Round (Pool)</th>
              <td><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['ESTTIME']->value);?>
</td>
            </tr>
            <tr>
              <th>Est. Shares this Round</th>
              <td id="b-target"><?php echo number_format($_smarty_tpl->tpl_vars['ESTIMATES']->value['shares']);?>
 (done: <?php echo $_smarty_tpl->tpl_vars['ESTIMATES']->value['percent'];?>
%)</td>
            </tr>
            <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['disabled']) {?>
            <tr>
              <th width="50%">Next Network Block</th>
              <td colspan="3"><?php echo number_format(($_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1));?>
 &nbsp;&nbsp; (Current: <a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCKHASH']->value;?>
" target="_new"><?php echo number_format($_smarty_tpl->tpl_vars['CURRENTBLOCK']->value);?>
)</a></td>
            </tr>
            <?php } else { ?>
            <tr>
              <th>Next Network Block</th>
              <td colspan="3"><?php echo number_format(($_smarty_tpl->tpl_vars['CURRENTBLOCK']->value+1));?>
 &nbsp;&nbsp; (Current: <?php echo number_format($_smarty_tpl->tpl_vars['CURRENTBLOCK']->value);?>
)</td>
            </tr>
            <?php }?>
            <tr>
              <th>Last Block Found</th>
              <td colspan="3"><a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=statistics&action=round&height=<?php echo $_smarty_tpl->tpl_vars['LASTBLOCK']->value;?>
" target="_new"><?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['LASTBLOCK']->value)===null||$tmp==='' ? "0" : $tmp));?>
</a></td>
            </tr>
            <tr>
              <th>Time Since Last Block</th>
              <td colspan="3"><?php echo smarty_modifier_seconds_to_words($_smarty_tpl->tpl_vars['TIMESINCELAST']->value);?>
</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
        <h6><?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?>These stats are also available in JSON format <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getpoolstatus&api_key=<?php echo (($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'])===null||$tmp==='' ? '' : $tmp);?>
">HERE</a><?php }?></h6>
      </div>
    </div>
  </div>
<?php }} ?>
