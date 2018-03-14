<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./themes/SpiceTheme/tpls/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2498329685aa8f0ff49e578_80422825%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c7b62d79584210aa2efd5a523e3d0b22ff3e2384' => 
    array (
      0 => './themes/SpiceTheme/tpls/header.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2498329685aa8f0ff49e578_80422825',
  'variables' => 
  array (
    'SUGAR_DCJS' => 0,
    'AUTHENTICATED' => 0,
    'sideBarClosed' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff4eaef3_50300300',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff4eaef3_50300300')) {
function content_5aa8f0ff4eaef3_50300300 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2498329685aa8f0ff49e578_80422825';
?>

<?php echo $_smarty_tpl->getSubTemplate ("themes/SpiceTheme/tpls/_head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('theme_template'=>true), 0);
?>

<body onMouseOut="closeMenus();" ng-app="SpiceCRM">
<a name="top"></a>
<?php echo $_smarty_tpl->tpl_vars['SUGAR_DCJS']->value;?>

<div id="header">
    
    
    
    <div class="clear"></div>
    
    <div class="clear"></div>
    <?php if (!$_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
    <br /><br />
    <?php }?>
    <div id="ajaxHeader">
        <?php echo $_smarty_tpl->getSubTemplate ("themes/SpiceTheme/tpls/_headerTotal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('theme_template'=>true), 0);
?>

    </div>
    <div class="clear"></div>
</div>


<iframe id='ajaxUI-history-iframe' src='index.php?entryPoint=getImage&imageName=blank.png'  title='empty' style='display:none'></iframe>
<input id='ajaxUI-history-field' type='hidden'>
<?php echo '<script'; ?>
 type='text/javascript'>
if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded)
{
    YAHOO.util.History.register('ajaxUILoc', "", SUGAR.ajaxUI.go);
    <?php if ($_REQUEST['module'] != "ModuleBuilder") {?>
    YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
    <?php }?>
}
<?php echo '</script'; ?>
>


<div id="main">
    <div id="content" <?php if (!$_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>class="noLeftColumn"<?php } else { ?>class="<?php if ($_smarty_tpl->tpl_vars['sideBarClosed']->value == 'true') {?>noLeftColumn<?php } else { ?>wLeftColumn<?php }?>"<?php }?>>
        <table style="width:100%"><tr><td>
<?php }
}
?>