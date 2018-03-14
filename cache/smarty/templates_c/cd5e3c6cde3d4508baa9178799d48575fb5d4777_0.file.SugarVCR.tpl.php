<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:43
         compiled from "./include/EditView/SugarVCR.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1923789495aa8f127a78e31_76820941%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd5e3c6cde3d4508baa9178799d48575fb5d4777' => 
    array (
      0 => './include/EditView/SugarVCR.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1923789495aa8f127a78e31_76820941',
  'variables' => 
  array (
    'list_link' => 0,
    'app_strings' => 0,
    'module' => 0,
    'previous_link' => 0,
    'offset' => 0,
    'total' => 0,
    'plus' => 0,
    'next_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f127ac75a4_76215725',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f127ac75a4_76215725')) {
function content_5aa8f127ac75a4_76215725 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimage')) require_once 'include/Smarty/plugins/function.sugar_getimage.php';

$_smarty_tpl->properties['nocache_hash'] = '1923789495aa8f127a78e31_76820941';
?>

<table border="0" cellpadding="0" cellspacing="0" width="100%">
    <tr>
        <td nowrap class="paginationWrapper">
            <?php if (!empty($_smarty_tpl->tpl_vars['list_link']->value)) {?>
            <button type="button" id="save_and_continue" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>
" onClick="this.form.action.value='Save';if(check_form('EditView')){sendAndRedirect('EditView', '<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVING'];?>
 <?php echo $_smarty_tpl->tpl_vars['module']->value;?>
...', '<?php echo $_smarty_tpl->tpl_vars['list_link']->value;?>
');}">
                <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_SAVE_AND_CONTINUE'];?>

            </button>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <?php }?>
            <span class="pagination">
                <?php if (!empty($_smarty_tpl->tpl_vars['previous_link']->value)) {?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
" onClick="document.location.href='<?php echo $_smarty_tpl->tpl_vars['previous_link']->value;?>
';">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"previous",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS']),$_smarty_tpl);?>

                </button>
                <?php } else { ?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS'];?>
" disabled='true'>
                    <?php echo smarty_function_sugar_getimage(array('name'=>"previous_off",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_PREVIOUS']),$_smarty_tpl);?>

                </button>
                <?php }?>
                &nbsp;&nbsp;
                (<?php echo $_smarty_tpl->tpl_vars['offset']->value;
if (!empty($_smarty_tpl->tpl_vars['total']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_LIST_OF'];?>
 <?php echo $_smarty_tpl->tpl_vars['total']->value;
echo $_smarty_tpl->tpl_vars['plus']->value;
}?>)
                &nbsp;&nbsp;
                <?php if (!empty($_smarty_tpl->tpl_vars['next_link']->value)) {?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
" onClick="document.location.href='<?php echo $_smarty_tpl->tpl_vars['next_link']->value;?>
';">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"next",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT']),$_smarty_tpl);?>

                </button>
                <?php } else { ?>
                <button type="button" class="button" title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT'];?>
" disabled="true">
                    <?php echo smarty_function_sugar_getimage(array('name'=>"next_off",'attr'=>"border=\"0\" align=\"absmiddle\"",'ext'=>".gif",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LNK_LIST_NEXT']),$_smarty_tpl);?>

                </button>
                <?php }?>
            </span>
            &nbsp;&nbsp;
        </td>
    </tr>
</table>
<?php }
}
?>