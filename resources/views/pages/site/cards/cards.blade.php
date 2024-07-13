<x-site-layout>
    @include('blocks.notification')

    @include('blocks.select_languages')

    @if(!empty($cards))
        @include('blocks.card-progress-bar')
    @endif

    @if(!empty($cards))
        <ul class="card-list">
            @foreach($cards as $card)
                @include('blocks.lang-card')
            @endforeach
        </ul>
    @endif

</x-site-layout>
