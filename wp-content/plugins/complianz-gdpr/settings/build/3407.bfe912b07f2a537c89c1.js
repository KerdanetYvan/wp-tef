"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[3407,9684,9166],{93407:(e,t,a)=>{a.r(t),a.d(t,{default:()=>m});var s=a(51609),l=a(86087),c=a(27723),n=a(9684),r=a(99695),i=a(32828),o=a(4219);const m=()=>{const{percentageCompleted:e,filter:t,notices:a,progressLoaded:m,fetchProgressData:d,error:p}=(0,i.default)(),{fetchAllFieldsCompleted:u,allRequiredFieldsCompleted:_,fields:g}=(0,o.default)();(0,l.useEffect)((()=>{(async()=>{m||await d(),u()})()}),[t,g]);let h="";if(e<80&&(h+="cmplz-orange"),!m||p)return(0,s.createElement)(r.default,{lines:"9",error:p});let f=a;if("remaining"===t&&(f=f.filter((function(e){return"completed"!==e.status}))),!_&&0===f.filter((e=>"all_fields_completed"===e.id)).length){let e={id:"all_fields_completed",status:"urgent",message:(0,c.__)('Not all fields have been entered, or you have not clicked the "finish" button yet.',"complianz-gdpr")};f.push(e)}_&&(f=f.filter((e=>"all_fields_completed"!==e.id))),f.sort((function(e,t){return e.status===t.status?0:e.status<t.status?1:-1}));let z=f.filter((e=>"open"===e.status||"urgent"===e.status));return(0,s.createElement)("div",{className:"cmplz-progress-block"},(0,s.createElement)("div",{className:"cmplz-progress-bar"},(0,s.createElement)("div",{className:"cmplz-progress"},(0,s.createElement)("div",{className:"cmplz-bar "+h,style:Object.assign({},{width:e+"%"})}))),(0,s.createElement)("div",{className:"cmplz-progress-text"},(0,s.createElement)("h1",{className:"cmplz-progress-percentage"},e,"%"),(0,s.createElement)("h5",{className:"cmplz-progress-text-span"},e<100&&(0,c.__)("Consent Management is activated on your site.","complianz-gdpr")+" ",e<100&&1===z.length&&(0,c.__)("You still have 1 task open.","complianz-gdpr"),e<100&&z.length>1&&(0,c.__)("You still have %s tasks open.","complianz-gdpr").replace("%s",z.length),100===e&&(0,c.__)("Well done! Your website is ready for your selected regions.","complianz-gdpr"))),(0,s.createElement)("div",{className:"cmplz-scroll-container"},f.map(((e,t)=>(0,s.createElement)(n.default,{key:t,index:t,notice:e})))))}},9684:(e,t,a)=>{a.r(t),a.d(t,{default:()=>_});var s=a(51609),l=a(27723),c=a(45111),n=a(47143),r=a(9588),i=a(99166),o=a(4219),m=a(32828),d=a(52043),p=a(42838),u=a.n(p);const _=({notice:e,index:t})=>{const{dismissNotice:a,fetchProgressData:p}=(0,m.default)(),{getField:_,setHighLightField:g,fetchFieldsData:h}=(0,o.default)(),{setSelectedSubMenuItem:f}=(0,d.default)();let z="premium"===e.icon,b=e.url&&-1!==e.url.indexOf("complianz.io"),k=e.status.charAt(0).toUpperCase()+e.status.slice(1);return(0,s.createElement)("div",{key:t,className:"cmplz-task-element"},(0,s.createElement)("span",{className:"cmplz-task-status cmplz-"+e.status},k),(0,s.createElement)("p",{className:"cmplz-task-message",dangerouslySetInnerHTML:{__html:u().sanitize(e.message)}}),b&&e.url&&(0,s.createElement)("a",{target:"_blank",href:e.url,rel:"noopener noreferrer"},(0,l.__)("More info","complianz-gdpr")),e.clear_cache_id&&(0,s.createElement)("span",{className:"cmplz-task-enable button button-secondary",onClick:()=>(async e=>{let t={};t.cache_id=e,r.doAction("clear_cache",t).then((async e=>{(0,n.dispatch)("core/notices").createNotice("success",(0,l.__)("Re-started test","complianz-gdpr"),{__unstableHTML:!0,id:"cmplz_clear_cache",type:"snackbar",isDismissible:!0}).then((0,i.default)(3e3)).then((e=>{(0,n.dispatch)("core/notices").removeNotice("rsssl_clear_cache")})),await h(),await p()}))})(e.clear_cache_id)},(0,l.__)("Re-check","complianz-gdpr")),!z&&!b&&e.url&&(0,s.createElement)("a",{className:"cmplz-task-enable button button-secondary",href:e.url},(0,l.__)("View","complianz-gdpr")),!z&&e.highlight_field_id&&(0,s.createElement)("span",{className:"cmplz-task-enable button button-secondary",onClick:()=>(async()=>{g(e.highlight_field_id);let t=_(e.highlight_field_id);await f(t.menu_id)})()},(0,l.__)("View","complianz-gdpr")),e.plus_one&&(0,s.createElement)("span",{className:"cmplz-plusone"},"1"),e.dismissible&&"completed"!==e.status&&(0,s.createElement)("div",{className:"cmplz-task-dismiss"},(0,s.createElement)("button",{type:"button",onClick:t=>a(e.id)},(0,s.createElement)(c.default,{name:"times"}))))}},99166:(e,t,a)=>{a.r(t),a.d(t,{default:()=>s});const s=e=>function(t){return new Promise((a=>setTimeout((()=>a(t)),e)))}}}]);