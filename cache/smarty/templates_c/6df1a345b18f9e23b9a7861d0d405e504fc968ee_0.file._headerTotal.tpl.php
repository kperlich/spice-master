<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./themes/SpiceTheme/tpls/_headerTotal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20677023175aa8f0ff4fa313_65275395%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6df1a345b18f9e23b9a7861d0d405e504fc968ee' => 
    array (
      0 => './themes/SpiceTheme/tpls/_headerTotal.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20677023175aa8f0ff4fa313_65275395',
  'variables' => 
  array (
    'AUTHENTICATED' => 0,
    'USE_GROUP_TABS' => 0,
    'currentGroupTab' => 0,
    'groupTabs' => 0,
    'group' => 0,
    'SEARCH' => 0,
    'footerToggled' => 0,
    'CURRENT_USER_ID' => 0,
    'CURRENT_USER' => 0,
    'GCLS' => 0,
    'gcl_key' => 0,
    'GCL' => 0,
    'gcl_submenu_key' => 0,
    'GCL_SUBMENU' => 0,
    'LOGOUT_LINK' => 0,
    'LOGOUT_LABEL' => 0,
    'sideBarClosed' => 0,
    'ACTION' => 0,
    'iareminder' => 0,
    'iaquicknotescount' => 0,
    'iaattachmentscount' => 0,
    'MODULE_NAME' => 0,
    'pagesArray' => 0,
    'pageKey' => 0,
    'pageActive' => 0,
    'pages' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff55bc89_22698783',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff55bc89_22698783')) {
function content_5aa8f0ff55bc89_22698783 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_getimagepath')) require_once 'include/Smarty/plugins/function.sugar_getimagepath.php';

$_smarty_tpl->properties['nocache_hash'] = '20677023175aa8f0ff4fa313_65275395';
if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>

    <div id="moduleList">
        <ul>
            <li class="newsubmenuitem" id="Hometab" ><span class="notCurrentTab"><a id="moduleTab_Home" module="Home" href="index.php?module=Home&action=index"><img id="homeIcon" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"Home_white.png"),$_smarty_tpl);?>
></a></span></li>
            <li>|</li>
            <?php if ($_smarty_tpl->tpl_vars['USE_GROUP_TABS']->value) {?>
            <li id="groupdropdowntab" onclick="spicetheme.toggleGroups();"><span id="currentGroup"><?php echo $_smarty_tpl->tpl_vars['currentGroupTab']->value;?>
</span><span class="moreModuleItemsArrow"></span>
                <div id="tabGroupDropDown">
                    <ol>
                        <?php
$_from = $_smarty_tpl->tpl_vars['groupTabs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['modules'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['modules']->_loop = false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['modules']->value) {
$_smarty_tpl->tpl_vars['modules']->_loop = true;
$foreach_modules_Sav = $_smarty_tpl->tpl_vars['modules'];
?>
                            <?php if ($_smarty_tpl->tpl_vars['group']->value == $_smarty_tpl->tpl_vars['currentGroupTab']->value) {?>
                                <li class='currentgrouptab' onclick="spicetheme.changeGroup('<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</li>
                            <?php } else { ?>
                                <li onclick="spicetheme.changeGroup('<?php echo $_smarty_tpl->tpl_vars['group']->value;?>
');"><?php echo $_smarty_tpl->tpl_vars['group']->value;?>
</li>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['modules'] = $foreach_modules_Sav;
}
?>
                    </ol>
                </div>
            </li>
            <li>|</li>
            <?php }?>
            <span id="newSubmenu">
                <?php echo $_smarty_tpl->getSubTemplate ("themes/SpiceTheme/tpls/_headerModuleList.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('theme_template'=>true), 0);
?>

            </span>
            <li class='newSubmenuloading'><img id='newSubmenuloading' src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"ajax.gif"),$_smarty_tpl);?>
