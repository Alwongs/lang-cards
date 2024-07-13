const allOpeners = document.querySelectorAll(".translation-list-item__opener");
const allInfoForms = document.querySelectorAll(".translation-list-item__info");

allOpeners.forEach((opener) => {

    opener.addEventListener('click', function(e) {
        const openerId = e.target.id;
        const langCode = openerId.replace('opener_', '');
        const translationFormInfo = document.getElementById(`transation-form-info-${langCode}`);

        this.classList.add('hidden');
        translationFormInfo.classList.remove('hidden');
        translationFormInfo.querySelector('input').focus();

        allInfoForms.forEach((infoForm) => {
            if (infoForm.id.replace('transation-form-info-', '') != langCode) {
                infoForm.classList.add('hidden');
            } 
        }); 

        allOpeners.forEach((op) => {
            if (op.id != openerId && op.classList.contains("hidden")) {
                op.classList.remove('hidden');
            } 
        });   
    });
});