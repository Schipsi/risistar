<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:54:41
  from "/app/styles/templates/adm/giveaway.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a634a21cd1711_42679557',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7eb786e907d7bbfcd1859ac7f09b23e6d2ff6a95' => 
    array (
      0 => '/app/styles/templates/adm/giveaway.tpl',
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
  'cache_lifetime' => 604800,
),true)) {
function content_5a634a21cd1711_42679557 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "Ready";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Info";
	var days 		= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"] 
	var months 		= ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	</script> 
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scripts']->value, 'scriptname');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->value) {
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="giveaway" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<form method="post">
<input type="hidden" name="action" value="send">
<!-- Zielplaneten definieren -->
<table width="760px" style="color:#FFFFFF"><tr>
        <th colspan="3">Define Target</th>
</tr>
<tr style="height:26px;">
	<td width="50%">Type of Planet:</td>
	<td width="50%">
		<table style="color:#FFFFFF">
			<tr>
				<td class="transparent"><input type="checkbox" name="planet" value="1" checked></td>
				<td class="transparent left">Planet</td>
			</tr>
			<tr>
				<td class="transparent"><input type="checkbox" name="moon" value="1"></td>
				<td class="transparent left">Moon</td>
			</tr>
		</table>
	</td>
</tr>
<tr style="height:26px;"><td width="50%">Only Main Planet:</td><td width="50%"><input type="checkbox" name="mainplanet" value="1"></td></tr>
<tr style="height:26px;"><td width="50%">Only active players<br>Will not be offered to inactive players:</td><td width="50%"><input type="checkbox" name="no_inactive" value="1"></td></tr>
</table>


<!-- Rohstoffe -->
<table width="760px" style="color:#FFFFFF">
<tr>
        <th colspan="2">Ressources</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reslist']->value['resstype'][1], 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['Element']->value];?>
:</td><td width="50%"><input type="text" name="element_<?php echo $_smarty_tpl->tpl_vars['Element']->value;?>
" value="0" pattern="[0-9]*"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reslist']->value['resstype'][3], 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['Element']->value];?>
:</td><td width="50%"><input type="text" name="element_<?php echo $_smarty_tpl->tpl_vars['Element']->value;?>
" value="0" pattern="[0-9]*"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<!-- Gebäude -->
<table width="760px" style="color:#FFFFFF">
<tr>
        <th colspan="2">Buildings</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reslist']->value['build'], 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['Element']->value];?>
:</td><td width="50%"><input type="text" name="element_<?php echo $_smarty_tpl->tpl_vars['Element']->value;?>
" value="0" pattern="[0-9]*"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<!-- Technologie -->
<table width="760px" style="color:#FFFFFF">
<tr>
        <th colspan="2">Research</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reslist']->value['tech'], 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['Element']->value];?>
:</td><td width="50%"><input type="text" name="element_<?php echo $_smarty_tpl->tpl_vars['Element']->value;?>
" value="0" pattern="[0-9]*"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<!-- Schiffe -->
<table width="760px" style="color:#FFFFFF">
<tr>
        <th colspan="2">Ships</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reslist']->value['fleet'], 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['Element']->value];?>
:</td><td width="50%"><input type="text" name="element_<?php echo $_smarty_tpl->tpl_vars['Element']->value;?>
" value="0" pattern="[0-9]*"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<!-- Verteidigung -->
<table width="760px" style="color:#FFFFFF">
<tr>
        <th colspan="2">Planetary Defense</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reslist']->value['defense'], 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['Element']->value];?>
:</td><td width="50%"><input type="text" name="element_<?php echo $_smarty_tpl->tpl_vars['Element']->value;?>
" value="0" pattern="[0-9]*"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>

<!-- Offiziere -->
<table width="760px" style="color:#FFFFFF">
<tr>
        <th colspan="2">Officers</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reslist']->value['officier'], 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['Element']->value];?>
:</td><td width="50%"><input type="text" name="element_<?php echo $_smarty_tpl->tpl_vars['Element']->value;?>
" value="0" pattern="[0-9]*"></td></tr>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>


<table width="760px" style="color:#FFFFFF">
<tr>
        <td><input type="submit" value="Send"></td>
</tr>
</table>
</form>
</body>
</html><?php }
}
