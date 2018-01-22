<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:22:19
  from "/app/styles/templates/game/page.galaxy.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63428b846477_79110580',
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
  'includes' => 
  array (
    'file:page.galaxy.default.tpl' => 1,
    'file:layout.full.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.topnav.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a63428b846477_79110580 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '4099448255a63428b5d6016_30197447';
$_smarty_tpl->_subTemplateRender("file:page.galaxy.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'd0e139b3bf8879a2d5db25780513438cdf86d5b9', 'content_5a63428b5e6a50_20507468');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'caea3f24967636c87bbedef30411d2617fcdf5c6', 'content_5a63428b73da70_65378919');
}
/* Start inline template "extends:page.galaxy.default.tpl" =============================*/
function content_5a63428b5e6a50_20507468 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '4099448255a63428b5d6016_30197447';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12782225515a63428b5f9748_58186346', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7926891715a63428b738403_74290984', "content");
}
/* {block "title"} */
class Block_12782225515a63428b5f9748_58186346 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_7926891715a63428b738403_74290984 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['4099448255a63428b5d6016_30197447'] = true;
?>

	<form action="?page=galaxy" method="post" id="galaxy_form">
	<input type="hidden" id="auto" value="dr">
	<table style="min-width:324px;width:324px;">
		<tr>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_galaxy'];?>
</th>
					</tr>
					<tr>
						<td><input type="button" name="galaxyLeft" value="&lt;-" onclick="galaxy_submit('galaxyLeft')"></td>
						<td><input type="text" name="galaxy" value="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" size="5" maxlength="3" tabindex="1"></td>
						<td><input type="button" name="galaxyRight" value="-&gt;" onclick="galaxy_submit('galaxyRight')"></td>
					</tr>
				</table>
			</td>
			<td class="transparent">
				<table>
					<tr>
						<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_solar_system'];?>
</th>
					</tr>
					<tr>
						<td><input type="button" name="systemLeft" value="&lt;-" onclick="galaxy_submit('systemLeft')"></td>
						<td><input type="text" name="system" value="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" size="5" maxlength="3" tabindex="2"></td>
						<td><input type="button" name="systemRight" value="-&gt;" onclick="galaxy_submit('systemRight')"></td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td style="background-color:transparent;border:0px;" colspan="2"> 
				<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_show'];?>
">
			</td>
		</tr>
	</table>
	</form>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'action\']->value == \'sendMissle\') {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

    <form action="?page=fleetMissile" method="post">
	<input type="hidden" name="galaxy" value="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<input type="hidden" name="system" value="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<input type="hidden" name="planet" value="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<input type="hidden" name="type" value="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'type\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<table class="table569">
		<tr>
			<th colspan="2"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_missil_launch\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 [<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
]</th>
		</tr>
		<tr>
			<td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'missile_count\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <input type="text" name="SendMI" size="2" maxlength="7"></td>
			<td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_objective\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
: 
				<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'Target\',\'options\'=>$_smarty_tpl->tpl_vars[\'missileSelector\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

			</td>
		</tr>
		<tr>
			<th colspan="2" style="text-align:center;"><input type="submit" value="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_missil_launch_action\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"></th>
		</tr>
	</table>
	</form>
    <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<table class="table569">
    <tr>
		<th colspan="8"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_solar_system'];?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</th>
	</tr>
	<tr>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_pos'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_planet'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_name_activity'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_moon'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_debris'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_player_estate'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_alliance'];?>
</th>
		<th style="white-space: nowrap"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_actions'];?>
