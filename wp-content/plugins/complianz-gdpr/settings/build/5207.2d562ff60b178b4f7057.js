"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[5207],{5207:(e,t,i)=>{i.r(t),i.d(t,{default:()=>s});var n=i(81621),d=i(16535),o=i(9588),c=i(73710);const s=(0,n.vt)(((e,t)=>({documentsLoaded:!1,savedDocument:{},conclusions:[],region:"",fileName:"",fetching:!1,updating:!1,loadingFields:!1,documents:[],regions:[],fields:[],editDocumentId:!1,resetEditDocumentId:t=>{e({editDocumentId:!1,region:""})},editDocument:async t=>{e({updating:!0}),await o.doAction("load_databreach_report",{id:t}).then((t=>{e({fields:t.fields,region:t.region,updating:!1,fileName:t.file_name})})).catch((e=>{console.error(e)})),e({editDocumentId:t})},setRegion:t=>{e({region:t})},updateField:(i,n)=>{let o=!1,s=!1;e((0,d.Ay)((e=>{e.fields.forEach((function(e,t){e.id===i&&(s=t,o=!0)})),!1!==s&&(e.fields[s].value=n)})));let a=(0,c.updateFieldsListWithConditions)(t().fields);e({fields:a})},save:async i=>{e({updating:!0});let n=t().editDocumentId,d=0;await o.doAction("save_databreach_report",{fields:t().fields,region:i,post_id:n}).then((t=>(d=t.post_id,e({updating:!1,conclusions:t.conclusions}),t))).catch((e=>{console.error(e)})),await t().fetchData();let c=t().documents.filter((e=>e.id===d));c.length>0&&e({savedDocument:c[0]})},deleteDocuments:async i=>{let n=t().documents.filter((e=>i.includes(e.id)));e((e=>({documents:e.documents.filter((e=>!i.includes(e.id)))})));let d={};d.documents=n,await o.doAction("delete_databreach_report",d).then((e=>e)).catch((e=>{console.error(e)}))},fetchData:async()=>{if(t().fetching)return;e({fetching:!0});const{documents:i,regions:n}=await o.doAction("get_databreach_reports",{}).then((e=>e)).catch((e=>{console.error(e)}));e((e=>({documentsLoaded:!0,documents:i,regions:n,fetching:!1})))},fetchFields:async t=>{let i={region:t};e({loadingFields:!0});const{fields:n}=await o.doAction("get_databreach_report_fields",i).then((e=>e)).catch((e=>{console.error(e)}));let d=(0,c.updateFieldsListWithConditions)(n);e((e=>({fields:d,loadingFields:!1})))}})))}}]);