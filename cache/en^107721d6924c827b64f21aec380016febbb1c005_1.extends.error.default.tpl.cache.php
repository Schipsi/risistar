<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:47:12
  from "/app/styles/templates/game/error.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6348609a4843_98296609',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '107721d6924c827b64f21aec380016febbb1c005' => 
    array (
      0 => '/app/styles/templates/game/error.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    'e63a8dbcb6699121244b90ce77879cb15d6a189e' => 
    array (
      0 => '/app/styles/templates/game/error.default.tpl',
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
    'file:error.default.tpl' => 1,
    'file:layout.popup.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a6348609a4843_98296609 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '10209441945a6348608fe0b4_03679639';
$_smarty_tpl->_subTemplateRender("file:error.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'e63a8dbcb6699121244b90ce77879cb15d6a189e', 'content_5a6348609009f1_62784342');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '19b37d3835836753e2144307cf5fc6e59513ae45', 'content_5a634860945bd0_40563585');
}
/* Start inline template "extends:error.default.tpl" =============================*/
function content_5a6348609009f1_62784342 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '10209441945a6348608fe0b4_03679639';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18956418215a634860934b28_83117560', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17378587755a634860944b70_35300931', "content");
}
/* {block "title"} */
class Block_18956418215a634860934b28_83117560 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_17378587755a634860944b70_35300931 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['10209441945a6348608fe0b4_03679639'] = true;
?>

<table class="table519">
	<tr>
		<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
</th>
	</tr>
	<tr>
		<td><p><?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'message\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
</p><?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'redirectButtons\']->value)) {?>/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
<p><?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'redirectButtons\']->value, \'button\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'button\']->value) {
?>/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'button\']->value[\'url\'];?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><button><?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'button\']->value[\'label\'];?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
</button></a><?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
</p><?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php }?>/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
</td>
	</tr>
</table>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:error.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
function content_5a6348609476a6_85558177 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '10209441945a6348608fe0b4_03679639';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2954464275a634860951c80_06771590', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
, <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
, <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
, <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
, <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
, <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4443307135a634860997a35_93140019', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_2954464275a634860951c80_06771590 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['10209441945a6348608fe0b4_03679639'] = true;
?>
 - <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';?>
 - <?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_4443307135a634860997a35_93140019 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
/* Start inline template "extends:error.default.tpl" =============================*/
function content_5a634860945bd0_40563585 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '10209441945a6348608fe0b4_03679639';
foreach (array('bodyclass'=>"popup") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"popup"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a6348609476a6_85558177');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16392890385a6348609a2319_03082955', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:10209441945a6348608fe0b4_03679639%%*/';
}
/* {block "content"} */
class Block_16392890385a6348609a2319_03082955 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:error.default.tpl" =============================*/
}
