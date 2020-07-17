function buscarProducto(event){
  event.preventDefault();
  event.stopPropagation();
  var texto = document.getElementById("textoBus").value;
  document.location.href=".?texto=" + texto;
}
