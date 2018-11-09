<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 00:03:46
         compiled from "/var/www/svarog/templates/bootstrap/admin/wallet/peers.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12328033685a8979b28378e4-29099284%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5bf383975e92145bcbedde7b9e6960aa5c9fd15' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/wallet/peers.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12328033685a8979b28378e4-29099284',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PEERINFO' => 0,
    'ARRAY' => 0,
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8979b2847a97_27372873',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8979b2847a97_27372873')) {function content_5a8979b2847a97_27372873($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_replace')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.replace.php';
if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-connectdevelop fa-fw"></i> Peer Information
      </div>
      <div class="panel-body no-padding">
        <table class="table table-striped table-bordered table-hover">
          <thead>
          <tr>
            <th>Host</th>
            <th>Protocol</th>
            <th>Identity</th>
            <th>Connected</th>
            <th>Traffic</th>
          </tr>
          </thead>
          <tbody>
<?php  $_smarty_tpl->tpl_vars['ARRAY'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ARRAY']->_loop = false;
 $_smarty_tpl->tpl_vars['KEY'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['PEERINFO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ARRAY']->key => $_smarty_tpl->tpl_vars['ARRAY']->value) {
$_smarty_tpl->tpl_vars['ARRAY']->_loop = true;
 $_smarty_tpl->tpl_vars['KEY']->value = $_smarty_tpl->tpl_vars['ARRAY']->key;
?>
          <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['ARRAY']->value['addr'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['ARRAY']->value['version'];?>
</td>
            <td><?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['ARRAY']->value['subver'],'/','');?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['ARRAY']->value['conntime'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
</td>
            <td><?php echo number_format((((($tmp = @$_smarty_tpl->tpl_vars['ARRAY']->value['bytessent'])===null||$tmp==='' ? "0" : $tmp)+(($tmp = @$_smarty_tpl->tpl_vars['ARRAY']->value['bytesrecv'])===null||$tmp==='' ? "0" : $tmp))/1024/1024),"3");?>
 MB</td>
          </tr>
<?php } ?>
          </tbody>
        </table>
      </div>
    </div>
<?php }} ?>
