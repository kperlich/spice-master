<?php /* Smarty version 3.1.24, created on 2018-03-14 10:54:10
         compiled from "./include/SugarFields/Fields/Enum/EditView.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12254564485aa8f142147301_02661278%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5309525d9d9ace3d34b5ca07d03ffe5ed77b7ff5' => 
    array (
      0 => './include/SugarFields/Fields/Enum/EditView.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12254564485aa8f142147301_02661278',
  'variables' => 
  array (
    'displayParams' => 0,
    'vardef' => 0,
    'tabindex' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f142210303_30427963',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f142210303_30427963')) {
function content_5aa8f142210303_30427963 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugarvar')) require_once 'include/Smarty/plugins/function.sugarvar.php';

$_smarty_tpl->properties['nocache_hash'] = '12254564485aa8f142147301_02661278';
?>
{*
/*********************************************************************************
* SugarCRM Community Edition is a customer relationship management program developed by
* SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
* 
* This program is free software; you can redistribute it and/or modify it under
* the terms of the GNU Affero General Public License version 3 as published by the
* Free Software Foundation with the addition of the following permission added
* to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
* IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
* OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
* 
* This program is distributed in the hope that it will be useful, but WITHOUT
* ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
* FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
* details.
* 
* You should have received a copy of the GNU Affero General Public License along with
* this program; if not, see http://www.gnu.org/licenses or write to the Free
* Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
* 02110-1301 USA.
* 
* You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
* SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
* 
* The interactive user interfaces in modified source and object code versions
* of this program must display Appropriate Legal Notices, as required under
* Section 5 of the GNU Affero General Public License version 3.
* 
* In accordance with Section 7(b) of the GNU Affero General Public License version 3,
* these Appropriate Legal Notices must retain the display of the "Powered by
* SugarCRM" logo. If the display of the logo is not reasonably feasible for
* technical reasons, the Appropriate Legal Notices must display the words
* "Powered by SugarCRM".
********************************************************************************/

*}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
	<select name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
	id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
	title='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];?>
' <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>
    <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?>  <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>

	<?php if (isset($_smarty_tpl->tpl_vars['displayParams']->value['javascript'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['javascript'];
}?>>

	{if isset(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) && <?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 != ''}
		{html_options options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 selected=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
}
	{else}
		{html_options options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 selected=<?php echo smarty_function_sugarvar(array('key'=>'default','string'=>true),$_smarty_tpl);?>
}
	{/if}
	</select>
{else}
	{assign var="field_options" value=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>"true"),$_smarty_tpl);?>
 }
	{capture name="field_val"}<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
{/capture}
	{assign var="field_val" value=$smarty.capture.field_val}
	{capture name="ac_key"}<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
{/capture}
	{assign var="ac_key" value=$smarty.capture.ac_key}

	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
		<select style='display:none' name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
		id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>" 
		title='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['help'];?>
' <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>
        <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>

		<?php if (isset($_smarty_tpl->tpl_vars['displayParams']->value['javascript'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['javascript'];
}?>>

		{if isset(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) && <?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 != ''}
			{html_options options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 selected=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
}
		{else}
			{html_options options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 selected=<?php echo smarty_function_sugarvar(array('key'=>'default','string'=>true),$_smarty_tpl);?>
}
		{/if}
		</select>
	<?php } else { ?>
		<input type="hidden"
		    id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>"
		    name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>"
		    value="<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
">
	<?php }?>

	<input
		id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input"
		name="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input"
		size="30"
		value="{$field_val|lookup:$field_options}"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-image"></button><button type="button"
	        id="btn-clear-<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input', '<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>');sync_<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>()"><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
	</span>

	{literal}
	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
		{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>{literal}");
			
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
			var options = SUGAR.AutoComplete.getOptionsArray("<?php echo $_smarty_tpl->tpl_vars['vardef']->value['autocomplete_options'];?>
");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
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
		{/literal}
	<?php } else { ?>
		{literal}
		// Create a new YUI instance and populate it with the required modules.
		YUI().use('datasource', 'datasource-jsonschema',function (Y) {
			// DataSource is available and ready for use.
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Get({
				source: 'index.php?module=Accounts&action=ajaxautocomplete&to_pdf=1'
			});
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds.plug(Y.Plugin.DataSourceJSONSchema, {
				schema: {
					resultListLocator: "option_items",
					resultFields: ["text", "key"],
					matchKey: "text",
				}
			});
		});
		{/literal}
	<?php }?>

	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>');
	
	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
		{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>{literal}");
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
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
	<?php } else { ?>
		{literal}
		function SyncToHidden(e){
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', e);
		}
		{/literal}
		
		SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
	<?php }?>
	
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

		<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
				requestTemplate: '&options=<?php echo $_smarty_tpl->tpl_vars['vardef']->value['autocomplete_options'];?>
&q={literal}{query}{/literal}',
		<?php }?>
		
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
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
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['autocomplete_ajax'])) {?>
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	<?php } else { ?>		
		// when they focus away from the field...
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value') != '') { // value entered
				if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.get('value') == '') { // none selected, we clear their text and hide
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', '');
				}
				else{ // they have something selected, we accept their selection and contract
				}
			}
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
		});
	<?php }?>

	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
<?php echo '</script'; ?>
> 

{/literal}

{/if}<?php }
}
?>