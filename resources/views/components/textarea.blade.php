<div class="form-group {{ $errors->has($name) ? ' has-error' : '' }}">
    @if (isset($label))
        <label for="{{ $name }}" class="control-label ml-7">{{ $label }}</label>
    @endif

    <div class="col-md-12">
        <textarea rows="4" cols="10" id="{{ $name }}" name="{{ $name }}" class="form-control"
            placeholder="{{ isset($placeholder) ? $placeholder : '' }}" {{ isset($attributes) ? $attributes : '' }}>{{ @$value ? $value : '' }}</textarea>

        @if ($errors->has($name))
            <span class="help-block">
                <strong>{{ $errors->first($name) }}</strong>
            </span>
        @endif
    </div>
</div>
