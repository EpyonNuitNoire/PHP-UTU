
let num1;
let num2;
num1 = prompt('Ingrese número a dividir:');
num2 = prompt('Ingrese divisor');

if(num2==0){
    alert("ERROR. No es posible dividir entre cero");
}
else{
    let div;
    div=num1/num2;
    document.write(div);
}