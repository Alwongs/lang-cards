<div id="menu-panel" class="menu-panel">
    <div class="menu-panel__btn-block">
        <button id="menu-panel-closer" class="menu-panel__btn-close">
            Закрыть
        </button>
    </div>

    <nav class="menu-panel__navigation"> 

        <x-nav-link
            :class="'comp-nav-link-menu-panel'"
            :href="route('cards')"
            :value="__('common.cards')"
        />
        <x-nav-link
            :class="'comp-nav-link-menu-panel'"
            :href="route('reserve')"
            :value="__('reserve')"
        />
    </nav>      

</div>