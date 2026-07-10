let valorCompra = 850
let categoria = "Ouro"
let desconto = 0

switch (categoria) {
    case "Bronze":
        desconto = 5
        break;
    case "Prata":
        desconto = 10
        break;
    case "Ouro":
        desconto = 15
        break;
    case "Platina":
        desconto = 20
        break
    default:
        console.log("Invalid category")
        break
}

if (desconto > 0) {
    let valorDesconto = valorCompra * desconto / 100
    let valorFinal = valorCompra - valorDesconto

    console.log("Categoria: " + categoria)
    console.log("Desconto: " + desconto + "%")
    console.log("Valor do desconto: R$ " + valorDesconto.toFixed(2))
    console.log("Valor final: R$ " + valorFinal.toFixed(2))
}