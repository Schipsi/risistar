<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:21:19
  from "/app/styles/templates/adm/ShowMenuPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63424fed9f69_78531115',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'cd6ed26ac39cfd3116b14ee0b163bdcfbe97d261' => 
    array (
      0 => '/app/styles/templates/adm/ShowMenuPage.tpl',
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
function content_5a63424fed9f69_78531115 (Smarty_Internal_Template $_smarty_tpl) {
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
<body id="menu" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<div id="leftmenu">
	<ul id="menu">
		<li style="background-image: url('./styles/theme/gow/img/menu-top.png');height:100px;"></li>
		<li><a href="javascript:void(0);"><span style="color:lime">General</span></a></li>
		<li><a href="?page=infos" target="Hauptframe">Information</a></li>		<li><a href="?page=config" target="Hauptframe">Server Configuration</a></li>		<li><a href="?page=configuni" target="Hauptframe">Universe Configuration</a></li>		<li><a href="?page=chat" target="Hauptframe">Chat Configuration</a></li>		<li><a href="?page=teamspeak" target="Hauptframe">Teamspeak Options</a></li>		<li><a href="?page=facebook" target="Hauptframe">Registration by Facebook</a></li>		<li><a href="?page=module" target="Hauptframe">Modules</a></li>		<li><a href="?page=disclamer" target="Hauptframe">Contact settings</a></li>		<li><a href="?page=statsconf" target="Hauptframe">Statistics Configuration</a></li>		
		<li><a href="?page=cronjob" target="Hauptframe">Cronjobs</a></li>		<li><a href="?page=dump" target="Hauptframe">Database Backup</a></li>		<li><a href="javascript:void(0);"><span style="color:lime">Edit menu</span></a></li>
		<li><a href="?page=create" target="Hauptframe">Creator</a></li>		<li><a href="?page=accounteditor" target="Hauptframe">Edit Accounts</a></li>		<li><a href="?page=bans" target="Hauptframe">Ban System</a></li>		<li><a href="?page=giveaway" target="Hauptframe">Giveaways</a></li>		<li><a href="javascript:void(0);"><span style="color:lime">Game</span></a></li>
		<li><a href="?page=search&amp;search=online&amp;minimize=on" target="Hauptframe">Online</a></li>		<li><a href="?page=support" target="Hauptframe">Support Tickets<?php if ($_smarty_tpl->tpl_vars['supportticks']->value != 0) {?> (<?php echo $_smarty_tpl->tpl_vars['supportticks']->value;?>
)<?php }?></a></li>		<li><a href="?page=active" target="Hauptframe">User activity</a></li>		<li><a href="?page=search&amp;search=p_connect&amp;minimize=on" target="Hauptframe">Active Planets</a></li>		<li><a href="?page=fleets" target="Hauptframe">Flying Fleets</a></li>		<li><a href="?page=news" target="Hauptframe">News</a></li>		<li><a href="?page=search&amp;search=users&amp;minimize=on" target="Hauptframe">Player List</a></li>		<li><a href="?page=search&amp;search=planet&amp;minimize=on" target="Hauptframe">Planet List</a></li>		<li><a href="?page=search&amp;search=moon&amp;minimize=on" target="Hauptframe">Moon List</a></li>		<li><a href="?page=messagelist" target="Hauptframe">Message List</a></li>		<li><a href="?page=accountdata" target="Hauptframe">Information Account</a></li>		<li><a href="?page=search" target="Hauptframe">Advanced search</a></li>		<li><a href="?page=multiips" target="Hauptframe">Multiple IPs</a></li>		<li><a href="javascript:void(0);"><span style="color:lime">Tools</span></a></li>
		<li><a href="?page=log" target="Hauptframe">Admin Log</a></li>		<li><a href="?page=globalmessage" target="Hauptframe">Global Message</a></li>		<li><a href="?page=password" target="Hauptframe">MD5 Encryptor</a></li>		<li><a href="?page=statsupdate" target="Hauptframe" onClick=" return confirm('The Updater is automatico points, this allows you to see what is that your server is currently doing (As memory consumed, SQL, etc.)');">Manual points</a></li>		<li><a href="?page=clearcache" target="Hauptframe">Clear Cache</a></li>		<li style="background-image: url('./styles/theme/gow/img/menu-foot.png');height:30px;"></li>
	</ul>
</div>
</body>
</html><?php }
}
