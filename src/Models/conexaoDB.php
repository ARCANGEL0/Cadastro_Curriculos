
<?php 

Class conexaoDB{
	

	private $maquina = "localhost";
	private $user = "root";
	private $password ="toor";
	private $db = "Formacoes";


public function conectar()
{
	$conn = new mysqli($this->maquina, $this->user,$this->password, $this->db);
	return $conn;
}

}

 ?>