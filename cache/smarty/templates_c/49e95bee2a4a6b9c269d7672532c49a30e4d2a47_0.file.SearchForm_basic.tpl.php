<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:37
         compiled from "./cache/modules/Users/SearchForm_basic.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7006874505aa8f121562292_69180747%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49e95bee2a4a6b9c269d7672532c49a30e4d2a47' => 
    array (
      0 => './cache/modules/Users/SearchForm_basic.tpl',
      1 => 1521021217,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7006874505aa8f121562292_69180747',
  'variables' => 
  array (
    'templateMeta' => 0,
    'index' => 0,
    'basicMaxColumns' => 0,
    'fields' => 0,
    'value' => 0,
    'formData' => 0,
    'searchTableColumnCount' => 0,
    'APP' => 0,
    'HAS_FULLTEXT_SEARCH' => 0,
    'module' => 0,
    'HAS_ADVANCED_SEARCH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f1215c3055_66750147',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f1215c3055_66750147')) {
function content_5aa8f1215c3055_66750147 ($_smarty_tpl) {
if (!is_callable('smarty_function_counter')) require_once 'include/Smarty/plugins/function.counter.php';
if (!is_callable('smarty_function_math')) require_once 'include/Smarty/plugins/function.math.php';
if (!is_callable('smarty_function_sugar_translate')) require_once 'include/Smarty/plugins/function.sugar_translate.php';
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';

$_smarty_tpl->properties['nocache_hash'] = '7006874505aa8f121562292_69180747';
?>


<input type='hidden' id="orderByInput" name='orderBy' value=''/>
<input type='hidden' id="sortOrder" name='sortOrder' value=''/>
<?php if (!isset($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic'])) {?>
    <?php if (isset($_smarty_tpl->tpl_vars["basicMaxColumns"])) {$_smarty_tpl->tpl_vars["basicMaxColumns"] = clone $_smarty_tpl->tpl_vars["basicMaxColumns"];
$_smarty_tpl->tpl_vars["basicMaxColumns"]->value = $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns']; $_smarty_tpl->tpl_vars["basicMaxColumns"]->nocache = null; $_smarty_tpl->tpl_vars["basicMaxColumns"]->scope = 0;
} else $_smarty_tpl->tpl_vars["basicMaxColumns"] = new Smarty_Variable($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'], null, 0);?>
<?php } else { ?>
    <?php if (isset($_smarty_tpl->tpl_vars["basicMaxColumns"])) {$_smarty_tpl->tpl_vars["basicMaxColumns"] = clone $_smarty_tpl->tpl_vars["basicMaxColumns"];
$_smarty_tpl->tpl_vars["basicMaxColumns"]->value = $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']; $_smarty_tpl->tpl_vars["basicMaxColumns"]->nocache = null; $_smarty_tpl->tpl_vars["basicMaxColumns"]->scope = 0;
} else $_smarty_tpl->tpl_vars["basicMaxColumns"] = new Smarty_Variable($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic'], null, 0);?>
<?php }?>
<?php echo '<script'; ?>
>
    
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_HELP'),
                    width: 700
                });

        $('#filterHelp').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    
<?php echo '</script'; ?>
>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
    <tr>
                          
          
        <?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

        <?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

        <?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
    </tr>
    <tr>
        <?php }?>

        <td scope="row" nowrap="nowrap" width='1%'>
                        <label for='search_name_basic'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users'),$_smarty_tpl);?>
</label>
                    </td>


        <td nowrap="nowrap" width='1%'>
                        
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['value']) <= 0) {?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['default_value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['default_value'], null, 0);?>
<?php } else { ?>
<?php if (isset($_smarty_tpl->tpl_vars["value"])) {$_smarty_tpl->tpl_vars["value"] = clone $_smarty_tpl->tpl_vars["value"];
$_smarty_tpl->tpl_vars["value"]->value = $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['value']; $_smarty_tpl->tpl_vars["value"]->nocache = null; $_smarty_tpl->tpl_vars["value"]->scope = 0;
} else $_smarty_tpl->tpl_vars["value"] = new Smarty_Variable($_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['value'], null, 0);?>
<?php }?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['search_name_basic']['name'];?>
' size='30' 
     
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      accesskey='9'  >
                    </td>
                <?php if (count($_smarty_tpl->tpl_vars['formData']->value) >= $_smarty_tpl->tpl_vars['basicMaxColumns']->value+1) {?>
    </tr>
    <tr>
        <td colspan="<?php echo $_smarty_tpl->tpl_vars['searchTableColumnCount']->value;?>
">
            <?php } else { ?>
        <td class="sumbitButtons">
            <?php }?>
            <input tabindex="2" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
" id="search_form_submit"/>&nbsp;
            <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
'
                   onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button'
                   name='clear' id='search_form_clear' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
            <?php if ($_smarty_tpl->tpl_vars['HAS_FULLTEXT_SEARCH']->value) {?>
                &nbsp;&nbsp;<a id="advanced_search_link"
                   onclick="SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|fts_search','<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search')"
                   href="javascript:void(0);" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_FTS_SEARCH_LNK_KEY'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_FULLTEXT_SEARCH'];?>
</a>
            <?php }?>
            <?php if ($_smarty_tpl->tpl_vars['HAS_ADVANCED_SEARCH']->value) {?>
                <a id="advanced_search_link"
                   onclick="SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|advanced_search','<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search')"
                   href="javascript:void(0);" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADV_SEARCH_LNK_KEY'];?>
"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_ADVANCED_SEARCH'];?>
</a>
            <?php }?>
        </td>
        <td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp"
                                            src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
'></td>
    </tr>
</table>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_reports_to_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name_basic","reports_to_id_basic"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"Kein Treffer"};<?php echo '</script'; ?>
><?php }
}
?>