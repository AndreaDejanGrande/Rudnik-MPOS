<?php /* Smarty version Smarty-3.1.16, created on 2018-02-27 16:22:13
         compiled from "/var/www/svarog/templates/bootstrap/admin/reports/earnings_control.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19253102745a9577a5dd33b6-44425939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '208bf5bb456ddbdf48a86398bc500b5756844822' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/admin/reports/earnings_control.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19253102745a9577a5dd33b6-44425939',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CTOKEN' => 0,
    'REPORTDATA' => 0,
    'BLOCKLIMIT' => 0,
    'USERID' => 0,
    'FILTER' => 0,
    'USERLIST' => 0,
    'HEIGHT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a9577a5e17fb6_60698459',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a9577a5e17fb6_60698459')) {function content_5a9577a5e17fb6_60698459($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/var/www/svarog/public/../include/smarty/libs/plugins/function.html_options.php';
?><form action="<?php echo $_SERVER['SCRIPT_NAME'];?>
" method="post" role="form">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars(htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars(htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="ctoken" value="<?php echo (($tmp = @htmlspecialchars($_smarty_tpl->tpl_vars['CTOKEN']->value, ENT_QUOTES, 'UTF-8', true))===null||$tmp==='' ? '' : $tmp);?>
" />
  <div class="row">
    <div class="col-lg-12">
      <div class="panel panel-info">
        <div class="panel-heading">
          Earnings Information
        </div>
        <div class="panel-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <td colspan="4">
                    <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php if (is_array($_smarty_tpl->tpl_vars['REPORTDATA']->value)&&count($_smarty_tpl->tpl_vars['REPORTDATA']->value)>($_smarty_tpl->tpl_vars['BLOCKLIMIT']->value-1)) {?><?php echo $_smarty_tpl->tpl_vars['REPORTDATA']->value[$_smarty_tpl->tpl_vars['BLOCKLIMIT']->value-1]['height'];?>
<?php }?>&prev=1&limit=<?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
&filter=<?php echo $_smarty_tpl->tpl_vars['FILTER']->value;?>
"<i class="fa fa-chevron-left fa-fw"></i></a>
                    <a href="<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
&action=<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
&height=<?php if (is_array($_smarty_tpl->tpl_vars['REPORTDATA']->value)&&count($_smarty_tpl->tpl_vars['REPORTDATA']->value)>0) {?><?php echo $_smarty_tpl->tpl_vars['REPORTDATA']->value[0]['height'];?>
<?php }?>&next=1&limit=<?php echo $_smarty_tpl->tpl_vars['BLOCKLIMIT']->value;?>
&id=<?php echo $_smarty_tpl->tpl_vars['USERID']->value;?>
&filter=<?php echo $_smarty_tpl->tpl_vars['FILTER']->value;?>
"><i class="fa fa-chevron-right fa-fw pull-right"></i></a>
                  </td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="form-group">
                      <label>Select User</label>
                      <?php echo smarty_function_html_options(array('class'=>"form-control select-mini",'name'=>"id",'options'=>$_smarty_tpl->tpl_vars['USERLIST']->value,'selected'=>(($tmp = @$_smarty_tpl->tpl_vars['USERID']->value)===null||$tmp==='' ? "0" : $tmp)),$_smarty_tpl);?>

                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <label>Block Limit</label>
                      <input size="10" class="form-control" type="text" name="limit" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['BLOCKLIMIT']->value)===null||$tmp==='' ? "20" : $tmp);?>
" />
                    </div>
                  </td>
                    <td>
                      <div class="form-group">
                      <label>Starting block height</label>
                      <input type="text" class="form-control" name="search" value="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['HEIGHT']->value)===null||$tmp==='' ? "%" : $tmp);?>
">
                    </div>
                  </td>
                  <td>
                    <div class="form-group">
                      <label>Show empty rounds</label>
                      <br>
                      <input type="hidden" name="filter" value="0" />
                      <input type="checkbox" data-size="small"  name="filter" id="filter" value="1" <?php if ($_smarty_tpl->tpl_vars['FILTER']->value) {?>checked<?php }?>/>
                      <script>
                      $("[id='filter']").bootstrapSwitch();
                      </script>
                    </div>
                  </td>
                </tbody>
              </table>
            </div>
          </div>
          <div class="panel-footer">
            <input type="submit" value="Submit" class="btn btn-success btn-sm">
          </div>
        </div>
      </div>
    </div>
  </form>
<?php }} ?>
