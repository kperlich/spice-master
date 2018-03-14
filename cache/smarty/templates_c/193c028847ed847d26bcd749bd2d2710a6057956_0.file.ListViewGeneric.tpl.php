<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./include/ListView/ListViewGeneric.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:151620225aa8f1216aadc9_92206975%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '193c028847ed847d26bcd749bd2d2710a6057956' => 
    array (
      0 => './include/ListView/ListViewGeneric.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151620225aa8f1216aadc9_92206975',
  'variables' => 
  array (
    'pageData' => 0,
    'currentModule' => 0,
    'moduleListSingular' => 0,
    'moduleList' => 0,
    'data' => 0,
    'displayEmptyDataMesssages' => 0,
    'query' => 0,
    'APP' => 0,
    'sugar_info' => 0,
    'createLink' => 0,
    'importLink' => 0,
    'moduleName' => 0,
    'helpLink' => 0,
    'quotedQuery' => 0,
    'singularModule' => 0,
    'multiSelectData' => 0,
    'hideTable' => 0,
    'actionsLinkTop' => 0,
    'selectLinkTop' => 0,
    'prerow' => 0,
    'quickViewLinks' => 0,
    'displayColumns' => 0,
    'params' => 0,
    'colHeader' => 0,
    'arrowExt' => 0,
    'imageName' => 0,
    'rowColor' => 0,
    '_rowColor' => 0,
    'is_admin' => 0,
    'rowData' => 0,
    'act' => 0,
    'id' => 0,
    'editLinkString' => 0,
    'linkModule' => 0,
    'offset' => 0,
    'action' => 0,
    'scope_row' => 0,
    'col' => 0,
    'record' => 0,
    'url' => 0,
    'colCount' => 0,
    'selectLinkBottom' => 0,
    'actionsLinkBottom' => 0,
    'contextMenus' => 0,
    'aggregates' => 0,
    'contextMenuScript' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f121838929_29355671',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f121838929_29355671')) {
function content_5aa8f121838929_29355671 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getjspath')) require_once 'include/Smarty/plugins/function.sugar_getjspath.php';
if (!is_callable('smarty_modifier_replace')) require_once 'include/Smarty/plugins/modifier.replace.php';
if (!is_callable('smarty_function_counter')) require_once 'include/Smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_sugar_translate')) require_once 'include/Smarty/plugins/function.sugar_translate.php';
if (!is_callable('smarty_function_sugar_getimage')) require_once 'include/Smarty/plugins/function.sugar_getimage.php';
if (!is_callable('smarty_function_sugar_ajax_url')) require_once 'include/Smarty/plugins/function.sugar_ajax_url.php';
if (!is_callable('smarty_function_sugar_evalcolumn_old')) require_once 'include/Smarty/plugins/function.sugar_evalcolumn_old.php';
if (!is_callable('smarty_function_sugar_field')) require_once 'include/Smarty/plugins/function.sugar_field.php';

$_smarty_tpl->properties['nocache_hash'] = '151620225aa8f1216aadc9_92206975';
?>


<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/popup_helper.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>


<?php echo '<script'; ?>
>

	$(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	  		$(node).sugarActionMenu();
	  	});

        $('.selectActionsDisabled').children().each(function(index) {
            $(this).attr('onclick','').unbind('click');
        });
        
        var selectedTopValue = $("#selectCountTop").attr("value");
        if(typeof(selectedTopValue) != "undefined" && selectedTopValue != "0"){
        	sugarListView.prototype.toggleSelected();
        }
	});
	
