<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./include/ListView/ListViewPagination.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9675555305aa8f12183f268_29061134%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57768817f74e3a936519ec751e264792d641dec4' => 
    array (
      0 => './include/ListView/ListViewPagination.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9675555305aa8f12183f268_29061134',
  'variables' => 
  array (
    'navStrings' => 0,
    'prerow' => 0,
    'colCount' => 0,
    'link_select_id' => 0,
    'selectLink' => 0,
    'link_action_id' => 0,
    'actionsLink' => 0,
    'actionDisabledLink' => 0,
    'action_menu_location' => 0,
    'selectedObjectsSpan' => 0,
    'pageData' => 0,
    'moduleString' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1218cc2c9_37595247',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1218cc2c9_37595247')) {
function content_5aa8f1218cc2c9_37595247 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_action_menu')) require_once 'include/Smarty/plugins/function.sugar_action_menu.php';
if (!is_callable('smarty_function_sugar_getimage')) require_once 'include/Smarty/plugins/function.sugar_getimage.php';

$_smarty_tpl->properties['nocache_hash'] = '9675555305aa8f12183f268_29061134';
?>



<?php if (isset($_smarty_tpl->tpl_vars["alt_start"])) {$_smarty_tpl->tpl_vars["alt_start"] = clone $_smarty_tpl->tpl_vars["alt_start"];
$_smarty_tpl->tpl_vars["alt_start"]->value = $_smarty_tpl->tpl_vars['navStrings']->value['start']; $_smarty_tpl->tpl_vars["alt_start"]->nocache = null; $_smarty_tpl->tpl_vars["alt_start"]->scope = 0;
} else $_smarty_tpl->tpl_vars["alt_start"] = new Smarty_Variable($_smarty_tpl->tpl_vars['navStrings']->value['start'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars["alt_next"])) {$_smarty_tpl->tpl_vars["alt_next"] = clone $_smarty_tpl->tpl_vars["alt_next"];
$_smarty_tpl->tpl_vars["alt_next"]->value = $_smarty_tpl->tpl_vars['navStrings']->value['next']; $_smarty_tpl->tpl_vars["alt_next"]->nocache = null; $_smarty_tpl->tpl_vars["alt_next"]->scope = 0;
} else $_smarty_tpl->tpl_vars["alt_next"] = new Smarty_Variable($_smarty_tpl->tpl_vars['navStrings']->value['next'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars["alt_prev"])) {$_smarty_tpl->tpl_vars["alt_prev"] = clone $_smarty_tpl->tpl_vars["alt_prev"];
$_smarty_tpl->tpl_vars["alt_prev"]->value = $_smarty_tpl->tpl_vars['navStrings']->value['previous']; $_smarty_tpl->tpl_vars["alt_prev"]->nocache = null; $_smarty_tpl->tpl_vars["alt_prev"]->scope = 0;
} else $_smarty_tpl->tpl_vars["alt_prev"] = new Smarty_Variable($_smarty_tpl->tpl_vars['navStrings']->value['previous'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars["alt_end"])) {$_smarty_tpl->tpl_vars["alt_end"] = clone $_smarty_tpl->tpl_vars["alt_end"];
$_smarty_tpl->tpl_vars["alt_end"]->value = $_smarty_tpl->tpl_vars['navStrings']->value['end']; $_smarty_tpl->tpl_vars["alt_end"]->nocache = null; $_smarty_tpl->tpl_vars["alt_end"]->scope = 0;
} else $_smarty_tpl->tpl_vars["alt_end"] = new Smarty_Variable($_smarty_tpl->tpl_vars['navStrings']->value['end'], null, 0);?>

<tr class='pagination'  role='presentation'>
    <td colspan='<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {
echo $_smarty_tpl->tpl_vars['colCount']->value+1;
} else {
echo $_smarty_tpl->tpl_vars['colCount']->value;
}?>'>
        <table border='0' cellpadding='0' cellspacing='0' width='100%' class='paginationTable'>
            <tr>
                <td nowrap="nowrap" width='2%' class='paginationActionButtons'>
                    <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>

                        <?php echo smarty_function_sugar_action_menu(array('id'=>$_smarty_tpl->tpl_vars['link_select_id']->value,'params'=>$_smarty_tpl->tpl_vars['selectLink']->value),$_smarty_tpl);?>


                    <?php }?>

                    <?php echo smarty_function_sugar_action_menu(array('id'=>$_smarty_tpl->tpl_vars['link_action_id']->value,'params'=>$_smarty_tpl->tpl_vars['actionsLink']->value),$_smarty_tpl);?>


                    <?php if ($_smarty_tpl->tpl_vars['actionDisabledLink']->value != '') {?><div class='selectActionsDisabled' id='select_actions_disabled_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['actionDisabledLink']->value;?>
<span class='ab'></span></div><?php }?>
                    &nbsp;<?php echo $_smarty_tpl->tpl_vars['selectedObjectsSpan']->value;?>
		
                </td>
                <td  nowrap='nowrap' width='1%' align="right" class='paginationChangeButtons'>
                    <?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage']) {?>
                        <button type='button' id='listViewStartButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewStartButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(0, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
