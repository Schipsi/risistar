<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:54:19
  from "/app/styles/templates/game/page.logout.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a634a0b643d01_73349924',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '3a0b6e6c103a7fb4986589794898471a5b99e491' => 
    array (
      0 => '/app/styles/templates/game/page.logout.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    '9fd8760898d51030a2fa680e930194f6cadf3471' => 
    array (
      0 => '/app/styles/templates/game/page.logout.default.tpl',
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
    'file:page.logout.default.tpl' => 1,
    'file:layout.popup.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a634a0b643d01_73349924 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '6412858475a634a0b5f7ba7_05354491';
$_smarty_tpl->_subTemplateRender("file:page.logout.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '9fd8760898d51030a2fa680e930194f6cadf3471', 'content_5a634a0b5fae16_98076960');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '19b37d3835836753e2144307cf5fc6e59513ae45', 'content_5a634a0b609d68_43441737');
}
/* Start inline template "extends:page.logout.default.tpl" =============================*/
function content_5a634a0b5fae16_98076960 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '6412858475a634a0b5f7ba7_05354491';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11165142205a634a0b5feb30_21157079', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11227331315a634a0b606670_17706310', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7906592355a634a0b608ff1_33252348', "script");
}
/* {block "title"} */
class Block_11165142205a634a0b5feb30_21157079 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_11227331315a634a0b606670_17706310 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<table class="table519">
	<tr>
		<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lo_title'];?>
</th>
		</tr>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lo_logout'];?>
</td>
	</tr>
</table>
<br><br>
<table class="table519">
<tr>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lo_redirect'];?>
</th>
</tr>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lo_notify'];?>
<br><a href="./index.php"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lo_continue'];?>
</a></td>
</tr>
</table>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_7906592355a634a0b608ff1_33252348 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="text/javascript">
    var second = 5;
	function Countdown(){
		if(second == 0)
			return;
			
		second--;
		$('#seconds').text(second);
	}
	window.setTimeout("window.location.href='./index.php'", 5000);
	window.setInterval("Countdown()", 1000);
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
/* End inline template "extends:page.logout.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
function content_5a634a0b60bbb0_97352811 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '6412858475a634a0b5f7ba7_05354491';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18866409395a634a0b611a39_04549231', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
, <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
, <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
, <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
, <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
, <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19335402285a634a0b63a513_19587250', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_18866409395a634a0b611a39_04549231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['6412858475a634a0b5f7ba7_05354491'] = true;
?>
 - <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';?>
 - <?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_19335402285a634a0b63a513_19587250 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
/* Start inline template "extends:page.logout.default.tpl" =============================*/
function content_5a634a0b609d68_43441737 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '6412858475a634a0b5f7ba7_05354491';
foreach (array('bodyclass'=>"popup") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"popup"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a634a0b60bbb0_97352811');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15704075665a634a0b641921_96211299', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:6412858475a634a0b5f7ba7_05354491%%*/';
}
/* {block "content"} */
class Block_15704075665a634a0b641921_96211299 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.logout.default.tpl" =============================*/
}
