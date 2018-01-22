<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:51:58
  from "/app/styles/templates/adm/ModerrationRightsPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63497e10ebb2_08491698',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '7dfecdcaa0f5febdb73a9cf47ac52485ed02c546' => 
    array (
      0 => '/app/styles/templates/adm/ModerrationRightsPage.tpl',
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
function content_5a63497e10ebb2_08491698 (Smarty_Internal_Template $_smarty_tpl) {
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
<body id="rights" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<form action="" method="post" name="users">
<table width="55%">
<tr>
	<th colspan="7"><?php echo $_smarty_tpl->tpl_vars['ad_authlevel_title']->value;?>
</th>
</tr><tr>
	<td colspan="2">
	<select name="id_1" size="20" style="width:80%;">
		<?php echo $_smarty_tpl->tpl_vars['UserList']->value;?>

	</select>
	
	<script type="text/javascript">
		var UserList = new filterlist(document.getElementsByName('id_1')[0]);
	</script>
	<br>
	<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&amp;get=adm"><?php echo $_smarty_tpl->tpl_vars['ad_authlevel_aa']->value;?>
</a>&nbsp;
	<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&amp;get=ope"><?php echo $_smarty_tpl->tpl_vars['ad_authlevel_oo']->value;?>
</a>&nbsp;
	<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&amp;get=mod"><?php echo $_smarty_tpl->tpl_vars['ad_authlevel_mm']->value;?>
</a>&nbsp;
	<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
&amp;get=pla"><?php echo $_smarty_tpl->tpl_vars['ad_authlevel_jj']->value;?>
</a>&nbsp;
	<a href="?page=rights&amp;mode=rights&amp;sid=<?php echo $_smarty_tpl->tpl_vars['sid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ad_authlevel_tt']->value;?>
</a>&nbsp;
	<br><br>
	<a href="javascript:UserList.set('^A')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 A">A</a>
	<a href="javascript:UserList.set('^B')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 B">B</a>
	<a href="javascript:UserList.set('^C')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 C">C</a>
	<a href="javascript:UserList.set('^D')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 D">D</a>
	<a href="javascript:UserList.set('^E')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 E">E</a>
	<a href="javascript:UserList.set('^F')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 F">F</a>
	<a href="javascript:UserList.set('^G')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 G">G</a>
	<a href="javascript:UserList.set('^H')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 H">H</a>
	<a href="javascript:UserList.set('^I')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 I">I</a>
	<a href="javascript:UserList.set('^J')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 J">J</a>
	<a href="javascript:UserList.set('^K')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 K">K</a>
	<a href="javascript:UserList.set('^L')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 L">L</a>
	<a href="javascript:UserList.set('^M')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 M">M</a>
	<a href="javascript:UserList.set('^N')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 N">N</a>
	<a href="javascript:UserList.set('^O')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 O">O</a>
	<a href="javascript:UserList.set('^P')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 P">P</a>
	<a href="javascript:UserList.set('^Q')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 Q">Q</a>
	<a href="javascript:UserList.set('^R')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 R">R</a>
	<a href="javascript:UserList.set('^S')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 S">S</a>
	<a href="javascript:UserList.set('^T')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 T">T</a>
	<a href="javascript:UserList.set('^U')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 U">U</a>
	<a href="javascript:UserList.set('^V')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 V">V</a>
	<a href="javascript:UserList.set('^W')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 W">W</a>
	<a href="javascript:UserList.set('^X')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 X">X</a>
	<a href="javascript:UserList.set('^Y')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 Y">Y</a>
	<a href="javascript:UserList.set('^Z')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 Z">Z</a>

	<BR>
	<INPUT NAME="regexp" onKeyUp="UserList.set(this.value)">
	<INPUT TYPE="button" onClick="UserList.set(this.form.regexp.value)" value="<?php echo $_smarty_tpl->tpl_vars['button_filter']->value;?>
">
	<INPUT TYPE="button" onClick="UserList.reset();this.form.regexp.value=''" value="<?php echo $_smarty_tpl->tpl_vars['button_deselect']->value;?>
">
	</td>
</tr>
	<td colspan="3"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['button_submit']->value;?>
"></td>
</tr>
</table>
</body>
</html><?php }
}
