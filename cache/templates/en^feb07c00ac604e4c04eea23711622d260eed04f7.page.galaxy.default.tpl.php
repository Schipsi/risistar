<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:22:19
  from "/app/styles/templates/game/page.galaxy.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63428b8512e7_94239015',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '007765d2e4ebc8a67b9c904185f93579810e77d3' => 
    array (
      0 => '/app/styles/templates/game/page.galaxy.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    'd0e139b3bf8879a2d5db25780513438cdf86d5b9' => 
    array (
      0 => '/app/styles/templates/game/page.galaxy.default.tpl',
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
function content_5a63428b8512e7_94239015 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>Galaxy - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
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

	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="galaxy" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
	<form action="?page=galaxy" method="post" id="galaxy_form">
	<input type="hidden" id="auto" value="dr">
	<table style="min-width:324px;width:324px;">
		<tr>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3">Galaxy</th>
					</tr>
					<tr>
						<td><input type="button" name="galaxyLeft" value="&lt;-" onclick="galaxy_submit('galaxyLeft')"></td>
						<td><input type="text" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
" size="5" maxlength="3" tabindex="1"></td>
						<td><input type="button" name="galaxyRight" value="-&gt;" onclick="galaxy_submit('galaxyRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3">System</th>
					</tr>
					<tr>
						<td><input type="button" name="systemLeft" value="&lt;-" onclick="galaxy_submit('systemLeft')"></td>
						<td><input type="text" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
" size="5" maxlength="3" tabindex="2"></td>
						<td><input type="button" name="systemRight" value="-&gt;" onclick="galaxy_submit('systemRight')"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="background-color:transparent;border:0px;" colspan="2"> 
				<input type="submit" value="View">
			</td>
		</tr>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['action']->value == 'sendMissle') {?>
    <form action="?page=fleetMissile" method="post">
	<input type="hidden" name="galaxy" value="<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
">
	<input type="hidden" name="system" value="<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
">
	<input type="hidden" name="planet" value="<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
">
	<input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
	<table class="table569">
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th>
		</tr>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['missile_count']->value;?>
 <input type="text" name="SendMI" size="2" maxlength="7"></td>
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_objective'];?>
: 
				<?php echo smarty_function_html_options(array('name'=>'Target','options'=>$_smarty_tpl->tpl_vars['missileSelector']->value),$_smarty_tpl);?>

			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align:center;"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missil_launch_action'];?>
"></th>
		</tr>
	</table>
	</form>
    <?php }?>
	<table class="table569">
    <tr>
		<th colspan="8">System <?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
</th>
	</tr>
	<tr>
		<th style="white-space: nowrap">Pos.</th>
		<th style="white-space: nowrap">Planet</th>
		<th style="white-space: nowrap">Name (Activity)</th>
		<th style="white-space: nowrap">Moon</th>
		<th style="white-space: nowrap">Debris</th>
		<th style="white-space: nowrap">Player (State)</th>
		<th style="white-space: nowrap">Alliance</th>
		<th style="white-space: nowrap">Actions</th>
	</tr>
    <?php
$_smarty_tpl->tpl_vars['planet'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['planet']->step = 1;$_smarty_tpl->tpl_vars['planet']->total = (int) ceil(($_smarty_tpl->tpl_vars['planet']->step > 0 ? $_smarty_tpl->tpl_vars['max_planets']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['max_planets']->value)+1)/abs($_smarty_tpl->tpl_vars['planet']->step));
if ($_smarty_tpl->tpl_vars['planet']->total > 0) {
for ($_smarty_tpl->tpl_vars['planet']->value = 1, $_smarty_tpl->tpl_vars['planet']->iteration = 1;$_smarty_tpl->tpl_vars['planet']->iteration <= $_smarty_tpl->tpl_vars['planet']->total;$_smarty_tpl->tpl_vars['planet']->value += $_smarty_tpl->tpl_vars['planet']->step, $_smarty_tpl->tpl_vars['planet']->iteration++) {
$_smarty_tpl->tpl_vars['planet']->first = $_smarty_tpl->tpl_vars['planet']->iteration == 1;$_smarty_tpl->tpl_vars['planet']->last = $_smarty_tpl->tpl_vars['planet']->iteration == $_smarty_tpl->tpl_vars['planet']->total;?>
	<tr>
    <?php if (!isset($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value])) {?>
		<td>
			<a href="?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=7"><?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
</a>
		</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php } elseif ($_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value] === false) {?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <td></td>
        <td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet_destroyed'];?>
</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php } else { ?>
		<td>
			<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>

		</td>
        <?php $_smarty_tpl->_assignInScope('currentPlanet', $_smarty_tpl->tpl_vars['GalaxyRows']->value[$_smarty_tpl->tpl_vars['planet']->value] ,true);
?>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:220px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg' height='75' width='75'></td><td><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]) {?><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_6"];?>
</a><br><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['phalanx']) {?><a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_phalanx'];?>
</a><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]) {?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_1"];?>
</a><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]) {?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_5"];?>
</a><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][4]) {?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_4"];?>
</a><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]) {?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_3"];?>
</a><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]) {?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_10"];?>
</a><br><?php }?></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['image'];?>
.jpg" height="30" width="30" alt="">
			</a>
		</td>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['lastActivity'];?>
