<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:21:19
  from "/app/styles/templates/adm/ShowMenuPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63424fed5ea5_16188046',
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
  'includes' => 
  array (
    'file:overall_header.tpl' => 1,
    'file:overall_footer.tpl' => 1,
  ),
),false)) {
function content_5a63424fed5ea5_16188046 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20995448785a63424fd9eb38_65764554';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a63424fda2f05_25939292');
?>

<div id="leftmenu">
	<ul id="menu">
		<li style="background-image: url('./styles/theme/gow/img/menu-top.png');height:100px;"></li>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_general'];?>
</span></a></li>
		<?php if (allowedTo('ShowInformationPage')) {?><li><a href="?page=infos" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_game_info'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowConfigBasicPage')) {?><li><a href="?page=config" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_settings'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowConfigUniPage')) {?><li><a href="?page=configuni" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_unisettings'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowChatConfigPage')) {?><li><a href="?page=chat" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_chat'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowTeamspeakPage')) {?><li><a href="?page=teamspeak" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ts_options'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowFacebookPage')) {?><li><a href="?page=facebook" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_fb_options'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowModulePage')) {?><li><a href="?page=module" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_module'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowDisclamerPage')) {?><li><a href="?page=disclamer" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_disclaimer'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowStatsPage')) {?><li><a href="?page=statsconf" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_stats_options'];?>
</a></li><?php }?>
		
		<?php if (allowedTo('ShowCronjobPage')) {?><li><a href="?page=cronjob" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_cronjob'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowDumpPage')) {?><li><a href="?page=dump" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_dump'];?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_users_settings'];?>
</span></a></li>
		<?php if (allowedTo('ShowCreatorPage')) {?><li><a href="?page=create" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['new_creator_title'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowAccountEditorPage')) {?><li><a href="?page=accounteditor" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_add_delete_resources'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowBanPage')) {?><li><a href="?page=bans" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_ban_options'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowGiveawayPage')) {?><li><a href="?page=giveaway" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_giveaway'];?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_observation'];?>
</span></a></li>
		<?php if (allowedTo('ShowSearchPage')) {?><li><a href="?page=search&amp;search=online&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_connected'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSupportPage')) {?><li><a href="?page=support" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_support'];
echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php if ($_smarty_tpl->tpl_vars[\'supportticks\']->value != 0) {?>/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
 (<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'supportticks\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
)<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php }?>/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
</a></li><?php }?>
		<?php if (allowedTo('ShowActivePage')) {?><li><a href="?page=active" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_vaild_users'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')) {?><li><a href="?page=search&amp;search=p_connect&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_active_planets'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowFlyingFleetPage')) {?><li><a href="?page=fleets" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_flying_fleets'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowNewsPage')) {?><li><a href="?page=news" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_news'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')) {?><li><a href="?page=search&amp;search=users&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_user_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')) {?><li><a href="?page=search&amp;search=planet&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_planet_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')) {?><li><a href="?page=search&amp;search=moon&amp;minimize=on" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_moon_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowMessageListPage')) {?><li><a href="?page=messagelist" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mess_list'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowAccountDataPage')) {?><li><a href="?page=accountdata" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_info_account_page'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSearchPage')) {?><li><a href="?page=search" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_search_page'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowMultiIPPage')) {?><li><a href="?page=multiips" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_multiip_page'];?>
</a></li><?php }?>
		<li><a href="javascript:void(0);"><span style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_tools'];?>
</span></a></li>
		<?php if (allowedTo('ShowLogPage')) {?><li><a href="?page=log" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_logs'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowSendMessagesPage')) {?><li><a href="?page=globalmessage" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_global_message'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowPassEncripterPage')) {?><li><a href="?page=password" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_md5_encripter'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowStatUpdatePage')) {?><li><a href="?page=statsupdate" target="Hauptframe" onClick=" return confirm('<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_mpu_confirmation'];?>
');"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_manual_points_update'];?>
</a></li><?php }?>
		<?php if (allowedTo('ShowClearCachePage')) {?><li><a href="?page=clearcache" target="Hauptframe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mu_clear_cache'];?>
</a></li><?php }?>
		<li style="background-image: url('./styles/theme/gow/img/menu-foot.png');height:30px;"></li>
	</ul>
</div>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a63424fec9331_23622978');
}
/* Start inline template "/app/styles/templates/adm/ShowMenuPage.tpl" =============================*/
function content_5a63424fda2f05_25939292 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20995448785a63424fd9eb38_65764554';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
, <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
, <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
, <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
, <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
, <?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:20995448785a63424fd9eb38_65764554%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/ShowMenuPage.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/ShowMenuPage.tpl" =============================*/
function content_5a63424fec9331_23622978 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20995448785a63424fd9eb38_65764554';
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
/* End inline template "/app/styles/templates/adm/ShowMenuPage.tpl" =============================*/
}
