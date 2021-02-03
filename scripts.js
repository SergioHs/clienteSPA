const API_DOMAIN = 'http://lararest.dev/';

//FUNCIONALIDADES DO MENU
document.getElementById('Login').style.display = "block";
function openDiv(evt, buttonName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(buttonName).style.display = "block";
    evt.currentTarget.className += " active";

    if(buttonName == 'Lista'){
      alert('lista')

    } else if (buttonName == 'Lista') {


    } else if (buttonName == 'Lista') {


    }
}
//FUNCIONALIDADES DO LOGIN
  function login(){
      $.post( API_DOMAIN + "auth/login", { email: $("#loginEmail").val(), password: $("#loginPassword").val()})
        .done(function( data ) {
          if(data["access_token"]){
            $("#token").val(data["access_token"]);
            alert("Login Realizado com Sucesso");
            $("#btnLista").click();
          } else {
            alert("Login Falhou");
          }
      })
      .fail(function() {
        alert( "Erro No Login - Credenciais Invalidas" );
      });
  }

