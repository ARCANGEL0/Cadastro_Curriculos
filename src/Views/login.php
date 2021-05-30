<!DOCTYPE html>
<html lang="pt-br">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel=“stylesheet” href=“https://use.fontawesome.com/releases/v5.5.0/css/all.css” integrity=“sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU” crossorigin=“anonymous”> <title>Enlatados Juarez</title>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
 <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<!-- ALGORITMO PARA FORMATAR INPUTS COM MASCARA DE ENTRADA -->
  <script>
    function formatar(mascara, documento){
      var i = documento.value.length;
      var saida = mascara.substring(0,1);
      var texto = mascara.substring(i)

      if (texto.substring(0,1) != saida){
                documento.value += texto.substring(0,1);
      }

    }
    </script>
</head>
<body>

<div style="padding-top: 100px; padding-left: 410px; width: 150%; ">
	
<form action="Controllers/navegacao.php" method="post" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin w3-
display-middle" style="width: 30%;">
 <input type="hidden" name="nome_form" value="frmLogin" />

 <h2 class="w3-center">Login</h2>
 <div class="w3-row w3-section">
 <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-user"></i></div>
 <div class="w3-rest">
 <input class="w3-input w3-border w3-round-large" name="txtLogin" type="text"
placeholder="Login CPF (ex.: 33333333333)"
maxlength="14" OnKeyPress="formatar('###.###.###-##', this)"
>
 </div>
 </div>
 <div class="w3-row w3-section">
 <div class="w3-col" style="width:11%"><i class="w3-xxlarge fa fa-lock"></i></div>
 <div class="w3-rest">
 <input class="w3-input w3-border w3-round-large" name="txtSenha" type="password"
placeholder="Senha">
 </div>
 </div>


 <div class="w3-row w3-section">
 <div class="w3-half" style="">
 <button name="btnLogin" class="w3-button w3-block w3-margin w3-blue w3-cell w3-roundlarge" style="width: 90%;">Entrar</button>
 </div>
 <div class="w3-half">
 <button name="btnPrimeiroAcesso" class="w3-button w3-block w3-margin w3-blue w3-cell w3-
round-large" style="width: 90%;">Primeiro Acesso?</button>
 </div>
 </div>
</form>

</div>





 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


</body>
</html>