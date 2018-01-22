<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:53:27
  from "/app/styles/templates/game/page.messages.view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349d766aba0_20511378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c8e78e3e11e129495aa350deb9eedba882950865' => 
    array (
      0 => '/app/styles/templates/game/page.messages.view.tpl',
      1 => 1516049380,
      2 => 'extends',
    ),
    '15c45afeaad8a5c36f1c7c1785c267f9a65e476b' => 
    array (
      0 => '/app/styles/templates/game/page.messages.view.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
    '869be8687e84b6df5ea1fc7358a671e79a8ae4ff' => 
    array (
      0 => '/app/styles/templates/game/layout.ajax.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page.messages.view.tpl' => 1,
    'file:layout.ajax.tpl' => 1,
  ),
),false)) {
function content_5a6349d766aba0_20511378 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '7303688885a6349d75fe328_72267731';
$_smarty_tpl->_subTemplateRender("file:page.messages.view.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '15c45afeaad8a5c36f1c7c1785c267f9a65e476b', 'content_5a6349d7601926_72840411');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.ajax.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '869be8687e84b6df5ea1fc7358a671e79a8ae4ff', 'content_5a6349d7668571_06606289');
}
/* Start inline template "extends:page.messages.view.tpl" =============================*/
function content_5a6349d7601926_72840411 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '7303688885a6349d75fe328_72267731';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15595853315a6349d7666057_97284204', "content");
}
/* {block "content"} */
class Block_15595853315a6349d7666057_97284204 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['7303688885a6349d75fe328_72267731'] = true;
?>

<form action="game.php?page=messages" method="post">
<input type="hidden" name="mode" value="action">
<input type="hidden" name="ajax" value="1">
<input type="hidden" name="messcat" value="<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
">
<input type="hidden" name="side" value="<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
">
<table id="messagestable" style="width:760px;">
	<tr>
		<th colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_message_title'];?>
</th>
	</tr>
	<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value != 999) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

	<tr>
		<td colspan="4">
			<select name="actionTop">
				<option value="readmarked"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_marked\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="readtypeall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_type_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="readall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deletemarked"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_marked\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deleteunmarked"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_unmarked\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deletetypeall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_type_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deleteall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
			</select>
			<input value="<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_confirm\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
" type="submit" name="submitTop">
		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != 1) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
, <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
);return false;">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php
$_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++) {
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
, <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
);return false;"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value == $_smarty_tpl->tpl_vars[\'page\']->value) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
]</b><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php } else { ?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
[<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
]<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</a><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }
}
?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
&nbsp;<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
, <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
);return false;">&raquo;</a><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</td>
	</tr>
	<tr style="height: 20px;">
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_action'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_date'];?>
</td>
		<td><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value != 999) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_from\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php } else { ?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_to\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_subject'];?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'MessageList\']->value, \'Message\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'Message\']->value) {
?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

	<tr id="message_<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
" class="message_head<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value != 999 && $_smarty_tpl->tpl_vars[\'Message\']->value[\'unread\'] == 1) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
 mes_unread<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
">
		<td style="width:40px;" rowspan="2">
		<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value != 999) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
<input name="messageID[<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'id\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
]" value="1" type="checkbox"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

		</td>
		<td><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'time\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'from\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'subject\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

		<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'Message\']->value[\'type\'] == 1 && $_smarty_tpl->tpl_vars[\'MessID\']->value != 999) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

		<a href="#" onclick="return Dialog.PM(<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'sender\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
, Message.CreateAnswer('<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'subject\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
'));" title="<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_answer_to\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
 <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo strip_tags($_smarty_tpl->tpl_vars[\'Message\']->value[\'from\']);?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
"><img src="<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
img/m.gif" border="0"></a>
		<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

		</td>
	</tr>
	<tr class="messages_body">
		<td colspan="3" class="left">
		<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'Message\']->value[\'text\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

	<tr style="height: 20px;">
		<td class="right" colspan="4"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != 1) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
, 1);return false;">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php
$_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++) {
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
, <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
);return false;"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value == $_smarty_tpl->tpl_vars[\'page\']->value) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
]</b><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php } else { ?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
[<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
]<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</a><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }
}
?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';
echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
&nbsp;<a href="#" onclick="Message.getMessages(<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'MessID\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
, <?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'maxPage\']->value;?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
);return false;">&raquo;</a><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php if ($_smarty_tpl->tpl_vars[\'MessID\']->value != 999) {?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

	<tr>
		<td colspan="4">
			<select name="actionBottom">
				<option value="readmarked"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_marked\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="readtypeall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_type_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="readall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_read_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deletemarked"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_marked\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deleteunmarked"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_unmarked\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deletetypeall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_type_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
				<option value="deleteall"><?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_delete_all\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
</option>
			</select>
			<input value="<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_confirm\'];?>
/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>
" type="submit" name="submitBottom">
		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/<?php }?>/*/%%SmartyNocache:7303688885a6349d75fe328_72267731%%*/';?>

</table>
</form>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:page.messages.view.tpl" =============================*/
/* Start inline template "extends:page.messages.view.tpl" =============================*/
function content_5a6349d7668571_06606289 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '7303688885a6349d75fe328_72267731';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6396352155a6349d7669f37_40943382', "content");
}
/* {block "content"} */
class Block_6396352155a6349d7669f37_40943382 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.messages.view.tpl" =============================*/
}
