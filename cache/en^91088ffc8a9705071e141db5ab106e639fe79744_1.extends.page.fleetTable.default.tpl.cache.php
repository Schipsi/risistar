<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:22:22
  from "/app/styles/templates/game/page.fleetTable.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63428eb092f2_22442482',
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
  'includes' => 
  array (
    'file:page.fleetTable.default.tpl' => 1,
    'file:shared.fleetTable.acsTable.tpl' => 1,
    'file:layout.full.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.topnav.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a63428eb092f2_22442482 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '13749323375a63428e96f118_39944288';
$_smarty_tpl->_subTemplateRender("file:page.fleetTable.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'de558ab7dc06c0b0c209ef914c586edd163f41ac', 'content_5a63428e971521_22489916');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'caea3f24967636c87bbedef30411d2617fcdf5c6', 'content_5a63428e9f66f8_67360033');
}
/* Start inline template "extends:page.fleetTable.default.tpl" =============================*/
function content_5a63428e971521_22489916 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13749323375a63428e96f118_39944288';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11083438605a63428e975655_98640779', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18380869085a63428e9f1567_14969438', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7169145815a63428e9f5848_48242543', "script");
}
/* {block "title"} */
class Block_11083438605a63428e975655_98640779 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_18380869085a63428e9f1567_14969438 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['13749323375a63428e96f118_39944288'] = true;
?>

<table style="width:760px;">
	<tr>
		<th colspan="9">
			<div class="transparent" style="text-align:left;float:left;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fleets'];?>
 <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'activeFleetSlots\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 / <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxFleetSlots\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</div>
			<div class="transparent" style="text-align:right;float:right;"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'activeExpedition\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 / <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxExpedition\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_expeditions'];?>
