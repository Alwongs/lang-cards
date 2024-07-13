const cardsCount = 9;
const progress = document.querySelector('.card-progress-bar__fill');

const appNote = document.getElementById('app-note');

let progressWidth = 0;

document.querySelectorAll('.card').forEach((card) => {
    const translationArray = card.querySelector('.back').innerHTML.trim().toLowerCase().split(",");
    card.addEventListener('keydown', function(e) {
        if (e.keyCode === 13) {
            rotateCard(card, translationArray);
        }
    });
    card.addEventListener('click', function(e) {
        if (e.target.localName != "input") {
            rotateCard(card, translationArray);
        }
    });
    
});

function rotateCard(card, translationArray) {
    const indicator = card.querySelector('.indicator');
    const input = card.querySelector('input');
    const inputValue = input.value.trim().toLowerCase();
    const trimmedArr = translationArray.map(item => item.trim())
    if (trimmedArr.includes(inputValue)) {
        indicator.classList.remove('show');
        if (input.disabled == false) {
            increaseProgress();
        }
        input.disabled = true;
        if (card.classList.contains("rotate")) {
            card.classList.remove('rotate');
        } else {
            card.classList.add('rotate');
        }
    } else {
        indicator.classList.add('show');
    }
}

function increaseProgress() {
    progressWidth = progressWidth +  100 / cardsCount;
    progress.style.width = `${progressWidth}%`;

    if (progressWidth > 99) {
        appNote.classList.add('display');
        appNote.querySelector('#app-note-window').classList.add('display');

        appNote.querySelector('#app-note-content').innerHTML = "Congratulations!";
        
    }
}
