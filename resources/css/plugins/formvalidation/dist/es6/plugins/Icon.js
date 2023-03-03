import e from "../core/Plugin";import t from "../utils/classSet";export default class i extends e{constructor(e){super(e);this.icons=new Map;this.opts=Object.assign({},{invalid:"fv-plugins-icon--invalid",onPlaced:()=>{},onSet:()=>{},valid:"fv-plugins-icon--valid",validating:"fv-plugins-icon--validating"},e);this.elementValidatingHandler=this.onElementValidating.bind(this);this.elementValidatedHandler=this.onElementValidated.bind(this);this.elementNotValidatedHandler=this.onElementNotValidated.bind(this);this.elementIgnoredHandler=this.onElementIgnored.bind(this);this.fieldAddedHandler=this.onFieldAdded.bind(this)}install(){this.core.on("core.element.validating",this.elementValidatingHandler).on("core.element.validated",this.elementValidatedHandler).on("core.element.notvalidated",this.elementNotValidatedHandler).on("core.element.ignored",this.elementIgnoredHandler).on("core.field.added",this.fieldAddedHandler)}uninstall(){this.icons.forEach((e=>e.parentNode.removeChild(e)));this.icons.clear();this.core.off("core.element.validating",this.elementValidatingHandler).off("core.element.validated",this.elementValidatedHandler).off("core.element.notvalidated",this.elementNotValidatedHandler).off("core.element.ignored",this.elementIgnoredHandler).off("core.field.added",this.fieldAddedHandler)}onFieldAdded(e){const t=e.elements;if(t){t.forEach((e=>{const t=this.icons.get(e);if(t){t.parentNode.removeChild(t);this.icons.delete(e)}}));this.prepareFieldIcon(e.field,t)}}prepareFieldIcon(e, t){if(t.length){const i=t[0].getAttribute("type");if("radio"===i||"checkbox"===i){this.prepareElementIcon(e,t[0])}else{t.forEach((t=>this.prepareElementIcon(e,t)))}}}prepareElementIcon(e, i){const n=document.createElement("i");n.setAttribute("data-field",e);i.parentNode.insertBefore(n,i.nextSibling);t(n,{"fv-plugins-icon":true});const l={classes:{invalid:this.opts.invalid,valid:this.opts.valid,validating:this.opts.validating},element:i,field:e,iconElement:n};this.core.emit("plugins.icon.placed",l);this.opts.onPlaced(l);this.icons.set(i,n)}onElementValidating(e){const t=this.setClasses(e.field,e.element,e.elements,{[this.opts.invalid]:false,[this.opts.valid]:false,[this.opts.validating]:true});const i={element:e.element,field:e.field,iconElement:t,status:"Validating"};this.core.emit("plugins.icon.set",i);this.opts.onSet(i)}onElementValidated(e){const t=this.setClasses(e.field,e.element,e.elements,{[this.opts.invalid]:!e.valid,[this.opts.valid]:e.valid,[this.opts.validating]:false});const i={element:e.element,field:e.field,iconElement:t,status:e.valid?"Valid":"Invalid"};this.core.emit("plugins.icon.set",i);this.opts.onSet(i)}onElementNotValidated(e){const t=this.setClasses(e.field,e.element,e.elements,{[this.opts.invalid]:false,[this.opts.valid]:false,[this.opts.validating]:false});const i={element:e.element,field:e.field,iconElement:t,status:"NotValidated"};this.core.emit("plugins.icon.set",i);this.opts.onSet(i)}onElementIgnored(e){const t=this.setClasses(e.field,e.element,e.elements,{[this.opts.invalid]:false,[this.opts.valid]:false,[this.opts.validating]:false});const i={element:e.element,field:e.field,iconElement:t,status:"Ignored"};this.core.emit("plugins.icon.set",i);this.opts.onSet(i)}setClasses(e, i, n, l){const s=i.getAttribute("type");const d="radio"===s||"checkbox"===s?n[0]:i;if(this.icons.has(d)){const e=this.icons.get(d);t(e,l);return e}else{return null}}}
