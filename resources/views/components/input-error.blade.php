@props(['messages'])

@if ($messages)
    <ul {{ $attributes->merge(['class' => 'text-sm text-error space-y-1']) }}>
        @foreach ((array) $messages as $message)
            <li class="flex items-center gap=2">
                <x-lucide-triangle-alert class="h-4 w-4 mr-1"/>
                {{ $message }}
            </li>
        @endforeach
    </ul>
@endif
