<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:51:24
  from "/app/styles/templates/adm/AccountDataPageDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63495c328f89_22318775',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '0b24ab0e162891137cd313bac154561051b1fc65' => 
    array (
      0 => '/app/styles/templates/adm/AccountDataPageDetail.tpl',
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
function content_5a63495c328f89_22318775 (Smarty_Internal_Template $_smarty_tpl) {
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
<body id="accountdata" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>
<style type="text/css">
a.link{
font-size:14px;font-variant:small-caps;margin-left:120px;
}
span.no_moon{
font-size:14px;font-variant:small-caps;margin-left:120px;font-family: Arial, Helvetica, sans-serif;
}
span.no_moon:hover{
font-size:14px;font-variant:small-caps;margin-left:120px;color:#FF0000;cursor:default;font-family: Arial, Helvetica, sans-serif;
}
a.ccc{
font-size:15px;
}
a.ccc:hover{
font-size:15px;color:aqua
;}
table.tableunique{
border:0px;background:url(./styles/resource/images/admin/blank.gif);width:100%;
}
td.unico{
border:0px;text-align:left;
}
td.unico2{
border:0px;text-align:center;
}
td{
color:#FFFFFF;font-size:10px;font-variant:normal;
}
td.blank{
border:0px;background:url(./styles/resource/images/admin/blank.gif);text-align:right;padding-right:80px;font-size:15px;
}
</style>


<table class="tableunique">
	<tr>
		<td class="blank"><a class="tooltip" data-tooltip-content="<?php echo $_smarty_tpl->tpl_vars['ac_note_k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['ac_leyend']->value;?>
&nbsp; <img src="./styles/resource/images/admin/i.gif" height="12" width="12"></a></td>
	</tr>
	<tr>
		<td class="unico transparent"><a href="#" onclick="$('#datos').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['ac_account_data']->value;?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="datos">
			<table align="center" width="60%">
			<tr><th colspan="2">&nbsp;</th></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['input_id']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['id']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_name']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['nombre']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_mail']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['email_1']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_perm_mail']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['email_2']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_auth_level']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['nivel']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_on_vacation']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['vacas']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_banned']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['suspen']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['mas']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_alliance']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['alianza']->value;
echo $_smarty_tpl->tpl_vars['id_ali']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_reg_ip']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_last_ip']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ip2']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_checkip_title']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ipcheck']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_register_time']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['reg_time']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_act_time']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['onlinetime']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_home_planet_id']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['id_p']->value;?>
</td></tr>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_home_planet_coord']->value;?>
</td><td>[<?php echo $_smarty_tpl->tpl_vars['g']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['s']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['p']->value;?>
]</td></tr>
			<?php if ($_smarty_tpl->tpl_vars['info']->value) {?><tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_user_system']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</td></tr><?php }?>
			<tr><td height="22px"><?php echo $_smarty_tpl->tpl_vars['ac_ranking']->value;?>
</td><td><a href="#" onclick="$('#puntaje').slideToggle();return false"><?php echo $_smarty_tpl->tpl_vars['ac_see_ranking']->value;?>
</a></td></tr>
			</table>
			<br>
			
			<!-- PUNTAJE DEL USUARIO -->
			<div id="puntaje" style="display:none">
			<table align="center" width="60%">
			<tr><th colspan="3" class="centrado2"><?php echo $_smarty_tpl->tpl_vars['ac_user_ranking']->value;?>
</th></tr>
			<td width="15%"></td><td width="40%" class="centrado"><?php echo $_smarty_tpl->tpl_vars['ac_points_count']->value;?>
</td><td width="5%" class="centrado"><?php echo $_smarty_tpl->tpl_vars['ac_ranking']->value;?>
</td>
			<tr><td width="15%" class="centrado"><?php echo $_smarty_tpl->tpl_vars['researchs_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_tecno']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_tecno']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['researchs_title']->value;?>
)</td><td width="5%" class="ranking"># <?php echo $_smarty_tpl->tpl_vars['ranking_tecno']->value;?>
</td></tr>
			<tr><td width="15%" class="centrado"><?php echo $_smarty_tpl->tpl_vars['defenses_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_def']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_def']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['defenses_title']->value;?>
)</td><td width="5%" class="ranking"># <?php echo $_smarty_tpl->tpl_vars['ranking_def']->value;?>
</td></tr>
			<tr><td width="15%" class="centrado"><?php echo $_smarty_tpl->tpl_vars['ships_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_fleet']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_fleet']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ships_title']->value;?>
)</td><td width="5%" class="ranking"># <?php echo $_smarty_tpl->tpl_vars['ranking_fleet']->value;?>
</td></tr>
			<tr><td width="15%" class="centrado"><?php echo $_smarty_tpl->tpl_vars['buildings_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_builds']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_builds']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['buildings_title']->value;?>
)</td><td width="5%" class="ranking"># <?php echo $_smarty_tpl->tpl_vars['ranking_builds']->value;?>
</td></tr>
			<tr><td colspan="3" class="total"><?php echo $_smarty_tpl->tpl_vars['ac_total_points']->value;?>
