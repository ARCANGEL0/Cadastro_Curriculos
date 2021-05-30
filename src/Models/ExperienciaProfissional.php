
<?php

class ExperienciaProfissional{


	private $id;
	private $idusuario;
	private $inicio;
	private $fim;
  private $empresa;
	private $descricao;


public function setID($id)
{
	$this->id = $id;

}
public function getID()
{
	return $this->id;
}


public function setIdUsuario($idusuario)
{
	$this->idusuario = $idusuario;

}
public function getIdUsuario()
{
	return $this->idusuario;
}


public function setInicio($inicio)
{
	$this->inicio = $inicio;

}
public function getInicio()
{
	return $this->inicio;
}


public function setFim($fim)
{
	$this->fim = $fim;

}
public function getFim()
{
	return $this->fim;
}
public function setEmpresa($empresa)
{
	$this->empresa = $empresa;

}
public function getEmpresa()
{
	return $this->empresa;
}

public function setDescricao($descricao)
{
	$this->descricao = $descricao;

}
public function getDescricao()
{
	return $this->descricao;
}



public function inserirBD()
{

	require_once 'conexaoDB.php';

	$objectCon = new conexaoDB();
	$conn = $objectCon->conectar();
	if($conn->connect_error){
		die("Connection error: ". $conn->connect_error);
	}


	$sql = "INSERT INTO experienciaprofissional (idusuario, inicio, fim,empresa, descricao)
	VALUES ('".$this->idusuario."', '".$this->inicio."','".$this->fim."','".$this->empresa."','".$this->descricao."')";

	if($conn->query($sql) === TRUE) {
		$this->id = mysqli_insert_id($conn);
		$conn->close();
		return TRUE;
	}
	else {
		$conn->close();
		return FALSE;
	}
}



public function excluirBD($id)
{

	require_once 'conexaoDB.php';

	$objectCon = new conexaoDB();
	$conn = $objectCon->conectar();
	if($conn->connect_error){
		die("Connection error: ". $conn->connect_error);
	}


	$sql = "DELETE FROM experienciaprofissional WHERE idexperienciaprofissional =
	'".$id."';";

	if($conn->query($sql) === TRUE) {
		$this->id = mysqli_insert_id($conn);
		$conn->close();
		return TRUE;
	}
	else {
		$conn->close();
		return FALSE;
	}
}




public function listaExperiencias($idusuario)
{

	require_once 'conexaoDB.php';

	$objectCon = new conexaoDB();
	$conn = $objectCon->conectar();
	if($conn->connect_error){
		die("Connection error: ". $conn->connect_error);
	}



	$sql = "SELECT * FROM experienciaprofissional WHERE idusuario = '".$idusuario."'";

	$re = $conn->query($sql);
	$conn->close();
	return $re;

}
}

?>
