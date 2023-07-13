<div class="form-group mb-2">
    <!-- An unexamined life is not worth living. - Socrates -->
    <label for="{{ $name }}" class="form-label mb-2">{{ $label }}</label>
    <input id="{{ $name }}" type="{{ $type ?? 'text' }}"
           class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
           value="{{ $value ?? old($name) }}" autocomplete="{{ $name }}" autofocus {{ $attributes }} {{ $readonly ? "readonly" : null }}>

    @error($name)
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
