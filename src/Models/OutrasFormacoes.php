
<?php

class OutrasFormacoes{


	private $id;
	private $idusuario;
	private $inicio;
	private $fim;
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


	$sql = "INSERT INTO OutrasFormacoes (idusuario, inicio, fim, descricao)
	VALUES ('".$this->idusuario."', '".$this->inicio."','".$this->fim."','".$this->descricao."')";

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


	$sql = "DELETE FROM OutrasFormacoes WHERE idformacaoAcademica =".$id.";";

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




public function listaFormacoes($idusuario)
{

	require_once 'conexaoDB.php';

	$objectCon = new conexaoDB();
	$conn = $objectCon->conectar();
	if($conn->connect_error){
		die("Connection error: ". $conn->connect_error);
	}



	$sql = "SELECT * FROM OutrasFormacoes	 WHERE idusuario = '".$idusuario."'";

	$re = $conn->query($sql);
	$conn->close();
	return $re;

}
}

?>
