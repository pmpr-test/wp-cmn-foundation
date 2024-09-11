/*! For license information please see multistep.hxVTLhXXM.js.LICENSE.txt */
(()=>{const t=PRHelper.getHTML(),e=PRHelper.getType(),s=PRHelper.getHook();window.PR_MULTISTEPS={};class i{constructor(e){this.id=t.getAttribute(e,"id"),this.data={},this.element=e,this.options={startStep:t.getData(e,"start-step")||1,clickable:t.hasClass(e,"pr-multistep-clickable")},this.init(),this.build(),s.doAction("multistep_initialized",this),window.PR_MULTISTEPS[this.id]=this}init(){this.steps=t.getElements(".pr-multistep-nav > .pr-multistep-step",this.element),this.prev=t.getElements(".pr-multistep-step-actions button[name=prev]",this.element),this.next=t.getElements(".pr-multistep-step-actions button[name=next]",this.element),this.submit=t.getElements(".pr-multistep-step-actions button.submit-action",this.element),this.evets=[],this.stopped=!1,this.lastStep=0,this.totalStep=this.steps.length,this.currentStep=1,this.options.startStep>1&&this.goto(this.options.startStep),this.update()}build(){let e=this;s.on("click",(t=>{t.preventDefault(),e.setNewStep(e.getPrevStep()),!1!==e.trigger("change")&&e.goto(e.getPrevStep())}),this.prev),s.on("click",(t=>{t.preventDefault(),e.setNewStep(e.getNextStep()),!1!==e.trigger("change")&&e.goto(e.getNextStep())}),this.next),s.on("click",(async i=>{if(i.preventDefault(),await e.checkCanGetNextStep()){const i=t.serializeForm(e.element);s.doAction("multistep_submitted",e,i),s.doAction(`multistep_${e.id}_submitted`,e,i)}}),this.submit),!0===this.options.clickable&&s.on("click",(function(s){s.preventDefault();let i=t.getData(t.getTarget(s,".pr-multistep-step"),"step");i>0&&(e.setNewStep(i),!1!==e.trigger("change")&&e.goto(i))}),".pr-multistep-nav > .pr-multistep-step")}async goto(t){return this.showMessage(""),!0===this.stopped?(this.stopped=!1,!1):(this.stop(),(t=parseInt(t))===this.currentStep||t>this.totalStep||t<0||t>this.currentStep&&!await this.checkCanGetNextStep()||t<this.currentStep&&!await this.checkCanGetPrevStep()?(this.resume(),!1):(this.lastStep=this.currentStep,this.currentStep=t,this.newStep=0,this.update(),this.trigger("changed"),this.resume(),this.scrollToTop(),s.doAction(`multistep_${this.id}_step_changed`,this),!0))}update(){let e=this.currentStep-1,s=this.steps,i=t.getElements(".pr-multistep-contents .pr-multistep-step-content",this.element);if(s&&s.length>0)for(let n=0;n<s.length;n++){let r=s[n],p=i[n],h="pending";n===e?h="current":n<e&&(h="done"),t.setData(r,"state",h),t.setData(p,"state",h)}}async checkCanGetNextStep(){return this.checkCanGetStep("next",this.currentStep+1)}async checkCanGetPrevStep(){return!(this.currentStep-1<0)&&this.checkCanGetStep("prev",this.currentStep-1)}async checkCanGetStep(t,e){let i=s.applyFilters(`multistep_can_goto_${t}_step`,!0,this,e);return"function"==typeof i.then&&(i=await i),i&&"boolean"==typeof i&&(i=s.applyFilters(`multistep_${this.id}_can_goto_${t}_step`,!0,this,e),"function"==typeof i.then&&(i=await i)),!(!i||"string"==typeof i)||(this.showMessage(i),!1)}stop(t=!0){this.stopped=!0,this.changeButtonsActivity(!1,t)}resume(){this.stopped=!1,this.changeButtonsActivity(!0)}hideActions(){const s=t.getElements(".pr-multistep-step-actions",this.getElement());e.each(s,(function(e){t.hide(e)}))}getButtons(){return e.extend(!0,this.prev,this.next,this.submit)}changeButtonsActivity(s=!1,i=!0){e.each(this.getButtons(),(function(e){t.setElementActivity(e,s,i)}))}isLastStep(){return this.currentStep===this.totalStep}isFirstStep(){return 1===this.currentStep}getPrevStep(){let t=this.currentStep-1;return t<1&&(t=1),t}getNextStep(){let t=this.currentStep+1;return this.totalStep<t&&(t=this.totalStep),t}getNewStep(){return this.newStep}setNewStep(t){this.newStep=t}trigger(t){for(let e=0;e<this.evets.length;e++){let s=this.evets[e];if(s.name===t){if(!0!==s.one)return s.handler.class(this);if(!1===s.fired)return this.evets[e].fired=!0,s.handler.class(this)}}}addEvent(t,e,s){return this.evets.push({name:t,handler:e,one:s,fired:!1}),this}getMessageContainer(){return t.getElement(".pr-multistep-message-container",this.element)}showMessage(e="",s="warning"){let i=this.getMessageContainer();if(e){t.addAttribute(i,"data-type",s);let n={type:s,content:e,replace:!1};void 0!==window.PRBackendHelper?PRBackendHelper.getHTML().alert(i,n):void 0!==window.PRFrontendHelper&&PRFrontendHelper.getHTML().alert(i,n),this.scrollToTop()}else t.empty(i)}setData(t,e){return this.data[t]=e,this}getData(t=null){return null===t?this.data:this.data[t]}getStepName(e){return t.getData(t.getElement(`[data-step="${e}"]`,this.element),"name")}getCurrentStepName(){return this.getStepName(this.currentStep)}getPrevStepName(){return this.getStepName(this.currentStep-1)}getNextStepName(){return this.getStepName(this.currentStep+1)}getElement(){return this.element}scrollToTop(){this.element.scrollIntoView()}}!function(){function n(t){new i(t)}let r=t.getElements(".pr-multistep-wrap");e.each(r,(t=>{n(t)})),s.addAction("init_multistep",(t=>{n(t)})),s.addAction("destroy_multistep",(e=>{delete PR_MULTISTEPS[t.getAttribute(e,"id")]}))}()})();