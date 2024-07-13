<x-admin-layout>

    <!-- add new phrase block -->
    <div class="add-phrase-block btn-block flex-center mb-20">
        <button id="add_phrase_opener" class="btn btn-info add-phrase-opener">
            {{ __("common.add_phrase") }}
        </button>

        <div id="add_phrase_block_wrapper" class="add-phrase-block-wrapper hidden">
            @include('blocks.new-phrase') 
        </div>    
    </div>

    <h2 class="phrase-list-title">{{ __("common.select_phrase_to_add_translations") }}</h2>
    
    <ul class="phrase-list">
        @foreach($phrases as $phrase)
            <li class="phrase-list__item phrase-list-item">
                <div class="phrase-list-item__default-translation">
                    <a href="{{ route('phrases.show', $phrase->id) }}" title="{{ __("common.click_to_add_transaltion") }}">
                        {{ $phrase->default_translation }}
                    </a>
                </div>
                <form class="phrase-list-item__action" action="{{ route('phrases.destroy', $phrase->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn-link btn-danger">
                        {{ __("common.delete") }}
                    </button>
                </form>
            </li>
        @endforeach
    </ul>    
    
</x-admin-layout>
