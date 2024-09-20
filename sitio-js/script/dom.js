function mostrarTexto(){
    let num1 = document.getElementById("number1");
    num1 = parseInt(num1.value);

    let num2 = document.getElementById("number2");
    num2 = parseInt(num2.value);

    let requerido1 = document.getElementById("requerido-num1");
    let requerido2 = document.getElementById("requerido-num2");
    if(isNaN(num1)){
        requerido1.hidden = false;
    }
    else{
        requerido1.hidden = true;
    }
    
    if(isNaN(num2)){
        requerido2.hidden = false;
    }
    else{
        requerido2.hidden = true;
    }

    if(!isNaN(num1) && !isNaN(num2)){
        let resultado = document.getElementById("resultado");
        let result;
        result = num1 + num2;
        resultado.value = result
    }

    console.log(result);
}