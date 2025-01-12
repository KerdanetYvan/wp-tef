"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[9877,6231,9541,9056],{76231:(e,t,n)=>{n.r(t),n.d(t,{steps:()=>i,useNewOnboardingData:()=>c});var s=n(9588),r=n(81621),l=n(27723);const i={welcome:{title:(0,l.__)("Welcome to Complianz","complianz-gdpr"),prevButton:(0,l.__)("No, Thanks","complianz-gdpr"),nextButton:(0,l.__)("Continue","complianz-gdpr"),prevButtonGoTo:"newsletter",nextButtonGoTo:"terms"},terms:{title:(0,l.__)("Terms and Conditions","complianz-gdpr"),prevButton:(0,l.__)("Dismiss","complianz-gdpr"),nextButton:(0,l.__)("Continue","complianz-gdpr"),prevButtonGoTo:"newsletter",nextButtonGoTo:"newsletter"},newsletter:{title:(0,l.__)("Get tips and tricks","complianz-gdpr"),prevButton:(0,l.__)("Skip","complianz-gdpr"),nextButton:(0,l.__)("Continue","complianz-gdpr"),prevButtonGoTo:"plugins",nextButtonGoTo:"plugins"},plugins:{title:(0,l.__)("Install quickly for free","complianz-gdpr"),prevButton:(0,l.__)("Skip","complianz-gdpr"),nextButton:(0,l.__)("Continue","complianz-gdpr"),nextButtonSecondary:(0,l.__)("Install","complianz-gdpr"),nextButtonThird:(0,l.__)("Installing ...","complianz-gdpr"),prevButtonGoTo:"thankYou",nextButtonGoTo:"thankYou"},thankYou:{title:(0,l.__)("You’re almost there...","complianz-gdpr"),nextButton:(0,l.__)("Close","complianz-gdpr"),nextButtonGoTo:!1}},a=[{slug:"complianz-terms-conditions",description:(0,l.__)("Missing Terms & Conditions? Generate now","complianz-gdpr"),status:"not-installed",processing:!1},{slug:"burst-statistics",premium:"burst-pro",description:(0,l.__)("Privacy-friendly Analytics? Get started","complianz-gdpr"),status:"not-installed",processing:!1},{slug:"really-simple-ssl",description:(0,l.__)("Really Simple Security? Let’s go","complianz-gdpr"),status:"not-installed",processing:!1}],o=async(e,t,n,r)=>{r((e=>({plugins:e.plugins.map((e=>e.slug===n.slug?{...e,status:"processing"}:e))})));const l={slug:n.slug,plugins:e};try{let e="";if("install_plugin"===t){const r=await s.doAction(t,l);if(!r.request_success)throw new Error("API Error: installing plugin.");const i=r.plugins.find((e=>e.slug===n.slug)).status||"not-installed";if("not-installed"===i)throw new Error("Error installing plugin.");e=i}const i=await s.doAction("activate_plugin",l);if(!i.request_success)throw new Error("API Error: installing plugin.");const a=i.plugins.find((e=>e.slug===n.slug)).status;if("activated"!==a)throw new Error("Error activating plugin.");e=a,r((t=>({plugins:t.plugins.map((t=>t.slug===n.slug?{...t,status:e}:t))})))}catch(e){r({isInstalling:!1}),console.error("Plugin installation error:",e)}},c=(0,r.vt)(((e,t)=>({isModalOpen:!0,isOnboardingComplete:!1,currentStep:"welcome",stepProcessing:!1,isLoading:!1,isContentLoading:!0,setIsContentLoading:t=>e({isContentLoading:t}),nextStepDisabled:!1,prevStepDisabled:!1,wscEmail:"",enableWsc:!1,emailError:"",termsAccepted:!1,wscTerms:"",newsletterAccepted:!1,newsletterEmail:"",newsletterTerms:"",fetchError:!1,fetchErrorMessage:"",fetchDoc:async()=>{e({isLoading:!0,fetchError:!1,fetchErrorMessage:""});const n=t().currentStep;let r="terms"===n?"get_wsc_terms":"get_newsletter_terms";const i=await s.doAction(r);i.request_success||e({fetchError:!0,fetchErrorMessage:(0,l.__)("Something went wrong while downloading the document.","complianz-gdpr")});const a=i.doc;a?"terms"===n?e({wscTerms:a,isLoading:!1}):"newsletter"===n&&e({newsletterTerms:a,isLoading:!1}):e({fetchError:!0,fetchErrorMessage:(0,l.__)("Something went wrong while downloading the document.","complianz-gdpr"),isLoading:!1})},suggestedPlugins:a,plugins:[],fetchPlugins:async()=>{try{const t=await s.doAction("get_recommended_plugins_status",{plugins:a});if(!t.request_success)throw new Error("Error fetching.");const n=t.plugins.map((e=>({...e,checked:"activated"===e.status||!1,toProcess:!1})));e({plugins:n})}catch(e){throw new Error("Api error:",e)}},enablePluginInstallation:!1,isInstalling:!1,setWscEmail:t=>e({wscEmail:t}),setEnableWsc:t=>e({enableWsc:t}),setEmailError:t=>e({emailError:t}),setNewsletterEmail:t=>e({newsletterEmail:t}),setNextStepDisabled:t=>e({nextStepDisabled:t}),setPrevStepDisabled:t=>e({prevStepDisabled:t}),setPlugins:t=>e({plugins:t}),setEnablePluginInstallation:t=>e({enablePluginInstallation:t}),closeModal:async t=>{if(t&&!(await s.doAction("dismiss_wsc_onboarding")).request_success)throw new Error("Error fetching.");const n=new URL(window.location.href);n.searchParams.delete("websitescan"),window.history.pushState({},"",n.href),e({isModalOpen:!1})},goToPrevStep:()=>e((e=>{const t="welcome"===e.currentStep?"newsletter":i[e.currentStep].prevButtonGoTo;return{...e,currentStep:t,stepProcessing:!1}})),goToNextStep:()=>e((async n=>{let r=i[n.currentStep].nextButtonGoTo;e({stepProcessing:!0});try{switch(n.currentStep){case"welcome":0===n.wscEmail.length?(e({enableWsc:!1}),r="newsletter"):e({enableWsc:!0});break;case"terms":let l=t().wscEmail;if(e({termsAccepted:!0,newsletterEmail:l,isLoading:!0}),!(await s.doAction("signup_wsc",{email:l,timestamp:(new Date).getTime(),url:window.location.href})).request_success)throw new Error("Error fetching.");e({isLoading:!1});break;case"newsletter":let i=t().newsletterEmail;if(e({newsletterAccepted:!0,isLoading:!0}),!(await s.doAction("signup_newsletter",{email:i,timestamp:(new Date).getTime(),url:window.location.href})).request_success)throw new Error("Error fetching.");e({isLoading:!1});break;case"plugins":if(!t().enablePluginInstallation)break;const a=t().plugins.filter((e=>e.toProcess));if(a.length<=0)break;const c=t().suggestedPlugins;e({isInstalling:!0});for(const t of a)"not-installed"===t.status?await o(c,"install_plugin",t,e):"installed"===t.status&&await o(c,"activate_plugin",t,e);return void e({isInstalling:!1,stepProcessing:!1,enablePluginInstallation:!1});case"thankYou":e({isOnboardingComplete:!0}),t().closeModal()}e({currentStep:r,stepProcessing:!1})}catch(t){console.error("Error during step transition:",t),e({stepProcessing:!1})}})),isValidEmail:e=>0===e.length||/^[\w-]+(\.[\w-]+)*@[^\s@]+\.[a-zA-Z]{2,}$/.test(e)})))},19541:(e,t,n)=>{n.r(t),n.d(t,{default:()=>r});var s=n(51609);const r=({type:e,className:t="",error:n="",...r})=>{if(e)return"email"===e?(0,s.createElement)("div",{className:`cmplz-websitescan-input-wrapper ${e}`},(0,s.createElement)("input",{className:`${t} cmplz-websitescan-input`,type:"email",...r}),n&&(0,s.createElement)("span",{className:"cmplz-websitescan-input-invalid"},n)):"checkbox"===e?(0,s.createElement)("div",{className:`cmplz-websitescan-input-wrapper ${e}`},(0,s.createElement)("input",{className:`${t} cmplz-websitescan-input`,type:"checkbox",...r})):null}},89056:(e,t,n)=>{n.r(t),n.d(t,{default:()=>l});var s=n(51609),r=n(76231);const l=({children:e})=>{const{fetchErrorMessage:t}=(0,r.useNewOnboardingData)();return(0,s.createElement)("div",{className:"cmplz-onboarding__error"},(0,s.createElement)("p",null,t),(0,s.createElement)("div",null,e))}},89877:(e,t,n)=>{n.r(t),n.d(t,{default:()=>g});var s=n(51609),r=n(27723),l=n(86087),i=n(76231),a=n(42838),o=n.n(a),c=n(19541),p=n(99695),u=n(89056);const g=()=>{const{wscEmail:e,newsletterEmail:t,setNewsletterEmail:n,emailError:a,setEmailError:g,enableWsc:d,isValidEmail:m,setNextStepDisabled:w,currentStep:_,newsletterTerms:E,isContentLoading:h,setIsContentLoading:f,fetchError:b,fetchDoc:z}=(0,i.useNewOnboardingData)();(0,l.useEffect)((()=>{n(e)}),[e]),(0,l.useEffect)((()=>{(async()=>{try{f(!0),await z()}catch(e){console.log(e)}finally{f(!1)}})()}),[z]);const v=o().sanitize(E,{ADD_ATTR:["target"]});return(0,s.createElement)("div",{className:`cmplz-modal-content-step ${_}`},h?(0,s.createElement)(p.default,null):(0,s.createElement)(s.Fragment,null,(0,s.createElement)("p",null,(0,r.__)("We want you to get the most out of Complianz. So over the next week we'll be sending eight tips and tricks to your inbox - be sure to keep a lookout.","complianz-gdpr")),b&&(0,s.createElement)(u.default,null,(0,s.createElement)("button",{className:"button button-default",onClick:z},(0,r.__)("Try again!","complianz-gdpr"))),v&&(0,s.createElement)(s.Fragment,null,(0,s.createElement)("div",{className:"wrap-terms",dangerouslySetInnerHTML:{__html:v}}),!d&&(0,s.createElement)(c.default,{type:"email",onChange:e=>{const t=e.target.value;n(t);const s=m(t);g(s?"":(0,r.__)("Please enter a valid email address.","complianz-gdpr")),w(!s)},value:t,placeholder:(0,r.__)("Your email address","complianz-gdpr"),error:a}))))}}}]);