<button {{ $attributes->merge(['type' => 'submit', 'class' => 'btn btn-danger ms-auto']) }}>
    {{ $slot }}
</button>
