<button {{ $attributes }} wire:loading.attr.remove="data-kt-indicator" wire:loading.attr="disabled"
        data-kt-indicator="on">
    <span class="indicator-label">Please wait... <span
            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
    <span class="indicator-progress">{{$slot}}</span>
</button>