></li>
        </ul>

        <div id="search">
            <form name='UnifiedSearch' action='index.php' onsubmit='return SUGAR.unifiedSearchAdvanced.checkUsaAdvanced()'>
                <input type="hidden" name="action" value="UnifiedSearch">
                <input type="hidden" name="module" value="Home">
                <input type="hidden" name="search_form" value="false">
                <input type="hidden" name="advanced" value="false">
                <input type="text" name="query_string" id="query_string" size="20" value="<?php echo $_smarty_tpl->tpl_vars['SEARCH']->value;?>
">&nbsp;
                <input type="image" id="searchimage" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"search_white.gif"),$_smarty_tpl);?>
 alt="">
            </form><br />
        </div>

    </div>
    <div id="footerline" onMouseEnter="spicetheme.toggleFooterline_mouseover('mousein');" onMouseLeave="spicetheme.toggleFooterline_mouseover('mouseout');">
        <?php echo '<script'; ?>
 type="text/javascript">
            spicetheme.footerLineCollapsedStatic=<?php if ($_smarty_tpl->tpl_vars['footerToggled']->value == 'true') {?>true<?php } else { ?>false<?php }?>;
            var toggled = new Array();
        <?php echo '</script'; ?>
>
        <div id="welcome_static">
            <ul class='welcome_main'>
                <li id="welcome_username" style="display: inline-block;"><a id="welcome_link" href='index.php?module=Users&action=EditView&record=<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_ID']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value;?>
</a></li>
                <li id="expand_footerline" onclick="spicetheme.toggleFooterline(true);"><span class="<?php if ($_smarty_tpl->tpl_vars['footerToggled']->value == 'true') {?>arrow_right<?php } else { ?>arrow_left<?php }?>"></span></li>
            </ul>
        </div>
        <div id="welcome_slide" <?php if ($_smarty_tpl->tpl_vars['footerToggled']->value == 'true') {?> class='footerCollapsed' <?php }?>>
            <ul class="welcome_main" id="welcome">
                <li id="errorcountli"><div id="errorcount" class="errorcount" onclick="spicetheme.displayErrors();" >0</div></li>
                <li id="statistics">... loading ...</li>
                <li id="poweredbysugarcrm" onclick="spicetheme.displayCopyright();">Powered by SugarCRM</li>
            </ul>

            <ul class="welcome_main" id="globalLinks">
                <?php
