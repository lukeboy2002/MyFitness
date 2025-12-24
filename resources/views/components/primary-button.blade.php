<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-accent border border-transparent rounded-md font-semibold text-xs text-default uppercase tracking-widest hover:bg-accent/60 focus:bg-accent/60 active:bg-accent/60 focus:outline-hidden transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
