<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:47:40
  from "/app/styles/templates/game/shared.mission.raport.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63487c73e3e8_53925538',
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
  'includes' => 
  array (
    'file:shared.mission.raport.tpl' => 1,
    'file:layout.popup.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a63487c73e3e8_53925538 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '8773876695a63487c5d45d9_55413621';
$_smarty_tpl->_subTemplateRender("file:shared.mission.raport.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'a92fa47a22385200b00a098a1767f40dbc519d53', 'content_5a63487c5d7613_99237169');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '19b37d3835836753e2144307cf5fc6e59513ae45', 'content_5a63487c705ec1_66352159');
}
/* Start inline template "extends:shared.mission.raport.tpl" =============================*/
function content_5a63487c5d7613_99237169 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8773876695a63487c5d45d9_55413621';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11856854675a63487c5f5339_80958718', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12824480395a63487c7015f5_36317231', "content");
?>
 <?php
}
/* {block "title"} */
class Block_11856854675a63487c5f5339_80958718 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['8773876695a63487c5d45d9_55413621'] = true;
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'pageTitle\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_12824480395a63487c7015f5_36317231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['8773876695a63487c5d45d9_55413621'] = true;
?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'Info\']->value)) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<table style="width:100%">
	<tr>
		<td class="transparent" style="width:40%;font-size:22px;font-weight:bold;padding:10px 0 30px;color:<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
lime<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
red<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
white<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'Info\']->value[0];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
		<td class="transparent" style="font-size:22px;font-weight:bold;padding:10px 0 30px;">VS</td>
		<td class="transparent" style="width:40%;font-size:22px;font-weight:bold;padding:10px 0 30px;color:<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
lime<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
red<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
white<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'Info\']->value[1];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
	</tr>
</table>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<div style="width:100%;text-align:center">
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'mode\'] == 1) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_title\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attack_title\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'Raport\']->value[\'time\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
:<br><br>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Raport\']->value[\'rounds\'], \'RoundInfo\', true, \'Round\');
$_smarty_tpl->tpl_vars[\'RoundInfo\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Round\']->value => $_smarty_tpl->tpl_vars[\'RoundInfo\']->value) {
$_smarty_tpl->tpl_vars[\'RoundInfo\']->iteration++;
$_smarty_tpl->tpl_vars[\'RoundInfo\']->last = $_smarty_tpl->tpl_vars[\'RoundInfo\']->iteration == $_smarty_tpl->tpl_vars[\'RoundInfo\']->total;
$__foreach_RoundInfo_0_saved = $_smarty_tpl->tpl_vars[\'RoundInfo\'];
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<table>
	<tr>
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'attacker\'], \'Player\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Player\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php $_smarty_tpl->_assignInScope(\'PlayerInfo\', $_smarty_tpl->tpl_vars[\'Raport\']->value[\'players\'][$_smarty_tpl->tpl_vars[\'Player\']->value[\'userID\']] ,true);
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<td class="transparent">
			<table>
				<tr>
					<td>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attack_attacker_pos\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'name\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'Info\']->value)) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
([XX:XX:XX])<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
([<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][0];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
:<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][1];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
:<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][2];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
]<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3])) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 (<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_planet_short_".((string)$_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3])];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
)<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
)<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][0];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
% - <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][1];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
% - <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][2];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
%
						<table width="100%">
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'])) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_type\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'shortNames\'][$_smarty_tpl->tpl_vars[\'ShipID\']->value];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_count\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[0]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[1]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[2]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[3]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							<tr>
								<td class="transparent">
									<br><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destroyed\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br><br>
								</td>
							</tr>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

						</table>
					</td>
				</tr>
			</table>
		</td>
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	</tr>
</table>
<br><br>
<table>
	<tr>
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'defender\'], \'Player\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Player\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php $_smarty_tpl->_assignInScope(\'PlayerInfo\', $_smarty_tpl->tpl_vars[\'Raport\']->value[\'players\'][$_smarty_tpl->tpl_vars[\'Player\']->value[\'userID\']] ,true);
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<td class="transparent">
			<table>
				<tr>
					<td>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attack_defender_pos\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'name\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'Info\']->value)) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
