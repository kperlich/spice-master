


 <script language="javascript">
{literal}
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0;
}, SUGAR.themes.actionMenu);
{/literal}
</script> <table cellpadding="0" cellspacing="0" border="0" width="100%" id=""> <tr> <td class="buttons" align="left" NOWRAP width="80%"> <div class="actionsContainer"> <form action="index.php" method="post" name="DetailView" id="formDetailView"> <input type="hidden" name="module" value="{$module}"> <input type="hidden" name="record" value="{$fields.id.value}"> <input type="hidden" name="return_action"> <input type="hidden" name="return_module"> <input type="hidden" name="return_id"> <input type="hidden" name="module_tab"> <input type="hidden" name="isDuplicate" value="false"> <input type="hidden" name="offset" value="{$offset}"> <input type="hidden" name="action" value="EditView"> <input type="hidden" name="sugar_body_only"> </form>

<div class="action_buttons">{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if}  {if $bean->aclAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='EditView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if}  {if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if}  {if $bean->aclAccess("edit") && $bean->aclAccess("delete")}<input title="{$APP.LBL_DUP_MERGE}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='Step1'; _form.module.value='MergeRecords';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Merge" value="{$APP.LBL_DUP_MERGE}" id="merge_duplicate_button">{/if}  <input class="button" id="manage_subscriptions_button" title="{$APP.LBL_MANAGE_SUBSCRIPTIONS}" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='Contacts'; _form.return_action.value='DetailView'; _form.return_id.value='{$fields.id.value}'; _form.action.value='Subscriptions'; _form.module.value='Campaigns'; _form.module_tab.value='Contacts';_form.submit();" name="Manage Subscriptions" type="button" value="{$APP.LBL_MANAGE_SUBSCRIPTIONS}"/> {if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Contacts", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}<div class="clear"></div></div> </div> </td> <td align="right" width="20%">{$ADMIN_EDIT}
		    
					{$PAGINATION}
				
	</td> </tr> </table>
{sugar_include include=$includes}
<div id="Contacts_detailview_tabs" class="yui-navset detailview_tabs" >
    
        
        
    
    <ul class="yui-nav">
                    
                    
            <li><a id="tab0" href="javascript:void(0)"><em>{sugar_translate label='LBL_CONTACT_INFORMATION' module='Contacts'}</em></a></li>
                            
                    
            <li><a id="tab1" href="javascript:void(0)"><em>{sugar_translate label='LBL_PANEL_ADVANCED' module='Contacts'}</em></a></li>
                            
                    
            <li><a id="tab2" href="javascript:void(0)"><em>{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Contacts'}</em></a></li> </ul> <div class="yui-content"> <div id='tabcontent0'> <div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}





    	
  <table id='LBL_CONTACT_INFORMATION' class="panelContainer" cellspacing='{$gridline}'>



		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.full_name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' colspan='3' >
			    			    {if !$fields.full_name.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.full_name.value) <= 0}
{assign var="value" value=$fields.full_name.default_value }
{else}
{assign var="value" value=$fields.full_name.value }
{/if}
<form name="vcard" action="index.php" style="display: inline;"> <span id='{$fields.full_name.name}'>{$fields.full_name.value}</span>
&nbsp;&nbsp;
<input type="hidden" name="action" value="vCard" /> <input type="hidden" name="record" value="{$fields.id.value}" /> <input type="hidden" name="module" value="{$module}" /> <input type="hidden" name="to_pdf" value="true" /> <span class="id-ff"> <button type="submit" name="vCardButton" id="btn_vCardButton" value="{$APP.LBL_VCARD}" title="{$APP.LBL_VCARD}" class="button">{sugar_getimage alt=$app_strings.LBL_ID_FF_VCARD name="id-ff-vcard" ext=".png" other_attributes=''}</button> </span> </form>

												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.title.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.title.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if} 
<span class="sugar_field" id="{$fields.title.name}">{$fields.title.value}</span>

												
								{/if}
							</td>
	    			    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_home.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' class="phone">
			    			    {if !$fields.phone_home.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }

{sugar_phone value=$phone_value usa_format="0"}

{/if}
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.department.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTMENT' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.department.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if} 
<span class="sugar_field" id="{$fields.department.name}">{$fields.department.value}</span>

												
								{/if}
							</td>
	    			    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_mobile.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' class="phone">
			    			    {if !$fields.phone_mobile.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }

{sugar_phone value=$phone_value usa_format="0"}

{/if}
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.account_name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_ACCOUNT_NAME' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.account_name.hidden}
			    				
									{counter name="panelFieldCount"}
					
 
{if !empty($fields.account_id.value)}
{capture assign="detail_url"}index.php?module=Accounts&action=DetailView&record={$fields.account_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="account_id" class="sugar_field" data-id-value="{$fields.account_id.value}">{$fields.account_name.value}</span>
{if !empty($fields.account_id.value)}</a>{/if}
{if !empty($fields.account_id.value)}
 
{/if}

												
								{/if}
							</td>
	    			    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_fax.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_FAX_PHONE' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' class="phone">
			    			    {if !$fields.phone_fax.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_fax.value)}
{assign var="phone_value" value=$fields.phone_fax.value }

{sugar_phone value=$phone_value usa_format="0"}

{/if}
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.primary_address_street.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_PRIMARY_ADDRESS' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.primary_address_street.hidden}
			    				
									{counter name="panelFieldCount"}
					
