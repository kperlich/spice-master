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

Ext.define("SpiceCRM.Deployment.DeploymentManager.model.deployAction",{extend:"Ext.data.Model",alias:["widget.deployActionModel"],fields:["action","function","status"]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.model.releasePackage",{extend:"Ext.data.Model",alias:["widget.releasePackageModel"],fields:["id","name","rpstatus","rptype","rpstatus_raw","rptype_raw","release_date","release_version","items","remote","source_release_date","source_system_id","source_system_name"]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.model.releasePackageContent",{extend:"Ext.data.Model",alias:["widget.releasePackageContentModel"],fields:["id","ckey","ctype"]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.model.releasePackageStat",{extend:"Ext.data.Model",alias:["widget.releasePackageStatModel"],fields:["id","system","system_id","status","status_raw","date_modified","history"]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.store.deployActions",{extend:"Ext.data.Store",model:"SpiceCRM.Deployment.DeploymentManager.model.deployAction",alias:["store.DeploymentManager.deployActions"],listeners:{load:function(){console.log("Store loaded")}},autoDestroy:!0}),Ext.define("SpiceCRM.Deployment.DeploymentManager.store.localReleasePackages",{extend:"Ext.data.Store",model:"SpiceCRM.Deployment.DeploymentManager.model.releasePackage",alias:["store.DeploymentManager.localReleasePackages"],pageSize:50,proxy:{type:"ajax",url:"KREST/kdeployment/localReleasePackages",method:"GET",reader:{type:"json",rootProperty:"list",totalProperty:"total"}},sorters:[{property:"release_date",direction:"DESC"}],autoLoad:!0}),Ext.define("SpiceCRM.Deployment.DeploymentManager.store.releasePackageContents",{extend:"Ext.data.Store",model:"SpiceCRM.Deployment.DeploymentManager.model.releasePackageContent",alias:["store.DeploymentManager.releasePackageContents"],autoLoad:!1}),Ext.define("SpiceCRM.Deployment.DeploymentManager.store.releasePackageStats",{extend:"Ext.data.Store",model:"SpiceCRM.Deployment.DeploymentManager.model.releasePackageStat",alias:["store.DeploymentManager.releasePackageStats"],proxy:{type:"ajax",url:"KREST/kdeployment/releasePackageHistory",method:"GET",reader:{type:"json",rootProperty:"list"}},autoLoad:!1}),Ext.define("SpiceCRM.Deployment.DeploymentManager.store.remoteReleasePackages",{extend:"Ext.data.Store",model:"SpiceCRM.Deployment.DeploymentManager.model.releasePackage",alias:["store.DeploymentManager.remoteReleasePackages"],pageSize:50,proxy:{type:"ajax",url:"KREST/kdeployment/remoteReleasePackages",method:"GET",reader:{type:"json",rootProperty:"list",totalProperty:"total"}},sorters:[{property:"release_date",direction:"DESC"}],autoLoad:!1}),Ext.define("SpiceCRM.Deployment.DeploymentManager.controller.Application",{extend:"Ext.app.Controller",doInit:function(){console.log("app controller initialized")},finishInit:function(){},onLaunch:function(){}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.controller.deployController",{extend:"Ext.app.ViewController",alias:"controller.DeploymentManager.deployController",error:!1,config:{listen:{global:{}},control:{"#":{show:function(){this.view.down("grid").getStore().removeAll(),this.view.down("grid").getStore().loadData([{action:"Check access",function:"checkAccessPackage",status:"waiting"},{action:"Backup",function:"backupPackage",status:"waiting"},{action:"Write files",function:"writeFilesPackage",status:"waiting"},{action:"Write db",function:"writeDBPackage",status:"waiting"},{action:"Repair",function:"repairPackage",status:"waiting"},{action:"Mark deployed",function:"markPackageDeployed",status:"waiting"}]),this.deployPackage(this.view.packageId)}}}},deployPackage:function(a){var b=this.view.down("grid").getStore(),c=b.findRecord("status","waiting");null===c?(this.view.down("#deployWindowCloseButton").enable(),Ext.GlobalEvents.fireEvent("DeploymentManagerPackageDeployed",a),this.view.multi&&this.view.close()):(c.set("status","processing..."),Ext.Ajax.request({url:"KREST/kdeployment/"+c.get("function")+"/"+a,method:"GET",timeout:12e4,success:function(b,d){var e=Ext.JSON.decode(b.responseText);"ok"===e.status?(c.set("status","complete"),this.deployPackage(a)):(this.error=!0,c.set("status","error: "+e.msg),Ext.Ajax.request({url:"KREST/kdeployment/rollbackPackage/"+a,method:"GET",timeout:12e4,success:function(a,b){this.view.down("#deployWindowCloseButton").enable()},failure:function(a,b){console.log("server-side failure with status code "+a.status),c.set("status","server-side failure with status code "+a.status),this.view.down("#deployWindowCloseButton").enable()},scope:this}))},failure:function(a,b){console.log("server-side failure with status code "+a.status),c.set("status","server-side failure with status code "+a.status),this.view.down("#deployWindowCloseButton").enable()},scope:this}))}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.controller.localReleasePackageListController",{extend:"Ext.app.ViewController",alias:"controller.DeploymentManager.localReleasePackageListController",selected:[],config:{listen:{global:{DeploymentManagerPackageDeployed:function(a){var b=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages"),c=b.findRecord("id",a);c.set("rpstatus","deployed"),c.set("rpstatus_raw","6"),Ext.GlobalEvents.fireEvent("DeploymentManagerDetailsFormUpdate",c),this.handleButtons("selectionchange",{datamodel:c,status:[c.get("rpstatus_raw")]}),this.selected.splice(this.selected.indexOf(a),1),this.deployPackage(),0===this.selected.length&&(this.view.up("panel").down("grid").getSelectionModel().select(c),this.selected.push(c.get("id")))},DeploymentManagerRemotePackageFetched:function(a){var b=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages");a.set("rpstatus","fetched"),a.set("rpstatus_raw","5"),a.set("remote","0"),b.insert(0,a)},DeploymentManagerDetailsListUpdate:function(a){this.handleButtons("disable"),this.handleButtons("selectionchange",{datamodel:a,status:[a.get("rpstatus_raw")]})}}},control:{"#":{select:function(a,b){Ext.GlobalEvents.fireEventArgs("DeploymentManagerReleasePackageSelected",[b,"local"])},expand:function(){var a=this.view.getSelection();1==a.length?Ext.GlobalEvents.fireEvent("DeploymentManagerLocalChangeList",a[0]):Ext.GlobalEvents.fireEvent("DeploymentManagerLocalChangeList")},selectionchange:function(a,b,c){this.selected=[];var d=[];if(this.handleButtons("disable"),1==b.length&&d.push(b[0].data.rpstatus_raw),b.length>1)for(var e=0;b.length>e;e++)d.indexOf(b[e].data.rpstatus_raw)<0&&d.push(b[e].data.rpstatus_raw);if(b.length>0&&1==d.length){this.handleButtons("selectionchange",{datamodel:b,status:d});for(var f=0;b.length>f;f++)this.selected[f]=b[f].id}}},"#deployButtonList":{click:function(){this.deployPackage(),this.view.setSelection([]),this.handleButtons("disable")}},"#releaseButtonList":{click:function(){this.releasePackage(),this.view.setSelection([]),this.handleButtons("disable")}},"#rollbackButtonList":{click:function(){this.rollbackPackage(),this.view.setSelection([]),this.handleButtons("disable")}},"#uploadButtonList":{click:function(){this.uploadPackage()}}}},deployPackage:function(){this.selected.length>0?Ext.create("SpiceCRM.Deployment.DeploymentManager.view.deployWindow",{packageId:this.selected[0],multi:!0}).show():this.view.up("panel").down("grid").getSelectionModel().deselectAll()},releasePackage:function(){var a=new Ext.LoadMask({msg:"releasing package...",target:this.view.up("app-main")});a.show(),Ext.Ajax.request({url:"KREST/kdeployment/releasePackage/"+this.selected[0],method:"GET",timeout:12e4,success:function(b,c){var d=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages"),e=d.findRecord("id",this.selected[0]);e.set("rpstatus","released"),e.set("rpstatus_raw","7"),Ext.GlobalEvents.fireEvent("DeploymentManagerDetailsFormUpdate",e),this.handleButtons("selectionchange",{datamodel:e,status:[e.get("rpstatus_raw")]}),a.hide(),this.selected.splice(0,1),this.selected.length>0?this.releasePackage():(this.view.up("panel").down("grid").getSelectionModel().select(e),this.selected.push(e.get("id")))},failure:function(b,c){console.log("server-side failure with status code "+b.status),a.hide()},scope:this})},rollbackPackage:function(){var a=new Ext.LoadMask({msg:"rolling back package...",target:this.view.up("app-main")});a.show(),Ext.Ajax.request({url:"KREST/kdeployment/rollbackPackage/"+this.selected[0],method:"GET",timeout:12e4,success:function(b,c){var d=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages"),e=d.findRecord("id",this.selected[0]);e.set("rpstatus","fetched"),e.set("rpstatus_raw","5"),Ext.GlobalEvents.fireEvent("DeploymentManagerDetailsFormUpdate",e),this.handleButtons("selectionchange",{datamodel:e,status:[e.get("rpstatus_raw")]}),a.hide(),this.selected.splice(0,1),this.selected.length>0?this.rollbackPackage():(this.view.up("panel").down("grid").getSelectionModel().select(e),this.selected.push(e.get("id")))},failure:function(b,c){console.log("server-side failure with status code "+b.status),a.hide()},scope:this})},handleButtons:function(a,b){switch(a){case"disable":this.view.down("#deployButtonList").disable(),this.view.down("#releaseButtonList").disable(),this.view.down("#rollbackButtonList").disable();break;case"selectionchange":switch(b.status[0]){case"5":this.view.down("#deployButtonList").enable();break;case"6":this.view.down("#releaseButtonList").enable(),1==b.datamodel.length&&b.datamodel[0].get("source_system_id")!==SpiceCRM.Deployment.DeploymentManager.Application.appConfig.id&&this.view.down("#rollbackButtonList").enable();break;case"7":1==b.datamodel.length&&b.datamodel[0].get("source_system_id")!==SpiceCRM.Deployment.DeploymentManager.Application.appConfig.id&&this.view.down("#rollbackButtonList").enable()}}},uploadPackage:function(){Ext.widget("window",{title:"Upload Package",width:300,height:250,layout:"fit",resizable:!0,modal:!0,items:[Ext.widget("form",{layout:{type:"vbox",align:"stretch"},border:!1,bodyPadding:10,fileUpload:!0,standardSubmit:!1,jsonSubmit:!1,fieldDefaults:{labelAlign:"top",labelWidth:100,labelStyle:"font-weight:bold"},items:[{xtype:"filefield",name:"uploadzippackage",fieldLabel:"Zip-Package",labelWidth:50,allowBlank:!1,anchor:"100%",buttonText:"Select Package...",regex:/.(zip)$/i,regexText:"Only ZIP files allowed for upload",msgTarget:"under"}],buttons:[{text:"Cancel",handler:function(){this.up("form").getForm().reset(),this.up("window").hide()}},{text:"Upload",handler:function(){var a=this.up("form").getForm();a.isValid()&&a.submit({url:"KREST/kdeployment/RPfromZIPlocal",waitMsg:"Uploading package...",success:function(a,b){var c=JSON.parse(b.response.responseText);if(c.success){var d=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages");d.removeAll(),d.load({params:{start:0,limit:50}}),this.up("form").getForm().reset(),this.up("window").hide()}else Ext.Msg.alert("Error",c.error)},failure:function(a,b){var c=JSON.parse(b.response.responseText);console.log("server-side failure: "+c.error),Ext.Msg.alert("Error","server-side failure: "+c.error),this.up("form").getForm().reset(),this.up("window").hide()},scope:this})}}]})]}).show()}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.controller.MainController",{extend:"Ext.app.ViewController",requires:[],saving:!1,alias:"controller.DeploymentManagerMain",loadMask:void 0,config:{listen:{global:{resize:function(){this.view.updateLayout()}}},control:{}}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.controller.releasePackageDetailsFormController",{extend:"Ext.app.ViewController",alias:"controller.DeploymentManager.releasePackageDetailsFormController",record:void 0,system:void 0,saveConfirm:!1,config:{listen:{global:{DeploymentManagerReleasePackageSelected:function(a,b){this.clearForm(),a&&(this.record=a,this.setFromRecord(a)),b&&(this.system=b)},DeploymentManagerLocalChangeList:function(a){this.clearForm(),a&&(this.record=a,this.setFromRecord(a))},DeploymentManagerRemoteChangeList:function(){this.clearForm()},DeploymentManagerRemoteChangeSystem:function(){this.clearForm()},DeploymentManagerDetailsFormClear:function(){this.clearForm()},DeploymentManagerPackageDeployed:function(a){var b=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages"),c=b.findRecord("id",a);c.set("rpstatus","deployed"),c.set("rpstatus_raw","6"),this.clearForm(),this.setFromRecord(c)},DeploymentManagerDetailsFormUpdate:function(a){this.clearForm(),this.record=a,this.setFromRecord(a)}}},control:{"#fetchButton":{click:function(){this.fetchPackage()}},"#deployButton":{click:function(){this.deployPackage()}},"#releaseButton":{click:function(){this.releasePackage()}},"#rollbackButton":{click:function(){this.rollbackPackage()}},"#statusButton":{click:function(){this.releasePackageHistory()}}}},setFromRecord:function(a){this.view.getViewModel().set("rp",a),this.record=a,this.view.up("panel").down("#FilesGrid").getStore().setData(a.get("items")),this.view.up("panel").down("#DatabaseGrid").getStore().setData(a.get("items")),this.view.up("panel").down("#FilesGrid").getStore().filter("ctype","file"),this.view.up("panel").down("#DatabaseGrid").getStore().filter("ctype","db"),this.handleButtons("setFromRecord",a)},clearForm:function(){this.view.up("panel").down("#FilesGrid").getStore().removeAll(),this.view.up("panel").down("#DatabaseGrid").getStore().removeAll(),this.handleButtons("disable"),this.view.getViewModel().set("rp",{}),this.record=void 0,this.system=void 0},fetchPackage:function(){var a=new Ext.LoadMask({msg:"fetching package...",target:this.view.up("app-main")});a.show(),Ext.Ajax.request({url:"KREST/kdeployment/fetchReleasePackage/"+this.record.id+"/"+this.system,method:"POST",timeout:12e4,jsonData:this.record.getData(),success:function(b,c){var d=Ext.data.StoreManager.lookup("DeploymentManagerRemoteReleasePackages");Ext.GlobalEvents.fireEvent("DeploymentManagerRemotePackageFetched",this.record),d.remove(this.record),this.clearForm(),a.hide()},failure:function(b,c){console.log("server-side failure with status code "+b.status),a.hide()},scope:this})},deployPackage:function(){Ext.create("SpiceCRM.Deployment.DeploymentManager.view.deployWindow",{packageId:this.record.get("id")}).show()},releasePackage:function(){var a=new Ext.LoadMask({msg:"releasing package...",target:this.view.up("app-main")});a.show(),Ext.Ajax.request({url:"KREST/kdeployment/releasePackage/"+this.record.id,method:"GET",timeout:12e4,success:function(b,c){var d=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages"),e=d.findRecord("id",this.record.id);e.set("rpstatus","released"),e.set("rpstatus_raw","7"),this.clearForm(),this.setFromRecord(e),Ext.GlobalEvents.fireEvent("DeploymentManagerDetailsListUpdate",e),a.hide()},failure:function(b,c){console.log("server-side failure with status code "+b.status),a.hide()},scope:this})},rollbackPackage:function(){var a=new Ext.LoadMask({msg:"rolling back package...",target:this.view.up("app-main")});a.show(),Ext.Ajax.request({url:"KREST/kdeployment/rollbackPackage/"+this.record.id,method:"GET",timeout:12e4,success:function(b,c){var d=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages"),e=d.findRecord("id",this.record.id);e.set("rpstatus","fetched"),e.set("rpstatus_raw","5"),this.clearForm(),this.setFromRecord(e),Ext.GlobalEvents.fireEvent("DeploymentManagerDetailsListUpdate",e),a.hide()},failure:function(b,c){console.log("server-side failure with status code "+b.status),a.hide()},scope:this})},releasePackageHistory:function(){Ext.create("SpiceCRM.Deployment.DeploymentManager.view.statusWindow").showWithData(this.record.id)},handleButtons:function(a,b){switch(a){case"disable":this.view.down("#statusButton").disable(),this.view.down("#fetchButton").disable(),this.view.down("#deployButton").disable(),this.view.down("#releaseButton").disable(),this.view.down("#rollbackButton").disable();break;case"setFromRecord":this.view.down("#statusButton").enable(),1===b.get("remote")?this.view.down("#fetchButton").enable():(5==parseInt(b.get("rpstatus_raw"))&&this.view.down("#deployButton").enable(),6==parseInt(b.get("rpstatus_raw"))&&(this.view.down("#releaseButton").enable(),b.get("source_system_id")!==SpiceCRM.Deployment.DeploymentManager.Application.appConfig.id&&this.view.down("#rollbackButton").enable()),7==parseInt(b.get("rpstatus_raw"))&&b.get("source_system_id")!==SpiceCRM.Deployment.DeploymentManager.Application.appConfig.id&&this.view.down("#rollbackButton").enable())}}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.controller.remoteReleasePackageListController",{extend:"Ext.app.ViewController",alias:"controller.DeploymentManager.remoteReleasePackageListController",system:void 0,selected:[],config:{listen:{global:{DeploymentManagerRemotePackageFetched:function(){this.selectNextPackage()}}},control:{"#":{select:function(a,b){Ext.GlobalEvents.fireEventArgs("DeploymentManagerReleasePackageSelected",[b,this.system])},expand:function(){Ext.GlobalEvents.fireEvent("DeploymentManagerRemoteChangeList")},selectionchange:function(a,b,c){if(b.length>0){this.view.down("#fetchButton").enable();for(var d=0;b.length>d;d++)this.selected[d]=b[d].id}else this.view.down("#fetchButton").disable(),this.selected=[]}},"#packageSources":{select:function(a,b){this.view.getStore().removeAll(),this.view.getStore().getProxy().extraParams.system=b.get("id"),this.system=b.get("id"),this.view.getStore().load(),Ext.GlobalEvents.fireEvent("DeploymentManagerRemoteChangeSystem")}},"#fetchButton":{click:function(){this.fetchPackage()}}}},fetchPackage:function(){var a=new Ext.LoadMask({msg:"fetching package...",target:this.view.up("app-main")});a.show(),Ext.Ajax.request({url:"KREST/kdeployment/fetchReleasePackage/"+this.selected[0]+"/"+this.system,method:"POST",timeout:12e4,jsonData:Ext.data.StoreManager.lookup("DeploymentManagerRemoteReleasePackages").findRecord("id",this.selected[0]).getData(),success:function(b,c){var d=Ext.data.StoreManager.lookup("DeploymentManagerRemoteReleasePackages"),e=d.findRecord("id",this.selected[0]);d.remove(e),Ext.GlobalEvents.fireEvent("DeploymentManagerRemotePackageFetched",e),this.selected.splice(0,1),this.selected.length>0&&this.fetchPackage(),a.hide()},failure:function(b,c){console.log("server-side failure with status code "+b.status),a.hide()},scope:this})},selectNextPackage:function(){this.view.getSelectionModel().select(this.view.getStore().first()),Ext.GlobalEvents.fireEventArgs("DeploymentManagerReleasePackageSelected",[this.view.getStore().first(),"remote"])}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.deployWindow",{extend:"Ext.window.Window",alias:["widget.DeploymentManager.deployWindow"],height:400,width:400,modal:!0,packageId:void 0,multi:!1,closable:!1,controller:"DeploymentManager.deployController",title:"Deploying ...",layout:"fit",items:{xtype:"grid",viewConfig:{markDirty:!1},store:{type:"DeploymentManager.deployActions"},columns:[{text:"Action",dataIndex:"action"},{text:"Status",dataIndex:"status",flex:1}]},bbar:["->",{xtype:"button",text:"close",disabled:!0,itemId:"deployWindowCloseButton",handler:function(a){a.up("window").close()}}]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.localReleasePackageList",{extend:"Ext.grid.Panel",alias:["widget.DeploymentManager.localReleasePackageList"],controller:"DeploymentManager.localReleasePackageListController",icon:"modules/KDeploymentSystems/images/database.png",store:Ext.create("SpiceCRM.Deployment.DeploymentManager.store.localReleasePackages",{storeId:"DeploymentManagerLocalReleasePackages"}),flex:1,height:"100%",selModel:{selType:"rowmodel",mode:"MULTI"},columns:[{text:"Name",dataIndex:"name",flex:3},{text:"Date",dataIndex:"release_date",flex:3},{text:"Status",dataIndex:"rpstatus",flex:1,encodeHtml:!1,renderer:function(a){switch(a){case"deployed":return'<div style="border:1px solid #ddd;float:left;margin-left:5px;width:16px;height:16px;background:yellow"></div>';case"released":return'<div style="border:1px solid #ddd;float:left;margin-left:5px;width:16px;height:16px;background:green"></div>';default:return'<div style="border:1px solid #ddd;float:left;margin-left:5px;width:16px;height:16px;background:#ddd"></div>'}}}],viewConfig:{stripeRows:!0,markDirty:!1},dockedItems:[{xtype:"toolbar",dock:"top",items:[{xtype:"textfield",flex:1,itemId:"packageFilter",listeners:{change:function(a,b,c,d){var e=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages");b!==c&&(b.length<=3?(e.clearFilter(),"0"==a.up("panel").down("#statusFilter").getValue()||null===a.up("panel").down("#statusFilter").getValue()?e.removeFilter("rpstatus_raw"):e.filter("rpstatus_raw",a.up("panel").down("#statusFilter").getValue())):e.filterBy(function(a,c){return-1!=(a.get("name")||" ").indexOf(b)}))}}},{xtype:"combo",flex:1,itemId:"statusFilter",store:Ext.create("Ext.data.Store",{fields:["val","name"],data:[{val:"0",name:"-no filter-"},{val:"5",name:"fetched"},{val:"6",name:"deployed"},{val:"7",name:"released"}]}),queryMode:"local",displayField:"name",valueField:"val",listeners:{change:function(a,b,c,d){var e=Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages");b!==c&&e.filter("rpstatus_raw",b),"0"==b&&e.removeFilter("rpstatus_raw")}}}]},{xtype:"toolbar",dock:"top",items:[{xtype:"button",text:"deploy",itemId:"deployButtonList",icon:"modules/KDeploymentSystems/images/deploy.png",disabled:!0},{xtype:"button",text:"release",itemId:"releaseButtonList",icon:"modules/KDeploymentSystems/images/release.png",disabled:!0},{xtype:"button",text:"rollback",itemId:"rollbackButtonList",icon:"modules/KDeploymentSystems/images/rollback.png",disabled:!0},{xtype:"button",text:"upload",itemId:"uploadButtonList",icon:"modules/KDeploymentSystems/images/deploy.png"}]},{xtype:"pagingtoolbar",store:Ext.data.StoreManager.lookup("DeploymentManagerLocalReleasePackages"),dock:"bottom",displayInfo:!0}]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.main.Main",{extend:"Ext.container.Container",requires:["SpiceCRM.Deployment.DeploymentManager.controller.MainController"],xtype:"app-main",renderTo:"deploymentManager",height:"100%",width:"100%",border:!1,controller:"DeploymentManagerMain",viewModel:{},layout:{type:"border"},style:{"background-color":"transparent"},items:[{xtype:"panel",layout:{type:"accordion",titleCollapse:!1,animate:!0,activeOnTop:!0},region:"west",flex:1,margin:"0 0 0 0",split:!0,items:[{xtype:"DeploymentManager.localReleasePackageList",title:"local"},{xtype:"DeploymentManager.remoteReleasePackageList",title:"remote"}]},{xtype:"DeploymentManager.releasePackageDetails",region:"center",flex:2}],listeners:{}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.releasePackageContent",{extend:"Ext.panel.Panel",alias:["widget.DeploymentManager.releasePackageContent"],width:"100%",defaults:{},layout:{type:"vbox",margin:"0 5 0 5"},items:[{xtype:"fieldset",title:"Files",margin:5,scrollable:"y",width:"100%",flex:1,items:[{xtype:"grid",flex:1,reserveScrollbar:!0,width:"100%",itemId:"FilesGrid",columns:[{text:"Path",dataIndex:"ckey",flex:1,renderer:function(a){if(a){var b=a.split("/");return b.splice(b.length-1),b.join("/")}}},{text:"File",dataIndex:"ckey",flex:1,renderer:function(a){if(a){var b=a.split("/");return b.splice(b.length-1)}}}],store:Ext.create("SpiceCRM.Deployment.DeploymentManager.store.releasePackageContents",{storeId:"releasePackageContentFiles"})}]},{xtype:"fieldset",title:"DB Records",margin:5,scrollable:"y",width:"100%",flex:1,items:[{xtype:"grid",flex:1,width:"100%",reserveScrollbar:!0,itemId:"DatabaseGrid",columns:[{text:"Table",dataIndex:"ckey",flex:1,renderer:function(a){if(a){return a.split("/")[0]}}},{text:"key",dataIndex:"ckey",flex:1,renderer:function(a){if(a){return a.split("/")[1]}}}],store:Ext.create("SpiceCRM.Deployment.DeploymentManager.store.releasePackageContents",{storeId:"releasePackageContentDatabases"})}]}]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.releasePackageDetails",{extend:"Ext.panel.Panel",alias:["widget.DeploymentManager.releasePackageDetails"],height:"100%",defaults:{border:!1},layout:{type:"vbox"},items:[{xtype:"DeploymentManager.releasePackageDetailsForm",flex:1,width:"100%"},{xtype:"DeploymentManager.releasePackageContent",flex:2,width:"100%"}]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.releasePackageDetailsForm",{extend:"Ext.form.Panel",alias:["widget.DeploymentManager.releasePackageDetailsForm"],controller:"DeploymentManager.releasePackageDetailsFormController",title:"Release Package Details",layout:"container",scrollable:"vertical",itemId:"releasePackageDetailsForm",viewModel:{data:{rp:{}}},items:[{title:"Package Info",xtype:"fieldset",collapsible:!1,defaultType:"textfield",defaults:{anchor:"100%",border:!1},margin:"0 5 0 5",layout:"hbox",items:[{xtype:"panel",layout:"vbox",flex:1,defaults:{width:"100%",margin:"0 5 5 5"},items:[{xtype:"textfield",fieldLabel:"Name",itemId:"name",name:"name",disabled:!0,bind:"{rp.name}"},{xtype:"textfield",itemId:"rpstatus",name:"rpstatus",fieldLabel:"Status",disabled:!0,bind:"{rp.rpstatus}"},{xtype:"textfield",itemId:"source_system",name:"source_system",fieldLabel:"Source System",disabled:!0,bind:"{rp.source_system}"}]},{xtype:"panel",layout:"vbox",flex:1,defaults:{width:"100%",margin:"0 5 5 5"},items:[{xtype:"textfield",itemId:"rptype",name:"rptype",fieldLabel:"Type",disabled:!0,bind:"{rp.rptype}"},{xtype:"textfield",itemId:"release_date",name:"release_date",fieldLabel:"Release Date",disabled:!0,bind:"{rp.release_date}"},{xtype:"textfield",itemId:"source_release_date",name:"source_release_date",fieldLabel:"Source Rel. Date",disabled:!0,bind:"{rp.source_release_date}"}]},{xtype:"hiddenfield",name:"id",itemId:"id",bind:"{rp.id}",autodisable:!1}]}],tbar:[{xtype:"button",text:"fetch",itemId:"fetchButton",icon:"modules/KDeploymentSystems/images/getremote.png",disabled:!0},{xtype:"button",text:"deploy",itemId:"deployButton",icon:"modules/KDeploymentSystems/images/deploy.png",disabled:!0},{xtype:"button",text:"release",itemId:"releaseButton",icon:"modules/KDeploymentSystems/images/release.png",disabled:!0},{xtype:"button",text:"rollback",itemId:"rollbackButton",icon:"modules/KDeploymentSystems/images/rollback.png",disabled:!0},"->",{xtype:"button",text:"status",itemId:"statusButton",icon:"modules/KDeploymentSystems/images/status.png",disabled:!0}]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.releasePackageDirectories",{extend:"Ext.tree.Panel",alias:["widget.DeploymentManager.releasePackageDirectories"],rootVisible:!1,store:Ext.create("Ext.data.TreeStore",{root:{expanded:!0,children:[{text:"cache",leaf:!0},{text:"custom",expanded:!0,children:[{text:"modules",leaf:!0},{text:"application",leaf:!0}]},{text:"theme",leaf:!0}]}}),title:"Directories",flex:1,height:"100%"}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.releasePackageFiles",{extend:"Ext.grid.Panel",alias:["widget.DeploymentManager.releasePackageFiles"],columns:[{text:"Path",dataIndex:"ckey",flex:1,renderer:function(a){if(a){var b=a.split("/");return b.splice(b.length-1),b.join("/")}}},{text:"File",dataIndex:"ckey",flex:1,renderer:function(a){if(a){var b=a.split("/");return b.splice(b.length-1)}}}],store:Ext.create("SpiceCRM.Deployment.DeploymentManager.store.releasePackageContents",{storeId:"releasePackageFiles"}),flex:1,height:"100%"}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.releasePackageObjects",{extend:"Ext.panel.Panel",alias:["widget.DeploymentManager.releasePackageObjects"],layout:{type:"hbox",margin:"0 10 0 10"},items:[{xtype:"DeploymentManager.releasePackageDirectories"},{xtype:"DeploymentManager.releasePackageFiles"}],flex:1}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.remoteReleasePackageList",{extend:"Ext.grid.Panel",alias:["widget.DeploymentManager.remoteReleasePackageList"],controller:"DeploymentManager.remoteReleasePackageListController",store:Ext.create("SpiceCRM.Deployment.DeploymentManager.store.remoteReleasePackages",{storeId:"DeploymentManagerRemoteReleasePackages"}),flex:1,height:"100%",icon:"modules/KDeploymentSystems/images/cloud.png",selModel:{selType:"rowmodel",mode:"MULTI"},columns:[{text:"Name",dataIndex:"name",flex:1}],viewConfig:{stripeRows:!0,markDirty:!1},dockedItems:[{xtype:"toolbar",dock:"top",items:[{xtype:"combo",itemId:"packageSources",flex:1,name:"packageSources",store:Ext.create("Ext.data.Store",{proxy:{type:"ajax",url:"KREST/kdeployment/sourceSystems",method:"GET",reader:{type:"json",rootProperty:"list"}},autoLoad:!0,fields:["id","name","url","sys_username","sys_password","master_flag","type","this_system"]}),queryMode:"local",displayField:"name",valueField:"id",forceSelection:!0,allowBlank:!1},{xtype:"button",text:"fetch",icon:"modules/KDeploymentSystems/images/getremote.png",itemId:"fetchButton",disabled:!0}]},{xtype:"pagingtoolbar",store:Ext.data.StoreManager.lookup("DeploymentManagerRemoteReleasePackages"),dock:"bottom",displayInfo:!0}]}),Ext.define("SpiceCRM.Deployment.DeploymentManager.view.statusWindow",{extend:"Ext.window.Window",alias:["widget.DeploymentManager.statusWindow"],height:400,width:400,modal:!0,systemrecord:void 0,closable:!1,title:"Package Stats",layout:"fit",items:{xtype:"grid",viewConfig:{markDirty:!1,getRowClass:function(a,b,c,d){return"0"===a.data.history?"spicedeploy-bold-row":""}},columns:[{text:"System",dataIndex:"system",flex:1},{text:"Status",dataIndex:"status"},{text:"Date",dataIndex:"date_modified"}]},bbar:[{xtype:"checkboxfield",itemId:"historyFilter",boxLabel:"only current status",inputValue:"1",listeners:{change:function(a,b,c,d){var e=Ext.data.StoreManager.lookup("DeploymentManagerReleasePackageStats");!0===b?e.filter("history","0"):e.clearFilter()}}},"->",{xtype:"button",text:"close",itemId:"statusWindowCloseButton",handler:function(a){a.up("window").close()}}],showWithData:function(a){var b=Ext.create("SpiceCRM.Deployment.DeploymentManager.store.releasePackageStats",{storeId:"DeploymentManagerReleasePackageStats"});b.getProxy().url+="/"+a,b.load(),b.sort([{property:"system_id",direction:"ASC"},{property:"date_modified",direction:"DESC"}]),this.show(),this.down("grid").setStore(b)}}),Ext.define("SpiceCRM.Deployment.DeploymentManager.Application",{namespaces:["SpiceCRM.Deployment.DeploymentManager"],controllers:["Application"],extend:"Ext.app.Application",name:"SpiceCRM.Deployment.DeploymentManager",appConfig:{},launch:function(){Ext.create("SpiceCRM.Deployment.DeploymentManager.view.main.Main"),SpiceCRM.Deployment.DeploymentManager.Application=this,Ext.Ajax.request({url:"KREST/kdeployment/appConfig",success:function(a,b){var c=Ext.decode(a.responseText);SpiceCRM.Deployment.DeploymentManager.Application.appConfig=c},failure:function(a,b){console.log("server-side failure with status code "+a.status)}})},languageGetText:function(a){return SUGAR.language.get("KDploymentSystems",a)},S4:function(){return(65536*(1+Math.random())|0).toString(16).substring(1)},kGuid:function(){return"k"+this.S4()+this.S4()+this.S4()+this.S4()+this.S4()+this.S4()+this.S4()}}),Ext.application({extend:"SpiceCRM.Deployment.DeploymentManager.Application"});