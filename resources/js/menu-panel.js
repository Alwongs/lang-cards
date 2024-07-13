const menuBtn = document.getElementById("top-panel-menu-opener");
const menuPanel = document.getElementById("menu-panel");
const menuBtnCloser = document.getElementById("menu-panel-closer");

if (menuBtn) {
    menuBtn.addEventListener('click', function() {
        
        if (menuPanel.classList.contains("opened")) {
            menuPanel.classList.remove('opened');
        } else {
            menuPanel.classList.add('opened');
        }
    });
}

if (menuBtnCloser) {
    menuBtnCloser.addEventListener('click', function() {
        
        if (menuPanel.classList.contains("opened")) {
            menuPanel.classList.remove('opened');
        } else {
            menuPanel.classList.add('opened');
        }
    });
}