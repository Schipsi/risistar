<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:53:38
  from "/app/styles/templates/game/shared.mission.raport.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349e2063cb3_17096171',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '108cc55c63e7a4310363a6fe15197d3959fd8b41' => 
    array (
      0 => '/app/styles/templates/game/shared.mission.raport.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    'a92fa47a22385200b00a098a1767f40dbc519d53' => 
    array (
      0 => '/app/styles/templates/game/shared.mission.raport.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '19b37d3835836753e2144307cf5fc6e59513ae45' => 
    array (
      0 => '/app/styles/templates/game/layout.popup.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'fdc1391b0ab7b521d14da1a048771b4f41e05477' => 
    array (
      0 => '/app/styles/templates/game/main.header.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 604800,
),true)) {
function content_5a6349e2063cb3_17096171 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

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
	<title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
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

	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="raport" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<div id="content">
<div style="width:100%;text-align:center">
<?php if ($_smarty_tpl->tpl_vars['Raport']->value['mode'] == 1) {
echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_title'];
} else {
echo $_smarty_tpl->tpl_vars['LNG']->value['sys_attack_title'];
}?> 
<?php echo $_smarty_tpl->tpl_vars['Raport']->value['time'];?>
:<br><br>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Raport']->value['rounds'], 'RoundInfo', true, 'Round');
$_smarty_tpl->tpl_vars['RoundInfo']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Round']->value => $_smarty_tpl->tpl_vars['RoundInfo']->value) {
$_smarty_tpl->tpl_vars['RoundInfo']->iteration++;
$_smarty_tpl->tpl_vars['RoundInfo']->last = $_smarty_tpl->tpl_vars['RoundInfo']->iteration == $_smarty_tpl->tpl_vars['RoundInfo']->total;
$__foreach_RoundInfo_0_saved = $_smarty_tpl->tpl_vars['RoundInfo'];
?>
<table>
	<tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RoundInfo']->value['attacker'], 'Player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Player']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('PlayerInfo', $_smarty_tpl->tpl_vars['Raport']->value['players'][$_smarty_tpl->tpl_vars['Player']->value['userID']] ,true);
?>
		<td class="transparent">
			<table>
				<tr>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_attack_attacker_pos'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['name'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['Info']->value)) {?>([XX:XX:XX])<?php } else { ?>([<?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][0];?>
:<?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][1];?>
:<?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][2];?>
]<?php if (isset($_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][3])) {?> (<?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_planet_short_".((string)$_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][3])];?>
)<?php }?>)<?php }?><br>
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_weapon'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['tech'][0];?>
% - <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_shield'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['tech'][1];?>
% - <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_armour'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['tech'][2];?>
%
						<table width="100%">
						<?php if (!empty($_smarty_tpl->tpl_vars['Player']->value['ships'])) {?>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_type'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['shortNames'][$_smarty_tpl->tpl_vars['ShipID']->value];?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_count'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[0]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_weapon'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[1]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_shield'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[2]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_armour'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[3]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
						<?php } else { ?>
							<tr>
								<td class="transparent">
									<br><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destroyed'];?>
<br><br>
								</td>
							</tr>
						<?php }?>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tr>
</table>
<br><br>
<table>
	<tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RoundInfo']->value['defender'], 'Player');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Player']->value) {
?>
		<?php $_smarty_tpl->_assignInScope('PlayerInfo', $_smarty_tpl->tpl_vars['Raport']->value['players'][$_smarty_tpl->tpl_vars['Player']->value['userID']] ,true);
?>
		<td class="transparent">
			<table>
				<tr>
					<td>
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_attack_defender_pos'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['name'];?>
 <?php if (isset($_smarty_tpl->tpl_vars['Info']->value)) {?>([XX:XX:XX])<?php } else { ?>([<?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][0];?>
:<?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][1];?>
:<?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][2];?>
]<?php if (isset($_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][3])) {?> (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['type_planet_short'][$_smarty_tpl->tpl_vars['PlayerInfo']->value['koords'][3]];?>
)<?php }?>)<?php }?><br>
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_weapon'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['tech'][0];?>
% - <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_shield'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['tech'][1];?>
% - <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_armour'];?>
 <?php echo $_smarty_tpl->tpl_vars['PlayerInfo']->value['tech'][2];?>
