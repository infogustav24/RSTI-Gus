let teclado = 100
let mouse = 100 
let fone = 50

let total = teclado + mouse + fone
let media = total / 3
let troco = 1000 - total

console.log("Valor total da compra: R$ " + total.toFixed(2),"Valor médio por item: R$ " + media.toFixed(2),"Troco: R$ " + troco.toFixed(2))