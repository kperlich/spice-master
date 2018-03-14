<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./themes/SpiceTheme/tpls/_head.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16716802155aa8f0ff4ec869_57732614%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e5e63ec5c94c66cf0b06311a99fc1aae9fbcfa5' => 
    array (
      0 => './themes/SpiceTheme/tpls/_head.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16716802155aa8f0ff4ec869_57732614',
  'variables' => 
  array (
    'langHeader' => 0,
    'APP' => 0,
    'MODULE_NAME' => 0,
    'trmodulenames' => 0,
    'trbeanname' => 0,
    'SUGAR_CSS' => 0,
    'SUGAR_JS' => 0,
    'THEME' => 0,
    'THEME_IE6COMPAT' => 0,
    'allThemes' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff4f83a9_04399174',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff4f83a9_04399174')) {
function content_5aa8f0ff4f83a9_04399174 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';
if (!is_callable('smarty_function_sugar_getjspath')) require_once 'include/Smarty/plugins/function.sugar_getjspath.php';

$_smarty_tpl->properties['nocache_hash'] = '16716802155aa8f0ff4ec869_57732614';
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html <?php echo $_smarty_tpl->tpl_vars['langHeader']->value;?>
>
<head>
<?php echo '<script'; ?>
 type="text/javascript" src='vendor/angular/angular.min.js'><?php echo '</script'; ?>
>
<link rel="SHORTCUT ICON" href="themes/SpiceTheme/images/favicon.png">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHARSET'];?>
">
<title><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BROWSER_TITLE'];
if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value != '') {?>/<?php if ($_smarty_tpl->tpl_vars['trmodulenames']->value[$_smarty_tpl->tpl_vars['MODULE_NAME']->value] != '') {
echo $_smarty_tpl->tpl_vars['trmodulenames']->value[$_smarty_tpl->tpl_vars['MODULE_NAME']->value];
} else {
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
}
if ($_smarty_tpl->tpl_vars['trbeanname']->value != '') {?>/<?php echo $_smarty_tpl->tpl_vars['trbeanname']->value;
}
}?></title>
<?php echo $_smarty_tpl->tpl_vars['SUGAR_CSS']->value;?>

<link rel="stylesheet" href="modules/SpiceThemeController/SpiceSideBarWidgets/css/SpiceSideBarWidgets.css">
<?php echo $_smarty_tpl->tpl_vars['SUGAR_JS']->value;?>

<link rel="stylesheet" href="themes/SpiceTheme/css/app.css">
<?php echo '<script'; ?>
 type="text/javascript" src="themes/SpiceTheme/js/libs/jquery-ui.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
SUGAR.themes.theme_name      = '<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
';
SUGAR.themes.theme_ie6compat = <?php echo $_smarty_tpl->tpl_vars['THEME_IE6COMPAT']->value;?>
;
SUGAR.themes.hide_image      = '<?php echo smarty_function_sugar_getimagepath(array('file'=>"hide.gif"),$_smarty_tpl);?>
';
SUGAR.themes.show_image      = '<?php echo smarty_function_sugar_getimagepath(array('file'=>"show.gif"),$_smarty_tpl);?>
';
SUGAR.themes.loading_image      = '<?php echo smarty_function_sugar_getimagepath(array('file'=>"img_loading.gif"),$_smarty_tpl);?>
';
SUGAR.themes.allThemes       = eval(<?php echo $_smarty_tpl->tpl_vars['allThemes']->value;?>
);
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" src="themes/SpiceTheme/js/complete.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>"cache/include/javascript/sugar_field_grp.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
</head><?php }
}
?>