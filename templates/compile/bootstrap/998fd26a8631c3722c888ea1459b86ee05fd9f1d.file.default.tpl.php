<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:34:45
         compiled from "/var/www/svarog/templates/bootstrap/admin/monitoring/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14280259885a8875c5769c44-64985378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '998fd26a8631c3722c888ea1459b86ee05fd9f1d' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/monitoring/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14280259885a8875c5769c44-64985378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CRONSTATUS' => 0,
    'cron' => 0,
    'data' => 0,
    'event' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8875c58209e0_00594053',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8875c58209e0_00594053')) {function content_5a8875c58209e0_00594053($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-bell-o fa-fw"></i> Monitoring
      </div>
      <div class="panel-body no-padding table-responsive">
        <table class="table table-striped table-bordered table-hover">
          <thead>
            <th>Cronjob</th>
            <th>Disabled</th>
            <th>Exit Code</th>
            <th>Active</th>
            <th>Runtime</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Message</th>
          </thead>
          <tbody>
    <?php  $_smarty_tpl->tpl_vars['data'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['data']->_loop = false;
 $_smarty_tpl->tpl_vars['cron'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CRONSTATUS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['data']->key => $_smarty_tpl->tpl_vars['data']->value) {
$_smarty_tpl->tpl_vars['data']->_loop = true;
 $_smarty_tpl->tpl_vars['cron']->value = $_smarty_tpl->tpl_vars['data']->key;
?>
            <tr>
              <td><?php echo $_smarty_tpl->tpl_vars['cron']->value;?>
</td>
      <?php  $_smarty_tpl->tpl_vars['event'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['event']->_loop = false;
 $_smarty_tpl->tpl_vars['name'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['event']->key => $_smarty_tpl->tpl_vars['event']->value) {
$_smarty_tpl->tpl_vars['event']->_loop = true;
 $_smarty_tpl->tpl_vars['name']->value = $_smarty_tpl->tpl_vars['event']->key;
?>
              <td>
                <?php if ($_smarty_tpl->tpl_vars['event']->value['type']=='okerror') {?>
                  <?php if ($_smarty_tpl->tpl_vars['event']->value['value']==0) {?>
                    <font color="green">OK</font>
		  <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['value']==2) {?>
                    <font color="orange">WARN</font>
                  <?php } else { ?>
                    <font color="red">ERROR</font>
                  <?php }?>
                <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='message') {?>
                  <i><?php echo $_smarty_tpl->tpl_vars['event']->value['value'];?>
</i>
                <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='yesno') {?>
                  <i class="fa fa-<?php if ($_smarty_tpl->tpl_vars['event']->value['value']==1) {?>check<?php } else { ?>times<?php }?> fa-fw"></i>
                <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='time') {?>
                  <?php if ($_smarty_tpl->tpl_vars['event']->value['value']>60) {?>
                    <font color="orange">
                  <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['value']>120) {?>
                    <font color="red">
                  <?php } else { ?>
                    <font color="green">
                  <?php }?>
                    <?php echo number_format((($tmp = @$_smarty_tpl->tpl_vars['event']->value['value'])===null||$tmp==='' ? "0" : $tmp),"2");?>
 seconds
                  </font>
                <?php } elseif ($_smarty_tpl->tpl_vars['event']->value['type']=='date') {?>
                  <?php if ((time()-180)>$_smarty_tpl->tpl_vars['event']->value['value']) {?>
                    <font color="red">
                  <?php } elseif ((time()-120)>$_smarty_tpl->tpl_vars['event']->value['value']) {?>
                    <font color="orange">
                  <?php } else { ?>
                    <font color="green">
                  <?php }?>
                    <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['event']->value['value'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>

                  </font>
                <?php } else { ?>
                  <?php echo (($tmp = @$_smarty_tpl->tpl_vars['event']->value['value'])===null||$tmp==='' ? '' : $tmp);?>

                <?php }?>
              </td>
      <?php } ?>
            </tr>
    <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
