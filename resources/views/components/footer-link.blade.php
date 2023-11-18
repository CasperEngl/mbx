<a {{ $attributes->merge([
    'class' => 'text-sm underline hover:text-zinc-900',
]) }}>
    {{ $slot }}
</a>
