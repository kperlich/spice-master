<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:02
         compiled from "./modules/SpiceThemeController/SpiceSideBarWidgets/tpls/SpiceSideBarShortcuts.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3222140195aa8f0ff00be74_00907293%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '080b07d6570fe7cefe0e2e5b39329afe119ba061' => 
    array (
      0 => './modules/SpiceThemeController/SpiceSideBarWidgets/tpls/SpiceSideBarShortcuts.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3222140195aa8f0ff00be74_00907293',
  'variables' => 
  array (
    'closed' => 0,
    'shortcuts' => 0,
    'shortcut' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff0d9404_40243904',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff0d9404_40243904')) {
function content_5aa8f0ff0d9404_40243904 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3222140195aa8f0ff00be74_00907293';
?>

<ul <?php if ($_smarty_tpl->tpl_vars['closed']->value === true || $_smarty_tpl->tpl_vars['closed']->value == "true") {?>style="display:none"<?php }?>>
    <?php
$_from = $_smarty_tpl->tpl_vars['shortcuts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['shortcut'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['shortcut']->_loop = false;
$_smarty_tpl->tpl_vars['chortcutcountcount'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['chortcutcountcount']->value => $_smarty_tpl->tpl_vars['shortcut']->value) {
$_smarty_tpl->tpl_vars['shortcut']->_loop = true;
$foreach_shortcut_Sav = $_smarty_tpl->tpl_vars['shortcut'];
?>
        <li style="white-space:nowrap;">
            <?php if ($_smarty_tpl->tpl_vars['shortcut']->value['URL'] == '') {?>
                <span><?php echo $_smarty_tpl->tpl_vars['shortcut']->value['LABEL'];?>
</span>
            <?php } else { ?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['shortcut']->value['URL'];?>
"><span><?php echo $_smarty_tpl->tpl_vars['shortcut']->value['LABEL'];?>
</span></a>
            <?php }?>
        </li>
    <?php
$_smarty_tpl->tpl_vars['shortcut'] = $foreach_shortcut_Sav;
}
?>
</ul><?php }
}
?>