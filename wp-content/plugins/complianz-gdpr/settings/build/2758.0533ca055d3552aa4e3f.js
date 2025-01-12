"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[2758],{52164:(e,r,a)=>{a.d(r,{A:()=>D});var t=a(98587),o=a(58168),n=a(51609),i=a(34164),l=a(64111);let p=0;const s=n["useId".toString()];var c=a(28466),d=a(10312),u=a(20973),h=a(60538),m=a(18291),g=a(9245),A=a(27553),x=a(22996);function y(e){return(0,x.Ay)("MuiDialog",e)}const v=(0,A.A)("MuiDialog",["root","scrollPaper","scrollBody","container","paper","paperScrollPaper","paperScrollBody","paperWidthFalse","paperWidthXs","paperWidthSm","paperWidthMd","paperWidthLg","paperWidthXl","paperFullWidth","paperFullScreen"]);var f=a(28102),b=a(47419),W=a(44675),S=a(74848);const w=["aria-describedby","aria-labelledby","BackdropComponent","BackdropProps","children","className","disableEscapeKeyDown","fullScreen","fullWidth","maxWidth","onBackdropClick","onClose","open","PaperComponent","PaperProps","scroll","TransitionComponent","transitionDuration","TransitionProps"],k=(0,g.Ay)(b.A,{name:"MuiDialog",slot:"Backdrop",overrides:(e,r)=>r.backdrop})({zIndex:-1}),B=(0,g.Ay)(d.A,{name:"MuiDialog",slot:"Root",overridesResolver:(e,r)=>r.root})({"@media print":{position:"absolute !important"}}),M=(0,g.Ay)("div",{name:"MuiDialog",slot:"Container",overridesResolver:(e,r)=>{const{ownerState:a}=e;return[r.container,r[`scroll${(0,c.A)(a.scroll)}`]]}})((({ownerState:e})=>(0,o.A)({height:"100%","@media print":{height:"auto"},outline:0},"paper"===e.scroll&&{display:"flex",justifyContent:"center",alignItems:"center"},"body"===e.scroll&&{overflowY:"auto",overflowX:"hidden",textAlign:"center","&::after":{content:'""',display:"inline-block",verticalAlign:"middle",height:"100%",width:"0"}}))),C=(0,g.Ay)(h.A,{name:"MuiDialog",slot:"Paper",overridesResolver:(e,r)=>{const{ownerState:a}=e;return[r.paper,r[`scrollPaper${(0,c.A)(a.scroll)}`],r[`paperWidth${(0,c.A)(String(a.maxWidth))}`],a.fullWidth&&r.paperFullWidth,a.fullScreen&&r.paperFullScreen]}})((({theme:e,ownerState:r})=>(0,o.A)({margin:32,position:"relative",overflowY:"auto","@media print":{overflowY:"visible",boxShadow:"none"}},"paper"===r.scroll&&{display:"flex",flexDirection:"column",maxHeight:"calc(100% - 64px)"},"body"===r.scroll&&{display:"inline-block",verticalAlign:"middle",textAlign:"left"},!r.maxWidth&&{maxWidth:"calc(100% - 64px)"},"xs"===r.maxWidth&&{maxWidth:"px"===e.breakpoints.unit?Math.max(e.breakpoints.values.xs,444):`max(${e.breakpoints.values.xs}${e.breakpoints.unit}, 444px)`,[`&.${v.paperScrollBody}`]:{[e.breakpoints.down(Math.max(e.breakpoints.values.xs,444)+64)]:{maxWidth:"calc(100% - 64px)"}}},r.maxWidth&&"xs"!==r.maxWidth&&{maxWidth:`${e.breakpoints.values[r.maxWidth]}${e.breakpoints.unit}`,[`&.${v.paperScrollBody}`]:{[e.breakpoints.down(e.breakpoints.values[r.maxWidth]+64)]:{maxWidth:"calc(100% - 64px)"}}},r.fullWidth&&{width:"calc(100% - 64px)"},r.fullScreen&&{margin:0,width:"100%",maxWidth:"100%",height:"100%",maxHeight:"none",borderRadius:0,[`&.${v.paperScrollBody}`]:{margin:0,maxWidth:"100%"}}))),D=n.forwardRef((function(e,r){const a=(0,m.A)({props:e,name:"MuiDialog"}),d=(0,W.A)(),g={enter:d.transitions.duration.enteringScreen,exit:d.transitions.duration.leavingScreen},{"aria-describedby":A,"aria-labelledby":x,BackdropComponent:v,BackdropProps:b,children:D,className:P,disableEscapeKeyDown:$=!1,fullScreen:R=!1,fullWidth:T=!1,maxWidth:N="sm",onBackdropClick:j,onClose:F,open:E,PaperComponent:I=h.A,PaperProps:K={},scroll:z="paper",TransitionComponent:X=u.A,transitionDuration:Y=g,TransitionProps:H}=a,L=(0,t.A)(a,w),_=(0,o.A)({},a,{disableEscapeKeyDown:$,fullScreen:R,fullWidth:T,maxWidth:N,scroll:z}),J=(e=>{const{classes:r,scroll:a,maxWidth:t,fullWidth:o,fullScreen:n}=e,i={root:["root"],container:["container",`scroll${(0,c.A)(a)}`],paper:["paper",`paperScroll${(0,c.A)(a)}`,`paperWidth${(0,c.A)(String(t))}`,o&&"paperFullWidth",n&&"paperFullScreen"]};return(0,l.A)(i,y,r)})(_),O=n.useRef(),q=function(e){if(void 0!==s){const r=s();return null!=e?e:r}return function(e){const[r,a]=n.useState(e),t=e||r;return n.useEffect((()=>{null==r&&(p+=1,a(`mui-${p}`))}),[r]),t}(e)}(x),G=n.useMemo((()=>({titleId:q})),[q]);return(0,S.jsx)(B,(0,o.A)({className:(0,i.A)(J.root,P),closeAfterTransition:!0,components:{Backdrop:k},componentsProps:{backdrop:(0,o.A)({transitionDuration:Y,as:v},b)},disableEscapeKeyDown:$,onClose:F,open:E,ref:r,onClick:e=>{O.current&&(O.current=null,j&&j(e),F&&F(e,"backdropClick"))},ownerState:_},L,{children:(0,S.jsx)(X,(0,o.A)({appear:!0,in:E,timeout:Y,role:"presentation"},H,{children:(0,S.jsx)(M,{className:(0,i.A)(J.container),onMouseDown:e=>{O.current=e.target===e.currentTarget},ownerState:_,children:(0,S.jsx)(C,(0,o.A)({as:I,elevation:24,role:"dialog","aria-describedby":A,"aria-labelledby":q},K,{className:(0,i.A)(J.paper,K.className),ownerState:_,children:(0,S.jsx)(f.A.Provider,{value:G,children:D})}))})}))}))}))},28102:(e,r,a)=>{a.d(r,{A:()=>t});const t=a(51609).createContext({})},89737:(e,r,a)=>{a.d(r,{A:()=>k});var t=a(58168),o=a(98587),n=a(51609),i=a(34164),l=a(64111),p=a(39599),s=a(9245),c=a(18291),d=a(28466),u=a(27553),h=a(22996);function m(e){return(0,h.Ay)("MuiTypography",e)}(0,u.A)("MuiTypography",["root","h1","h2","h3","h4","h5","h6","subtitle1","subtitle2","body1","body2","inherit","button","caption","overline","alignLeft","alignRight","alignCenter","alignJustify","noWrap","gutterBottom","paragraph"]);var g=a(74848);const A=["align","className","component","gutterBottom","noWrap","paragraph","variant","variantMapping"],x=(0,s.Ay)("span",{name:"MuiTypography",slot:"Root",overridesResolver:(e,r)=>{const{ownerState:a}=e;return[r.root,a.variant&&r[a.variant],"inherit"!==a.align&&r[`align${(0,d.A)(a.align)}`],a.noWrap&&r.noWrap,a.gutterBottom&&r.gutterBottom,a.paragraph&&r.paragraph]}})((({theme:e,ownerState:r})=>(0,t.A)({margin:0},"inherit"===r.variant&&{font:"inherit"},"inherit"!==r.variant&&e.typography[r.variant],"inherit"!==r.align&&{textAlign:r.align},r.noWrap&&{overflow:"hidden",textOverflow:"ellipsis",whiteSpace:"nowrap"},r.gutterBottom&&{marginBottom:"0.35em"},r.paragraph&&{marginBottom:16}))),y={h1:"h1",h2:"h2",h3:"h3",h4:"h4",h5:"h5",h6:"h6",subtitle1:"h6",subtitle2:"h6",body1:"p",body2:"p",inherit:"p"},v={primary:"primary.main",textPrimary:"text.primary",secondary:"secondary.main",textSecondary:"text.secondary",error:"error.main"},f=n.forwardRef((function(e,r){const a=(0,c.A)({props:e,name:"MuiTypography"}),n=(e=>v[e]||e)(a.color),s=(0,p.A)((0,t.A)({},a,{color:n})),{align:u="inherit",className:h,component:f,gutterBottom:b=!1,noWrap:W=!1,paragraph:S=!1,variant:w="body1",variantMapping:k=y}=s,B=(0,o.A)(s,A),M=(0,t.A)({},s,{align:u,color:n,className:h,component:f,gutterBottom:b,noWrap:W,paragraph:S,variant:w,variantMapping:k}),C=f||(S?"p":k[w]||y[w])||"span",D=(e=>{const{align:r,gutterBottom:a,noWrap:t,paragraph:o,variant:n,classes:i}=e,p={root:["root",n,"inherit"!==e.align&&`align${(0,d.A)(r)}`,a&&"gutterBottom",t&&"noWrap",o&&"paragraph"]};return(0,l.A)(p,m,i)})(M);return(0,g.jsx)(x,(0,t.A)({as:C,ref:r,ownerState:M,className:(0,i.A)(D.root,h)},B))}));var b=a(61435),W=a(28102);const S=["className","id"],w=(0,s.Ay)(f,{name:"MuiDialogTitle",slot:"Root",overridesResolver:(e,r)=>r.root})({padding:"16px 24px",flex:"0 0 auto"}),k=n.forwardRef((function(e,r){const a=(0,c.A)({props:e,name:"MuiDialogTitle"}),{className:p,id:s}=a,d=(0,o.A)(a,S),u=a,h=(e=>{const{classes:r}=e;return(0,l.A)({root:["root"]},b.t,r)})(u),{titleId:m=s}=n.useContext(W.A);return(0,g.jsx)(w,(0,t.A)({component:"h2",className:(0,i.A)(h.root,p),ownerState:u,ref:r,variant:"h6",id:null!=s?s:m},d))}))},61435:(e,r,a)=>{a.d(r,{A:()=>i,t:()=>n});var t=a(27553),o=a(22996);function n(e){return(0,o.Ay)("MuiDialogTitle",e)}const i=(0,t.A)("MuiDialogTitle",["root"])},28466:(e,r,a)=>{a.d(r,{A:()=>t});const t=a(38659).A}}]);