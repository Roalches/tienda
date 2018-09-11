<?php
/* Smarty version 3.1.32, created on 2018-09-10 19:15:55
  from 'C:\xampp\htdocs\prestashop\admin680ywwcwx\themes\default\template\helpers\tree\tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b96ed1b6504b4_74194751',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b60f89bcf3b8885e5e65ee160f4da64f9001c1eb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\admin680ywwcwx\\themes\\default\\template\\helpers\\tree\\tree_header.tpl',
      1 => 1532446063,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b96ed1b6504b4_74194751 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
