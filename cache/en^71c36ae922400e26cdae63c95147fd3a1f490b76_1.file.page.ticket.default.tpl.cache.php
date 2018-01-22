<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:52:19
  from "/app/styles/templates/adm/page.ticket.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63499374f1e2_30935350',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '71c36ae922400e26cdae63c95147fd3a1f490b76' => 
    array (
      0 => '/app/styles/templates/adm/page.ticket.default.tpl',
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
function content_5a63499374f1e2_30935350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18636268995a634993696ee9_04411881';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a6349936a2812_85663379');
?>

<table width="70%" cellpadding="2" cellspacing="2">
	<tr>
		<th colspan="6"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_header'];?>
</th>
	</tr>
	<tr>
		<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_id'];?>
</td>
		<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_username'];?>
</td>
		<th style="width:40%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_subject'];?>
</td>
		<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_answers'];?>
</td>
		<th style="width:15%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_date'];?>
</td>
		<th style="width:15%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_status'];?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'ticketList\']->value, \'TicketInfo\', false, \'TicketID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'TicketID\']->value => $_smarty_tpl->tpl_vars[\'TicketInfo\']->value) {
?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
	
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php if ($_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'status\'] < 2) {?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">#<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'username\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'subject\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</a></td>
		<td><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'answer\']-1;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'time\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php if ($_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'status\'] == 0) {?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
<span style="color:green"><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ti_status_open\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</span><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'status\'] == 1) {?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
<span style="color:orange"><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ti_status_answer\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</span><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php }?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php }?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	<tr>
		<th colspan="6"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_status_closed'];?>
</th>
	</tr>
	<tr>
		<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_id'];?>
</td>
		<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_username'];?>
</td>
		<th style="width:40%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_subject'];?>
</td>
		<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_answers'];?>
</td>
		<th style="width:15%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_date'];?>
</td>
		<th style="width:15%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ti_status'];?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'ticketList\']->value, \'TicketInfo\', false, \'TicketID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'TicketID\']->value => $_smarty_tpl->tpl_vars[\'TicketInfo\']->value) {
?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
	
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php if ($_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'status\'] == 2) {?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	<tr>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">#<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'username\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</a></td>
		<td><a href="admin.php?page=support&amp;mode=view&amp;id=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketID\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'subject\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</a></td>
		<td><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'answer\']-1;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'TicketInfo\']->value[\'time\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</td>
		<td><span style="color:red"><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ti_status_closed\'];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</span></td>
	</tr>
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php }?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

</table>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a6349937455e8_54341430');
}
/* Start inline template "/app/styles/templates/adm/page.ticket.default.tpl" =============================*/
function content_5a6349936a2812_85663379 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18636268995a634993696ee9_04411881';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
, <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
, <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
, <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
, <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
, <?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:18636268995a634993696ee9_04411881%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:18636268995a634993696ee9_04411881%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/page.ticket.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/page.ticket.default.tpl" =============================*/
function content_5a6349937455e8_54341430 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '18636268995a634993696ee9_04411881';
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
/* End inline template "/app/styles/templates/adm/page.ticket.default.tpl" =============================*/
}
