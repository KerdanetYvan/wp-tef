"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[4521],{58168:(e,n,t)=>{function r(){return r=Object.assign?Object.assign.bind():function(e){for(var n=1;n<arguments.length;n++){var t=arguments[n];for(var r in t)Object.prototype.hasOwnProperty.call(t,r)&&(e[r]=t[r])}return e},r.apply(this,arguments)}t.d(n,{A:()=>r})},9957:(e,n,t)=>{function r(e,n,{checkForDefaultPrevented:t=!0}={}){return function(r){if(null==e||e(r),!1===t||!r.defaultPrevented)return null==n?void 0:n(r)}}t.d(n,{m:()=>r})},91071:(e,n,t)=>{t.d(n,{s:()=>c,t:()=>o});var r=t(51609);function o(...e){return n=>e.forEach((e=>function(e,n){"function"==typeof e?e(n):null!=e&&(e.current=n)}(e,n)))}function c(...e){return(0,r.useCallback)(o(...e),e)}},62133:(e,n,t)=>{t.d(n,{A:()=>o});var r=t(51609);function o(e,n=[]){let t=[];const o=()=>{const n=t.map((e=>(0,r.createContext)(e)));return function(t){const o=(null==t?void 0:t[e])||n;return(0,r.useMemo)((()=>({[`__scope${e}`]:{...t,[e]:o}})),[t,o])}};return o.scopeName=e,[function(n,o){const c=(0,r.createContext)(o),i=t.length;function u(n){const{scope:t,children:o,...u}=n,l=(null==t?void 0:t[e][i])||c,s=(0,r.useMemo)((()=>u),Object.values(u));return(0,r.createElement)(l.Provider,{value:s},o)}return t=[...t,o],u.displayName=n+"Provider",[u,function(t,u){const l=(null==u?void 0:u[e][i])||c,s=(0,r.useContext)(l);if(s)return s;if(void 0!==o)return o;throw new Error(`\`${t}\` must be used within \`${n}\``)}]},c(o,...n)]}function c(...e){const n=e[0];if(1===e.length)return n;const t=()=>{const t=e.map((e=>({useScope:e(),scopeName:e.scopeName})));return function(e){const o=t.reduce(((n,{useScope:t,scopeName:r})=>({...n,...t(e)[`__scope${r}`]})),{});return(0,r.useMemo)((()=>({[`__scope${n.scopeName}`]:o})),[o])}};return t.scopeName=n.scopeName,t}},12579:(e,n,t)=>{t.d(n,{hO:()=>l,sG:()=>u});var r=t(58168),o=t(51609),c=t(75795),i=t(33362);const u=["a","button","div","form","h2","h3","img","input","label","li","nav","ol","p","span","svg","ul"].reduce(((e,n)=>{const t=(0,o.forwardRef)(((e,t)=>{const{asChild:c,...u}=e,l=c?i.DX:n;return(0,o.useEffect)((()=>{window[Symbol.for("radix-ui")]=!0}),[]),(0,o.createElement)(l,(0,r.A)({},u,{ref:t}))}));return t.displayName=`Primitive.${n}`,{...e,[n]:t}}),{});function l(e,n){e&&(0,c.flushSync)((()=>e.dispatchEvent(n)))}},33362:(e,n,t)=>{t.d(n,{DX:()=>i});var r=t(58168),o=t(51609),c=t(91071);const i=(0,o.forwardRef)(((e,n)=>{const{children:t,...c}=e,i=o.Children.toArray(t),l=i.find(s);if(l){const e=l.props.children,t=i.map((n=>n===l?o.Children.count(e)>1?o.Children.only(null):(0,o.isValidElement)(e)?e.props.children:null:n));return(0,o.createElement)(u,(0,r.A)({},c,{ref:n}),(0,o.isValidElement)(e)?(0,o.cloneElement)(e,void 0,t):null)}return(0,o.createElement)(u,(0,r.A)({},c,{ref:n}),t)}));i.displayName="Slot";const u=(0,o.forwardRef)(((e,n)=>{const{children:t,...r}=e;return(0,o.isValidElement)(t)?(0,o.cloneElement)(t,{...a(r,t.props),ref:n?(0,c.t)(n,t.ref):t.ref}):o.Children.count(t)>1?o.Children.only(null):null}));u.displayName="SlotClone";const l=({children:e})=>(0,o.createElement)(o.Fragment,null,e);function s(e){return(0,o.isValidElement)(e)&&e.type===l}function a(e,n){const t={...n};for(const r in n){const o=e[r],c=n[r];/^on[A-Z]/.test(r)?o&&c?t[r]=(...e)=>{c(...e),o(...e)}:o&&(t[r]=o):"style"===r?t[r]={...o,...c}:"className"===r&&(t[r]=[o,c].filter(Boolean).join(" "))}return{...e,...t}}},10263:(e,n,t)=>{t.d(n,{c:()=>o});var r=t(51609);function o(e){const n=(0,r.useRef)(e);return(0,r.useEffect)((()=>{n.current=e})),(0,r.useMemo)((()=>(...e)=>{var t;return null===(t=n.current)||void 0===t?void 0:t.call(n,...e)}),[])}},81351:(e,n,t)=>{t.d(n,{i:()=>c});var r=t(51609),o=t(10263);function c({prop:e,defaultProp:n,onChange:t=(()=>{})}){const[c,i]=function({defaultProp:e,onChange:n}){const t=(0,r.useState)(e),[c]=t,i=(0,r.useRef)(c),u=(0,o.c)(n);return(0,r.useEffect)((()=>{i.current!==c&&(u(c),i.current=c)}),[c,i,u]),t}({defaultProp:n,onChange:t}),u=void 0!==e,l=u?e:c,s=(0,o.c)(t);return[l,(0,r.useCallback)((n=>{if(u){const t="function"==typeof n?n(e):n;t!==e&&s(t)}else i(n)}),[u,e,i,s])]}},88200:(e,n,t)=>{t.d(n,{N:()=>o});var r=t(51609);const o=Boolean(null===globalThis||void 0===globalThis?void 0:globalThis.document)?r.useLayoutEffect:()=>{}},31769:(e,n,t)=>{t.d(n,{X:()=>c});var r=t(51609),o=t(88200);function c(e){const[n,t]=(0,r.useState)(void 0);return(0,o.N)((()=>{if(e){t({width:e.offsetWidth,height:e.offsetHeight});const n=new ResizeObserver((n=>{if(!Array.isArray(n))return;if(!n.length)return;const r=n[0];let o,c;if("borderBoxSize"in r){const e=r.borderBoxSize,n=Array.isArray(e)?e[0]:e;o=n.inlineSize,c=n.blockSize}else o=e.offsetWidth,c=e.offsetHeight;t({width:o,height:c})}));return n.observe(e,{box:"border-box"}),()=>n.unobserve(e)}t(void 0)}),[e]),n}}}]);