$_from = $_smarty_tpl->tpl_vars['GCLS']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['GCL'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['GCL']->_loop = false;
$_smarty_tpl->tpl_vars['gcl_key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['gcl_key']->value => $_smarty_tpl->tpl_vars['GCL']->value) {
$_smarty_tpl->tpl_vars['GCL']->_loop = true;
$foreach_GCL_Sav = $_smarty_tpl->tpl_vars['GCL'];
?>
                    <li>
                        <a id="<?php echo $_smarty_tpl->tpl_vars['gcl_key']->value;?>
_link" href="<?php echo $_smarty_tpl->tpl_vars['GCL']->value['URL'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['GCL']->value['ONCLICK'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['GCL']->value['ONCLICK'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['GCL']->value['LABEL'];?>
</a>
                        <?php
$_from = $_smarty_tpl->tpl_vars['GCL']->value['SUBMENU'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['GCL_SUBMENU'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['GCL_SUBMENU']->_loop = false;
$_smarty_tpl->tpl_vars['gcl_submenu_key'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['__foreach_gcl_submenu'] = new Smarty_Variable(array('total' => $_smarty_tpl->_count($_from), 'iteration' => 0));
foreach ($_from as $_smarty_tpl->tpl_vars['gcl_submenu_key']->value => $_smarty_tpl->tpl_vars['GCL_SUBMENU']->value) {
$_smarty_tpl->tpl_vars['GCL_SUBMENU']->_loop = true;
$_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['iteration']++;
$_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['first'] = $_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['iteration'] == 1;
$_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['last'] = $_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['iteration'] == $_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['total'];
$foreach_GCL_SUBMENU_Sav = $_smarty_tpl->tpl_vars['GCL_SUBMENU'];
?>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['first']) ? $_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['first'] : null)) {?>
                                <span class="arrow_up" id="<?php echo $_smarty_tpl->tpl_vars['gcl_key']->value;?>
_submenu_open" onclick="spicetheme.displayGlobalLinksSubMenu('<?php echo $_smarty_tpl->tpl_vars['gcl_key']->value;?>
');"></span>
                                <ul class="globalLink_SubMenu" id="<?php echo $_smarty_tpl->tpl_vars['gcl_key']->value;?>
_submenu" onMouseLeave="$('#<?php echo $_smarty_tpl->tpl_vars['gcl_key']->value;?>
_submenu').hide();">
                            <?php }?>
                            <li><a id="<?php echo $_smarty_tpl->tpl_vars['gcl_submenu_key']->value;?>
_link" href="<?php echo $_smarty_tpl->tpl_vars['GCL_SUBMENU']->value['URL'];?>
"<?php if (!empty($_smarty_tpl->tpl_vars['GCL_SUBMENU']->value['ONCLICK'])) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['GCL_SUBMENU']->value['ONCLICK'];?>
"<?php }?>><?php echo $_smarty_tpl->tpl_vars['GCL_SUBMENU']->value['LABEL'];?>
</a></li>
                            <?php if ((isset($_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['last']) ? $_smarty_tpl->tpl_vars['__foreach_gcl_submenu']->value['last'] : null)) {?>
                                </ul>
                            <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['GCL_SUBMENU'] = $foreach_GCL_SUBMENU_Sav;
}
?>
                    </li>
                <?php
$_smarty_tpl->tpl_vars['GCL'] = $foreach_GCL_Sav;
}
?>

                <li id="logout_link_li"><a id="logout_link" href='<?php echo $_smarty_tpl->tpl_vars['LOGOUT_LINK']->value;?>
' class='utilsLink'><img height="15px" src="themes/SpiceTheme/SpiceThemeimages/logout.png" alt="<?php echo $_smarty_tpl->tpl_vars['LOGOUT_LABEL']->value;?>
"></a></li>

            </ul>
        </div>
    </div>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>

    <div id="leftBar" onMouseEnter="spicetheme.triggerSideBar('mousein');" onMouseLeave="spicetheme.cancelSideBar('mouseout');" class="leftbar <?php if ($_smarty_tpl->tpl_vars['sideBarClosed']->value == 'true') {?>leftbarclosed<?php }?>" >
        <div id="SideBarExpander" onClick="spicetheme.toggleSideBar(true);">
            <span id="SideBarExpander_arrow" class="<?php if ($_smarty_tpl->tpl_vars['sideBarClosed']->value == 'true') {?>arrow_right<?php } else { ?>arrow_left<?php }?>"></span>
        </div>
        <?php if ($_smarty_tpl->tpl_vars['ACTION']->value == "DetailView") {?>
        <div id="moduleTitleDummy"><h2>... Loading ...</h2></div>
        <div id="itemactions" class="itemactions">
            <div id="iafavorite" ng-click="favoritesWidget.toggleFavorite()" class="trtools" ng-controller="FavoritesCtrl">
                <img id="iafavoriteinactive" ng-show="!favoritesService.isFavorite" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"favorite.gif"),$_smarty_tpl);?>
>
                <img id="iafavoriteactive" ng-show="favoritesService.isFavorite" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"favorite_active.gif"),$_smarty_tpl);?>
>
            </div>
            <div class="trtools">
                <img id= "iaremindernew" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"jscalendar.gif"),$_smarty_tpl);?>
 <?php if (empty($_smarty_tpl->tpl_vars['iareminder']->value)) {?> style="display: inline" <?php }?>>
                <img id= "iareminderremove" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"Trash_active.gif"),$_smarty_tpl);?>
>
                <span id ="iareminder" ><?php echo $_smarty_tpl->tpl_vars['iareminder']->value;?>
