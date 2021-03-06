<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:22:22
  from "/app/styles/templates/game/page.fleetTable.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63428eb11cd6_96403811',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '91088ffc8a9705071e141db5ab106e639fe79744' => 
    array (
      0 => '/app/styles/templates/game/page.fleetTable.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    'de558ab7dc06c0b0c209ef914c586edd163f41ac' => 
    array (
      0 => '/app/styles/templates/game/page.fleetTable.default.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'caea3f24967636c87bbedef30411d2617fcdf5c6' => 
    array (
      0 => '/app/styles/templates/game/layout.full.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'fdc1391b0ab7b521d14da1a048771b4f41e05477' => 
    array (
      0 => '/app/styles/templates/game/main.header.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '3656a4034d5586e57c8cab9755b4109091627cf1' => 
    array (
      0 => '/app/styles/templates/game/main.navigation.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '8cc530df2d91f6fd4fe06782e8b5690519815d2f' => 
    array (
      0 => '/app/styles/templates/game/main.topnav.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 604800,
),true)) {
function content_5a63428eb11cd6_96403811 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) require_once '/app/includes/libs/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title>Fleet - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "Ready";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Info";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"] 
	var months 		= ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
	var isPlayerCardActive	= "<?php echo json_encode($_smarty_tpl->tpl_vars['isPlayerCardActive']->value);?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scripts']->value, 'scriptname');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->value) {
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<script src="scripts/game/fleetTable.js"></script>
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="fleetTable" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value) {?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog">Changelog</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview">Overview</a></li>
		<li><a href="game.php?page=imperium">Empire</a></li>		<li><a href="game.php?page=research">Research</a></li>		<li><a href="game.php?page=buildings">Buildings</a></li>		<li><a href="game.php?page=shipyard&amp;mode=fleet">Hangar</a></li>		<li><a href="game.php?page=shipyard&amp;mode=defense">Defenses</a></li>		<li><a href="game.php?page=officier">Officers</a></li>		<li><a href="game.php?page=trader">Market</a></li>		<li><a href="game.php?page=fleetDealer">Merchant of Fleets</a></li>		<li><a href="game.php?page=fleetTable">Fleet</a></li>		<li><a href="game.php?page=techtree">Technologies</a></li>		<li><a href="game.php?page=resources">Resources</a></li>		<li class="menucat2-head"></li>
		<li><a href="game.php?page=galaxy">Galaxy</a></li>		<li><a href="game.php?page=alliance">Alliance</a></li>        <?php if (!empty($_smarty_tpl->tpl_vars['hasBoard']->value)) {?><li><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a></li><?php }?>
		<li><a href="game.php?page=statistics">Statistics</a></li>		<li><a href="game.php?page=records">Records</a></li>		<li><a href="game.php?page=battleHall">Hall of Fame</a></li>		<li><a href="game.php?page=search">Search</a></li>		<li><a href="game.php?page=chat">Chat</a></li>		<li><a href="game.php?page=ticket">Support</a></li>		<li><a href="game.php?page=questions">FAQ</a></li>
		<li><a href="game.php?page=banList">Banned</a></li>		<li><a href="index.php?page=rules" target="rules">Rules</a></li>
		<li><a href="game.php?page=battleSimulator">Simulator</a></li>
		<li class="menucat3-head"></li>
		<li><a href="game.php?page=messages">Messages<?php if ($_smarty_tpl->tpl_vars['new_message']->value > 0) {?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></li>		<li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);">Notes</a></li>		<li><a href="game.php?page=buddyList">Friendships</a></li>		<li><a href="game.php?page=settings">Options</a></li>
		<li><a href="game.php?page=logout">Logout</a></li>
		<?php if ($_smarty_tpl->tpl_vars['authlevel']->value > 0) {?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_administration'];?>
 (<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
)</a></li><?php }?>
		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank">Credits</a></div>
</div>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PlanetSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['current_pid']->value),$_smarty_tpl);?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
.gif" alt=""></td>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['resourceID']->value];?>
</td>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<?php if ($_smarty_tpl->tpl_vars['shortlyNumber']->value) {?>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current'])) {?>
									<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['resourceData']) ? $_smarty_tpl->tpl_vars['resourceData']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['current'] = $_smarty_tpl->tpl_vars['resourceData']->value['max']+$_smarty_tpl->tpl_vars['resourceData']->value['used'];
$_smarty_tpl->_assignInScope('resourceData', $_tmp_array ,true);
?>
									<td class="res_current tooltip" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
"><span<?php if ($_smarty_tpl->tpl_vars['resourceData']->value['current'] < 0) {?> style="color:red"<?php }?>><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</span></td>
									<?php } else { ?>
									<td class="res_current tooltip" id="current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current']) || !isset($_smarty_tpl->tpl_vars['resourceData']->value['max'])) {?>
									<td>&nbsp;</td>
									<?php } else { ?>
									<td class="res_max tooltip" id="max_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['max'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<?php } else { ?>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current'])) {?>
									<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['resourceData']) ? $_smarty_tpl->tpl_vars['resourceData']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['current'] = $_smarty_tpl->tpl_vars['resourceData']->value['max']+$_smarty_tpl->tpl_vars['resourceData']->value['used'];
