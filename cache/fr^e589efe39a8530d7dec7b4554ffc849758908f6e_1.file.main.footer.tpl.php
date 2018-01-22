<?php
/* Smarty version 3.1.30, created on 2018-01-20 13:53:18
  from "/app/styles/templates/game/main.footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a6349ce14fa03_36583328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e589efe39a8530d7dec7b4554ffc849758908f6e' => 
    array (
      0 => '/app/styles/templates/game/main.footer.tpl',
      1 => 1516049380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a6349ce14fa03_36583328 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="clear"></div>
<div id="footer">
	<?php if ($_smarty_tpl->tpl_vars['ga_active']->value) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ga_key']->value;?>
']);
	_gaq.push(['_trackPageview']);

	(function() {
	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();
	<?php echo '</script'; ?>
>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['debug']->value == 1) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
	onerror = handleErr;
	<?php echo '</script'; ?>
>
	<?php }?>
</div>
</body>
</html><?php }
}
