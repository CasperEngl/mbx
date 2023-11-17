<a href="/" {{ $attributes->merge([
    'class' => 'p-4 bg-slate-800 text-white text-center',
]) }}>
    <div class="text-sm">Min by</div>

    <div class="pt-1.5">
        <div class="pt-0.5 bg-yellow-500"></div>
    </div>

    <div class="pt-1 text-xl">Aalborg</div>

    {{ $slot }}
</a>
