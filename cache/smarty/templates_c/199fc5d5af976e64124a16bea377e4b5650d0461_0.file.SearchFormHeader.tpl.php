<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./cache/modules/Users/SearchFormHeader.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14642181225aa8f1215cbf96_48985696%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '199fc5d5af976e64124a16bea377e4b5650d0461' => 
    array (
      0 => './cache/modules/Users/SearchFormHeader.tpl',
      1 => 1521021217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14642181225aa8f1215cbf96_48985696',
  'variables' => 
  array (
    'TABS' => 0,
    'module' => 0,
    'action' => 0,
    'displayView' => 0,
    'TAB_ARRAY' => 0,
    'tabData' => 0,
    'return_txt' => 0,
    'saved_views_txt' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1215d1f32_66497510',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1215d1f32_66497510')) {
function content_5aa8f1215d1f32_66497510 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getjspath')) require_once 'include/Smarty/plugins/function.sugar_getjspath.php';

$_smarty_tpl->properties['nocache_hash'] = '14642181225aa8f1215cbf96_48985696';
?>

<div class="clear"></div>
<div class='listViewBody'>
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/popup_parent_helper.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['TABS']->value;?>

        
        <?php echo '<script'; ?>
>
            function submitOnEnter(e) {
                var characterCode = (e && e.which) ? e.which : event.keyCode;

                if (characterCode == 13 && document.getElementById('ftssearchterm')) {
                    SpiceCRM.fts.submitSearch();
                    e.preventDefault();
                    return false;
                }

                if (characterCode == 13) {
                    document.getElementById('search_form').submit();
                    return false;
                } else {
                    return true;
                }
            }
        <?php echo '</script'; ?>
>
    
    <form name='search_form' id='search_form' class='search_form' method='post'
          action='index.php?module=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
' onkeydown='submitOnEnter(event);'>
        <input type='hidden' name='searchFormTab' value='<?php echo $_smarty_tpl->tpl_vars['displayView']->value;?>
'/>
        <input type='hidden' name='module' value='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'/>
        <input type='hidden' name='action' value='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
'/>
        <input type='hidden' name='query' value='true'/>
        <?php
$_from = $_smarty_tpl->tpl_vars['TAB_ARRAY']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['tabData'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['tabData']->_loop = false;
$_smarty_tpl->tpl_vars['tabkey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['tabkey']->value => $_smarty_tpl->tpl_vars['tabData']->value) {
$_smarty_tpl->tpl_vars['tabData']->_loop = true;
$foreach_tabData_Sav = $_smarty_tpl->tpl_vars['tabData'];
?>
            <div id='<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['tabData']->value['name'];?>
_searchSearchForm' style='<?php echo $_smarty_tpl->tpl_vars['tabData']->value['displayDiv'];?>
'
                 class="edit view search <?php echo $_smarty_tpl->tpl_vars['tabData']->value['name'];?>
"><?php if ($_smarty_tpl->tpl_vars['tabData']->value['displayDiv']) {
} else {
echo $_smarty_tpl->tpl_vars['return_txt']->value;
}?></div>
        <?php
$_smarty_tpl->tpl_vars['tabData'] = $foreach_tabData_Sav;
}
?>
        <div id='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
saved_viewsSearchForm'
             style='display: none;'><?php echo $_smarty_tpl->tpl_vars['saved_views_txt']->value;?>
</div>
<?php }
}
?>