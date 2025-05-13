<?php
/* Smarty version 3.1.48, created on 2025-05-13 11:09:12
  from '/var/www/html/modules/pbxadmin/themes/default/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_68235288ddd3c9_62459239',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b04506e410b4492dc5296bab8e36a0c363617bcc' => 
    array (
      0 => '/var/www/html/modules/pbxadmin/themes/default/main.tpl',
      1 => 1724443910,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68235288ddd3c9_62459239 (Smarty_Internal_Template $_smarty_tpl) {
?><table cellspacing="0" cellpadding="0" border="0" width="100%">
  <tr>
    <td valign="top" width="220">
      <div id="nav">
        <div id="nav-setup" class="tabs-container">

          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['leftmenu']->value, 'menucategory', false, 'category', 'outer', array (
));
$_smarty_tpl->tpl_vars['menucategory']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value => $_smarty_tpl->tpl_vars['menucategory']->value) {
$_smarty_tpl->tpl_vars['menucategory']->do_else = false;
?>
                <li class="category category-header"><?php echo $_smarty_tpl->tpl_vars['category']->value;?>
</li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['menucategory']->value, 'menuitem', false, NULL, 'inner', array (
));
$_smarty_tpl->tpl_vars['menuitem']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['menuitem']->value) {
$_smarty_tpl->tpl_vars['menuitem']->do_else = false;
?>
                    <li><a href="/?menu=pbxconfig&amp;type=setup&amp;display=<?php echo $_smarty_tpl->tpl_vars['menuitem']->value['urlkey'];?>
"  ><?php echo $_smarty_tpl->tpl_vars['menuitem']->value['name'];?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

            <li><?php echo $_smarty_tpl->tpl_vars['Option']->value;?>
</li>
            <li style="float:left;border-right:0px"><a href="/admin/" target="_blank"><?php echo $_smarty_tpl->tpl_vars['Unembedded_IssabelPBX']->value;?>
</a></li>
            <div style="height:0px">
                <a href="#" class="info"><span style='margin-left:0.2cm; margin-top:-1.8cm; width:303px'><?php echo $_smarty_tpl->tpl_vars['INFO']->value;?>
</span></a>
            </div>

          </ul>
        </div>      </div>      <br /> <br /> <br /> <br />
    </td>
    <td id="content_pbx" valign="top"><?php echo $_smarty_tpl->tpl_vars['htmlFPBX']->value;?>
</td>
  </tr>
  <?php if ($_smarty_tpl->tpl_vars['isissabelpbx']->value == "0") {?>
  <tr>
    <td></td>
    <td valign="bottom">
      <div align="center">
      </div>
    </td>
  </tr>
  <?php }?>
</table>
<?php }
}