([XX:XX:XX])<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
([<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][0];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
:<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][1];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
:<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][2];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
]<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3])) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 (<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_planet_short\'][$_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3]];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
)<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
)<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][0];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
% - <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][1];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
% - <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][2];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
%
						<table width="100%">
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'])) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_type\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'shortNames\'][$_smarty_tpl->tpl_vars[\'ShipID\']->value];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_count\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[0]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[1]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[2]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[3]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							</tr>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

							<tr>
								<td class="transparent">
									<br><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destroyed\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br><br>
								</td>
							</tr>
						<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

						</table>
					</td>
				</tr>
			</table>
		</td>
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	</tr>
</table>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (!$_smarty_tpl->tpl_vars[\'RoundInfo\']->last) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_attack_1\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][0]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_attack_2\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][3]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'damage\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_defs_1\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][2]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_defs_2\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][1]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'damage\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br><br>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_smarty_tpl->tpl_vars[\'RoundInfo\'] = $__foreach_RoundInfo_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<br><br>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attacker_won\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_stealed_ressources\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Raport\']->value[\'steal\'], \'amount\', true, \'elementID\');
$_smarty_tpl->tpl_vars[\'amount\']->iteration = 0;
$_smarty_tpl->tpl_vars[\'amount\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'elementID\']->value => $_smarty_tpl->tpl_vars[\'amount\']->value) {
$_smarty_tpl->tpl_vars[\'amount\']->iteration++;
$_smarty_tpl->tpl_vars[\'amount\']->index++;
$_smarty_tpl->tpl_vars[\'amount\']->last = $_smarty_tpl->tpl_vars[\'amount\']->iteration == $_smarty_tpl->tpl_vars[\'amount\']->total;
$__foreach_amount_13_saved = $_smarty_tpl->tpl_vars[\'amount\'];
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'amount\']->value);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (($_smarty_tpl->tpl_vars[\'amount\']->index+2) == count($_smarty_tpl->tpl_vars[\'Raport\']->value[\'steal\'])) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_and\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } elseif (!$_smarty_tpl->tpl_vars[\'amount\']->last) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
, <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_smarty_tpl->tpl_vars[\'amount\'] = $__foreach_amount_13_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_defender_won\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_both_won\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<br><br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_attacker_lostunits'];?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'Raport\']->value[\'units\'][0]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_units'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_defender_lostunits'];?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'Raport\']->value[\'units\'][1]);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_units'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['debree_field_1'];?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Raport\']->value[\'debris\'], \'amount\', true, \'elementID\');
$_smarty_tpl->tpl_vars[\'amount\']->iteration = 0;
$_smarty_tpl->tpl_vars[\'amount\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'elementID\']->value => $_smarty_tpl->tpl_vars[\'amount\']->value) {
$_smarty_tpl->tpl_vars[\'amount\']->iteration++;
$_smarty_tpl->tpl_vars[\'amount\']->index++;
$_smarty_tpl->tpl_vars[\'amount\']->last = $_smarty_tpl->tpl_vars[\'amount\']->iteration == $_smarty_tpl->tpl_vars[\'amount\']->total;
$__foreach_amount_14_saved = $_smarty_tpl->tpl_vars[\'amount\'];
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'amount\']->value);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (($_smarty_tpl->tpl_vars[\'amount\']->index+2) == count($_smarty_tpl->tpl_vars[\'Raport\']->value[\'debris\'])) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_and\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } elseif (!$_smarty_tpl->tpl_vars[\'amount\']->last) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
, <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_smarty_tpl->tpl_vars[\'amount\'] = $__foreach_amount_14_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
echo $_smarty_tpl->tpl_vars['LNG']->value['debree_field_2'];?>
<br><br>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'mode\'] == 1) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	
	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroySuccess\'] == -1) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_stop\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br>
	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_lune\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroyChance\']));?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
<br><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_mess1\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroySuccess\'] == 1) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

			
			<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_reussi\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroySuccess\'] == 0) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

			
			<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_null\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
			
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<br>
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_rip\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'fleetDestroyChance\']));?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'fleetDestroySuccess\'] == 1) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

			
			<br><?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_echec\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
			
	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	
	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_moonproba\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonChance\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 %<br>
	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonName\'])) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'Info\']->value)) {?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

			
			<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_moonbuilt\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonName\']),"XX","XX","XX");?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php } else { ?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

			
			<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_moonbuilt\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonName\']),((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'koords\'][0]),((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'koords\'][1]),((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'koords\'][2]));?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php }?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>


<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'Raport\']->value[\'additionalInfo\'];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

</div>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:shared.mission.raport.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
function content_5a63487c707d62_26682640 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8773876695a63487c5d45d9_55413621';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19968413985a63487c70e726_47868485', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
, <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
, <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
, <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
, <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
, <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4312103495a63487c734ab6_68129128', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_19968413985a63487c70e726_47868485 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['8773876695a63487c5d45d9_55413621'] = true;
?>
 - <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';?>
 - <?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_4312103495a63487c734ab6_68129128 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
/* Start inline template "extends:shared.mission.raport.tpl" =============================*/
function content_5a63487c705ec1_66352159 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8773876695a63487c5d45d9_55413621';
foreach (array('bodyclass'=>"popup") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"popup"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a63487c707d62_26682640');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17149568455a63487c73bf75_30048418', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:8773876695a63487c5d45d9_55413621%%*/';
}
/* {block "content"} */
class Block_17149568455a63487c73bf75_30048418 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:shared.mission.raport.tpl" =============================*/
}
