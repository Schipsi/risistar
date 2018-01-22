<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:51:24
  from "/app/styles/templates/adm/AccountDataPageDetail.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a63495c323d64_93761010',
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
  'includes' => 
  array (
    'file:overall_header.tpl' => 1,
    'file:overall_footer.tpl' => 1,
  ),
),false)) {
function content_5a63495c323d64_93761010 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10337330455a63495c27c356_12790384';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_5a63495c280584_31295176');
?>

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
		<td class="blank"><a class="tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_note_k\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_leyend\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
&nbsp; <img src="./styles/resource/images/admin/i.gif" height="12" width="12"></a></td>
	</tr>
	<tr>
		<td class="unico transparent"><a href="#" onclick="$('#datos').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_account_data\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="datos">
			<table align="center" width="60%">
			<tr><th colspan="2">&nbsp;</th></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'input_id\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'id\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_name\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'nombre\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_mail\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'email_1\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_perm_mail\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'email_2\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_auth_level\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'nivel\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_on_vacation\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacas\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_banned\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'suspen\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'mas\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_alliance\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'alianza\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';
echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'id_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_reg_ip\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ip\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_last_ip\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ip2\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_checkip_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ipcheck\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_register_time\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'reg_time\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_act_time\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'onlinetime\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_home_planet_id\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'id_p\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_home_planet_coord\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td>[<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'g\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
:<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'s\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
:<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'p\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
]</td></tr>
			<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php if ($_smarty_tpl->tpl_vars[\'info\']->value) {?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_user_system\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'info\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php }?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			<tr><td height="22px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><a href="#" onclick="$('#puntaje').slideToggle();return false"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_see_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td></tr>
			</table>
			<br>
			
			<!-- PUNTAJE DEL USUARIO -->
			<div id="puntaje" style="display:none">
			<table align="center" width="60%">
			<tr><th colspan="3" class="centrado2"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_user_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th></tr>
			<td width="15%"></td><td width="40%" class="centrado"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_points_count\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="5%" class="centrado"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td>
			<tr><td width="15%" class="centrado"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'researchs_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_tecno\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_tecno\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'researchs_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%" class="ranking"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_tecno\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td width="15%" class="centrado"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'defenses_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_def\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_def\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'defenses_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%" class="ranking"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_def\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td width="15%" class="centrado"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ships_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_fleet\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_fleet\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ships_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%" class="ranking"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_fleet\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td width="15%" class="centrado"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildings_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_builds\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_builds\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildings_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%" class="ranking"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_builds\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td colspan="3" class="total"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_total_points\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
<span style="color:#FF0000"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'total_points\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</span></td></tr>
			</table>
			<br>
			</div>
			
			
			<div id="banned" style="display:none">
			<table align="center" width="60%">
			<tr><th colspan="4"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_suspended_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_suspended_time\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'sus_time\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_suspended_longer\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'sus_longer\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_suspended_reason\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'sus_reason\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_suspended_autor\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'sus_author\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			</table>
			<br>
			</div>
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'AllianceHave\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td>
	</tr><tr>
		<td class="unico transparent">
			<div id="alianza" style="display:none">
			<table align="center" width="60%">
			<tr><th colspan="2"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_info_ally\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th></tr>
			<tr><td width="25%" align="center" ><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'input_id\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'id_aliz\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_leader\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_lider\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_tag\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'tag\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_name_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_nom\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_ext_text']->value;?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_ext\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_int_text\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_int\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_sol_text\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_sol\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_image\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_logo\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_ally_web\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_web\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['ac_register_ally_time']->value;?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ally_register_time\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_total_members\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_cant\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td><a href="#" rel="toggle[puntaje_ali]"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_see_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td></tr>
			</table>
			<br>

			<div id="imagen" style="display:none">
			<table align="center" width="60%">
			<tr><th><?php echo $_smarty_tpl->tpl_vars['ac_ali_logo_11']->value;?>
</th></tr>
			<tr><td width="60%"><img src="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_logo2\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
" class="image"></td></tr>
			<tr><td><a href="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_logo2\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
" target="_blank"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_view_image\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td></tr>
			<tr><td><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_urlnow\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <input type="text" size="50" value="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_logo2\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"></td></tr>
			</table>
			<br>
			</div>

			<div id="externo" style="display:none">
			<table align="center" width="60%">
			<tr><th><?php echo $_smarty_tpl->tpl_vars['ac_ali_text_11']->value;?>
</th></tr>
			<tr><td width="60%"><?php echo $_smarty_tpl->tpl_vars['ali_ext2']->value;?>
