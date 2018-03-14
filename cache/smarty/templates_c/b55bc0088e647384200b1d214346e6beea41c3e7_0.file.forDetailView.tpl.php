<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:43
         compiled from "./include/SugarEmailAddress/templates/forDetailView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17380019495aa8f127837801_46239220%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55bc0088e647384200b1d214346e6beea41c3e7' => 
    array (
      0 => './include/SugarEmailAddress/templates/forDetailView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17380019495aa8f127837801_46239220',
  'variables' => 
  array (
    'emailAddresses' => 0,
    'address' => 0,
    'item' => 0,
    'app_strings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1278f2cf1_81002723',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1278f2cf1_81002723')) {
function content_5aa8f1278f2cf1_81002723 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17380019495aa8f127837801_46239220';
?>


			<table cellpadding="0" cellspacing="0" border="0" width="100%">
				<?php
$_from = $_smarty_tpl->tpl_vars['emailAddresses']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['address'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['address']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['address']->value) {
$_smarty_tpl->tpl_vars['address']->_loop = true;
$foreach_address_Sav = $_smarty_tpl->tpl_vars['address'];
?>
				<tr>
					<td style="border:none;">
						<?php if ($_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out' || $_smarty_tpl->tpl_vars['address']->value['key'] === 'invalid' || $_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out_invalid') {?>
							<span style="text-decoration: line-through;">
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'primary') {?>
							<b>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'reply_to' && $_smarty_tpl->tpl_vars['item']->value['key'] != 0) {?>
							<i>
						<?php }?>

						<?php echo $_smarty_tpl->tpl_vars['address']->value['address'];?>


						<?php if ($_smarty_tpl->tpl_vars['address']->value['key'] === 'primary') {?>
							</b>&nbsp;<i>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_PRIMARY'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'reply_to') {?>
							&nbsp;<i>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_REPLY_TO'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out') {?>
							</span>&nbsp;<i class='error'>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_OPT_OUT'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'invalid') {?>
							</span>&nbsp;<i>(<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_INVALID'];?>
&#x29;&#x200E;</i>
						<?php } elseif ($_smarty_tpl->tpl_vars['address']->value['key'] === 'opt_out_invalid') {?>
						    </span>&nbsp;<i class='error'>&#x28;<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_OPT_OUT_AND_INVALID'];?>
&#x29;&#x200E;</i>
						<?php }?>
					</td>
				</tr>
				<?php
$_smarty_tpl->tpl_vars['address'] = $foreach_address_Sav;
}
if (!$_smarty_tpl->tpl_vars['address']->_loop) {
?>
				<tr>
					<td>
						<i><?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_NONE'];?>
</i>
					</td>
				</tr>
				<?php
}
?>
			</table>
<?php }
}
?>