<?php

 if(isset($_POST["btnPrimeiroAcesso"]))
 {
 include_once '../Views/primeiroAcesso.php';
 }
 else
 {

if(isset($_POST["btnAtualizar"]))
 	{

require_once '../Controllers/userControl.php';
 $uController = new userControl();

$id = $_POST["txtID"];
$nome = $_POST["txtNome"];
$cpf = $_POST["txtCPF"];
$email = $_POST["txtEmail"];
$dataNascimento = $_POST["txtData"];

 if($uController->atualizar($id, $nome, $cpf, $email, date('Y-m-d', strtotime($dataNascimento))))
 {

 include_once '../Views/Toasts/ToastSuccess.php';

 include_once '../Views/home.php';

 }

 else
 {

 include_once '../Views/Toasts/ToastError.php';

 include_once '../Views/home.php';
}


// btnAtualizar }^^
 	}

 	if(isset($_POST["btnCadastrar"]))
 	{

    require_once '../Controllers/FormacaoAcadController.php';
    require_once '../Models/usuario.php';
    require_once '../Controllers/ExperienciaProfissionalController.php';
    require_once '../Controllers/OutrasFormacoesController.php';
  require_once '../Models/OutrasFormacoes.php';
   require_once '../Controllers/userControl.php';
 $uController = new userControl();

$nome = $_POST["txtNome"];
$cpf = $_POST["txtCPF"];
$email = $_POST["txtEmail"];
$senha = $_POST["txtSenha"];

if(empty($nome) || empty($cpf) || empty($email) || empty($senha)){
  header("Location: ../Views/Toasts/login_error.php");

} else {

 if($uController->inserir($nome, $cpf, $email,
$senha))
 {
 include_once '../Views/home.php';
 }


 else
 {
 	    header("Location: ../Views/Toasts/login_error.php");


}
}


 	}

 	//btnCadastrar ^^

 		if(isset($_POST["btnLogin"]))
 	{
    require_once '../Models/OutrasFormacoes.php';
    require_once '../Controllers/OutrasFormacoesController.php';
 require_once '../Controllers/FormacaoAcadController.php';
 require_once '../Models/usuario.php';
 require_once '../Controllers/ExperienciaProfissionalController.php';

require_once '../Controllers/userControl.php';
 $loginControl = new userControl();

$cpf = $_POST["txtLogin"];
$senha = $_POST["txtSenha"];

 if($loginControl->login($cpf, $senha))
 {
 include_once '../Views/home.php';
 }

 else
 {
 	    header("Location: ../Views/Toasts/login_error.php");


}



 	}
// btmLogin ^^

if(isset($_POST["btnAddFormacao"]))
{
  require_once '../Models/OutrasFormacoes.php';

  require_once '../Controllers/FormacaoAcadController.php';
  require_once '../Models/usuario.php';
  require_once '../Controllers/ExperienciaProfissionalController.php';
  require_once '../Controllers/OutrasFormacoesController.php';

 require_once '../Controllers/userControl.php';
 $fController = new FormacaoAcadController();



 if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioFA'])), date('Y-m-d',
strtotime($_POST["txtFimFA"])), $_POST["txtDescFA"], unserialize($_SESSION['Usuario'])->getID()) !=
false){

 include_once '../Views/Toasts/ToastSuccess.php';

 include_once '../Views/home.php'; }
 else
 {

 include_once '../Views/Toasts/ToastError.php';

 include_once '../Views/home.php'; }
}

 // btnAddFormacao^^

if(isset($_POST["btnExcluirFA"]))
{
  require_once '../Models/OutrasFormacoes.php';
  require_once '../Controllers/OutrasFormacoesController.php';

  require_once '../Controllers/FormacaoAcadController.php';
  require_once '../Models/usuario.php';
  require_once '../Controllers/ExperienciaProfissionalController.php';

 require_once '../Controllers/userControl.php';
 $fController = new FormacaoAcadController();


 if($fController->remover($_POST['id']) == true){

 include_once '../Views/Toasts/ToastSuccess.php';

 include_once '../Views/home.php'; }
 else
 {

 include_once '../Views/Toasts/ToastError.php';

 include_once '../Views/home.php'; }
}

