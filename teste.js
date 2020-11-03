

// pagina inicial//
//alert("teste");

function carConteudo() {
    document.getElementById("mensagem").innerHTML = "Aqui em nossa loja,Programador têm desconto nos produtos para sua casa.";
}


function changecolor(obj) {

     if (obj.style.color == 'yellow') {                   // trocar a cor dos links
     obj.style.color = 'black';
     } else {
      obj.style.color = 'yellow'
     }
}


// pagina dos produtos//

function exibir_categoria(categoria) {

    let elementos = document.getElementsByClassName('categorias');                  // faz exibir os produtos por categoria na area de produtos
    for (var i = 0; i < elementos.length; i++) {
        if (categoria == elementos[i].id)
            elementos[i].style = "display:inline-block";
        else
            elementos[i].style = "display:none";
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produto');
    for (var i = 0; i < elementos.length; i++) {                                           // faz exibir todos os produtos na area de produtos
        elementos[i].style = 'display:inline-block';
    }
}

let imagem = (imagem) => {
    if (imagem.width == 120)
        imagem.style = 'width: 240px';                          // aumentar o tamanho ao clicar nas imagem do da área de produtos
    else
        imagem.style = 'width:120px';
};

//pagina contato//

let foto = (foto) => {
    if (foto.width == 60)                               // aumentar o tamanho ao clicar nas imagem do da área de contato
        foto.style = 'width: 200px';
    else
        foto.style = 'width:60px';
};


function alterarcor(obj) {
    if (obj.style.color == 'yellow') {                   // alterar as cores em contatos
        obj.style.color = 'black';
    } else {
        obj.style.color = 'yellow'
    }
}