<span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['total_points']->value;?>
</span></td></tr>
			</table>
			<br>
			</div>
			
			
			<div id="banned" style="display:none">
			<table align="center" width="60%">
			<tr><th colspan="4"><?php echo $_smarty_tpl->tpl_vars['ac_suspended_title']->value;?>
</th></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_suspended_time']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sus_time']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_suspended_longer']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sus_longer']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_suspended_reason']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sus_reason']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_suspended_autor']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['sus_author']->value;?>
</td></tr>
			</table>
			<br>
			</div>
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><?php echo $_smarty_tpl->tpl_vars['AllianceHave']->value;?>
</td>
	</tr><tr>
		<td class="unico transparent">
			<div id="alianza" style="display:none">
			<table align="center" width="60%">
			<tr><th colspan="2"><?php echo $_smarty_tpl->tpl_vars['ac_info_ally']->value;?>
</th></tr>
			<tr><td width="25%" align="center" ><?php echo $_smarty_tpl->tpl_vars['input_id']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['id_aliz']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_leader']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ali_lider']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_tag']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['tag']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_name_ali']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ali_nom']->value;?>
</td></tr>
			<tr><td></td><td><?php echo $_smarty_tpl->tpl_vars['ali_ext']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_int_text']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ali_int']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_sol_text']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ali_sol']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_image']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ali_logo']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_ally_web']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ali_web']->value;?>
</td></tr>
			<tr><td></td><td><?php echo $_smarty_tpl->tpl_vars['ally_register_time']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_total_members']->value;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['ali_cant']->value;?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_ranking']->value;?>
</td><td><a href="#" rel="toggle[puntaje_ali]"><?php echo $_smarty_tpl->tpl_vars['ac_see_ranking']->value;?>
</a></td></tr>
			</table>
			<br>

			<div id="imagen" style="display:none">
			<table align="center" width="60%">
			<tr><th></th></tr>
			<tr><td width="60%"><img src="<?php echo $_smarty_tpl->tpl_vars['ali_logo2']->value;?>
" class="image"></td></tr>
			<tr><td><a href="<?php echo $_smarty_tpl->tpl_vars['ali_logo2']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ac_view_image']->value;?>
</a></td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_urlnow']->value;?>
 <input type="text" size="50" value="<?php echo $_smarty_tpl->tpl_vars['ali_logo2']->value;?>
"></td></tr>
			</table>
			<br>
			</div>

			<div id="externo" style="display:none">
			<table align="center" width="60%">
			<tr><th></th></tr>
			<tr><td width="60%"></td></tr>
			</table>
			<br>
			</div>

			<div id="interno" style="display:none">
			<table align="center" width="60%">
			<tr><td class="c"></td></tr>
			<tr><td width="60%"></td></tr>
			</table>
			<br>
			</div>

			<div id="solicitud" style="display:none">
			<table align="center" width="60%">
			<tr><th></th></tr>
			<tr><td width="60%"><?php echo $_smarty_tpl->tpl_vars['ali_sol2']->value;?>
</td></tr>
			</table>
			<br>
			</div>

			<!-- PUNTAJE DE LA ALIANZA DEL USUARIO -->
			<div id="puntaje_ali" style="display:none">
			<table align="center" width="60%">
			<tr><td class="c" colspan="3"><?php echo $_smarty_tpl->tpl_vars['ac_ally_ranking']->value;?>
</td></tr>
			<td width="15%"></td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['ac_points_count']->value;?>
