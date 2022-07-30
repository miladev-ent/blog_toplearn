<select class="{{ $class }} @error($name) is-invalid @enderror" name="{{ $name }}" {{ $attributes }}>
    {{ $slot }}
</select>
