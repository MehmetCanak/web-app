
<button :class="{ danger: isDeleting }">
    Submit
</button>
<option {{ $isSelected($value) ? 'selected="selected"' : '' }} value="{{ $value }}">
    {{ $label }}
</option>

