<div class="new-lang-block">
    <form action="{{ route('languages.store') }}" class="new-lang-block__form" method="POST">
        @csrf

        <div class="input-block">
            <input type="text" name="code" placeholder="type language code" required/>
        </div>

        <div class="input-block">
            <input type="text" name="name" placeholder="type language name" required/>
        </div>   

        <div class="btn-block">
            <button class="btn btn-success" type="submit">{{ __("common.save") }}</button>
        </div> 
    </form>
</div>