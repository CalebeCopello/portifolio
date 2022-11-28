function show(a) {
    document.getElementById('home-div').style.display = "none"
    document.getElementById('sobre-div').style.display = "none"
    document.getElementById('post-div').style.display = "none"
    document.getElementById('projeto-div').style.display = "none"
    document.getElementById('contato-div').style.display = "none"
    switch(a) {
        case 'home':
            document.getElementById('home-div').style.display = "inline";
            break;
        case 'sobre':
            document.getElementById('sobre-div').style.display = "inline";
            break;
        case 'post':
            document.getElementById('post-div').style.display = "inline";
            break;
        case 'projeto':
            document.getElementById('projeto-div').style.display = "inline";
            break;
        case 'contato':
            document.getElementById('contato-div').style.display = "inline";
    }
}
