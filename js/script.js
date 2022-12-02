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
function tema(tema) {
    var getRoot = document.querySelector(':root')
    switch(tema){
        case 'glaucous':
            getRoot.style.setProperty('--cor-base', 'rgba(100,122,163,1)')
            getRoot.style.setProperty('--cor-analoga-a','rgba(44,59,87,1)')
            getRoot.style.setProperty('--cor-analoga-b','rgba(170,195,240,1)')
            getRoot.style.setProperty('--cor-contraste-a','rgba(87,71,36,1)')
            getRoot.style.setProperty('--cor-contraste-b','rgba(163,143,100,1)')
            break;
        case 'lightStateGray':
            getRoot.style.setProperty('--cor-base', 'rgba(125,150,170,1)')
            getRoot.style.setProperty('--cor-analoga-a','rgba(60,79,94,1)')
            getRoot.style.setProperty('--cor-analoga-b','rgba(208,230,247,1)')
            getRoot.style.setProperty('--cor-contraste-a','rgba(94,77,51,1)')
            getRoot.style.setProperty('--cor-contraste-b','rgba(171,153,126,1)')
            break;
        case 'spaceCadet':
            getRoot.style.setProperty('--cor-base', 'rgba(43,45,66,1)')
            getRoot.style.setProperty('--cor-analoga-a','rgba(79,84,143,1)')
            getRoot.style.setProperty('--cor-analoga-b','rgba(107,110,143,1)')
            getRoot.style.setProperty('--cor-contraste-a','rgba(143,126,64,1)')
            getRoot.style.setProperty('--cor-contraste-b','rgba(66,61,43,1)')
    } 
}