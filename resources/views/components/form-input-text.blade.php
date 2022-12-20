<label for="{{ $attribute }}" class="block text-neutral-700 dark:text-neutral-300 text-sm font-bold mb-2">
    {{ $label }}
</label>
<x-input id="{{ $attribute }}" name="{{ $attribute }}" type="{{ $type }}" value="{{ $value }}" class="w-full"
    placeholder="{{ $placeholder }}" />
