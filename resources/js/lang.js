const addLangBtn = document.getElementById("add_lang_opener");
if (addLangBtn) {
    addLangBtn.addEventListener('click', function() {
        const addLangBlockWrapper = document.getElementById("add_lang_block_wrapper");
        addLangBlockWrapper.classList.remove('hidden');
        addLangBtn.classList.add('hidden');
    });
}
