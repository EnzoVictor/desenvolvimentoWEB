class Despesa{
    constructor(ano, mes, dia, tipo, descricao, valor){
        this.ano = ano
        this.mes = mes
        this.dia = dia
        this.tipo = tipo
        this.descricao = descricao
        this.valor = valor
    }

    validarDados(){
        for(let i in this){
            if (this[i] == '' || this[i] == null || this[i] == undefined){
                return false
            }
        }return true
    }
}

class Bd{
    constructor(){
        let id = localStorage.getItem('id')
        if (id === null){
            localStorage.setItem('id', 0)
        }
    }

    getProximoId(){
        let proximoId = localStorage.getItem('id')
        return parseInt(proximoId) + 1
    }

    gravarStorage(d){
        let id = this.getProximoId()

        localStorage.setItem(id, JSON.stringify(d))

        localStorage.setItem('id', id)
    }

    recuperarTodosRegistros(){
        let id = localStorage.getItem('id')

        let despesas = Array()

        for(let i = 1; i<=id; i++){
            //recuperando todas as despesas
            let despesa = JSON.parse(localStorage.getItem(i))

            //Validando se existem algum índice que foi removido ou tem o valor null
            if(despesa == null){
                continue
            }
            despesa.id = i
            despesas.push(despesa)
        }

        return despesas
    }

    pesquisa(despesa){
        let despesaFiltradas = Array()

        despesaFiltradas = this.recuperarTodosRegistros()

        console.log(despesa)

        console.log(despesaFiltradas)

        if(despesa.ano != ''){
            console.log('Filtro chegou no ano')
            despesaFiltradas = despesaFiltradas.filter(f => f.ano == despesa.ano)
        }

        if(despesa.mes != ''){
            console.log('Filtro chegou no mes')
            despesaFiltradas = despesaFiltradas.filter(f => f.mes == despesa.mes)
        }

        if(despesa.dia != ''){
            console.log('Filtro chegou no dia')
            despesaFiltradas = despesaFiltradas.filter(f => f.dia == despesa.dia)
        }

        if(despesa.tipo != ''){
            console.log('Filtro chegou no tipo')
            despesaFiltradas = despesaFiltradas.filter(f => f.tipo == despesa.tipo)
        }

        if(despesa.descricao != ''){
            console.log('Filtro chegou no descricao')
            despesaFiltradas = despesaFiltradas.filter(f => f.descricao == despesa.descricao)
        }

        if(despesa.valor != ''){
            console.log('Filtro chegou no valor')
            despesaFiltradas = despesaFiltradas.filter(f => f.valor == despesa.valor)
        }

        return  despesaFiltradas
    }

    remover_id(id){
        localStorage.removeItem(id)
    }
}

let bd = new Bd()

function cadastroDespesa(){
    let ano = document.getElementById('ano')
    let mes = document.getElementById('mes')
    let dia = document.getElementById('dia')
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    let despesa = new Despesa(
        ano.value,
        mes.value,
        dia.value,
        tipo.value,
        descricao.value,
        valor.value
    )
    if (despesa.validarDados()){
        console.log('Validação correta')
         bd.gravarStorage(despesa)

        document.getElementById('modal_div_titulo').className = 'modal-header text-success'
        document.getElementById('modal_titulo').innerHTML = 'Despesa inserida'
        document.getElementById('modal_conteudo').innerText = 'Despesa cadastrada com sucesso!!'
        document.getElementById('modal_conteudo').className = 'modal-body text-success'
        document.getElementById('modal_btn').className = 'btn btn-success'
        document.getElementById('modal_btn').innerHTML = 'Voltar'

        //dialog de sucesso
        $('#modalRegistroDespesa').modal('show')

        ano.value = ''
        mes.value = ''
        dia.value = ''
        tipo.value = ''
        decricao.value = ""
        valor.value = ""

    }else{
        console.log('Validação incompleta ')

        document.getElementById('modal_div_titulo').className = 'modal-header text-danger'
        document.getElementById('modal_titulo').innerHTML = 'Erro'
        document.getElementById('modal_conteudo').innerText = 'Algum campo obrigatório não foi preenchido. Por favor, verificar!'
        document.getElementById('modal_conteudo').className = 'modal-body text-danger'
        document.getElementById('modal_btn').className = 'btn btn-danger'
        document.getElementById('modal_btn').innerHTML = 'Voltar e corrigir'

        //dialog de erro
        $('#modalRegistroDespesa').modal('show')
    }

}

function listaDespesas(despesas = Array(), filter = false){
    if(despesas.length == 0 && filter == false){
        despesas = bd.recuperarTodosRegistros()
    }
    //Selecionando o tbody da página consulta
    let listaDespesas = document.getElementById('listaDespesas')
    listaDespesas.innerHTML = ''

    /*
    <tr>
        <td>10/02/2001</td>
        <td>Laser</td>
        <td>Aniversário</td>
        <td>10.559,69</td>
    </tr>
    */

    despesas.forEach(function(d){

        let linha = listaDespesas.insertRow()

        linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`
        linha.insertCell(1).innerHTML = d.tipo
        linha.insertCell(2).innerHTML = d.descricao
        linha.insertCell(3).innerHTML = d.valor

        //Criando o botão que irá remover a determinada despesa
        let btn = document.createElement('button')
        btn.className = 'btn btn-danger'
        btn.innerHTML = '<i class="fas fa-times"></i>'
        btn.id = `id_despesa_${d.id}`
        btn.onclick = function(){
            //Remover o elemento selecionado

            let id = this.id.replace('id_despesa_', '')

            //alert(id)

            document.getElementById('modal_div_titulo').className = 'modal-header text-success'
            document.getElementById('modal_titulo').innerHTML = 'Removido com sucesso'
            document.getElementById('modal_conteudo').innerText = 'Despesa removida com sucesso!'
            document.getElementById('modal_conteudo').className = 'modal-body'
            document.getElementById('modal_btn').className = 'btn btn-outline-success'
            document.getElementById('modal_btn').innerHTML = 'Voltar'

            //dialog de erro
            $('#modalRegistroDespesa').modal('show')

            bd.remover_id(id)

        }
        linha.insertCell(4).append(btn)

        console.log(d)
    })
}

function pesquisaDespesa(){
    let ano = document.getElementById('ano').value
    let mes = document.getElementById('mes').value
    let dia = document.getElementById('dia').value
    let tipo = document.getElementById('tipo').value
    let descricao = document.getElementById('descricao').value
    let valor = document.getElementById('valor').value

    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

    let despesas = bd.pesquisa(despesa)

    this.listaDespesas(despesas, true)
}