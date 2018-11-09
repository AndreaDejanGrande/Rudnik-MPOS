<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 02:49:35
         compiled from "/var/www/svarog/templates/bootstrap/account/edit/resetpin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8784307395a89a08f3fe3e9-77735077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe256bd2aecfd31817814109d3a1d6889470634' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/edit/resetpin.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8784307395a89a08f3fe3e9-77735077',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a08f402796_94073732',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a08f402796_94073732')) {function content_5a89a08f402796_94073732($_smarty_tpl) {?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post" role="form">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="genPin">
  <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-lock fa-fw"></i> Reset PIN
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>Current Password</label>
              <input class="form-control" type="password" name="currentPassword">
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
        <input type="submit" class="btn btn-success btn-sm" value="Reset PIN">
      </div>
    </div>
  </div>
</form><?php }} ?>
