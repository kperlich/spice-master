<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./modules/SpiceThemeController/SpiceSideBarWidgets/tpls/SpiceSideBarWidgetReminders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4149072035aa8f0ff148139_16394558%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a7a2320db4e598a51ba9ff3d1c8d55a1f51fca6' => 
    array (
      0 => './modules/SpiceThemeController/SpiceSideBarWidgets/tpls/SpiceSideBarWidgetReminders.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4149072035aa8f0ff148139_16394558',
  'variables' => 
  array (
    'closed' => 0,
    'reminders' => 0,
    'reminder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff156146_59904703',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff156146_59904703')) {
function content_5aa8f0ff156146_59904703 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';

$_smarty_tpl->properties['nocache_hash'] = '4149072035aa8f0ff148139_16394558';
?>


<ul <?php if ($_smarty_tpl->tpl_vars['closed']->value == true) {?>style="display:none"<?php }?>>
    <?php
$_from = $_smarty_tpl->tpl_vars['reminders']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['reminder'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['reminder']->_loop = false;
$_smarty_tpl->tpl_vars['reminderitem'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['reminderitem']->value => $_smarty_tpl->tpl_vars['reminder']->value) {
$_smarty_tpl->tpl_vars['reminder']->_loop = true;
$foreach_reminder_Sav = $_smarty_tpl->tpl_vars['reminder'];
?>

        <li id='reminder<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean_id'];?>
'>
            <div class='favitemDetails'>
                <img class="closeIcon" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"close_inline.gif"),$_smarty_tpl);?>
 onclick="spicetheme.removeReminderById('<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean_id'];?>
');"></img>&nbsp;
                <span style="float:left"><?php echo $_smarty_tpl->tpl_vars['reminder']->value['reminder_date'];?>

            </div>  
            <div>
                <a title="<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean'];?>
: <?php echo $_smarty_tpl->tpl_vars['reminder']->value['summary'];?>
" href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean'];?>
&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean_id'];?>
">
                    <span><?php echo $_smarty_tpl->tpl_vars['reminder']->value['summary'];?>
</span>
                </a>
                <div class="moduleIcon">
                    <img src=<?php echo smarty_function_sugar_getimagepath(array('file'=>($_smarty_tpl->tpl_vars['reminder']->value['bean']).(".gif")),$_smarty_tpl);?>
>
                </div>
                <div class="changeIcon">
                    <a title="<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean'];?>
: <?php echo $_smarty_tpl->tpl_vars['reminder']->value['summary'];?>
"href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean'];?>
&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['reminder']->value['bean_id'];?>
">
                        <img src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"edit_inline.gif"),$_smarty_tpl);?>
>
                    </a>
                </div>
            </div>  
        </li>
    <?php
$_smarty_tpl->tpl_vars['reminder'] = $foreach_reminder_Sav;
}
?>
</ul><?php }
}
?>