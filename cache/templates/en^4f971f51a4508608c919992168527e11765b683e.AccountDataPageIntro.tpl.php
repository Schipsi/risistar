<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:51:17
  from "/app/styles/templates/adm/AccountDataPageIntro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349550fd478_82107988',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '95e05be490bb00ffc14527eafd2badad070e0d93' => 
    array (
      0 => '/app/styles/templates/adm/AccountDataPageIntro.tpl',
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
function content_5a6349550fd478_82107988 (Smarty_Internal_Template $_smarty_tpl) {
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
<body id="accountdata" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<form action="" method="POST" name="users">
<table width="50%">
<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['ac_enter_user_id']->value;?>
</th>
<tr>
<td>
	<select name="id_u" size="20" style="width:80%;">
		<?php echo $_smarty_tpl->tpl_vars['Userlist']->value;?>

	</select>
	
	<SCRIPT type="text/javascript">
		var UserList = new filterlist(document.users.id_u);
	</SCRIPT>
	
	<br><br>
	<a href="javascript:UserList.set('^A')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 A">A</A>
	<a href="javascript:UserList.set('^B')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 B">B</A>
	<a href="javascript:UserList.set('^C')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 C">C</A>
	<a href="javascript:UserList.set('^D')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 D">D</A>

	<a href="javascript:UserList.set('^E')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 E">E</A>
	<a href="javascript:UserList.set('^F')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 F">F</A>
	<a href="javascript:UserList.set('^G')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 G">G</A>
	<a href="javascript:UserList.set('^H')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 H">H</A>
	<a href="javascript:UserList.set('^I')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 I">I</A>
	<a href="javascript:UserList.set('^J')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 J">J</A>
	<a href="javascript:UserList.set('^K')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 K">K</A>
	<a href="javascript:UserList.set('^L')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 L">L</A>
	<a href="javascript:UserList.set('^M')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 M">M</A>

	<a href="javascript:UserList.set('^N')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 N">N</A>
	<a href="javascript:UserList.set('^O')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 O">O</A>
	<a href="javascript:UserList.set('^P')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 P">P</A>
	<a href="javascript:UserList.set('^Q')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 Q">Q</A>
	<a href="javascript:UserList.set('^R')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 R">R</A>
	<a href="javascript:UserList.set('^S')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 S">S</A>
	<a href="javascript:UserList.set('^T')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 T">T</A>
	<a href="javascript:UserList.set('^U')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 U">U</A>
	<a href="javascript:UserList.set('^V')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 V">V</A>

	<a href="javascript:UserList.set('^W')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 W">W</A>
	<a href="javascript:UserList.set('^X')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 X">X</A>
	<a href="javascript:UserList.set('^Y')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 Y">Y</A>
	<a href="javascript:UserList.set('^Z')" title="<?php echo $_smarty_tpl->tpl_vars['bo_select_title']->value;?>
 Z">Z</A>

	<br>
	<input name="regexp" onKeyUp="UserList.set(this.value)">
	<input type="button" onClick="UserList.set(this.form.regexp.value)" value="<?php echo $_smarty_tpl->tpl_vars['button_filter']->value;?>
">
	<input type="button" onClick="UserList.reset();this.form.regexp.value=''" value="<?php echo $_smarty_tpl->tpl_vars['button_deselect']->value;?>
">
</td>
</tr>
<tr><td height="45"><?php echo $_smarty_tpl->tpl_vars['ac_select_id_num']->value;?>
&nbsp;<input type="text" name="id_u2" size="4"></td></tr>
<tr><td colspan="3"><input type="Submit" value="<?php echo $_smarty_tpl->tpl_vars['button_submit']->value;?>
"></td></tr>
</table>
</form>
</body>
</html><?php }
}
