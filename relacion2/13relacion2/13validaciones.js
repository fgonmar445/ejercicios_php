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
    var nota3 = parseInt(document.getElementById('nota3').value);
    var nota4 = parseInt(document.getElementById('nota4').value);

    var correcto = true;

    if ((!Number.isInteger(nota1)) || (nota1<0) || (nota1>10)) {
        marcarError('nota1');
        correcto = false;
    }

    if ((!Number.isInteger(nota2))||(nota2<0)||(nota2>10)){
    marcarError('nota2');
    correcto = false;
  }

  if ((!Number.isInteger(nota3))||(nota3<0)||(nota3>10)){
    marcarError('nota3');
    correcto = false;
  }

  if ((!Number.isInteger(nota4))||(nota4<0)||(nota4>10)){
    marcarError('nota4');
    correcto = false;
  }

  if (correcto) document.getElementById('form').submit();
  });