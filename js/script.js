function show(a) {
    document.getElementById('home').style.display = "none"
    document.getElementById('sobre').style.display = "none"
    document.getElementById('post').style.display = "none"
    document.getElementById('projeto').style.display = "none"
    document.getElementById('contato').style.display = "none"
    switch(a) {
        case 'home':
            document.getElementById('home').style.display = "inline";
            break;
        case 'sobre':
            document.getElementById('sobre').style.display = "inline";
            break;
        case 'post':
            document.getElementById('post').style.display = "inline";
            break;
        case 'projeto':
            document.getElementById('projeto').style.display = "inline";
            break;
        case 'contato':
            document.getElementById('contato').style.display = "inline";
    }
}
function tema() {
    var getRoot = document.querySelector(':root')
    var selectRoot = window.getComputedStyle(getRoot)
    window.alert(selectRoot.getPropertyValue('--cor-base'))
}
