<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 12:37:24
         compiled from "/var/www/svarog/templates/bootstrap/account/qrcode/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14316976095a8a2a54abb2d8-27749010%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b40523b02f3dd3a055514c06fd284aba9fcb6d44' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/account/qrcode/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14316976095a8a2a54abb2d8-27749010',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
    'PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8a2a54c2c685_27333425',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8a2a54c2c685_27333425')) {function content_5a8a2a54c2c685_27333425($_smarty_tpl) {?><?php if (!$_smarty_tpl->tpl_vars['GLOBAL']->value['website']['api']['disabled']) {?>
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/jquery.qrcode.min.js"></script>
<script type="text/javascript">
  
  $(document).ready(function(){
    $('#qrcodeholder').qrcode({
      text    : "|http<?php if ((($tmp = @$_SERVER['HTTPS'])===null||$tmp==='' ? "0" : $tmp)=='on') {?>s<?php }?>://<?php echo $_SERVER['SERVER_NAME'];?>
<?php if ($_SERVER['SERVER_PORT']!="443"&&$_SERVER['SERVER_PORT']!="80") {?>:<?php echo $_SERVER['SERVER_PORT'];?>
<?php }?><?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api|<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['api_key'];?>
|<?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['id'];?>
|<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['currency'], 'UTF-8');?>
|",
      render    : "canvas",  // 'canvas' or 'table'. Default value is 'canvas'
      background : "#ffffff",
      foreground : "#000000",
      width : 250,
      height: 250 
    });
  });
  
</script>
<div class="row">
  <div class="col-lg-4">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-qrcode fa-fw"></i> API String
      </div>
      <div class="panel-body text-center">
        <p>This code will allow you to import the full API string into your mobile application.</p>
        <div id="qrcodeholder"></div>
      </div>
    </div>
  </div>
</div>
<?php }?>
<?php }} ?>
