"use strict";(self.webpackChunkcomplianz_gdpr=self.webpackChunkcomplianz_gdpr||[]).push([[5683],{35683:(e,s,c)=>{c.r(s),c.d(s,{default:()=>n});var t=c(81621),i=c(9588);const n=(0,t.vt)(((e,s)=>({licenseStatus:cmplz_settings.licenseStatus,processing:!1,licenseNotices:[],noticesLoaded:!1,getLicenseNotices:async()=>{const{licenseStatus:s,notices:c}=await i.doAction("license_notices",{}).then((e=>e));e((e=>({noticesLoaded:!0,licenseNotices:c,licenseStatus:s})))},activateLicense:async s=>{let c={};c.license=s,e({processing:!0});const{licenseStatus:t,notices:n}=await i.doAction("activate_license",c);e((e=>({processing:!1,licenseNotices:n,licenseStatus:t})))},deactivateLicense:async()=>{e({processing:!0});const{licenseStatus:s,notices:c}=await i.doAction("deactivate_license");e((e=>({processing:!1,licenseNotices:c,licenseStatus:s})))}})))}}]);