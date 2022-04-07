
let removerBanco = [];
let total = 0;

function addCompra(nome, preco, codigo) {
    let itens = document.querySelector("#itens tbody");
    itens.innerHTML += 
    `<tr>
        <td>${nome}</td>
        <td>${preco}</td>
        <td>${codigo}</td>
    </tr>`;

    total += preco;
    document.querySelector(".total .valor").innerHTML = total.toFixed(2);
    removerBanco.push(codigo);
}

function mensagemRemovidoBancoComSucesso() {
    
    swal({
        title: "Itens removidos do banco!",
        text: `Você ganhou ${total.toFixed(2)} reais.`,
        icon: "success",
    })
    .then(() => {
        if (confirm) {
            window.location.href = "../home/index.php";
        }
    });

}