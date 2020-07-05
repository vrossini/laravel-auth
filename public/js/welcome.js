function showDiv() {
  var x = document.getElementById("entrega");
  if (x.style.display === "none") {
    x.style.display = "block";
  }
}

function hideDiv() {
  var x = document.getElementById("entrega");
  if (x.style.display === "block") {
    x.style.display = "none";
  }
}

function sendWhatsApp() {
  console.log("Enviar para o WhatsApp");
}

var els = document.getElementsByClassName("valor-calculado");
var valorcalculado = 0;
[].forEach.call(els, function (el)
{
  valorcalculado += parseInt(el.innerHTML);
});
document.getElementById("qtdtotal").innerHTML = valorcalculado;