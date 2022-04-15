let removerBanco = [];
let total = 0;

document.querySelector('#itens h3').innerHtml = "Novo texto";

function addCompra(nome, preco, codigo) {
    let itens = document.querySelector("#itens tbody");

    itens.innerHTML += 
    `<tr>
        <td>${nome}</td>
        <td>${preco}</td>
        <td>${codigo}</td>
    </tr>
    <img class="remover" src="../img/remover.png" alt="">`;

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