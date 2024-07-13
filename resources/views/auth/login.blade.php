<x-auth-layout>
    <div class="auth-wrapper">

        <form class="auth-form" method="POST" action="{{ route('login') }}">
            @csrf
            @include('blocks.notification')

            <x-input.email class="comp-input-auth-form" />

            <x-input.password class="comp-input-auth-form" />

            <div class="auth-form__remember-me">
                <label for="remember_me" class="">
                    <input id="remember_me" type="checkbox" class="" name="remember">
                    <span class="">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="auth-form__btn-block btn-block flex-between">
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="btn-success">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </div>

</x-auth-layout>

