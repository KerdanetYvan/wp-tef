"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[9406,4759,5683],{69406:(e,t,s)=>{s.r(t),s.d(t,{default:()=>d});var i=s(51609),c=s(4219),n=s(34759),r=s(45111),l=s(86087),a=s(27723),o=s(35683);const d=e=>{const{fields:t,getFieldValue:s}=(0,c.default)(),[d,p]=(0,l.useState)(!1),{integrationsLoaded:u,plugins:f,fetchIntegrationsData:h}=(0,n.default)(),{licenseStatus:g}=(0,o.default)();(0,l.useEffect)((()=>{let t=e.item;if(t.field){let e=s(t.field.name)==t.field.value;p(e)}}),[t]),(0,l.useEffect)((()=>{u||h()}),[]);let m=e.item;if(m.plugin)return f.filter((e=>e.id===m.plugin)).length>0?(0,i.createElement)("div",{className:"cmplz-tool"},(0,i.createElement)("div",{className:"cmplz-tool-title"},m.title),(0,i.createElement)("div",{className:"cmplz-tool-link"},(0,i.createElement)("a",{href:m.link,target:"_blank",rel:"noopener noreferrer"},(0,i.createElement)(r.default,{name:"circle-chevron-right",color:"black",size:14})))):null;let _=cmplz_settings.is_premium&&"valid"===g,k=((0,a.__)("Read more","complianz-gdpr"),m.link);_&&(!d&&m.enableLink&&(k=m.enableLink),m.field&&!d||!m.viewLink||(k=m.viewLink));let b=-1!==k.indexOf("https://"),v=b?"_blank":"_self",A=b?"external-link":"circle-chevron-right";return(0,i.createElement)("div",{className:"cmplz-tool"},(0,i.createElement)("div",{className:"cmplz-tool-title"},m.title,m.plusone&&m.plusone),(0,i.createElement)("div",{className:"cmplz-tool-link"},(0,i.createElement)("a",{href:k,target:v,rel:b?"noopener noreferrer":""},(0,i.createElement)(r.default,{name:A,color:"black",size:14}))))}},34759:(e,t,s)=>{s.r(t),s.d(t,{default:()=>r});var i=s(81621),c=s(16535),n=s(9588);const r=(0,i.vt)(((e,t)=>({integrationsLoaded:!1,fetching:!1,services:[],plugins:[],scripts:[],placeholders:[],blockedScripts:[],setScript:(t,s)=>{e((0,c.Ay)((e=>{if("block_script"===s){let s=e.blockedScripts;if(t.urls){for(const[e,i]of Object.entries(t.urls)){if(!i||0===i.length)continue;let e=!1;for(const[t,c]of Object.entries(s))i===t&&(e=!0);e||(s[i]=i)}e.blockedScripts=s}}const i=e.scripts[s].findIndex((e=>e.id===t.id));-1!==i&&(e.scripts[s][i]=t)})))},fetchIntegrationsData:async()=>{if(t().fetching)return;e({fetching:!0});const{services:s,plugins:i,scripts:c,placeholders:n,blocked_scripts:r}=await l();let a=c;a.block_script&&a.block_script.length>0&&a.block_script.forEach(((e,t)=>{e.id=t})),a.add_script&&a.add_script.length>0&&a.add_script.forEach(((e,t)=>{e.id=t})),a.whitelist_script&&a.whitelist_script.length>0&&a.whitelist_script.forEach(((e,t)=>{e.id=t})),e((()=>({integrationsLoaded:!0,services:s,plugins:i,scripts:a,fetching:!1,placeholders:n,blockedScripts:r})))},addScript:s=>{e({fetching:!0}),t().scripts[s]&&Array.isArray(t().scripts[s])||e((0,c.Ay)((e=>{e.scripts[s]=[]}))),e((0,c.Ay)((e=>{e.scripts[s].push({name:"general",id:e.scripts[s].length,enable:!0})})));let i=t().scripts;return n.doAction("update_scripts",{scripts:i}).then((t=>(e({fetching:!1}),t))).catch((e=>{console.error(e)}))},saveScript:(s,i)=>{e({fetching:!0}),t().scripts[i]&&Array.isArray(t().scripts[i])||e((0,c.Ay)((e=>{e.scripts[i]=[]}))),e((0,c.Ay)((e=>{const t=e.scripts[i].findIndex((e=>e.id===s.id));-1!==t&&(e.scripts[i][t]=s)})));let r=t().scripts;return n.doAction("update_scripts",{scripts:r}).then((t=>(e({fetching:!1}),t))).catch((e=>{console.error(e)}))},deleteScript:(s,i)=>{e({fetching:!0}),t().scripts[i]&&Array.isArray(t().scripts[i])||e((0,c.Ay)((e=>{e.scripts[i]=[]}))),e((0,c.Ay)((e=>{const t=e.scripts[i].findIndex((e=>e.id===s.id));-1!==t&&e.scripts[i].splice(t,1)})));let r=t().scripts;return n.doAction("update_scripts",{scripts:r}).then((t=>(e({fetching:!1}),t))).catch((e=>{console.error(e)}))},updatePluginStatus:async(t,s)=>{e({fetching:!0}),e((0,c.Ay)((e=>{const i=e.plugins.findIndex((e=>e.id===t));-1!==i&&(e.plugins[i].enabled=s)})));const i=await n.doAction("update_plugin_status",{plugin:t,enabled:s}).then((e=>e)).catch((e=>{console.error(e)}));return e({fetching:!1}),i},updatePlaceholderStatus:async(t,s,i)=>{e({fetching:!0}),i&&e((0,c.Ay)((e=>{const i=e.plugins.findIndex((e=>e.id===t));-1!==i&&(e.plugins[i].placeholder=s?"enabled":"disabled")})));const r=await n.doAction("update_placeholder_status",{id:t,enabled:s}).then((e=>e)).catch((e=>{console.error(e)}));return e({fetching:!1}),r}}))),l=()=>n.doAction("get_integrations_data",{}).then((e=>e)).catch((e=>{console.error(e)}))},35683:(e,t,s)=>{s.r(t),s.d(t,{default:()=>n});var i=s(81621),c=s(9588);const n=(0,i.vt)(((e,t)=>({licenseStatus:cmplz_settings.licenseStatus,processing:!1,licenseNotices:[],noticesLoaded:!1,getLicenseNotices:async()=>{const{licenseStatus:t,notices:s}=await c.doAction("license_notices",{}).then((e=>e));e((e=>({noticesLoaded:!0,licenseNotices:s,licenseStatus:t})))},activateLicense:async t=>{let s={};s.license=t,e({processing:!0});const{licenseStatus:i,notices:n}=await c.doAction("activate_license",s);e((e=>({processing:!1,licenseNotices:n,licenseStatus:i})))},deactivateLicense:async()=>{e({processing:!0});const{licenseStatus:t,notices:s}=await c.doAction("deactivate_license");e((e=>({processing:!1,licenseNotices:s,licenseStatus:t})))}})))}}]);