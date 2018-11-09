<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 23:57:19
         compiled from "/var/www/svarog/templates/bootstrap/admin/settings/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20849289645a89782fa773e3-56253164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4944653eaf684adba1c940ba1a2c0d704888b33b' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/settings/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20849289645a89782fa773e3-56253164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'SETTINGS' => 0,
    'TAB' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89782fae4041_28280536',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89782fae4041_28280536')) {function content_5a89782fae4041_28280536($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_capitalize')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.capitalize.php';
if (!is_callable('smarty_function_html_options')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.html_options.php';
?><div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-gear fa-fw"></i> Settings
      </div>           
      <form method="POST" role="form">
        <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
" />
        <input type="hidden" name="do" value="save" />
        <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
        <div class="panel-body">
          <ul class="nav nav-pills">
            <?php  $_smarty_tpl->tpl_vars['TAB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['SETTINGS']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB']->key => $_smarty_tpl->tpl_vars['TAB']->value) {
$_smarty_tpl->tpl_vars['TAB']->_loop = true;
?>
            <li <?php if ($_smarty_tpl->tpl_vars['TAB']->value=='website') {?>class="active"<?php }?>><a href="#<?php echo $_smarty_tpl->tpl_vars['TAB']->value;?>
" data-toggle="tab"><?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['TAB']->value);?>
</a></li>
            <?php } ?>
          </ul>
          <div class="tab-content">
            <?php  $_smarty_tpl->tpl_vars['TAB'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['TAB']->_loop = false;
 $_from = array_keys($_smarty_tpl->tpl_vars['SETTINGS']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['TAB']->key => $_smarty_tpl->tpl_vars['TAB']->value) {
$_smarty_tpl->tpl_vars['TAB']->_loop = true;
?>
            <div class="tab-pane fade in <?php if ($_smarty_tpl->tpl_vars['TAB']->value=='website') {?>active<?php }?>" id="<?php echo $_smarty_tpl->tpl_vars['TAB']->value;?>
">
              <br />
              <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['setting'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['name'] = 'setting';
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value]) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['setting']['total']);
?>
              <div class="form-group">
              <label><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['display'];?>
</label>
              <?php if ((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['tooltip'])===null||$tmp==='' ? '' : $tmp)) {?><span style="font-size: 10px;"><?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['tooltip'];?>
</span><?php }?>
              <?php if ($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='select') {?>
                <?php echo smarty_function_html_options(array('class'=>"form-control select-mini",'name'=>"data[".((string)$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'])."]",'options'=>$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['options'],'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp)),$_smarty_tpl);?>

              <?php } elseif ($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='text') {?>
                <input class="form-control" type="text" size="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['size'])===null||$tmp==='' ? "1" : $tmp);?>
" name="data[<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'];?>
]" value="<?php echo htmlspecialchars((($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" />
              <?php } elseif ($_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type']=='textarea') {?>
                <textarea class="form-control" name="data[<?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['name'];?>
]" cols="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['size'])===null||$tmp==='' ? "1" : $tmp);?>
" rows="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['height'])===null||$tmp==='' ? "1" : $tmp);?>
"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['default'] : $tmp);?>
</textarea>
              <?php } else { ?>
                Unknown option type: <?php echo $_smarty_tpl->tpl_vars['SETTINGS']->value[$_smarty_tpl->tpl_vars['TAB']->value][$_smarty_tpl->getVariable('smarty')->value['section']['setting']['index']]['type'];?>

              <?php }?>
              </div>
              <?php endfor; endif; ?>
            </div>
            <?php } ?>
          </div>
          
        </div>
        <div class="panel-footer">
          <input type="submit" value="Save" class="btn btn-success btn-sm">
        </div>
      </form>
    </div>
  </div>
</div><?php }} ?>
