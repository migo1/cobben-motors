import{_ as d,e as n,o as p,c as m,f as i,a as s,y as b,s as v,r as g,T as y,x,d as w,w as c,v as l,n as j,p as S,h as k}from"./app-25f9a344.js";const T={props:{errors:{type:Object,default:()=>({})}},metaInfo:{link:[{rel:"stylesheet",type:"text/css",href:"/app-assets/css/plugins/forms/form-validation.css"},{rel:"stylesheet",type:"text/css",href:"/app-assets/css/pages/page-auth.css"}],script:[{src:"/app-assets/vendors/js/forms/validation/jquery.validate.min.js",type:"text/javascript",body:!0,defer:!0},{src:"/app-assets/js/scripts/pages/page-auth-login.js",type:"text/javascript",body:!0,defer:!0}]},watch:{errors:function(t){t&&this.$store.commit("toggleErrorToast",t)}}};function $(t,o,u,a,_,f){const r=n("SuccessToast"),h=n("ErrorToast");return p(),m("div",null,[i(r),i(h),s("div",null,[b(t.$slots,"default")])])}const E=d(T,[["render",$]]);const I={layout:E,components:{Link:v},setup(){const t=g({loading:!1,form:y({email:null,password:null,remember:!1})});let o=()=>{t.form.post("/admin/login")};return x(()=>{}),{state:t,submit:o}}},e=t=>(S("data-v-72df5915"),t=t(),k(),t),M={class:"container"},V={class:"content-wrapper"},B=e(()=>s("div",{class:"content-header row"},null,-1)),L={class:"content-body"},N={class:"auth-wrapper auth-v1 px-2"},P={class:"auth-inner py-2"},C={class:"card mb-0"},U={class:"card-body"},q=e(()=>s("a",{href:"javascript:void(0);",class:"brand-logo"},[s("h2",{class:"brand-text text-primary ml-1"}," Cobben Motors ")],-1)),A=e(()=>s("br",null,null,-1)),D=e(()=>s("h4",{class:"card-title mb-1"}," Welcome to Back 👋 ",-1)),F=e(()=>s("p",{class:"card-text mb-2"}," Please sign-in to your account ",-1)),O={class:"form-group"},R=e(()=>s("label",{for:"login-email",class:"form-label"},"Email",-1)),W={class:"form-group"},z=e(()=>s("div",{class:"d-flex justify-content-between"},[s("label",{for:"login-password"},"Password"),s("a",{href:"page-auth-forgot-password-v1.html"},[s("small",null,"Forgot Password?")])],-1)),G={class:"input-group input-group-merge form-password-toggle"},H=e(()=>s("div",{class:"input-group-append"},[s("span",{class:"input-group-text cursor-pointer"},[s("i",{"data-feather":"eye"})])],-1)),J=j('<div class="form-group" data-v-72df5915><div class="custom-control custom-checkbox" data-v-72df5915><input class="custom-control-input" type="checkbox" id="remember-me" tabindex="3" data-v-72df5915><label class="custom-control-label" for="remember-me" data-v-72df5915> Remember Me </label></div></div><button type="submit" class="btn btn-primary btn-block" tabindex="4" data-v-72df5915> Sign in </button>',2);function K(t,o,u,a,_,f){return p(),m("div",M,[s("div",V,[B,s("div",L,[s("div",N,[s("div",P,[s("div",C,[s("div",U,[q,A,D,F,s("form",{class:"auth-login-form mt-2",onSubmit:o[2]||(o[2]=w((...r)=>a.submit&&a.submit(...r),["prevent"]))},[s("div",O,[R,c(s("input",{type:"text",class:"form-control",id:"login-email","onUpdate:modelValue":o[0]||(o[0]=r=>a.state.form.email=r),placeholder:"john@example.com","aria-describedby":"login-email",tabindex:"1",autofocus:""},null,512),[[l,a.state.form.email]])]),s("div",W,[z,s("div",G,[c(s("input",{type:"password",class:"form-control form-control-merge",id:"login-password","onUpdate:modelValue":o[1]||(o[1]=r=>a.state.form.password=r),tabindex:"2",placeholder:"password","aria-describedby":"login-password"},null,512),[[l,a.state.form.password]]),H])]),J],32)])])])])])])])}const X=d(I,[["render",K],["__scopeId","data-v-72df5915"]]);export{X as default};