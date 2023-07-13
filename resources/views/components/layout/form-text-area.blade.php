<div class="form-group mb-3">
    <!-- An unexamined life is not worth living. - Socrates -->
    <label for="{{ $name }}" class="form-label">{{ $label }}</label>

    <textarea  id="{{ $name }}" type="{{ $type }}"
               class="form-control @error($name) is-invalid @enderror" name="{{ $name }}"
               autocomplete="{{ $name }}" autofocus {{ $attributes }}>{{ $value ?? old($name) }}</textarea>
    @error($name)
    <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>