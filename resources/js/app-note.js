const appNote = document.getElementById('app-note');
const closeNoteBtn = document.getElementById('app-note-close-btn')

closeNoteBtn.addEventListener('click', function() {
    appNote.querySelector('#app-note-window').classList.remove('display');
    appNote.classList.remove('display');
})