//btnexcluirFA^^

if(isset($_POST["btnAddEP"]))
{
  require_once '../Models/OutrasFormacoes.php';

  require_once '../Controllers/FormacaoAcadController.php';
  require_once '../Models/usuario.php';
  require_once '../Controllers/ExperienciaProfissionalController.php';
  require_once '../Controllers/OutrasFormacoesController.php';

 require_once '../Controllers/userControl.php';
$epController = new ExperienciaProfissionalController();

if($epController->inserir(date('Y-m-d', strtotime($_POST['txtInicioEP'])), date('Y-m-d',
strtotime($_POST["txtFimEP"])), $_POST["txtEmpEP"], $_POST["txtDescEP"],
unserialize($_SESSION['Usuario'])->getID()) != false)
{
 include_once '../Views/Toasts/ToastSuccess.php';

 include_once '../Views/home.php'; }
 else
 {

 include_once '../Views/Toasts/ToastError.php';

 include_once '../Views/home.php'; }
}

//btnAddEP^^

if(isset($_POST["btnExcluirEP"]))
{
  require_once '../Controllers/OutrasFormacoesController.php';

  require_once '../Models/OutrasFormacoes.php';

  require_once '../Controllers/FormacaoAcadController.php';
  require_once '../Models/usuario.php';
  require_once '../Controllers/ExperienciaProfissionalController.php';

 require_once '../Controllers/userControl.php';
$epController = new ExperienciaProfissionalController();

if($epController->remover($_POST['idEP']) == true)
{
 include_once '../Views/Toasts/ToastSuccess.php';

 include_once '../Views/home.php'; }
 else
 {

 include_once '../Views/Toasts/ToastError.php';

 include_once '../Views/home.php'; }
}
 //btnExcluirEP^^

 if(isset($_POST["btnAddOF"]))
 {
   require_once '../Controllers/FormacaoAcadController.php';
   require_once '../Models/usuario.php';
   require_once '../Controllers/ExperienciaProfissionalController.php';
   require_once '../Controllers/OutrasFormacoesController.php';
 require_once '../Models/OutrasFormacoes.php';
  require_once '../Controllers/userControl.php';

 $fController = new OutrasFormacoesController();
 if($fController->inserir(date('Y-m-d', strtotime($_POST['txtInicioOF'])), date('Y-m-d', strtotime($_POST["txtFimOF"])), $_POST["txtDescOF"],
  unserialize($_SESSION['Usuario'])->getID()) != false)
  {
  include_once '../Views/Toasts/ToastSuccess.php';

  include_once '../Views/home.php'; }
  else
  {

  include_once '../Views/Toasts/ToastError.php';

  include_once '../Views/home.php';

}
 }
 //btnAddOF ^^



  if(isset($_POST["btnExcluirOF"]))
  {
    require_once '../Controllers/OutrasFormacoesController.php';

    require_once '../Models/OutrasFormacoes.php';

    require_once '../Controllers/FormacaoAcadController.php';
    require_once '../Models/usuario.php';
    require_once '../Controllers/ExperienciaProfissionalController.php';

   require_once '../Controllers/userControl.php';

  $fController = new OutrasFormacoesController();
 if($fController->remover($_POST['idOF']) == true)
   {
   include_once '../Views/Toasts/ToastSuccess.php';

   include_once '../Views/home.php'; }
   else
   {

   include_once '../Views/Toasts/ToastError.php';

   include_once '../Views/home.php'; }
  }
 //btnExcluirOF^^

 if(isset($_POST["btnLogout"]))
 {
session_destroy();
header("Location: ../");
exit();

 }

//btnLogout^^

if(isset($_POST["btnVoltar"]))
{
  header("Location: ../");
}

//btnVoltar^^
 	else {
 include_once 'Views/login.php';
 		}


 }






 ?>
