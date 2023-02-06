function cliked() {

    if (!menuOpen) {
        menuBtn.classList.add('open');
        menuOpen = true;
        nav2.style.transition = "z-index 0.1s, width 0.5s, opacity 0.3s ease-in, visibility 0.1s";
        nav2.style.zIndex = "1";
        nav2.style.width = "100%";
        nav2.style.visibility = "visible";
        nav2.style.opacity = "1";
    }
    else {
        menuBtn.classList.remove('open');
        menuOpen = false;
        nav2.style.transition = "z-index 1s, width 0.3s, opacity 0.2s ease-in, visibility 0.3s";
        nav2.style.zIndex = "-3";
        nav2.style.width = "0%";
        nav2.style.visibility = "hidden";
        nav2.style.opacity = "0";
    }

}
const menuBtn = document.querySelector('.menu_mobile');
let menuOpen = false;
let nav2 = document.getElementById("navigacijaMob");
let menu_bg = document.getElementById("menu_bg");
menuBtn.addEventListener('click', cliked, false);


