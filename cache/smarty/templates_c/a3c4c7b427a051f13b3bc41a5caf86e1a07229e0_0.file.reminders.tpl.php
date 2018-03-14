<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:44
         compiled from "./modules/Meetings/tpls/reminders.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1650261675aa8f12837e057_69548421%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3c4c7b427a051f13b3bc41a5caf86e1a07229e0' => 
    array (
      0 => './modules/Meetings/tpls/reminders.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1650261675aa8f12837e057_69548421',
  'variables' => 
  array (
    'fields' => 0,
    'REMINDER_TIME' => 0,
    'EMAIL_REMINDER_TIME' => 0,
    'view' => 0,
    'REMINDER_CHECKED' => 0,
    'MOD' => 0,
    'REMINDER_TIME_DISPLAY' => 0,
    'REMINDER_TABINDEX' => 0,
    'REMINDER_TIME_OPTIONS' => 0,
    'EMAIL_REMINDER_CHECKED' => 0,
    'EMAIL_REMINDER_TIME_DISPLAY' => 0,
    'EMAIL_REMINDER_TIME_OPTIONS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1283afaa9_00803306',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1283afaa9_00803306')) {
function content_5aa8f1283afaa9_00803306 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once 'include/Smarty/plugins/function.html_options.php';

$_smarty_tpl->properties['nocache_hash'] = '1650261675aa8f12837e057_69548421';
?>


	<?php if ($_smarty_tpl->tpl_vars['fields']->value['reminder_time']) {?>            	
            	
            	<?php if (isset($_smarty_tpl->tpl_vars["REMINDER_TIME_OPTIONS"])) {$_smarty_tpl->tpl_vars["REMINDER_TIME_OPTIONS"] = clone $_smarty_tpl->tpl_vars["REMINDER_TIME_OPTIONS"];
$_smarty_tpl->tpl_vars["REMINDER_TIME_OPTIONS"]->value = $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']; $_smarty_tpl->tpl_vars["REMINDER_TIME_OPTIONS"]->nocache = null; $_smarty_tpl->tpl_vars["REMINDER_TIME_OPTIONS"]->scope = 0;
} else $_smarty_tpl->tpl_vars["REMINDER_TIME_OPTIONS"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options'], null, 0);?>
            	<?php if (isset($_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_OPTIONS"])) {$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_OPTIONS"] = clone $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_OPTIONS"];
$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_OPTIONS"]->value = $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_OPTIONS"]->nocache = null; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_OPTIONS"]->scope = 0;
} else $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_OPTIONS"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options'], null, 0);?>	
            	
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['reminder_checked']['value']) {?>            		
            		<?php if (isset($_smarty_tpl->tpl_vars["REMINDER_TIME"])) {$_smarty_tpl->tpl_vars["REMINDER_TIME"] = clone $_smarty_tpl->tpl_vars["REMINDER_TIME"];
$_smarty_tpl->tpl_vars["REMINDER_TIME"]->value = -1; $_smarty_tpl->tpl_vars["REMINDER_TIME"]->nocache = null; $_smarty_tpl->tpl_vars["REMINDER_TIME"]->scope = 0;
} else $_smarty_tpl->tpl_vars["REMINDER_TIME"] = new Smarty_Variable(-1, null, 0);?>
            	<?php } else { ?>
            		<?php if (isset($_smarty_tpl->tpl_vars["REMINDER_TIME"])) {$_smarty_tpl->tpl_vars["REMINDER_TIME"] = clone $_smarty_tpl->tpl_vars["REMINDER_TIME"];
$_smarty_tpl->tpl_vars["REMINDER_TIME"]->value = $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['value']; $_smarty_tpl->tpl_vars["REMINDER_TIME"]->nocache = null; $_smarty_tpl->tpl_vars["REMINDER_TIME"]->scope = 0;
} else $_smarty_tpl->tpl_vars["REMINDER_TIME"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['reminder_time']['value'], null, 0);?>
            	<?php }?>
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['email_reminder_checked']['value']) {?>            		
            		<?php if (isset($_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"])) {$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"] = clone $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"];
$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"]->value = -1; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"]->nocache = null; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"]->scope = 0;
} else $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"] = new Smarty_Variable(-1, null, 0);?>
            	<?php } else { ?>
            		<?php if (isset($_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"])) {$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"] = clone $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"];
$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"]->value = $_smarty_tpl->tpl_vars['fields']->value['email_reminder_time']['value']; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"]->nocache = null; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"]->scope = 0;
} else $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['email_reminder_time']['value'], null, 0);?>
            	<?php }?>
	<?php }?>
	
	<?php if (isset($_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"])) {$_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"] = clone $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"];
$_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"]->value = "none"; $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"]->nocache = null; $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"]->scope = 0;
} else $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"] = new Smarty_Variable("none", null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"])) {$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"] = clone $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"];
$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"]->value = "none"; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"]->nocache = null; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"]->scope = 0;
} else $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"] = new Smarty_Variable("none", null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['REMINDER_TIME']->value != -1) {?>
            	<?php if (isset($_smarty_tpl->tpl_vars["REMINDER_CHECKED"])) {$_smarty_tpl->tpl_vars["REMINDER_CHECKED"] = clone $_smarty_tpl->tpl_vars["REMINDER_CHECKED"];
$_smarty_tpl->tpl_vars["REMINDER_CHECKED"]->value = "checked"; $_smarty_tpl->tpl_vars["REMINDER_CHECKED"]->nocache = null; $_smarty_tpl->tpl_vars["REMINDER_CHECKED"]->scope = 0;
} else $_smarty_tpl->tpl_vars["REMINDER_CHECKED"] = new Smarty_Variable("checked", null, 0);?>
            	<?php if (isset($_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"])) {$_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"] = clone $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"];
$_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"]->value = "inline"; $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"]->nocache = null; $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"]->scope = 0;
} else $_smarty_tpl->tpl_vars["REMINDER_TIME_DISPLAY"] = new Smarty_Variable("inline", null, 0);?>	
	<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value != -1) {?>
            	<?php if (isset($_smarty_tpl->tpl_vars["EMAIL_REMINDER_CHECKED"])) {$_smarty_tpl->tpl_vars["EMAIL_REMINDER_CHECKED"] = clone $_smarty_tpl->tpl_vars["EMAIL_REMINDER_CHECKED"];
$_smarty_tpl->tpl_vars["EMAIL_REMINDER_CHECKED"]->value = "checked"; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_CHECKED"]->nocache = null; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_CHECKED"]->scope = 0;
} else $_smarty_tpl->tpl_vars["EMAIL_REMINDER_CHECKED"] = new Smarty_Variable("checked", null, 0);?>
            	<?php if (isset($_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"])) {$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"] = clone $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"];
$_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"]->value = "inline"; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"]->nocache = null; $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"]->scope = 0;
} else $_smarty_tpl->tpl_vars["EMAIL_REMINDER_TIME_DISPLAY"] = new Smarty_Variable("inline", null, 0);?>
        <?php }?>


