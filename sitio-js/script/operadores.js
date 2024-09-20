let nota=6;
let faltas=20;

if(nota < 8 && faltas >25){
    document.write('Examen libre');
}
else if(nota < 8 && faltas <=25){
    document.write('Examen reglamentado');
}
else{
    document.write('Exonera');
}