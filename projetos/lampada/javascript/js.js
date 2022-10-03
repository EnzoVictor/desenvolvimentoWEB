let lampOn = document.getElementById('lampOn')
let lampOff = document.getElementById('lampOff')
let lamp = document.getElementById('lampada')

function isBroken(){
    return lamp.src.indexOf('quebrada') > 1
}

function lampadaLigada(){
    if (!isBroken()){
        lamp.src = 'imagens/ligada.png'
    }
}

function lampadaDesligada(){
    if (!isBroken()){
        lamp.src = 'imagens/desligada.png'
    }
}

function lampadaQuebrada(){
    if (!isBroken()){
        lamp.src = 'imagens/quebrada.png'
        console.log(isBroken())
    }
}

lampOn.addEventListener('click', lampadaLigada)

lampOff.addEventListener('click', lampadaDesligada)

lamp.addEventListener('mouseover', lampadaLigada)

lamp.addEventListener('mouseout', lampadaDesligada)

lamp.addEventListener('dblclick', lampadaQuebrada)