</span>
            </div>
            <div id ="iareminderpicker" ></div>
            <div id ="ianotes" class="trtools" onclick="spicetheme.quickNotes.displayQuickNotes();" title="QuickNotes">
                <?php echo '<script'; ?>
 type="text/javascript">spicetheme.quickNotes.quickNotesCount=<?php echo $_smarty_tpl->tpl_vars['iaquicknotescount']->value;?>
;<?php echo '</script'; ?>
>
                <img id="ianotesinactive" <?php if ($_smarty_tpl->tpl_vars['iaquicknotescount']->value > 0) {?>style="display:none"<?php }?> src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"quicknotes.gif"),$_smarty_tpl);?>
>
                <img id="ianotesactive" <?php if ($_smarty_tpl->tpl_vars['iaquicknotescount']->value == 0) {?>style="display:none"<?php }?> src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"quicknotes_active.gif"),$_smarty_tpl);?>
>
                <?php if ($_smarty_tpl->tpl_vars['iaquicknotescount']->value > 0) {?> <div id="iaquicknotescount"><?php echo $_smarty_tpl->tpl_vars['iaquicknotescount']->value;?>
</div> <?php }?>
            </div>

            <div id ="iaattachments" class="trtools" onclick="spicetheme.attachments.displayAttachments();" title="Attachments">
                <?php echo '<script'; ?>
 type="text/javascript">spicetheme.attachments.attachmentsCount=<?php echo $_smarty_tpl->tpl_vars['iaattachmentscount']->value;?>
;<?php echo '</script'; ?>
>
                <img id="iaattachmentsinactive" <?php if ($_smarty_tpl->tpl_vars['iaattachmentscount']->value > 0) {?>style="display:none"<?php }?> src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"attachments.gif"),$_smarty_tpl);?>
>
                <img id="iaattachmentsactive" <?php if ($_smarty_tpl->tpl_vars['iaattachmentscount']->value == 0) {?>style="display:none"<?php }?> src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"attachments_active.gif"),$_smarty_tpl);?>
