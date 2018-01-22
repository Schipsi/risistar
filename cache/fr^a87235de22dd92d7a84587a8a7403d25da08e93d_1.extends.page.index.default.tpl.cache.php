<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:21:54
  from "/app/styles/templates/login/page.index.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a634272559c68_02267579',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'a87235de22dd92d7a84587a8a7403d25da08e93d' => 
    array (
      0 => '/app/styles/templates/login/page.index.default.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    '6a406c14544d576ea71a873985b9b9f89755de16' => 
    array (
      0 => '/app/styles/templates/login/page.index.default.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '7c9f9ef36d77e4ab7e443aa6c9aa6fd7e802aee4' => 
    array (
      0 => '/app/styles/templates/login/layout.light.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '78e23b7c67061423c8f18765934ee70e904f4292' => 
    array (
      0 => '/app/styles/templates/login/main.header.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '4f71a8bb5716be7638d10aaf81651aed6afa04da' => 
    array (
      0 => '/app/styles/templates/login/main.navigation.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    'cb20c1b8c290ad5a4be86acb0b14606c8647c4e2' => 
    array (
      0 => '/app/styles/templates/login/main.footer.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page.index.default.tpl' => 1,
    'file:layout.light.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_5a634272559c68_02267579 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '21356403675a6342724ff304_83362435';
$_smarty_tpl->_subTemplateRender("file:page.index.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '6a406c14544d576ea71a873985b9b9f89755de16', 'content_5a634272503cb8_95813467');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.light.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '7c9f9ef36d77e4ab7e443aa6c9aa6fd7e802aee4', 'content_5a6342725265a8_87034085');
}
/* Start inline template "extends:page.index.default.tpl" =============================*/
function content_5a634272503cb8_95813467 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '21356403675a6342724ff304_83362435';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12604289005a6342725079f0_03055670', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20243535905a63427251fa37_39798489', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12340424075a634272525647_53424773', "script");
}
/* {block "title"} */
class Block_12604289005a6342725079f0_03055670 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleIndex'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_20243535905a63427251fa37_39798489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['21356403675a6342724ff304_83362435'] = true;
?>

<section>
	<h1><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'descHeader\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</h1>
	<p class="desc"><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'descText\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</p>
	<p class="desc"><ul id="desc_list"><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'gameInformations\']->value, \'info\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'info\']->value) {
?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
<li><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'info\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</li><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</ul></p>
</section>
<section>
	<table class="contentbox">
		<tr class="contentbox-header">
			<td class="contentbox-header-left"></td><td class="contentbox-header-center"></td><td class="contentbox-header-right"></td>
		</tr>
		<tr class="contentbox-content">
			<td class="contentbox-content-left"></td><td class="contentbox-content-center">
				<h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginHeader'];?>
</h1>
				<form id="login" name="login" action="index.php?page=login" data-action="index.php?page=login" method="post">
					<div class="row">
						<label for="universe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['universe'];?>
</label>
						<select name="uni" id="universe" class="changeAction"><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'universeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</select>
					</div>
					<div class="row">
						<label for="username"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginUsername'];?>
</label>
						<input name="username" id="username" type="text">
					</div>
					<div class="row">
						<label for="password"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginPassword'];?>
</label>
						<input name="password" id="password" type="password">
					</div>
					<div class="row">
						<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['loginButton'];?>
">
					</div>
				</form>
				<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php if ($_smarty_tpl->tpl_vars[\'facebookEnable\']->value) {?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
<a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php }?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
<!-- http://b.static.ak.fbcdn.net/rsrc.php/zB6N8/hash/4li2k73z.gif -->
				<br><span class="small"><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'loginInfo\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</span>
			</td><td class="contentbox-content-right"></td>
		</tr>
		<tr class="contentbox-footer">
			<td class="contentbox-footer-left"></td><td class="contentbox-footer-center"></td><td class="contentbox-footer-right"></td>
		</tr>
	</table>
</section>
<section>
	<div class="button-box">
		<div class="button-box-inner">
			<div class="button-important">
				<a href="index.php?page=register">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['buttonRegister'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
	<div class="button-box">
		<div class="button-box-inner">
			<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php if ($_smarty_tpl->tpl_vars[\'mailEnable\']->value) {?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
 
			<div class="button multi">
				<a href="index.php?page=lostPassword">
					<span class="button-left"></span>
					<span class="button-center"><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'buttonLostPassword\'];?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
			<div class="button multi">
			<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php } else { ?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

			<div class="button">
			<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php }?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

				<a href="index.php?page=screens">
					<span class="button-left"></span>
					<span class="button-center"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['buttonScreenshot'];?>
</span>
					<span class="button-right"></span>
				</a>
			</div>
		</div>
	</div>
</section>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_12340424075a634272525647_53424773 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['21356403675a6342724ff304_83362435'] = true;
?>

<?php echo '<script'; ?>
><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php if ($_smarty_tpl->tpl_vars[\'code\']->value) {?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
alert(<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'code\']->value);?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
);<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php }?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';
echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
/* End inline template "extends:page.index.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.light.tpl" =============================*/
function content_5a6342725278d2_30442251 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '21356403675a6342724ff304_83362435';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14269495375a63427252d868_18925037', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan-Otto Kröpke and licensed under MIT.
		2Moons is copyright 2009-2016 of Jan-Otto Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at https://github.com/jkroepke/2Moons/
	-->
	<meta name="keywords" content="Weltraum Browsergame, XNova, 2Moons, Space, Private, Server, Speed">
	<meta name="description" content="2Moons Browsergame powerd by https://github.com/jkroepke/2Moons/"> <!-- Noob Check :) -->
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="scripts/base/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/login/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'code\']->value)) {?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
var loginError = <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'code\']->value);?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
;<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php }?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';
echo '</script'; ?>
>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19474011065a634272535138_10830829', "script");
?>
	
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
">
	<div id="page"><?php
}
/* {block "title"} */
class Block_14269495375a63427252d868_18925037 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['21356403675a6342724ff304_83362435'] = true;
?>
 - <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameName\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_19474011065a634272535138_10830829 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/login/layout.light.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.light.tpl" =============================*/
function content_5a63427253aef0_31182314 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21356403675a6342724ff304_83362435';
?>
<header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_index'];?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['forum'];?>
</a></li>
			<li><a href="index.php?page=news"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_news'];?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_rules'];?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_battlehall'];?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_banlist'];?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value) > 1) {?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'languages\']->value, \'langName\', false, \'langKey\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'langKey\']->value => $_smarty_tpl->tpl_vars[\'langName\']->value) {
?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

		<li><a href="?lang=<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
" title="<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
"><?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
</span></a></li>
		<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php }?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

	</nav>
</header><?php
}
/* End inline template "/app/styles/templates/login/layout.light.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.light.tpl" =============================*/
function content_5a63427254f8e5_88218269 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '21356403675a6342724ff304_83362435';
?>
<footer>
	<a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a><br>Powered by <a href="http://2moons.cc" title="2Moons" target="copy">2Moons</a> 2009-2013
</footer>
</div>
<div id="dialog" style="display:none;"></div>
<?php echo '<script'; ?>
>
var LoginConfig = {
    'isMultiUniverse': <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isMultiUniverse\']->value);?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
,
	'unisWildcast': <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'unisWildcast\']->value);?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
,
	'referralEnable' : <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'referralEnable\']->value);?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
,
	'basePath' : <?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'basepath\']->value);?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

};
<?php echo '</script'; ?>
>
<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php if ($_smarty_tpl->tpl_vars[\'analyticsEnable\']->value) {?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

<?php echo '<script'; ?>
 type="text/javascript" src="http://www.google-analytics.com/ga.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
try{
var pageTracker = _gat._getTracker("<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php echo $_smarty_tpl->tpl_vars[\'analyticsUID\']->value;?>
/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>
");
pageTracker._trackPageview();
} catch(err) {}<?php echo '</script'; ?>
>
<?php echo '/*%%SmartyNocache:21356403675a6342724ff304_83362435%%*/<?php }?>/*/%%SmartyNocache:21356403675a6342724ff304_83362435%%*/';?>

</body>
</html><?php
}
/* End inline template "/app/styles/templates/login/layout.light.tpl" =============================*/
/* Start inline template "extends:page.index.default.tpl" =============================*/
function content_5a6342725265a8_87034085 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '21356403675a6342724ff304_83362435';
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '78e23b7c67061423c8f18765934ee70e904f4292', 'content_5a6342725278d2_30442251');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '4f71a8bb5716be7638d10aaf81651aed6afa04da', 'content_5a63427253aef0_31182314');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5069453235a63427254d6f0_57770103', "content");
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'cb20c1b8c290ad5a4be86acb0b14606c8647c4e2', 'content_5a63427254f8e5_88218269');
}
/* {block "content"} */
class Block_5069453235a63427254d6f0_57770103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.index.default.tpl" =============================*/
}
