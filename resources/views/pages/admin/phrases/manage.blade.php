<x-site-layout>
    <x-slot name="header">
        {{ __('common.phrases') }}
    </x-slot>

    @include('blocks.dashboard-nav')

    @foreach($phrases as $phrase)
        <p>{{ $phrase->phrase_key }}  -  {{ $phrase->translation->translation }}</p>
    @endforeach
    
</x-site-layout>
