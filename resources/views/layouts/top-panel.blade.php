<div class="top-panel">

    <div class="top-panel__container">
        <a class="top-panel__home-link" href="/">{{ __("common.home") }}</a>  
        <a id="top-panel-menu-link" class="top-panel__menu-link">{{ __("common.menu") }} </a>

        <nav class="top-panel__navigation">
            <a class="top-panel__navigation-link" href="{{ route('dashboard') }}">{{ __("common.dashboard") }}</a> 
        </nav>
        
        <div class="top-panel__auth">
            @auth
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a 
                        href="{{ route('logout') }}" 
                        onclick="event.preventDefault();this.closest('form').submit();"
                    >
                        {{ __('common.logout') }}
                    </a>
                </form>
            @else

                <a class="top-panel__auth-link" href="{{ route('login') }}">{{ __("common.login") }}</a> 
                <a class="top-panel__auth-link" href="{{ route('register') }}">{{ __("common.register") }}</a> 

            @endauth
        </div>
    </div>
</div>