import t from "../core/Plugin";export default class e extends t{constructor(t){super(t);this.opts=t||{};this.triggerExecutedHandler=this.onTriggerExecuted.bind(this)}install(){this.core.on("plugins.trigger.executed",this.triggerExecutedHandler)}uninstall(){this.core.off("plugins.trigger.executed",this.triggerExecutedHandler)}onTriggerExecuted(t){if(this.opts[t.field]){const e=this.opts[t.field].split(" ");for(const t of e){const e=t.trim();if(this.opts[e]){this.core.revalidateField(e)}}}}}
