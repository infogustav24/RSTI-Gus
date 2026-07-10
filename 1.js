const ask = require('readline-sync')

const fullName = ask.question("Insire o nome: ")
let aGe = ask.question("Insire a idade: ")
let cIty = ask.question("Insire a tua Cidade: ")
let eNrolLed = true
const hEigh = 1.70
let cLass = ask.question("Insire a tua turma: ")

console.log(`Nome completo: ${fullName},
 Idade: ${aGe},
 Cidade: ${cIty},
 Está matriculado: ${eNrolLed}, 
 Altura: ${hEigh}, 
 Turma: ${cLass}`)