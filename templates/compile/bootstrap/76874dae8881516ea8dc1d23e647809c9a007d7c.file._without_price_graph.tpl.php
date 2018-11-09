<?php /* Smarty version Smarty-3.1.16, created on 2018-02-18 05:30:29
         compiled from "/var/www/svarog/templates/bootstrap/dashboard/overview/_without_price_graph.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5858558935a8874c5dcc0b4-92805079%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76874dae8881516ea8dc1d23e647809c9a007d7c' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/dashboard/overview/_without_price_graph.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5858558935a8874c5dcc0b4-92805079',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a8874c5ddd222_02606446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a8874c5ddd222_02606446')) {function content_5a8874c5ddd222_02606446($_smarty_tpl) {?>          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-male fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">My Hashrate</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-hashrate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['hashrate'],"2");?>
</span>
                    <span class="overview-mhs"> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['personal'];?>
</span>
                    <br>
                    <span class="personal-hashrate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-users fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">Pool Hashrate</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-poolhashrate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['hashrate'],"2");?>
</span>
                    <span class="overview-mhs"> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['pool'];?>
</span>
                    <br>
                    <span class="pool-hashrate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
                <i class="fa fa-share-square fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">My Sharerate</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-sharerate"><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['userdata']['sharerate'],"2");?>
</span>
                    <span class="overview-mhs"> S/s</span>
                    <br>
                    <span class="personal-sharerate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
               <i class="fa fa-truck fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">Pool Workers</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-poolworkers"><?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['workers'];?>
</span>
                    <br>
                    <span class="pool-workers-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-spark-2 col-sm-6">
            <div class="circle-tile fade">
              <div class="circle-tile-heading lightblue">
               <i class="fa fa-h-square fa-fw fa-2x"></i>
              </div>
              <div class="circle-tile-content lightblue">
                <div class="circle-tile-description text-faded">
                  <p class="h5 up-more">Net Hashrate</p>
                  <div class="circle-tile-number text-faded up">
                    <span class="overview" id="b-nethashrate"><?php if ($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate']>0) {?><?php echo number_format($_smarty_tpl->tpl_vars['GLOBAL']->value['nethashrate'],"2");?>
<?php } else { ?>n/a<?php }?></span>
                    <span class="overview-mhs"> <?php echo $_smarty_tpl->tpl_vars['GLOBAL']->value['hashunits']['network'];?>
</span>
                    <br>
                    <span class="pool-nethashrate-bar spark-18"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
<?php }} ?>
