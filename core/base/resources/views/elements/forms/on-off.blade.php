<div class="onoffswitch">
    <input type="checkbox" name="{{ $name }}" class="onoffswitch-checkbox" id="{{ $name }}" value="1" @if ($value) checked @endif>
    <label class="onoffswitch-label" for="{{ $name }}">
        <span class="onoffswitch-inner"></span>
        <span class="onoffswitch-switch"></span>
    </label>
</div>