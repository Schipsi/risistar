<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:21:19
  from "/app/styles/templates/adm/OverviewBody.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63424fe76ab1_47799597',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '4da2760e824fe05928be6f6e07f2d6bea678a76b' => 
    array (
      0 => '/app/styles/templates/adm/OverviewBody.tpl',
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
function content_5a63424fe76ab1_47799597 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10957171545a63424fde2540_92908442';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a63424fe00467_85490117');
?>

<center>
	<h1><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_title'];?>
</h1>
	<table width="90%" style="border:2px <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php if (empty($_smarty_tpl->tpl_vars[\'Messages\']->value)) {?>/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
lime<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php } else { ?>/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
red<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php }?>/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
 solid;text-align:center;font-weight:bold;">
		<tr>
			<td class="transparent"><?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Messages\']->value, \'Message\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Message\']->value) {
?>/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>

					<span style="color:red"><?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
</span><br>
					<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php
}
} else {
?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';
echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ow_none\'];?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';
echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>

			</td>
		</tr>
	</table>
	<br>
	<table width="80%">
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_overview'];?>
</th>
		</tr>
		<tr>
			<td style="height:50px" colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_welcome_text'];?>

				<!--
                <br>
                <iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2F2Moons%2F129282307106646&amp;width=292&amp;connections=0&amp;stream=false&amp;header=false&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
                -->
			</td>
		</tr>
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_support'];?>
</th>
		</tr>
		<tr>
			<td colspan="2"><a href="https://github.com/jkroepke/2Moons/" target="_blank">Project Homepage</a>
				<!--<br><a target="_blank" href="http://2moons.cc/" target="_blank">2moons.cc - <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_forum'];?>
</a>--></td>
		</tr>
		<!--
	<tr>
		<th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_donate'];?>
 - Paypal</th>
		<th style="width:50%;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_donate'];?>
 - Moneybookers</th>
	</tr>
	<tr>
		<td align="center" style="height:110px;">
		<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="CM6PQFUATN7MS">
		<input type="image" src="https://www.paypal.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" name="submit" alt="Jetzt einfach, schnell und sicher online bezahlen - mit PayPal." style="background:transparent;border:0px none;">
		</form>
		</td>
		<td align="center">
		<img src="http://www.moneybookers.com/images/logos/additional_logos/de_donatewith.gif" style="background:transparent;border:0px none;">
		<form action="https://www.moneybookers.com/app/payment.pl" target="_blank">
		<input type="hidden" name="pay_to_email" value="slaver7@gmail.com">
		<input type="hidden" name="recipient_description" value="Donation for 2Moons">
		<input type="hidden" name="return_url_target" value="1">
		<input type="hidden" name="cancel_url_target" value="1">
		<input type="hidden" name="dynamic_descriptor" value="Descriptor">
		<input type="hidden" name="language" value="DE">
		<input type="hidden" name="confirmation_note" value="Thank you for this Donation">
		<input type="hidden" name="detail1_description" value="Donation">
		<input type="hidden" name="detail1_text" value="Thank you for this donation!">
		<input type="hidden" name="rec_period" value="1">
		<input type="hidden" name="rec_grace_period" value="1">
		<input type="hidden" name="rec_cycle" value="day">
		<input type="hidden" name="submit_id" value="Submit">
		<input type="text" name="amount" value="0.00">
		<select name="currency">
			<option value="EUR">EUR</option>
			<option value="USD">USD</option>
		</select><br>
		<input type="submit" name="Pay" value="Pay">
		</form>
		</td>
	</tr>
	-->
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_updates'];?>
</th>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<div id="feed"></div>
			</td>
		</tr>
		<!--
	<tr>
		<th colspan="2"><a href="https://www.facebook.com/2Moons.Game"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_news'];?>
</a></th>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<div id="news"></div>
		</td>
	</tr>
    -->
		<tr>
			<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_credits'];?>
</th>
		</tr>
		<tr>
			<td colspan="2">
				<table align="center">
					<tr>
						<td class="transparent" colspan="3"><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_proyect_leader'];?>
</h3></td>
					</tr>
					<tr>
						<td class="transparent" colspan="3"><h3><a target="_blank" href="https://github.com/jkroepke" style="color:red">Jan</a></h3></td>
					</tr>
				</table>
				<div style="width:100%">
					<!--<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_developers'];?>
</h3></td>
						</tr>
						<tr>
							<td class="transparent">
								<a target="_blank" href="https://github.com/jkroepke" style="color:red">Jan</a><br>
							</td>
						</tr>
					</table>
				</div>-->
					<div style="float:left;width:50%;min-width:250px;">
						<table>
							<tr>
								<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_translator'];?>
</h3></td>
							</tr>
							<tr>
								<td class="transparent">
									<table width="250px;">
										<tr>
											<td class="transparent">
												<img src="styles/resource/images/login/flags/us.png" alt="(english)">
											</td>
											<td class="transparent left">
												QwataKayean
											</td>
										</tr>
										<tr>
											<td class="transparent">
												<img src="styles/resource/images/login/flags/pt.png" alt="(portuguese)">
											</td>
											<td class="transparent left">
												QwataKayean
											</td>
										</tr>
										<tr>
											<td class="transparent">
												<img src="styles/resource/images/login/flags/fr.png" alt="(french)">
											</td>
											<td class="transparent left">
												<a href="https://github.com/BigTwoProduction" target="_blank">BigTwoProduction</a>
											</td>
										</tr>
										<tr>
											<td class="transparent">
												<img src="styles/resource/images/login/flags/ru.png" alt="(russian)">
											</td>
											<td class="transparent left">
												InquisitorEA
											</td>
										</tr>
										<tr>
											<td class="transparent">
												<img src="styles/resource/images/login/flags/es.png" alt="(spanish)">
											</td>
											<td class="transparent left">
												Orion
											</td>
										</tr>
										<tr>
											<td class="transparent">
												<img src="styles/resource/images/login/flags/tr.png" alt="(turkish)">
											</td>
											<td class="transparent left">
												romansmac
											</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
					<div style="float:left;width:50%;min-width:250px;">
						<table>
							<tr>
								<td class="transparent"><p>&nbsp;</p><h3><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ow_special_thanks'];?>
</h3></td>
							</tr>
							<tr>
								<td class="transparent">
									<table width="250px;">
										<tr>
											<td class="transparent left"><a href="https://github.com/Hilarious001" target="_blank">Hilarious001</a></td>
											<td class="transparent left">Ralf M.</td>
											<td class="transparent left">InquisitorEA</td>
										</tr>
										<tr>
											<td class="transparent left">lucky</td>
											<td class="transparent left">Metusalem</td>
											<td class="transparent left">Meikel</td>
										</tr>
										<tr>
											<td class="transparent left">Phil</td>
											<td class="transparent left">Schnippi</td>
											<td class="transparent left">Vobi</td>
										</tr>
										<tr>
											<td class="transparent left">Sycrog</td>
											<td class="transparent left">Raito</td>
											<td class="transparent left">Chlorel</td>
										</tr>
										<tr>
											<td class="transparent left">e-Zobar</td>
											<td class="transparent left">Flousedid</td>
											<td class="transparent left">jstar</td>
										</tr>
										<tr>
											<td class="transparent left">scrippi</td>
										</tr>
									</table>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</td>
		</tr>
	</table>
</center>
<?php echo '<script'; ?>
 type="text/javascript" src="http://www.google.com/jsapi"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	google.load("feeds", "1");
	google.setOnLoadCallback(initialize);
	function initialize() {
		var feedControl = new google.feeds.FeedControl();
		feedControl.addFeed("https://github.com/jkroepke/2Moons/commits/master.atom", "");
		//feedControl.addFeed("http://code.google.com/feeds/p/2moons/svnchanges/basic", "");
		feedControl.draw(document.getElementById("feed"));
		//var feedControl = new google.feeds.FeedControl();
        //feedControl.addFeed("https://www.facebook.com/feeds/page.php?id=129282307106646&format=rss20", "");
        //feedControl.draw(document.getElementById("news"));
	}
<?php echo '</script'; ?>
>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a63424fe67d05_63063228');
}
/* Start inline template "/app/styles/templates/adm/OverviewBody.tpl" =============================*/
function content_5a63424fe00467_85490117 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10957171545a63424fde2540_92908442';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
, <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
, <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
, <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
, <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
, <?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:10957171545a63424fde2540_92908442%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:10957171545a63424fde2540_92908442%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/OverviewBody.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/OverviewBody.tpl" =============================*/
function content_5a63424fe67d05_63063228 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10957171545a63424fde2540_92908442';
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
/* End inline template "/app/styles/templates/adm/OverviewBody.tpl" =============================*/
}