$_smarty_tpl->_assignInScope('resourceData', $_tmp_array ,true);
?>
									<td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['resourceData']->value['current'] < 0) {?> style="color:red"<?php }?>><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</span></td>
									<?php } else { ?>
									<td class="res_current" id="current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current']) || !isset($_smarty_tpl->tpl_vars['resourceData']->value['max'])) {?>
									<td>&nbsp;</td>
									<?php } else { ?>
									<td class="res_max" id="max_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<?php }?>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php if (!$_smarty_tpl->tpl_vars['vmode']->value) {?>
		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo json_encode($_smarty_tpl->tpl_vars['shortlyNumber']->value);?>
;
		var vacation			= <?php echo $_smarty_tpl->tpl_vars['vmode']->value;?>
;
        $(function() {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
		<?php if (isset($_smarty_tpl->tpl_vars['resourceData']->value['production'])) {?>
            resourceTicker({
                available: <?php echo json_encode($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
,
                limit: [0, <?php echo json_encode($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
],
                production: <?php echo json_encode($_smarty_tpl->tpl_vars['resourceData']->value['production']);?>
,
                valueElem: "current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
"
            }, true);
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        });
		</script>
        <script src="scripts/game/topnav.js"></script>
        <?php if ($_smarty_tpl->tpl_vars['hasGate']->value) {?><script src="scripts/game/gate.js"></script><?php }?>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['closed']->value) {?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_closed'];?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['delete']->value) {?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['vacation']->value) {?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tn_vacation_mode'];?>
 <?php echo $_smarty_tpl->tpl_vars['vacation']->value;?>
</div>
	<?php }?>
<div id="content">
<table style="width:760px;">
	<tr>
		<th colspan="9">
			<div class="transparent" style="text-align:left;float:left;">Fleet <?php echo $_smarty_tpl->tpl_vars['activeFleetSlots']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxFleetSlots']->value;?>
</div>
			<div class="transparent" style="text-align:right;float:right;"><?php echo $_smarty_tpl->tpl_vars['activeExpedition']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['maxExpedition']->value;?>
 expedition</div>
		</th>
	</tr>
	<tr>
		<td>ID</td>
		<td>Mission</td>
		<td>Number</td>
		<td>Start</td>
		<td>Arrival(Destination)</td>
		<td>Destination</td>
		<td>Arrival(Back)</td>
		<td>Objective</td>
		<td>Order</td>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FlyingFleetList']->value, 'FlyingFleetRow', false, NULL, 'FlyingFleets', array (
  'iteration' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FlyingFleetRow']->value) {
$_smarty_tpl->tpl_vars['__smarty_foreach_FlyingFleets']->value['iteration']++;
?>
	<tr>
	<td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_FlyingFleets']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_FlyingFleets']->value['iteration'] : null);?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_".((string)$_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission'])];?>

	<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state'] == 1) {?>
		<br><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_returning'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_r'];?>
</a>
	<?php } else { ?>
		<br><a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_onway'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_a'];?>
</a>
	<?php }?>
	</td>
	<td><a class="tooltip_sticky" data-tooltip-content="<table width='100%'><tr><th colspan='2' style='text-align:center;'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_info_detail'];?>
</th></tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['FleetList'], 'shipCount', false, 'shipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['shipID']->value => $_smarty_tpl->tpl_vars['shipCount']->value) {
?><tr><td class='transparent'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['shipID']->value];?>
:</td><td class='transparent'><?php echo $_smarty_tpl->tpl_vars['shipCount']->value;?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</table>"><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['amount'];?>
</a></td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startGalaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startSystem'];?>
">[<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startGalaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startSystem'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startPlanet'];?>
]</a></td>
	<td<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state'] == 0) {?> style="color:lime"<?php }?>><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['startTime'];?>
</td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endGalaxy'];?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endSystem'];?>
">[<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endGalaxy'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endSystem'];?>
:<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endPlanet'];?>
]</a></td>
	<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission'] == 4 && $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state'] == 0) {?>
	<td>-</td>
	<?php } else { ?>
	<td<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state'] != 0) {?> style="color:lime"<?php }?>><?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['endTime'];?>
</td>
	<?php }?>
	<td id="fleettime_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_FlyingFleets']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_FlyingFleets']->value['iteration'] : null);?>
