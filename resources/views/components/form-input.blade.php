@props(['name', 'value' => '', 'type' => 'text', 'placeholder' => '', 'error' => null, 'readonly' => false, 'id' => null])

<div class="mb-3">
    <input type="{{ $type }}" name="{{ $name }}" class="form-control @error($name) is-invalid @enderror"
        value="{{ old($name, $value) }}" placeholder="{{ $placeholder }}" id="{{$id}}"
        {{ $readonly ? 'readonly' : '' }}>
    
    @error($name)
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>
