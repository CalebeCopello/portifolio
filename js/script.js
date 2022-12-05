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
    var icone = document.querySelector('.iconecabeca')
    switch(tema){
        case 'lightStateGray':
            getRoot.style.setProperty('--cor-base', 'rgba(125,150,170,1)')
            getRoot.style.setProperty('--cor-analoga-a','rgba(60,79,94,1)')
            getRoot.style.setProperty('--cor-analoga-b','rgba(208,230,247,1)')
            getRoot.style.setProperty('--cor-contraste-a','rgba(94,77,51,1)')
            getRoot.style.setProperty('--cor-contraste-b','rgba(171,153,126,1)')
            icone.style.filter="invert(0) opacity(60%)"
            break;
        case 'sage':
            getRoot.style.setProperty('--cor-base', 'rgba(202,202,170,1)')
            getRoot.style.setProperty('--cor-analoga-a','rgba(117,117,117,1)')
            getRoot.style.setProperty('--cor-analoga-b','rgba(255,255,229,1)')
            getRoot.style.setProperty('--cor-contraste-a','rgba(102,80,125,1)')
            getRoot.style.setProperty('--cor-contraste-b','rgba(185,169,201,1)')
            icone.style.filter="invert(0) opacity(60%)"
            break;
        case 'onyx':
            getRoot.style.setProperty('--cor-base', 'rgba(69,69,69,1)')
            getRoot.style.setProperty('--cor-analoga-a','rgba(42, 42, 42,1)')
            getRoot.style.setProperty('--cor-analoga-b','rgba(153,153,153,1)')
            getRoot.style.setProperty('--cor-contraste-a','rgba(145,135,116,1)')
            getRoot.style.setProperty('--cor-contraste-b','rgba(68,79,107,1)')
            var icone = document.querySelector('.iconecabeca')
            icone.style.filter="invert(1) opacity(60%)"
    } 
}