" class="fleets" data-fleet-end-time="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['returntime'];?>
" data-fleet-time="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['resttime'];?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['resttime'];
$_prefixVariable1=ob_get_clean();
echo pretty_fly_time($_prefixVariable1);?>
</td>
	<td>
	<?php if (!$_smarty_tpl->tpl_vars['isVacation']->value && $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['state'] != 1) {?>
		<form action="game.php?page=fleetTable&amp;action=sendfleetback" method="post">
		<input name="fleetID" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden">
		<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_send_back'];?>
" type="submit">
		</form>
		<?php if ($_smarty_tpl->tpl_vars['FlyingFleetRow']->value['mission'] == 1) {?>
		<form action="game.php?page=fleetTable&amp;action=acs" method="post">
		<input name="fleetID" value="<?php echo $_smarty_tpl->tpl_vars['FlyingFleetRow']->value['id'];?>
" type="hidden">
		<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_acs'];?>
" type="submit">
		</form>
		<?php }?>
	<?php } else { ?>
	&nbsp;-&nbsp;
	<?php }?>
	</td>
	</tr>
	<?php
}
} else {
?>

	<tr>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php if ($_smarty_tpl->tpl_vars['maxFleetSlots']->value == $_smarty_tpl->tpl_vars['activeFleetSlots']->value) {?>
	<tr><td colspan="9"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_more_slots'];?>
</td></tr>
	<?php }?>
</table>
<?php if (!empty($_smarty_tpl->tpl_vars['acsData']->value)) {
$_smarty_tpl->_subTemplateRender("file:shared.fleetTable.acsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }?>
<form action="?page=fleetStep1" method="post">
<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['targetGalaxy']->value;?>
">
<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['targetSystem']->value;?>
">
<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->tpl_vars['targetPlanet']->value;?>
">
<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['targetType']->value;?>
">
<input type="hidden" name="target_mission" value="<?php echo $_smarty_tpl->tpl_vars['targetMission']->value;?>
">
<table class="table519">
	<tr>
		<th colspan="4">New mission: Select fleet</th>
	</tr>
	<tr style="height:20px;">
		<td>Type of Ship</td>
		<td>Ships available</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FleetsOnPlanet']->value, 'FleetRow');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FleetRow']->value) {
?>
	<tr style="height:20px;">
		<td><?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed'] != 0) {?> <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_speed_title'];?>
 <?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['speed'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['FleetRow']->value['id']];?>
</a><?php } else {
echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['FleetRow']->value['id']];
}?></td>
		<td id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_value"><?php echo pretty_number($_smarty_tpl->tpl_vars['FleetRow']->value['count']);?>
</td>
		<?php if ($_smarty_tpl->tpl_vars['FleetRow']->value['speed'] != 0) {?>
		<td><a href="javascript:maxShip('ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
');"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_max'];?>
</a></td>
		<td><input name="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
" id="ship<?php echo $_smarty_tpl->tpl_vars['FleetRow']->value['id'];?>
_input" size="10" value="0"></td>
		<?php } else { ?>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<?php }?>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<tr style="height:20px;">
	<?php if (count($_smarty_tpl->tpl_vars['FleetsOnPlanet']->value) == 0) {?>
	<td colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_ships'];?>
</td>
	<?php } else { ?>
	<td colspan="2"><a href="javascript:noShips();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_remove_all_ships'];?>
</a></td>
	<td colspan="2"><a href="javascript:maxShips();"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_select_all_ships'];?>
</a></td>
	<?php }?>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['maxFleetSlots']->value != $_smarty_tpl->tpl_vars['activeFleetSlots']->value) {?>
	<tr style="height:20px;"><td colspan="4"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_continue'];?>
"></td>
	<?php }?>
</table>	
</form>
<br>
<table style="min-width:519px;width:519px;">
	<tr><th colspan="3">Bonus</th></tr>
	<tr><th style="width:33%">Weapons</th><th style="width:33%">Defense</th><th style="width:33%">Shield</th></tr>
	<tr><td>+<?php echo $_smarty_tpl->tpl_vars['bonusAttack']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusDefensive']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusShield']->value;?>
 %</td></tr>
	<tr><th style="width:33%">Combustion Engine</th><th style="width:33%">Impulse Engine</th><th style="width:33%">Hyperspace Engine</th></tr>
	<tr><td>+<?php echo $_smarty_tpl->tpl_vars['bonusCombustion']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusImpulse']->value;?>
 %</td><td>+<?php echo $_smarty_tpl->tpl_vars['bonusHyperspace']->value;?>
 %</td></tr>
</table>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cronjobs']->value, 'cronjob');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->value) {
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
