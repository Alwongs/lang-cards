<div class="top-panel">

    <div class="top-panel__container">
        <a id="top-panel-menu-opener" class="top-panel__menu-link">{{ __("common.menu") }} </a>

        <x-nav-link :href="route('home')" class="top-panel__home-link" :value="__('common.home')" />

        @if(Illuminate\Support\Facades\Route::currentRouteName() != "dashboard")
            <nav class="top-panel__navigation">
                <x-nav-link
                    :class="'comp-nav-link-top-panel'"
                    :href="route('dashboard')"
                    :active="request()->routeIs('dashboard')"
                    :value="__('common.dashboard')"
                />
                <x-nav-link
                    :class="'comp-nav-link-top-panel'"
                    :href="route('languages.index')"
                    :active="request()->routeIs('languages.index')"
                    :value="__('common.languages')"
                />
                <x-nav-link
                    :class="'comp-nav-link-top-panel'"
                    :href="route('phrases.index')"
                    :active="request()->routeIs('phrases.index')"
                    :value="__('common.phrases')"
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