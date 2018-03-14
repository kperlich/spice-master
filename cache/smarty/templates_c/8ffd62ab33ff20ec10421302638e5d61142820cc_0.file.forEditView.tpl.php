<?php /* Smarty version 3.1.24, created on 2018-03-14 10:54:09
         compiled from "./include/SugarEmailAddress/templates/forEditView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15911759715aa8f141cdda85_92435475%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ffd62ab33ff20ec10421302638e5d61142820cc' => 
    array (
      0 => './include/SugarEmailAddress/templates/forEditView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15911759715aa8f141cdda85_92435475',
  'variables' => 
  array (
    'module' => 0,
    'index' => 0,
    'other_attributes' => 0,
    'app_strings' => 0,
    'useReplyTo' => 0,
    'useOptOut' => 0,
    'useInvalid' => 0,
    'emailView' => 0,
    'required' => 0,
    'tabindex' => 0,
    'addDefaultAddress' => 0,
    'prefillEmailAddresses' => 0,
    'prefillData' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f141dc10b9_62326963',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f141dc10b9_62326963')) {
function content_5aa8f141dc10b9_62326963 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimage')) require_once 'include/Smarty/plugins/function.sugar_getimage.php';

$_smarty_tpl->properties['nocache_hash'] = '15911759715aa8f141cdda85_92435475';
?>

<?php 
global $emailInstances;
if (empty($emailInstances))
	$emailInstances = array();
if (!isset($emailInstances[$_smarty_tpl->tpl_vars['module']->value]))
	$emailInstances[$_smarty_tpl->tpl_vars['module']->value] = 0;
$_smarty_tpl->tpl_vars['index']->value = $emailInstances[$_smarty_tpl->tpl_vars['module']->value];
$emailInstances['module']++;
?>
<?php echo '<script'; ?>
 type="text/javascript" language="javascript">
var emailAddressWidgetLoaded = false;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="include/SugarEmailAddress/SugarEmailAddress.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
';
<?php echo '</script'; ?>
>
<table style="border-spacing: 0pt;">
	<tr>
		<td  valign="top" NOWRAP>
			<table id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="emailaddresses">
				<tbody id="targetBody"></tbody>
				<tr>
					<td scope="row" NOWRAP>
					    <input type=hidden id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id" name="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id" value="">
						<input type=hidden id='emailAddressWidget' name='emailAddressWidget' value='1'>
                        <?php $_smarty_tpl->_capture_stack[0][] = array('default', "other_attributes", null); ob_start(); ?>id="<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
_email_widget_add" onclick="javascript:SUGAR.EmailAddressWidget.instances.<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
.addEmailAddress('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
','','');"<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
                        <button type="button" <?php echo $_smarty_tpl->tpl_vars['other_attributes']->value;?>
><?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-add",'alt'=>((string)$_smarty_tpl->tpl_vars['app_strings']->value).".LBL_ID_FF_ADD",'ext'=>".png"),$_smarty_tpl);?>
</button>
					</td>
					<td scope="row" NOWRAP>
					    &nbsp;
					</td>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_PRIMARY'];?>

					</td>
					<?php if ($_smarty_tpl->tpl_vars['useReplyTo']->value == true) {?>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_REPLY_TO'];?>

					</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['useOptOut']->value == true) {?>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_OPT_OUT'];?>

					</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['useInvalid']->value == true) {?>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_INVALID'];?>

					</td>
					<?php }?>
				</tr>
			</table>
		</td>
	</tr>
</table>
<input type="hidden" name="useEmailWidget" value="true">
<?php echo '<script'; ?>
 type="text/javascript" language="javascript">
SUGAR_callsInProgress++;
function init<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
Email<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
(){
	if(emailAddressWidgetLoaded || SUGAR.EmailAddressWidget){
		var table = YAHOO.util.Dom.get("<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
");
	    var eaw = SUGAR.EmailAddressWidget.instances.<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
 = new SUGAR.EmailAddressWidget("<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
");
		eaw.emailView = '<?php echo $_smarty_tpl->tpl_vars['emailView']->value;?>
';
	    eaw.emailIsRequired = "<?php echo $_smarty_tpl->tpl_vars['required']->value;?>
";
	    eaw.tabIndex = '<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
';
	    var addDefaultAddress = '<?php echo $_smarty_tpl->tpl_vars['addDefaultAddress']->value;?>
';
	    var prefillEmailAddress = '<?php echo $_smarty_tpl->tpl_vars['prefillEmailAddresses']->value;?>
';
	    var prefillData = <?php echo $_smarty_tpl->tpl_vars['prefillData']->value;?>
;
	    if(prefillEmailAddress == 'true') {
	        eaw.prefillEmailAddresses('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
', prefillData);
		} else if(addDefaultAddress == 'true') {
	        eaw.addEmailAddress('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
');
		}
		if('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id') {
		   document.getElementById('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id').value = eaw.count;
		}
		SUGAR_callsInProgress--;
	}else{
		setTimeout("init<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
Email<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
();", 500);
	}
}

YAHOO.util.Event.onDOMReady(init<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
Email<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
);
<?php echo '</script'; ?>
>
<?php }
}
?>