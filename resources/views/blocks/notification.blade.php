

<div class="notification-block">  

    <x-session-status :status="session('status')" :info="session('info')" />

    @if ($errors->any())
        <ul id="request-validation-errors" class="request-validation-errors">
            <li id="close-note-btn" class="notification-block__close-btn">x</li>
            @foreach ($errors->all() as $error)
                <li>{{ __("common.request_error") }}: {{ $error }}</li>
            @endforeach
        </ul>
    @endif
</div>