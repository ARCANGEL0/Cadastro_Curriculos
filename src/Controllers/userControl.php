<?php
if(!isset($_SESSION))
 {
 session_start();
 }
class userControl{


 public function inserir($nome, $cpf, $email,$senha) {
 require_once('../Models/usuario.php');


 $usuario = new usuario();
 $usuario->setNome($nome);
 $usuario->setCPF($cpf);
 $usuario->setEmail($email);
 $usuario->setSenha($senha);
 //return $usuario->getNome();
 $r = $usuario->inserirBD();
 $_SESSION['Usuario'] = serialize($usuario);
 return $r;
 }



 public function atualizar($id, $nome, $cpf, $email, $dataNascimento) {
 require_once '../Models/usuario.php';
 $usuario = new usuario();
 $usuario->setId($id);
 $usuario->setNome($nome);
 $usuario->setCPF($cpf);
 $usuario->setEmail($email);
 $usuario->setDataNascimento($dataNascimento);
 $r = $usuario->atualizarBD();
 $_SESSION['Usuario'] = serialize($usuario);
 return $r;
 }

public function login($cpf, $senha)
 {
 require_once '../Models/usuario.php';
 $usuario = new usuario();
 $usuario->carregarUsuario($cpf);
 if($usuario->getSenha() == $senha)
 {
 $_SESSION['Usuario'] = serialize($usuario);
 return true;
 }
 else
 {
 return false;
 }
 }

}
?>