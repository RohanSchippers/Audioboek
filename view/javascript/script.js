let textTracker = 'first';

function change() {
    let text = document.getElementById('changeText');
    if (textTracker == 'first') {
        text.innerHTML = 'Een interactief luisterboek';
        textTracker = 'second';
    } else if (textTracker == 'second') {
        text.innerHTML = 'Gemaakt door MBO-studenten <br> van ROC Rivor';
        textTracker = 'third';
    } else if (textTracker == 'third') {
        text.innerText = 'Zo werkt het';
        textTracker = 'final';
    } else {
        window.location.replace("uitleg.html");
    }
}


let timer = setInterval('change();', 3000);