</td><td width="5%" class="centrado"><?php echo $_smarty_tpl->tpl_vars['ac_ranking']->value;?>
</td>
			<tr><td width="15%"><?php echo $_smarty_tpl->tpl_vars['researchs_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_tecno_ali']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_tecno_ali']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['researchs_title']->value;?>
)</td><td width="5%"># <?php echo $_smarty_tpl->tpl_vars['ranking_tecno_ali']->value;?>
</td></tr>
			<tr><td width="15%"><?php echo $_smarty_tpl->tpl_vars['defenses_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_def_ali']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_def_ali']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['defenses_title']->value;?>
)</td><td width="5%"># <?php echo $_smarty_tpl->tpl_vars['ranking_def_ali']->value;?>
</td></tr>
			<tr><td width="15%"><?php echo $_smarty_tpl->tpl_vars['ships_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_fleet_ali']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_fleet_ali']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['ships_title']->value;?>
)</td><td width="5%"># <?php echo $_smarty_tpl->tpl_vars['ranking_fleet_ali']->value;?>
</td></tr>
			<tr><td width="15%"><?php echo $_smarty_tpl->tpl_vars['buildings_title']->value;?>
</td><td width="40%"><?php echo $_smarty_tpl->tpl_vars['point_builds_ali']->value;?>
 (<?php echo $_smarty_tpl->tpl_vars['count_builds_ali']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['buildings_title']->value;?>
)</td><td width="5%"># <?php echo $_smarty_tpl->tpl_vars['ranking_builds_ali']->value;?>
</td></tr>
			<tr><td colspan="3"><?php echo $_smarty_tpl->tpl_vars['ac_total_points']->value;?>
<span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['total_points_ali']->value;?>
</span></td></tr>
			</table>
			<br>
			</div>
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#pla').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['ac_id_names_coords']->value;?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="pla" style="display:none">
			<table width="70%" align="center">
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_name']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['input_id']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_diameter']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_fields']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_temperature']->value;?>
</th>
				<?php if ($_smarty_tpl->tpl_vars['canedit']->value == 1) {?><th><?php echo $_smarty_tpl->tpl_vars['se_search_edit']->value;?>
</th><?php }?>
			</tr>
				<?php echo $_smarty_tpl->tpl_vars['planets_moons']->value;?>

			</table>
			<br>
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#recursos').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['resources_title']->value;?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="recursos" style="display:none">
			<table width="70%" align="center">
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_name']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['Metal']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['Crystal']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['Deuterium']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['Energy']->value;?>
</th>
			</tr>
				<?php echo $_smarty_tpl->tpl_vars['resources']->value;?>

			<tr>
				<td colspan="5" height="30px"><?php echo $_smarty_tpl->tpl_vars['Darkmatter']->value;?>
: &nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['mo']->value;?>
</td>
			</tr>
			</table>
			<br >
			</div>	
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#edificios').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['buildings_title']->value;?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="edificios" style="display:none">
			<table width="100%" align="center">
				<?php echo $_smarty_tpl->tpl_vars['names']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['build']->value;?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#naves').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['ships_title']->value;?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="naves" style="display:none">
			<table align="center" width="100%">
				<?php echo $_smarty_tpl->tpl_vars['names']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['fleet']->value;?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#defensa').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['defenses_title']->value;?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="defensa" style="display:none">
			<table align="center" width="100%">
				<?php echo $_smarty_tpl->tpl_vars['names']->value;?>

				<?php echo $_smarty_tpl->tpl_vars['defense']->value;?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#inves').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['ac_officier_research']->value;?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="inves" style="display:none">
			<table align="center" width="60%">
			<tr>
			<th width="50%"><?php echo $_smarty_tpl->tpl_vars['researchs_title']->value;?>
</th>
			<th width="50%"><?php echo $_smarty_tpl->tpl_vars['officiers_title']->value;?>
</th>
			</tr>
			<?php echo $_smarty_tpl->tpl_vars['techoffi']->value;?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent">
			<?php if ($_smarty_tpl->tpl_vars['DestruyeD']->value != 0) {?><a href="#" onclick="$('#destr').slideToggle();return false" class="link">
			<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo $_smarty_tpl->tpl_vars['ac_recent_destroyed_planets']->value;?>
</a>
			<?php } else { ?><span class="no_moon"><img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> 
			<?php echo $_smarty_tpl->tpl_vars['ac_recent_destroyed_planets']->value;?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['ac_isnodestruyed']->value;?>
</span><?php }?>
		</td>
	</tr><tr>
		<td class="unico transparent">
			<div id="destr" style="display:none">
			<table align="center" width="60%">
			<tr>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_name']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['input_id']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_coords']->value;?>
</th>
				<th><?php echo $_smarty_tpl->tpl_vars['ac_time_destruyed']->value;?>
</th>
			</tr>
				<?php echo $_smarty_tpl->tpl_vars['destroyed']->value;?>

			</table>
			<br>
			</div>
		</td>
	</tr>
</table>
</body>
</html><?php }
}
