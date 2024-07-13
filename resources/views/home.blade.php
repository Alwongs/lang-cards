<x-site-layout>

    <nav class="home-navigation">
        <x-nav-link
            :class="'comp-nav-link-home-page'"
            :href="route('cards')"
            :value="__('common.cards')"
        />
        <x-nav-link
            :class="'comp-nav-link-home-page'"
            :href="route('reserve')"
            :value="__('reserve')"
        />
    </nav>

    @if($phrasesHaveEmptyTranslations)
        <h2 class="phrase-list-title">
            {{ __("common.phrases_have_empty_translations") }}
        </h2>

        <ul class="phrase-list">
            @foreach($phrasesHaveEmptyTranslations as $phrase)
                <li class="phrase-list__item phrase-list-item">
                    <div class="phrase-list-item__default-translation">
                        <a href="{{ route('phrases.show', $phrase->id) }}">{{ $phrase->default_translation }}</a>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif



</x-site-layout>
