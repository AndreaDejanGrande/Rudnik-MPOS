<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:27:16
         compiled from "/var/www/svarog/templates/bootstrap/register//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17597744985a887404b2c329-62043793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f526f8056fc9ba7d45ec4c811df95644259c2dd' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/register//default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17597744985a887404b2c329-62043793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'CTOKEN' => 0,
    'GLOBAL' => 0,
    'RECAPTCHA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a887404b73469_44277742',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a887404b73469_44277742')) {function content_5a887404b73469_44277742($_smarty_tpl) {?><script>
  var zxcvbnPath = "<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/zxcvbn/zxcvbn.js";
</script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/pwcheck.js"></script>

<div class="row">
  <div class="col-lg-5">
    <form class="panel panel-info" method="post" role="form">
      <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
      <?php if ((($tmp = @$_REQUEST['token'])===null||$tmp==='' ? '' : $tmp)) {?>
      <input type="hidden" name="token" value="<?php echo htmlspecialchars($_REQUEST['token'], ENT_QUOTES, 'UTF-8', true);?>
">
      <?php }?>
      <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
      <input type="hidden" name="action" value="register">
      <div class="panel-heading">
        <i class="fa fa-edit fa-fw"></i> Register new account
      </div>
      <div class="panel-body">
        <div class="form-group">
          <label>Username</label>
          <div class="input-group  input-group-sm">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo (($tmp = @htmlspecialchars($_POST['username'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" maxlength="20" required>
          </div>
          <?php if ((($tmp = @$_smarty_tpl->tpl_vars['GLOBAL']->value['coinaddresscheck'])===null||$tmp==='' ? "1" : $tmp)) {?>
          <label>Coin Address</label>
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>
            <input type="text" name="coinaddress" placeholder="Coin Address" class="form-control" value="<?php echo (($tmp = @htmlspecialchars($_POST['coinaddress'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
          </div>
          <?php }?>
          <label>Password</label> (<span id="pw_strength">Strength</span>)
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
            <input type="password" class="form-control" name="password1" placeholder="Password" value="" size="15" maxlength="100" id="pw_field" required>
          </div>
          <span id="pw_match"></span>
          <div class="input-group input-group-sm">
            <span class="input-group-addon" id="pw_match"><i class="fa fa-key fa-fw"></i></span>
            <input type="password" class="form-control" name="password2" placeholder="Repeat Password" value="" size="15" maxlength="100" id="pw_field2" required>
          </div>
          <label>Email</label>
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input type="text" name="email1" placeholder="Email" class="form-control" value="<?php echo (($tmp = @htmlspecialchars($_POST['email1'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
          </div>
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-envelope-o fa-fw"></i></span>
            <input type="text" class="form-control" name="email2" placeholder="Repeat Email" value="<?php echo (($tmp = @htmlspecialchars($_POST['email2'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" size="15" required>
          </div>
          <label>PIN</label>
          <font size="1">Four digit number. <b>Remember this pin!</b></font>
          <div class="input-group input-group-sm">
            <span class="input-group-addon"><i class="fa fa-shield fa-fw"></i></span>
            <input type="password" class="form-control" name="pin" placeholder="PIN" value="" size="4" maxlength="4" required>   
          </div>
          <div class="input-group input-group-sm">
            <label>
              <input type="checkbox" value="1" name="tac" id="tac"> I Accept The <a data-toggle="modal" data-target="#TAC">Terms and Conditions</a>
            </label>
          </div>
        </div>
        <center><?php echo (($tmp = @$_smarty_tpl->tpl_vars['RECAPTCHA']->value)===null||$tmp==='' ? '' : $tmp);?>
</center>
      </div>
      <div class="panel-footer">
        <input type="submit" value="Register" class="btn btn-success btn-sm">
      </div>
    </form>
  </div>
</div>

<div class="modal fade" id="TAC" tabindex="-1" role="dialog" aria-labelledby="TACLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id="TACLabel">Terms and Conditions</h4>
        </div>
        <div class="modal-body">
          <?php echo $_smarty_tpl->getSubTemplate ("tac/content.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }} ?>
