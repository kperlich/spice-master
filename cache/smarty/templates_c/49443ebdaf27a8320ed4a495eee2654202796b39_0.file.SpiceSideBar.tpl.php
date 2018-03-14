<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./themes/SpiceTheme/tpls/SpiceSideBar.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16271730695aa8f0ff5afc12_94074233%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49443ebdaf27a8320ed4a495eee2654202796b39' => 
    array (
      0 => './themes/SpiceTheme/tpls/SpiceSideBar.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16271730695aa8f0ff5afc12_94074233',
  'variables' => 
  array (
    'SpiceSideBar' => 0,
    'item' => 0,
    'jsIncludes' => 0,
    'jsAfterLoad' => 0,
    'config_load_closed' => 0,
    'currentModule' => 0,
    'currentRecord' => 0,
    'currentAction' => 0,
    'subpanelsTabbed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff5fc551_13286036',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff5fc551_13286036')) {
function content_5aa8f0ff5fc551_13286036 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16271730695aa8f0ff5afc12_94074233';
?>
<div id="SpiceSideBar">
<?php
$_from = $_smarty_tpl->tpl_vars['SpiceSideBar']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
    <?php if ($_smarty_tpl->tpl_vars['item']->value['directive'] != '') {?>
        <?php echo $_smarty_tpl->tpl_vars['item']->value['directive'];?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['count'] > 0) {?>
        <div id="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="shortcuts">
            <span class="shortcutstitle"><?php echo $_smarty_tpl->tpl_vars['item']->value['label'];?>
</span>
            <div id="expand_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="expander" onClick="spicetheme.toggle('<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
',true)">
                <span class="<?php if ($_smarty_tpl->tpl_vars['item']->value['closed'] == 'true') {?>arrow_down<?php } else { ?>arrow_up<?php }?>"></span>
            </div>
            <div id="widget_cotent_<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" class="widget_content <?php if ($_smarty_tpl->tpl_vars['item']->value['closed'] == 'true') {?>close<?php } else { ?>open<?php }?>">
            <?php if (($_smarty_tpl->tpl_vars['item']->value['closed'] === true || $_smarty_tpl->tpl_vars['item']->value['closed'] === 'true') && $_smarty_tpl->tpl_vars['item']->value['load_closed']) {?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['closed'] === false || $_smarty_tpl->tpl_vars['item']->value['closed'] === 'false') {?>
                <?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>

            <?php }?>
            </div>
        </div>
        <?php }?>
    <?php }?>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>

<?php echo $_smarty_tpl->tpl_vars['jsIncludes']->value;?>

<?php echo $_smarty_tpl->tpl_vars['jsAfterLoad']->value;?>

<?php echo '<script'; ?>
 tyle="text/javascript">
    var load_closed = <?php if ($_smarty_tpl->tpl_vars['config_load_closed']->value) {?>true<?php } else { ?>false<?php }?> ;
    var currentModule = '<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
' ;
    var currentRecord = '<?php echo $_smarty_tpl->tpl_vars['currentRecord']->value;?>
' ;
    var currentAction = '<?php echo $_smarty_tpl->tpl_vars['currentAction']->value;?>
' ;
    var subpanelsTabbed = <?php if ($_smarty_tpl->tpl_vars['subpanelsTabbed']->value) {?>true<?php } else { ?>false<?php }?> ;
<?php echo '</script'; ?>
>
</div>
<?php }
}
?>