<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:22:28
  from "/app/styles/templates/game/page.fleetStep1.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a634294de0bb0_19331909',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '450bcb4546f14027519bc9c3d70e081537864e17' => 
    array (
      0 => '/app/styles/templates/game/page.fleetStep1.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    '99ca07b90c39e93078118bded41f24c5c574eb92' => 
    array (
      0 => '/app/styles/templates/game/page.fleetStep1.default.tpl',
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
    'file:page.fleetStep1.default.tpl' => 1,
    'file:layout.full.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.topnav.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a634294de0bb0_19331909 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '16785849265a634294bdc8e8_62594782';
$_smarty_tpl->_subTemplateRender("file:page.fleetStep1.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '99ca07b90c39e93078118bded41f24c5c574eb92', 'content_5a634294be6429_97100174');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'caea3f24967636c87bbedef30411d2617fcdf5c6', 'content_5a634294cd3906_01307388');
}
/* Start inline template "extends:page.fleetStep1.default.tpl" =============================*/
function content_5a634294be6429_97100174 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '16785849265a634294bdc8e8_62594782';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20447779775a634294bf6a42_78498001', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16120240205a634294cd09b8_45585971', "content");
}
/* {block "title"} */
class Block_20447779775a634294bf6a42_78498001 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_16120240205a634294cd09b8_45585971 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['16785849265a634294bdc8e8_62594782'] = true;
?>

<form action="game.php?page=fleetStep2" method="post" onsubmit="return CheckTarget()" id="form">
	<input type="hidden" name="token" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'token\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<input type="hidden" name="fleet_group" value="0">
	<input type="hidden" name="target_mission" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'mission\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_send_fleet'];?>
</th>
		</tr>
		<tr style="height:20px;">
			<td style="width:50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_destiny'];?>
</td>
			<td>
				<input type="text" id="galaxy" name="galaxy" size="3" maxlength="2" onkeyup="updateVars()" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
				<input type="text" id="system" name="system" size="3" maxlength="3" onkeyup="updateVars()" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
				<input type="text" id="planet" name="planet" size="3" maxlength="2" onkeyup="updateVars()" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
				<select id="type" name="type" onchange="updateVars()">
					<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'typeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'type\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

				</select>
			</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fleet_speed'];?>
</td>
			<td>
				<select id="speed" name="speed" onChange="updateVars()">
					<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'speedSelect\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

				</select> %
			</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_distance'];?>
</td>
			<td id="distance">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_time'];?>
</th>
			<td id="duration">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_arrival'];?>
</th>
			<td id="arrival">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_flying_return'];?>
</th>
			<td id="return">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_fuel_consumption'];?>
</td>
			<td id="consumption">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_max_speed'];?>
</td>
			<td id="maxspeed">-</td>
		</tr>
		<tr style="height:20px;">
			<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_cargo_capacity'];?>
