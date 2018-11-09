<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 02:49:35
         compiled from "/var/www/svarog/templates/bootstrap/account/edit/detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6170871715a89a08f370621-00970458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cccf579082c2e76300b76cacb4a035467b0ade34' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/edit/detail.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6170871715a89a08f370621-00970458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'GLOBAL' => 0,
    'DETAILSUNLOCKED' => 0,
    'TIMEZONES' => 0,
    'DONATE_THRESHOLD' => 0,
    'DETAILSSENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89a08f3bfed5_17780407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89a08f3bfed5_17780407')) {function content_5a89a08f3bfed5_17780407($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.html_options.php';
?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post" role="form">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="do" value="updateAccount">
  <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
  <div class="col-lg-6">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-edit fa-fw"></i> Account Details
      </div>
      <div class="panel-body">
        <div class="row">
          <div class="col-lg-12">
            <div class="form-group">
              <label>Username</label>
              <input class="form-control" type="text" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['username'], ENT_QUOTES, 'UTF-8', true);?>
" disabled />
            </div>
            <div class="form-group">
              <label>User Id</label>
              <input class="form-control" type="text" value="<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
" disabled />
            </div>
            <?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?>
            <div class="form-group">
              <label>API Key</label>
              <br>
              <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getuserstatus&api_key=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
&id=<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
</a>
            </div>
            <?php }?>
            <div class="form-group">
              <label>E-Mail</label>
              <input class="form-control" type="text" name="email" value="hidden" size="20" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
            </div>
            <div class="form-group">
              <label>Timezone</label>
              
              <select class="form-control select-mini" name="timezone" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>>
                <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TIMEZONES']->value,'selected'=>$_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['timezone']),$_smarty_tpl);?>

              </select>
              
            </div>
            <div class="form-group">
              <label>Payment Address</label>
              <input class="form-control" type="text" name="paymentAddress" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['paymentAddress'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['coin_address'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="40" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
            </div>
            <div class="form-group">
              <label>Donation Percentage</label>
              <font size="1"> Donation amount in percent (<?php echo $_smarty_tpl->tpl_vars['DONATE_THRESHOLD']->value['min'];?>
 - 100%)</font>
              <input class="form-control" type="text" name="donatePercent" value="<?php echo number_format(htmlspecialchars((($tmp = @$_REQUEST['donatePercent'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['donate_percent'] : $tmp), ENT_QUOTES, 'UTF-8', true),"2");?>
" size="4" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
            </div>
            <div class="form-group">
              <label>Automatic Payout Threshold</label>
              </br>
              <font size="1"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['min']<0.0001) {?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['min'],"8");?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['min'];?>
<?php }?> - <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max']<0.0001) {?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max'],"8");?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max'];?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
. Set to '0' for no auto payout.<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto']>0) {?> A <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'],"8");?>
<?php }?> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'];?>
 TX fee will apply <span id="tt"><img width="15px" height="15px" title="This <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto']>0.00001) {?><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'];?>
<?php } else { ?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['txfee_auto'],"8");?>
<?php }?> automatic payment transaction fee is a network fee and goes back into the network not the pool." src="site_assets/bootstrap/images/questionmark.png"></span><?php }?></font>
              </br>
              <input class="form-control" type="text" name="payoutThreshold" value="<?php echo htmlspecialchars((($tmp = @$_REQUEST['payoutThreshold'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['ap_threshold'] : $tmp), ENT_QUOTES, 'UTF-8', true);?>
" size="<?php echo strlen($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max'])+4;?>
" maxlength="<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max']<1) {?>10<?php } else { ?><?php echo strlen($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['ap_threshold']['max']);?>
<?php }?>" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
            </div>
            <div class="form-group">
              <label>Anonymous Account</label>
              <input type="hidden" name="is_anonymous" value="0" />
              <input type="checkbox" class="switch" data-size="mini"  name="is_anonymous" id="is_anonymous" value="1" <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['is_anonymous']) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']&&!$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value) {?>id="disabledInput" disabled<?php }?>/>
              </br>
              <font size="1">Hide username on website from others. Admins can still get your user information.</font>
            </div>
            <div class="form-group">
              <label>4 Digit PIN</label>
              <font size="1">The 4 digit PIN you chose when registering</font>
              <input class="form-control" type="password" name="authPin" size="4" maxlength="4">
            </div>
          </div>
        </div>
      </div>
      <div class="panel-footer">
      
      <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
      <input type="hidden" name="ea_token" value="<?php echo (($tmp = @htmlspecialchars($_REQUEST['ea_token'], ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
">
      <input type="hidden" name="utype" value="account_edit">
      <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['enabled']&&$_smarty_tpl->tpl_vars['GLOBAL']->value['twofactor']['options']['details']) {?>
      <?php if ($_smarty_tpl->tpl_vars['DETAILSSENT']->value==1&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==1) {?>
      <input type="submit" value="Update Account" class="btn btn-success btn-sm">
      <?php } elseif ($_smarty_tpl->tpl_vars['DETAILSSENT']->value==0&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==1||$_smarty_tpl->tpl_vars['DETAILSSENT']->value==1&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==0) {?>
      <input type="submit" value="Update Account" class="btn btn-danger btn-sm" disabled>
      <?php } elseif ($_smarty_tpl->tpl_vars['DETAILSSENT']->value==0&&$_smarty_tpl->tpl_vars['DETAILSUNLOCKED']->value==0) {?>
      <input type="submit" value="Unlock" class="btn btn-warning btn-sm" name="unlock">
      <?php }?>
      <?php } else { ?>
      <input type="submit" value="Update Account" class="btn btn-success btn-sm">
      <?php }?>
      
      </div>
    </div>
  </div>
</form>
<?php }} ?>
