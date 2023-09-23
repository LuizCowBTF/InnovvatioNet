<?php
require_once 'classes/conexao.php';
$obj = new conectar();
$conexao = $obj->conexao();

$sql = "SELECT * from usuarios where email='admin'";
$result = mysqli_query($conexao, $sql);

$validar = 0;
if(mysqli_num_rows($result) > 0)
	{
		$validar = 1;
	}
?>

<!DOCTYPE html>
<html lang='pt-br'>
	<head>
		<title>Innovvatio - Login</title>
		<link rel='stylesheet' type='text/css' href='../assets/css/bootstrap.css'>
		<script src='../assets/js/jquery-3.2.1.min.js'></script>
		<script src='../assets/js/funcoes.js'></script>
	</head>
	<body style='background-color: #02CAD4'>
		<br><br><br>
		<div class='container'>
			<div class='row'>
				<div class='col-sm-4'></div>
				<div class='col-sm-4'>
					<div class='panel panel-primary'>
						<div class='panel panel-heading'>
							<h3 style='text-align: center;'>Sistema Innovvatio</h3>
							<br>
							<img src='../assets/images/LOGO.png' width='100%'>
						</div>
						<div class='panel panel-body'>
							<form id='frmLogin'>
								<label>Email</label>
								<input type='email' class='form-control input-sm' name='email' id='email'>
								<label>Senha</label>
								<input type='password' class='form-control input-sm' name='senha' id='senha'>
								<p></p>
								<span class='btn btn-primary btn-sm' id='entrarSistema'>Entrar</span>
								<?php if(!$validar): ?>
								<a href='registrar.php' class='btn btn-danger btn-sm'>Registrar</a>
								<?php 
									endif;
								?>
							</form>
						</div>
					</div>
				</div>
				<div class='col-sm-4'></div>
			</div>
		</div>
	</body>
</html>

<script type='text/javascript'>
	$(document).ready(function()
	{
		$('#entrarSistema').click(function()
		{
			vazios=validarFormVazio('frmLogin');
			if(vazios > 0)
			{
				alert('Preencha os campos!!');
				return false;
			}

			dados=$('#frmLogin').serialize();
			$.ajax(
			    {
                    type:'POST',
                    data:dados,
                    url: 'procedimentos/login/login.php',
                    success:function(r)
                    {
                        //alert(r);
                        if(r==1)
                            {
                                window.location='view/inicio.php';
                            }
                            else
                            {
                                alert('Acesso Negado!!');
                            }
    				}
    			}
            );
    	});
	});
</script>

