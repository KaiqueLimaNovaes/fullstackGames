function exibirCategoria(categoria){
    let elementos = document.getElementsByClassName('produtos');

    for (var i = 0; i < elementos.length; i++){

        if (categoria == elementos[i].id){
            elementos[i].style = "display:inline-block";
        }else{
            elementos[i].style = "display:none";
        }
    }
}

let exibirTodos = () => {
    let elementos = document.getElementsByClassName('produtos');

    for (var i = 0; i < elementos.length; i++){
        elementos[i].style = "display:inline-block";
    }
}
 
let destaque = (imagem) =>{
    console.log(imagem);
    if (imagem.width == 300){
        imagem.width = 150;
    }else{
        imagem.width = 300;
    }
}
