<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:30:29
         compiled from "/var/www/svarog/templates/bootstrap/dashboard/overview/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10172134785a8874c5dc46c3-86761344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a889d9c334d4b42e1ff2d5f816eaf36bfeefdd9' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/dashboard/overview/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10172134785a8874c5dc46c3-86761344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874c5dca361_03361199',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874c5dca361_03361199')) {function content_5a8874c5dca361_03361199($_smarty_tpl) {?>  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <i class="fa fa-dot-circle-o fa-fw"></i> Pool Information
        </h4>
      </div>
      <div class="panel-footer">
       <div class="row">
          
          <?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['price']['enabled']) {?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview/_with_price_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php } else { ?>
          <?php echo $_smarty_tpl->getSubTemplate ("dashboard/overview/_without_price_graph.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

          <?php }?>
       </div>
      </div>
    </div>
  </div>
<?php }} ?>