</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']) {?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/mond.jpg' height='75' width='75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_features'];?>
</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_diameter'];?>
</td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['diameter']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_temperature'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['temp_min'];?>
</td></tr><tr><th colspan=2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][1]) {?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=1'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_1"];?>
</a><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]) {?><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_3"];?>
</a><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][3]) {?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=4'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_4"];?>
</a><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][5]) {?><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=5'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_5"];?>
</a><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][6]) {?><br><a href='javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_6"];?>
</a><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][9]) {?><br><br><a href='?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=3&amp;target_mission=9'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_9"];?>
</a><br><?php }
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][10]) {?><a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=3'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_10"];?>
</a><br><?php }?></td></tr></table></td></tr></table>">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_mond.jpg" height="22" width="22" alt="<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['moon']['name'];?>
">
			</a>
			<?php }?>
		</td>
		<td style="white-space: nowrap;">
        <?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']) {?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_debris_field'];?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg' height='75' style='width:75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_resources'];?>
:</th></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][901];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['metal']);?>
</td></tr><tr><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][902];?>
: </td><td><?php echo pretty_number($_smarty_tpl->tpl_vars['currentPlanet']->value['debris']['crystal']);?>
</td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['missions'][8]) {?><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th></tr><tr><td colspan='2'><a href='javascript:doit(8, <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_mission_8"];?>
</a></td></tr><?php }?></table></td></tr></table>">
			<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/debris.jpg" height="22" width="22" alt="">
			</a>
        <?php }?>
		</td>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['playerrank'];?>
</th></tr><tr><?php if (!$_smarty_tpl->tpl_vars['currentPlanet']->value['ownPlanet']) {
if ($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['isBuddy']) {?><tr><td><a href='#' onclick='return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
</a></td></tr><?php }?><tr><td><a href='#' onclick='return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
);'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_playercard'];?>
</a></td></tr><?php }?><tr><td><a href='?page=statistics&amp;who=1&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['rank'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr></table>">
				<span class="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class'], 'class');
$_smarty_tpl->tpl_vars['class']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->index++;
$_smarty_tpl->tpl_vars['class']->first = !$_smarty_tpl->tpl_vars['class']->index;
$__foreach_class_0_saved = $_smarty_tpl->tpl_vars['class'];
if (!$_smarty_tpl->tpl_vars['class']->first) {?> <?php }?>galaxy-username-<?php echo $_smarty_tpl->tpl_vars['class']->value;
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 galaxy-username"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['username'];?>
</span>

				<?php if (!empty($_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class'])) {?>
				<span>(</span><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['class'], 'class');
$_smarty_tpl->tpl_vars['class']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->index++;
$_smarty_tpl->tpl_vars['class']->first = !$_smarty_tpl->tpl_vars['class']->index;
$__foreach_class_1_saved = $_smarty_tpl->tpl_vars['class'];
if (!$_smarty_tpl->tpl_vars['class']->first) {?>&nbsp;<?php }?><span class="galaxy-short-<?php echo $_smarty_tpl->tpl_vars['class']->value;?>
 galaxy-short"><?php echo $_smarty_tpl->tpl_vars['ShortStatus']->value[$_smarty_tpl->tpl_vars['class']->value];?>
</span><?php
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
<span>)</span>
				<?php }?>
			</a>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']) {?>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['name'];?>
 <?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['member'];?>
</th></tr><td><table><tr><td><a href='?page=alliance&amp;mode=info&amp;id=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_page'];?>
</a></td></tr><tr><td><a href='?page=statistics&amp;start=<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['rank'];?>
&amp;who=2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_see_on_stats'];?>
</a></td></tr><?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web']) {?><tr><td><a href='<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['web'];?>
' target='allyweb'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance_web_page'];?>
</td></tr><?php }?></table></td></table>">
				<span class="<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['class'], 'class');
