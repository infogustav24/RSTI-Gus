const num1 = document.querySelector("#firstNumber");

const num2 = document.querySelector("#secondNumber");

const Soma = document.querySelector("#Soma");
const Sub = document.querySelector("#Sub");
const Mult = document.querySelector("#Multi");
const Divi = document.querySelector("#Divi");

const result = document.querySelector(".result");

Soma.addEventListener("click", function () {
    result.textContent = Number(num1.value) + Number(num2.value);
});

Sub.addEventListener("click", function () {
    result.textContent = Number(num1.value) - Number(num2.value);
});

Mult.addEventListener("click", function () {
    result.textContent = Number(num1.value) * Number(num2.value);
});

Divi.addEventListener("click", function () {
    if ( Number(num2.value) > 0) {
        result.textContent = Number(num1.value) / Number(num2.value);
    }
    else{
        alert("Não é possivel divdir por 0")
    }
});