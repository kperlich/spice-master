/* * *******************************************************************************
* This file is part of SpiceCRM FulltextSearch. SpiceCRM FulltextSearch is an enhancement developed
* by aac services k.s.. All rights are (c) 2016 by aac services k.s.
*
* This Version of the SpiceCRM FulltextSearch is licensed software and may only be used in
* alignment with the License Agreement received with this Software.
* This Software is copyrighted and may not be further distributed without
* witten consent of aac services k.s.
*
* You can contact us at info@spicecrm.io
******************************************************************************* */

Ext.define("SpiceCRM.KReporter.Viewer.integrationplugins.ktargetlistexport.exportpopup",{extend:"Ext.Window",title:languageGetText("LBL_TARGETLISTEXPORTPOPUP_TITLE"),layout:{type:"anchor",align:"middle"},width:400,resizable:!1,modal:!0,autoHeight:!0,plain:!0,border:!1,defaults:{width:376,margin:10},items:[{xtype:"fieldset",width:376,title:languageGetText("LBL_TARGETLISTPOUPFIELDSET_LABEL"),collapsible:!1,autoHeight:!0,defaultType:"textfield",items:[{xtype:"fieldset",title:languageGetText("LBL_TARGETLISTPOUPNEWFIELDSET_LABEL"),itemId:"newFieldset",collapsible:!1,autoHeight:!0,defaults:{anchor:"-10"},defaultType:"textfield",items:[{xtype:"textfield",itemId:"exportPopupNewTglName",fieldLabel:languageGetText("LBL_TARGETLISTPOUP_NEWNAME")}]}]}],buttons:[{text:languageGetText("LBL_TGLLISTPOPUP_CLOSE"),handler:function(a){a.up("window").hide()}},{text:languageGetText("LBL_TGLLISTPOPUP_EXEC"),handler:function(a){var b=a.up("window"),c=new Ext.LoadMask({target:b,msg:"creating Targetlist"}).show();Ext.Ajax.request({url:"KREST/KReporter/plugins/action/ktargetlistexport/export_to_targetlist",success:function(){c.hide(),b.close()},failure:function(){c.hide()},timeout:12e4,params:{targetlist_name:b.down("#exportPopupNewTglName").getValue(),record:SpiceCRM.KReporter.Viewer.Application.reportRecord.get("id"),whereConditions:btoa(Ext.util.Format.htmlEncode(Ext.encode(Ext.ComponentQuery.query("#KReportViewqerWherePanel")[0].controller.extractWhereClause())))},scope:b})}}]}),Ext.define("SpiceCRM.KReporter.Viewer.integrationplugins.ktargetlistexport.menuitem",{extend:"Ext.menu.Item",text:languageGetText("LBL_TARGETLIST_EXPORT"),icon:"modules/KReports/images/targetlist.png",handler:function(){Ext.create("SpiceCRM.KReporter.Viewer.integrationplugins.ktargetlistexport.exportpopup").show()}});