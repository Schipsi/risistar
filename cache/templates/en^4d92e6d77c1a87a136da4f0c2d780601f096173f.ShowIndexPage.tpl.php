<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:21:19
  from "/app/styles/templates/adm/ShowIndexPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63424fc35131_37456132',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '46e0d603b8a514be47fda1095cf2f12ba716a23a' => 
    array (
      0 => '/app/styles/templates/adm/ShowIndexPage.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 604800,
),true)) {
function content_5a63424fc35131_37456132 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN" "http://www.w3.org/TR/html4/frameset.dtd">

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title><?php echo $_smarty_tpl->tpl_vars['adm_cp_title']->value;?>
 &bull; <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
</title>
<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
<script type="text/javascript">
if (top.location != self.location) top.location = self.location;
</script>
</head>
<frameset cols="217,*" frameborder="0">
<frame src="admin.php?page=menu" name="rightFrame" id="rightFrame" noresize="noresize">
	<frameset rows="84,*" frameborder="0">
		<frame src="admin.php?page=topnav" name="topFrame" scrolling="no" noresize="noresize" id="topFrame">
		<frame src="admin.php?page=overview" name="Hauptframe" scrolling="auto" noresize="noresize" id="mainFrame">
	</frameset>
</frameset>
</html><?php }
}
