<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:53:38
  from "/app/styles/templates/game/shared.mission.raport.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349e205d0f0_30569847',
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
function content_5a6349e205d0f0_30569847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '17596138415a6349e1e5d362_15064576';
$_smarty_tpl->_subTemplateRender("file:shared.mission.raport.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'a92fa47a22385200b00a098a1767f40dbc519d53', 'content_5a6349e1e60a91_85552828');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '19b37d3835836753e2144307cf5fc6e59513ae45', 'content_5a6349e2023e72_18538604');
}
/* Start inline template "extends:shared.mission.raport.tpl" =============================*/
function content_5a6349e1e60a91_85552828 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '17596138415a6349e1e5d362_15064576';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5605489885a6349e1e65966_36260584', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1428281505a6349e201df40_30459820', "content");
?>
 <?php
}
/* {block "title"} */
class Block_5605489885a6349e1e65966_36260584 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['17596138415a6349e1e5d362_15064576'] = true;
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'pageTitle\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1428281505a6349e201df40_30459820 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['17596138415a6349e1e5d362_15064576'] = true;
?>

<?php if (isset($_smarty_tpl->tpl_vars['Info']->value)) {?>
<table style="width:100%">
	<tr>
		<td class="transparent" style="width:40%;font-size:22px;font-weight:bold;padding:10px 0 30px;color:<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
lime<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
red<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
white<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo $_smarty_tpl->tpl_vars['Info']->value[0];?>
</td>
		<td class="transparent" style="font-size:22px;font-weight:bold;padding:10px 0 30px;">VS</td>
		<td class="transparent" style="width:40%;font-size:22px;font-weight:bold;padding:10px 0 30px;color:<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
lime<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
red<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
white<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo $_smarty_tpl->tpl_vars['Info']->value[1];?>
</td>
	</tr>
</table>
<?php }?>
<div style="width:100%;text-align:center">
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'mode\'] == 1) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_title\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attack_title\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'Raport\']->value[\'time\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
:<br><br>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Raport\']->value[\'rounds\'], \'RoundInfo\', true, \'Round\');
$_smarty_tpl->tpl_vars[\'RoundInfo\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Round\']->value => $_smarty_tpl->tpl_vars[\'RoundInfo\']->value) {
$_smarty_tpl->tpl_vars[\'RoundInfo\']->iteration++;
$_smarty_tpl->tpl_vars[\'RoundInfo\']->last = $_smarty_tpl->tpl_vars[\'RoundInfo\']->iteration == $_smarty_tpl->tpl_vars[\'RoundInfo\']->total;
$__foreach_RoundInfo_0_saved = $_smarty_tpl->tpl_vars[\'RoundInfo\'];
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<table>
	<tr>
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'attacker\'], \'Player\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Player\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php $_smarty_tpl->_assignInScope(\'PlayerInfo\', $_smarty_tpl->tpl_vars[\'Raport\']->value[\'players\'][$_smarty_tpl->tpl_vars[\'Player\']->value[\'userID\']] ,true);
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<td class="transparent">
			<table>
				<tr>
					<td>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attack_attacker_pos\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'name\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'Info\']->value)) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
([XX:XX:XX])<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
([<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][0];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
:<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][1];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
:<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][2];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
]<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3])) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 (<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_planet_short_".((string)$_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3])];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
)<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
)<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][0];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
% - <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][1];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
% - <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][2];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
%
						<table width="100%">
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'])) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_type\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'shortNames\'][$_smarty_tpl->tpl_vars[\'ShipID\']->value];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_count\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[0]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[1]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[2]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[3]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							<tr>
								<td class="transparent">
									<br><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destroyed\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br><br>
								</td>
							</tr>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

						</table>
					</td>
				</tr>
			</table>
		</td>
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	</tr>
</table>
<br><br>
<table>
	<tr>
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'defender\'], \'Player\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Player\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php $_smarty_tpl->_assignInScope(\'PlayerInfo\', $_smarty_tpl->tpl_vars[\'Raport\']->value[\'players\'][$_smarty_tpl->tpl_vars[\'Player\']->value[\'userID\']] ,true);
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<td class="transparent">
			<table>
				<tr>
					<td>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attack_defender_pos\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'name\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'Info\']->value)) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
([XX:XX:XX])<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
([<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][0];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
:<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][1];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
:<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][2];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
]<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3])) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 (<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'type_planet_short\'][$_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'koords\'][3]];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
)<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
)<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][0];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
% - <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][1];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
% - <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlayerInfo\']->value[\'tech\'][2];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
%
						<table width="100%">
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'])) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_type\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'shortNames\'][$_smarty_tpl->tpl_vars[\'ShipID\']->value];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_count\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[0]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_weapon\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[1]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_shield\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[2]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
							<tr>
								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_ship_armour\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Player\']->value[\'ships\'], \'ShipData\', false, \'ShipID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ShipID\']->value => $_smarty_tpl->tpl_vars[\'ShipData\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

								<td class="transparent"><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ShipData\']->value[3]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
