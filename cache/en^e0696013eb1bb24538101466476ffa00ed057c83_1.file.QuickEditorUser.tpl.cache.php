<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:50:35
  from "/app/styles/templates/adm/QuickEditorUser.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63492b370411_31331920',
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
  'includes' => 
  array (
    'file:overall_header.tpl' => 1,
    'file:overall_footer.tpl' => 1,
  ),
),false)) {
function content_5a63492b370411_31331920 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';
$_smarty_tpl->compiled->nocache_hash = '11007877465a63492b2c8ee7_22672260';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a63492b2cfa68_23647693');
?>

<?php echo '<script'; ?>
 type="text/javascript">
function check(){
	$.post('?page=qeditor&edit=player&id=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
&action=send', $('#userform').serialize(), function(data){
		Dialog.alert(data, function() {
			opener.location.reload();
			window.close();
		});
	});
	return false;
}
<?php echo '</script'; ?>
>
<form method="post" id="userform" action="" onsubmit="return check();">
<table width="100%" style="color:#FFFFFF"><tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_info'];?>
</th>
</tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_id'];?>
:</td><td width="50%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
</td></tr>
<tr><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_username'];?>
:</td><td width="50%"><input name="name" type="text" size="15" value="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'name\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" autocomplete="off"></td></tr>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_hpcoords'];?>
:</td><td width="50%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetname\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
 [<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'galaxy\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
:<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'system\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
:<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'planet\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
] (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_id'];?>
: <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'planetid\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
)</td></tr>
<?php if ($_smarty_tpl->tpl_vars['authlevl']->value != @constant('AUTH_USER')) {?>
<tr style="height:26px;"><td width="50%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_authattack'];?>
:</td><td width="50%"><input type="checkbox" name="authattack"<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php if ($_smarty_tpl->tpl_vars[\'authattack\']->value != 0) {?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
 checked<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php }?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
></td></tr>
<?php }
echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php if ($_smarty_tpl->tpl_vars[\'ChangePW\']->value) {?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

<tr style="height:26px;"><td width="50%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'qe_password\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
:</td><td width="50%"><a href="#" onclick="$('#password').css('display', '');$(this).css('display', 'none');return false"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'qe_change\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
</a><input style="display:none;" id="password" name="password" type="password" size="15" value="" autocomplete="off"></td></tr>
<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php }?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php if ($_smarty_tpl->tpl_vars[\'ChangePW\']->value) {?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

<tr style="height:26px;"><td width="50%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'qe_allowmulti\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
:</td><td width="50%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo smarty_function_html_options(array(\'name\'=>"multi",\'options\'=>$_smarty_tpl->tpl_vars[\'yesorno\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'multi\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
</td></tr>
<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php }?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_resources'];?>
</th>
</tr>
<tr>
        <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_count'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<tr><td width="30%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][921];?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'darkmatter_c\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
</td><td width="40%"><input name="darkmatter" type="text" value="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'darkmatter\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"></td></tr>
</table>
<table width="100%" style="color:#FFFFFF">
<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_tech'];?>
</th>
</tr>
<tr>
        <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_level'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'tech\']->value, \'Element\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Element\']->value) {
?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

<tr><td width="30%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'name\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'count\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
</td><td width="40%"><input name="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'type\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" type="text" value="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'input\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"></td>
<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

<tr>
        <th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_officier'];?>
</th>
</tr>
<tr>
        <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_name'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_level'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_input'];?>
</td>
</tr>
<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'officier\']->value, \'Element\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Element\']->value) {
?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

<tr><td width="30%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'name\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
:</td><td width="30%"><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'count\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
</td><td width="40%"><input name="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'type\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" type="text" value="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'input\'];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"></td>
<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

<tr>
        <td colspan="3"><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_submit'];?>
"> <input type="reset" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['qe_reset'];?>
"></td>
</tr>
</table>
</form>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a63492b366118_44587899');
}
/* Start inline template "/app/styles/templates/adm/QuickEditorUser.tpl" =============================*/
function content_5a63492b2cfa68_23647693 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11007877465a63492b2c8ee7_22672260';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
, <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
, <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
, <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
, <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
, <?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:11007877465a63492b2c8ee7_22672260%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/QuickEditorUser.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/QuickEditorUser.tpl" =============================*/
function content_5a63492b366118_44587899 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '11007877465a63492b2c8ee7_22672260';
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
/* End inline template "/app/styles/templates/adm/QuickEditorUser.tpl" =============================*/
}
