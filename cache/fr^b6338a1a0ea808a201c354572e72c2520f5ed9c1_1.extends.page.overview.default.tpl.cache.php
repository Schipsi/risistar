<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:53:18
  from "/app/styles/templates/game/page.overview.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349ce133f33_77773719',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'b6338a1a0ea808a201c354572e72c2520f5ed9c1' => 
    array (
      0 => '/app/styles/templates/game/page.overview.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    '98c268b4cbf0ff81b065aaa78dda725715780c3e' => 
    array (
      0 => '/app/styles/templates/game/page.overview.default.tpl',
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
    'file:page.overview.default.tpl' => 1,
    'file:layout.full.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.topnav.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a6349ce133f33_77773719 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '13882130335a6349cdeb4866_21752843';
$_smarty_tpl->_subTemplateRender("file:page.overview.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '98c268b4cbf0ff81b065aaa78dda725715780c3e', 'content_5a6349cdeba3f2_87786533');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'caea3f24967636c87bbedef30411d2617fcdf5c6', 'content_5a6349ce01ec26_01382169');
}
/* Start inline template "extends:page.overview.default.tpl" =============================*/
function content_5a6349cdeba3f2_87786533 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13882130335a6349cdeb4866_21752843';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19853902845a6349cdec5556_12729564', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1181170545a6349cdec9bd3_68297248', "script");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15155326045a6349ce019a29_87839846', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10235921045a6349ce01de74_22939167', "script");
}
/* {block "title"} */
class Block_19853902845a6349cdec5556_12729564 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_1181170545a6349cdec9bd3_68297248 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* {block "content"} */
class Block_15155326045a6349ce019a29_87839846 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['13882130335a6349cdeb4866_21752843'] = true;
?>

<table class="table519">
	<tr>
		<th colspan="3"><a href="#" onclick="return Dialog.PlanetAction();" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_planetmenu'];?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value["type_planet_".((string)$_smarty_tpl->tpl_vars[\'planet_type\']->value)];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 "<span class="planetname"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetname\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</span>"</a> (<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'username\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
)</th>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'messages\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td colspan="3"><a href="?page=messages"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'messages\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a></td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_server_time'];?>
</td>
		<td colspan="2" class="servertime"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'servertime\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'is_news\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_news\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td><td colspan="2"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'news\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_admins_online'];?>
</td>
		<td colspan="2"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'AdminsOnline\']->value, \'Name\', false, \'ID\');
