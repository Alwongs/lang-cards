<x-admin-layout>
    <header class="header">
        <h1 class="header__title">{{ $phrase->default_translation }}</h1>
        <p class="header__description">{{ __("common.click_translation_to_edit") }}</p>
    </header>

    @foreach($languages as $lang)
        @if(empty($lang->translation_id))
            <form action="{{ route('translations.store') }}" method="POST">
        @else
            <form action="{{ route('translations.update', $lang->translation_id) }}" method="POST">
                @method('PUT')
        @endif
            @csrf
            <input type="hidden" name="language_id" value="{{ $lang->id }}" />
            <input type="hidden" name="phrase_id" value="{{ $phrase->id }}" />

            <li class="translation-list__item translation-list-item">
                <div class="translation-list-item__code">
                    {{ $lang->code }}
                </div>

                <div id="opener_{{$lang->code}}" class="translation-list-item__opener btn-link">
                    @if($lang->phrase_translation)
                        {{ $lang->phrase_translation }}                                  
                    @else
                        +
                    @endif 
                </div>

                <div id="transation-form-info-{{$lang->code}}" class="translation-list-item__info hidden">
                    <div class="translation-list-item__translation">
                        <input 
                            type="text" 
                            name="translation" 
                            value="{{ $lang->phrase_translation }}" 
                            required  
                        />
                    </div>
                    <div class="translation-list-item__action" >
                        <button class="btn-link btn-danger">
                            @if(empty($lang->translation_id))
                                {{ __("common.save") }}
                            @else     
                                {{ __("common.update") }}
                            @endif                         
                        </button>
                    </div>
                </div>
            </li>
        </form> 
    @endforeach

    <div class="btn-block">
        <a href="{{ url()->previous() }}" class="btn btn-info">{{ __("common.back") }}</a>
    </div>
    
  
    
</x-admin-layout>