<?php if ($_smarty_tpl->tpl_vars['view']->value == "EditView" || $_smarty_tpl->tpl_vars['view']->value == "QuickCreate" || $_smarty_tpl->tpl_vars['view']->value == "QuickEdit") {?>

		<div>
		    	   	
		    	<input name="reminder_checked" type="hidden" value="0">
		    	<input name="reminder_checked" id="reminder_checked" onclick="toggleReminder(this,'reminder');" type="checkbox" class="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['REMINDER_CHECKED']->value;?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_POPUP'];?>
</div>
		    	<div id="reminder_list" style="display: <?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_DISPLAY']->value;?>
">
		    		<select tabindex="<?php echo $_smarty_tpl->tpl_vars['REMINDER_TABINDEX']->value;?>
" name="reminder_time">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['REMINDER_TIME']->value),$_smarty_tpl);?>

				</select>
		    	</div>
            	</div>
            	<div>
		    	
		   	<input name="email_reminder_checked" type="hidden" value="0">
		    	<input name="email_reminder_checked" id="email_reminder_checked" onclick="toggleReminder(this,'email_reminder');" type="checkbox" class="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_CHECKED']->value;?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_EMAIL_ALL_INVITEES'];?>
</div>
		    	<div id="email_reminder_list" style="display: <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_DISPLAY']->value;?>
">
		    		<select tabindex="<?php echo $_smarty_tpl->tpl_vars['REMINDER_TABINDEX']->value;?>
" name="email_reminder_time">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value),$_smarty_tpl);?>

				</select>
		    	</div>
		</div>
            	<?php echo '<script'; ?>
 type="text/javascript">
            		 
			function toggleReminder(el,field){
				if(el.checked){
					document.getElementById(field + "_list").style.display = "inline";
				}else{
					document.getElementById(field + "_list").style.display = "none";
				}
			}
			
            	<?php echo '</script'; ?>
>
	<?php } else { ?>
		<div>			
			<input type="checkbox" disabled  <?php echo $_smarty_tpl->tpl_vars['REMINDER_CHECKED']->value;?>
>
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_POPUP'];?>

			<?php if ($_smarty_tpl->tpl_vars['REMINDER_TIME']->value != -1) {?>
				<?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['REMINDER_TIME']->value];?>

			<?php }?>			
		</div>
		<div>			
			<input type="checkbox" disabled  <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_CHECKED']->value;?>
>
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_EMAIL_ALL_INVITEES'];?>

			<?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value != -1) {?>
				<?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value];?>

			<?php }?>			
		</div>
	<?php }?>	
<?php }
}
?>