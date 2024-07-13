<div class="top-panel">

    <div class="top-panel__container">
        <a id="top-panel-menu-opener" class="top-panel__menu-link">{{ __("common.menu") }} </a>

        <x-nav-link :href="route('home')" class="top-panel__home-link" :value="__('common.english')" />

        @if(Illuminate\Support\Facades\Route::currentRouteName() != "home")
            <nav class="top-panel__navigation">
                <x-nav-link
                    :class="'comp-nav-link-top-panel'"
                    :href="route('home')" 
                    :active="request()->routeIs('home')" 
                    :value="__('common.home')"
                />
                <x-nav-link
                    :class="'comp-nav-link-top-panel'"
                    :href="route('cards')" 
                    :active="request()->routeIs('cards')" 
                    :value="__('common.cards')"
                />
                <x-nav-link
                    :class="'comp-nav-link-top-panel'"
                    :href="route('reserve')"
                    :active="request()->routeIs('reserve')"
                    :value="__('reserve')"
                />
            </nav>
        @endif
        
        <div class="top-panel__auth">
            @auth
                <a id="top-panel-auth-opener" class="top-panel__profile-link">
                    {{ auth() ? auth()->user()->name : false }}
                </a>
            @else
                <x-nav-link
                    :class="'top-panel__profile-link'"
                    :href="route('login')"
                    :value="__('common.login')"
                />
            @endif
        </div>
    </div>
</div>