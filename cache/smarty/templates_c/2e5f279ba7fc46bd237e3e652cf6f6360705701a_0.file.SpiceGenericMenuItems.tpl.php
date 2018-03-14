<?php /* Smarty version 3.1.24, created on 2018-03-14 10:54:32
         compiled from "./modules/SpiceThemeController/tpls/SpiceGenericMenuItems.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15819716725aa8f158037420_58046973%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2e5f279ba7fc46bd237e3e652cf6f6360705701a' => 
    array (
      0 => './modules/SpiceThemeController/tpls/SpiceGenericMenuItems.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15819716725aa8f158037420_58046973',
  'variables' => 
  array (
    'title' => 0,
    'items' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f158076cc6_67119332',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f158076cc6_67119332')) {
function content_5aa8f158076cc6_67119332 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';

$_smarty_tpl->properties['nocache_hash'] = '15819716725aa8f158037420_58046973';
?>

<ul class="itemMenuLv"><span class="itemMenuHeader"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</span>
    <?php
$_from = $_smarty_tpl->tpl_vars['items']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['itemcount'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['itemcount']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <li>
            <a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['item']->value['module_name'];?>
&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['item_summary_short'];?>
</a>
            <div class="editlink">
                <a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['item']->value['module_name'];?>
&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
">
                    <img src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"dashlet-header-edit.gif"),$_smarty_tpl);?>
/>
                </a>
            </div>
        </li>

    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</ul>
<?php }
}
?>