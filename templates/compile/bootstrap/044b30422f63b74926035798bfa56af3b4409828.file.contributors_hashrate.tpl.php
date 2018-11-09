<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:39:13
         compiled from "/var/www/svarog/templates/bootstrap/statistics/pool/contributors_hashrate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9525278425a8876d15aee89-18300572%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '044b30422f63b74926035798bfa56af3b4409828' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/pool/contributors_hashrate.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9525278425a8876d15aee89-18300572',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CONTRIBHASHES' => 0,
    'DIFFICULTY' => 0,
    'REWARD' => 0,
    'rank' => 0,
    'estday' => 0,
    'listed' => 0,
    'myestday' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8876d16873c7_06632134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8876d16873c7_06632134')) {function content_5a8876d16873c7_06632134($_smarty_tpl) {?><?php if (!is_callable('smarty_function_math')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.math.php';
?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-tachometer fa-fw"></i> Contributor Hashrates
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th>Rank</th>
              <th>Donor</th>
              <th>User Name</th>
              <th class="text-right">KH/s</th>
              <th class="text-right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
/Day</th>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['enabled']) {?>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']) {?><th class="text-right"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency'];?>
/Day</th><?php }?>
               <?php }?>
            </tr>
          </thead>
          <tbody>
<?php $_smarty_tpl->tpl_vars['rank'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(0, null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['name'] = 'contrib';
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['contrib']['total']);
?>
      <?php echo smarty_function_math(array('assign'=>"estday",'equation'=>"round(reward / ( diff * pow(2,32) / ( hashrate * 1000 ) / 3600 / 24), 3)",'diff'=>$_smarty_tpl->tpl_vars['DIFFICULTY']->value,'reward'=>$_smarty_tpl->tpl_vars['REWARD']->value,'hashrate'=>$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']),$_smarty_tpl);?>

            <?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp), 'UTF-8')==mb_strtolower($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'], 'UTF-8')) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?><tr class="success"><?php } else { ?><tr><?php }?>
              <td><?php echo $_smarty_tpl->tpl_vars['rank']->value++;?>
</td>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="fa fa-trophy fa-fw"></i><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="fa fa-star-o fa-fw"></i><?php } else { ?><i class="fa fa-ban fa-fw"></i><?php }?></td>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['is_anonymous'])===null||$tmp==='' ? "0" : $tmp)==1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_admin'])===null||$tmp==='' ? "0" : $tmp)==0) {?>anonymous<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['hashrate']);?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['estday']->value,"3");?>
</td>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['enabled']) {?>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']) {?><td class="text-right"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['estday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"4");?>
</td><?php }?>
              <?php }?>
            </tr>
<?php endfor; endif; ?>
<?php if ($_smarty_tpl->tpl_vars['listed']->value!=1&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp)&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['rawhashrate'])===null||$tmp==='' ? "0" : $tmp)>0) {?>
      <?php echo smarty_function_math(array('assign'=>"myestday",'equation'=>"round(reward / ( diff * pow(2,32) / ( hashrate * 1000 ) / 3600 / 24), 3)",'diff'=>$_smarty_tpl->tpl_vars['DIFFICULTY']->value,'reward'=>$_smarty_tpl->tpl_vars['REWARD']->value,'hashrate'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['rawhashrate']),$_smarty_tpl);?>

            <?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'])===null||$tmp==='' ? '' : $tmp), 'UTF-8')==mb_strtolower($_smarty_tpl->tpl_vars['CONTRIBHASHES']->value[$_smarty_tpl->getVariable('smarty')->value['section']['contrib']['index']]['account'], 'UTF-8')) {?><?php $_smarty_tpl->tpl_vars['listed'] = new Smarty_variable(1, null, 0);?><tr class="success"><?php } else { ?><tr><?php }?>
              <td>n/a</td>
              <td><?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>=2) {?><i class="fa fa-trophy fa-fw"></i><?php } elseif ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)<2&&(($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'])===null||$tmp==='' ? "0" : $tmp)>0) {?><i class="fa fa-star-o fa-fw"></i><?php } else { ?><i class="fa fa-ban fa-fw"></i><?php }?></td>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
</td>
              <td class="text-right"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['rawhashrate']);?>
</td>
              <td class="text-right"><?php echo (($tmp = @number_format($_smarty_tpl->tpl_vars['myestday']->value,"3"))===null||$tmp==='' ? "n/a" : $tmp);?>
</td>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['enabled']) {?>
              <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['currency']) {?><td class="text-right"><?php echo number_format((($tmp = @($_smarty_tpl->tpl_vars['myestday']->value*$_smarty_tpl->tpl_vars['GLOBAL']->value['price']))===null||$tmp==='' ? "n/a" : $tmp),"4");?>
</td><?php }?>
              <?php }?>
            </tr>
<?php }?>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
          <h6>
          <i class="fa fa-ban fa-fw"></i>no Donation
          <i class="fa fa-star-o fa-fw"></i> 0&#37;&#45;2&#37; Donation 
          <i class="fa fa-trophy fa-fw"></i> 2&#37; or more Donation
          </h6>
      </div>
    </div>
  </div>

<?php }} ?>
