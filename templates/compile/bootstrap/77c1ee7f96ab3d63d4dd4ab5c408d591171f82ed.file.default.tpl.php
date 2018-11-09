<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 04:11:22
         compiled from "/var/www/svarog/templates/bootstrap/gettingstarted//default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10450610915a897cf9dd52d4-36650712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77c1ee7f96ab3d63d4dd4ab5c408d591171f82ed' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/gettingstarted//default.tpl',
      1 => 1518973879,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10450610915a897cf9dd52d4-36650712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a897cf9e17396_54940622',
  'variables' => 
  array (
    'GLOBAL' => 0,
    'SITESTRATUMURL' => 0,
    'SITESTRATUMPORT' => 0,
    'SITECOINNAME' => 0,
    'SITECOINURL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a897cf9e17396_54940622')) {function content_5a897cf9e17396_54940622($_smarty_tpl) {?> <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          <i class="fa fa-question fa-fw"></i> Getting Started Guide
        </div>
        <div class="panel-body">
        
    <p>1. <strong>Create account.</strong></p>
      <ul>
        <li>Register <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=register">here</a>, or login if you already have account</li>
        <li>Create a <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">worker</a> that will be used by the miner to login</li>
      </ul>
    </li>
    <p>2. <strong>Download a miner.</strong></p>
      <ul>
        <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='sha256d') {?>
        <li><em>Intel/ATI/AMD CGMiner Windows:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2-windows.zip" target="_blank">Download here</a></li>
        <li><em>Intel/ATI/AMD CGMiner Linux:</em> <a href="http://ck.kolivas.org/apps/cgminer/cgminer-4.2.2.tar.bz2" target="_blank">Download Here</a></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['algorithm']=='scrypt') {?>
	<li><em>Svarog Miner (vCrypt CPU software) Windows:</em> <a href="https://github.com/AndreaDejanGrande/Svarog/releases/download/v1.0/svarog-win32-v1-0.zip" target="_blank">download here (v1.0)</a></li>	
	<li><em>Svarog Miner (vCrypt CPU software) Linux:</em> <a href="https://github.com/AndreaDejanGrande/Svarog" target="_blank">source code</a></li>	
	<?php }?>
      </ul>
    </li>
    <p>3. <strong>Configure your miner.</strong></p>
    <ul>
      <p>If you're using Linux, Then type the following into the console:</p>
      <li>Svarog Miner</li>
      <pre>./minerd -a vcrypt -o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
      <br />
	  <p> If you want to mine on a <strong> Windows Operating System</strong>, then you'll need to create a batch file to start your miner. </p><p> Simply open notepad and then copy and paste the following:</p>
      <li>Svarog Miner</li>
      <pre>minerd -a vcrypt -t 6 -s 4 -o stratum+tcp://<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMURL']->value)===null||$tmp==='' ? $_SERVER['SERVER_NAME'] : $tmp);?>
:<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITESTRATUMPORT']->value)===null||$tmp==='' ? "3333" : $tmp);?>
 -u <em>Weblogin</em>.<em>WorkerName</em> -p <em>WorkerPassword</em></pre>
	  <br />
	  <p> You then need to change "-u Weblogin.Worker -p Worker password" to reflect your own account. Eg, "-u Steve.StevesWorker -p StevesWorkerPassword" then go to "File > Save as" and save the file as "RunMe.bat" in the same folder containing your miners application files. You are now ready to mine, double click on "RunMe.bat" to start mining. If you want, you can create additional workers with usernames and passwords of your choice <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=account&action=workers">here</a></p>
    </ul>
    <p>4. <strong>Create a <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 address to receive payments.</strong></p>
      <ul>
        <li> Downloading the client &amp; block chain: 	Download the <?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINNAME']->value)===null||$tmp==='' ? "Litecoin" : $tmp);?>
 client from <a href="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['SITECOINURL']->value)===null||$tmp==='' ? "http://www.litecoin.org" : $tmp);?>
" target="_blank">here</a>.
          <p>Generate a new address and input it on your account page to receive payments.</p>
        </li>
      </ul>
    </li>
        </div>
      </div>
    </div>
    <!-- /.col-lg-12 -->
  </div>
<?php }} ?>
