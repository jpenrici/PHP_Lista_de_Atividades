function inform() {
    // 1 : Dados capturados do formulário.
    let name   = document.getElementById('name').value;
    let cpf    = document.getElementById('cpf').value;
    let mesage = name + " " + cpf;

    // 2 : Dados retornandos no parágrado.
    document.getElementById('info').innerHTML = mesage;
}

/*
    webtreino.php
    
    1 : Dados capturados do formulário.

    <form>
        <!-- Oculto -->
        <input ... id="method" ... >
        <!-- Nome -->
        ...
        <input ... id="name"   ... >
        <!-- CPF -->
        ...
        <input ... id="cpf"    ... >
        <!-- Botões -->
        ...
    </form>

    2 : Dados retornandos no parágrado.

    <p id="info"></p>
    <button onclick="inform()">Teste</button>

*/