");'<?php } else { ?> onClick='location.href = "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['startPage'];?>
"' <?php }?>>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"start",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_start']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

                        </button>
                    <?php } else { ?>
                        <button type='button' id='listViewStartButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewStartButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['start'];?>
' class='button' disabled='disabled'>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"start_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['start'],'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

                        </button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage']) {?>
                        <button type='button' id='listViewPrevButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewPrevButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['prev'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href = "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['prevPage'];?>
"'<?php }?>>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"previous",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_prev']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

                        </button>
                    <?php } else { ?>
                        <button type='button' id='listViewPrevButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewPrevButton' class='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['previous'];?>
' disabled='disabled'>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"previous_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['previous'],'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

                        </button>
                    <?php }?>
                    <span class='pageNumbers'>(<?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] == 0) {?>0<?php } else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['current']+1;
}?> - <?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'];?>
 <?php echo $_smarty_tpl->tpl_vars['navStrings']->value['of'];?>
 <?php if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted']) {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
} else {
echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'];
if ($_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total']) {?>+<?php }
}?>)</span>
                    <?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage']) {?>
                        <button type='button' id='listViewNextButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewNextButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks(<?php echo $_smarty_tpl->tpl_vars['pageData']->value['offsets']['next'];?>
, "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href = "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['nextPage'];?>
"'<?php }?>>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"next",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_next']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

                        </button>
                    <?php } else { ?>
                        <button type='button' id='listViewNextButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewNextButton' class='button' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['next'];?>
' disabled='disabled'>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"next_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['next'],'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

                        </button>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'] && $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] != $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
                        <button type='button' id='listViewEndButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewEndButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
' class='button' <?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>onclick='return sListView.save_checks("end", "<?php echo $_smarty_tpl->tpl_vars['moduleString']->value;?>
")' <?php } else { ?> onClick='location.href = "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['endPage'];?>
"'<?php }?>>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"end",'ext'=>".png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_end']->value),'other_attributes'=>'align="absmiddle" border="0" '),$_smarty_tpl);?>

                        </button>
                    <?php } elseif (!$_smarty_tpl->tpl_vars['pageData']->value['offsets']['totalCounted'] || $_smarty_tpl->tpl_vars['pageData']->value['offsets']['total'] == $_smarty_tpl->tpl_vars['pageData']->value['offsets']['lastOffsetOnPage']) {?>
                        <button type='button' id='listViewEndButton_<?php echo $_smarty_tpl->tpl_vars['action_menu_location']->value;?>
' name='listViewEndButton' title='<?php echo $_smarty_tpl->tpl_vars['navStrings']->value['end'];?>
' class='button' disabled='disabled'>
                            <?php echo smarty_function_sugar_getimage(array('name'=>"end_off",'ext'=>".png",'alt'=>$_smarty_tpl->tpl_vars['navStrings']->value['end'],'other_attributes'=>'align="absmiddle" '),$_smarty_tpl);?>

                        </button>
                    <?php }?>
                </td>
            </tr>
        </table>
    </td>
</tr><?php }
}
?>