@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-input-border bg-input text-default focus:border-accent focus:outline-none focus:ring-0 rounded-md shadow-xs']) }}>
