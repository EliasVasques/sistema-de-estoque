
function addCompra(nome, preco, codigo) {
    let itens = document.querySelector("#itens tbody");
    itens.innerHTML += 
    `<tr>
        <td>${nome}</td>
        <td>${preco}</td>
        <td>${codigo}</td>
    </tr>`;

    let valor = document.querySelector(".total .valor").textContent; 
    document.querySelector(".total .valor").innerHTML = (Number(valor) + preco).toFixed(2);

}