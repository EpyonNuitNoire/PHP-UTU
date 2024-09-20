let num = 0;
let salir = 0;

for(let i=0;i<10;i++){
    document.write(i + '<br>');
}
document.write('<hr>');

while(num <10){
    document.write(num + '<br>');
    num++;
}



while(salir !=0){
    let a = prompt('Ingrese un número');
    let b = prompt('Ingrese otro número');
    let res = a *b;
    
    document.write(res + '<br>');
    salir =prompt('Cero para salir');
}