<table border='0' cellpadding='0' cellspacing='0' width='100%'> <tr> <td width='99%'> <input type="hidden" class="sugar_field" id="primary_address_street" value="{$fields.primary_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="primary_address_city" value="{$fields.primary_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="primary_address_state" value="{$fields.primary_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="primary_address_country" value="{$fields.primary_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="primary_address_postalcode" value="{$fields.primary_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.primary_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.primary_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.primary_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.primary_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.primary_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td> <td class='dataField' width='1%'>

{$custom_code_primary}
</td> </tr> </table>
												
								{/if}
							</td>
	    			    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.alt_address_street.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_ALTERNATE_ADDRESS' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.alt_address_street.hidden}
			    				
									{counter name="panelFieldCount"}
					
<table border='0' cellpadding='0' cellspacing='0' width='100%'> <tr> <td width='99%'> <input type="hidden" class="sugar_field" id="alt_address_street" value="{$fields.alt_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="alt_address_city" value="{$fields.alt_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="alt_address_state" value="{$fields.alt_address_state.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="alt_address_country" value="{$fields.alt_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}"> <input type="hidden" class="sugar_field" id="alt_address_postalcode" value="{$fields.alt_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.alt_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.alt_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br} {$fields.alt_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;&nbsp;{$fields.alt_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}<br>
{$fields.alt_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td> <td class='dataField' width='1%'>

{$custom_code_alt}
</td> </tr> </table>
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.email2_c.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL2' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.email2_c.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.email2_c.value) <= 0}
{assign var="value" value=$fields.email2_c.default_value }
{else}
{assign var="value" value=$fields.email2_c.value }
{/if} 
<span class="sugar_field" id="{$fields.email2_c.name}">{$fields.email2_c.value}</span>

												
								{/if}
							</td>
	    			    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.email1.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL_ADDRESS' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.email1.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id='email1_span'>
{$fields.email1.value}
</span>
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.description.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' colspan='3' >
			    			    {if !$fields.description.hidden}
			    				
									{counter name="panelFieldCount"}
					
<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>

												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		</table>
    {if $panelFieldCount == 0}

      
{/if}
</div> </div> <div id='tabcontent1'> <div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}





    	
  <table id='LBL_PANEL_ADVANCED' class="panelContainer" cellspacing='{$gridline}'>



		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.report_to_name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' colspan='3' >
			    			    {if !$fields.report_to_name.hidden}
			    				
									{counter name="panelFieldCount"}
					
 
{if !empty($fields.reports_to_id.value)}
{capture assign="detail_url"}index.php?module=Contacts&action=DetailView&record={$fields.reports_to_id.value}{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<span id="reports_to_id" class="sugar_field" data-id-value="{$fields.reports_to_id.value}">{$fields.report_to_name.value}</span>
{if !empty($fields.reports_to_id.value)}</a>{/if}

												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.birthdate.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_BIRTHDATE' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.birthdate.hidden}
			    				
									{counter name="panelFieldCount"}
					

    {if strlen($fields.birthdate.value) <= 0}
        {assign var="value" value=$fields.birthdate.default_value }
    {else}
        {assign var="value" value=$fields.birthdate.value }
    {/if}



<span class="sugar_field" id="{$fields.birthdate.name}">{$value}</span>

												
								{/if}
							</td>
	    			    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.lead_source.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_LEAD_SOURCE' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.lead_source.hidden}
			    				
									{counter name="panelFieldCount"}
					

{if is_string($fields.lead_source.options)}
<input type="hidden" class="sugar_field" id="{$fields.lead_source.name}" value="$fields.lead_source.options">
$fields.lead_source.options
{else}
<input type="hidden" class="sugar_field" id="{$fields.lead_source.name}" value="$fields.lead_source.value">
{assign var="field_options" value=$fields.lead_source.options }
{capture name="field_val"}{$fields.lead_source.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{$field_val|lookup:$field_options}
{/if}

												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.personal_interests.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_PERSONAL_INTERESTS' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' colspan='3' >
			    			    {if !$fields.personal_interests.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.personal_interests.value) && ($fields.personal_interests.value != '^^')}
<input type="hidden" class="sugar_field" id="{$fields.personal_interests.name}" value="{$fields.personal_interests.value}">
{multienum_to_array string=$fields.personal_interests.value assign="vals"}
{foreach from=$vals item=item}
{assign var="field_options" value=$fields.personal_interests.options }
{capture name="field_val"}{$item}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}

<li style="margin-left:10px;">{$field_val|lookup:$field_options}</li>
{/foreach}
{/if}
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		</table>
    {if $panelFieldCount == 0}

      
{/if}
</div> </div> <div id='tabcontent2'> <div id='detailpanel_3' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}





    	
  <table id='LBL_PANEL_ASSIGNMENT' class="panelContainer" cellspacing='{$gridline}'>



		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.assigned_user_name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.assigned_user_name.hidden}
			    				
									{counter name="panelFieldCount"}
					
<span id="assigned_user_id" class="sugar_field" data-id-value="{$fields.assigned_user_id.value}">{$fields.assigned_user_name.value}</span>

												
								{/if}
							</td>
	    			    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.date_modified.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' >
			    			    {if !$fields.date_modified.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}</span>
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.date_entered.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Contacts'}{/capture}
			       {$label|strip_semicolon}:
				                                                {/if}
                                			</td> <td width='37.5%' colspan='3' >
			    			    {if !$fields.date_entered.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}</span>
												
								{/if}
							</td> </tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		</table>
    {if $panelFieldCount == 0}

      
{/if}
</div> </div> </div> </div>

</form> <script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script> <script type='text/javascript' src='{sugar_getjspath file='include/javascript/popup_helper.js'}'></script> <script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script> <script type="text/javascript">
var Contacts_detailview_tabs = new YAHOO.widget.TabView("Contacts_detailview_tabs");
Contacts_detailview_tabs.selectTab(0);
</script>
