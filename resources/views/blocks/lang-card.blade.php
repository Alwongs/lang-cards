@php
    $front = explode(',', $card->translation_from->translation)
    
@endphp


<li class="card-list__item card-wrapper flip-left">
    <div class="card">
        <div title="{{ __("common.wrong_translation") }}" class="indicator"></div>
        <div class="front">
            @if($card->translation_from)
                {{ $front[0] }}
            @else
                ---
            @endif
            <div class="card__input-block">
                <input
                    class="card-input"
                    id="{{ $card->translation_from->id }}" 
                    type="text" 
                    placeholder="{{ __("common.type_translation") }}"
                />
            </div>
        </div>

        <div class="back">
            @if($card->translation_to)
                {{ $card->translation_to->translation }}
            @else
                ---
            @endif
        </div>
    </div>
</li>