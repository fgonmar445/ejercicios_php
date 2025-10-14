/*****************************************************
 * 
 * Validaciones para el formulario del ejercicio 12
 * creado por Felipe González el día ----
 * Versión 1
 * 
 */
document.getElementById('form').addEventListener('submit',function(event){

  event.preventDefault();

  var nota1 = parseFloat(document.getElementById('nota1').value);
  var nota2 = parseFloat(document.getElementById('nota2').value);
  // deben ser enteros, numéricos, entre 1 y 10 y tener algo
  var faltas = parseFloat(document.getElementById('faltas').value);
  // igual salvo que puede ser 0
  var nombre = document.getElementById('nombre').value;
  // no debe estar vacío
  var email = document.getElementById('email').value;
  // debe tener el formato de un email

  var correcto = true; // hipótesis inicial

  if ((!Number.isInteger(nota1))||(nota1<0)||(nota1>10)){
    marcarError('nota1');
    correcto = false;
  }

  if ((!Number.isInteger(nota2))||(nota2<0)||(nota2>10)){
    marcarError('nota2');
    correcto = false;
  }

  if ((!Number.isInteger(faltas))||(faltas<0)){
    marcarError('faltas');
    correcto = false;
  }
   
  // y para nota2 y faltas y ...
  if (nombre.trim()==""){
    marcarError('nombre');
    correcto = false;
  }

if (correcto) document.getElementById('form').submit();

  // si han ido bien todas las comprobaciones,
  // se devuelve al punto de llamada TRUE
  // sino, se devuelve FALSE
});
function limpiarError(id){
    document.getElementById(id).style.borderColor="#dee2e6";
    document.getElementById(id+'Help').style.visibility="hidden";
}

function marcarError(id){  
document.getElementById(id+'Help').style.visibility = "visible";
document.getElementById(id).style.borderColor = "red";

}

/*
document.getElementById('form').addEventListener("click",function(){
    return validarFormularioNotas();
});

document.getElementById('nota1').addEventListener("change",function(){
    limpiar('nota1');
});
*/