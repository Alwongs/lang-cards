<div class="new-phrase-block">
    <form action="{{ route('phrases.store') }}" class="new-phrase-block__form" method="POST">
        @csrf

        <div class="input-block">
            <input type="text" name="default_translation" placeholder="type a phrase" required/>
        </div>   

        <div class="btn-block">
            <button class="btn btn-success" type="submit">{{ __("common.save") }}</button>
        </div> 
    </form>
</div>