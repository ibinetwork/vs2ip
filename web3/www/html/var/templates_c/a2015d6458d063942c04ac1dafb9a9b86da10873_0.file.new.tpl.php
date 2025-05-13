<?php
/* Smarty version 3.1.48, created on 2025-05-13 11:04:04
  from '/var/www/html/modules/themes_system/themes/default/new.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_68235154739788_41343248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2015d6458d063942c04ac1dafb9a9b86da10873' => 
    array (
      0 => '/var/www/html/modules/themes_system/themes/default/new.tpl',
      1 => 1582832751,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68235154739788_41343248 (Smarty_Internal_Template $_smarty_tpl) {
?><form method="POST">
<table width="99%" border="0" cellspacing="0" cellpadding="4" align="center">
    <tr class="letra12">
	<td>
          <input class="button" type="submit" name="changeTheme" value="<?php echo $_smarty_tpl->tpl_vars['CHANGE']->value;?>
" >
	</td>
    </tr>
</table>
<table class="tabForm" width="100%" >
    <tr class="letra12">
        <td width="9%"><b><?php echo $_smarty_tpl->tpl_vars['themes']->value['LABEL'];?>
:</b></td>
	<td width="35%"><?php echo $_smarty_tpl->tpl_vars['themes']->value['INPUT'];?>
</td>
    </tr>
</table>
</form><?php }
}
