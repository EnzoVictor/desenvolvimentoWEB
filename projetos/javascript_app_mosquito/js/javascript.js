var altura = 0
var largura = 0

function alturaLargura(){
    largura = innerWidth
    altura = innerHeight
    console.log(altura, largura)
}

alturaLargura()

function posicaoMosca(){
    var posicaoX = Math.floor(Math.random() * altura) - 90
    var posicaoY = Math.floor(Math.random() * largura) - 90

    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log(posicaoX, posicaoY)

    //Criar um elemento HTML
    var mosquito = document.createElement('img')
    mosquito.src = 'imagens/mosca.png'
    mosquito.className = 'mosca1'
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'

    document.body.appendChild(mosquito)
}