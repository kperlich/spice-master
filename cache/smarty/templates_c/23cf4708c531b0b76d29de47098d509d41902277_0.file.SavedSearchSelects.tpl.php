<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./modules/SavedSearch/SavedSearchSelects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14619715905aa8f121382728_17874064%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '23cf4708c531b0b76d29de47098d509d41902277' => 
    array (
      0 => './modules/SavedSearch/SavedSearchSelects.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14619715905aa8f121382728_17874064',
  'variables' => 
  array (
    'SAVED_SEARCHES_OPTIONS' => 0,
    'SEARCH_MODULE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1213f1c54_90938640',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1213f1c54_90938640')) {
function content_5aa8f1213f1c54_90938640 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14619715905aa8f121382728_17874064';
?>


<?php if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>

	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
	
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
?>