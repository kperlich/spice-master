<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:43
         compiled from "./cache/modules/Users/DetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17424410625aa8f127de7487_46500374%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f22f0231751ec815722643d2c60d4e050691b0d' => 
    array (
      0 => './cache/modules/Users/DetailView.tpl',
      1 => 1521021223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17424410625aa8f127de7487_46500374',
  'variables' => 
  array (
    'MOD' => 0,
    'ERRORS' => 0,
    'ERROR_MESSAGE' => 0,
    'ID' => 0,
    'USER_NAME' => 0,
    'UserType' => 0,
    'EDITBUTTONS' => 0,
    'PAGINATION' => 0,
    'IS_GROUP_OR_PORTAL' => 0,
    'SHOW_ROLES' => 0,
    'includes' => 0,
    'gridline' => 0,
    'fields' => 0,
    'label' => 0,
    'fieldsUsed' => 0,
    'fieldsHidden' => 0,
    'tableRow' => 0,
    'field_val' => 0,
    'field_options' => 0,
    'USER_TYPE_READONLY' => 0,
    'checked' => 0,
    'panelFieldCount' => 0,
    'phone_value' => 0,
    'NEW_EMAIL' => 0,
    'EMAIL_LINK_TYPE' => 0,
    'HIDE_IF_CAN_USE_DEFAULT_OUTBOUND' => 0,
    'mail_smtpserver' => 0,
    'mail_smtpuser' => 0,
    'RECEIVE_NOTIFICATIONS' => 0,
    'MAILMERGE_ON' => 0,
    'SETTINGS_URL' => 0,
    'EXPORT_DELIMITER' => 0,
    'EXPORT_CHARSET_DISPLAY' => 0,
    'USE_REAL_NAMES' => 0,
    'DISPLAY_EXTERNAL_AUTH' => 0,
    'EXTERNAL_AUTH_CLASS' => 0,
    'EXTERNAL_AUTH_ONLY_CHECKED' => 0,
    'DATEFORMAT' => 0,
    'TIMEFORMAT' => 0,
    'TIMEZONE' => 0,
    'CURRENCY_DISPLAY' => 0,
    'CURRENCY_SIG_DIGITS' => 0,
    'NUM_GRP_SEP' => 0,
    'DEC_SEP' => 0,
    'NAME_FORMAT' => 0,
    'CALENDAR_PUBLISH_KEY' => 0,
    'CALENDAR_PUBLISH_URL' => 0,
    'CALENDAR_SEARCH_URL' => 0,
    'CALENDAR_ICAL_URL' => 0,
    'FDOWDISPLAY' => 0,
    'USE_GROUP_TABS' => 0,
    'SUBPANEL_TABS' => 0,
    'ROLE_HTML' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f12830ec34_21249299',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f12830ec34_21249299')) {
function content_5aa8f12830ec34_21249299 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getjspath')) require_once 'include/Smarty/plugins/function.sugar_getjspath.php';
if (!is_callable('smarty_function_sugar_action_menu')) require_once 'include/Smarty/plugins/function.sugar_action_menu.php';
if (!is_callable('smarty_function_sugar_include')) require_once 'include/Smarty/plugins/function.sugar_include.php';
if (!is_callable('smarty_function_counter')) require_once 'include/Smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';
if (!is_callable('smarty_function_sugar_translate')) require_once 'include/Smarty/plugins/function.sugar_translate.php';
if (!is_callable('smarty_modifier_strip_semicolon')) require_once 'include/Smarty/plugins/modifier.strip_semicolon.php';
if (!is_callable('smarty_modifier_lookup')) require_once 'include/Smarty/plugins/modifier.lookup.php';
if (!is_callable('smarty_function_sugar_phone')) require_once 'include/Smarty/plugins/function.sugar_phone.php';
if (!is_callable('smarty_modifier_nl2br')) require_once 'include/Smarty/plugins/modifier.nl2br.php';
if (!is_callable('smarty_modifier_escape')) require_once '/opt/lampp/htdocs/spicecrm-master/include/Smarty/plugins/modifier.escape.php';
if (!is_callable('smarty_function_sugar_help')) require_once 'include/Smarty/plugins/function.sugar_help.php';

$_smarty_tpl->properties['nocache_hash'] = '17424410625aa8f127de7487_46500374';
?>


<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/DetailView.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type='text/javascript'>
var LBL_NEW_USER_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEW_USER_PASSWORD_2'];?>
';
<?php if (!empty($_smarty_tpl->tpl_vars['ERRORS']->value)) {?>

YAHOO.SUGAR.MessageBox.show({title: '<?php echo $_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value;?>
', msg: '<?php echo $_smarty_tpl->tpl_vars['ERRORS']->value;?>
'} );

<?php }?>
<?php echo '</script'; ?>
> <?php echo '<script'; ?>
 type="text/javascript">
var user_detailview_tabs = new YAHOO.widget.TabView("user_detailview_tabs");


user_detailview_tabs.on('contentReady', function(e){

});

$(document).ready(function(){
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

<?php echo '</script'; ?>
> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="actionsContainer"> <tr> <td width="20%"> <form action="index.php" method="post" name="DetailView" id="form"> <input type="hidden" name="module" value="Users"> <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
"> <input type="hidden" name="isDuplicate" value=false> <input type="hidden" name="action"> <input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
"> <input type="hidden" id="user_type" name="user_type" value="<?php echo $_smarty_tpl->tpl_vars['UserType']->value;?>
"> <input type="hidden" name="password_generate"> <input type="hidden" name="old_password"> <input type="hidden" name="new_password"> <input type="hidden" name="return_module"> <input type="hidden" name="return_action"> <input type="hidden" name="return_id"> <table width="100%" cellpadding="0" cellspacing="0" border="0"> <tr><td colspan='2' width="100%" nowrap>

            <?php echo smarty_function_sugar_action_menu(array('id'=>"detail_header_action_menu",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['EDITBUTTONS']->value),$_smarty_tpl);?>


    </td></tr> </table> </form> </td> <td width="100%"> <table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</table> </td> </tr> </table> <div id="user_detailview_tabs" class="yui-navset detailview_tabs"> <ul class="yui-nav"> <li class="selected"><a id="tab1" href="#tab1"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_INFORMATION'];?>
</em></a></li> <li <?php if ($_smarty_tpl->tpl_vars['IS_GROUP_OR_PORTAL']->value) {?>style="display: none;"<?php }?>><a id="tab2" href="#tab2"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADVANCED'];?>
</em></a></li>
        <?php if ($_smarty_tpl->tpl_vars['SHOW_ROLES']->value) {?>
        <li><a id="tab3" href="#tab3"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_ACCESS'];?>
</em></a></li>
        <?php }?>
    </ul> <div class="yui-content"> <div>

<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="Users_detailview_tabs" >
    
        
        <div > <div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>






        <h4> <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);"> <img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
"></a> <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);"> <img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
"></a>
      <?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_INFORMATION','module'=>'Users'),$_smarty_tpl);?>

        <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_1').className += ' expanded';
    <?php echo '</script'; ?>
> </h4> <table id='LBL_USER_INFORMATION' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['full_name']['hidden']) {?>
                								   <?php $_smarty_tpl->_capture_stack[0][] = array("label", "label", null); ob_start();
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users'),$_smarty_tpl);
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['user_name']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['user_name']['hidden']) {?>
			    				
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['value'];?>
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['status']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['status']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['status']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="$fields.status.options">
$fields.status.options
<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="$fields.status.value">
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
<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>

<?php }?>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['UserType']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['UserType']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="UserType" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['USER_TYPE_READONLY']->value;?>
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['quota_carrying']['value']) == "on") {?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "1"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("1", null, 0);?>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "0"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("0", null, 0);?>
<?php }?>
<img src="themes/SpiceTheme/images/checkbox_<?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>un<?php }?>checked.png">
												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['inbound_processing_allowed']['value']) == "on") {?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "1"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("1", null, 0);?>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "0"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("0", null, 0);?>
<?php }?>
<img src="themes/SpiceTheme/images/checkbox_<?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>un<?php }?>checked.png">
												
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
		</table> <?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

      
