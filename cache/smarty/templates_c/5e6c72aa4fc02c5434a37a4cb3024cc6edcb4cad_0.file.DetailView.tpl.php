<?php /* Smarty version 3.1.24, created on 2018-03-14 10:55:40
         compiled from "./cache/modules/Contacts/DetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19872925515aa8f19c9f4e27_37430658%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e6c72aa4fc02c5434a37a4cb3024cc6edcb4cad' => 
    array (
      0 => './cache/modules/Contacts/DetailView.tpl',
      1 => 1521021340,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19872925515aa8f19c9f4e27_37430658',
  'variables' => 
  array (
    'module' => 0,
    'fields' => 0,
    'offset' => 0,
    'bean' => 0,
    'APP' => 0,
    'id' => 0,
    'isAuditEnabled' => 0,
    'ADMIN_EDIT' => 0,
    'PAGINATION' => 0,
    'includes' => 0,
    'gridline' => 0,
    'label' => 0,
    'app_strings' => 0,
    'fieldsUsed' => 0,
    'fieldsHidden' => 0,
    'tableRow' => 0,
    'phone_value' => 0,
    'detail_url' => 0,
    'custom_code_primary' => 0,
    'custom_code_alt' => 0,
    'panelFieldCount' => 0,
    'value' => 0,
    'field_val' => 0,
    'field_options' => 0,
    'vals' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f19cbbafd3_60265647',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f19cbbafd3_60265647')) {
function content_5aa8f19cbbafd3_60265647 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_include')) require_once 'include/Smarty/plugins/function.sugar_include.php';
if (!is_callable('smarty_function_sugar_translate')) require_once 'include/Smarty/plugins/function.sugar_translate.php';
if (!is_callable('smarty_function_counter')) require_once 'include/Smarty/plugins/function.counter.php';
if (!is_callable('smarty_modifier_strip_semicolon')) require_once 'include/Smarty/plugins/modifier.strip_semicolon.php';
if (!is_callable('smarty_function_sugar_getimage')) require_once 'include/Smarty/plugins/function.sugar_getimage.php';
if (!is_callable('smarty_function_sugar_phone')) require_once 'include/Smarty/plugins/function.sugar_phone.php';
if (!is_callable('smarty_function_sugar_ajax_url')) require_once 'include/Smarty/plugins/function.sugar_ajax_url.php';
if (!is_callable('smarty_modifier_escape')) require_once '/opt/lampp/htdocs/spicecrm-master/include/Smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_modifier_nl2br')) require_once 'include/Smarty/plugins/modifier.nl2br.php';
if (!is_callable('smarty_modifier_lookup')) require_once 'include/Smarty/plugins/modifier.lookup.php';
if (!is_callable('smarty_function_multienum_to_array')) require_once 'include/Smarty/plugins/function.multienum_to_array.php';
if (!is_callable('smarty_function_sugar_getjspath')) require_once 'include/Smarty/plugins/function.sugar_getjspath.php';

$_smarty_tpl->properties['nocache_hash'] = '19872925515aa8f19c9f4e27_37430658';
?>



 <?php echo '<script'; ?>
 language="javascript">

SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);

<?php echo '</script'; ?>
> <table cellpadding="0" cellspacing="0" border="0" width="100%" id=""> <tr> <td class="buttons" align="left" NOWRAP width="80%"> <div class="actionsContainer"> <form action="index.php" method="post" name="DetailView" id="formDetailView"> <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
"> <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
"> <input type="hidden" name="return_action"> <input type="hidden" name="return_module"> <input type="hidden" name="return_id"> <input type="hidden" name="module_tab"> <input type="hidden" name="isDuplicate" value="false"> <input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
"> <input type="hidden" name="action" value="EditView"> <input type="hidden" name="sugar_body_only"> </form>

<div class="action_buttons"><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?>  <?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
" id="duplicate_button"><?php }?>  <?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?>  <?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit") && $_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUP_MERGE'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUP_MERGE'];?>
" id="merge_duplicate_button"><?php }?>  <input class="button" id="manage_subscriptions_button" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MANAGE_SUBSCRIPTIONS'];?>
" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
'; _form.action.value='Subscriptions'; _form.module.value='Campaigns'; _form.module_tab.value='Contacts';_form.submit();" name="Manage Subscriptions" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MANAGE_SUBSCRIPTIONS'];?>
"/> <?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Contacts", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?><div class="clear"></div></div> </div> </td> <td align="right" width="20%"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

		    
					<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

				
	</td> </tr> </table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="Contacts_detailview_tabs" class="yui-navset detailview_tabs" >
    
        
        
    
    <ul class="yui-nav">
                    
                    
            <li><a id="tab0" href="javascript:void(0)"><em><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CONTACT_INFORMATION','module'=>'Contacts'),$_smarty_tpl);?>
</em></a></li>
                            
                    
            <li><a id="tab1" href="javascript:void(0)"><em><?php echo smarty_function_sugar_translate(array('label'=>'LBL_PANEL_ADVANCED','module'=>'Contacts'),$_smarty_tpl);?>
</em></a></li>
                            
                    
            <li><a id="tab2" href="javascript:void(0)"><em><?php echo smarty_function_sugar_translate(array('label'=>'LBL_PANEL_ASSIGNMENT','module'=>'Contacts'),$_smarty_tpl);?>
</em></a></li> </ul> <div class="yui-content"> <div id='tabcontent0'> <div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>






    	
  <table id='LBL_CONTACT_INFORMATION' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['full_name']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['full_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['full_name']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['full_name']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['full_name']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['full_name']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['full_name']['value'], null, 0);?>
<?php }?>
<form name="vcard" action="index.php" style="display: inline;"> <span id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name']['name'];?>
'><?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name']['value'];?>
</span>
&nbsp;&nbsp;
<input type="hidden" name="action" value="vCard" /> <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
" /> <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" /> <input type="hidden" name="to_pdf" value="true" /> <span class="id-ff"> <button type="submit" name="vCardButton" id="btn_vCardButton" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_VCARD'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_VCARD'];?>
" class="button"><?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LBL_ID_FF_VCARD'],'name'=>"id-ff-vcard",'ext'=>".png",'other_attributes'=>''),$_smarty_tpl);?>
</button> </span> </form>

												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['title']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['title']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['title']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['title']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['title']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['title']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['title']['value'], null, 0);?>
<?php }?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_home']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_home']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_home']['value'])) {?>
<?php if (isset($_smarty_tpl->tpl_vars["phone_value"])) {$_smarty_tpl->tpl_vars["phone_value"] = clone $_smarty_tpl->tpl_vars["phone_value"];
$_smarty_tpl->tpl_vars["phone_value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_home']['value']; $_smarty_tpl->tpl_vars["phone_value"]->nocache = null; $_smarty_tpl->tpl_vars["phone_value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["phone_value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_home']['value'], null, 0);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


<?php }?>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['department']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['department']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['department']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['department']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['department']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['department']['value'], null, 0);?>
<?php }?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value'])) {?>
<?php if (isset($_smarty_tpl->tpl_vars["phone_value"])) {$_smarty_tpl->tpl_vars["phone_value"] = clone $_smarty_tpl->tpl_vars["phone_value"];
$_smarty_tpl->tpl_vars["phone_value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']; $_smarty_tpl->tpl_vars["phone_value"]->nocache = null; $_smarty_tpl->tpl_vars["phone_value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["phone_value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value'], null, 0);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


<?php }?>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['account_name']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ACCOUNT_NAME','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['account_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
 
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['account_id']['value'])) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "detail_url", null); ob_start(); ?>index.php?module=Accounts&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_id']['value'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="account_id" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['account_id']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['account_name']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['account_id']['value'])) {?></a><?php }?>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['account_id']['value'])) {?>
 
<?php }?>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_fax']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_fax']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value'])) {?>
<?php if (isset($_smarty_tpl->tpl_vars["phone_value"])) {$_smarty_tpl->tpl_vars["phone_value"] = clone $_smarty_tpl->tpl_vars["phone_value"];
$_smarty_tpl->tpl_vars["phone_value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']; $_smarty_tpl->tpl_vars["phone_value"]->nocache = null; $_smarty_tpl->tpl_vars["phone_value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["phone_value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value'], null, 0);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


<?php }?>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['primary_address_street']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_PRIMARY_ADDRESS','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['primary_address_street']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<table border='0' cellpadding='0' cellspacing='0' width='100%'> <tr> <td width='99%'> <input type="hidden" class="sugar_field" id="primary_address_street" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_street']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="primary_address_city" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_city']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="primary_address_state" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_state']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="primary_address_country" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_country']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="primary_address_postalcode" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_postalcode']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
">
<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_street']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
<br>
<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_city']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
 <?php echo smarty_modifier_nl2br(url2html(preg_replace('!<[^>]*?>!', ' ', smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_state']['value'], 'htmlentitydecode'))));?>
&nbsp;&nbsp;<?php echo smarty_modifier_nl2br(url2html(preg_replace('!<[^>]*?>!', ' ', smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_postalcode']['value'], 'htmlentitydecode'))));?>
<br>
<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['primary_address_country']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>

</td> <td class='dataField' width='1%'>

<?php echo $_smarty_tpl->tpl_vars['custom_code_primary']->value;?>

</td> </tr> </table>
												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['alt_address_street']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ALTERNATE_ADDRESS','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['alt_address_street']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<table border='0' cellpadding='0' cellspacing='0' width='100%'> <tr> <td width='99%'> <input type="hidden" class="sugar_field" id="alt_address_street" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_street']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="alt_address_city" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_city']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="alt_address_state" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_state']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="alt_address_country" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_country']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
"> <input type="hidden" class="sugar_field" id="alt_address_postalcode" value="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_postalcode']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
">
<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_street']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
<br>
<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_city']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
 <?php echo smarty_modifier_nl2br(url2html(preg_replace('!<[^>]*?>!', ' ', smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_state']['value'], 'htmlentitydecode'))));?>
&nbsp;&nbsp;<?php echo smarty_modifier_nl2br(url2html(preg_replace('!<[^>]*?>!', ' ', smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_postalcode']['value'], 'htmlentitydecode'))));?>
<br>
<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['alt_address_country']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>

</td> <td class='dataField' width='1%'>

<?php echo $_smarty_tpl->tpl_vars['custom_code_alt']->value;?>

</td> </tr> </table>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['email2_c']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL2','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['email2_c']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['email2_c']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['email2_c']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['email2_c']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['email2_c']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['email2_c']['value'], null, 0);?>
<?php }?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['email2_c']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['email2_c']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['email1']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['email1']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id='email1_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['email1']['value'];?>

</span>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<span class="sugar_field" id="<?php echo smarty_modifier_nl2br(url2html(htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['description']['name'], ENT_QUOTES, 'UTF-8', true)));?>
"><?php echo smarty_modifier_nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
</span>

												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		</table>
    <?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

      
<?php }?>
</div> </div> <div id='tabcontent1'> <div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>






    	
  <table id='LBL_PANEL_ADVANCED' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['report_to_name']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['report_to_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
 
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'])) {?>
<?php $_smarty_tpl->_capture_stack[0][] = array('default', "detail_url", null); ob_start(); ?>index.php?module=Contacts&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['report_to_name']['value'];?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'])) {?></a><?php }?>

												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['birthdate']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_BIRTHDATE','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['birthdate']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					

    <?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['birthdate']['value']) <= 0) {?>
        <?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['birthdate']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['birthdate']['default_value'], null, 0);?>
    <?php } else { ?>
        <?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['birthdate']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['birthdate']['value'], null, 0);?>
    <?php }?>



<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['birthdate']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['lead_source']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_LEAD_SOURCE','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['lead_source']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['lead_source']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['lead_source']['name'];?>
" value="$fields.lead_source.options">
$fields.lead_source.options
<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['lead_source']['name'];?>
" value="$fields.lead_source.value">
<?php if (isset($_smarty_tpl->tpl_vars["field_options"])) {$_smarty_tpl->tpl_vars["field_options"] = clone $_smarty_tpl->tpl_vars["field_options"];
$_smarty_tpl->tpl_vars["field_options"]->value = $_smarty_tpl->tpl_vars['fields']->value['lead_source']['options']; $_smarty_tpl->tpl_vars["field_options"]->nocache = null; $_smarty_tpl->tpl_vars["field_options"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_options"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['lead_source']['options'], null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("field_val", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['lead_source']['value'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (isset($_smarty_tpl->tpl_vars["field_val"])) {$_smarty_tpl->tpl_vars["field_val"] = clone $_smarty_tpl->tpl_vars["field_val"];
$_smarty_tpl->tpl_vars["field_val"]->value = Smarty::$_smarty_vars['capture']['field_val']; $_smarty_tpl->tpl_vars["field_val"]->nocache = null; $_smarty_tpl->tpl_vars["field_val"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_val"] = new Smarty_Variable(Smarty::$_smarty_vars['capture']['field_val'], null, 0);?>
<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>

<?php }?>

												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['personal_interests']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_PERSONAL_INTERESTS','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['personal_interests']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['personal_interests']['value']) && ($_smarty_tpl->tpl_vars['fields']->value['personal_interests']['value'] != '^^')) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['personal_interests']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['personal_interests']['value'];?>
">
<?php echo smarty_function_multienum_to_array(array('string'=>$_smarty_tpl->tpl_vars['fields']->value['personal_interests']['value'],'assign'=>"vals"),$_smarty_tpl);?>

<?php
$_from = $_smarty_tpl->tpl_vars['vals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
<?php if (isset($_smarty_tpl->tpl_vars["field_options"])) {$_smarty_tpl->tpl_vars["field_options"] = clone $_smarty_tpl->tpl_vars["field_options"];
$_smarty_tpl->tpl_vars["field_options"]->value = $_smarty_tpl->tpl_vars['fields']->value['personal_interests']['options']; $_smarty_tpl->tpl_vars["field_options"]->nocache = null; $_smarty_tpl->tpl_vars["field_options"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_options"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['personal_interests']['options'], null, 0);?>
<?php $_smarty_tpl->_capture_stack[0][] = array("field_val", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['item']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if (isset($_smarty_tpl->tpl_vars["field_val"])) {$_smarty_tpl->tpl_vars["field_val"] = clone $_smarty_tpl->tpl_vars["field_val"];
$_smarty_tpl->tpl_vars["field_val"]->value = Smarty::$_smarty_vars['capture']['field_val']; $_smarty_tpl->tpl_vars["field_val"]->nocache = null; $_smarty_tpl->tpl_vars["field_val"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_val"] = new Smarty_Variable(Smarty::$_smarty_vars['capture']['field_val'], null, 0);?>

<li style="margin-left:10px;"><?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
</li>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
<?php }?>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		</table>
    <?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

      
<?php }?>
</div> </div> <div id='tabcontent2'> <div id='detailpanel_3' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>






    	
  <table id='LBL_PANEL_ASSIGNMENT' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_NAME','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<span id="assigned_user_id" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_id']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['assigned_user_name']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="date_modified" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['modified_by_name']['value'];?>
</span>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'Contacts'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php }?>
                                			</td> <td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="date_entered" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_entered']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['created_by_name']['value'];?>
</span>
												
								<?php }?>
							</td> </tr>
	<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		</table>
    <?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

      
<?php }?>
</div> </div> </div> </div>

</form> <?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/popup_helper.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type="text/javascript">
var Contacts_detailview_tabs = new YAHOO.widget.TabView("Contacts_detailview_tabs");
Contacts_detailview_tabs.selectTab(0);
<?php echo '</script'; ?>
>
<?php }
}
?>