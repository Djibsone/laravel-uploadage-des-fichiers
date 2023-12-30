@php
    $type ??= 'text';
    $class ??= null;
    $name ??= '';
    $value ??= '';
@endphp

<div @class(['form-group'])>

    <label for="{{ $name }}">{{ $label }}</label>
    
    <input class="{{ $class }} @error($name) is-invalid @enderror" type="{{ $type }}" id="{{ $name }}" name="{{ $name }}" value="{{ old($name, $value) }}">
    
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
    
</div>