<?php }?>
</div> <div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>






        <h4> <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);"> <img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
"></a> <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);"> <img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
"></a>
      <?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_INFORMATION','module'=>'Users'),$_smarty_tpl);?>

        <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_2').className += ' expanded';
    <?php echo '</script'; ?>
> </h4> <table id='LBL_EMPLOYEE_INFORMATION' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->_capture_stack[0][] = array("tr", "tableRow", null); ob_start(); ?>
	<tr>
							    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['employee_status']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['employee_status']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id='employee_status_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['value'];?>

</span>
												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "on") {?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "1"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("1", null, 0);?>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars["checked"])) {$_smarty_tpl->tpl_vars["checked"] = clone $_smarty_tpl->tpl_vars["checked"];
$_smarty_tpl->tpl_vars["checked"]->value = "0"; $_smarty_tpl->tpl_vars["checked"]->nocache = null; $_smarty_tpl->tpl_vars["checked"]->scope = 0;
} else $_smarty_tpl->tpl_vars["checked"] = new Smarty_Variable("0", null, 0);?>
<?php }?>
<img src="themes/SpiceTheme/images/checkbox_<?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>un<?php }?>checked.png">
												
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
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Users'),$_smarty_tpl);
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_work']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_work']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value'])) {?>
<?php if (isset($_smarty_tpl->tpl_vars["phone_value"])) {$_smarty_tpl->tpl_vars["phone_value"] = clone $_smarty_tpl->tpl_vars["phone_value"];
$_smarty_tpl->tpl_vars["phone_value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']; $_smarty_tpl->tpl_vars["phone_value"]->nocache = null; $_smarty_tpl->tpl_vars["phone_value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["phone_value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value'], null, 0);?>

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
echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Users'),$_smarty_tpl);
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
echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Users'),$_smarty_tpl);
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_other']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_other']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_other']['value'])) {?>
<?php if (isset($_smarty_tpl->tpl_vars["phone_value"])) {$_smarty_tpl->tpl_vars["phone_value"] = clone $_smarty_tpl->tpl_vars["phone_value"];
$_smarty_tpl->tpl_vars["phone_value"]->value = $_smarty_tpl->tpl_vars['fields']->value['phone_other']['value']; $_smarty_tpl->tpl_vars["phone_value"]->nocache = null; $_smarty_tpl->tpl_vars["phone_value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["phone_value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['phone_other']['value'], null, 0);?>

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
												   &nbsp;
				                                                			</td> <td width='37.5%' > </td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_fax']['hidden']) {?>
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
												   &nbsp;
				                                                			</td> <td width='37.5%' > </td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_home']['hidden']) {?>
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" value="$fields.messenger_type.options">
$fields.messenger_type.options
<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" value="$fields.messenger_type.value">
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
<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>

<?php }?>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_id']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_id']['hidden']) {?>
			    				
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value'];?>
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_street']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_street']['hidden']) {?>
			    				
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_street']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_street']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_city']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_city']['hidden']) {?>
			    				
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['value'];?>
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_state']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_state']['hidden']) {?>
			    				
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['value'];?>
</span>

												
								<?php }?>
							</td>
	    			    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['hidden']) {?>
			    				
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value'];?>
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
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_country']['hidden']) {?>
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
				                                                <?php }?>
                                			</td> <td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_country']['hidden']) {?>
			    				
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
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['value'];?>
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
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Users'),$_smarty_tpl);
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
		</table> <?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); <?php echo '</script'; ?>
