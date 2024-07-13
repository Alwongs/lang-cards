<div id="menu-panel" class="menu-panel">

    <div class="menu-panel__btn-block">
        <button id="menu-panel-closer" class="menu-panel__btn-close">
            Закрыть
        </button>
    </div>

    <nav class="menu-panel__navigation"> 

        <x-nav-link
            :class="'comp-nav-link-menu-panel'"
            :href="route('languages.index')"
            :value="__('common.languages')"
        />

        <x-nav-link
            :class="'comp-nav-link-menu-panel'"
            :href="route('phrases.index')"
            :value="__('common.phrases')"
        />

        <x-nav-link
            :class="'comp-nav-link-menu-panel'"
            :href="route('reserve')"
            :value="__('reserve')"
        /> 

    </nav>  

</div>