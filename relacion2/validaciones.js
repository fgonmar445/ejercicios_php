/************************************************************************************************* 
 * 
 * Validaciones para el formulario del ejercicio 12
 * Creado por Felipe Gonzalez - 10/10/2025
 * 1.0V
*/
function validarFormulario() {
    var nota1 = parseFloat(document.getElementById('nota1').value);
    var nota2 = parseFloat(document.getElementById('nota2').value);
    //debe de ser entero, numero y entre 1 y 10
    var faltas = parseInt(document.getElementById('faltas').value);
    var nombre = document.getElementById('nombre').value;
    var email = document.getElementById('email').value;

    if (typeof(nota1) == Number && (nota1<10&& nota1>1)) {

        var correcto = true; // hipotesis inicial
    }
    if (!Number.isInteger(nota1) || (nota<1 || nota1>10)) {
        alert("La nota1 es erronea");
        correcto = false;
    }
    if (!Number.isInteger(nota2) || (nota2<1 || nota2>10)) {
        alert("La nota2 es erronea");
        correcto = false;
    }

    if (!Number.isInteger(faltas) || (faltas<0 )) {
        alert("Las faltas tienen que ser 0 o +");
        correcto = false;
    }
    if (nombre.trim()=="" ) {
        alert('El nombre es obligatorio');
        correcto = false;
    }
return correcto; //Se devuelve al punto de llamada true si todo va bien, sino se devuelve false//
}