"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[7771],{17771:(e,n,t)=>{t.r(n),t.d(n,{UseMenuData:()=>d});var c=t(81621),u=t(9588),o=t(16535),r=t(55446),a=t(27723);const d=(0,c.vt)(((e,n)=>({menuDataLoaded:!1,saving:!1,menu:[],menuChanged:!1,changedMenuType:"per_document",emptyMenuLink:"#",requiredDocuments:[],createdDocuments:[],genericDocuments:[],documentsNotInMenu:[],pageTypes:[],regions:[],fetchMenuData:async()=>{const n=await i(!1);let t=n.required_documents.filter((e=>e.page_id));e({menuDataLoaded:!0,emptyMenuLink:n.empty_menu_link,menu:n.menu,requiredDocuments:n.required_documents,genericDocuments:n.generic_documents_list,createdDocuments:t,pageTypes:n.page_types,documentsNotInMenu:n.documents_not_in_menu,regions:n.regions})},updateMenu:(n,t)=>{let c=isNaN(n)?"per_type":"per_document";e({menuType:c}),e("per_type"===c?(0,o.Ay)((e=>{let c=e.genericDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n})),u=e.createdDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n}));-1!==c&&(e.genericDocuments[c].menu_id=t,-1!==u&&(e.createdDocuments[u].menu_id=-1),e.menuChanged=!0)})):(0,o.Ay)((e=>{let c=e.genericDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n})),u=e.createdDocuments.findIndex((function(e,t){return e.page_id===n||e.type===n}));-1!==u&&(e.createdDocuments[u].menu_id=t,-1!==c&&(e.genericDocuments[c].menu_id=-1),e.menuChanged=!0)})))},saveDocumentsMenu:async(t,c)=>{if(e({saving:!0}),n().menuChanged||t){let t={};t.genericDocuments=n().genericDocuments.filter((e=>e.can_region_redirect)),t.createdDocuments=n().createdDocuments;const o=u.doAction("save_documents_menu_data",t).then((n=>(e({saving:!1}),n))).catch((e=>{console.error(e)}));c&&r.toast.promise(o,{pending:(0,a.__)("Saving menu...","complianz-gdpr"),success:(0,a.__)("Menu saved","complianz-gdpr"),error:(0,a.__)("Something went wrong","complianz-gdpr")})}else c&&r.toast.info((0,a.__)("Settings have not been changed","complianz-gdpr"))}}))),i=()=>u.doAction("documents_menu_data",{generate:!1}).then((e=>e)).catch((e=>{console.error(e)}))}}]);