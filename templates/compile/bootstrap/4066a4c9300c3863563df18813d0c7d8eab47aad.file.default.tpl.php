<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 00:03:56
         compiled from "/var/www/svarog/templates/bootstrap/admin/news/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14153752195a8979bccab871-49458696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4066a4c9300c3863563df18813d0c7d8eab47aad' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/news/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14153752195a8979bccab871-49458696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'CTOKEN' => 0,
    'NEWS' => 0,
    'GLOBAL' => 0,
    'HIDEAUTHOR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8979bccde1e7_00415835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8979bccde1e7_00415835')) {function content_5a8979bccde1e7_00415835($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/var/www/svarog/public/../include/smarty/libs/plugins/modifier.date_format.php';
?><script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.css">
<script type="text/javascript">
  $(document).ready(function () { $(".cleditor").cleditor(); });
</script>
<div class="row">
  <form class="col-lg-12" method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" role="form">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-edit fa-fw"></i> Write News 
        <br>
        <font size="1px">News posts support the Markdown syntax</font>
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
            <input type="hidden" name="do" value="add">
            <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
            <div class="form-group">
              <label>Active</label>
              <input type="checkbox" class="switch" data-size="mini" name="data[active]" value="1" checked>
            </div>
            <div class="form-group">
              <label>Header</label>
              <input class="form-control" size="30" type="text" name="data[header]" required />
            </div>
            <div class="form-group">
              <label>Content</label>
              <textarea class="form-control cleditor" name="data[content]" rows="5" required></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <input type="submit" value="Add" class="btn btn-success btn-sm">
      </div>
    </div>
  </form>
</div>

<div class="row">

<?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['news'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['news']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['name'] = 'news';
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NEWS']->value) ? count($_loop) : max(0, (int) $_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['news']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['news']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['news']['total']);
?>
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-info fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['header'];?>
</a>
        <br />
        <font size="1px">posted <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['time'],$_smarty_tpl->tpl_vars['GLOBAL']->value['config']['date']);?>
<?php if ((($tmp = @$_smarty_tpl->tpl_vars['HIDEAUTHOR']->value)===null||$tmp==='' ? "0" : $tmp)==0) {?> by <b><?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['author'];?>
</b><?php }?></font>
      </div>

      <div class="panel-body">
        <?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['content'];?>

      </div>
      <div class="panel-footer">
        <div style="text-align:right">
          <a href='<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=news_edit&id=<?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
'><i class="fa fa-wrench fa-fw"></i></a>&nbsp;
          <a href='<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&do=delete&id=<?php echo $_smarty_tpl->tpl_vars['NEWS']->value[$_smarty_tpl->getVariable('smarty')->value['section']['news']['index']]['id'];?>
&ctoken=<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
'><i class="fa fa-trash-o fa-fw"></i></a>
        </div>
      </div>
    </div>
  </div>
<?php endfor; endif; ?>

</div>
<?php }} ?>