</div>
		</th>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_number'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_mission'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_ammount'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_beginning'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_departure'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_destiny'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_arrival'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_objective'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_order'];?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'FlyingFleetList\']->value, \'FlyingFleetRow\', false, NULL, \'FlyingFleets\', array (
  \'iteration\' => true,
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value) {
$_smarty_tpl->tpl_vars[\'__smarty_foreach_FlyingFleets\']->value[\'iteration\']++;
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<tr>
	<td><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo (isset($_smarty_tpl->tpl_vars[\'__smarty_foreach_FlyingFleets\']->value[\'iteration\']) ? $_smarty_tpl->tpl_vars[\'__smarty_foreach_FlyingFleets\']->value[\'iteration\'] : null);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
	<td><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_".((string)$_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'mission\'])];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'state\'] == 1) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<br><a title="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_returning\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_r\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<br><a title="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_onway\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_a\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	</td>
	<td><a class="tooltip_sticky" data-tooltip-content="<table width='100%'><tr><th colspan='2' style='text-align:center;'><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_info_detail\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</th></tr><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'FleetList\'], \'shipCount\', false, \'shipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'shipID\']->value => $_smarty_tpl->tpl_vars[\'shipCount\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
<tr><td class='transparent'><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'shipID\']->value];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
:</td><td class='transparent'><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'shipCount\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</table>"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'amount\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a></td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'startGalaxy\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'startSystem\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">[<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'startGalaxy\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
:<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'startSystem\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
:<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'startPlanet\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
]</a></td>
	<td<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'state\'] == 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 style="color:lime"<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'startTime\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
	<td><a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'endGalaxy\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'endSystem\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">[<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'endGalaxy\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
:<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'endSystem\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
:<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'endPlanet\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
]</a></td>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'mission\'] == 4 && $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'state\'] == 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<td>-</td>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<td<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'state\'] != 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 style="color:lime"<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'endTime\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<td id="fleettime_<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo (isset($_smarty_tpl->tpl_vars[\'__smarty_foreach_FlyingFleets\']->value[\'iteration\']) ? $_smarty_tpl->tpl_vars[\'__smarty_foreach_FlyingFleets\']->value[\'iteration\'] : null);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" class="fleets" data-fleet-end-time="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'returntime\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" data-fleet-time="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'resttime\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php ob_start();
echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'resttime\'];
$_prefixVariable1=ob_get_clean();
echo pretty_fly_time($_prefixVariable1);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
	<td>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!$_smarty_tpl->tpl_vars[\'isVacation\']->value && $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'state\'] != 1) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<form action="game.php?page=fleetTable&amp;action=sendfleetback" method="post">
		<input name="fleetID" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" type="hidden">
		<input value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_send_back\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" type="submit">
		</form>
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'mission\'] == 1) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<form action="game.php?page=fleetTable&amp;action=acs" method="post">
		<input name="fleetID" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FlyingFleetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" type="hidden">
		<input value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_acs\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" type="submit">
		</form>
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	&nbsp;-&nbsp;
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
} else {
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

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
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'maxFleetSlots\']->value == $_smarty_tpl->tpl_vars[\'activeFleetSlots\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<tr><td colspan="9"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_no_more_slots\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td></tr>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

</table>
<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'acsData\']->value)) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php $_smarty_tpl->_subTemplateRender("file:shared.fleetTable.acsTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

<form action="?page=fleetStep1" method="post">
<input type="hidden" name="galaxy" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'targetGalaxy\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
<input type="hidden" name="system" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'targetSystem\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
<input type="hidden" name="planet" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'targetPlanet\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
<input type="hidden" name="type" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'targetType\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
<input type="hidden" name="target_mission" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'targetMission\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
<table class="table519">
	<tr>
		<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_new_mission_title'];?>
</th>
	</tr>
	<tr style="height:20px;">
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_ship_type'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_ship_available'];?>
</td>
		<td>-</td>
		<td>-</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'FleetsOnPlanet\']->value, \'FleetRow\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'FleetRow\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<tr style="height:20px;">
		<td><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'speed\'] != 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 <a title="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_speed_title\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'speed\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'id\']];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';
echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'id\']];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';
echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
		<td id="ship<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
_value"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'count\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'speed\'] != 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<td><a href="javascript:maxShip('ship<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
');"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_max\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a></td>
		<td><input name="ship<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" id="ship<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'FleetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
_input" size="10" value="0"></td>
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	</tr>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<tr style="height:20px;">
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (count($_smarty_tpl->tpl_vars[\'FleetsOnPlanet\']->value) == 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<td colspan="4"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_no_ships\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<td colspan="2"><a href="javascript:noShips();"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_remove_all_ships\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a></td>
	<td colspan="2"><a href="javascript:maxShips();"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_select_all_ships\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a></td>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	</tr>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'maxFleetSlots\']->value != $_smarty_tpl->tpl_vars[\'activeFleetSlots\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<tr style="height:20px;"><td colspan="4"><input type="submit" value="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_continue\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"></td>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

</table>	
</form>
<br>
<table style="min-width:519px;width:519px;">
	<tr><th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus'];?>
</th></tr>
	<tr><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus_attack'];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus_defensive'];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_bonus_shield'];?>
</th></tr>
	<tr><td>+<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonusAttack\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 %</td><td>+<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonusDefensive\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 %</td><td>+<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonusShield\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 %</td></tr>
	<tr><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][115];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][117];?>
</th><th style="width:33%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][118];?>
</th></tr>
	<tr><td>+<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonusCombustion\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 %</td><td>+<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonusImpulse\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 %</td><td>+<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'bonusHyperspace\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 %</td></tr>
</table>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_7169145815a63428e9f5848_48242543 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 src="scripts/game/fleetTable.js"><?php echo '</script'; ?>
><?php
}
}
/* {/block "script"} */
/* End inline template "extends:page.fleetTable.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63428e9f81c2_27895884 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13749323375a63428e96f118_39944288';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7050713005a63428e9fdc26_76356154', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
, <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
, <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
, <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
, <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
, <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19362699685a63428ea26384_21662910', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_7050713005a63428e9fdc26_76356154 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['13749323375a63428e96f118_39944288'] = true;
?>
 - <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 - <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_19362699685a63428ea26384_21662910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63428ea31873_18048370 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13749323375a63428e96f118_39944288';
?>
<div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_changelog'];?>
</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_IMPERIUM'))) {?><li><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RESEARCH'))) {?><li><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUILDING'))) {?><li><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SHIPYARD_FLEET'))) {?><li><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SHIPYARD_DEFENSIVE'))) {?><li><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_OFFICIER')) || isModuleAvailable(@constant('MODULE_DMEXTRAS'))) {?><li><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TRADER'))) {?><li><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_FLEET_TRADER'))) {?><li><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TRADER'))) {?><li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TECHTREE'))) {?><li><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RESSOURCE_LIST'))) {?><li><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a></li><?php }?>
		<li class="menucat2-head"></li>
		<?php if (isModuleAvailable(@constant('MODULE_GALAXY'))) {?><li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_ALLIANCE'))) {?><li><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a></li><?php }?>
        <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<?php if (isModuleAvailable(@constant('MODULE_STATISTICS'))) {?><li><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RECORDS'))) {?><li><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BATTLEHALL'))) {?><li><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SEARCH'))) {?><li><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_CHAT'))) {?><li><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SUPPORT'))) {?><li><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a></li><?php }?>
		<li><a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_BANLIST'))) {?><li><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a></li><?php }?>
		<li><a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_SIMULATOR'))) {?><li><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a></li><?php }?>

		<li class="menucat3-head"></li>
		<?php if (isModuleAvailable(@constant('MODULE_MESSAGES'))) {?><li><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];
echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value > 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_NOTICE'))) {?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUDDYLIST'))) {?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value > 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 (<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63428eaa1359_91135508 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13749323375a63428e96f118_39944288';
?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
images/<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><span<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td class="res_current"><span<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } else { ?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<td class="res_max" id="max_<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

									<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<?php echo '<script'; ?>
 type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
;
		var vacation			= <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
;
        $(function() {
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\'])) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

            resourceTicker({
                available: <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
,
                limit: [0, <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
],
                production: <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\']);?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
,
                valueElem: "current_<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
"
            }, true);
		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

        });
		<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/game/topnav.js"><?php echo '</script'; ?>
>
        <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasGate\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';
echo '<script'; ?>
 src="scripts/game/gate.js"><?php echo '</script'; ?>
><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

		<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'delete\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'vacation\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 <?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "extends:page.fleetTable.default.tpl" =============================*/
function content_5a63428e9f66f8_67360033 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13749323375a63428e96f118_39944288';
foreach (array('bodyclass'=>"full") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"full"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a63428e9f81c2_27895884');
?>

<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value) {?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
</a><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php }?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '3656a4034d5586e57c8cab9755b4109091627cf1', 'content_5a63428ea31873_18048370');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '8cc530df2d91f6fd4fe06782e8b5690519815d2f', 'content_5a63428eaa1359_91135508');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10228287275a63428eb04483_35073142', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'cronjobs\']->value, \'cronjob\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->value) {
?>/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';?>

<?php echo '/*%%SmartyNocache:13749323375a63428e96f118_39944288%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:13749323375a63428e96f118_39944288%%*/';
}
/* {block "content"} */
class Block_10228287275a63428eb04483_35073142 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.fleetTable.default.tpl" =============================*/
}
