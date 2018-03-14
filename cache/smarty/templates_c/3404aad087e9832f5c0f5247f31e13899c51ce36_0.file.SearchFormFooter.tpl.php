<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./cache/modules/Users/SearchFormFooter.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18129661045aa8f1215f1204_49935625%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3404aad087e9832f5c0f5247f31e13899c51ce36' => 
    array (
      0 => './cache/modules/Users/SearchFormFooter.tpl',
      1 => 1521021217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18129661045aa8f1215f1204_49935625',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1215f3f38_08303279',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1215f3f38_08303279')) {
function content_5aa8f1215f3f38_08303279 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';
if (!is_callable('smarty_function_sugar_translate')) require_once 'include/Smarty/plugins/function.sugar_translate.php';

$_smarty_tpl->properties['nocache_hash'] = '18129661045aa8f1215f1204_49935625';
?>

</form>

<?php echo '<script'; ?>
>
function toggleInlineSearch()
{
    if (document.getElementById('inlineSavedSearch').style.display == 'none'){
        document.getElementById('showSSDIV').value = 'yes'		
        document.getElementById('inlineSavedSearch').style.display = '';

        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
';
        document.getElementById('up_down_img').setAttribute('alt',"<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_HIDE_OPTIONS'),$_smarty_tpl);?>
");

    }else{

        document.getElementById('up_down_img').src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
';
        document.getElementById('up_down_img').setAttribute('alt',"<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);?>
");
			
        document.getElementById('showSSDIV').value = 'no';		
        document.getElementById('inlineSavedSearch').style.display = 'none';		
    }
}
<?php echo '</script'; ?>
>

<?php }
}
?>