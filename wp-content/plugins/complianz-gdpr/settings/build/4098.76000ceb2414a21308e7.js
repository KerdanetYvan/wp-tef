"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[4098],{54098:(e,n,o)=>{o.r(n),o.d(n,{default:()=>d});var t=o(81621),c=o(9588);const d=(0,t.vt)(((e,n)=>({documentsLoaded:!1,fetching:!1,generating:!1,documents:[],downloadUrl:"",regions:[],fields:[],deleteDocuments:async o=>{let t=n().documents.filter((e=>o.includes(e.id)));e((e=>({documents:e.documents.filter((e=>!o.includes(e.id)))})));let d={};d.documents=t,await c.doAction("delete_proof_of_consent_documents",d).then((e=>e)).catch((e=>{console.error(e)}))},generateProofOfConsent:async()=>{e({generating:!0}),await c.doAction("generate_proof_of_consent",{}).then((e=>e)).catch((e=>{console.error(e)})),await n().fetchData(),e({generating:!1})},fetchData:async()=>{if(n().fetching)return;e({fetching:!0});const{documents:o,regions:t,download_url:d}=await c.doAction("get_proof_of_consent_documents",{}).then((e=>e)).catch((e=>{console.error(e)}));e((e=>({documentsLoaded:!0,documents:o,regions:t,downloadUrl:d,fetching:!1})))}})))}}]);