<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:45:35
  from "/app/styles/templates/game/page.notes.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6347ff7c1ea2_49405594',
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
  'includes' => 
  array (
    'file:page.notes.default.tpl' => 1,
    'file:layout.popup.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a6347ff7c1ea2_49405594 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '18350740795a6347ff65ba23_77173055';
$_smarty_tpl->_subTemplateRender("file:page.notes.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '55d5c806d4fccef3727fa3df0d927c939ad736a6', 'content_5a6347ff65e5a1_56714989');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.popup.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '19b37d3835836753e2144307cf5fc6e59513ae45', 'content_5a6347ff75b9f3_20253095');
}
/* Start inline template "extends:page.notes.default.tpl" =============================*/
function content_5a6347ff65e5a1_56714989 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '18350740795a6347ff65ba23_77173055';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12524866265a6347ff6a0491_55052658', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13899529645a6347ff757894_07212437', "content");
?>

<?php
}
/* {block "title"} */
class Block_12524866265a6347ff6a0491_55052658 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_13899529645a6347ff757894_07212437 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['18350740795a6347ff65ba23_77173055'] = true;
?>

<form action="game.php?page=notes&amp;mode=delete" method="post">
	<table style="width:90%;">
		<tr>
			<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_notes'];?>
</th>
		</tr>
		<tr>
			<td colspan="4"><a href="game.php?page=notes&amp;mode=detail"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_create_new_note'];?>
</a></td>
		</tr>
		<tr>
			<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_dlte_note'];?>
</th>
			<th style="width:20%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_date_note'];?>
</th>
			<th style="width:60%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_subject_note'];?>
</th>
			<th style="width:10%"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['nt_size_note'];?>
</th>
		</tr>
		<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'notesList\']->value, \'notesRow\', true, \'notesID\');
$_smarty_tpl->tpl_vars[\'notesRow\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'notesID\']->value => $_smarty_tpl->tpl_vars[\'notesRow\']->value) {
$_smarty_tpl->tpl_vars[\'notesRow\']->iteration++;
$_smarty_tpl->tpl_vars[\'notesRow\']->last = $_smarty_tpl->tpl_vars[\'notesRow\']->iteration == $_smarty_tpl->tpl_vars[\'notesRow\']->total;
$__foreach_notesRow_0_saved = $_smarty_tpl->tpl_vars[\'notesRow\'];
?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

		<tr>
			<td style="width:20px;"><input name="delmes[<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'notesID\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
]" type="checkbox"></td>
			<td style="width:150px;"><?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'notesRow\']->value[\'time\'];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
</td>
			<td><a href="game.php?page=notes&amp;mode=detail&amp;id=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'notesID\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
			<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php if ($_smarty_tpl->tpl_vars[\'notesRow\']->value[\'priority\'] == 0) {?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

			<span style="color:lime"><?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'notesRow\']->value[\'title\'];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
</span>
			<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'notesRow\']->value[\'priority\'] == 2) {?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

			<span style="color:red"><?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'notesRow\']->value[\'title\'];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
</span>
			<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php } else { ?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

			<span style="color:yellow"><?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'notesRow\']->value[\'title\'];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
</span>
			<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php }?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

			</a></td>
			<td style="width:40px;"><?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'notesRow\']->value[\'size\']);?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php if ($_smarty_tpl->tpl_vars[\'notesRow\']->last) {?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

		<tr>
			<td colspan="4" class="right"><input value="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'nt_dlte_note\'];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
" type="submit"></td>
		</tr>
		<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php }?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

		<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php
$_smarty_tpl->tpl_vars[\'notesRow\'] = $__foreach_notesRow_0_saved;
}
} else {
?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

		<tr>
			<td colspan="4"><?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'nt_you_dont_have_notes\'];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
</td>
		</tr>
		<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

	</table>
</form>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:page.notes.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
function content_5a6347ff763d91_13495731 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '18350740795a6347ff65ba23_77173055';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13997467675a6347ff772eb6_71165727', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
, <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
, <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
, <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
, <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
, <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_787845015a6347ff7b51e4_14759000', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_13997467675a6347ff772eb6_71165727 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['18350740795a6347ff65ba23_77173055'] = true;
?>
 - <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';?>
 - <?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_787845015a6347ff7b51e4_14759000 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.popup.tpl" =============================*/
/* Start inline template "extends:page.notes.default.tpl" =============================*/
function content_5a6347ff75b9f3_20253095 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '18350740795a6347ff65ba23_77173055';
foreach (array('bodyclass'=>"popup") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"popup"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a6347ff763d91_13495731');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_575549135a6347ff7bed07_53722150', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:18350740795a6347ff65ba23_77173055%%*/';
}
/* {block "content"} */
class Block_575549135a6347ff7bed07_53722150 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.notes.default.tpl" =============================*/
}