</td>
								<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							</tr>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

							<tr>
								<td class="transparent">
									<br><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destroyed\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br><br>
								</td>
							</tr>
						<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

						</table>
					</td>
				</tr>
			</table>
		</td>
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	</tr>
</table>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (!$_smarty_tpl->tpl_vars[\'RoundInfo\']->last) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_attack_1\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][0]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_attack_2\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][3]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'damage\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_defs_1\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][2]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fleet_defs_2\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RoundInfo\']->value[\'info\'][1]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'damage\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br><br>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_smarty_tpl->tpl_vars[\'RoundInfo\'] = $__foreach_RoundInfo_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<br><br>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_attacker_won\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_stealed_ressources\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Raport\']->value[\'steal\'], \'amount\', true, \'elementID\');
$_smarty_tpl->tpl_vars[\'amount\']->iteration = 0;
$_smarty_tpl->tpl_vars[\'amount\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'elementID\']->value => $_smarty_tpl->tpl_vars[\'amount\']->value) {
$_smarty_tpl->tpl_vars[\'amount\']->iteration++;
$_smarty_tpl->tpl_vars[\'amount\']->index++;
$_smarty_tpl->tpl_vars[\'amount\']->last = $_smarty_tpl->tpl_vars[\'amount\']->iteration == $_smarty_tpl->tpl_vars[\'amount\']->total;
$__foreach_amount_13_saved = $_smarty_tpl->tpl_vars[\'amount\'];
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'amount\']->value);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (($_smarty_tpl->tpl_vars[\'amount\']->index+2) == count($_smarty_tpl->tpl_vars[\'Raport\']->value[\'steal\'])) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_and\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } elseif (!$_smarty_tpl->tpl_vars[\'amount\']->last) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
, <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_smarty_tpl->tpl_vars[\'amount\'] = $__foreach_amount_13_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_defender_won\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_both_won\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<br><br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_attacker_lostunits'];?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'Raport\']->value[\'units\'][0]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_units'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_defender_lostunits'];?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'Raport\']->value[\'units\'][1]);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['sys_units'];?>
<br>
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['debree_field_1'];?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Raport\']->value[\'debris\'], \'amount\', true, \'elementID\');
$_smarty_tpl->tpl_vars[\'amount\']->iteration = 0;
$_smarty_tpl->tpl_vars[\'amount\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'elementID\']->value => $_smarty_tpl->tpl_vars[\'amount\']->value) {
$_smarty_tpl->tpl_vars[\'amount\']->iteration++;
$_smarty_tpl->tpl_vars[\'amount\']->index++;
$_smarty_tpl->tpl_vars[\'amount\']->last = $_smarty_tpl->tpl_vars[\'amount\']->iteration == $_smarty_tpl->tpl_vars[\'amount\']->total;
$__foreach_amount_14_saved = $_smarty_tpl->tpl_vars[\'amount\'];
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'amount\']->value);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'elementID\']->value];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (($_smarty_tpl->tpl_vars[\'amount\']->index+2) == count($_smarty_tpl->tpl_vars[\'Raport\']->value[\'debris\'])) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_and\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } elseif (!$_smarty_tpl->tpl_vars[\'amount\']->last) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
, <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_smarty_tpl->tpl_vars[\'amount\'] = $__foreach_amount_14_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
echo $_smarty_tpl->tpl_vars['LNG']->value['debree_field_2'];?>
<br><br>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'mode\'] == 1) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	
	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroySuccess\'] == -1) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_stop\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br>
	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_lune\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroyChance\']));?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
<br><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_mess1\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroySuccess\'] == 1) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

			
			<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_reussi\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonDestroySuccess\'] == 0) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

			
			<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_null\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
			
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<br>
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_rip\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'fleetDestroyChance\']));?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if ($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'fleetDestroySuccess\'] == 1) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

			
			<br><?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_destruc_echec\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
			
	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	
	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_moonproba\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonChance\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 %<br>
	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonName\'])) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'Info\']->value)) {?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

			
			<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_moonbuilt\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonName\']),"XX","XX","XX");?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php } else { ?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

			
			<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo sprintf($_smarty_tpl->tpl_vars[\'LNG\']->value[\'sys_moonbuilt\'],((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'moon\'][\'moonName\']),((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'koords\'][0]),((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'koords\'][1]),((string)$_smarty_tpl->tpl_vars[\'Raport\']->value[\'koords\'][2]));?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php }?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>


<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'Raport\']->value[\'additionalInfo\'];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

</div>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:shared.mission.raport.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
function content_5a6349e20266f7_72159579 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '17596138415a6349e1e5d362_15064576';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5172797005a6349e202c504_98575470', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
, <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
, <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
, <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
, <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
, <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9932720145a6349e2053753_75464723', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_5172797005a6349e202c504_98575470 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['17596138415a6349e1e5d362_15064576'] = true;
?>
 - <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';?>
 - <?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_9932720145a6349e2053753_75464723 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
/* Start inline template "extends:shared.mission.raport.tpl" =============================*/
function content_5a6349e2023e72_18538604 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '17596138415a6349e1e5d362_15064576';
foreach (array('bodyclass'=>"popup") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"popup"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a6349e20266f7_72159579');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18442643285a6349e205aca9_90844058', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:17596138415a6349e1e5d362_15064576%%*/';
}
/* {block "content"} */
class Block_18442643285a6349e205aca9_90844058 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:shared.mission.raport.tpl" =============================*/
}
