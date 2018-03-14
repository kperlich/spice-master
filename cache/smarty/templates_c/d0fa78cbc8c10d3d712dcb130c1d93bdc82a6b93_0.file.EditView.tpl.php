<?php /* Smarty version 3.1.24, created on 2018-03-14 10:54:10
         compiled from "./cache/modules/Users/EditView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19904075925aa8f14246f788_89410087%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0fa78cbc8c10d3d712dcb130c1d93bdc82a6b93' => 
    array (
      0 => './cache/modules/Users/EditView.tpl',
      1 => 1521021250,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19904075925aa8f14246f788_89410087',
  'variables' => 
  array (
    'ROLLOVER' => 0,
    'MOD' => 0,
    'ERROR_STRING' => 0,
    'ID' => 0,
    'RETURN_ID' => 0,
    'RETURN_MODULE' => 0,
    'RETURN_ACTION' => 0,
    'REQUIRED_PASSWORD' => 0,
    'USER_NAME' => 0,
    'REDIRECT_EMAILS_TYPE' => 0,
    'IS_GROUP' => 0,
    'IS_GROUP_DISABLED' => 0,
    'IS_PORTALONLY' => 0,
    'IS_PORTAL_ONLY_DISABLED' => 0,
    'IS_FOCUS_ADMIN' => 0,
    'IS_ADMIN_DISABLED' => 0,
    'IS_ADMIN' => 0,
    'EDIT_SELF' => 0,
    'REQUIRED_EMAIL_ADDRESS' => 0,
    'isDuplicate' => 0,
    'SHOW_THEMES' => 0,
    'scroll_to_cal' => 0,
    'ACTION_BUTTON_HEADER' => 0,
    'APP' => 0,
    'CHANGE_PWD' => 0,
    'HIDE_FOR_GROUP_AND_PORTAL' => 0,
    'includes' => 0,
    'def' => 0,
    'label' => 0,
    'fields' => 0,
    'value' => 0,
    'fieldsUsed' => 0,
    'tableRow' => 0,
    'config' => 0,
    'field_val' => 0,
    'field_options' => 0,
    'ac_key' => 0,
    'STATUS_READONLY' => 0,
    'USER_TYPE_DROPDOWN' => 0,
    'USER_TYPE_READONLY' => 0,
    'checked' => 0,
    'panelFieldCount' => 0,
    'EMPLOYEE_STATUS_READONLY' => 0,
    'TITLE_READONLY' => 0,
    'DEPT_READONLY' => 0,
    'form_name' => 0,
    'REPORTS_TO_READONLY' => 0,
    'NEW_EMAIL' => 0,
    'EMAIL_LINK_TYPE' => 0,
    'HIDE_IF_CAN_USE_DEFAULT_OUTBOUND' => 0,
    'mail_smtpdisplay' => 0,
    'mail_smtpserver' => 0,
    'mail_smtpauth_req' => 0,
    'mail_smtpuser' => 0,
    'mail_smtppass' => 0,
    'ERROR_PASSWORD' => 0,
    'ADMIN_EDIT_SELF' => 0,
    'PWDSETTINGS' => 0,
    'REGEX' => 0,
    'THEMES' => 0,
    'EXPORT_DELIMITER' => 0,
    'RECEIVE_NOTIFICATIONS' => 0,
    'EXPORT_CHARSET' => 0,
    'USE_REAL_NAMES' => 0,
    'MAILMERGE_ON' => 0,
    'EXTERNAL_AUTH_CLASS_1' => 0,
    'EXTERNAL_AUTH_CLASS' => 0,
    'EXTERNAL_AUTH_ONLY_CHECKED' => 0,
    'DISPLAY_GROUP_TAB' => 0,
    'USE_GROUP_TABS' => 0,
    'TAB_CHOOSER' => 0,
    'SUBPANEL_TABS' => 0,
    'DATEOPTIONS' => 0,
    'CURRENCY' => 0,
    'TIMEOPTIONS' => 0,
    'sigDigits' => 0,
    'TIMEZONEOPTIONS' => 0,
    'TIMEZONE_CURRENT' => 0,
    'PROMPTTZ' => 0,
    'NUM_GRP_SEP' => 0,
    'default_locale_name_format' => 0,
    'NAMEOPTIONS' => 0,
    'DEC_SEP' => 0,
    'CALENDAR_PUBLISH_KEY' => 0,
    'CALENDAR_PUBLISH_URL' => 0,
    'CALENDAR_SEARCH_URL' => 0,
    'CALENDAR_ICAL_URL' => 0,
    'FDOWOPTIONS' => 0,
    'FDOWCURRENT' => 0,
    'MAIL_SMTPPORT' => 0,
    'MAIL_SMTPSSL' => 0,
    'JAVASCRIPT' => 0,
    'getNameJs' => 0,
    'getNumberJs' => 0,
    'currencySymbolJSON' => 0,
    'themeGroupListJSON' => 0,
    'TEST_EMAIL_ADDRESS' => 0,
    'ACTION_BUTTON_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f14298f663_04006141',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f14298f663_04006141')) {
function content_5aa8f14298f663_04006141 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getjspath')) require_once 'include/Smarty/plugins/function.sugar_getjspath.php';
if (!is_callable('smarty_function_sugar_action_menu')) require_once 'include/Smarty/plugins/function.sugar_action_menu.php';
if (!is_callable('smarty_function_sugar_include')) require_once 'include/Smarty/plugins/function.sugar_include.php';
if (!is_callable('smarty_function_counter')) require_once 'include/Smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';
if (!is_callable('smarty_function_sugar_translate')) require_once 'include/Smarty/plugins/function.sugar_translate.php';
if (!is_callable('smarty_modifier_strip_semicolon')) require_once 'include/Smarty/plugins/modifier.strip_semicolon.php';
if (!is_callable('smarty_function_html_options')) require_once 'include/Smarty/plugins/function.html_options.php';
if (!is_callable('smarty_modifier_lookup')) require_once 'include/Smarty/plugins/modifier.lookup.php';
if (!is_callable('smarty_function_sugar_help')) require_once 'include/Smarty/plugins/function.sugar_help.php';
if (!is_callable('smarty_function_sugar_image')) require_once 'include/Smarty/plugins/function.sugar_image.php';

$_smarty_tpl->properties['nocache_hash'] = '19904075925aa8f14246f788_89410087';
?>




<?php echo $_smarty_tpl->tpl_vars['ROLLOVER']->value;?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Emails/javascript/vars.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_emails.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> <link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/PasswordRequirementBox.css'),$_smarty_tpl);?>
"> <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/SubPanel/SubPanelTiles.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type='text/javascript'>
var ERR_RULES_NOT_MET = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_RULES_NOT_MET'];?>
';
var ERR_ENTER_OLD_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_ENTER_OLD_PASSWORD'];?>
';
var ERR_ENTER_NEW_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_ENTER_NEW_PASSWORD'];?>
';
var ERR_ENTER_CONFIRMATION_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_ENTER_CONFIRMATION_PASSWORD'];?>
';
var ERR_REENTER_PASSWORDS = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_REENTER_PASSWORDS'];?>
';
<?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/User.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/UserEditView.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/PasswordRequirementBox.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['ERROR_STRING']->value;?>


<form name="DetailView" id="DetailView" method="POST" action="index.php"> <input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"> <input type="hidden" name="module" value="Users"> <input type="hidden" name="return_module" value="Users"> <input type="hidden" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ID']->value;?>
"> <input type="hidden" name="return_action" value="EditView"> </form> <form name="EditView" enctype="multipart/form-data" id="EditView" method="POST" action="index.php"> <input type="hidden" name="display_tabs_def"> <input type="hidden" name="hide_tabs_def"> <input type="hidden" name="remove_tabs_def"> <input type="hidden" name="module" value="Users"> <input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"> <input type="hidden" name="action"> <input type="hidden" name="page" value="EditView"> <input type="hidden" name="return_module" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
"> <input type="hidden" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ID']->value;?>
"> <input type="hidden" name="return_action" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ACTION']->value;?>
"> <input type="hidden" name="password_change" id="password_change" value="false"> <input type="hidden" name="required_password" id="required_password" value='<?php echo $_smarty_tpl->tpl_vars['REQUIRED_PASSWORD']->value;?>
' > <input type="hidden" name="old_user_name" value="<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
"> <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['REDIRECT_EMAILS_TYPE']->value;?>
"> <input type="hidden" id="is_group" name="is_group" value='<?php echo $_smarty_tpl->tpl_vars['IS_GROUP']->value;?>
' <?php echo $_smarty_tpl->tpl_vars['IS_GROUP_DISABLED']->value;?>
> <input type="hidden" id='portal_only' name='portal_only' value='<?php echo $_smarty_tpl->tpl_vars['IS_PORTALONLY']->value;?>
' <?php echo $_smarty_tpl->tpl_vars['IS_PORTAL_ONLY_DISABLED']->value;?>
> <input type="hidden" name="is_admin" id="is_admin" value='<?php echo $_smarty_tpl->tpl_vars['IS_FOCUS_ADMIN']->value;?>
' <?php echo $_smarty_tpl->tpl_vars['IS_ADMIN_DISABLED']->value;?>
 > <input type="hidden" name="is_current_admin" id="is_current_admin" value='<?php echo $_smarty_tpl->tpl_vars['IS_ADMIN']->value;?>
' > <input type="hidden" name="edit_self" id="edit_self" value='<?php echo $_smarty_tpl->tpl_vars['EDIT_SELF']->value;?>
' > <input type="hidden" name="required_email_address" id="required_email_address" value='<?php echo $_smarty_tpl->tpl_vars['REQUIRED_EMAIL_ADDRESS']->value;?>
' > <input type="hidden" name="isDuplicate" id="isDuplicate" value="<?php echo $_smarty_tpl->tpl_vars['isDuplicate']->value;?>
"> <div id="popup_window"></div> <?php echo '<script'; ?>
 type="text/javascript">
var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");


//Override so we do not force submit, just simulate the 'save button' click
SUGAR.EmailAddressWidget.prototype.forceSubmit = function() { document.getElementById('Save').click();}

EditView_tabs.on('contentReady', function(e){

<?php if ($_smarty_tpl->tpl_vars['ID']->value) {?>

    var eapmTabIndex = 4;
    <?php if (!$_smarty_tpl->tpl_vars['SHOW_THEMES']->value) {?>eapmTabIndex = 3;<?php }?>
    EditView_tabs.getTab(eapmTabIndex).set('dataSrc','index.php?sugar_body_only=1&module=Users&subpanel=eapm&action=SubPanelViewer&inline=1&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&layout_def_key=UserEAPM&inline=1&ajaxSubpanel=true');
    EditView_tabs.getTab(eapmTabIndex).set('cacheData',true);
    EditView_tabs.getTab(eapmTabIndex).on('dataLoadedChange',function(){
        //reinit action menus
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

    if ( document.location.hash == '#tab5' ) {
        EditView_tabs.selectTab(eapmTabIndex);
    }

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['scroll_to_cal']->value) {?>
    
        //we are coming from the tour welcome page, so we need to simulate a click on the 4th tab
        // and scroll to the calendar_options div after the tabs have rendered
        document.getElementById('tab4').click();
        document.getElementById('calendar_options').scrollIntoView();
    
<?php }?>

});
<?php echo '</script'; ?>
> <table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer"> <tr> <td>
            <?php echo smarty_function_sugar_action_menu(array('id'=>"userEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['ACTION_BUTTON_HEADER']->value,'flat'=>true),$_smarty_tpl);?>

        </td> <td align="right" nowrap> <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_REQUIRED'];?>

        </td> </tr> </table> <div id="EditView_tabs" class="yui-navset"> <ul class="yui-nav"> <li class="selected"><a id="tab1" href="#tab1"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_INFORMATION'];?>
</em></a></li> <li <?php if ($_smarty_tpl->tpl_vars['CHANGE_PWD']->value == 0) {?>style='display:none'<?php }?>><a id="tab2" href="#tab2"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHANGE_PASSWORD_TITLE'];?>
</em></a></li>
        <?php if ($_smarty_tpl->tpl_vars['SHOW_THEMES']->value) {?>
        <li><a id="tab3" href="#tab3" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_THEME'];?>
</em></a></li>
        <?php }?>
        <li><a id="tab4" href="#tab4" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADVANCED'];?>
</em></a></li>
        <?php if ($_smarty_tpl->tpl_vars['ID']->value) {?>
        <li><a id="tab5" href="#tab5" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EAPM_SUBPANEL_TITLE'];?>
</em></a></li>
        <?php }?>
    </ul> <div class="yui-content"> <div>


<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>


<span id='tabcounterJS'><?php echo '<script'; ?>
>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references<?php echo '</script'; ?>
></span> <div id="EditView_tabs" > <div > <div id="detailpanel_1" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['def']->value['templateMeta']['panelClass'])===null||$tmp==='' ? 'edit view edit508' : $tmp);?>
">

<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>





<h4> <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);"> <img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
"></a> <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);"> <img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
"></a>
  <?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_INFORMATION','module'=>'Users'),$_smarty_tpl);?>

              <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_1').className += ' expanded';
    <?php echo '</script'; ?>
> </h4>
  
<table width="100%" border="0" cellspacing="0" cellpadding="0" id='LBL_USER_INFORMATION' class="yui3-skin-sam edit view panelContainer">


<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='user_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_USER_NAME','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
							    <span class="required">*</span> </td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
		 				    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['user_name']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['user_name']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['user_name']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['user_name']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['user_name']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['name'];?>
' size='30' maxlength='60' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' accesskey='7' > <td valign="middle" id='first_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['first_name']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['first_name']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['first_name']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['first_name']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['first_name']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['name'];?>
' size='30' maxlength='30' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='status_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
							    <span class="required">*</span> </td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?>

<?php if (!isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete']) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" title='' >

	<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['status']['value']) && $_smarty_tpl->tpl_vars['fields']->value['status']['value'] != '') {?>
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['default']),$_smarty_tpl);?>

	<?php }?>
	</select>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars["field_options"])) {$_smarty_tpl->tpl_vars["field_options"] = clone $_smarty_tpl->tpl_vars["field_options"];
$_smarty_tpl->tpl_vars["field_options"]->value = $_smarty_tpl->tpl_vars['fields']->value['status']['options']; $_smarty_tpl->tpl_vars["field_options"]->nocache = null; $_smarty_tpl->tpl_vars["field_options"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_options"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['status']['options'], null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("field_val", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['status']['value'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (isset($_smarty_tpl->tpl_vars["field_val"])) {$_smarty_tpl->tpl_vars["field_val"] = clone $_smarty_tpl->tpl_vars["field_val"];
$_smarty_tpl->tpl_vars["field_val"]->value = Smarty::$_smarty_vars['capture']['field_val']; $_smarty_tpl->tpl_vars["field_val"]->nocache = null; $_smarty_tpl->tpl_vars["field_val"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_val"] = new Smarty_Variable(Smarty::$_smarty_vars['capture']['field_val'], null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("ac_key", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (isset($_smarty_tpl->tpl_vars["ac_key"])) {$_smarty_tpl->tpl_vars["ac_key"] = clone $_smarty_tpl->tpl_vars["ac_key"];
$_smarty_tpl->tpl_vars["ac_key"]->value = Smarty::$_smarty_vars['capture']['ac_key']; $_smarty_tpl->tpl_vars["ac_key"]->nocache = null; $_smarty_tpl->tpl_vars["ac_key"]->scope = 0;
} else $_smarty_tpl->tpl_vars["ac_key"] = new Smarty_Variable(Smarty::$_smarty_vars['capture']['ac_key'], null, 0);?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" title='' >

		<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['status']['value']) && $_smarty_tpl->tpl_vars['fields']->value['status']['value'] != '') {?>
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['default']),$_smarty_tpl);?>

		<?php }?>
		</select> <input id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input" size="30" value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
" type="text" style="vertical-align: top;"> <span class="id-ff multiple"> <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-image"></button><button type="button" id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input" title="Clear" onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button> </span>

	
	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];
	

			
		(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		
	
	
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	
			
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
');
	
			
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('change');
			}

			//global variable 
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
", syncFromHiddenToWidget);
		

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions = <?php echo count($_smarty_tpl->tpl_vars['field_options']->value);?>
;
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 300) {
			
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 200;
			
		}
		
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 3000) {
			
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 500;
			
		}
		
		
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
	
	
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		
		minQueryLength: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen,
		queryDelay: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay,
		zIndex: 99999,

				
		
		source: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function () {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('blur');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.blur();
		} else {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
<?php echo '</script'; ?>
> 



<?php }
} else {
echo $_smarty_tpl->tpl_vars['STATUS_READONLY']->value;
}?>
				    
	
	

				
    
				<td valign="middle" id='last_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
							    <span class="required">*</span> </td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['last_name']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['last_name']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['last_name']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['last_name']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['last_name']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['name'];?>
' size='30' maxlength='30' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='UserType_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_USER_TYPE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {
echo $_smarty_tpl->tpl_vars['USER_TYPE_DROPDOWN']->value;
} else {
echo $_smarty_tpl->tpl_vars['USER_TYPE_READONLY']->value;
}?>
				    
	
	

				
    
				<td valign="middle" id='quota_carrying_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_QUOTA_CARRYING','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['value']) == "on") {?> 
<?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "CHECKED"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("CHECKED", null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = ''; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable('', null, 0);?>
<?php }?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['name'];?>
" value="0"> <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['name'];?>
" value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
</table> <?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); <?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("LBL_USER_INFORMATION").style.display='none';<?php echo '</script'; ?>
>
<?php }?>
</div> <div id="detailpanel_2" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['def']->value['templateMeta']['panelClass'])===null||$tmp==='' ? 'edit view edit508' : $tmp);?>
">

<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>





<h4> <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);"> <img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
"></a> <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);"> <img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
"></a>
  <?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_INFORMATION','module'=>'Users'),$_smarty_tpl);?>

              <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_2').className += ' expanded';
    <?php echo '</script'; ?>
> </h4>
  
<table width="100%" border="0" cellspacing="0" cellpadding="0" id='LBL_EMPLOYEE_INFORMATION' class="yui3-skin-sam edit view panelContainer">


<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='employee_status_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_STATUS','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?><span id='employee_status_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['value'];?>

</span><?php } else {
echo $_smarty_tpl->tpl_vars['EMPLOYEE_STATUS_READONLY']->value;
}?>
				    
	
	

				
    
				<td valign="middle" id='show_on_employees_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_SHOW_ON_EMPLOYEES','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "on") {?> 
<?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "CHECKED"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("CHECKED", null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = ''; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable('', null, 0);?>
<?php }?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" value="0"> <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='title_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?>
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['title']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['title']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['title']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['title']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['title']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' ><?php } else {
echo $_smarty_tpl->tpl_vars['TITLE_READONLY']->value;
}?>
				    
	
	

				
    
				<td valign="middle" id='phone_work_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_WORK_PHONE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_work']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_work']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value'], null, 0);?>
<?php }?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_work']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_work']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0' class="phone" > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='department_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?>
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['department']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['department']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['department']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['department']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' ><?php } else {
echo $_smarty_tpl->tpl_vars['DEPT_READONLY']->value;
}?>
				    
	
	

				
    
				<td valign="middle" id='phone_mobile_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value'], null, 0);?>
<?php }?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0' class="phone" > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='reports_to_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?>
<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
" class="sqsEnabled" tabindex="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
" size="" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['value'];?>
" title='' autocomplete="off" > <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['id_name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['id_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'];?>
"> <span class="id-ff multiple"> <button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_TITLE"),$_smarty_tpl);?>
" class="firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_LABEL"),$_smarty_tpl);?>
"
        onclick='open_popup(
                "<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['module'];?>
",
                600,
                400,
                "",
                true,
                false,
        {"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","last_name":"reports_to_name"}},
                "single",
                true
                );' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-select.png"),$_smarty_tpl);?>
"></button> <button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_TITLE"),$_smarty_tpl);?>
" class="lastChild" onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['id_name'];?>
');" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_LABEL"),$_smarty_tpl);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button> </span> <?php echo '<script'; ?>
 type="text/javascript">
    SUGAR.util.doWhen(
            "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'];?>
']) != 'undefined'",
            enableQS
    );
<?php echo '</script'; ?>
>
<?php } else {
echo $_smarty_tpl->tpl_vars['REPORTS_TO_READONLY']->value;
}?>
				    
	
	

				
    
				<td valign="middle" id='phone_other_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_PHONE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_other']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_other']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_other']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_other']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_other']['value'], null, 0);?>
<?php }?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_other']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_other']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0' class="phone" > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='_label' width='12.5%' scope="col">
						    &nbsp;
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' > <td valign="middle" id='phone_fax_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value'], null, 0);?>
<?php }?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0' class="phone" > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='_label' width='12.5%' scope="col">
						    &nbsp;
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' > <td valign="middle" id='phone_home_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_home']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_home']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_home']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_home']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_home']['value'], null, 0);?>
<?php }?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_home']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_home']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0' class="phone" > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='messenger_type_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_TYPE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (!isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete']) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" title='' >

	<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value']) && $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value'] != '') {?>
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value']),$_smarty_tpl);?>

	<?php } else { ?>
		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['default']),$_smarty_tpl);?>

	<?php }?>
	</select>
<?php } else { ?>
	<?php if (isset($_smarty_tpl->tpl_vars["field_options"])) {$_smarty_tpl->tpl_vars["field_options"] = clone $_smarty_tpl->tpl_vars["field_options"];
$_smarty_tpl->tpl_vars["field_options"]->value = $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options']; $_smarty_tpl->tpl_vars["field_options"]->nocache = null; $_smarty_tpl->tpl_vars["field_options"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_options"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'], null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("field_val", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (isset($_smarty_tpl->tpl_vars["field_val"])) {$_smarty_tpl->tpl_vars["field_val"] = clone $_smarty_tpl->tpl_vars["field_val"];
$_smarty_tpl->tpl_vars["field_val"]->value = Smarty::$_smarty_vars['capture']['field_val']; $_smarty_tpl->tpl_vars["field_val"]->nocache = null; $_smarty_tpl->tpl_vars["field_val"]->scope = 0;
} else $_smarty_tpl->tpl_vars["field_val"] = new Smarty_Variable(Smarty::$_smarty_vars['capture']['field_val'], null, 0);?>
	<?php $_smarty_tpl->_capture_stack[0][] = array("ac_key", null, null); ob_start();
echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php if (isset($_smarty_tpl->tpl_vars["ac_key"])) {$_smarty_tpl->tpl_vars["ac_key"] = clone $_smarty_tpl->tpl_vars["ac_key"];
$_smarty_tpl->tpl_vars["ac_key"]->value = Smarty::$_smarty_vars['capture']['ac_key']; $_smarty_tpl->tpl_vars["ac_key"]->nocache = null; $_smarty_tpl->tpl_vars["ac_key"]->scope = 0;
} else $_smarty_tpl->tpl_vars["ac_key"] = new Smarty_Variable(Smarty::$_smarty_vars['capture']['ac_key'], null, 0);?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" title='' >

		<?php if (isset($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value']) && $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value'] != '') {?>
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value']),$_smarty_tpl);?>

		<?php } else { ?>
			<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['default']),$_smarty_tpl);?>

		<?php }?>
		</select> <input id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input" size="30" value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
" type="text" style="vertical-align: top;"> <span class="id-ff multiple"> <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-image"></button><button type="button" id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input" title="Clear" onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button> </span>

	
	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];
	

			
		(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		
	
	
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	
			
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
');
	
			
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('change');
			}

			//global variable 
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
", syncFromHiddenToWidget);
		

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions = <?php echo count($_smarty_tpl->tpl_vars['field_options']->value);?>
;
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 300) {
			
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 200;
			
		}
		
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 3000) {
			
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 500;
			
		}
		
		
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
	
	
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		
		minQueryLength: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen,
		queryDelay: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay,
		zIndex: 99999,

				
		
		source: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function () {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('blur');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.blur();
		} else {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
<?php echo '</script'; ?>
> 



<?php }?>
				    
	
	

				
    
				<td valign="middle" id='messenger_id_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_ID','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='address_street_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STREET','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_street']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_street']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_street']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_street']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_street']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_street']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_street']['name'];?>
' size='30' maxlength='150' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > <td valign="middle" id='address_city_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_CITY','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_city']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_city']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_city']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_city']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_city']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='address_state_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STATE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_state']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_state']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_state']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_state']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_state']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > <td valign="middle" id='address_postalcode_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_POSTALCODE','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['name'];?>
' size='30' maxlength='20' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='address_country_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_COUNTRY','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_country']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_country']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_country']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['address_country']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['address_country']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['name'];?>
' size='30' maxlength='100' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' > <td valign="middle" id='_label' width='12.5%' scope="col">
						    &nbsp;
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='description_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['description']['value'])) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['description']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['description']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['description']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['description']['value'], null, 0);?>
<?php }?>  




<textarea  id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
'
rows="4" 
cols="60" 
title='' tabindex="0" 
 ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea> <td valign="middle" id='_label' width='12.5%' scope="col">
						    &nbsp;
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
<tr> <td valign="middle" id='inbound_processing_allowed_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_INBOUND_PROCESSING_ALLOWED','module'=>'Users'),$_smarty_tpl);
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
						
				            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="middle" width='37.5%' colspan='3' >
			
		

							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['value']) == "on") {?> 
<?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "CHECKED"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("CHECKED", null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = ''; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable('', null, 0);?>
<?php }?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['name'];?>
" value="0"> <input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['name'];?>
" value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 > </tr>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {?>
<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
</table> <?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); <?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';<?php echo '</script'; ?>
>
<?php }?>
</div> </div></div>



            <div id="email_options"> <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view"> <tr> <th align="left" scope="row" colspan="4"> <h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_OPTIONS_TITLE'];?>
</h4> </th> </tr> <tr> <td scope="row" width="17%">
                                <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL'];?>
:  <?php if ($_smarty_tpl->tpl_vars['REQUIRED_EMAIL_ADDRESS']->value) {?><span class="required" id="mandatory_email"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php }?>
                                </td> <td>
                                    <?php echo $_smarty_tpl->tpl_vars['NEW_EMAIL']->value;?>

                                </td> </tr> <tr id="email_options_link_type" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
'> <td scope="row" width="17%">
                                    <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_LINK_TYPE'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_LINK_TYPE_HELP'],'WIDTH'=>450),$_smarty_tpl);?>

                                </td> <td> <select id="email_link_type" name="email_link_type" tabindex='410'>
                                    <?php echo $_smarty_tpl->tpl_vars['EMAIL_LINK_TYPE']->value;?>

                                    </select> </td> </tr>
                            <?php if (!$_smarty_tpl->tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']->value) {?>
                            <tr id="mail_smtpserver_tr"> <td width="20%" scope="row"><span id="mail_smtpserver_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_PROVIDER'];?>
</span></td> <td width="30%" ><slot><?php echo $_smarty_tpl->tpl_vars['mail_smtpdisplay']->value;?>
<input id='mail_smtpserver' name='mail_smtpserver' type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['mail_smtpserver']->value;?>
' /></slot></td> <td>&nbsp;</td> <td >&nbsp;</td> </tr>
                             <?php if (!empty($_smarty_tpl->tpl_vars['mail_smtpauth_req']->value)) {?>

                            <tr id="mail_smtpuser_tr"> <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtpuser_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER'];?>
</span></td> <td width="30%" ><slot><input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpuser']->value;?>
" tabindex='1' ></slot></td> <td>&nbsp;</td> <td >&nbsp;</td> </tr> <tr id="mail_smtppass_tr"> <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtppass_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPASS'];?>
</span></td> <td width="30%" ><slot> <input type="password" id="mail_smtppass" name="mail_smtppass" size="25" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtppass']->value;?>
" tabindex='1'> <a href="javascript:void(0)" id='mail_smtppass_link' onClick="SUGAR.util.setEmailPasswordEdit('mail_smtppass')" style="display: none"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHANGE_PASSWORD'];?>
</a> </slot></td> <td>&nbsp;</td> <td >&nbsp;</td> </tr>
                            <?php }?>

                            <tr id="test_outbound_settings_tr"> <td width="17%" scope="row"><input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
" onclick="startOutBoundEmailSettingsTest();"></td> <td width="33%" >&nbsp;</td> <td width="17%">&nbsp;</td> <td width="33%" >&nbsp;</td> </tr>
                            <?php }?>
                        </table> </div> </div> <div>
            <?php if (($_smarty_tpl->tpl_vars['CHANGE_PWD']->value) == '1') {?>
            <div id="generate_password"> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view"> <tr> <td width='40%'> <table width='100%' cellspacing='0' cellpadding='0' border='0' > <tr> <th align="left" scope="row" colspan="4"> <h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHANGE_PASSWORD_TITLE'];?>
</h4><br>
                                    <?php echo $_smarty_tpl->tpl_vars['ERROR_PASSWORD']->value;?>

                                </th> </tr> </table> <div id='generate_password_old_password' <?php if (($_smarty_tpl->tpl_vars['IS_ADMIN']->value && !$_smarty_tpl->tpl_vars['ADMIN_EDIT_SELF']->value)) {?> style='display:none' <?php }?>> <table width='100%' cellspacing='0' cellpadding='0' border='0' > <tr> <td width='35%' scope="row">
                                            <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OLD_PASSWORD'];?>

                                        </td> <td > <input name='old_password' id='old_password' type='password' tabindex='2' onkeyup="password_confirmation();" > </td> <td width='40%'> </td> </tr> </table> </div> <table width='100%' cellspacing='0' cellpadding='0' border='0' > <tr> <td width='35%' scope="row" snowrap>
                                    <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEW_PASSWORD'];?>

                                    <span class="required" id="mandatory_pwd"><?php if (($_smarty_tpl->tpl_vars['REQUIRED_PASSWORD']->value)) {
echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];
}?></span> </td> <td class='dataField'> <input name='new_password' id= "new_password" type='password' tabindex='2' onkeyup="password_confirmation();newrules('<?php echo $_smarty_tpl->tpl_vars['PWDSETTINGS']->value['minpwdlength'];?>
','<?php echo $_smarty_tpl->tpl_vars['PWDSETTINGS']->value['maxpwdlength'];?>
','<?php echo $_smarty_tpl->tpl_vars['REGEX']->value;?>
');" /> </td> <td width='40%'> </td> </tr> <tr> <td scope="row" width='35%'>
                                    <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIRM_PASSWORD'];?>

                                </td> <td class='dataField'> <input name='confirm_new_password' id='confirm_pwd' style ='' type='password' tabindex='2' onkeyup="password_confirmation();" > </td> <td width='40%'> <div id="comfirm_pwd_match" class="error" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_PASSWORD_MISMATCH'];?>
</div>
                                     
                                </td> </tr> <tr> <td class='dataLabel'></td> <td class='dataField'></td> </td> </table> <table width='17%' cellspacing='0' cellpadding='1' border='0'> <tr> <td width='50%'> <input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
' class='button' id='save_new_pwd_button' LANGUAGE=javascript onclick='if (set_password(this.form)) window.close(); else return false;' type='submit' name='button' style='display:none;' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
'> </td> <td width='50%'> </td> </tr> </table> </td> <td width='60%' style="vertical-align:middle;"> </td> </tr> </table> </div>
            <?php } else { ?>
            <div id="generate_password"> <input name='old_password' id='old_password' type='hidden'> <input name='new_password' id= "new_password" type='hidden'> <input name='confirm_new_password' id='confirm_pwd' type='hidden'> </div>
            <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['SHOW_THEMES']->value) {?>
    <div> <div id="themepicker" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
"> <table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%"> <tbody> <tr> <td scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_THEME'];?>
</h4></td> </tr> <tr> <td width="17%"> <select name="user_theme" tabindex='366' size="20" id="user_theme_picker" style="width: 100%">
                            <?php echo $_smarty_tpl->tpl_vars['THEMES']->value;?>

                        </select> </td> <td width="33%"> <img id="themePreview" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'themePreview.png'),$_smarty_tpl);?>
" border="1" /> </td> <td width="17%">&nbsp;</td> <td width="33%">&nbsp;</td> </tr> </tbody> </table> </div> </div>
    <?php }?>
    <div> <div id="settings" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
"> <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view"> <tr> <th width="100%" align="left" scope="row" colspan="4"><h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_SETTINGS'];?>
</slot></h4></th> </tr> <tr> <td scope="row" valign="top"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER_DESC']),$_smarty_tpl);?>
</td> <td ><slot><input type="text" tabindex='12' name="export_delimiter" value="<?php echo $_smarty_tpl->tpl_vars['EXPORT_DELIMITER']->value;?>
" size="5"></slot></td> <td scope="row" width="17%"> <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS_TEXT']),$_smarty_tpl);?>

                            </td> <td width="33%"> <slot><input name='receive_notifications' class="checkbox" tabindex='12' type="checkbox" value="12" <?php echo $_smarty_tpl->tpl_vars['RECEIVE_NOTIFICATIONS']->value;?>
></slot> </td> </tr> <tr> <td scope="row" valign="top"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET_DESC']),$_smarty_tpl);?>
</td> <td ><slot><select tabindex='12' name="default_export_charset"><?php echo $_smarty_tpl->tpl_vars['EXPORT_CHARSET']->value;?>
</select></slot></td> <td scope="row" valign="top"> <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_TEXT']),$_smarty_tpl);?>

                            </td> <td valign="top" nowrap> <slot><?php echo $_smarty_tpl->getSubTemplate ("modules/Meetings/tpls/reminders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</slot> </td> </tr> <tr> <td scope="row" valign="top"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES_DESC']),$_smarty_tpl);?>
</td> <td ><slot><input tabindex='12' type="checkbox" name="use_real_names" <?php echo $_smarty_tpl->tpl_vars['USE_REAL_NAMES']->value;?>
></slot></td> <td scope="row" valign="top"> <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILMERGE'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILMERGE_TEXT']),$_smarty_tpl);?>

                            </td> <td valign="top" nowrap> <slot><input tabindex='12' name='mailmerge_on' class="checkbox" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['MAILMERGE_ON']->value;?>
></slot> </td> </tr> <tr>
                                <?php $_smarty_tpl->_capture_stack[0][] = array('SMARTY_LBL_EXTERNAL_AUTH_ONLY', null, null); ob_start(); ?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXTERNAL_AUTH_ONLY'];?>
 <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS_1']->value;
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                                <td scope="row" nowrap><slot><?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ONLY'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>Smarty::$_smarty_vars['capture']['SMARTY_LBL_EXTERNAL_AUTH_ONLY']),$_smarty_tpl);?>
</td> <td ><input type='hidden' value='0' name='external_auth_only'><input type='checkbox' value='1' name='external_auth_only' <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']->value;?>
></td> <td ></td> <td ></td> </tr> </table> </div> <div id="layout"> <table class="edit view" border="0" cellpadding="0" cellspacing="1" width="100%"> <tbody> <tr> <th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LAYOUT_OPTIONS'];?>
</h4></th> </tr> <tr id="use_group_tabs_row" style="display: <?php echo $_smarty_tpl->tpl_vars['DISPLAY_GROUP_TAB']->value;?>
;"> <td scope="row"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_GROUP_TABS'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_PARADIGM_DESCRIPTION']),$_smarty_tpl);?>
</td> <td colspan="3"><input name="use_group_tabs" type="hidden" value="m"><input id="use_group_tabs" type="checkbox" name="use_group_tabs" <?php echo $_smarty_tpl->tpl_vars['USE_GROUP_TABS']->value;?>
 tabindex='12' value="gm"></td> </tr> <tr> <td colspan="4"> <table width="100%" border="0" cellspacing="0" cellpadding="0"> <tr> <td scope="row" align="left" style="padding-bottom: 2em;"><?php echo $_smarty_tpl->tpl_vars['TAB_CHOOSER']->value;?>
</td> <td width="90%" valign="top"><BR>&nbsp;</td> </tr> </table> </td> </tr> <tr> <td width="17%" scope="row"><span><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUBPANEL_TABS'];?>
:</span>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_SUBPANEL_TABS_DESCRIPTION']),$_smarty_tpl);?>
</td> <td width="83%" colspan="3"><input type="checkbox" name="user_subpanel_tabs" <?php echo $_smarty_tpl->tpl_vars['SUBPANEL_TABS']->value;?>
 tabindex='13'></td> </tr> </table> </div> <div id="locale" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
"> <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view"> <tr> <th width="100%" align="left" scope="row" colspan="4"> <h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_LOCALE'];?>
</slot></h4></th> </tr> <tr> <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT_TEXT']),$_smarty_tpl);?>
</td> <td width="33%"><slot><select tabindex='14' name='dateformat'><?php echo $_smarty_tpl->tpl_vars['DATEOPTIONS']->value;?>
</select></slot></td> <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_TEXT']),$_smarty_tpl);?>
</td> <td ><slot> <select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.options[this.selectedIndex].value);setSigDigits();'><?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>
</select> <input type="hidden" id="symbol" value=""> </slot></td> </tr> <tr> <td scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT_TEXT']),$_smarty_tpl);?>
</td> <td ><slot><select tabindex='14' name='timeformat'><?php echo $_smarty_tpl->tpl_vars['TIMEOPTIONS']->value;?>
</select></slot></td> <td width="17%" scope="row"><slot>
                                <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SIG_DIGITS'];?>
:
                            </slot></td> <td ><slot> <select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'><?php echo $_smarty_tpl->tpl_vars['sigDigits']->value;?>
</select> </slot></td> </tr> <tr> <td scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE_TEXT']),$_smarty_tpl);?>
</td> <td ><slot><select tabindex='14' name='timezone'><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TIMEZONEOPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['TIMEZONE_CURRENT']->value),$_smarty_tpl);?>
</select></slot></td> <td width="17%" scope="row"><slot> <i><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_EXAMPLE_NAME_FORMAT'];?>
</i>:
                            </slot></td> <td ><slot> <input type="text" disabled id="sigDigitsExample" name="sigDigitsExample"> </slot></td> </tr> <tr>
                        <?php if (($_smarty_tpl->tpl_vars['IS_ADMIN']->value)) {?>
                            <td scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROMPT_TIMEZONE'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_PROMPT_TIMEZONE_TEXT']),$_smarty_tpl);?>
</td> <td ><slot><input type="checkbox" tabindex='14'class="checkbox" name="ut" value="0" <?php echo $_smarty_tpl->tpl_vars['PROMPTTZ']->value;?>
></slot></td>
                        <?php } else { ?>
                            <td scope="row"><slot></td> <td ><slot></slot></td>
                        <?php }?>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP_TEXT']),$_smarty_tpl);?>
</td> <td ><slot> <input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator' type='text' maxlength='1' size='1' value='<?php echo $_smarty_tpl->tpl_vars['NUM_GRP_SEP']->value;?>
' onkeydown='setSigDigits();' onkeyup='setSigDigits();'> </slot></td></tr>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('SMARTY_LOCALE_NAME_FORMAT_DESC', null, null); ob_start(); ?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_NAME_FORMAT_DESC'];
list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <tr> <td scope="row" valign="top"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_NAME_FORMAT'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>Smarty::$_smarty_vars['capture']['SMARTY_LOCALE_NAME_FORMAT_DESC']),$_smarty_tpl);?>
</td> <td valign="top"><slot><select tabindex='14' id="default_locale_name_format" name="default_locale_name_format" selected="<?php echo $_smarty_tpl->tpl_vars['default_locale_name_format']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAMEOPTIONS']->value;?>
</select></slot></td> <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP_TEXT']),$_smarty_tpl);?>
</td> <td ><slot> <input tabindex='14' name='dec_sep' id='default_decimal_seperator' type='text' maxlength='1' size='1' value='<?php echo $_smarty_tpl->tpl_vars['DEC_SEP']->value;?>
' onkeydown='setSigDigits();' onkeyup='setSigDigits();'> </slot></td> </tr> </table> </div> <div id="calendar_options" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
"> <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view"> <tr> <th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CALENDAR_OPTIONS'];?>
</h4></th> </tr> <tr> <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PUBLISH_KEY'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CHOOSE_A_KEY']),$_smarty_tpl);?>
</td> <td width="20%" ><slot><input id='calendar_publish_key' name='calendar_publish_key' tabindex='17' size='25' maxlength='25' type="text" value="<?php echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value;?>
"></slot></td> <td width="63%" ><slot>&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><nobr><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_YOUR_PUBLISH_URL']);?>
:</nobr></slot></td> <td colspan=2><span class="calendar_publish_ok"><?php echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_URL']->value;?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];?>
</span></td> </tr> <tr> <td width="17%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SEARCH_URL']);?>
:</slot></td> <td colspan=2><span class="calendar_publish_ok"><?php echo $_smarty_tpl->tpl_vars['CALENDAR_SEARCH_URL']->value;?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];?>
</span></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL']);?>
: <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL_HELP']),$_smarty_tpl);?>
</slot></td> <td colspan=2><span class="calendar_publish_ok"><?php echo $_smarty_tpl->tpl_vars['CALENDAR_ICAL_URL']->value;?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];?>
</span></td> </tr> <tr> <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW_TEXT']),$_smarty_tpl);?>
</td> <td ><slot> <select tabindex='14' name='fdow'><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['FDOWOPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['FDOWCURRENT']->value),$_smarty_tpl);?>
</select> </slot></td> </tr> </table> </div> </div>
    <?php if ($_smarty_tpl->tpl_vars['ID']->value) {?>
    <div id="eapm_area" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'> <div style="text-align:center; width: 100%"><?php echo smarty_function_sugar_image(array('name'=>"loading"),$_smarty_tpl);?>
</div> </div>
    <?php }?>
</div> <?php echo '<script'; ?>
 type="text/javascript">

var mail_smtpport = '<?php echo $_smarty_tpl->tpl_vars['MAIL_SMTPPORT']->value;?>
';
var mail_smtpssl = '<?php echo $_smarty_tpl->tpl_vars['MAIL_SMTPSSL']->value;?>
';

EmailMan = {};

function Admin_check(){
	if (('<?php echo $_smarty_tpl->tpl_vars['IS_FOCUS_ADMIN']->value;?>
') && document.getElementById('is_admin').value=='0'){
		r=confirm('<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIRM_REGULAR_USER'];?>
');
		return r;
		}
	else
		return true;
}


$(document).ready(function() {
	var checkKey = function(key) {
		if(key != '') {
			$(".calendar_publish_ok").css('display', 'inline');
			$(".calendar_publish_none").css('display', 'none');
	        $('#cal_pub_key_span').html( key );
	        $('#ical_pub_key_span').html( key );
	        $('#search_pub_key_span').html( key );
		} else {
			$(".calendar_publish_ok").css('display', 'none');
			$(".calendar_publish_none").css('display', 'inline');
		}
	};
    $('#calendar_publish_key').keyup(function(){
    	checkKey($(this).val());
    });
    $('#calendar_publish_key').change(function(){
    	checkKey($(this).val());
    });
    checkKey($('#calendar_publish_key').val());
});

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>


<?php echo '<script'; ?>
 type="text/javascript" language="Javascript">

<?php echo $_smarty_tpl->tpl_vars['getNameJs']->value;?>

<?php echo $_smarty_tpl->tpl_vars['getNumberJs']->value;?>

currencies = <?php echo $_smarty_tpl->tpl_vars['currencySymbolJSON']->value;?>
;
themeGroupList = <?php echo $_smarty_tpl->tpl_vars['themeGroupListJSON']->value;?>
;

onUserEditView();


<?php echo '</script'; ?>
> </form> <div id="testOutboundDialog" class="yui-hidden"> <div id="testOutbound"> <form> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view"> <tr> <td scope="row">
					<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>

					<span class="required">
						<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>

					</span> </td> <td > <input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['TEST_EMAIL_ADDRESS']->value;?>
"> </td> </tr> <tr> <td scope="row" colspan="2"> <input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SEND'];?>
   " onclick="javascript:sendTestEmail();">&nbsp;
					<input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
				</td> </tr> </table> </form> </div> </div>

<style>
    .actionsContainer.footer td {
        height:120px;
        vertical-align: top;
    }
</style>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer footer"> <tr> <td>
        <?php echo smarty_function_sugar_action_menu(array('id'=>"userEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['ACTION_BUTTON_FOOTER']->value,'flat'=>true),$_smarty_tpl);?>

        </td> <td align="right" nowrap> <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_REQUIRED'];?>

        </td> </tr> </table> <?php echo '<script'; ?>
 type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return disableOnUnloadEditView(); };
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'user_name', 'user_name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'user_hash', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_HASH','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'system_generated_password', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SYSTEM_GENERATED_PASSWORD','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'pwd_last_changed_date', 'date', false,'Passwort zuletzt geändert' );
addToValidate('EditView', 'authenticate_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_AUTHENTICATE_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sugar_login', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUGAR_LOGIN','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'first_name', 'name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'last_name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'full_name', 'name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'is_admin', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_IS_ADMIN','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'external_auth_only', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EXT_AUTHENTICATE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'receive_notifications', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_RECEIVE_NOTIFICATIONS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Erstellt am' );
addToValidate('EditView', 'date_indexed_date', 'date', false,'LBL_DATE_INDEXED' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Geändert am' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_BY_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_BY','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED_BY_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'title', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'department', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_home', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_work', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_WORK_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_other', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_fax', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'status', 'enum', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_street', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STREET','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_CITY','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STATE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_COUNTRY','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_POSTALCODE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'UserType', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_TYPE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'quota_carrying', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_QUOTA_CARRYING','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'portal_only', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PORTAL_ONLY_USER','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'show_on_employees', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHOW_ON_EMPLOYEES','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'employee_status', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'messenger_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'messenger_type', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_TYPE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'reports_to_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'reports_to_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email1', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email_signature', 'html', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_SIGNATURE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email_link_type', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_LINK_TYPE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'is_group', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_GROUP_USER','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'inbound_processing_allowed', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INBOUND_PROCESSING_ALLOWED','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'reports_to_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
', 'reports_to_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_reports_to_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kein Treffer"};<?php echo '</script'; ?>
>
<?php }
}
?>