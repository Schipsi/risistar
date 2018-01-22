<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:53:27
  from "/app/styles/templates/game/page.messages.view.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349d766e4d1_41432257',
  'has_nocache_code' => true,
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
  'cache_lifetime' => 604800,
),true)) {
function content_5a6349d766e4d1_41432257 (Smarty_Internal_Template $_smarty_tpl) {
?>

<form action="game.php?page=messages" method="post">
<input type="hidden" name="mode" value="action">
<input type="hidden" name="ajax" value="1">
<input type="hidden" name="messcat" value="<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
">
<input type="hidden" name="side" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
<table id="messagestable" style="width:760px;">
	<tr>
		<th colspan="4">Messages</th>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['MessID']->value != 999) {?>
	<tr>
		<td colspan="4">
			<select name="actionTop">
				<option value="readmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_marked'];?>
</option>
				<option value="readtypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_type_all'];?>
</option>
				<option value="readall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_all'];?>
</option>
				<option value="deletemarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_marked'];?>
</option>
				<option value="deleteunmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_unmarked'];?>
</option>
				<option value="deletetypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_type_all'];?>
</option>
				<option value="deleteall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_all'];?>
</option>
			</select>
			<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_confirm'];?>
" type="submit" name="submitTop">
		</td>
	</tr>
	<?php }?>
	<tr style="height: 20px;">
		<td class="right" colspan="4">Page: <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
);return false;">&laquo;</a>&nbsp;<?php }
$_smarty_tpl->tpl_vars['site'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int) ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0) {
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++) {
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value == $_smarty_tpl->tpl_vars['page']->value) {?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php } else { ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<?php }
}
}
if ($_smarty_tpl->tpl_vars['page']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	<tr style="height: 20px;">
		<td>Action</td>
		<td>Date</td>
		<td><?php if ($_smarty_tpl->tpl_vars['MessID']->value != 999) {
echo $_smarty_tpl->tpl_vars['LNG']->value['mg_from'];
} else {
echo $_smarty_tpl->tpl_vars['LNG']->value['mg_to'];
}?></td>
		<td>Sujet</td>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MessageList']->value, 'Message');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Message']->value) {
?>
	<tr id="message_<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
" class="message_head<?php if ($_smarty_tpl->tpl_vars['MessID']->value != 999 && $_smarty_tpl->tpl_vars['Message']->value['unread'] == 1) {?> mes_unread<?php }?>">
		<td style="width:40px;" rowspan="2">
		<?php if ($_smarty_tpl->tpl_vars['MessID']->value != 999) {?><input name="messageID[<?php echo $_smarty_tpl->tpl_vars['Message']->value['id'];?>
]" value="1" type="checkbox"><?php }?>
		</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['time'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['from'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>

		<?php if ($_smarty_tpl->tpl_vars['Message']->value['type'] == 1 && $_smarty_tpl->tpl_vars['MessID']->value != 999) {?>
		<a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['Message']->value['sender'];?>
, Message.CreateAnswer('<?php echo $_smarty_tpl->tpl_vars['Message']->value['subject'];?>
'));" title="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_answer_to'];?>
 <?php echo strip_tags($_smarty_tpl->tpl_vars['Message']->value['from']);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
img/m.gif" border="0"></a>
		<?php }?>
		</td>
	</tr>
	<tr class="messages_body">
		<td colspan="3" class="left">
		<?php echo $_smarty_tpl->tpl_vars['Message']->value['text'];?>

		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<tr style="height: 20px;">
		<td class="right" colspan="4">Page: <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, 1);return false;">&laquo;</a>&nbsp;<?php }
$_smarty_tpl->tpl_vars['site'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int) ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0) {
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++) {
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['site']->value;?>
);return false;"><?php if ($_smarty_tpl->tpl_vars['site']->value == $_smarty_tpl->tpl_vars['page']->value) {?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php } else { ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<?php }
}
}
if ($_smarty_tpl->tpl_vars['page']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<a href="#" onclick="Message.getMessages(<?php echo $_smarty_tpl->tpl_vars['MessID']->value;?>
, <?php echo $_smarty_tpl->tpl_vars['maxPage']->value;?>
);return false;">&raquo;</a><?php }?></td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['MessID']->value != 999) {?>
	<tr>
		<td colspan="4">
			<select name="actionBottom">
				<option value="readmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_marked'];?>
</option>
				<option value="readtypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_type_all'];?>
</option>
				<option value="readall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_read_all'];?>
</option>
				<option value="deletemarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_marked'];?>
</option>
				<option value="deleteunmarked"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_unmarked'];?>
</option>
				<option value="deletetypeall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_type_all'];?>
</option>
				<option value="deleteall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_delete_all'];?>
</option>
			</select>
			<input value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_confirm'];?>
" type="submit" name="submitBottom">
		</td>
	</tr>
	<?php }?>
</table>
</form>
<?php }
}
