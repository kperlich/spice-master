<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./modules/Administration/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16942338995aa8f0ff829e57_39365400%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68c6b56865fc59cb69bb1b9062bd1cf54c8287b2' => 
    array (
      0 => './modules/Administration/index.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16942338995aa8f0ff829e57_39365400',
  'variables' => 
  array (
    'MY_FRAME' => 0,
    'ADMIN_GROUP_HEADER' => 0,
    'j' => 0,
    'GROUP_HEADER' => 0,
    'VALUES_3_TAB' => 0,
    'i' => 0,
    'COLNUM' => 0,
    'ITEM_HEADER_IMAGE' => 0,
    'ID_TAB' => 0,
    'ITEM_URL' => 0,
    'ITEM_HEADER_LABEL' => 0,
    'ITEM_DESCRIPTION' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff83c7c5_27344973',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff83c7c5_27344973')) {
function content_5aa8f0ff83c7c5_27344973 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16942338995aa8f0ff829e57_39365400';
?>



<div class="dashletPanelMenu wizard">
<div class="bd">

		<div class="screen">
		
<?php echo $_smarty_tpl->tpl_vars['MY_FRAME']->value;?>

<?php
$_from = $_smarty_tpl->tpl_vars['ADMIN_GROUP_HEADER']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['val1'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['val1']->_loop = false;
$_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['j']->value => $_smarty_tpl->tpl_vars['val1']->value) {
$_smarty_tpl->tpl_vars['val1']->_loop = true;
$foreach_val1_Sav = $_smarty_tpl->tpl_vars['val1'];
?>
   
   <?php if (isset($_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][1])) {?>
   <p><?php echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][0];
echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][1];?>

   <table class="other view">
   
   <?php } else { ?>
   <p><?php echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][0];
echo $_smarty_tpl->tpl_vars['GROUP_HEADER']->value[$_smarty_tpl->tpl_vars['j']->value][2];?>

   <table class="other view">
   <?php }?>
      
    <?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = 0; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(0, null, 0);?>
    <?php
$_from = $_smarty_tpl->tpl_vars['VALUES_3_TAB']->value[$_smarty_tpl->tpl_vars['j']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['admin_option'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['admin_option']->_loop = false;
$_smarty_tpl->tpl_vars['link_idx'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['link_idx']->value => $_smarty_tpl->tpl_vars['admin_option']->value) {
$_smarty_tpl->tpl_vars['admin_option']->_loop = true;
$foreach_admin_option_Sav = $_smarty_tpl->tpl_vars['admin_option'];
?>
    <?php if (isset($_smarty_tpl->tpl_vars['COLNUM']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value])) {?>
    <tr>
         

            <td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_IMAGE']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
&nbsp;<a id='<?php echo $_smarty_tpl->tpl_vars['ID_TAB']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' href='<?php echo $_smarty_tpl->tpl_vars['ITEM_URL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' class="tabDetailViewDL2Link"><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_LABEL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</a></td>
            <td width="30%"><?php echo $_smarty_tpl->tpl_vars['ITEM_DESCRIPTION']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</td>  
              
            <?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['i']->value+1; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
            <?php if ($_smarty_tpl->tpl_vars['COLNUM']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value] == '0') {?>
                    <td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_IMAGE']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
&nbsp;<a id='<?php echo $_smarty_tpl->tpl_vars['ID_TAB']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' href='<?php echo $_smarty_tpl->tpl_vars['ITEM_URL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
' class="tabDetailViewDL2Link"><?php echo $_smarty_tpl->tpl_vars['ITEM_HEADER_LABEL']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</a></td>
                    <td width="30%"><?php echo $_smarty_tpl->tpl_vars['ITEM_DESCRIPTION']->value[$_smarty_tpl->tpl_vars['j']->value][$_smarty_tpl->tpl_vars['i']->value];?>
</td>
            <?php } else { ?>
            <td width="20%" scope="row">&nbsp;</td>
            <td width="30%">&nbsp;</td>
            <?php }?>
   </tr>
   <?php }?>
   <?php if (isset($_smarty_tpl->tpl_vars['i'])) {$_smarty_tpl->tpl_vars['i'] = clone $_smarty_tpl->tpl_vars['i'];
$_smarty_tpl->tpl_vars['i']->value = $_smarty_tpl->tpl_vars['i']->value+1; $_smarty_tpl->tpl_vars['i']->nocache = null; $_smarty_tpl->tpl_vars['i']->scope = 0;
} else $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
   <?php
$_smarty_tpl->tpl_vars['admin_option'] = $foreach_admin_option_Sav;
}
?>
           
</table>
<p/>
<?php
$_smarty_tpl->tpl_vars['val1'] = $foreach_val1_Sav;
}
?>

</div>
</div>

</div>

	
<?php }
}
?>