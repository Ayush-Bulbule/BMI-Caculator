console.log("BMI Calculator")
let btnCal = document.getElementById('btn-cal');
let result = document.getElementById('result');
let btnCal2 = document.querySelector("#cal2");
let result2 = document.querySelector("#result2");

console.log(btnCal);

btnCal.addEventListener('click', (a) => {
    a.preventDefault();
    let feet = parseFloat(document.getElementById('feet').value);
    let inches = parseFloat(document.getElementById('inches').value);
    let pounds = parseFloat(document.getElementById('pounds').value);

    inches = feet * 12 + inches;

    let res = pounds / inches / inches * 703;
    result.innerHTML = res;
    console.log(inches);
    console.log(pounds);



});

btnCal2.addEventListener('click', (a) => {
    let cent = parseFloat(document.getElementById("centim").value);
    let kilo = parseFloat(document.querySelector("#kilog").value);

    console.log(kilo);

    console.log(cent);
    a.preventDefault();
    let res = kilo / cent / cent * 10000;
    result2.innerHTML = res;
    console.log(res);
});