</td></tr>
			</table>
			<br>
			</div>

			<div id="interno" style="display:none">
			<table align="center" width="60%">
			<tr><td class="c"><?php echo $_smarty_tpl->tpl_vars['ac_ali_text_22']->value;?>
</td></tr>
			<tr><td width="60%"><?php echo $_smarty_tpl->tpl_vars['ali_int2']->value;?>
</td></tr>
			</table>
			<br>
			</div>

			<div id="solicitud" style="display:none">
			<table align="center" width="60%">
			<tr><th><?php echo $_smarty_tpl->tpl_vars['ac_ali_text_33']->value;?>
</th></tr>
			<tr><td width="60%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ali_sol2\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			</table>
			<br>
			</div>

			<!-- PUNTAJE DE LA ALIANZA DEL USUARIO -->
			<div id="puntaje_ali" style="display:none">
			<table align="center" width="60%">
			<tr><td class="c" colspan="3"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_ally_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<td width="15%"></td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_points_count\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="5%" class="centrado"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_ranking\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td>
			<tr><td width="15%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'researchs_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_tecno_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_tecno_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'researchs_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_tecno_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td width="15%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'defenses_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_def_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_def_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'defenses_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_def_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td width="15%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ships_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_fleet_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_fleet_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ships_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_fleet_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td width="15%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildings_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td><td width="40%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'point_builds_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 (<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'count_builds_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
 <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildings_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
)</td><td width="5%"># <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ranking_builds_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td></tr>
			<tr><td colspan="3"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_total_points\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
<span style="color:#FF0000"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'total_points_ali\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</span></td></tr>
			</table>
			<br>
			</div>
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#pla').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_id_names_coords\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="pla" style="display:none">
			<table width="70%" align="center">
			<tr>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_name\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'input_id\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_diameter\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_fields\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_temperature\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php if ($_smarty_tpl->tpl_vars[\'canedit\']->value == 1) {?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'se_search_edit\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php }?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			</tr>
				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'planets_moons\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			</table>
			<br>
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#recursos').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'resources_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="recursos" style="display:none">
			<table width="70%" align="center">
			<tr>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_name\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'Metal\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'Crystal\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'Deuterium\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'Energy\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
			</tr>
				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'resources\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			<tr>
				<td colspan="5" height="30px"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'Darkmatter\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
: &nbsp;&nbsp;<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'mo\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</td>
			</tr>
			</table>
			<br >
			</div>	
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#edificios').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'buildings_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="edificios" style="display:none">
			<table width="100%" align="center">
				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'names\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'build\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#naves').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ships_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="naves" style="display:none">
			<table align="center" width="100%">
				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'names\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'fleet\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#defensa').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'defenses_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="defensa" style="display:none">
			<table align="center" width="100%">
				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'names\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'defense\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent"><a href="#" onclick="$('#inves').slideToggle();return false" class="link">
		<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_officier_research\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a></td>
	</tr><tr>
		<td class="unico transparent">
			<div id="inves" style="display:none">
			<table align="center" width="60%">
			<tr>
			<th width="50%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'researchs_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
			<th width="50%"><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'officiers_title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
			</tr>
			<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'techoffi\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			</table>
			<br >
			</div>
		</td>
	</tr><tr>
		<td class="unico transparent">
			<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php if ($_smarty_tpl->tpl_vars[\'DestruyeD\']->value != 0) {?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
<a href="#" onclick="$('#destr').slideToggle();return false" class="link">
			<img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_recent_destroyed_planets\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</a>
			<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php } else { ?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
<span class="no_moon"><img src="./styles/resource/images/admin/arrowright.png" width="16" height="10"> 
			<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_recent_destroyed_planets\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_isnodestruyed\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</span><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php }?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

		</td>
	</tr><tr>
		<td class="unico transparent">
			<div id="destr" style="display:none">
			<table align="center" width="60%">
			<tr>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_name\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'input_id\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_coords\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
				<th><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'ac_time_destruyed\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</th>
			</tr>
				<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'destroyed\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

			</table>
			<br>
			</div>
		</td>
	</tr>
</table>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_5a63495c3179f8_75527911');
}
/* Start inline template "/app/styles/templates/adm/AccountDataPageDetail.tpl" =============================*/
function content_5a63495c280584_31295176 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10337330455a63495c27c356_12790384';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
, <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
, <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
, <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
, <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
, <?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
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
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:10337330455a63495c27c356_12790384%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:10337330455a63495c27c356_12790384%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/AccountDataPageDetail.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/AccountDataPageDetail.tpl" =============================*/
function content_5a63495c3179f8_75527911 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '10337330455a63495c27c356_12790384';
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
/* End inline template "/app/styles/templates/adm/AccountDataPageDetail.tpl" =============================*/
}
