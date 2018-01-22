<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:50:27
  from "/app/styles/templates/adm/SearchPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a634923b18994_39033959',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'd06ac5895cea86d64d5950ac729ed0182600393c' => 
    array (
      0 => '/app/styles/templates/adm/SearchPage.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'a1072095f26593f338c911c8b3565b4999d7693f' => 
    array (
      0 => '/app/styles/templates/adm/overall_header.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall_header.tpl' => 1,
  ),
),false)) {
function content_5a634923b18994_39033959 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';
$_smarty_tpl->compiled->nocache_hash = '13666599185a63492395fe51_40039828';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a6349239f4ca4_48835060');
?>

<form action="" method="POST">
<table width="90%">
<tr>
<td class="transparent left">
<input type="checkbox" <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'minimize\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
 name="minimize"><input type="submit" value="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_contrac\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
" class="button">
<img src="./styles/resource/images/admin/GO.png" onClick="javascript:$('#seeker').slideToggle();" style="cursor:pointer;padding-right:60px;" class="tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_minimize_maximize\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
</td>
</tr>
</table>
<div id="seeker"<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'diisplaay\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
>
<table width="90%">
	<tr>
		<th colspan="8">
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search_title\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
	</tr>
	<tr>
		<td>
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_intro\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_type_typee\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search_in\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_filter_title\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_limit\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
		<td>
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_asc_desc\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php if ($_smarty_tpl->tpl_vars[\'OrderBYParse\']->value) {?>/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		<td>
			<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search_order\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		</td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php }?>/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

		<td>
			&nbsp;
		</td>
	</tr>
<tr>
	<td>
		<input type="text" name="key_user" value="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'search\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	</td>
	<td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'search\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'list\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'SearchFile\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'search_in\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'search\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'SearchFor\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'fucki\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'filter\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'Searchmethod\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'limit\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'limit\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'limit\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	</td>
	<td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'key_acc\',\'options\'=>$_smarty_tpl->tpl_vars[\'Selector\']->value[\'order\'],\'selected\'=>$_smarty_tpl->tpl_vars[\'OrderBY\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	</td>
	<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php if ($_smarty_tpl->tpl_vars[\'OrderBYParse\']->value) {?>/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	<td>
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo smarty_function_html_options(array(\'name\'=>\'key_order\',\'options\'=>$_smarty_tpl->tpl_vars[\'OrderBYParse\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'Order\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	</td>
	<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php }?>/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	<td>
		<input type="submit" value="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	</td>
</tr>
<?php if (!empty($_smarty_tpl->tpl_vars['error']->value)) {?>
<tr>
	<td colspan="8">
		<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</span>
	</td>
</tr>
<?php }?>
</table>
</div>
<br>
<table width="90%" border="0px">
<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGES\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

</table>
<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'LIST\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

<br>
<table width="90%" border="0px">
<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'PAGES\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

</table>
</form><?php }
/* Start inline template "/app/styles/templates/adm/SearchPage.tpl" =============================*/
function content_5a6349239f4ca4_48835060 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13666599185a63492395fe51_40039828';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
, <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
, <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
, <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
, <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
, <?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:13666599185a63492395fe51_40039828%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:13666599185a63492395fe51_40039828%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/SearchPage.tpl" =============================*/
}