</th>
	</tr>
    <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_smarty_tpl->tpl_vars[\'planet\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'planet\']->step = 1;$_smarty_tpl->tpl_vars[\'planet\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'planet\']->step > 0 ? $_smarty_tpl->tpl_vars[\'max_planets\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'max_planets\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'planet\']->step));
if ($_smarty_tpl->tpl_vars[\'planet\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'planet\']->value = 1, $_smarty_tpl->tpl_vars[\'planet\']->iteration = 1;$_smarty_tpl->tpl_vars[\'planet\']->iteration <= $_smarty_tpl->tpl_vars[\'planet\']->total;$_smarty_tpl->tpl_vars[\'planet\']->value += $_smarty_tpl->tpl_vars[\'planet\']->step, $_smarty_tpl->tpl_vars[\'planet\']->iteration++) {
$_smarty_tpl->tpl_vars[\'planet\']->first = $_smarty_tpl->tpl_vars[\'planet\']->iteration == 1;$_smarty_tpl->tpl_vars[\'planet\']->last = $_smarty_tpl->tpl_vars[\'planet\']->iteration == $_smarty_tpl->tpl_vars[\'planet\']->total;?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<tr>
    <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'GalaxyRows\']->value[$_smarty_tpl->tpl_vars[\'planet\']->value])) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<td>
			<a href="?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1&amp;target_mission=7"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a>
		</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'GalaxyRows\']->value[$_smarty_tpl->tpl_vars[\'planet\']->value] === false) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<td>
			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		</td>
        <td></td>
        <td style="white-space: nowrap;"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_planet_destroyed\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<td>
			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		</td>
        <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php $_smarty_tpl->_assignInScope(\'currentPlanet\', $_smarty_tpl->tpl_vars[\'GalaxyRows\']->value[$_smarty_tpl->tpl_vars[\'planet\']->value] ,true);
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:220px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_planet\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 [<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'image\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
.jpg' height='75' width='75'></td><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][6]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='javascript:doit(6,<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
);'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_6"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'phalanx\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='javascript:OpenPopup(&quot;?page=phalanx&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1&quot;, &quot;&quot;, 640, 510);'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_phalanx\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][1]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1&amp;target_mission=1'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_1"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][5]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1&amp;target_mission=5'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_5"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][4]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1&amp;target_mission=4'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_4"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][3]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1&amp;target_mission=3'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_3"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][10]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_10"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td></tr></table>">
				<img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'image\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
.jpg" height="30" width="30" alt="">
			</a>
		</td>
		<td style="white-space: nowrap;"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'lastActivity\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
		<td style="white-space: nowrap;">
			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_moon\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 [<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
planeten/mond.jpg' height='75' width='75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_features\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</th></tr><tr><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_diameter\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'diameter\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td></tr><tr><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_temperature\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'temp_min\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td></tr><tr><th colspan=2><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_actions\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</th></tr><tr><td colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][1]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=3&amp;target_mission=1'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_1"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][3]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=3&amp;target_mission=3'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_3"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][3]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<br><a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=3&amp;target_mission=4'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_4"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][5]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<br><a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=3&amp;target_mission=5'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_5"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][6]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<br><a href='javascript:doit(6,<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
);'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_6"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][9]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<br><br><a href='?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=3&amp;target_mission=9'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_9"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][10]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href='?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;type=3'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_10"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><br><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td></tr></table></td></tr></table>">
				<img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
planeten/small/s_mond.jpg" height="22" width="22" alt="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'moon\'][\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
			</a>
			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		</td>
		<td style="white-space: nowrap;">
        <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'debris\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_debris_field\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 [<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
]</th></tr><tr><td style='width:80px'><img src='<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
planeten/debris.jpg' height='75' style='width:75'></td><td><table style='width:100%'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_resources\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
:</th></tr><tr><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][901];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
: </td><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'debris\'][\'metal\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td></tr><tr><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][902];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
: </td><td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'debris\'][\'crystal\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'missions\'][8]) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<tr><th colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_actions\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</th></tr><tr><td colspan='2'><a href='javascript:doit(8, <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
);'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_mission_8"];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</table></td></tr></table>">
			<img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
planeten/debris.jpg" height="22" width="22" alt="">
			</a>
        <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		</td>
		<td>
			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'playerrank\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</th></tr><tr><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!$_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'ownPlanet\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'isBuddy\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<tr><td><a href='#' onclick='return Dialog.Buddy(<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
)'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_buddy_request\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<tr><td><a href='#' onclick='return Dialog.Playercard(<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
);'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_playercard\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<tr><td><a href='?page=statistics&amp;who=1&amp;start=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'rank\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_see_on_stats\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></td></tr></table>">
				<span class="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'class\'], \'class\');