$_smarty_tpl->tpl_vars[\'Name\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ID\']->value => $_smarty_tpl->tpl_vars[\'Name\']->value) {
$_smarty_tpl->tpl_vars[\'Name\']->index++;
$_smarty_tpl->tpl_vars[\'Name\']->first = !$_smarty_tpl->tpl_vars[\'Name\']->index;
$__foreach_Name_0_saved = $_smarty_tpl->tpl_vars[\'Name\'];
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!$_smarty_tpl->tpl_vars[\'Name\']->first) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&nbsp;&bull;&nbsp;<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
)"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'Name\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_smarty_tpl->tpl_vars[\'Name\'] = $__foreach_Name_0_saved;
}
} else {
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_no_admins_online\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'chatOnline\']->value)) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td style="white-space: nowrap;"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_chat_online\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
		<td colspan="2"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'chatOnline\']->value, \'Name\');
$_smarty_tpl->tpl_vars[\'Name\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Name\']->value) {
$_smarty_tpl->tpl_vars[\'Name\']->index++;
$_smarty_tpl->tpl_vars[\'Name\']->first = !$_smarty_tpl->tpl_vars[\'Name\']->index;
$__foreach_Name_1_saved = $_smarty_tpl->tpl_vars[\'Name\'];
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!$_smarty_tpl->tpl_vars[\'Name\']->first) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
,&nbsp;<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<a href="?page=chat"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'Name\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_smarty_tpl->tpl_vars[\'Name\'] = $__foreach_Name_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'teamspeakData\']->value !== false) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_teamspeak\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
		<td colspan="3"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'teamspeakData\']->value[\'error\']) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'teamspeakData\']->value[\'error\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'teamspeakData\']->value[\'url\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_teamspeak_connect\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a> &bull; <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_teamspeak_online\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
: <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'teamspeakData\']->value[\'current\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
/<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'teamspeakData\']->value[\'max\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_events'];?>
</th>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'fleets\']->value, \'fleet\', false, \'index\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'index\']->value => $_smarty_tpl->tpl_vars[\'fleet\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td id="fleettime_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'index\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" class="fleets" data-fleet-end-time="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'returntime\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" data-fleet-time="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'resttime\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php ob_start();
echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'resttime\'];
$_prefixVariable1=ob_get_clean();
echo pretty_fly_time($_prefixVariable1);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
		<td colspan="2"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value[\'text\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'Moon\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<a href="game.php?page=overview&amp;cp=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'Moon\']->value[\'id\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&amp;re=0" title="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'Moon\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
planeten/mond.jpg" height="50" width="50" alt="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'Moon\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 (<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fcm_moon\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
)"></a><br><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'Moon\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 (<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fcm_moon\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
)<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
		<td>
			<img src="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
planeten/<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetimage\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
.jpg" height="200" width="200" alt="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetname\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
			<br><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\']) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\'][\'id\']];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 (<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\'][\'level\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
)<br><div class="timer" data-time="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\'][\'timeleft\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildInfo\']->value[\'buildings\'][\'starttime\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</div><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_free\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		</td>
		<td>
		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'AllPlanets\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		<table id="planetList">
			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'AllPlanets\']->value, \'PlanetRow\', true);
$_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'PlanetRow\']->value) {
$_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration++;
$_smarty_tpl->tpl_vars[\'PlanetRow\']->last = $_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration == $_smarty_tpl->tpl_vars[\'PlanetRow\']->total;
$__foreach_PlanetRow_3_saved = $_smarty_tpl->tpl_vars[\'PlanetRow\'];
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\']) === 1) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<tr style="height:20px;"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<td class="transparent"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<br><a href="game.php?page=overview&amp;cp=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'id\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" title="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'image\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
.jpg" alt="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"></a><br><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'PlanetRow\']->value[\'build\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'PlanetRow\']->last && $_smarty_tpl->tpl_vars[\'PlanetRow\']->total > 1 && ($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\']) !== 0) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php $_smarty_tpl->_assignInScope(\'to\', $_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\']-($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\']) ,true);
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_smarty_tpl->tpl_vars[\'foo\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'foo\']->step = 1;$_smarty_tpl->tpl_vars[\'foo\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'foo\']->step > 0 ? $_smarty_tpl->tpl_vars[\'to\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'to\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'foo\']->step));
if ($_smarty_tpl->tpl_vars[\'foo\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'foo\']->value = 1, $_smarty_tpl->tpl_vars[\'foo\']->iteration = 1;$_smarty_tpl->tpl_vars[\'foo\']->iteration <= $_smarty_tpl->tpl_vars[\'foo\']->total;$_smarty_tpl->tpl_vars[\'foo\']->value += $_smarty_tpl->tpl_vars[\'foo\']->step, $_smarty_tpl->tpl_vars[\'foo\']->iteration++) {
$_smarty_tpl->tpl_vars[\'foo\']->first = $_smarty_tpl->tpl_vars[\'foo\']->iteration == 1;$_smarty_tpl->tpl_vars[\'foo\']->last = $_smarty_tpl->tpl_vars[\'foo\']->iteration == $_smarty_tpl->tpl_vars[\'foo\']->total;?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<td class="transparent">&nbsp;</td>
			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }
}
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (($_smarty_tpl->tpl_vars[\'PlanetRow\']->iteration%$_smarty_tpl->tpl_vars[\'themeSettings\']->value[\'PLANET_ROWS_ON_OVERVIEW\']) === 0) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</tr><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

			<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_smarty_tpl->tpl_vars[\'PlanetRow\'] = $__foreach_PlanetRow_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		</table>
		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_diameter'];?>
</td>
		<td colspan="2"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_diameter\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_distance_unit'];?>
 (<a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_developed_fields'];?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_field_current\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a> / <a title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_max_developed_fields'];?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_field_max\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_fields'];?>
)</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temperature'];?>
</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_aprox'];?>
 <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_temp_min\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_to'];?>
 <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet_temp_max\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo $_smarty_tpl->tpl_vars['LNG']->value['ov_temp_unit'];?>
</td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_position'];?>
</td>
		<td colspan="2"><a href="game.php?page=galaxy&amp;galaxy=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&amp;system=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">[<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
:<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
:<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
]</a></td>
	</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_points'];?>
</td>
		<td colspan="2"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'rankInfo\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'ref_active\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<th colspan="3"><label for="referral"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_reflink\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</label></th>
	</tr>
	<tr>
		<td colspan="3"><input id="referral" type="text" value="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'path\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
index.php?ref=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'userid\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" readonly="readonly" style="width:450px;" /></td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'RefLinks\']->value, \'RefLink\', false, \'RefID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'RefID\']->value => $_smarty_tpl->tpl_vars[\'RefLink\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td colspan="2"><a href="#" onclick="return Dialog.Playercard(<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'RefID\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
, '<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'RefLink\']->value[\'username\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
');"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'RefLink\']->value[\'username\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a></td>
		<td><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php ob_start();
echo pretty_number($_smarty_tpl->tpl_vars[\'RefLink\']->value[\'points\']);
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 / <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ref_minpoints\']->value);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
} else {
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<tr>
		<td colspan="3"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_noreflink\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

</table>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_10235921045a6349ce01de74_22939167 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="scripts/game/overview.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
/* End inline template "extends:page.overview.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a6349ce020844_66745549 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13882130335a6349cdeb4866_21752843';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15555914595a6349ce026a72_04705352', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
, <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
, <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
, <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
, <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
, <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12499228435a6349ce04f414_78358936', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_15555914595a6349ce026a72_04705352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['13882130335a6349cdeb4866_21752843'] = true;
?>
 - <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 - <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_12499228435a6349ce04f414_78358936 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a6349ce05ac30_82433855 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13882130335a6349cdeb4866_21752843';
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
        <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

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
echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value > 0) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_NOTICE'))) {?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUDDYLIST'))) {?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value > 0) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 (<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a6349ce0c6718_10001165 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13882130335a6349cdeb4866_21752843';
?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
images/<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><span<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td class="res_current"><span<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } else { ?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<td class="res_max" id="max_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

									<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		<?php echo '<script'; ?>
 type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
;
		var vacation			= <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
;
        $(function() {
		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\'])) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

            resourceTicker({
                available: <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
,
                limit: [0, <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
],
                production: <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\']);?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
,
                valueElem: "current_<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
"
            }, true);
		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

        });
		<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/game/topnav.js"><?php echo '</script'; ?>
>
        <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasGate\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
echo '<script'; ?>
 src="scripts/game/gate.js"><?php echo '</script'; ?>
><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

		<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'delete\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'vacation\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 <?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "extends:page.overview.default.tpl" =============================*/
function content_5a6349ce01ec26_01382169 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13882130335a6349cdeb4866_21752843';
foreach (array('bodyclass'=>"full") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"full"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a6349ce020844_66745549');
?>

<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value) {?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
</a><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php }?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '3656a4034d5586e57c8cab9755b4109091627cf1', 'content_5a6349ce05ac30_82433855');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '8cc530df2d91f6fd4fe06782e8b5690519815d2f', 'content_5a6349ce0c6718_10001165');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4510926325a6349ce12e968_48748352', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'cronjobs\']->value, \'cronjob\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->value) {
?>/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';?>

<?php echo '/*%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:13882130335a6349cdeb4866_21752843%%*/';
}
/* {block "content"} */
class Block_4510926325a6349ce12e968_48748352 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.overview.default.tpl" =============================*/
}
