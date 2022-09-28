
@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-medium text-sm text-gray-700']) }}>
    {{ $value ?? $slot }} <small class="text-gray-500">({{ __('Optionel') }})</small>
</label>
