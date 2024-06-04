function mensagem(texto) {
    window.alert(texto);
}

function testarBtn() {
    mensagem("Botão respondendo!");
}

function criarParagrafo() {
    // Completar aqui.

    mensagem("Criar Parágrafo funcionando!");
}

function criarLista() {
    let qtdOpcoes = document.getElementById("opcoes").value;
    console.log(qtdOpcoes);

    // Completar aqui.

    mensagem("Criar Lista funcionando!");
}

function criarTabela() {
    let linhas = document.getElementById("linhas").value;
    let colunas = document.getElementById("colunas").value;
    console.log(linhas, colunas);

    // Completar aqui.

    mensagem("Criar Lista funcionando!");
}

function testar() {
    // Chamar função a ser testada descomentando a linha.
    testarBtn();
    // criarParagrafo();
    // criarLista();
    // criarTabela;
}