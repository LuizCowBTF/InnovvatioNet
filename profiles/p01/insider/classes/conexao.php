<?php 

class conectar
{
	private $servidor = 'localhost';
	private $usuario = 'innovv36_admin';
	private $senha = '';
	private $bd = 'innovv36__innovvatio';

	public function conexao()
    {
		$conexao = mysqli_connect($this->servidor, $this->usuario, $this->senha, $this->bd);

		return $conexao;
	}
}

?>