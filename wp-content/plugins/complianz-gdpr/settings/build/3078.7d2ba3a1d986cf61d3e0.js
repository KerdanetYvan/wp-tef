"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[3078,9091,9758,1366,54],{99091:(e,t,n)=>{n.r(t),n.d(t,{UseCookieScanData:()=>o});var r=n(81621),a=n(9588);const o=(0,r.vt)(((e,t)=>({initialLoadCompleted:!1,setInitialLoadCompleted:t=>e({initialLoadCompleted:t}),iframeLoaded:!1,loading:!1,nextPage:!1,progress:0,cookies:[],lastLoadedIframe:"",setIframeLoaded:t=>e({iframeLoaded:t}),setLastLoadedIframe:t=>e((e=>({lastLoadedIframe:t}))),setProgress:t=>e({progress:t}),fetchProgress:()=>(e({loading:!0}),a.doAction("get_scan_progress",{}).then((t=>(e({initialLoadCompleted:!0,loading:!1,nextPage:t.next_page,progress:t.progress,cookies:t.cookies}),t))))})))},79758:(e,t,n)=>{n.r(t),n.d(t,{default:()=>u});var r=n(51609),a=n(86087),o=n(9588),s=n(4219),c=n(52043),l=n(56427),i=n(99091),d=n(32828);const u=(0,a.memo)((({type:e="action",style:t="tertiary",label:n,onClick:u,href:m="",target:p="",disabled:g,action:f,field:h,children:_})=>{if(!n&&!_)return null;const b=(h&&h.button_text?h.button_text:n)||_,{fetchFieldsData:v,showSavedSettingsNotice:E}=(0,s.default)(),{setInitialLoadCompleted:y,setProgress:k}=(0,i.UseCookieScanData)(),{setProgressLoaded:C}=(0,d.default)(),{selectedSubMenuItem:w}=(0,c.default)(),[N,z]=(0,a.useState)(!1),L=`button cmplz-button button--${t} button-${e}`,P=async e=>{await o.doAction(h.action,{}).then((e=>{e.success&&(v(w),"reset_settings"===e.id&&(y(!1),k(0),C(!1)),E(e.message))}))},S=h&&h.warn?h.warn:"";return"action"===e?(0,r.createElement)(r.Fragment,null,l.__experimentalConfirmDialog&&(0,r.createElement)(l.__experimentalConfirmDialog,{isOpen:N,onConfirm:async()=>{z(!1),await P()},onCancel:()=>{z(!1)}},S),(0,r.createElement)("button",{className:L,onClick:async t=>{if("action"!==e||!u)return"action"===e&&f?l.__experimentalConfirmDialog?void(h&&h.warn?z(!0):await P()):void await P():void(window.location.href=h.url);u(t)},disabled:g},b)):"link"===e?(0,r.createElement)("a",{className:L,href:m,target:p},b):void 0}))},81366:(e,t,n)=>{n.r(t),n.d(t,{default:()=>P});var r=n(51609),a=n(58168),o=n(91071),s=n(62133),c=n(9957),l=n(81351),i=n(85357),d=n(31769),u=n(7971),m=n(12579);const p="Checkbox",[g,f]=(0,s.A)(p),[h,_]=g(p),b=(0,r.forwardRef)(((e,t)=>{const{__scopeCheckbox:n,name:s,checked:i,defaultChecked:d,required:u,disabled:p,value:g="on",onCheckedChange:f,..._}=e,[b,k]=(0,r.useState)(null),C=(0,o.s)(t,(e=>k(e))),w=(0,r.useRef)(!1),N=!b||Boolean(b.closest("form")),[z=!1,L]=(0,l.i)({prop:i,defaultProp:d,onChange:f}),P=(0,r.useRef)(z);return(0,r.useEffect)((()=>{const e=null==b?void 0:b.form;if(e){const t=()=>L(P.current);return e.addEventListener("reset",t),()=>e.removeEventListener("reset",t)}}),[b,L]),(0,r.createElement)(h,{scope:n,state:z,disabled:p},(0,r.createElement)(m.sG.button,(0,a.A)({type:"button",role:"checkbox","aria-checked":E(z)?"mixed":z,"aria-required":u,"data-state":y(z),"data-disabled":p?"":void 0,disabled:p,value:g},_,{ref:C,onKeyDown:(0,c.m)(e.onKeyDown,(e=>{"Enter"===e.key&&e.preventDefault()})),onClick:(0,c.m)(e.onClick,(e=>{L((e=>!!E(e)||!e)),N&&(w.current=e.isPropagationStopped(),w.current||e.stopPropagation())}))})),N&&(0,r.createElement)(v,{control:b,bubbles:!w.current,name:s,value:g,checked:z,required:u,disabled:p,style:{transform:"translateX(-100%)"}}))})),v=e=>{const{control:t,checked:n,bubbles:o=!0,...s}=e,c=(0,r.useRef)(null),l=(0,i.Z)(n),u=(0,d.X)(t);return(0,r.useEffect)((()=>{const e=c.current,t=window.HTMLInputElement.prototype,r=Object.getOwnPropertyDescriptor(t,"checked").set;if(l!==n&&r){const t=new Event("click",{bubbles:o});e.indeterminate=E(n),r.call(e,!E(n)&&n),e.dispatchEvent(t)}}),[l,n,o]),(0,r.createElement)("input",(0,a.A)({type:"checkbox","aria-hidden":!0,defaultChecked:!E(n)&&n},s,{tabIndex:-1,ref:c,style:{...e.style,...u,position:"absolute",pointerEvents:"none",opacity:0,margin:0}}))};function E(e){return"indeterminate"===e}function y(e){return E(e)?"indeterminate":e?"checked":"unchecked"}const k=b,C=(0,r.forwardRef)(((e,t)=>{const{__scopeCheckbox:n,forceMount:o,...s}=e,c=_("CheckboxIndicator",n);return(0,r.createElement)(u.C,{present:o||E(c.state)||!0===c.state},(0,r.createElement)(m.sG.span,(0,a.A)({"data-state":y(c.state),"data-disabled":c.disabled?"":void 0},s,{ref:t,style:{pointerEvents:"none",...e.style}})))}));var w=n(27723),N=n(45111),z=n(86087),L=n(79758);const P=(0,z.memo)((({indeterminate:e,label:t,value:n,id:a,onChange:o,required:s,disabled:c,options:l={}})=>{const[i,d]=(0,z.useState)(!1),[u,m]=(0,z.useState)(!1);let p=n;Array.isArray(p)||(p=""===p?[]:[p]),(0,z.useEffect)((()=>{let e=1===Object.keys(l).length&&"true"===Object.keys(l)[0];d(e)}),[]),e&&(n=!0);const g=p;let f=!1;Object.keys(l).length>10&&(f=!0);const h=e=>i?n:g.includes(""+e)||g.includes(parseInt(e)),_=()=>{m(!u)};let b=c&&!Array.isArray(c);return 0===Object.keys(l).length?(0,r.createElement)(r.Fragment,null,(0,w.__)("No options found","complianz-gdpr")):(0,r.createElement)("div",{className:"cmplz-checkbox-group"},Object.entries(l).map((([l,d],m)=>(0,r.createElement)("div",{key:l,className:"cmplz-checkbox-group__item"+(!u&&m>9?" cmplz-hidden":"")},(0,r.createElement)(k,{className:"cmplz-checkbox-group__checkbox",id:a+"_"+l,checked:h(l),"aria-label":t,disabled:b||Array.isArray(c)&&c.includes(l),required:s,onCheckedChange:e=>((e,t)=>{if(i)o(!n);else{const e=g.includes(""+t)||g.includes(parseInt(t))?g.filter((e=>e!==""+t&&e!==parseInt(t))):[...g,t];o(e)}})(0,l)},(0,r.createElement)(C,{className:"cmplz-checkbox-group__indicator"},(0,r.createElement)(N.default,{name:e?"indeterminate":"check",size:14,color:"dark-blue"}))),(0,r.createElement)("label",{className:"cmplz-checkbox-group__label",htmlFor:a+"_"+l},d)))),!u&&f&&(0,r.createElement)(L.default,{onClick:()=>_()},(0,w.__)("Show more","complianz-gdpr")),u&&f&&(0,r.createElement)(L.default,{onClick:()=>_()},(0,w.__)("Show less","complianz-gdpr")))}))},93078:(e,t,n)=>{n.r(t),n.d(t,{default:()=>l});var r=n(51609),a=n(86087),o=n(27723),s=n(40054),c=n(81366);const l=(0,a.memo)((()=>{const[e,t]=(0,a.useState)(!1),[l,i]=(0,a.useState)(!1),[d,u]=(0,a.useState)(null),{pagination:m,setPagination:p,paginationPerPage:g,orderBy:f,setOrderBy:h,totalRecords:_,order:b,setOrder:v,searchValue:E,setSearchValue:y,records:k,downloadUrl:C,deleteRecords:w,recordsLoaded:N,fetchData:z}=(0,s.default)(),[L,P]=(0,a.useState)(""),[S,x]=(0,a.useState)([]),O=!cmplz_settings.is_premium,[A,D]=(0,a.useState)(null);(0,a.useEffect)((()=>{n.e(3757).then(n.bind(n,83757)).then((({default:e})=>{D((()=>e))}))}),[]),(0,a.useEffect)((()=>{!N&&cmplz_settings.is_premium&&z()}),[N]);const I=async()=>{let e=k.filter((e=>S.includes(e.id)&&""!==e.poc_url));x([]);const t=async()=>{if(e.length>0){const n=e.shift(),r=C+"/"+n.poc_url;P(!0);try{let e=new XMLHttpRequest;e.responseType="blob",e.open("get",r,!0),e.send(),e.onreadystatechange=function(){if(4===this.readyState&&200===this.status){let e=window.URL.createObjectURL(this.response),t=window.document.createElement("a");t.setAttribute("href",e),t.setAttribute("download",n.filename),window.document.body.appendChild(t),t.click(),setTimeout((function(){window.URL.revokeObjectURL(e)}),6e4)}},await t()}catch(e){console.error(e),P(!1)}}};await t(),P(!1)},R=((0,o.__)("Opt-in","complianz-gdpr"),(0,o.__)("Opt-out","complianz-gdpr"),(0,o.__)("Other","complianz-gdpr"),e=>(e=e.sort(((e,t)=>e.file<t.file?-1:e.file>t.file?1:0))).filter((e=>e.ip.toLowerCase().includes(E.toLowerCase())||e.services.toLowerCase().includes(E.toLowerCase())||e.id.toLowerCase().includes(E.toLowerCase())))),U=[{name:(0,r.createElement)(c.default,{options:{true:""},indeterminate:e,value:l,onChange:e=>(e=>{if(e){i(!0);let e=m.currentPage?m.currentPage:1,t=R(k).slice((e-1)*g,e*g);x(t.map((e=>e.id)))}else i(!1),x([]);t(!1)})(e)}),selector:e=>e.selectControl,grow:1,minWidth:"50px"},{name:(0,o.__)("User ID","complianz-gdpr"),selector:e=>e.id,sortable:!0,grow:3},{name:(0,o.__)("IP Address","complianz-gdpr"),selector:e=>e.ip,sortable:!0,grow:4},{name:(0,o.__)("Region","complianz-gdpr"),selector:e=>""!==e.region?(0,r.createElement)("img",{alt:"region",width:"20px",height:"20px",src:cmplz_settings.plugin_url+"assets/images/"+e.region+".svg"}):(0,o.__)("Other","complianz-gdpr"),sortable:!0,grow:2},{name:(0,o.__)("Services","complianz-gdpr"),selector:e=>e.services,sortable:!0,grow:5},{name:(0,o.__)("Categories","complianz-gdpr"),selector:e=>(e=>{let t={do_not_track:(0,o.__)("DNT/GPC","complianz-gdpr"),no_choice:(0,o.__)("No Choice","complianz-gdpr"),no_warning:(0,o.__)("No Warning","complianz-gdpr"),functional:(0,o.__)("Functional","complianz-gdpr"),preferences:(0,o.__)("Preferences","complianz-gdpr"),statistics:(0,o.__)("Statistics","complianz-gdpr"),marketing:(0,o.__)("Marketing","complianz-gdpr")},n=[];return Object.keys(t).forEach((r=>{1===parseInt(e[r])&&n.push(t[r])})),n.join(", ")})(e),sortable:!0,grow:7},{name:(0,o.__)("Date","complianz-gdpr"),selector:e=>e.time,sortable:!0,grow:4,minWidth:"200px",right:!0}];let T=[...k];T=R(T);let M=[];return T.forEach((e=>{let n={...e};n.selectControl=(0,r.createElement)(c.default,{value:S.includes(n.id),options:{true:""},onChange:e=>((e,n)=>{let r=[...S];e?r.includes(n)||(r.push(n),x(r)):(r=[...S.filter((e=>e!==n))],x(r));let a=m.currentPage?m.currentPage:1,o=R(k).slice((a-1)*g,a*g),s=!0,c=!1;o.forEach((e=>{r.includes(e.id)?c=!0:s=!1})),s?(i(!0),t(!1)):c?(i(!1),t(!0)):t(!1)})(e,n.id)}),M.push(n)})),(0,r.createElement)(r.Fragment,null,O&&(0,r.createElement)(r.Fragment,null,(0,r.createElement)("div",{className:"cmplz-settings-overlay"},(0,r.createElement)("div",{className:"cmplz-settings-overlay-message"}))),(0,r.createElement)("div",{className:"cmplz-table-header"},(0,r.createElement)("div",{className:"cmplz-table-header-controls"},(0,r.createElement)("input",{className:"cmplz-datatable-search",type:"text",placeholder:(0,o.__)("Search","complianz-gdpr"),value:E,onChange:e=>(e=>{clearTimeout(d),y(e);const t=setTimeout((()=>{z(g,1,f,b)}),500);u(t)})(e.target.value)}))),S.length>0&&(0,r.createElement)("div",{className:"cmplz-selected-document"},S.length>1&&(0,o.__)("%s items selected","complianz-gdpr").replace("%s",S.length),1===S.length&&(0,o.__)("1 item selected","complianz-gdpr"),(0,r.createElement)("div",{className:"cmplz-selected-document-controls"},k.filter((e=>S.includes(e.id)&&""!==e.poc_url)).length>0&&(0,r.createElement)("button",{disabled:L,className:"button button-default cmplz-btn-reset",onClick:()=>I()},(0,o.__)("Download Proof of Consent","complianz-gdpr")),(0,r.createElement)("button",{className:"button button-default cmplz-reset-button",onClick:()=>(async e=>{x([]),await w(e)})(S)},(0,o.__)("Delete","complianz-gdpr")))),!O&&A&&(0,r.createElement)(r.Fragment,null,(0,r.createElement)(A,{columns:U,data:M,dense:!0,pagination:!0,paginationTotalRows:_,paginationServer:!0,noDataComponent:(0,r.createElement)("div",{className:"cmplz-no-documents"},(0,o.__)("No records","complianz-gdpr")),persistTableHead:!0,theme:"really-simple-plugins",customStyles:{headCells:{style:{paddingLeft:"0",paddingRight:"0"}},cells:{style:{paddingLeft:"0",paddingRight:"0"}}},paginationPerPage:g,onChangePage:e=>{p({...m,currentPage:e}),z()},paginationState:m,sortServer:!0,onSort:async(e,t)=>{h(e.orderId),v(t),z()}})))}))},40054:(e,t,n)=>{n.r(t),n.d(t,{default:()=>o});var r=n(81621),a=n(9588);const o=(0,r.vt)(((e,t)=>({recordsLoaded:!1,fetching:!1,generating:!1,progress:!1,records:[],exportLink:"",downloadUrl:"",regions:[],fields:[],noData:!1,totalRecords:0,searchValue:"",setSearchValue:t=>e({searchValue:t}),paginationPerPage:10,pagination:{currentPage:1},setPagination:t=>e({pagination:t}),orderBy:"ID",setOrderBy:t=>e({orderBy:t}),order:"DESC",setOrder:t=>e({order:t}),deleteRecords:async n=>{let r=t().records.filter((e=>n.includes(e.id)));e((e=>({records:e.records.filter((e=>!n.includes(e.id)))})));let o={};o.records=r,await a.doAction("delete_records_of_consent",o).then((e=>e)).catch((e=>{console.error(e)}))},fetchData:async()=>{if(t().fetching)return;e({fetching:!0});let n={};n.per_page=t().paginationPerPage,n.page=t().pagination.currentPage,n.order=t().order.toUpperCase(),n.orderBy=t().orderBy,n.search=t().searchValue;const{records:r,totalRecords:o,regions:s,download_url:c}=await a.doAction("get_records_of_consent",n).then((e=>e)).catch((e=>{console.error(e)}));e((()=>({recordsLoaded:!0,records:r,regions:s,totalRecords:o,downloadUrl:c,fetching:!1})))},startExport:async()=>{e({generating:!0,progress:0,exportLink:""})},fetchExportRecordsOfConsentProgress:async(t,n,r)=>{(t=void 0!==t&&t)||e({generating:!0});let o={};o.startDate=n,o.endDate=r,o.statusOnly=t;const{progress:s,exportLink:c,noData:l}=await a.doAction("export_records_of_consent",o).then((e=>e)).catch((e=>{console.error(e)}));let i=!1;s<100&&(i=!0),e({progress:s,exportLink:c,generating:i,noData:l})}})))},7971:(e,t,n)=>{n.d(t,{C:()=>c});var r=n(51609),a=n(75795),o=n(91071),s=n(88200);const c=e=>{const{present:t,children:n}=e,c=function(e){const[t,n]=(0,r.useState)(),o=(0,r.useRef)({}),c=(0,r.useRef)(e),i=(0,r.useRef)("none"),d=e?"mounted":"unmounted",[u,m]=function(e,t){return(0,r.useReducer)(((e,n)=>{const r=t[e][n];return null!=r?r:e}),e)}(d,{mounted:{UNMOUNT:"unmounted",ANIMATION_OUT:"unmountSuspended"},unmountSuspended:{MOUNT:"mounted",ANIMATION_END:"unmounted"},unmounted:{MOUNT:"mounted"}});return(0,r.useEffect)((()=>{const e=l(o.current);i.current="mounted"===u?e:"none"}),[u]),(0,s.N)((()=>{const t=o.current,n=c.current;if(n!==e){const r=i.current,a=l(t);e?m("MOUNT"):"none"===a||"none"===(null==t?void 0:t.display)?m("UNMOUNT"):m(n&&r!==a?"ANIMATION_OUT":"UNMOUNT"),c.current=e}}),[e,m]),(0,s.N)((()=>{if(t){const e=e=>{const n=l(o.current).includes(e.animationName);e.target===t&&n&&(0,a.flushSync)((()=>m("ANIMATION_END")))},n=e=>{e.target===t&&(i.current=l(o.current))};return t.addEventListener("animationstart",n),t.addEventListener("animationcancel",e),t.addEventListener("animationend",e),()=>{t.removeEventListener("animationstart",n),t.removeEventListener("animationcancel",e),t.removeEventListener("animationend",e)}}m("ANIMATION_END")}),[t,m]),{isPresent:["mounted","unmountSuspended"].includes(u),ref:(0,r.useCallback)((e=>{e&&(o.current=getComputedStyle(e)),n(e)}),[])}}(t),i="function"==typeof n?n({present:c.isPresent}):r.Children.only(n),d=(0,o.s)(c.ref,i.ref);return"function"==typeof n||c.isPresent?(0,r.cloneElement)(i,{ref:d}):null};function l(e){return(null==e?void 0:e.animationName)||"none"}c.displayName="Presence"},85357:(e,t,n)=>{n.d(t,{Z:()=>a});var r=n(51609);function a(e){const t=(0,r.useRef)({value:e,previous:e});return(0,r.useMemo)((()=>(t.current.value!==e&&(t.current.previous=t.current.value,t.current.value=e),t.current.previous)),[e])}}}]);