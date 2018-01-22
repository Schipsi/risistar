<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:21:19
  from "/app/styles/templates/adm/OverviewBody.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63424fe7a3d9_73450374',
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
  'cache_lifetime' => 604800,
),true)) {
function content_5a63424fe7a3d9_73450374 (Smarty_Internal_Template $_smarty_tpl) {
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
<body id="overview" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<center>
	<h1>Welcome to 2Moons!</h1>
	<table width="90%" style="border:2px <?php if (empty($_smarty_tpl->tpl_vars['Messages']->value)) {?>lime<?php } else { ?>red<?php }?> solid;text-align:center;font-weight:bold;">
		<tr>
			<td class="transparent"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Messages']->value, 'Message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Message']->value) {
?>
					<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['Message']->value;?>
</span><br>
					<?php
}
} else {
echo $_smarty_tpl->tpl_vars['LNG']->value['ow_none'];
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

			</td>
		</tr>
	</table>
	<br>
	<table width="80%">
		<tr>
			<th colspan="2">Control</th>
		</tr>
		<tr>
			<td style="height:50px" colspan="2">Welcome to popular 2Moons! (:
				<!--
                <br>
                <iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2F2Moons%2F129282307106646&amp;width=292&amp;connections=0&amp;stream=false&amp;header=false&amp;height=62" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:292px; height:62px;" allowTransparency="true"></iframe>
                -->
			</td>
		</tr>
		<tr>
			<th colspan="2">Support</th>
		</tr>
		<tr>
			<td colspan="2"><a href="https://github.com/jkroepke/2Moons/" target="_blank">Project Homepage</a>
				<!--<br><a target="_blank" href="http://2moons.cc/" target="_blank">2moons.cc - Forum</a>--></td>
		</tr>
		<!--
	<tr>
		<th style="width:50%;">Donate - Paypal</th>
		<th style="width:50%;">Donate - Moneybookers</th>
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
			<th colspan="2">Recent updates</th>
		</tr>
		<tr>
			<td align="center" colspan="2">
				<div id="feed"></div>
			</td>
		</tr>
		<!--
	<tr>
		<th colspan="2"><a href="https://www.facebook.com/2Moons.Game">Latest news</a></th>
	</tr>
	<tr>
		<td align="center" colspan="2">
			<div id="news"></div>
		</td>
	</tr>
    -->
		<tr>
			<th colspan="2">Credits</th>
		</tr>
		<tr>
			<td colspan="2">
				<table align="center">
					<tr>
						<td class="transparent" colspan="3"><h3>Project Leader</h3></td>
					</tr>
					<tr>
						<td class="transparent" colspan="3"><h3><a target="_blank" href="https://github.com/jkroepke" style="color:red">Jan</a></h3></td>
					</tr>
				</table>
				<div style="width:100%">
					<!--<div style="float:left;width:33%;min-width:250px;">
					<table>
						<tr>
							<td class="transparent"><p>&nbsp;</p><h3>Developers</h3></td>
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
								<td class="transparent"><p>&nbsp;</p><h3>Translators</h3></td>
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
								<td class="transparent"><p>&nbsp;</p><h3>Special Thanks</h3></td>
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
<script type="text/javascript" src="http://www.google.com/jsapi"></script>
<script type="text/javascript">
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
</script>
</body>
</html><?php }
}
