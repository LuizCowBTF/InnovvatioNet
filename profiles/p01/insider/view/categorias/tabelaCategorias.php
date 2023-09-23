<?php
require_once "../../classes/conexao.php";
$c = new conectar();
$conexao = $c->conexao();
$sql = "SELECT id_categoria, nome_categoria FROM categorias";
$result = mysqli_query($conexao, $sql);

?>

<table class="table table-hover table-condensed table-bordered" style="text-align: center;">
    <caption><label><h3 style="color:#FFFFFF;">Categorias</h3></label></caption>
	<tr>
		<td>Categoria</td>
		<td>Editar</td>
		<td>Excluir</td>
	</tr>

	<?php while($mostrar = mysqli_fetch_row($result)): ?>

	<tr>
		<td><?php echo $mostrar[1]; ?></td>
		<td>
			<span class="btn btn-warning btn-xs" data-toggle="modal" data-target="#atualizaCategoria" onclick="adicionarDado('<?php echo $mostrar[0]; ?>','<?php echo $mostrar[1]; ?>')">
				<span><i class="fas fa-edit"></i></span>
			</span>
		</td>
		<td>
			<span class="btn btn-danger btn-xs" onclick="eliminaCategoria('<?php echo $mostrar[0]; ?>')">
				<span><i class="fas fa-trash-alt"></i></span>
			</span>
		</td>
	</tr>

<?php endWhile; ?>
</table>