</td>
			<td id="storage">-</td>
		</tr>
	</table>
	<?php if (isModuleAvailable(@constant('MODULE_SHORTCUTS'))) {?>
	<table class="table519 shortcut" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut'];?>
 (<a href="#" onclick="EditShortcuts();return false" class="shortcut-link-edit shortcut-link"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_edition'];?>
</a><a href="#" onclick="SaveShortcuts();return false" class="shortcut-edit"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_save'];?>
</a>)</th>
		</tr>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'shortcutList\']->value, \'shortcutRow\', true, \'shortcutID\');
$_smarty_tpl->tpl_vars[\'shortcutRow\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'shortcutID\']->value => $_smarty_tpl->tpl_vars[\'shortcutRow\']->value) {
$_smarty_tpl->tpl_vars[\'shortcutRow\']->iteration++;
$_smarty_tpl->tpl_vars[\'shortcutRow\']->last = $_smarty_tpl->tpl_vars[\'shortcutRow\']->iteration == $_smarty_tpl->tpl_vars[\'shortcutRow\']->total;
$__foreach_shortcutRow_0_saved = $_smarty_tpl->tpl_vars[\'shortcutRow\'];
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

			<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (($_smarty_tpl->tpl_vars[\'shortcutRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\']) === 1) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<tr style="height:20px;" class="shortcut-row"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
			
			<td style="width:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo 100/$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
%" class="shortcut-colum shortcut-isset">
				<div class="shortcut-link">
					<a href="javascript:setTarget(<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'system\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'type\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
);updateVars();"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'type\'] == 1) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_planet_shortcut\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'type\'] == 2) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_debris_shortcut\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'type\'] == 3) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_moon_shortcut\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 [<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'system\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
]</a>
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutID\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
][name]" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
					<div class="shortcut-delete" title="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_dlte_shortcut\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"></div>
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutID\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
][galaxy]" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" size="3" maxlength="2">:<input type="text" class="shortcut-input" name="shortcut[<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutID\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
][system]" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'system\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" size="3" maxlength="3">:<input type="text" class="shortcut-input" name="shortcut[<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutID\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
][planet]" value="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" size="3" maxlength="2">
					<select class="shortcut-input" name="shortcut[<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'shortcutID\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
][type]">
						<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo smarty_function_html_options(array(\'selected\'=>$_smarty_tpl->tpl_vars[\'shortcutRow\']->value[\'type\'],\'options\'=>$_smarty_tpl->tpl_vars[\'typeSelect\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

					</select>
				</div>
			</td>
			<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortcutRow\']->last && ($_smarty_tpl->tpl_vars[\'shortcutRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\']) !== 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

			<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php $_smarty_tpl->_assignInScope(\'to\', $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\']-($_smarty_tpl->tpl_vars[\'shortcutRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\']) ,true);
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

			<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_smarty_tpl->tpl_vars[\'foo\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'foo\']->step = 1;$_smarty_tpl->tpl_vars[\'foo\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'foo\']->step > 0 ? $_smarty_tpl->tpl_vars[\'to\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'to\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'foo\']->step));
if ($_smarty_tpl->tpl_vars[\'foo\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'foo\']->value = 1, $_smarty_tpl->tpl_vars[\'foo\']->iteration = 1;$_smarty_tpl->tpl_vars[\'foo\']->iteration <= $_smarty_tpl->tpl_vars[\'foo\']->total;$_smarty_tpl->tpl_vars[\'foo\']->value += $_smarty_tpl->tpl_vars[\'foo\']->step, $_smarty_tpl->tpl_vars[\'foo\']->iteration++) {
$_smarty_tpl->tpl_vars[\'foo\']->first = $_smarty_tpl->tpl_vars[\'foo\']->iteration == 1;$_smarty_tpl->tpl_vars[\'foo\']->last = $_smarty_tpl->tpl_vars[\'foo\']->iteration == $_smarty_tpl->tpl_vars[\'foo\']->total;?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

			<td class="shortcut-colum" style="width:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo 100/$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
%">&nbsp;</td>
			<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }
}
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

			<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

			<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (($_smarty_tpl->tpl_vars[\'shortcutRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\']) === 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</tr><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_smarty_tpl->tpl_vars[\'shortcutRow\'] = $__foreach_shortcutRow_0_saved;
}
} else {
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<tr style="height:20px;" class="shortcut-none">
			<td colspan="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_no_shortcuts\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<tr style="height:20px;" class="shortcut-edit shortcut-new">
			<td>
				<div class="shortcut-link">
					
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[][name]" placeholder="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_name'];?>
">
					<div class="shortcut-delete" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_dlte_shortcut'];?>
"></div>
				</div>
				<div class="shortcut-edit">
					<input type="text" class="shortcut-input" name="shortcut[][galaxy]" value="" size="3" maxlength="2" placeholder="G" pattern="[0-9]*">:<input type="text" class="shortcut-input" name="shortcut[][system]" value="" size="3" maxlength="3" placeholder="S" pattern="[0-9]*">:<input type="text" class="shortcut-input" name="shortcut[][planet]" value="" size="3" maxlength="2" placeholder="P" pattern="[0-9]*">
					<select class="shortcut-input" name="shortcut[][type]">
						<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'typeSelect\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

					</select>
				</div>
			</td>
		</tr>
		<tr style="height:20px;" class="shortcut-edit">
			<td colspan="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
				<a href="#" onclick="AddShortcuts();return false"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_shortcut_add'];?>
</a>
			</td>
		</tr>		
	</table>
	<?php }?>
	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_my_planets'];?>
</th>
		</tr>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'colonyList\']->value, \'ColonyRow\', true);
$_smarty_tpl->tpl_vars[\'ColonyRow\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ColonyRow\']->value) {
$_smarty_tpl->tpl_vars[\'ColonyRow\']->iteration++;
$_smarty_tpl->tpl_vars[\'ColonyRow\']->last = $_smarty_tpl->tpl_vars[\'ColonyRow\']->iteration == $_smarty_tpl->tpl_vars[\'ColonyRow\']->total;
$__foreach_ColonyRow_1_saved = $_smarty_tpl->tpl_vars[\'ColonyRow\'];
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (($_smarty_tpl->tpl_vars[\'ColonyRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\']) === 1) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<tr style="height:20px;"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<td>
			<a href="javascript:setTarget(<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'system\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'type\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
);updateVars();"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'type\'] == 3) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_moon_shortcut\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 [<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'system\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ColonyRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
]</a>
		</td>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'ColonyRow\']->last && ($_smarty_tpl->tpl_vars[\'ColonyRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\']) !== 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php $_smarty_tpl->_assignInScope(\'to\', $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\']-($_smarty_tpl->tpl_vars[\'ColonyRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\']) ,true);
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_smarty_tpl->tpl_vars[\'foo\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'foo\']->step = 1;$_smarty_tpl->tpl_vars[\'foo\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'foo\']->step > 0 ? $_smarty_tpl->tpl_vars[\'to\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'to\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'foo\']->step));
if ($_smarty_tpl->tpl_vars[\'foo\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'foo\']->value = 1, $_smarty_tpl->tpl_vars[\'foo\']->iteration = 1;$_smarty_tpl->tpl_vars[\'foo\']->iteration <= $_smarty_tpl->tpl_vars[\'foo\']->total;$_smarty_tpl->tpl_vars[\'foo\']->value += $_smarty_tpl->tpl_vars[\'foo\']->step, $_smarty_tpl->tpl_vars[\'foo\']->iteration++) {
$_smarty_tpl->tpl_vars[\'foo\']->first = $_smarty_tpl->tpl_vars[\'foo\']->iteration == 1;$_smarty_tpl->tpl_vars[\'foo\']->last = $_smarty_tpl->tpl_vars[\'foo\']->iteration == $_smarty_tpl->tpl_vars[\'foo\']->total;?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<td>&nbsp;</td><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }
}
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (($_smarty_tpl->tpl_vars[\'ColonyRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\']) === 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</tr><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_smarty_tpl->tpl_vars[\'ColonyRow\'] = $__foreach_ColonyRow_1_saved;
}
} else {
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<tr style="height:20px;">
			<td colspan="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_no_colony\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
	
	</table>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'ACSList\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<th colspan="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'COLONY_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fl_acs_title\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</th>
		</tr>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'ACSList\']->value, \'ACSRow\', true);
$_smarty_tpl->tpl_vars[\'ACSRow\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ACSRow\']->value) {
$_smarty_tpl->tpl_vars[\'ACSRow\']->iteration++;
$_smarty_tpl->tpl_vars[\'ACSRow\']->last = $_smarty_tpl->tpl_vars[\'ACSRow\']->iteration == $_smarty_tpl->tpl_vars[\'ACSRow\']->total;
$__foreach_ACSRow_2_saved = $_smarty_tpl->tpl_vars[\'ACSRow\'];
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\']) === 1) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<tr style="height:20px;"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<tr style="height:20px;">
			<td><a href="javascript:setACSTarget(<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'system\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'planet_type\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'id\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
);"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 - [<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'galaxy\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'system\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
:<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'ACSRow\']->value[\'planet\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
]</a></td>
		</tr>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'ACSRow\']->last && ($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\']) !== 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php $_smarty_tpl->_assignInScope(\'to\', $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\']-($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\']) ,true);
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_smarty_tpl->tpl_vars[\'foo\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'foo\']->step = 1;$_smarty_tpl->tpl_vars[\'foo\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'foo\']->step > 0 ? $_smarty_tpl->tpl_vars[\'to\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'to\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'foo\']->step));
if ($_smarty_tpl->tpl_vars[\'foo\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'foo\']->value = 1, $_smarty_tpl->tpl_vars[\'foo\']->iteration = 1;$_smarty_tpl->tpl_vars[\'foo\']->iteration <= $_smarty_tpl->tpl_vars[\'foo\']->total;$_smarty_tpl->tpl_vars[\'foo\']->value += $_smarty_tpl->tpl_vars[\'foo\']->step, $_smarty_tpl->tpl_vars[\'foo\']->iteration++) {
$_smarty_tpl->tpl_vars[\'foo\']->first = $_smarty_tpl->tpl_vars[\'foo\']->iteration == 1;$_smarty_tpl->tpl_vars[\'foo\']->last = $_smarty_tpl->tpl_vars[\'foo\']->iteration == $_smarty_tpl->tpl_vars[\'foo\']->total;?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<td>&nbsp;</td><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }
}
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (($_smarty_tpl->tpl_vars[\'ACSRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'ACS_ROWS_ON_FLEET1\']) === 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</tr><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_smarty_tpl->tpl_vars[\'ACSRow\'] = $__foreach_ACSRow_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	</table>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	<table class="table519" style="table-layout: fixed;">
		<tr style="height:20px;">
			<td><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_continue'];?>
"></td>
		</tr>
	</table>
</form>
<?php echo '<script'; ?>
 type="text/javascript">
data			= <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'fleetdata\']->value);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
;
shortCutRows	= <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'SHORTCUT_ROWS_ON_FLEET1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
;
fl_no_shortcuts	= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fl_no_shortcuts'];?>
';
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:page.fleetStep1.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a634294cd5704_35161216 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '16785849265a634294bdc8e8_62594782';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10329331215a634294cdb189_91721269', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
, <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
, <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
, <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
, <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
, <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1520366715a634294d03002_47449832', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_10329331215a634294cdb189_91721269 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['16785849265a634294bdc8e8_62594782'] = true;
?>
 - <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 - <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_1520366715a634294d03002_47449832 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a634294d0e6c2_26730610 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16785849265a634294bdc8e8_62594782';
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
        <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

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
echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value > 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_NOTICE'))) {?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUDDYLIST'))) {?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value > 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 (<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a634294d7a6e5_46087910 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '16785849265a634294bdc8e8_62594782';
?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
images/<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><span<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } else { ?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } else { ?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } else { ?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td class="res_current"><span<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } else { ?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } else { ?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<td class="res_max" id="max_<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

									<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '<script'; ?>
 type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
;
		var vacation			= <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
;
        $(function() {
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\'])) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

            resourceTicker({
                available: <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,
                limit: [0, <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
],
                production: <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\']);?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
,
                valueElem: "current_<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
"
            }, true);
		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

        });
		<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/game/topnav.js"><?php echo '</script'; ?>
>
        <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasGate\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
echo '<script'; ?>
 src="scripts/game/gate.js"><?php echo '</script'; ?>
><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

		<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'delete\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'vacation\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 <?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "extends:page.fleetStep1.default.tpl" =============================*/
function content_5a634294cd3906_01307388 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '16785849265a634294bdc8e8_62594782';
foreach (array('bodyclass'=>"full") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"full"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a634294cd5704_35161216');
?>

<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value) {?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
</a><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php }?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '3656a4034d5586e57c8cab9755b4109091627cf1', 'content_5a634294d0e6c2_26730610');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '8cc530df2d91f6fd4fe06782e8b5690519815d2f', 'content_5a634294d7a6e5_46087910');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1641366565a634294ddb4b2_19859690', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'cronjobs\']->value, \'cronjob\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->value) {
?>/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';?>

<?php echo '/*%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:16785849265a634294bdc8e8_62594782%%*/';
}
/* {block "content"} */
class Block_1641366565a634294ddb4b2_19859690 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.fleetStep1.default.tpl" =============================*/
}
