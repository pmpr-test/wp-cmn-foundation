/*! For license information please see quick-edit.hxVTLhXXM.js.LICENSE.txt */
!function(){const e=PRHelper.getHTML(),t=PRHelper.getHook(),i=PRHelper.getType(),n=PRBackendHelper.getModal(),o=PRHelper.getRequest(),a=PRHelper.getSetting();t.on("click",(l=>{l.preventDefault();let r=e.getTarget(l),g=e.getData(r,"object");if(!i.isEmpty(g)){let l,s=e.getData(r,"model"),d=e.createElement(a.getOption("quick_edit.modal.form"));for(let t in g){let i=e.getElement(`[name=${t}]`,d);e.isElement(i)&&PRBackendHelper.getForm().setFieldValue(i,g[t])}l=n.show({size:"xl",title:a.getOption("quick_edit.modal.title"),content:d,buttons:a.getOption("quick_edit.modal.buttons")}),l.hideSpinner(),t.on("click",(t=>{t.preventDefault(),l.showMessage("");let n=e.getTarget(t),d=e.getParent(n,".pr-modal-container"),c=e.getElement(".orm-quick-edit-form",d);if(e.isElement(c)){let t=e.serializeForm(c),n=a.getOption("quick_edit.ajax");if(t&&n){let d={};i.each(t,((e,t)=>{g.hasOwnProperty(t)&&e!==g[t]&&(d[t]=e)})),i.isEmpty(d)?l.showMessage(a.getOption("quick_edit.modal.messages.not_changed"),"warning"):(l.showSpinner(),o.ajax(n).addNonce().onSuccess((t=>{e.setData(r,"object",t.object),PRBackendHelper.getHTML().updateListTableRow(t.filtered,e.getParent(r,"tr")),l.close()})).onError((e=>{let t=e.data;"string"==typeof t&&l.showMessage(t,"danger")})).onFinally((()=>{l.hideSpinner()})).send({id:g.id,model:s,changes:d}))}}}),e.getElement(".quick-edit-submit",l.getElement()))}}),".orm-quick-edit")}();