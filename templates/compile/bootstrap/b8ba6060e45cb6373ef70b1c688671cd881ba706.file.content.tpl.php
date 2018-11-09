<?php /* Smarty version Smarty-3.1.16, created on 2018-02-17 18:27:16
         compiled from "/var/www/svarog/templates/bootstrap/tac/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17628759495a887404b76ee1-03192713%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8ba6060e45cb6373ef70b1c688671cd881ba706' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/tac/content.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17628759495a887404b76ee1-03192713',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a887404b7d277_12747642',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a887404b7d277_12747642')) {function content_5a887404b7d277_12747642($_smarty_tpl) {?><p>This Agreement governs your use of <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'];?>
.</p>
<ul>
  <li>By using any of the Pools or registering an account on the website, you agree to be bound by the terms and conditions below. If you do not agree with the terms and conditions in this Agreement you may not use the Pool.</li>
  <li>The <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['website']['name'];?>
 staff may modify this Agreement and any policies affecting the Site at any point of time. Such modification is effective immediately upon posting to the website and will be distribution via email, forum post and a link in chat. Your continued use of the Pool following any modification to this Agreement shall be deemed an acceptance of all modifications.</li>
  <li>The Pool rewards miners according to a <strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['payout_system'], 'UTF-8');?>
</strong> system with <strong><?php echo mb_strtoupper($_smarty_tpl->tpl_vars['GLOBAL']->value['fees'], 'UTF-8');?>
%</strong> fee. The fee may change at any time, but notice will be given before doing so. Any fee change will be communicated through the pools news page.</li>
  <li>The Pool is not an e-wallet or a bank for your coins. The Pool and it's operators are not responsible for any loss of coins which are stored on the Pool. It is your responsibility to configure your account so that the coins you mine are regularly transferred to your own secured offline wallet.</li>
  <li>The uptime of the pool or website is not guaranteed, maintenance and downtime may be required at times. Users are responsible for configuring their miners so that they will automatically reconnect, switch to all the pools we offer or a backup pool in the case of downtime.</li>
  <li>Botnets are not welcome. Accounts with a large amount of miners connecting from different IPs may be suspended without prior notice. If we are uncertian then an investigation will be opened and the user will be notified via their configured e-mail address. If we do not receive a response your account may be suspended.</li>
  <li>Multiple accounts controlled by one person may be considered as a botnet and an investigation will be opened, see above point.</li>
</ul><?php }} ?>
