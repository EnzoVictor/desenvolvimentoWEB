var altura = 0
var largura = 0
var vidas = 1
var tempo = 15
var tempoMosca = 2000

var nivel = window.location.search
nivel = nivel.replace('?', '')

if(nivel === 'normal'){
    tempoMosca = 2000
}else if(nivel === 'dificil'){
    tempoMosca = 1000
}else{
    tempoMosca = 750
}

function alturaLargura(){
    largura = innerWidth
    altura = innerHeight
    console.log(altura, largura)
}

alturaLargura()

var cronometro = setInterval(function(){
    tempo--
    if (tempo < 0){
        clearInterval(cronometro)
        clearInterval(criaMosca)
        window.location.href = 'vitoria.html'
    }else{
        document.getElementById('cronometro').innerHTML = tempo
    }
}, 1000)

function posicaoMosca(){
    if (document.getElementById('mosca')){
        document.getElementById('mosca').remove()

        if (vidas > 3){
            window.location.href = 'fim_de_jogo.html'
        }else {
            document.getElementById('v' + vidas).src = 'imagens/coracao_vazio.png'
            vidas++
        }
    }

    var posicaoX = Math.floor(Math.random() * largura) - 90
    var posicaoY = Math.floor(Math.random() * altura) - 90

    posicaoX = posicaoX < 0 ? 0 : posicaoX
    posicaoY = posicaoY < 0 ? 0 : posicaoY

    console.log(posicaoX, posicaoY)

    //Criar um elemento HTML
    var mosquito = document.createElement('img')
    mosquito.src = 'imagens/mosca.png'
    mosquito.className = tamanhoMosca() + ' ' + ladoAlternado()
    mosquito.style.left = posicaoX + 'px'
    mosquito.style.top = posicaoY + 'px'
    mosquito.style.position = 'absolute'
    mosquito.id = 'mosca'
    mosquito.onclick = function(){
        this.remove()
    }

    document.body.appendChild(mosquito)

}

function tamanhoMosca(){
    var massa = Math.floor(Math.random() * 3)
    if (massa == 0){
        return 'mosca1'
    } else if (massa == 1){
        return 'mosca2'
    } else if (massa == 2){
        return 'mosca3'
    }
}

function ladoAlternado(){
    var lado = Math.floor(Math.random() * 2)
    if (lado == 0){
        return 'ladoA'
    } else if (lado == 1){
        return 'ladoB'
    }
}
