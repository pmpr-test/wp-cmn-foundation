(()=>{"use strict";const e=class{constructor(e){this.name=e}run(){this.maybeInits();const e=this;this.getHookHelper().addAction("form_generator_field_added_to_dom",(t=>e.maybeInits(t)),99)}maybeInits(e=document){const t=this;let i=this.getHTMLHelper().getElements(`.pr-field-${this.getName()}`,e);this.getTypeHelper().each(i,(e=>t.maybeInit(e)))}maybeInit(e){if(this.getHookHelper().applyFilters("form_generator_field_allow_process",!0,e)){const t=this;this.init(e),this.getHookHelper().on("change",(()=>t.init(e)),e)}}init(e,t=!1){let i=this.getHTMLHelper().getValue(e),s=this.getHTMLHelper().getData(e,`${this.getName()}-configs`);switch(this.getHTMLHelper().addClass(e,`pr-field-${this.getName()}-added`),e.tagName.toLowerCase()){case"input":switch(this.getHTMLHelper().getAttribute(e,"type")){case"checkbox":i=e.checked?"on":"off",this.decide(e,s,i,t);break;case"hidden":this.decide(e,s,i,t)}break;case"select":this.decide(e,s,i,t)}}decide(e,t,i,s){this.getTypeHelper().each(t,(t=>{let l=t.values,r=t.fields,a=t.reverse;Array.isArray(l)||"object"!=typeof l||(l=JSON.parse(l));let d=!1;if(s)d="admit"===s;else{let e=Array.isArray(l),t=e&&l.includes(i)||i===l||this.getTypeHelper().isEmpty(i)&&(e&&l.includes("")||""===l);d=t&&!a||!t&&a}"string"==typeof r&&(r=[r]),this.getTypeHelper().each(r,((t,i)=>{this.getTypeHelper().isIterable(t)||(isNaN(i)&&(t=i),t=this.getFormHelper().getField(t,e),this.getHTMLHelper().isElement(t)&&!this.getHTMLHelper().hasClass(t,`pr-field-${this.getName()}-added`)&&this.getHTMLHelper().hasClass(t,`pr-field-${this.getName()}`)&&(d?this.init(t,"admit"):this.getHookHelper().trigger("change",t)))})),this.changeRelatedFields(e,r,d)}))}changeRelatedOptions(e,t,i,s){if(s){let s=this.getFormHelper().getFieldContainer(t,e),l=this.getFormHelper().getFieldByContainer(s);if(this.getHTMLHelper().isElement(l)&&this.getHTMLHelper().isElement(s)){let e,t={};this.getHTMLHelper().is(s,".pr-field-radio-type")&&(t=this.getHTMLHelper().getElements(".pr-field-radio-item",s),e=this.getHTMLHelper().getElement("input.pr--field",s)),this.getTypeHelper().each(t,(e=>{i.includes(this.getHTMLHelper().getData(e,"value"))?this.admitField(e):this.denyField(e)})),this.getHTMLHelper().isElement(e)&&this.getHookHelper().trigger("change",e)}}}changeRelatedFields(e,t,i=!0){this.getTypeHelper().isEmpty(t)||("string"==typeof t?this.changeRelatedField(e,t,i):this.getTypeHelper().isIterable(t)&&this.getTypeHelper().each(t,((t,s)=>{if(this.getTypeHelper().isIterable(t)){let l=t;t=s,this.changeRelatedOptions(e,t,l,i)}else{let l="";isNaN(s)&&(l=t,t=s),this.changeRelatedField(e,t,i,l)}})))}changeRelatedField(e,t,i,s=""){const l=this.getFormHelper(),r=this.getHTMLHelper(),a=l.getFieldContainer(t,e),d=l.getFieldByContainer(a);if(r.isElement(d)&&r.isElement(a)){const t=l.getFieldFieldset(a);if(r.isElement(t)){r.hasClass(r.getParent(e,".pr-field"),`pr-field-${this.getName()}-effected`)&&(i=!1);let t=r.getData(d,`${this.getName()}-effects`),s=l.getFieldID(e);null==t&&(t={}),t[s]=i,r.setData(d,`${this.getName()}-effects`,t);for(let e in t)if(e!==s&&!t[e]&&i){i=!1;break}i?r.hasClass(a,`pr-field-${this.getName()}-effected`)&&this.admitField(a,d):r.hasClass(a,`pr-field-${this.getName()}-effected`)||this.denyField(a,d);const h=this;let g=r.getParents(a,".pr-field-container-type");this.getTypeHelper().each(g,(e=>h.applyOnFieldsInsideContainer(e)))}}}storeBackup(e,t=""){let i=this.getHTMLHelper().getValue(e);this.getTypeHelper().isEmpty(i)||this.getHTMLHelper().setData(e,`${this.getName()}-backup`,i),this.getHTMLHelper().is(e,":radio")||this.getHTMLHelper().is(e,":checkbox")?e.checked=!1:this.getHTMLHelper().setValue(e,t),this.getHookHelper().trigger("change",e)}restoreBackup(e){let t=this.getHTMLHelper().getData(e,`${this.getName()}-backup`);this.getTypeHelper().isEmpty(t)||(this.getHTMLHelper().is(e,":radio")?(e=this.getHTMLHelper().filter(e,`[value=${t}]`)).checked=!0:this.getHTMLHelper().is(e,":checkbox")?e.checked="on"===t:this.getHTMLHelper().setValue(e,t),this.getHookHelper().trigger("change",e))}applyOnFieldsInsideContainer(e){let t=this.isDenied(e);0===this.getNotDeniedFields(e).length?t||this.admitField(e):t&&this.denyField(e)}changeActivation(e,t,i,s=[],l=[]){this.getTypeHelper().each(s,(t=>{this.getHTMLHelper().addClass(e,t)})),this.getTypeHelper().each(l,(t=>{this.getHTMLHelper().removeClass(e,t)})),this.getHookHelper().doAction(`form_generator_denier_field_${i}`,e,t)}denyField(e,t){this.getHTMLHelper().addClass(e,[`pr-field-${this.getName()}-effected`,"pr-field-denied"])}admitField(e,t){this.getHTMLHelper().removeClass(e,[`pr-field-${this.getName()}-effected`,"pr-field-denied"])}getNotDeniedFields(e){return this.getHTMLHelper().getElements(`.pr-field:not(.pr-field-${this.getName()}-effected)`,e)}isDenied(e){return this.getHTMLHelper().is(e,`pr-field-${this.getName()}-effected`)}getHookHelper(){return PRHelper.getHook()}getFormHelper(){return PRHelper.getForm()}getHTMLHelper(){return PRHelper.getHTML()}getTypeHelper(){return PRHelper.getType()}getName(){return this.name}};(new class extends e{constructor(){super("disabler")}denyField(e,t){super.denyField(e,t);let i=["pr-field-disabled"];t||(i=["pr-field-item-disabled"]),this.changeActivation(e,t,"disabled",i)}admitField(e,t){super.admitField(e,t);let i=["pr-field-disabled"];t||(i=["pr-field-item-disabled"]),this.changeActivation(e,t,"enabled",[],i)}}).run()})();