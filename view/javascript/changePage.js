

function changePage() {
    let trackText = 'first';
    if (trackText){
        window.location.replace('../../index.php');
    }

}

function changePageNoInterval() {
    let trackText = 'first';
    if (trackText){
        window.location.replace('../../index.php');
    }

}

let timer = setInterval('changePage();', 3000);