$_smarty_tpl->tpl_vars[\'class\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'class\']->value) {
$_smarty_tpl->tpl_vars[\'class\']->index++;
$_smarty_tpl->tpl_vars[\'class\']->first = !$_smarty_tpl->tpl_vars[\'class\']->index;
$__foreach_class_0_saved = $_smarty_tpl->tpl_vars[\'class\'];
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!$_smarty_tpl->tpl_vars[\'class\']->first) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
galaxy-username-<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'class\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_smarty_tpl->tpl_vars[\'class\'] = $__foreach_class_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 galaxy-username"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'username\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span>

				<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'class\'])) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

				<span>(</span><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'class\'], \'class\');
$_smarty_tpl->tpl_vars[\'class\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'class\']->value) {
$_smarty_tpl->tpl_vars[\'class\']->index++;
$_smarty_tpl->tpl_vars[\'class\']->first = !$_smarty_tpl->tpl_vars[\'class\']->index;
$__foreach_class_1_saved = $_smarty_tpl->tpl_vars[\'class\'];
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!$_smarty_tpl->tpl_vars[\'class\']->first) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<span class="galaxy-short-<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'class\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 galaxy-short"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'ShortStatus\']->value[$_smarty_tpl->tpl_vars[\'class\']->value];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_smarty_tpl->tpl_vars[\'class\'] = $__foreach_class_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<span>)</span>
				<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

			</a>
		</td>
		<td style="white-space: nowrap;">
			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

			<a class="tooltip_sticky" data-tooltip-content="<table style='width:240px'><tr><th><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_alliance\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'member\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</th></tr><td><table><tr><td><a href='?page=alliance&amp;mode=info&amp;id=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_alliance_page\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></td></tr><tr><td><a href='?page=statistics&amp;start=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'rank\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;who=2'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_see_on_stats\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></td></tr><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'web\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<tr><td><a href='<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'web\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
' target='allyweb'><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_alliance_web_page\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</table></td></table>">
				<span class="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'class\'], \'class\');
$_smarty_tpl->tpl_vars[\'class\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'class\']->value) {
$_smarty_tpl->tpl_vars[\'class\']->index++;
$_smarty_tpl->tpl_vars[\'class\']->first = !$_smarty_tpl->tpl_vars[\'class\']->index;
$__foreach_class_2_saved = $_smarty_tpl->tpl_vars[\'class\'];
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!$_smarty_tpl->tpl_vars[\'class\']->first) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
galaxy-alliance-<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'class\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_smarty_tpl->tpl_vars[\'class\'] = $__foreach_class_2_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 galaxy-alliance"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'alliance\'][\'tag\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span>
			</a>
			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
-<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		</td>
		<td style="white-space: nowrap;">
			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

				<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'esp\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

				<a href="javascript:doit(6,<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
,<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo htmlspecialchars(json_encode($_smarty_tpl->tpl_vars[\'spyShips\']->value), ENT_QUOTES, \'UTF-8\', true);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
)">
					<img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
img/e.gif" title="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_spy\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

				<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'message\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

				<a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
)">
					<img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
img/m.gif" title="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'write_message\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

				<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'buddy\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

                <a href="#" onclick="return Dialog.Buddy(<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'user\'][\'id\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
)">
					<img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
img/b.gif" title="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_buddy_request\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

				<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'action\'][\'missle\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a href="?page=galaxy&amp;action=sendMissle&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;type=1">
					<img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
img/r.gif" title="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_missile_attack\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" alt="">
				</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
-<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

			<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'currentPlanet\']->value[\'planet\'][\'phalanx\']) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<a class="textForBlind" href="#" onclick="OpenPopup('?page=phalanx&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1','',640,510);return false;"><span><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'gl_phalanx\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span></a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		</td>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	</tr>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }
}
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<tr>
		<td><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'max_planets\']->value+1;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
		<td colspan="7"><a href="?page=fleetTable&amp;galaxy=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planet=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'max_planets\']->value+1;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&amp;planettype=1&amp;target_mission=15"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_out_space'];?>
</a></td>
	</tr>
	<tr>
		<td colspan="6">(<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetcount\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
)</td>
		<td colspan="2">
			<a class="tooltip" data-tooltip-content="<table style='width:240px'><tr><th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_legend'];?>
</td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_strong_player'];?>
</td><td><span class='galaxy-short-strong'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_strong'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_week_player'];?>
</td><td><span class='galaxy-short-noob'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_newbie'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_vacation'];?>
</td><td><span class='galaxy-short-vacation'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_vacation'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_banned'];?>
</td><td><span class='galaxy-short-banned'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_ban'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_inactive_seven'];?>
</td><td><span class='galaxy-short-inactive'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_inactive'];?>
</span></td></tr><tr><td style='width:220px'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_inactive_twentyeight'];?>
</td><td><span class='galaxy-short-longinactive'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_short_long_inactive'];?>
</span></td></tr></table>"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_legend'];?>
</a> 
		</td>
	</tr>
	<tr>
		<td colspan="3"><span id="missiles"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'currentmip\']->value);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_missiles'];?>
</td>
		<td colspan="5"><span id="slots"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxfleetcount\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span>/<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleetmax\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_fleets'];?>
</td>
	</tr>
	<tr>
		<td colspan="3">
			<span id="elementID210"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'spyprobes\']->value);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_spyprobes'];?>

		</td>
		<td colspan="3">
			<span id="elementID209"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'recyclers\']->value);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_recyclers'];?>

		</td>
		<td colspan="2">
			<span id="elementID219"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'grecyclers\']->value);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_avaible_grecyclers'];?>

		</td>
	</tr>
	<tr style="display: none;" id="fleetstatusrow">
		<th colspan="8"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['cff_fleet_target'];?>
</th>
	</tr>
	</table>
	<?php echo '<script'; ?>
 type="text/javascript">
		status_ok		= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_ajax_status_ok'];?>
';
		status_fail		= '<?php echo $_smarty_tpl->tpl_vars['LNG']->value['gl_ajax_status_fail'];?>
';
		MaxFleetSetting = <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'settings_fleetactions\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
;
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:page.galaxy.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63428b73f6d6_11004682 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '4099448255a63428b5d6016_30197447';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4053575985a63428b745203_82071395', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
, <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
, <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
, <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
, <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
, <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7039528945a63428b76b5a8_39074183', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_4053575985a63428b745203_82071395 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['4099448255a63428b5d6016_30197447'] = true;
?>
 - <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 - <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_7039528945a63428b76b5a8_39074183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63428b776ee6_24103136 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4099448255a63428b5d6016_30197447';
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
        <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

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
echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value > 0) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_NOTICE'))) {?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUDDYLIST'))) {?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value > 0) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 (<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63428b7e13f2_76847086 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4099448255a63428b5d6016_30197447';
?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
images/<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><span<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td class="res_current"><span<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } else { ?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<td class="res_max" id="max_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

									<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<?php echo '<script'; ?>
 type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
;
		var vacation			= <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
;
        $(function() {
		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\'])) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

            resourceTicker({
                available: <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
,
                limit: [0, <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
],
                production: <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\']);?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
,
                valueElem: "current_<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
"
            }, true);
		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

        });
		<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/game/topnav.js"><?php echo '</script'; ?>
>
        <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasGate\']->value) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
echo '<script'; ?>
 src="scripts/game/gate.js"><?php echo '</script'; ?>
><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

		<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'delete\']->value) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'vacation\']->value) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "extends:page.galaxy.default.tpl" =============================*/
function content_5a63428b73da70_65378919 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '4099448255a63428b5d6016_30197447';
foreach (array('bodyclass'=>"full") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"full"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a63428b73f6d6_11004682');
?>

<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value) {?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
</a><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php }?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '3656a4034d5586e57c8cab9755b4109091627cf1', 'content_5a63428b776ee6_24103136');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '8cc530df2d91f6fd4fe06782e8b5690519815d2f', 'content_5a63428b7e13f2_76847086');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3198754345a63428b841298_55846548', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'cronjobs\']->value, \'cronjob\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->value) {
?>/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';?>

<?php echo '/*%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:4099448255a63428b5d6016_30197447%%*/';
}
/* {block "content"} */
class Block_3198754345a63428b841298_55846548 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.galaxy.default.tpl" =============================*/
}
