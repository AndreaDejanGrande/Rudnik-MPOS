<?php /* Smarty version Smarty-3.1.16, created on 2018-02-20 12:45:56
         compiled from "/var/www/svarog/templates/bootstrap/statistics//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17208958525a8bb6142eda12-42875195%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70ce4ef566f09b0bc6ae25d7713220c330a6926d' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics//default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17208958525a8bb6142eda12-42875195',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'CURRENTBLOCK' => 0,
    'DIFFICULTY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8bb6144483d7_43962200',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8bb6144483d7_43962200')) {function content_5a8bb6144483d7_43962200($_smarty_tpl) {?>  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        General Statistics
      </div>
      <div class="panel-body">
        <table class="table table-striped table-bordered table-hover">
          <tbody>
            <tr>
              <td class="leftheader">Pool Hash Rate</td>
              <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'];?>
 <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</td>
            </tr>
            <tr>
              <td class="leftheader">Current Total Miners</td>
              <td><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</td>
            </tr>
            <tr>
              <td class="leftheader">Current Block</td>
              <td><a href="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['blockexplorer']['url'];?>
<?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['CURRENTBLOCK']->value;?>
</a></td>
            </tr>
            <tr>
              <td class="leftheader">Current Difficulty</td>
              <td><a href="http://allchains.info/" target="_new"><?php echo $_smarty_tpl->tpl_vars['DIFFICULTY']->value;?>
</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="panel-footer">
        <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?><ul><li>These stats are also available in JSON format <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=public" target="_api">HERE</a></li><?php }?>
      </div>
    </div>
  </div>
</div><?php }} ?>
