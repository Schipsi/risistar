<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:47:36
  from "/app/styles/templates/game/page.battleHall.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6348785aecc0_94913039',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '4d64f266e8bd365ceb6a6a3222d5356c522015cd' => 
    array (
      0 => '/app/styles/templates/game/page.battleHall.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    'a842e23d66d5cccb30eaf236d674eb1ca08e5393' => 
    array (
      0 => '/app/styles/templates/game/page.battleHall.default.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'caea3f24967636c87bbedef30411d2617fcdf5c6' => 
    array (
      0 => '/app/styles/templates/game/layout.full.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'fdc1391b0ab7b521d14da1a048771b4f41e05477' => 
    array (
      0 => '/app/styles/templates/game/main.header.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '3656a4034d5586e57c8cab9755b4109091627cf1' => 
    array (
      0 => '/app/styles/templates/game/main.navigation.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '8cc530df2d91f6fd4fe06782e8b5690519815d2f' => 
    array (
      0 => '/app/styles/templates/game/main.topnav.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page.battleHall.default.tpl' => 1,
    'file:layout.full.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.topnav.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a6348785aecc0_94913039 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '8372536175a6348784692f0_30189932';
$_smarty_tpl->_subTemplateRender("file:page.battleHall.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'a842e23d66d5cccb30eaf236d674eb1ca08e5393', 'content_5a63487846bcd3_60413956');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'caea3f24967636c87bbedef30411d2617fcdf5c6', 'content_5a63487849c078_29022581');
}
/* Start inline template "extends:page.battleHall.default.tpl" =============================*/
function content_5a63487846bcd3_60413956 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8372536175a6348784692f0_30189932';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19061519715a63487846fd91_31145778', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17023420705a63487849aaa7_54180675', "content");
}
/* {block "title"} */
class Block_19061519715a63487846fd91_31145778 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_17023420705a63487849aaa7_54180675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['8372536175a6348784692f0_30189932'] = true;
?>

<table class="table569">
<tbody>
<tr>
    <th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_top'];?>
</th>
</tr>
<tr>
    <td colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_gratz'];?>
</td>
</tr>
<tr>
    <td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_platz'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_owners'];?>
</td>
    <td><a href="game.php?page=battleHall&order=date&sort=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'sort\']->value == "ASC") {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
DESC<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
ASC<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'order\']->value == "date") {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 style="font-weight:bold;"<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_datum'];?>
</a></td>
	<td><a href="game.php?page=battleHall&order=units&sort=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'sort\']->value == "ASC") {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
DESC<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
ASC<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'order\']->value == "units") {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 style="font-weight:bold;"<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_units'];?>
</a></td>
</tr>
<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'TopKBList\']->value, \'row\');
$_smarty_tpl->tpl_vars[\'row\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'row\']->value) {
$_smarty_tpl->tpl_vars[\'row\']->iteration++;
$__foreach_row_0_saved = $_smarty_tpl->tpl_vars[\'row\'];
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

    <tr class="day<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo floor($_smarty_tpl->tpl_vars[\'row\']->value[\'date\']/86400);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 week<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo floor($_smarty_tpl->tpl_vars[\'row\']->value[\'date\']/604800);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
        <td><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->iteration;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
        <td><a href="game.php?page=raport&amp;mode=battlehall&amp;raport=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'rid\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" target="_blank">
        <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'row\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

        <span style="color:#00FF00"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'attacker\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</span> VS <span style="color:#FF0000"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'defender\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</span>
        <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'row\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

        <span style="color:#FF0000"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'attacker\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</span> VS <span style="color:#00FF00"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'defender\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</span>
        <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

        <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'attacker\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 VS <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'defender\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

        <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

        </a></td>
        <td><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'row\']->value[\'date\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
        <td><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'row\']->value[\'units\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
    </tr>
<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_smarty_tpl->tpl_vars[\'row\'] = $__foreach_row_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

<tr>
<td colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_legende'];?>
<span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_gewinner'];?>
</span><span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_verlierer'];?>
</span></td></tr>
</tbody>
</table>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:page.battleHall.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63487849db16_92861458 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8372536175a6348784692f0_30189932';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8908470545a6348784a3994_75175987', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
, <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
, <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
, <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
, <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
, <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17670444575a6348784ca112_45063838', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* {block "title"} */
class Block_8908470545a6348784a3994_75175987 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['8372536175a6348784692f0_30189932'] = true;
?>
 - <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 - <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'game_name\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_17670444575a6348784ca112_45063838 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a6348784d5ab8_78970077 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8372536175a6348784692f0_30189932';
?>
<div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_changelog'];?>
</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_IMPERIUM'))) {?><li><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RESEARCH'))) {?><li><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUILDING'))) {?><li><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SHIPYARD_FLEET'))) {?><li><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SHIPYARD_DEFENSIVE'))) {?><li><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_OFFICIER')) || isModuleAvailable(@constant('MODULE_DMEXTRAS'))) {?><li><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TRADER'))) {?><li><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_FLEET_TRADER'))) {?><li><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TRADER'))) {?><li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TECHTREE'))) {?><li><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RESSOURCE_LIST'))) {?><li><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a></li><?php }?>
		<li class="menucat2-head"></li>
		<?php if (isModuleAvailable(@constant('MODULE_GALAXY'))) {?><li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_ALLIANCE'))) {?><li><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a></li><?php }?>
        <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

		<?php if (isModuleAvailable(@constant('MODULE_STATISTICS'))) {?><li><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RECORDS'))) {?><li><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BATTLEHALL'))) {?><li><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SEARCH'))) {?><li><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_CHAT'))) {?><li><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SUPPORT'))) {?><li><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a></li><?php }?>
		<li><a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_BANLIST'))) {?><li><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a></li><?php }?>
		<li><a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_SIMULATOR'))) {?><li><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a></li><?php }?>

		<li class="menucat3-head"></li>
		<?php if (isModuleAvailable(@constant('MODULE_MESSAGES'))) {?><li><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];
echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value > 0) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_NOTICE'))) {?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUDDYLIST'))) {?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value > 0) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 (<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_5a63487853ed21_09063912 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '8372536175a6348784692f0_30189932';
?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
images/<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><span<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td class="res_current"><span<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } else { ?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<td class="res_max" id="max_<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

									<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

		<?php echo '<script'; ?>
 type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
;
		var vacation			= <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
;
        $(function() {
		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\'])) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

            resourceTicker({
                available: <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
,
                limit: [0, <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
],
                production: <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\']);?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
,
                valueElem: "current_<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
"
            }, true);
		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

        });
		<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/game/topnav.js"><?php echo '</script'; ?>
>
        <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasGate\']->value) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';
echo '<script'; ?>
 src="scripts/game/gate.js"><?php echo '</script'; ?>
><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

		<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'delete\']->value) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'vacation\']->value) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 <?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "extends:page.battleHall.default.tpl" =============================*/
function content_5a63487849c078_29022581 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '8372536175a6348784692f0_30189932';
foreach (array('bodyclass'=>"full") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"full"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_5a63487849db16_92861458');
?>

<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value) {?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
</a><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php }?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '3656a4034d5586e57c8cab9755b4109091627cf1', 'content_5a6348784d5ab8_78970077');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '8cc530df2d91f6fd4fe06782e8b5690519815d2f', 'content_5a63487853ed21_09063912');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9067384795a6348785a8749_56267584', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'cronjobs\']->value, \'cronjob\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->value) {
?>/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';?>

<?php echo '/*%%SmartyNocache:8372536175a6348784692f0_30189932%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:8372536175a6348784692f0_30189932%%*/';
}
/* {block "content"} */
class Block_9067384795a6348785a8749_56267584 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.battleHall.default.tpl" =============================*/
}
