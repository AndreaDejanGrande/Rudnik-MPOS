<?php /* Smarty version Smarty-3.1.16, created on 2018-02-19 05:15:40
         compiled from "/var/www/svarog/templates/bootstrap/statistics/graphs/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2619977685a89c2cc1fa4b1-78660247%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '417f47eb31933c8840d76751d62ac0988c2da5ae' => 
    array (
      0 => '/var/www/svarog/templates/bootstrap/statistics/graphs/default.tpl',
      1 => 1518889200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2619977685a89c2cc1fa4b1-78660247',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'YOURMININGSTATS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5a89c2cc20c532_48008309',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a89c2cc20c532_48008309')) {function content_5a89c2cc20c532_48008309($_smarty_tpl) {?><script>
$(function () {
  var hashChart = Morris.Line({
    element: 'hashrate-area-chart',
    data: <?php echo $_smarty_tpl->tpl_vars['YOURMININGSTATS']->value;?>
,
    xkey: 'time',
    ykeys: ['hashrate'],
    labels: ['Hashrate'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });

  var workersChart = Morris.Line({
    element: 'workers-area-chart',
    data: <?php echo $_smarty_tpl->tpl_vars['YOURMININGSTATS']->value;?>
,
    xkey: 'time',
    ykeys: ['workers'],
    labels: ['Workers'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });

  var shareCharts= Morris.Line({
    element: 'sharerate-area-chart',
    data: <?php echo $_smarty_tpl->tpl_vars['YOURMININGSTATS']->value;?>
,
    xkey: 'time',
    ykeys: ['sharerate'],
    labels: ['Sharerate'],
    pointSize: 1,
    hideHover: 'auto',
    resize: true,
    fillOpacity: 1.00,
    lineColors: ['#24A665'],
    pointFillColors: ['#24A665'],
    pointStrokeColors: ['#24A665']
  });
});
</script>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Hashrate past 24h
      </div>
      <div class="panel-body">
        <div id="hashrate-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your average hashrate per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Workers past 24h
      </div>
      <div class="panel-body">
        <div id="workers-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your average active workers per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-info">
      <div class="panel-heading">
        <i class="fa fa-signal fa-fw"></i> Average Sharerate past 24h
      </div>
      <div class="panel-body">
        <div id="sharerate-area-chart"></div>
      </div>
      <div class="panel-footer">
        Your share rate per hour, updated every backend cron run.
      </div>
    </div>
  </div>
</div>
<?php }} ?>
