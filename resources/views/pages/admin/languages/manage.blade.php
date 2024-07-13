<x-admin-layout>
    @include('blocks.notification')

    <!-- add new language block -->
    <div class="add-language-block btn-block flex-center mb-20">
        <button id="add_lang_opener" class="btn btn-info add-lang-opener">
            {{ __("common.add_language") }}
        </button>

        <div id="add_lang_block_wrapper" class="add-lang-block-wrapper hidden">
            @include('blocks.new-lang') 
        </div>    
    </div>

  

    <ul class="language-list">
        @foreach($languages as $lang)
            <li class="language-list__item language-list-item">
                <div class="language-list-item__code">
                    {{ $lang->code }}
                </div>
                <div class="language-list-item__name">
                    {{ $lang->name }}
                </div>
                {{-- @if($lang->code != "EN") --}}
                    <form class="language-list-item__action" action="{{ route('languages.destroy', $lang->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button class="btn-link btn-danger">
                            {{ __("common.delete") }}
                        </button>
                    </form>
                {{-- @endif --}}
            </li>
        @endforeach
    </ul>
    
</x-admin-layout>