<?php echo '</script'; ?>
>
<?php if (isset($_smarty_tpl->tpl_vars["currentModule"])) {$_smarty_tpl->tpl_vars["currentModule"] = clone $_smarty_tpl->tpl_vars["currentModule"];
$_smarty_tpl->tpl_vars["currentModule"]->value = $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']; $_smarty_tpl->tpl_vars["currentModule"]->nocache = null; $_smarty_tpl->tpl_vars["currentModule"]->scope = 0;
} else $_smarty_tpl->tpl_vars["currentModule"] = new Smarty_Variable($_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars["singularModule"])) {$_smarty_tpl->tpl_vars["singularModule"] = clone $_smarty_tpl->tpl_vars["singularModule"];
$_smarty_tpl->tpl_vars["singularModule"]->value = $_smarty_tpl->tpl_vars['moduleListSingular']->value[$_smarty_tpl->tpl_vars['currentModule']->value]; $_smarty_tpl->tpl_vars["singularModule"]->nocache = null; $_smarty_tpl->tpl_vars["singularModule"]->scope = 0;
} else $_smarty_tpl->tpl_vars["singularModule"] = new Smarty_Variable($_smarty_tpl->tpl_vars['moduleListSingular']->value[$_smarty_tpl->tpl_vars['currentModule']->value], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars["moduleName"])) {$_smarty_tpl->tpl_vars["moduleName"] = clone $_smarty_tpl->tpl_vars["moduleName"];
$_smarty_tpl->tpl_vars["moduleName"]->value = $_smarty_tpl->tpl_vars['moduleList']->value[$_smarty_tpl->tpl_vars['currentModule']->value]; $_smarty_tpl->tpl_vars["moduleName"]->nocache = null; $_smarty_tpl->tpl_vars["moduleName"]->scope = 0;
} else $_smarty_tpl->tpl_vars["moduleName"] = new Smarty_Variable($_smarty_tpl->tpl_vars['moduleList']->value[$_smarty_tpl->tpl_vars['currentModule']->value], null, 0);?>
<?php if (isset($_smarty_tpl->tpl_vars["hideTable"])) {$_smarty_tpl->tpl_vars["hideTable"] = clone $_smarty_tpl->tpl_vars["hideTable"];
$_smarty_tpl->tpl_vars["hideTable"]->value = false; $_smarty_tpl->tpl_vars["hideTable"]->nocache = null; $_smarty_tpl->tpl_vars["hideTable"]->scope = 0;
} else $_smarty_tpl->tpl_vars["hideTable"] = new Smarty_Variable(false, null, 0);?>

<?php if (count($_smarty_tpl->tpl_vars['data']->value) == 0) {?>
	<?php if (isset($_smarty_tpl->tpl_vars["hideTable"])) {$_smarty_tpl->tpl_vars["hideTable"] = clone $_smarty_tpl->tpl_vars["hideTable"];
$_smarty_tpl->tpl_vars["hideTable"]->value = true; $_smarty_tpl->tpl_vars["hideTable"]->nocache = null; $_smarty_tpl->tpl_vars["hideTable"]->scope = 0;
} else $_smarty_tpl->tpl_vars["hideTable"] = new Smarty_Variable(true, null, 0);?>
	<div class="list view listViewEmpty">
    <?php if ($_smarty_tpl->tpl_vars['displayEmptyDataMesssages']->value) {?>
        <?php if (strlen($_smarty_tpl->tpl_vars['query']->value) == 0) {?>
                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "createLink", null); ob_start(); ?><a href="?module=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];?>
&action=EditView&return_module=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];?>
&return_action=DetailView"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CREATE_BUTTON_LABEL'];?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "importLink", null); ob_start(); ?><a href="?module=Import&action=Step1&import_module=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];?>
&return_module=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];?>
&return_action=index"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_IMPORT'];?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "helpLink", null); ob_start(); ?><a target="_blank" href='?module=Administration&action=SupportPortal&view=documentation&version=<?php echo $_smarty_tpl->tpl_vars['sugar_info']->value['sugar_version'];?>
&edition=<?php echo $_smarty_tpl->tpl_vars['sugar_info']->value['sugar_flavor'];?>
&lang=&help_module=<?php echo $_smarty_tpl->tpl_vars['currentModule']->value;?>
&help_action=&key='><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLICK_HERE'];?>
</a><?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <p class="msg">
                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_EMPTY_LIST_VIEW_NO_RESULTS'],"<item2>",$_smarty_tpl->tpl_vars['createLink']->value),"<item3>",$_smarty_tpl->tpl_vars['importLink']->value);?>

                </p>
                <p class="submsg">
                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_EMPTY_LIST_VIEW_NO_RESULTS_SUBMSG'],"<item1>",$_smarty_tpl->tpl_vars['moduleName']->value),"<item4>",$_smarty_tpl->tpl_vars['helpLink']->value);?>

                </p>
        <?php } elseif ($_smarty_tpl->tpl_vars['query']->value == "-advanced_search") {?>
            <p class="msg">
                <?php echo $_smarty_tpl->tpl_vars['APP']->value['MSG_LIST_VIEW_NO_RESULTS_BASIC'];?>

            </p>
        <?php } else { ?>
            <p class="msg">
                <?php $_smarty_tpl->_capture_stack[0][] = array('default', "quotedQuery", null); ob_start(); ?>"<?php echo $_smarty_tpl->tpl_vars['query']->value;?>
"<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                <?php echo smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_LIST_VIEW_NO_RESULTS'],"<item1>",$_smarty_tpl->tpl_vars['quotedQuery']->value);?>

            </p>
            <p class = "submsg">
                <a href="?module=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];?>
&action=EditView&return_module=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];?>
&return_action=DetailView">
                    <?php echo smarty_modifier_replace(smarty_modifier_replace($_smarty_tpl->tpl_vars['APP']->value['MSG_LIST_VIEW_NO_RESULTS_SUBMSG'],"<item1>",$_smarty_tpl->tpl_vars['quotedQuery']->value),"<item2>",$_smarty_tpl->tpl_vars['singularModule']->value);?>

                </a>

            </p>
        <?php }?>
    <?php } else { ?>
        <p class="msg">
            <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>

        </p>
	<?php }?>
	</div>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['multiSelectData']->value;?>


