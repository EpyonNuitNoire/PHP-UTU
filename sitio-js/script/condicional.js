let nota;
nota = prompt('Ingrese una nota');

if(nota >= 8){
    document.write('Exonera');
}
else if(nota ==7){
    document.write('Actuación satisfactoria, pero no exonera');
}
else{
    document.write('Actuación insuficiente. No exonera');
}