%
						<table width="100%">
						<?php if (!empty($_smarty_tpl->tpl_vars['Player']->value['ships'])) {?>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_type'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['shortNames'][$_smarty_tpl->tpl_vars['ShipID']->value];?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_count'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[0]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_weapon'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[1]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_shield'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[2]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
							<tr>
								<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_ship_armour'];?>
</td>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Player']->value['ships'], 'ShipData', false, 'ShipID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ShipID']->value => $_smarty_tpl->tpl_vars['ShipData']->value) {
?>
								<td class="transparent"><?php echo pretty_number($_smarty_tpl->tpl_vars['ShipData']->value[3]);?>
</td>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</tr>
						<?php } else { ?>
							<tr>
								<td class="transparent">
									<br><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destroyed'];?>
<br><br>
								</td>
							</tr>
						<?php }?>
						</table>
					</td>
				</tr>
			</table>
		</td>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</tr>
</table>
<?php if (!$_smarty_tpl->tpl_vars['RoundInfo']->last) {
echo $_smarty_tpl->tpl_vars['LNG']->value['fleet_attack_1'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['RoundInfo']->value['info'][0]);?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['fleet_attack_2'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['RoundInfo']->value['info'][3]);?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['damage'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fleet_defs_1'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['RoundInfo']->value['info'][2]);?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['fleet_defs_2'];?>
 <?php echo pretty_number($_smarty_tpl->tpl_vars['RoundInfo']->value['info'][1]);?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['damage'];?>
<br><br>
<?php }
$_smarty_tpl->tpl_vars['RoundInfo'] = $__foreach_RoundInfo_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<br><br>
<?php if ($_smarty_tpl->tpl_vars['Raport']->value['result'] == "a") {
echo $_smarty_tpl->tpl_vars['LNG']->value['sys_attacker_won'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_stealed_ressources'];?>
 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Raport']->value['steal'], 'amount', true, 'elementID');
$_smarty_tpl->tpl_vars['amount']->iteration = 0;
$_smarty_tpl->tpl_vars['amount']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elementID']->value => $_smarty_tpl->tpl_vars['amount']->value) {
$_smarty_tpl->tpl_vars['amount']->iteration++;
$_smarty_tpl->tpl_vars['amount']->index++;
$_smarty_tpl->tpl_vars['amount']->last = $_smarty_tpl->tpl_vars['amount']->iteration == $_smarty_tpl->tpl_vars['amount']->total;
$__foreach_amount_13_saved = $_smarty_tpl->tpl_vars['amount'];
echo pretty_number($_smarty_tpl->tpl_vars['amount']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];
if (($_smarty_tpl->tpl_vars['amount']->index+2) == count($_smarty_tpl->tpl_vars['Raport']->value['steal'])) {?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_and'];?>
 <?php } elseif (!$_smarty_tpl->tpl_vars['amount']->last) {?>, <?php }
$_smarty_tpl->tpl_vars['amount'] = $__foreach_amount_13_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php } elseif ($_smarty_tpl->tpl_vars['Raport']->value['result'] == "r") {
echo $_smarty_tpl->tpl_vars['LNG']->value['sys_defender_won'];?>

<?php } else {
echo $_smarty_tpl->tpl_vars['LNG']->value['sys_both_won'];?>

<?php }?>
<br><br>
Pertes attaquant : <?php echo pretty_number($_smarty_tpl->tpl_vars['Raport']->value['units'][0]);?>
 Unités<br>
Pertes defenseur : <?php echo pretty_number($_smarty_tpl->tpl_vars['Raport']->value['units'][1]);?>
 Unités<br>
Coordonnées Champs de Débris <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Raport']->value['debris'], 'amount', true, 'elementID');
$_smarty_tpl->tpl_vars['amount']->iteration = 0;
$_smarty_tpl->tpl_vars['amount']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['elementID']->value => $_smarty_tpl->tpl_vars['amount']->value) {
$_smarty_tpl->tpl_vars['amount']->iteration++;
$_smarty_tpl->tpl_vars['amount']->index++;
$_smarty_tpl->tpl_vars['amount']->last = $_smarty_tpl->tpl_vars['amount']->iteration == $_smarty_tpl->tpl_vars['amount']->total;
$__foreach_amount_14_saved = $_smarty_tpl->tpl_vars['amount'];
echo pretty_number($_smarty_tpl->tpl_vars['amount']->value);?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['elementID']->value];
if (($_smarty_tpl->tpl_vars['amount']->index+2) == count($_smarty_tpl->tpl_vars['Raport']->value['debris'])) {?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_and'];?>
 <?php } elseif (!$_smarty_tpl->tpl_vars['amount']->last) {?>, <?php }
$_smarty_tpl->tpl_vars['amount'] = $__foreach_amount_14_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
Débris.<br><br>
<?php if ($_smarty_tpl->tpl_vars['Raport']->value['mode'] == 1) {?>
	
	<?php if ($_smarty_tpl->tpl_vars['Raport']->value['moon']['moonDestroySuccess'] == -1) {?>
		
		<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_stop'];?>
<br>
	<?php } else { ?>
		
		<?php echo sprintf($_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_lune'],((string)$_smarty_tpl->tpl_vars['Raport']->value['moon']['moonDestroyChance']));?>
<br><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_mess1'];?>

		<?php if ($_smarty_tpl->tpl_vars['Raport']->value['moon']['moonDestroySuccess'] == 1) {?>
			
			<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_reussi'];?>

		<?php } elseif ($_smarty_tpl->tpl_vars['Raport']->value['moon']['moonDestroySuccess'] == 0) {?>
			
			<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_null'];?>
			
		<?php }?>
		<br>
		<?php echo sprintf($_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_rip'],((string)$_smarty_tpl->tpl_vars['Raport']->value['moon']['fleetDestroyChance']));?>

		<?php if ($_smarty_tpl->tpl_vars['Raport']->value['moon']['fleetDestroySuccess'] == 1) {?>
			
			<br><?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_destruc_echec'];?>

		<?php }?>			
	<?php }
} else { ?>
	
	<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_moonproba'];?>
 <?php echo $_smarty_tpl->tpl_vars['Raport']->value['moon']['moonChance'];?>
 %<br>
	<?php if (!empty($_smarty_tpl->tpl_vars['Raport']->value['moon']['moonName'])) {?>
		<?php if (isset($_smarty_tpl->tpl_vars['Info']->value)) {?>
			
			<?php echo sprintf($_smarty_tpl->tpl_vars['LNG']->value['sys_moonbuilt'],((string)$_smarty_tpl->tpl_vars['Raport']->value['moon']['moonName']),"XX","XX","XX");?>

		<?php } else { ?>
			
			<?php echo sprintf($_smarty_tpl->tpl_vars['LNG']->value['sys_moonbuilt'],((string)$_smarty_tpl->tpl_vars['Raport']->value['moon']['moonName']),((string)$_smarty_tpl->tpl_vars['Raport']->value['koords'][0]),((string)$_smarty_tpl->tpl_vars['Raport']->value['koords'][1]),((string)$_smarty_tpl->tpl_vars['Raport']->value['koords'][2]));?>

		<?php }?>
	<?php }
}?>

<?php echo $_smarty_tpl->tpl_vars['Raport']->value['additionalInfo'];?>

</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
