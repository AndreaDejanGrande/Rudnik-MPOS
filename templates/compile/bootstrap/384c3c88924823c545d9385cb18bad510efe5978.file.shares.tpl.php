<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:30:29
         compiled from "/var/www/svarog/templates/bootstrap/dashboard/round_statistics/prop/shares.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21340422875a8874c5dfa427-82062250%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '384c3c88924823c545d9385cb18bad510efe5978' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/dashboard/round_statistics/prop/shares.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21340422875a8874c5dfa427-82062250',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874c5e18aa6_93343993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874c5e18aa6_93343993')) {function content_5a8874c5e18aa6_93343993($_smarty_tpl) {?>      <table class="table borderless m-b-none text-small panel-footer">
        <thead>
          <tr>
            <th></th>
            <th><span><h5><i class="fa fa-user fa-fw"></i> Own</h5></span></th>
            <th><span><h5><i class="fa fa-users fa-fw"></i> Pool</h5></span></th>
          </tr>
          <tr>
            <th><h5><i class="fa fa-smile-o fa-fw"></i> Valid</h5></th>
            <th>
            <div class="progress progress-striped progress-fix">
               <div id="b-yvalid" class="progress-bar progress-bar-success black" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']);?>
" role="progressbar"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</div>
            </div>
            </th>
            <th>
            <div class="progress progress-striped progress-fix">
               <div id="b-pvalid" class="progress-bar progress-bar-success black" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']);?>
" role="progressbar"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</div>
            </div>
            </th>
          </tr>
          <tr>
            <th><h5><i class="fa fa-frown-o fa-fw"></i> Invalid</h5></th>
            <th>
            <div class="progress progress-striped progress-fix">
               <div id="b-yivalid" class="progress-bar progress-bar-danger black" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']);?>
" role="progressbar"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</div>
            </div>
            </th>
            <th>
            <div class="progress progress-striped progress-fix">
               <div id="b-pivalid" class="progress-bar progress-bar-danger black" style="width: 100%" aria-valuemax="100" aria-valuemin="0" aria-valuenow="<?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']);?>
" role="progressbar"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['sharediffprecision']);?>
</div>
            </div>
            </th>
          </tr>
          <tr>
            <th><h5><i class="fa fa-bolt fa-fw"></i> Efficiency</h5></th>
            <th>
            <div class="progress progress-striped active progress-fix">
              <div id="b-yefficiency" class="progress-bar <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']>0) {?>progress-bar-info<?php } else { ?>progress-bar-warning<?php }?> black" style="width:<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']>0) {?><?php echo number_format((100-($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid'])*100)),"2");?>
%<?php } else { ?>100.00%<?php }?>" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']>0) {?><?php echo number_format((100-($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['shares']['invalid'])*100)),"2");?>
%<?php } else { ?>0.00%<?php }?></div>
            </div>
            </th>
            <th>
            <div class="progress progress-striped active progress-fix">
               <div id="b-pefficiency" class="progress-bar <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?>progress-bar-info<?php } else { ?>progress-bar-warning<?php }?> black" style="width:<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><?php echo number_format((100-($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100)),"2");?>
%<?php } else { ?>100.00%<?php }?>" aria-valuemax="100" aria-valuemin="0" aria-valuenow="20" role="progressbar"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']>0) {?><?php echo number_format((100-($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid']/($_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['valid']+$_smarty_tpl->tpl_vars['GLOBAL']->value['roundshares']['invalid'])*100)),"2");?>
%<?php } else { ?>0.00%<?php }?></div>
            </div>
          </tr>
        </thead>
      </table>
<?php }} ?>
