import t from "../core/Plugin";export default class o extends t{constructor(){super({});this.onValidHandler=this.onFormValid.bind(this)}install(){const t=this.core.getFormElement();if(t.querySelectorAll('[type="submit"][name="submit"]').length){throw new Error("Do not use `submit` for the name attribute of submit button")}this.core.on("core.form.valid",this.onValidHandler)}uninstall(){this.core.off("core.form.valid",this.onValidHandler)}onFormValid(){const t=this.core.getFormElement();if(t instanceof HTMLFormElement){t.submit()}}}
