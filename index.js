console.log("BMI Calculator")
let btnCal2 = document.querySelector("#cal2");
let result2 = document.querySelector("#result2");


btnCal2.addEventListener('click', (a) => {
    let cent = document.getElementById("centim").value;
    let kilo = document.querySelector("#kilog").value;

    console.log(kilo);

    console.log(cent);
    a.preventDefault();
    let result = kilo / cent / cent * 10000;
    result2.innerHTML = result;
    console.log(result);
});