>
    <?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

      
<?php }?>
</div> </div> </div> <div id='email_options'> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view"> <tr> <th align="left" scope="row" colspan="4"> <h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_OPTIONS_TITLE'];?>
</h4> </th> </tr> <tr> <td align="top" scope="row" width="15%">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL']);?>
:
                        </td> <td align="top" width="85%">
                            <?php echo $_smarty_tpl->tpl_vars['NEW_EMAIL']->value;?>

                        </td> </tr> <tr id="email_options_link_type"> <td align="top" scope="row">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_LINK_TYPE']);?>
:
                        </td> <td >
                            <?php echo $_smarty_tpl->tpl_vars['EMAIL_LINK_TYPE']->value;?>

                        </td> </tr>
                    <?php if (!$_smarty_tpl->tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']->value) {?>
                    <tr> <td scope="row" width="15%">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_PROVIDER']);?>
:
                        </td> <td width="35%">
                            <?php echo $_smarty_tpl->tpl_vars['mail_smtpserver']->value;?>

                        </td> </tr> <tr> <td align="top" scope="row">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER']);?>
:
                        </td> <td width="35%">
                            <?php echo $_smarty_tpl->tpl_vars['mail_smtpuser']->value;?>

                        </td> </tr>
                    <?php }?>
                </table> </div> </div> <div> <div id="settings"> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view"> <tr> <th colspan='4' align="left" width="100%" valign="top"><h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_SETTINGS'];?>
