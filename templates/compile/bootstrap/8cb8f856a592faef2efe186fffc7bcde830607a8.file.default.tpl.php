<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 16:25:20
         compiled from "/var/www/svarog/templates/bootstrap/password/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1435772615a89a8f01e14f1-84260426%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb8f856a592faef2efe186fffc7bcde830607a8' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/password/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1435772615a89a8f01e14f1-84260426',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a8f01f17f4_40185726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a8f01f17f4_40185726')) {function content_5a89a8f01f17f4_40185726($_smarty_tpl) {?><div class="row">
  <form class="col-md-4" role="form" method="POST">
    <input type="hidden" name="page" value="password">
    <input type="hidden" name="action" value="reset">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
    <div class="panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">Password reset</h3>
      </div>
      <div class="panel-body">
        <fieldset>
         <p>If you have an email set for your account, enter your username to get your password reset</p>
          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" placeholder="Username or E-mail" name="username" type="text" maxlength="100" autofocus required>
          </div>
        </fieldset>
      </div>
      <div class="panel-footer" style="margin-top: 10px;">
        <input type="submit" class="btn btn-success btn-sm" value="Reset" >
      </div>
    </div>
  </form>
</div>
<?php }} ?>
