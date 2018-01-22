<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:55:11
  from "/app/styles/templates/adm/AccountEditorPageShips.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a634a3f61ec60_96049336',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'fb14a189775b7329da1d5898956d799fb55444a4' => 
    array (
      0 => '/app/styles/templates/adm/AccountEditorPageShips.tpl',
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
function content_5a634a3f61ec60_96049336 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19319165425a634a3f475a84_60892570';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a634a3f561f90_53155704');
?>

<form action="" method="post">
<table width="45%">
<tr>
<td colspan="3" align="left"><a href="?page=accounteditor">
<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ad_back_to_menu'];?>
</a></td>
</tr><tr>
	<th colspan="7"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ad_ships_title'];?>
</th>
</tr><tr>
	<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['input_id_p_m'];?>
</td>
	<td><input name="id" type="text" value="0" size="3"></td>
</tr><tr>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ad_number'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ad_ships'];?>
</th>
	<th><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ad_count'];?>
</th>
</tr>
<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'inputlist\']->value, \'input\', false, \'id\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'id\']->value => $_smarty_tpl->tpl_vars[\'input\']->value) {
?>/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>

<tr><td><?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'id\']->value];?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
</td><td><input name="<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'input\']->value[\'type\'];?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
" type="text" value="0"></td></tr>
<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>

<tr>
	<td colspan="3">
	<input type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['button_reset'];?>
"><br><br>
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['button_add'];?>
" name="add">&nbsp;
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['button_delete'];?>
" name="delete"></td>
</tr>
</table>
</form>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a634a3f612345_80632985');
}
/* Start inline template "/app/styles/templates/adm/AccountEditorPageShips.tpl" =============================*/
function content_5a634a3f561f90_53155704 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19319165425a634a3f475a84_60892570';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
, <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
, <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
, <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
, <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
, <?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:19319165425a634a3f475a84_60892570%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/AccountEditorPageShips.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/AccountEditorPageShips.tpl" =============================*/
function content_5a634a3f612345_80632985 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '19319165425a634a3f475a84_60892570';
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
/* End inline template "/app/styles/templates/adm/AccountEditorPageShips.tpl" =============================*/
}