$_smarty_tpl->tpl_vars['class']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['class']->value) {
$_smarty_tpl->tpl_vars['class']->index++;
$_smarty_tpl->tpl_vars['class']->first = !$_smarty_tpl->tpl_vars['class']->index;
$__foreach_class_2_saved = $_smarty_tpl->tpl_vars['class'];
if (!$_smarty_tpl->tpl_vars['class']->first) {?> <?php }?>galaxy-alliance-<?php echo $_smarty_tpl->tpl_vars['class']->value;
$_smarty_tpl->tpl_vars['class'] = $__foreach_class_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
 galaxy-alliance"><?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['alliance']['tag'];?>
</span>
			</a>
			<?php } else { ?>-<?php }?>
		</td>
		<td style="white-space: nowrap;">
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']) {?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['esp']) {?>
				<a href="javascript:doit(6,<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['id'];?>
,<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars['spyShips']->value), ENT_QUOTES, 'UTF-8', true);?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/e.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_spy'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['message']) {?>
				<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['write_message'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['buddy']) {?>
                <a href="#" onclick="return Dialog.Buddy(<?php echo $_smarty_tpl->tpl_vars['currentPlanet']->value['user']['id'];?>
)">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/b.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_buddy_request'];?>
" alt="">
				</a><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['action']['missle']) {?><a href="?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;type=1">
					<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/r.gif" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_missile_attack'];?>
" alt="">
				</a><?php }?>
			<?php } else { ?>-<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['currentPlanet']->value['planet']['phalanx']) {?><a class="textForBlind" href="#" onclick="OpenPopup('?page=phalanx&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
&amp;planettype=1','',640,510);return false;"><span><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_phalanx'];?>
</span></a><?php }?>
		</td>
	<?php }?>
	</tr>
	<?php }
}
?>

	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['max_planets']->value+1;?>
</td>
		<td colspan="7"><a href="?page=fleetTable&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
&amp;planet=<?php echo $_smarty_tpl->tpl_vars['max_planets']->value+1;?>
&amp;planettype=1&amp;target_mission=15">Deep area of galaxy</a></td>
	</tr>
	<tr>
		<td colspan="6">(<?php echo $_smarty_tpl->tpl_vars['planetcount']->value;?>
)</td>
		<td colspan="2">
			<a class="tooltip" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'>Legend</td></tr><tr><td style='width:220px'>Strong player</td><td><span class='galaxy-short-strong'>S</span></td></tr><tr><td style='width:220px'>Weak player</td><td><span class='galaxy-short-noob'>N</span></td></tr><tr><td style='width:220px'>Vacation mode</td><td><span class='galaxy-short-vacation'>VM</span></td></tr><tr><td style='width:220px'>Banned / Suspended</td><td><span class='galaxy-short-banned'>B</span></td></tr><tr><td style='width:220px'>7 Inactive days</td><td><span class='galaxy-short-inactive'>i</span></td></tr><tr><td style='width:220px'>28 Inactive days</td><td><span class='galaxy-short-longinactive'>I</span></td></tr></table>">Legend</a> 
		</td>
	</tr>
	<tr>
		<td colspan="3"><span id="missiles"><?php echo pretty_number($_smarty_tpl->tpl_vars['currentmip']->value);?>
</span> Available Missiles</td>
		<td colspan="5"><span id="slots"><?php echo $_smarty_tpl->tpl_vars['maxfleetcount']->value;?>
</span>/<?php echo $_smarty_tpl->tpl_vars['fleetmax']->value;?>
 Fleet Slots</td>
	</tr>
	<tr>
		<td colspan="3">
			<span id="elementID210"><?php echo pretty_number($_smarty_tpl->tpl_vars['spyprobes']->value);?>
</span> Spy Probes
		</td>
		<td colspan="3">
			<span id="elementID209"><?php echo pretty_number($_smarty_tpl->tpl_vars['recyclers']->value);?>
</span> Recycler
		</td>
		<td colspan="2">
			<span id="elementID219"><?php echo pretty_number($_smarty_tpl->tpl_vars['grecyclers']->value);?>
</span> Giga Recycler
		</td>
	</tr>
	<tr style="display: none;" id="fleetstatusrow">
		<th colspan="8">Fleets</th>
	</tr>
	</table>
	<script type="text/javascript">
		status_ok		= 'Done';
		status_fail		= 'Error';
		MaxFleetSetting = <?php echo $_smarty_tpl->tpl_vars['settings_fleetactions']->value;?>
;
	</script>
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
