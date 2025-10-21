function limpiarError(id){
    document.getElementById(id).style.borderColor="#dee2e6";
    document.getElementById(id+'Help').style.visibility="hidden";
}

function marcarError(id){  
document.getElementById(id+'Help').style.visibility = "visible";
document.getElementById(id).style.borderColor = "red";

}

document.getElementById('form').addEventListener('submit', function(event) {
    
    event.preventDefault();

    var nota1 = parseInt(document.getElementById('nota1').value);
    var nota2 = parseInt(document.getElementById('nota2').value);
    var faltas = parseInt(document.getElementById('faltas').value);

    var correcto = true;

    if ((!Number.isInteger(nota1)) || (nota1<0)|| (nota1>10)) {
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

  if (correcto) document.getElementById('form').submit();
  });