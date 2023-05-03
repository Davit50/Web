"use strict";

let x = document.getElementById('txt');

function key() {
    setTimeout(() => {
        window.open()
    }, 2000)
}

function key2() {
    setTimeout(() => {
        window.open()
    }, 2000)
}

x.addEventListener('keydown', (event) => {
    let y = event.code
    switch (y) {
        case 'Enter':
            key()
            break;
        case 'Space':
            key2()
            break;
        case 'Keym':
            let a = document.getElementById('orinak');
            a.innerHTML = '<img src="https://img.icons8.com/windows/1024/000000/youtube.png">'
            break;
        default:
            document.getElementsByTagName('h3')[0].innerHTML = event.key
            break
    }
})
