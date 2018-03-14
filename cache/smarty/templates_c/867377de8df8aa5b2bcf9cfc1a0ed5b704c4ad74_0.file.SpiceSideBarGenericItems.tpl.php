<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./modules/SpiceThemeController/SpiceSideBarWidgets/tpls/SpiceSideBarGenericItems.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1206740185aa8f0ff0df6e3_74629246%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '867377de8df8aa5b2bcf9cfc1a0ed5b704c4ad74' => 
    array (
      0 => './modules/SpiceThemeController/SpiceSideBarWidgets/tpls/SpiceSideBarGenericItems.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1206740185aa8f0ff0df6e3_74629246',
  'variables' => 
  array (
    'closed' => 0,
    'items' => 0,
    'item' => 0,
    'NTC_NO_ITEMS_DISPLAY' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff135f38_12267824',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff135f38_12267824')) {
function content_5aa8f0ff135f38_12267824 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';

$_smarty_tpl->properties['nocache_hash'] = '1206740185aa8f0ff0df6e3_74629246';
?>


<ul <?php if ($_smarty_tpl->tpl_vars['closed']->value === true || $_smarty_tpl->tpl_vars['closed']->value == "true") {?>style="display:none"<?php }?>>
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
    <?php if ($_smarty_tpl->tpl_vars['item']->value['item_summary_short'] != '') {?>
        <li title="<?php echo $_smarty_tpl->tpl_vars['item']->value['module_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['item_summary'];?>
">
            <a href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['item']->value['module_name'];?>
&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
">
                <span><?php echo $_smarty_tpl->tpl_vars['item']->value['item_summary_short'];?>
</span>
            </a>
            <div class="moduleIcon">
                <img src=<?php echo smarty_function_sugar_getimagepath(array('file'=>($_smarty_tpl->tpl_vars['item']->value['module_name']).(".gif")),$_smarty_tpl);?>
>
            </div>
            <div class="changeIcon">
                <a title="<?php echo $_smarty_tpl->tpl_vars['item']->value['module_name'];?>
: <?php echo $_smarty_tpl->tpl_vars['item']->value['item_summary'];?>
" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['item']->value['module_name'];?>
&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['item']->value['item_id'];?>
">
                    <img src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"edit_inline.gif"),$_smarty_tpl);?>
>
                </a>
            </div>
        </li>
    <?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['NTC_NO_ITEMS_DISPLAY']->value;?>

    <?php }?>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</ul><?php }
}
?>