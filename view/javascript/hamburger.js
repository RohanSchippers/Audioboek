// Hamburger menu
function hamburger() {
    let open = document.getElementById('nav-icon');
    if (open.classList.contains('open')) {
        open.classList.remove('open');
    } else {
        open.classList.add('open');
    }
    let blockOverlay = document.getElementById('overlay');
    if (blockOverlay.classList.contains('visible')) {
        blockOverlay.classList.remove('visible');
        blockOverlay.classList.add('invisible');
    } else {
        blockOverlay.classList.add('visible');
        blockOverlay.classList.remove('invisible');
    }
    let text = document.getElementById('navText');
    if (blockOverlay.classList.contains('visible')) {
       text.classList.replace('invisible', 'visible')
    } else {
        text.classList.replace('visible', 'invisible');
    }
}



