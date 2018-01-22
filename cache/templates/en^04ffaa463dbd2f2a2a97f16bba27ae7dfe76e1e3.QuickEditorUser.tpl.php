<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:50:35
  from "/app/styles/templates/adm/QuickEditorUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63492b373d78_80616592',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'e0696013eb1bb24538101466476ffa00ed057c83' => 
    array (
      0 => '/app/styles/templates/adm/QuickEditorUser.tpl',
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
function content_5a63492b373d78_80616592 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) require_once '/app/includes/libs/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>

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
<body id="qeditor" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<script type="text/javascript">
function check(){
	$.post('?page=qeditor&edit=player&id=<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
&action=send', $('#userform').serialize(), function(data){
		Dialog.alert(data, function() {
			opener.location.reload();
			window.close();
		});
	});
	return false;
}
</script>
<form method="post" id="userform" action="" onsubmit="return check();">
<table width="100%" style="color:#FFFFFF"><tr>
        <th colspan="3">Info</th>
</tr>
<tr style="height:26px;"><td width="50%">ID:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td></tr>
<tr><td width="50%">Username:</td><td width="50%"><input name="name" type="text" size="15" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" autocomplete="off"></td></tr>
<tr style="height:26px;"><td width="50%">HP-Coordinates:</td><td width="50%"><?php echo $_smarty_tpl->tpl_vars['planetname']->value;?>
 [<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
] (ID: <?php echo $_smarty_tpl->tpl_vars['planetid']->value;?>
)</td></tr>
<?php if ($_smarty_tpl->tpl_vars['ChangePW']->value) {?>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_password'];?>
:</td><td width="50%"><a href="#" onclick="$('#password').css('display', '');$(this).css('display', 'none');return false"><?php echo $_smarty_tpl->tpl_vars['qe_change']->value;?>
</a><input style="display:none;" id="password" name="password" type="password" size="15" value="" autocomplete="off"></td></tr>
<?php }
if ($_smarty_tpl->tpl_vars['ChangePW']->value) {?>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_allowmulti'];?>
:</td><td width="50%"><?php echo smarty_function_html_options(array('name'=>"multi",'options'=>$_smarty_tpl->tpl_vars['yesorno']->value,'selected'=>$_smarty_tpl->tpl_vars['multi']->value),$_smarty_tpl);?>
</td></tr>
<?php }?>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3">Resources</th>
</tr>
<tr>
        <td>Name</td><td>Available</td><td>Edit</td>
</tr>
<tr><td width="30%">Dark Matter:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['darkmatter_c']->value;?>
</td><td width="40%"><input name="darkmatter" type="text" value="<?php echo $_smarty_tpl->tpl_vars['darkmatter']->value;?>
"></td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3">Research</th>
</tr>
<tr>
        <td>Name</td><td>Level</td><td>Edit</td>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tech']->value, 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<tr>
        <th colspan="3">Officers</th>
</tr>
<tr>
        <td>Name</td><td>Level</td><td>Edit</td>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['officier']->value, 'Element');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Element']->value) {
?>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['name'];?>
:</td><td width="30%"><?php echo $_smarty_tpl->tpl_vars['Element']->value['count'];?>
</td><td width="40%"><input name="<?php echo $_smarty_tpl->tpl_vars['Element']->value['type'];?>
" type="text" value="<?php echo $_smarty_tpl->tpl_vars['Element']->value['input'];?>
"></td>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<tr>
        <td colspan="3"><input type="submit" value="Send"> <input type="reset" value="Restart"></td>
</tr>
</table>
</form>
</body>
</html><?php }
}
