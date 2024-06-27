<x-site-layout>
    <x-slot name="header">
        {{ __('common.languages') }}
    </x-slot>

    @include('blocks.dashboard-nav')   

    @foreach($languages as $lang)
        <p>{{ $lang->name }}</p>
    @endforeach
    
</x-site-layout>
