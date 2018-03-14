<?php /* Smarty version 3.1.24, created on 2018-03-14 10:53:03
         compiled from "./themes/SpiceTheme/tpls/_headerModuleList.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2808673775aa8f0ff55f646_61583036%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '344f6f5107751d361e0fea3f67fce8369ec455d3' => 
    array (
      0 => './themes/SpiceTheme/tpls/_headerModuleList.tpl',
      1 => 1515768937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2808673775aa8f0ff55f646_61583036',
  'variables' => 
  array (
    'MODULE_TAB' => 0,
    'groupTabs' => 0,
    'group' => 0,
    'currentGroupTab' => 0,
    'modules' => 0,
    'entries' => 0,
    'thismodule' => 0,
    'extramodules' => 0,
    'APP' => 0,
    'itemCounter' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5aa8f0ff5acc28_63583138',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5aa8f0ff5acc28_63583138')) {
function content_5aa8f0ff5acc28_63583138 ($_smarty_tpl) {
if (!is_callable('smarty_function_sugar_link')) require_once 'include/Smarty/plugins/function.sugar_link.php';

$_smarty_tpl->properties['nocache_hash'] = '2808673775aa8f0ff55f646_61583036';
?>



<div id="currentModule"><?php echo $_smarty_tpl->tpl_vars['MODULE_TAB']->value;?>
</div>
<?php
$_from = $_smarty_tpl->tpl_vars['groupTabs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['entries'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['entries']->_loop = false;
$_smarty_tpl->tpl_vars['group'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['group']->value => $_smarty_tpl->tpl_vars['entries']->value) {
$_smarty_tpl->tpl_vars['entries']->_loop = true;
$foreach_entries_Sav = $_smarty_tpl->tpl_vars['entries'];
?>
	    <?php if ($_smarty_tpl->tpl_vars['group']->value == $_smarty_tpl->tpl_vars['currentGroupTab']->value) {?>
	        <?php if (isset($_smarty_tpl->tpl_vars['modules'])) {$_smarty_tpl->tpl_vars['modules'] = clone $_smarty_tpl->tpl_vars['modules'];
$_smarty_tpl->tpl_vars['modules']->value = 'modules'; $_smarty_tpl->tpl_vars['modules']->nocache = null; $_smarty_tpl->tpl_vars['modules']->scope = 0;
} else $_smarty_tpl->tpl_vars['modules'] = new Smarty_Variable('modules', null, 0);?>
	   		<?php
$_from = $_smarty_tpl->tpl_vars['entries']->value[$_smarty_tpl->tpl_vars['modules']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['itemtext'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['itemtext']->_loop = false;
$_smarty_tpl->tpl_vars['thismodule'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['thismodule']->value => $_smarty_tpl->tpl_vars['itemtext']->value) {
$_smarty_tpl->tpl_vars['itemtext']->_loop = true;
$foreach_itemtext_Sav = $_smarty_tpl->tpl_vars['itemtext'];
?>
	   		<?php if ($_smarty_tpl->tpl_vars['thismodule']->value != 'Home') {?>
                            <?php if ($_smarty_tpl->tpl_vars['thismodule']->value == $_smarty_tpl->tpl_vars['MODULE_TAB']->value) {?>
                                    <li class="newsubmenuitem" id="<?php echo $_smarty_tpl->tpl_vars['thismodule']->value;?>
tab"><span class="currentTab"><?php echo smarty_function_sugar_link(array('id'=>"moduleTab_".((string)$_smarty_tpl->tpl_vars['thismodule']->value),'module'=>$_smarty_tpl->tpl_vars['thismodule']->value,'data'=>$_smarty_tpl->tpl_vars['thismodule']->value),$_smarty_tpl);?>
</span></li>
                            <?php } else { ?>
                                    <li class="newsubmenuitem" id="<?php echo $_smarty_tpl->tpl_vars['thismodule']->value;?>
tab"><span class="notCurrentTab"><?php echo smarty_function_sugar_link(array('id'=>"moduleTab_".((string)$_smarty_tpl->tpl_vars['thismodule']->value),'module'=>$_smarty_tpl->tpl_vars['thismodule']->value,'data'=>$_smarty_tpl->tpl_vars['thismodule']->value),$_smarty_tpl);?>
</span></li>
                            <?php }?>
	   		<?php }?>
	   		<?php
$_smarty_tpl->tpl_vars['itemtext'] = $foreach_itemtext_Sav;
}
?>
	   		<?php if (isset($_smarty_tpl->tpl_vars['extramodules'])) {$_smarty_tpl->tpl_vars['extramodules'] = clone $_smarty_tpl->tpl_vars['extramodules'];
$_smarty_tpl->tpl_vars['extramodules']->value = 'extra'; $_smarty_tpl->tpl_vars['extramodules']->nocache = null; $_smarty_tpl->tpl_vars['extramodules']->scope = 0;
} else $_smarty_tpl->tpl_vars['extramodules'] = new Smarty_Variable('extra', null, 0);?>
	   		<?php if (count($_smarty_tpl->tpl_vars['entries']->value[$_smarty_tpl->tpl_vars['extramodules']->value]) > 0) {?>
	   		 <li id="MoreModules"><a href="#" onclick="spicetheme.toggleMoreModules();"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_LINK_MORE'];?>
<span class="moreModuleItemsArrow"></span></a>
		    	<div id="moreModuleItems">
			    	<ol class="moreModulesUl">
				    	<?php if (isset($_smarty_tpl->tpl_vars["itemCounter"])) {$_smarty_tpl->tpl_vars["itemCounter"] = clone $_smarty_tpl->tpl_vars["itemCounter"];
$_smarty_tpl->tpl_vars["itemCounter"]->value = 0; $_smarty_tpl->tpl_vars["itemCounter"]->nocache = null; $_smarty_tpl->tpl_vars["itemCounter"]->scope = 0;
} else $_smarty_tpl->tpl_vars["itemCounter"] = new Smarty_Variable(0, null, 0);?>
                        <?php
$_from = $_smarty_tpl->tpl_vars['entries']->value[$_smarty_tpl->tpl_vars['extramodules']->value];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['itemtext'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['itemtext']->_loop = false;
$_smarty_tpl->tpl_vars['thismodule'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['thismodule']->value => $_smarty_tpl->tpl_vars['itemtext']->value) {
$_smarty_tpl->tpl_vars['itemtext']->_loop = true;
$foreach_itemtext_Sav = $_smarty_tpl->tpl_vars['itemtext'];
?>
							<?php if (($_smarty_tpl->tpl_vars['itemCounter']->value == 15 || $_smarty_tpl->tpl_vars['itemCounter']->value == 30 || $_smarty_tpl->tpl_vars['itemCounter']->value == 45) && $_smarty_tpl->tpl_vars['itemCounter']->value != 0) {?></ol><ol><?php }?>
							<li><?php echo smarty_function_sugar_link(array('id'=>"moduleTab_".((string)$_smarty_tpl->tpl_vars['itemtext']->value),'module'=>$_smarty_tpl->tpl_vars['thismodule']->value,'data'=>$_smarty_tpl->tpl_vars['thismodule']->value),$_smarty_tpl);?>
</li>
							<?php if (isset($_smarty_tpl->tpl_vars["itemCounter"])) {$_smarty_tpl->tpl_vars["itemCounter"] = clone $_smarty_tpl->tpl_vars["itemCounter"];
$_smarty_tpl->tpl_vars["itemCounter"]->value = $_smarty_tpl->tpl_vars['itemCounter']->value+1; $_smarty_tpl->tpl_vars["itemCounter"]->nocache = null; $_smarty_tpl->tpl_vars["itemCounter"]->scope = 0;
} else $_smarty_tpl->tpl_vars["itemCounter"] = new Smarty_Variable($_smarty_tpl->tpl_vars['itemCounter']->value+1, null, 0);?>
                        <?php
$_smarty_tpl->tpl_vars['itemtext'] = $foreach_itemtext_Sav;
}
?>

			        </ol>  
		        </div>
		    </li>
	   		<?php }?>
	    <?php }?>
<?php
$_smarty_tpl->tpl_vars['entries'] = $foreach_entries_Sav;
}

}
}
?>