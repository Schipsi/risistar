<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:45:35
  from "/app/styles/templates/game/page.notes.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6347ff7c6978_12039370',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '6b04be0d63117c43813b9c0a0227cb2eb7f71193' => 
    array (
      0 => '/app/styles/templates/game/page.notes.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    '55d5c806d4fccef3727fa3df0d927c939ad736a6' => 
    array (
      0 => '/app/styles/templates/game/page.notes.default.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '19b37d3835836753e2144307cf5fc6e59513ae45' => 
    array (
      0 => '/app/styles/templates/game/layout.popup.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'fdc1391b0ab7b521d14da1a048771b4f41e05477' => 
    array (
      0 => '/app/styles/templates/game/main.header.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 604800,
),true)) {
function content_5a6347ff7c6978_12039370 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>Notes - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['game_name']->value;?>
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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
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
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "Ready";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "Info";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["Sun","Mon","Tue","Wed","Thu","Fri","Sat"] 
	var months 		= ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"] ;
	var tdformat	= "[M] [D] [d] [H]:[i]:[s]";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
	var isPlayerCardActive	= "<?php echo json_encode($_smarty_tpl->tpl_vars['isPlayerCardActive']->value);?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
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
<body id="notes" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<div id="content">
<form action="game.php?page=notes&amp;mode=delete" method="post">
	<table style="width:90%;">
		<tr>
			<th colspan="4">Notes</th>
		</tr>
		<tr>
			<td colspan="4"><a href="game.php?page=notes&amp;mode=detail">Create a new note</a></td>
		</tr>
		<tr>
			<th style="width:10%">Delete</th>
			<th style="width:20%">Date</th>
			<th style="width:60%">Subject</th>
			<th style="width:10%">Size</th>
		</tr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['notesList']->value, 'notesRow', true, 'notesID');
$_smarty_tpl->tpl_vars['notesRow']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['notesID']->value => $_smarty_tpl->tpl_vars['notesRow']->value) {
$_smarty_tpl->tpl_vars['notesRow']->iteration++;
$_smarty_tpl->tpl_vars['notesRow']->last = $_smarty_tpl->tpl_vars['notesRow']->iteration == $_smarty_tpl->tpl_vars['notesRow']->total;
$__foreach_notesRow_0_saved = $_smarty_tpl->tpl_vars['notesRow'];
?>
		<tr>
			<td style="width:20px;"><input name="delmes[<?php echo $_smarty_tpl->tpl_vars['notesID']->value;?>
]" type="checkbox"></td>
			<td style="width:150px;"><?php echo $_smarty_tpl->tpl_vars['notesRow']->value['time'];?>
</td>
			<td><a href="game.php?page=notes&amp;mode=detail&amp;id=<?php echo $_smarty_tpl->tpl_vars['notesID']->value;?>
">
			<?php if ($_smarty_tpl->tpl_vars['notesRow']->value['priority'] == 0) {?>
			<span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['notesRow']->value['title'];?>
</span>
			<?php } elseif ($_smarty_tpl->tpl_vars['notesRow']->value['priority'] == 2) {?>
			<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['notesRow']->value['title'];?>
</span>
			<?php } else { ?>
			<span style="color:yellow"><?php echo $_smarty_tpl->tpl_vars['notesRow']->value['title'];?>
</span>
			<?php }?>
			</a></td>
			<td style="width:40px;"><?php echo pretty_number($_smarty_tpl->tpl_vars['notesRow']->value['size']);?>
</td>
		</tr>
		<?php if ($_smarty_tpl->tpl_vars['notesRow']->last) {?>
		<tr>
			<td colspan="4" class="right"><input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_dlte_note'];?>
" type="submit"></td>
		</tr>
		<?php }?>
		<?php
$_smarty_tpl->tpl_vars['notesRow'] = $__foreach_notesRow_0_saved;
}
} else {
?>

		<tr>
			<td colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_you_dont_have_notes'];?>
</td>
		</tr>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
</form>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