<?php if ($_smarty_tpl->tpl_vars['hideTable']->value == false) {?>
	<table cellpadding='0' cellspacing='0' width='100%' border='0' class='list view'>
    <?php if (isset($_smarty_tpl->tpl_vars["link_select_id"])) {$_smarty_tpl->tpl_vars["link_select_id"] = clone $_smarty_tpl->tpl_vars["link_select_id"];
$_smarty_tpl->tpl_vars["link_select_id"]->value = "selectLinkTop"; $_smarty_tpl->tpl_vars["link_select_id"]->nocache = null; $_smarty_tpl->tpl_vars["link_select_id"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link_select_id"] = new Smarty_Variable("selectLinkTop", null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["link_action_id"])) {$_smarty_tpl->tpl_vars["link_action_id"] = clone $_smarty_tpl->tpl_vars["link_action_id"];
$_smarty_tpl->tpl_vars["link_action_id"]->value = "actionLinkTop"; $_smarty_tpl->tpl_vars["link_action_id"]->nocache = null; $_smarty_tpl->tpl_vars["link_action_id"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link_action_id"] = new Smarty_Variable("actionLinkTop", null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["actionsLink"])) {$_smarty_tpl->tpl_vars["actionsLink"] = clone $_smarty_tpl->tpl_vars["actionsLink"];
$_smarty_tpl->tpl_vars["actionsLink"]->value = $_smarty_tpl->tpl_vars['actionsLinkTop']->value; $_smarty_tpl->tpl_vars["actionsLink"]->nocache = null; $_smarty_tpl->tpl_vars["actionsLink"]->scope = 0;
} else $_smarty_tpl->tpl_vars["actionsLink"] = new Smarty_Variable($_smarty_tpl->tpl_vars['actionsLinkTop']->value, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["selectLink"])) {$_smarty_tpl->tpl_vars["selectLink"] = clone $_smarty_tpl->tpl_vars["selectLink"];
$_smarty_tpl->tpl_vars["selectLink"]->value = $_smarty_tpl->tpl_vars['selectLinkTop']->value; $_smarty_tpl->tpl_vars["selectLink"]->nocache = null; $_smarty_tpl->tpl_vars["selectLink"]->scope = 0;
} else $_smarty_tpl->tpl_vars["selectLink"] = new Smarty_Variable($_smarty_tpl->tpl_vars['selectLinkTop']->value, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["action_menu_location"])) {$_smarty_tpl->tpl_vars["action_menu_location"] = clone $_smarty_tpl->tpl_vars["action_menu_location"];
$_smarty_tpl->tpl_vars["action_menu_location"]->value = "top"; $_smarty_tpl->tpl_vars["action_menu_location"]->nocache = null; $_smarty_tpl->tpl_vars["action_menu_location"]->scope = 0;
} else $_smarty_tpl->tpl_vars["action_menu_location"] = new Smarty_Variable("top", null, 0);?>
	<?php echo $_smarty_tpl->getSubTemplate ('include/ListView/ListViewPagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	<tr height='20'>
			<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
				<td width='1%' class="td_alt">
					&nbsp;
				</td>
			<?php }?>
			<?php if (!empty($_smarty_tpl->tpl_vars['quickViewLinks']->value)) {?>
			<td class='td_alt' width='1%' style="padding: 0px;">&nbsp;</td>
			<?php }?>
			<?php echo smarty_function_counter(array('start'=>0,'name'=>"colCounter",'print'=>false,'assign'=>"colCounter"),$_smarty_tpl);?>

			<?php
$_from = $_smarty_tpl->tpl_vars['displayColumns']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['params'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['params']->_loop = false;
$_smarty_tpl->tpl_vars['colHeader'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['colHeader']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
$foreach_params_Sav = $_smarty_tpl->tpl_vars['params'];
?>
				<th scope='col' width='<?php echo $_smarty_tpl->tpl_vars['params']->value['width'];?>
%'>
					<div style='white-space: normal;'width='100%' align='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['align'])===null||$tmp==='' ? 'left' : $tmp);?>
'>
	                <?php if ((($tmp = @$_smarty_tpl->tpl_vars['params']->value['sortable'])===null||$tmp==='' ? true : $tmp)) {?>
	                    <?php if ($_smarty_tpl->tpl_vars['params']->value['url_sort']) {?>
	                        <a href='<?php echo $_smarty_tpl->tpl_vars['pageData']->value['urls']['orderBy'];
echo mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8');?>
' class='listViewThLinkS1'>
	                    <?php } else { ?>
	                        <?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8') == $_smarty_tpl->tpl_vars['pageData']->value['ordering']['orderBy']) {?>
	                            <a href='javascript:sListView.order_checks("<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['ordering']['sortOrder'])===null||$tmp==='' ? 'ASCerror' : $tmp);?>
", "<?php echo mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8');?>
" , "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];
echo "2_";
echo mb_strtoupper($_smarty_tpl->tpl_vars['pageData']->value['bean']['objectName'], 'UTF-8');
echo "_ORDER_BY";?>
")' class='listViewThLinkS1'>
	                        <?php } else { ?>
	                            <a href='javascript:sListView.order_checks("ASC", "<?php echo mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8');?>
" , "<?php echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];
echo "2_";
echo mb_strtoupper($_smarty_tpl->tpl_vars['pageData']->value['bean']['objectName'], 'UTF-8');
echo "_ORDER_BY";?>
")' class='listViewThLinkS1'>
	                        <?php }?>
	                    <?php }?>
	                    <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['params']->value['label'],'module'=>$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']),$_smarty_tpl);?>

						&nbsp;&nbsp;
						<?php if (mb_strtolower((($tmp = @$_smarty_tpl->tpl_vars['params']->value['orderBy'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['colHeader']->value : $tmp), 'UTF-8') == $_smarty_tpl->tpl_vars['pageData']->value['ordering']['orderBy']) {?>
							<?php if ($_smarty_tpl->tpl_vars['pageData']->value['ordering']['sortOrder'] == 'ASC') {?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "imageName", null); ob_start(); ?>arrow_down.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "alt_sort", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT_DESC'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo smarty_function_sugar_getimage(array('name'=>$_smarty_tpl->tpl_vars['imageName']->value,'attr'=>'align="absmiddle" border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_sort']->value)),$_smarty_tpl);?>

							<?php } else { ?>
								<?php $_smarty_tpl->_capture_stack[0][] = array('default', "imageName", null); ob_start(); ?>arrow_up.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                            <?php $_smarty_tpl->_capture_stack[0][] = array('default', "alt_sort", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT_ASC'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
								<?php echo smarty_function_sugar_getimage(array('name'=>$_smarty_tpl->tpl_vars['imageName']->value,'attr'=>'align="absmiddle" border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_sort']->value)),$_smarty_tpl);?>

							<?php }?>
						<?php } else { ?>
							<?php $_smarty_tpl->_capture_stack[0][] = array('default', "imageName", null); ob_start(); ?>arrow.<?php echo $_smarty_tpl->tpl_vars['arrowExt']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "alt_sort", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SORT'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
							<?php echo smarty_function_sugar_getimage(array('name'=>$_smarty_tpl->tpl_vars['imageName']->value,'attr'=>'align="absmiddle" border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_sort']->value)),$_smarty_tpl);?>

						<?php }?>
	                    </a>
					<?php } else { ?>
	                    <?php if (!isset($_smarty_tpl->tpl_vars['params']->value['noHeader']) || $_smarty_tpl->tpl_vars['params']->value['noHeader'] == false) {?> 
						  <?php echo smarty_function_sugar_translate(array('label'=>$_smarty_tpl->tpl_vars['params']->value['label'],'module'=>$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir']),$_smarty_tpl);?>

	                    <?php }?>
					<?php }?>
					</div>
				</th>
				<?php echo smarty_function_counter(array('name'=>"colCounter"),$_smarty_tpl);?>

			<?php
$_smarty_tpl->tpl_vars['params'] = $foreach_params_Sav;
}
?>
			<td class='td_alt' nowrap="nowrap" width='1%'>&nbsp;</td>
		</tr>
			
		<?php echo smarty_function_counter(array('start'=>$_smarty_tpl->tpl_vars['pageData']->value['offsets']['current'],'print'=>false,'assign'=>"offset",'name'=>"offset"),$_smarty_tpl);?>
	
		<?php
$_from = $_smarty_tpl->tpl_vars['data']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['rowData'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['rowData']->_loop = false;
$_smarty_tpl->tpl_vars['id'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_rowIteration'] = new Smarty_Variable(array('iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['rowData']->value) {
$_smarty_tpl->tpl_vars['rowData']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_rowIteration']->value['iteration']++;
$foreach_rowData_Sav = $_smarty_tpl->tpl_vars['rowData'];
?>
		    <?php echo smarty_function_counter(array('name'=>"offset",'print'=>false),$_smarty_tpl);?>

	        <?php if (isset($_smarty_tpl->tpl_vars['scope_row'])) {$_smarty_tpl->tpl_vars['scope_row'] = clone $_smarty_tpl->tpl_vars['scope_row'];
$_smarty_tpl->tpl_vars['scope_row']->value = true; $_smarty_tpl->tpl_vars['scope_row']->nocache = null; $_smarty_tpl->tpl_vars['scope_row']->scope = 0;
} else $_smarty_tpl->tpl_vars['scope_row'] = new Smarty_Variable(true, null, 0);?>
	
			<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__foreach_rowIteration']->value['iteration']) ? $_smarty_tpl->tpl_vars['__foreach_rowIteration']->value['iteration'] : null))) {?>
				<?php if (isset($_smarty_tpl->tpl_vars['_rowColor'])) {$_smarty_tpl->tpl_vars['_rowColor'] = clone $_smarty_tpl->tpl_vars['_rowColor'];
$_smarty_tpl->tpl_vars['_rowColor']->value = $_smarty_tpl->tpl_vars['rowColor']->value[0]; $_smarty_tpl->tpl_vars['_rowColor']->nocache = null; $_smarty_tpl->tpl_vars['_rowColor']->scope = 0;
} else $_smarty_tpl->tpl_vars['_rowColor'] = new Smarty_Variable($_smarty_tpl->tpl_vars['rowColor']->value[0], null, 0);?>
			<?php } else { ?>
				<?php if (isset($_smarty_tpl->tpl_vars['_rowColor'])) {$_smarty_tpl->tpl_vars['_rowColor'] = clone $_smarty_tpl->tpl_vars['_rowColor'];
$_smarty_tpl->tpl_vars['_rowColor']->value = $_smarty_tpl->tpl_vars['rowColor']->value[1]; $_smarty_tpl->tpl_vars['_rowColor']->nocache = null; $_smarty_tpl->tpl_vars['_rowColor']->scope = 0;
} else $_smarty_tpl->tpl_vars['_rowColor'] = new Smarty_Variable($_smarty_tpl->tpl_vars['rowColor']->value[1], null, 0);?>
			<?php }?>
			<tr height='20' class='<?php echo $_smarty_tpl->tpl_vars['_rowColor']->value;?>
S1'>
				<?php if ($_smarty_tpl->tpl_vars['prerow']->value) {?>
				<td width='1%' class='nowrap'>
				 <?php if (!$_smarty_tpl->tpl_vars['is_admin']->value && 'is_admin_for_user' && $_smarty_tpl->tpl_vars['rowData']->value['IS_ADMIN'] == 1) {?>
						<input type='checkbox' disabled="disabled" class='checkbox' value='<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
'>
				 <?php } else { ?>
	                    <input title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_THIS_ROW_TITLE'),$_smarty_tpl);?>
" onclick='sListView.check_item(this, document.MassUpdate)' type='checkbox' class='checkbox' name='mass[]' value='<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
'>
				 <?php }?>
				</td>
				<?php }?>
				<?php if (!empty($_smarty_tpl->tpl_vars['quickViewLinks']->value)) {?>
	            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'linkModule', null); ob_start();
if ($_smarty_tpl->tpl_vars['params']->value['dynamic_module']) {
echo $_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['params']->value['dynamic_module']];
} else {
echo $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'];
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	            <?php $_smarty_tpl->_capture_stack[0][] = array('default', 'action', null); ob_start();
if ($_smarty_tpl->tpl_vars['act']->value) {
echo $_smarty_tpl->tpl_vars['act']->value;
} else { ?>EditView<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
				<td width='2%' nowrap>
	                <?php if ($_smarty_tpl->tpl_vars['pageData']->value['rowAccess'][$_smarty_tpl->tpl_vars['id']->value]['edit']) {?>
	                <a title='<?php echo $_smarty_tpl->tpl_vars['editLinkString']->value;?>
' id="edit-<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
"
	href="index.php?module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&stamp=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['stamp'];?>
&return_module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['rowData']->value['ID'];?>
"
	                >
	                    <?php $_smarty_tpl->_capture_stack[0][] = array('tmp1', 'alt_edit', null); ob_start();
echo smarty_function_sugar_translate(array('label'=>"LNK_EDIT"),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	                    <?php echo smarty_function_sugar_getimage(array('name'=>"edit_inline.gif",'attr'=>'border="0" ','alt'=>((string)$_smarty_tpl->tpl_vars['alt_edit']->value)),$_smarty_tpl);?>
</a>
	                <?php }?>
	            </td>
	
				<?php }?>
				<?php echo smarty_function_counter(array('start'=>0,'name'=>"colCounter",'print'=>false,'assign'=>"colCounter"),$_smarty_tpl);?>

				<?php
$_from = $_smarty_tpl->tpl_vars['displayColumns']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['params'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['params']->_loop = false;
$_smarty_tpl->tpl_vars['col'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['col']->value => $_smarty_tpl->tpl_vars['params']->value) {
$_smarty_tpl->tpl_vars['params']->_loop = true;
$foreach_params_Sav = $_smarty_tpl->tpl_vars['params'];
?>
				    <td <?php if ($_smarty_tpl->tpl_vars['scope_row']->value) {?> scope='row' <?php }?> align='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['align'])===null||$tmp==='' ? 'left' : $tmp);?>
' valign="top" class="<?php if (($_smarty_tpl->tpl_vars['params']->value['type'] == 'teamset')) {?>nowrap<?php }
if (preg_match('/PHONE/',$_smarty_tpl->tpl_vars['col']->value)) {?> phone<?php }?>"><?php if ($_smarty_tpl->tpl_vars['col']->value == 'NAME' || $_smarty_tpl->tpl_vars['params']->value['bold']) {?><b><?php }
if ($_smarty_tpl->tpl_vars['params']->value['link'] && !$_smarty_tpl->tpl_vars['params']->value['customCode']) {
$_smarty_tpl->_capture_stack[0][] = array('default', 'linkModule', null); ob_start();
if ($_smarty_tpl->tpl_vars['params']->value['dynamic_module']) {
echo $_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['params']->value['dynamic_module']];
} else {
echo (($tmp = @$_smarty_tpl->tpl_vars['params']->value['module'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'] : $tmp);
}
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'action', null); ob_start();
if ($_smarty_tpl->tpl_vars['act']->value) {
echo $_smarty_tpl->tpl_vars['act']->value;
} else { ?>DetailView<?php }
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'record', null); ob_start();
echo (($tmp = @$_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['params']->value['id']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['rowData']->value['ID'] : $tmp);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();
$_smarty_tpl->_capture_stack[0][] = array('default', 'url', null); ob_start(); ?>index.php?module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&offset=<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
&stamp=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['stamp'];?>
&return_module=<?php echo $_smarty_tpl->tpl_vars['linkModule']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
&record=<?php echo $_smarty_tpl->tpl_vars['record']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?><<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['params']->value['ACLTag']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value]['MAIN'] : $tmp);?>
 href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['url']->value),$_smarty_tpl);?>
"><?php }
if ($_smarty_tpl->tpl_vars['params']->value['customCode']) {
echo smarty_function_sugar_evalcolumn_old(array('var'=>$_smarty_tpl->tpl_vars['params']->value['customCode'],'rowData'=>$_smarty_tpl->tpl_vars['rowData']->value),$_smarty_tpl);
} else {
echo smarty_function_sugar_field(array('parentFieldArray'=>$_smarty_tpl->tpl_vars['rowData']->value,'vardef'=>$_smarty_tpl->tpl_vars['params']->value,'displayType'=>'ListView','field'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
}
if (empty($_smarty_tpl->tpl_vars['rowData']->value[$_smarty_tpl->tpl_vars['col']->value]) && empty($_smarty_tpl->tpl_vars['params']->value['customCode'])) {?>&nbsp;<?php }
if ($_smarty_tpl->tpl_vars['params']->value['link'] && !$_smarty_tpl->tpl_vars['params']->value['customCode']) {?></<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value][$_smarty_tpl->tpl_vars['params']->value['ACLTag']])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['pageData']->value['tag'][$_smarty_tpl->tpl_vars['id']->value]['MAIN'] : $tmp);?>
><?php }
if ($_smarty_tpl->tpl_vars['col']->value == 'NAME' || $_smarty_tpl->tpl_vars['params']->value['bold']) {?></b><?php }?></td>
	                <?php if (isset($_smarty_tpl->tpl_vars['scope_row'])) {$_smarty_tpl->tpl_vars['scope_row'] = clone $_smarty_tpl->tpl_vars['scope_row'];
$_smarty_tpl->tpl_vars['scope_row']->value = false; $_smarty_tpl->tpl_vars['scope_row']->nocache = null; $_smarty_tpl->tpl_vars['scope_row']->scope = 0;
} else $_smarty_tpl->tpl_vars['scope_row'] = new Smarty_Variable(false, null, 0);?>
					<?php echo smarty_function_counter(array('name'=>"colCounter"),$_smarty_tpl);?>

				<?php
$_smarty_tpl->tpl_vars['params'] = $foreach_params_Sav;
}
?>
				<td align='right'><?php echo $_smarty_tpl->tpl_vars['pageData']->value['additionalDetails'][$_smarty_tpl->tpl_vars['id']->value];?>
</td>
		    	</tr>
		<?php
$_smarty_tpl->tpl_vars['rowData'] = $foreach_rowData_Sav;
}
if (!$_smarty_tpl->tpl_vars['rowData']->_loop) {
?>
		<tr height='20' class='<?php echo $_smarty_tpl->tpl_vars['rowColor']->value[0];?>
S1'>
		    <td colspan="<?php echo $_smarty_tpl->tpl_vars['colCount']->value;?>
">
		        <em><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_NO_DATA'];?>
</em>
		    </td>
		</tr> 
		<?php
}
?>
    <?php if (isset($_smarty_tpl->tpl_vars["link_select_id"])) {$_smarty_tpl->tpl_vars["link_select_id"] = clone $_smarty_tpl->tpl_vars["link_select_id"];
$_smarty_tpl->tpl_vars["link_select_id"]->value = "selectLinkBottom"; $_smarty_tpl->tpl_vars["link_select_id"]->nocache = null; $_smarty_tpl->tpl_vars["link_select_id"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link_select_id"] = new Smarty_Variable("selectLinkBottom", null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["link_action_id"])) {$_smarty_tpl->tpl_vars["link_action_id"] = clone $_smarty_tpl->tpl_vars["link_action_id"];
$_smarty_tpl->tpl_vars["link_action_id"]->value = "actionLinkBottom"; $_smarty_tpl->tpl_vars["link_action_id"]->nocache = null; $_smarty_tpl->tpl_vars["link_action_id"]->scope = 0;
} else $_smarty_tpl->tpl_vars["link_action_id"] = new Smarty_Variable("actionLinkBottom", null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["selectLink"])) {$_smarty_tpl->tpl_vars["selectLink"] = clone $_smarty_tpl->tpl_vars["selectLink"];
$_smarty_tpl->tpl_vars["selectLink"]->value = $_smarty_tpl->tpl_vars['selectLinkBottom']->value; $_smarty_tpl->tpl_vars["selectLink"]->nocache = null; $_smarty_tpl->tpl_vars["selectLink"]->scope = 0;
} else $_smarty_tpl->tpl_vars["selectLink"] = new Smarty_Variable($_smarty_tpl->tpl_vars['selectLinkBottom']->value, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["actionsLink"])) {$_smarty_tpl->tpl_vars["actionsLink"] = clone $_smarty_tpl->tpl_vars["actionsLink"];
$_smarty_tpl->tpl_vars["actionsLink"]->value = $_smarty_tpl->tpl_vars['actionsLinkBottom']->value; $_smarty_tpl->tpl_vars["actionsLink"]->nocache = null; $_smarty_tpl->tpl_vars["actionsLink"]->scope = 0;
} else $_smarty_tpl->tpl_vars["actionsLink"] = new Smarty_Variable($_smarty_tpl->tpl_vars['actionsLinkBottom']->value, null, 0);?>
    <?php if (isset($_smarty_tpl->tpl_vars["action_menu_location"])) {$_smarty_tpl->tpl_vars["action_menu_location"] = clone $_smarty_tpl->tpl_vars["action_menu_location"];
$_smarty_tpl->tpl_vars["action_menu_location"]->value = "bottom"; $_smarty_tpl->tpl_vars["action_menu_location"]->nocache = null; $_smarty_tpl->tpl_vars["action_menu_location"]->scope = 0;
} else $_smarty_tpl->tpl_vars["action_menu_location"] = new Smarty_Variable("bottom", null, 0);?>
    <?php echo $_smarty_tpl->getSubTemplate ('include/ListView/ListViewPagination.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

	</table>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['contextMenus']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">
	var ftsAggregates = "<?php echo $_smarty_tpl->tpl_vars['aggregates']->value;?>
";
    if(typeof SpiceCRM != "undefined" && typeof SpiceCRM.fts != "undefined")
        SpiceCRM.fts.setAggreggates(ftsAggregates);
<?php echo $_smarty_tpl->tpl_vars['contextMenuScript']->value;?>


function lvg_nav(m,id,act,offset,t){
    if(t.href.search(/#/) < 0){return;}
    else{
        if(act=='pte'){
            act='ProjectTemplatesEditView';
        }
        else if(act=='d'){
            act='DetailView';
        }else if( act =='ReportsWizard'){
            act = 'ReportsWizard';
        }else{
            act='EditView';
        }
    
        url = 'index.php?module='+m+'&offset=' + offset + '&stamp=<?php echo $_smarty_tpl->tpl_vars['pageData']->value['stamp'];?>
&return_module='+m+'&action='+act+'&record='+id;
        t.href=url;
    
    }
}

    function lvg_dtails(id){
        return SUGAR.util.getAdditionalDetails( '<?php echo (($tmp = @$_smarty_tpl->tpl_vars['pageData']->value['bean']['moduleDir'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['params']->value['module'] : $tmp);?>
',id, 'adspan_'+id);}
<?php echo '</script'; ?>
>
<?php }

}
}
?>