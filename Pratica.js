const ask = require("readline-sync")
let pOKemOm = ask.question("Insira o seu Pokemom:")

switch (pOKemOm) {

    case "Charmander":
        console.log("Fogo")
        break

    case "Bulbasauro":
        console.log("Planta veneno")
        break

    case "Squirtle":
        console.log("Agua")
        break

    default:
        console.log("Pokémon não encontrado.")
}