</slot></h4></th> </tr> <tr> <td scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS']);?>
:</slot></td> <td><slot><input class="checkbox" type="checkbox" disabled <?php echo $_smarty_tpl->tpl_vars['RECEIVE_NOTIFICATIONS']->value;?>
></slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS_TEXT'];?>
&nbsp;</slot></td> </tr> <tr> <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER']);?>
:</td> <td valign="top" nowrap><slot><?php echo $_smarty_tpl->getSubTemplate ("modules/Meetings/tpls/reminders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>
</slot></td> <td ><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_TEXT'];?>
&nbsp;</slot></td> </tr> <tr> <td valign="top" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILMERGE']);?>
:</slot></td> <td valign="top" nowrap><slot><input tabindex='3' name='mailmerge_on' disabled class="checkbox" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['MAILMERGE_ON']->value;?>
></slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAILMERGE_TEXT'];?>
&nbsp;</slot></td> </tr> <tr> <td valign="top" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SETTINGS_URL']);?>
:</slot></td> <td valign="top" nowrap><slot><?php echo $_smarty_tpl->tpl_vars['SETTINGS_URL']->value;?>
</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SETTINGS_URL_DESC'];?>
&nbsp;</slot></td> </tr> <tr> <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['EXPORT_DELIMITER']->value;?>
</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER_DESC'];?>
</slot></td> </tr> <tr> <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['EXPORT_CHARSET_DISPLAY']->value;?>
</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET_DESC'];?>
</slot></td> </tr> <tr> <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES']);?>
:</slot></td> <td><slot><input tabindex='3' name='use_real_names' disabled class="checkbox" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['USE_REAL_NAMES']->value;?>
></slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES_DESC'];?>
</slot></td> </tr>
                <?php if ($_smarty_tpl->tpl_vars['DISPLAY_EXTERNAL_AUTH']->value) {?>
                <tr> <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS']->value);?>
:</slot></td> <td valign="top" nowrap><slot><input id="external_auth_only" name="external_auth_only" type="checkbox" class="checkbox" <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']->value;?>
></slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXTERNAL_AUTH_ONLY'];?>
 <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS']->value;?>
</slot></td> </tr>
                <?php }?>
            </table> </div> <div id='locale'> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view"> <tr> <th colspan='4' align="left" width="100%" valign="top"> <h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_LOCALE'];?>
</slot></h4></th> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['DATEFORMAT']->value;?>
&nbsp;</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT_TEXT'];?>
&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['TIMEFORMAT']->value;?>
&nbsp;</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT_TEXT'];?>
&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE']);?>
:</slot></td> <td nowrap><slot><?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
&nbsp;</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ZONE_TEXT'];?>
&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['CURRENCY_DISPLAY']->value;?>
&nbsp;</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_TEXT'];?>
&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SIG_DIGITS']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SIG_DIGITS']->value;?>
&nbsp;</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SIG_DIGITS_DESC'];?>
&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['NUM_GRP_SEP']->value;?>
&nbsp;</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP_TEXT'];?>
&nbsp;</slot></td> </tr><tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['DEC_SEP']->value;?>
&nbsp;</slot></td> <td><slot></slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP_TEXT'];?>
&nbsp;</td> </tr> </tr><tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_NAME_FORMAT']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['NAME_FORMAT']->value;?>
&nbsp;</slot></td> <td><slot></slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_NAME_FORMAT_DESC'];?>
&nbsp;</td> </tr> </table> </div> <div id='calendar_options'> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view"> <tr> <th colspan='4' align="left" width="100%" valign="top"><h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CALENDAR_OPTIONS'];?>
</slot></h4></th> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_PUBLISH_KEY']);?>
:</slot></td> <td width="20%"><slot><?php echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value;?>
&nbsp;</slot></td> <td width="65%"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHOOSE_A_KEY'];?>
&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><nobr><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_YOUR_PUBLISH_URL']);?>
:</nobr></slot></td> <td colspan=2><?php if ($_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value) {
echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_URL']->value;
} else {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];
}?></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SEARCH_URL']);?>
:</slot></td> <td colspan=2><slot><?php if ($_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value) {
echo $_smarty_tpl->tpl_vars['CALENDAR_SEARCH_URL']->value;
} else {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];
}?></slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL']);?>
: <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL_HELP']),$_smarty_tpl);?>
</slot></td> <td colspan=2><slot><?php if ($_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value) {
echo $_smarty_tpl->tpl_vars['CALENDAR_ICAL_URL']->value;
} else {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];
}?></slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW']);?>
:</slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['FDOWDISPLAY']->value;?>
&nbsp;</slot></td> <td><slot></slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW_TEXT'];?>
&nbsp;</td> </tr> </table> </div> <div id='edit_tabs'> <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view"> <tr> <th colspan='4' align="left" width="100%" valign="top"><h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LAYOUT_OPTIONS'];?>
</slot></h4></th> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_GROUP_TABS']);?>
:</slot></td> <td><slot><input class="checkbox" type="checkbox" disabled <?php echo $_smarty_tpl->tpl_vars['USE_GROUP_TABS']->value;?>
></slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAVIGATION_PARADIGM_DESCRIPTION'];?>
&nbsp;</slot></td> </tr> <tr> <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SUBPANEL_TABS']);?>
:</slot></td> <td><slot><input class="checkbox" type="checkbox" disabled <?php echo $_smarty_tpl->tpl_vars['SUBPANEL_TABS']->value;?>
></slot></td> <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUBPANEL_TABS_DESCRIPTION'];?>
&nbsp;</slot></td> </tr> </table> </div> </div>
<?php if ($_smarty_tpl->tpl_vars['SHOW_ROLES']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['ROLE_HTML']->value;?>

<?php } else { ?>
</div>
<?php }?>

<?php }
}
?>