>
                <div id="iaattachmentscount"><?php if ($_smarty_tpl->tpl_vars['iaattachmentscount']->value > 0) {?> <?php echo $_smarty_tpl->tpl_vars['iaattachmentscount']->value;?>
 <?php }?></div>
            </div>
        </div>
        <div id="ianotes_container" class="transparent">
            <div id="ianotes_header">
                <span id="ianotes_header_title"></span>
                <img id="ianotes_close" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
 alt="close" title="close" onclick="$('#ianotes_container').fadeOut();spicetheme.quickNotes.open = false;">
                <img id="ianotes_filter" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"Users.png"),$_smarty_tpl);?>
  alt="filter MyNotes" title="filter MyNotes" onclick="spicetheme.quickNotes.filterQuickNotes();$(this).hide();$('#ianotes_filter_active').show();">
                <img id="ianotes_filter_active" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"Roles.png"),$_smarty_tpl);?>
  alt="disable MyNotes filter" title="disable MyNotes filter" onclick="spicetheme.quickNotes.filterQuickNotes();$(this).hide();$('#ianotes_filter').show();">
                <img id="ianotes_add" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-add.png"),$_smarty_tpl);?>
  alt="add Note" title="add Note" onclick="$('#ianotes_new_container').slideDown();">
            </div>
            <ul>
                <li id="ianotes_new_container">
                    <form action="#" method="POST" name="ianotes_new" id="ianotes_new" class="action_buttons">
                        <textarea cols="68" rows="4" name="text"></textarea><br>
                        <label for="global" style="vertical-align: bottom;">global Note:</label>&nbsp;
                        <input type="checkbox" name="global" value="1" id="global_note" onclick="$('#ianotes_new_container').toggleClass('ianotes_global')">&nbsp;
                        <input type="reset" name="reset" value="cancel" class="button" onclick="spicetheme.quickNotes.formClose();">&nbsp;
                        <input type="submit" name="submit" value="save" class="button" onclick="spicetheme.quickNotes.saveQuickNote();return false;">
                    </form>
                </li>
            </ul>
        </div>

        <div id="iaattachments_container" class="transparent">
            <div id="iaattachments_header">
                <span id="iaattachments_header_title"></span>
                <img id="iaattachments_close" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
 alt="close" title="close" onclick="$('#iaattachments_container').fadeOut();spicetheme.attachments.open = false;">
                <img id="iaattachments_add" src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-add.png"),$_smarty_tpl);?>
  alt="add Note" title="add Note" onclick="$('#iaattachments_new_container').slideDown();">
            </div>
            <ul>
                <li id="iaattachments_new_container">
                    <form action="#" method="POST" name="iaattachments_new" id="iaattachments_new" class="action_buttons" enctype="multipart/form-data">
                        <div id="iaattachments_new_status">Drag a file from a folder or click here.</div>

                        <div id="iaattachments_new_drop">Drop file here.</div>
                        <input type="file" id="iaattachments_new_file" name="file">
                        <div id="iaattachments_new_list"></div>
                        <textarea cols="68" rows="4" name="text" id="iaattachments_new_text"></textarea><br>
                        <input type="reset" name="reset" value="cancel" class="button" onclick="spicetheme.attachments.formClose();">&nbsp;
                        <input type="submit" name="submit" value="save" class="button" onclick="return spicetheme.attachments.saveAttachment();">
                    </form>
                </li>
            </ul>
        </div>
        <?php }?>
        <div id="actionmenu" class="shortcuts">
            <?php if ($_smarty_tpl->tpl_vars['MODULE_NAME']->value == 'Home') {?>
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['pagesArray']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['pages'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['pages']->_loop = false;
$_smarty_tpl->tpl_vars['pageKey'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['pageKey']->value => $_smarty_tpl->tpl_vars['pages']->value) {
$_smarty_tpl->tpl_vars['pages']->_loop = true;
$foreach_pages_Sav = $_smarty_tpl->tpl_vars['pages'];
?>
                        <li id="pageItem<?php echo $_smarty_tpl->tpl_vars['pageKey']->value;?>
"  <?php if ($_smarty_tpl->tpl_vars['pageActive']->value == $_smarty_tpl->tpl_vars['pageKey']->value) {?> class='activePageItem'<?php }?>>
                            <a id="pageItem<?php echo $_smarty_tpl->tpl_vars['pageKey']->value;?>
href" href="index.php?module=Home&action=index&activePage=<?php echo $_smarty_tpl->tpl_vars['pageKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pages']->value['title'];?>
</a>
                            <div class="changeIcon" onclick="spicetheme.editPage(<?php echo $_smarty_tpl->tpl_vars['pageKey']->value;?>
)"><img src=<?php echo smarty_function_sugar_getimagepath(array('file'=>"dashlet-header-edit.gif"),$_smarty_tpl);?>
></div>
                        </li>
                    <?php
$_smarty_tpl->tpl_vars['pages'] = $foreach_pages_Sav;
}
?>
                </ul>
                <div id="pageEdit">
                    <div class="pageEditLabel">Title:</div>
                    <input type="text" id="pageTitle">
                    <div class="pageEditLabel">Columns:</div>
                    <select id="pageColumns" style="width:100%">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                    <div class="pageEditButtons">
                        <div class="pageEditButton button" onclick="spicetheme.commitPageEdit()">OK</div>
                        <div class="pageEditButton button" onclick="spicetheme.cancelPageEdit()">Cancel</div>
                        <div id="pageEditDeleteButton" class="pageEditButton button" onclick="spicetheme.deletePage()">Delete</div>
                    </div>
                </div>
            <?php }?>
        </div>

        <?php echo $_smarty_tpl->getSubTemplate ("themes/SpiceTheme/tpls/SpiceSideBar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('theme_template'=>true), 0);
?>


    </div>
<?php }

}
}
?>