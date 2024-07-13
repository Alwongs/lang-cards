const addPhraseBtn = document.getElementById("add_phrase_opener");
if (addPhraseBtn) {
    addPhraseBtn.addEventListener('click', function() {
        const addPhraseBlockWrapper = document.getElementById("add_phrase_block_wrapper");
        addPhraseBlockWrapper.classList.remove('hidden');
        addPhraseBtn.classList.add('hidden');
    });
}
