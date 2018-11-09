<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:30:21
         compiled from "/var/www/svarog/templates/bootstrap/login//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21139037935a8874bd4c9ad4-18404139%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd182aa998a792361bf3a222826a7843e8271c731' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/login//default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21139037935a8874bd4c9ad4-18404139',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874bd4daf29_59531811',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874bd4daf29_59531811')) {function content_5a8874bd4daf29_59531811($_smarty_tpl) {?><div class="row">
  <form class="col-md-4" role="form" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=login" method="post" id="loginForm">
    <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-sign-in fa-fw"></i> Login with existing account
      </div>
      <div class="panel-body">
        <div class="form-group">
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input class="form-control" placeholder="E-mail" name="username" type="email" autofocus required>
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
          </div>
        </div>
      </div>
      <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
      <div class="panel-footer">
        <input type="submit" class="btn btn-success btn-sm" value="Login" >
        <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=password"><font size="1">Forgot your password?</font></a>
      </div>
    </div>
  </form>
</div>
<?php }} ?>
