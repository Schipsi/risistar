<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:51:17
  from "/app/styles/templates/adm/AccountDataPageIntro.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349550f9a04_76208384',
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
  'includes' => 
  array (
    'file:overall_header.tpl' => 1,
    'file:overall_footer.tpl' => 1,
  ),
),false)) {
function content_5a6349550f9a04_76208384 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4814472835a634955006196_52866868';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a634955048097_39764071');
?>

<form action="" method="POST" name="users">
<table width="50%">
<th colspan="3"><?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_enter_user_id\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
</th>
<tr>
<td>
	<select name="id_u" size="20" style="width:80%;">
		<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'Userlist\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>

	</select>
	
	<SCRIPT type="text/javascript">
		var UserList = new filterlist(document.users.id_u);
	</SCRIPT>
	
	<br><br>
	<a href="javascript:UserList.set('^A')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 A">A</A>
	<a href="javascript:UserList.set('^B')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 B">B</A>
	<a href="javascript:UserList.set('^C')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 C">C</A>
	<a href="javascript:UserList.set('^D')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 D">D</A>

	<a href="javascript:UserList.set('^E')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 E">E</A>
	<a href="javascript:UserList.set('^F')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 F">F</A>
	<a href="javascript:UserList.set('^G')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 G">G</A>
	<a href="javascript:UserList.set('^H')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 H">H</A>
	<a href="javascript:UserList.set('^I')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 I">I</A>
	<a href="javascript:UserList.set('^J')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 J">J</A>
	<a href="javascript:UserList.set('^K')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 K">K</A>
	<a href="javascript:UserList.set('^L')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 L">L</A>
	<a href="javascript:UserList.set('^M')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 M">M</A>

	<a href="javascript:UserList.set('^N')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 N">N</A>
	<a href="javascript:UserList.set('^O')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 O">O</A>
	<a href="javascript:UserList.set('^P')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 P">P</A>
	<a href="javascript:UserList.set('^Q')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 Q">Q</A>
	<a href="javascript:UserList.set('^R')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 R">R</A>
	<a href="javascript:UserList.set('^S')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 S">S</A>
	<a href="javascript:UserList.set('^T')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 T">T</A>
	<a href="javascript:UserList.set('^U')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 U">U</A>
	<a href="javascript:UserList.set('^V')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 V">V</A>

	<a href="javascript:UserList.set('^W')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 W">W</A>
	<a href="javascript:UserList.set('^X')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 X">X</A>
	<a href="javascript:UserList.set('^Y')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 Y">Y</A>
	<a href="javascript:UserList.set('^Z')" title="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bo_select_title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
 Z">Z</A>

	<br>
	<input name="regexp" onKeyUp="UserList.set(this.value)">
	<input type="button" onClick="UserList.set(this.form.regexp.value)" value="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'button_filter\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<input type="button" onClick="UserList.reset();this.form.regexp.value=''" value="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'button_deselect\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
</td>
</tr>
<tr><td height="45"><?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_select_id_num\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
&nbsp;<input type="text" name="id_u2" size="4"></td></tr>
<tr><td colspan="3"><input type="Submit" value="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'button_submit\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"></td></tr>
</table>
</form>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a6349550ed143_52599757');
}
/* Start inline template "/app/styles/templates/adm/AccountDataPageIntro.tpl" =============================*/
function content_5a634955048097_39764071 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4814472835a634955006196_52866868';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
, <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
, <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
, <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
, <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
, <?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:4814472835a634955006196_52866868%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:4814472835a634955006196_52866868%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/AccountDataPageIntro.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/AccountDataPageIntro.tpl" =============================*/
function content_5a6349550ed143_52599757 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4814472835a634955006196_52866868';
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
/* End inline template "/app/styles/templates/adm/AccountDataPageIntro.tpl" =============================*/
}
