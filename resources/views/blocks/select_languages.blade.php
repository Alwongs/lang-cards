<form action="{{ route('cards') }}" method="GET">

    <div class="select-languages">

        <div class="select-languages__select-block">
            <label>{{ __("common.from") }}:</label>
            <select name="lang_from">
                @foreach($languages as $lang)
                    <option 
                        value="{{ $lang->id }}"
                        @if(!empty($langFrom) && $lang->id == $langFrom)  
                            selected
                        @endif                      
                    >
                        {{ $lang->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="select-languages__select-block">
            <label>{{ __("common.to") }}:</label>
            <select name="lang_to">
                @foreach($languages as $lang)
                    <option 
                        value="{{ $lang->id }}"
                        @if(!empty($langTo) && $lang->id == $langTo)  
                            selected
                        @elseif(empty($langTo) && $lang->code != "EN")
                            selected
                        @endif  
                    >
                        {{ $lang->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="select-languages__btn">
            @if(empty($cards))
                {{ __("common.continue") }}
            @else
                {{ __("common.update") }}
            @endif
        </button>
    </div>

</form>