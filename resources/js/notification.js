const notification = document.getElementById("request-validation-errors");
const closeNoteBtn = document.getElementById("close-note-btn")

if (closeNoteBtn) {
    closeNoteBtn.addEventListener('click', function() {
        notification.classList.add('hidden');
    });
}



