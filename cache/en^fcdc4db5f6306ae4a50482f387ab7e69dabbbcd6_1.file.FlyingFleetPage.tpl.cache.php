<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:30:43
  from "/app/styles/templates/adm/FlyingFleetPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a634483590561_30561715',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'fcdc4db5f6306ae4a50482f387ab7e69dabbbcd6' => 
    array (
      0 => '/app/styles/templates/adm/FlyingFleetPage.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'a1072095f26593f338c911c8b3565b4999d7693f' => 
    array (
      0 => '/app/styles/templates/adm/overall_header.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'd95ab47529883386bcef27a121e29b89539925f7' => 
    array (
      0 => '/app/styles/templates/adm/overall_footer.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall_header.tpl' => 1,
    'file:overall_footer.tpl' => 1,
  ),
),false)) {
function content_5a634483590561_30561715 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19532779625a634483488f06_22163440';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a6344834b1195_05289916');
?>

<table width="90%">
<tr>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_fleetid'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_mission'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_starttime'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_ships'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_startuser'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_startplanet'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_arrivaltime'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_targetuser'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_targetplanet'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_endtime'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_holdtime'];?>
</th>
    <th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ff_lock'];?>
</th>
</tr>
<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'FleetList\']->value, \'FleetRow\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'FleetRow\']->value) {
?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>

<tr>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'fleetID\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
	<td><a href="#" data-tooltip-content="<table style='width:200px'><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'resource\'], \'resourceCount\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceCount\']->value) {
?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
<tr><td style='width:50%'><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td><td style='width:50%'><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceCount\']->value);?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</table>" class="tooltip"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_".((string)$_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'missionID\'])];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'acsID\'] != 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
<br><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'acsID\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
<br><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'acsName\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
&nbsp;(R)</a></td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'starttime\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
	<td><a href="#" data-tooltip-content="<table style='width:200px'><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'ships\'], \'shipCount\', false, \'shipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'shipID\']->value => $_smarty_tpl->tpl_vars[\'shipCount\']->value) {
?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
<tr><td style='width:50%'><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'shipID\']->value];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td><td style='width:50%'><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'shipCount\']->value);?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</table>" class="tooltip"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'count\']);?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
&nbsp;(D)</a></td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'startUserName\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
 (ID:&nbsp;<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'startUserID\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
)</td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'startPlanetName\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
&nbsp;[<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'startPlanetGalaxy\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
:<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'startPlanetSystem\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
:<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'startPlanetPlanet\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
] (ID:&nbsp;<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'startPlanetID\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
)</td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'state\'] == 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
<span style="color:lime;"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'arrivaltime\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'state\'] == 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</span><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetUserID\'] != 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetUserName\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
 (ID:&nbsp;<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetUserID\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
)<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetPlanetName\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
&nbsp;[<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetPlanetGalaxy\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
:<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetPlanetSystem\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
:<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetPlanetPlanet\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
]<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetPlanetID\'] != 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
 (ID:&nbsp;<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'targetPlanetID\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
)<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'state\'] == 1) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
<span style="color:lime;"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'endtime\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'state\'] == 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</span><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
	<td><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'stayhour\'] != 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'state\'] == 2) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
<span style="color:lime;"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'staytime\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
 (<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'stayhour\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
&nbsp;h)<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'state\'] == 0) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</span><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php } else { ?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
-<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
    <td><a href="admin.php?page=fleets&amp;id=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'fleetID\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
&amp;lock=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'lock\']) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
0" style="color:lime"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ff_unlock\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'error\']) {?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
2" style="color:red"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ff_del\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php } else { ?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
1" style="color:red"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ff_lock\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';
echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php }?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</a></td>
</tr>
<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
}
} else {
?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>

<tr>
	<td colspan="12"><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ff_no_fleets\'];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</td>
</tr>
<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>

</table>
</body>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a634483585fb2_20257236');
}
/* Start inline template "/app/styles/templates/adm/FlyingFleetPage.tpl" =============================*/
function content_5a6344834b1195_05289916 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19532779625a634483488f06_22163440';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)) {?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
, <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
, <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
, <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
, <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
, <?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	<?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:19532779625a634483488f06_22163440%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:19532779625a634483488f06_22163440%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/FlyingFleetPage.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/FlyingFleetPage.tpl" =============================*/
function content_5a634483585fb2_20257236 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19532779625a634483488f06_22163440';
if (isset($_GET['reload'])) {
if ($_GET['reload'] == 't') {
echo '<script'; ?>
 type="text/javascript">
parent.topFrame.document.location.reload();
<?php echo '</script'; ?>
>
<?php } elseif ($_GET['reload'] == 'l') {
echo '<script'; ?>
 type="text/javascript">
parent.rightFrame.document.location.reload();
<?php echo '</script'; ?>
>
<?php } elseif ($_GET['reload'] == 'r') {
echo '<script'; ?>
 type="text/javascript">
top.document.location.reload();
<?php echo '</script'; ?>
>
<?php }
}?>
</body>
</html><?php
}
/* End inline template "/app/styles/templates/adm/FlyingFleetPage.tpl" =============================*/
}
