<?php /* Smarty version 3.1.24, created on 2018-03-14 10:52:59
         compiled from "./themes/SpiceTheme/tpls/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16743415305aa8f0fb327a31_24347018%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04ce37cf9cf02df75c657a49618e569dfa3cd2d8' => 
    array (
      0 => './themes/SpiceTheme/tpls/footer.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16743415305aa8f0fb327a31_24347018',
  'variables' => 
  array (
    'AUTHENTICATED' => 0,
    'BOTTOMLINKS' => 0,
    'STATISTICS' => 0,
    'COPYRIGHT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0fb3fc6c4_92647082',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0fb3fc6c4_92647082')) {
function content_5aa8f0fb3fc6c4_92647082 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16743415305aa8f0fb327a31_24347018';
?>
<!--end body panes-->
        </td></tr></table>
    </div>
    <div class="clear"></div>
</div>
<div id="bottomLinks">
<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
<?php echo $_smarty_tpl->tpl_vars['BOTTOMLINKS']->value;?>

<?php }?>
</div>
<div id="footer">
	<div id="responseTime">
    		<?php echo $_smarty_tpl->tpl_vars['STATISTICS']->value;?>

    </div>
    <div id="copyright">
        <?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>

    </div>
</div>


<?php echo '<script'; ?>
>

if(SUGAR.util.isTouchScreen()) {
        setTimeout(resizeHeader,10000);
}

//qe_init function sets listeners to click event on elements of 'quickEdit' class
 if(typeof(DCMenu) !='undefined'){
    DCMenu.qe_refresh = false;
    DCMenu.qe_handle;
 }
function qe_init(){

    //do not process if YUI is undefined
    if(typeof(YUI)=='undefined' || typeof(DCMenu) == 'undefined'){
        return;
    }


    //remove all existing listeners.  This will prevent adding multiple listeners per element and firing multiple events per click
    if(typeof(DCMenu.qe_handle) !='undefined'){
        DCMenu.qe_handle.detach();
    }

    //set listeners on click event, and define function to call
    YUI().use('node', function(Y) {
        var qe = Y.all('.quickEdit');
        var refreshDashletID;
        var refreshListID;

        //store event listener handle for future use, and define function to call on click event
        DCMenu.qe_handle = qe.on('click', function(e) {
            //function will flash message, and retrieve data from element to pass on to DC.miniEditView function
            ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_LOADING'),800);
            e.preventDefault();
            if(typeof(e.currentTarget.getAttribute('data-dashlet-id'))!='undefined'){
                refreshDashletID = e.currentTarget.getAttribute('data-dashlet-id');
            }
            if(typeof(e.currentTarget.getAttribute('data-list'))!='undefined'){
                refreshListID = e.currentTarget.getAttribute('data-list');
            }
            DCMenu.miniEditView(e.currentTarget.getAttribute('data-module'), e.currentTarget.getAttribute('data-record'),refreshListID,refreshDashletID);
        });

    });
}

    qe_init();


	SUGAR_callsInProgress++;
	SUGAR._ajax_hist_loaded = true;
    if(SUGAR.ajaxUI)
    	YAHOO.util.Event.onContentReady('ajaxUI-history-field', SUGAR.ajaxUI.firstLoad);
<?php echo '</script'; ?>
>



<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
<?php echo '<script'; ?>
 type="text/javascript">

$(document).ready(function(){
	 spicetheme.initialize();
	});

<?php echo '</script'; ?>
>
<?php }?>
</body>
</html>
<?php }
}
?>