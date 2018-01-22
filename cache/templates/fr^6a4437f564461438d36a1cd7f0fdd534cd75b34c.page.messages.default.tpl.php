<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:53:25
  from "/app/styles/templates/game/page.messages.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349d5b9f0c4_03179962',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '4ca8b0ec9059d2d97af57fb6be1aa19a965ac14f' => 
    array (
      0 => '/app/styles/templates/game/page.messages.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    'bc5874955b240ed280a05045c7f85d98369d516c' => 
    array (
      0 => '/app/styles/templates/game/page.messages.default.tpl',
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
function content_5a6349d5b9f0c4_03179962 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>Messages - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
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
	var Ready		= "Prêt";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Information";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["Dim","Lun","Mar","Mer","Jeu","Ven","Sam"] 
	var months 		= ["Jan","Fev","Mar","Avr","Mai","Juin","Juil","Aout","Sep","Oct","Nov","Dec"] ;
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

	
<?php if (!empty($_smarty_tpl->tpl_vars['category']->value)) {?>
<script>$(function() {
	Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['category']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['side']->value;?>
);
})</script>
<?php }?>

	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="messages" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
		<li><a href="game.php?page=overview">Vue Générale</a></li>
		<li><a href="game.php?page=imperium">Empire</a></li>		<li><a href="game.php?page=research">Recherche</a></li>		<li><a href="game.php?page=buildings">Bâtiments</a></li>		<li><a href="game.php?page=shipyard&amp;mode=fleet">Chantier Spatial</a></li>		<li><a href="game.php?page=shipyard&amp;mode=defense">Défense</a></li>		<li><a href="game.php?page=officier">Officiers</a></li>		<li><a href="game.php?page=trader">Marchand</a></li>		<li><a href="game.php?page=fleetDealer">Ferrailleur Intergalactique</a></li>		<li><a href="game.php?page=fleetTable">Flotte</a></li>		<li><a href="game.php?page=techtree">Technologie</a></li>		<li><a href="game.php?page=resources">Ressources</a></li>		<li class="menucat2-head"></li>
		<li><a href="game.php?page=galaxy">Galaxie</a></li>		<li><a href="game.php?page=alliance">Alliance</a></li>        <?php if (!empty($_smarty_tpl->tpl_vars['hasBoard']->value)) {?><li><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a></li><?php }?>
		<li><a href="game.php?page=statistics">Classement</a></li>		<li><a href="game.php?page=records">Records</a></li>		<li><a href="game.php?page=battleHall">Hall of Fame</a></li>		<li><a href="game.php?page=search">Recherche</a></li>		<li><a href="game.php?page=chat">Chat</a></li>		<li><a href="game.php?page=ticket">Ticket Support</a></li>		<li><a href="game.php?page=questions">Guide du débutant</a></li>
		<li><a href="game.php?page=banList">Pilori</a></li>		<li><a href="index.php?page=rules" target="rules">Règlement</a></li>
		<li><a href="game.php?page=battleSimulator">Simulateur de Combat</a></li>
		<li class="menucat3-head"></li>
		<li><a href="game.php?page=messages">Messages<?php if ($_smarty_tpl->tpl_vars['new_message']->value > 0) {?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></li>		<li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);">Notes</a></li>		<li><a href="game.php?page=buddyList">Liste d'amis</a></li>		<li><a href="game.php?page=settings">Options</a></li>
		<li><a href="game.php?page=logout">Déconnexion</a></li>
		<?php if ($_smarty_tpl->tpl_vars['authlevel']->value > 0) {?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_administration'];?>
 (<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
)</a></li><?php }?>
		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank">Crédits</a></div>
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
<table style="width:760px;table-layout:fixed;">
	<tr>
		<th colspan="6">Nouvelles Administration<span id="loading" style="display:none;"> (Chargement ...)</span></th>
	</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CategoryList']->value, 'CategoryRow', true, 'CategoryID');
$_smarty_tpl->tpl_vars['CategoryRow']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CategoryID']->value => $_smarty_tpl->tpl_vars['CategoryRow']->value) {
$_smarty_tpl->tpl_vars['CategoryRow']->iteration++;
$_smarty_tpl->tpl_vars['CategoryRow']->last = $_smarty_tpl->tpl_vars['CategoryRow']->iteration == $_smarty_tpl->tpl_vars['CategoryRow']->total;
$__foreach_CategoryRow_0_saved = $_smarty_tpl->tpl_vars['CategoryRow'];
?>
		<?php if (($_smarty_tpl->tpl_vars['CategoryRow']->iteration%6) === 1) {?><tr><?php }?>
		<?php if ($_smarty_tpl->tpl_vars['CategoryRow']->last && ($_smarty_tpl->tpl_vars['CategoryRow']->iteration%6) !== 0) {?><td>&nbsp;</td><?php }?>
		<td style="word-wrap: break-word;color:<?php echo $_smarty_tpl->tpl_vars['CategoryRow']->value['color'];?>
;"><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['CategoryID']->value;?>
);return false;" style="color:<?php echo $_smarty_tpl->tpl_vars['CategoryRow']->value['color'];?>
;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_type'][$_smarty_tpl->tpl_vars['CategoryID']->value];?>
</a>
		<br><span id="unread_<?php echo $_smarty_tpl->tpl_vars['CategoryID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CategoryRow']->value['unread'];?>
</span>/<span id="total_<?php echo $_smarty_tpl->tpl_vars['CategoryID']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['CategoryRow']->value['total'];?>
</span>
		</td>
		<?php if ($_smarty_tpl->tpl_vars['CategoryRow']->last || ($_smarty_tpl->tpl_vars['CategoryRow']->iteration%6) === 0) {?></tr><?php }?>
		<?php
$_smarty_tpl->tpl_vars['CategoryRow'] = $__foreach_CategoryRow_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<table style="width:760px;table-layout:fixed;">
	<tr>
		<th>Opérateurs de jeu</th>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['OperatorList']->value, 'OperatorEmail', false, 'OperatorName');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['OperatorName']->value => $_smarty_tpl->tpl_vars['OperatorEmail']->value) {
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['OperatorName']->value;?>
<a href="mailto:<?php echo $_smarty_tpl->tpl_vars['OperatorEmail']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_write_mail_to_ops'];?>
 <?php ob_start();
echo $_smarty_tpl->tpl_vars['OperatorName']->value;
$_prefixVariable1=ob_get_clean();
echo $_prefixVariable1;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" alt=""></a></td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
