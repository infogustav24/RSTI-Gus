<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

<html lang="pt-br">
<head>

	<meta charset="utf-8">
	<meta> http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Mini-Crud com CodeIgniter 3.0 e Bootstrap</title>

	<?php echo link_tag('assets/bootstrap/css/bootstrap.min.css')?>
	<?php echo link_tag('assets/bootstrap/css/bootstrap-theme.min.css')?>
</head>

<body>

	<div class="container">
		<div class="col-md-12">
		<h1 class="text-center">Mini-Crud com CodeIgniter 3.0 e Bootstrap!</h1>
		<div class="row">
			<?php echo anchor('cadastro/create', 'Novo Cadastro', array('class'  => 'btn btn-sucess')); ?>
		</div>	
			
		<div class "row">
			<h3><?php echo $cadastros->num_rows(); ?> registro9(s) </h3>
		</div>
		
			<div class="row">
				<?php if ($cadastros->num_rows() > 0) { ?>
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Código</th>
								<th>Nome</th>
								<th>Telefone</th>
								<th>E-mail</th>
								<th>Observações</th>
								<th>Ações</th>
							</tr>	
						</thead>

						<tbody>
							<?php foreach ($cadastros -> result() as $cadastro) { ?>
								<tr>
									<td><?php echo $cadastro->id?></td>
									<td><?php echo $cadastro->nome?></td>
									<td><?php echo $cadastro->telefone?></td>
									<td><?php echo $cadastro->email?></td>
									<td><?php echo $cadastro->observacoes?></td>
								</tr>
					<?php	} ?>

						</tbody>
				</table>

				<?php}else{ ?>
					<h4>Nenhum registro cadastrado</h4>
				<?php } ?>
			}	
		</div>	
	</div>
</div>		

<div class="modal fade" id="modal_confirmation">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Confirmação de exclusão</h4>
			</div>
			
			<div class="modal-body">
				<p>Deseja realmente excluir o registro <strong><span id="nome_exclusao"></span></strong>? </p>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-defalt" data-dismiss="modal">Agora não</button>
				<button type="button" class="btn btn-danger" id="btn_excluir">Sim!! </button>
			</div>			
		</div>
	</div>
</div>

<script src="<?php echo base_url('assets/js/jquery.js') ?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>

	<script>

		var base_url = "<?php base_url(); ?>";

		$(function() {
			$('.confirma_exclusao').on('click', function(e)) {
				e.preventDefault();

				var nome = $(this) .data('nome');
				var id = $(this) .data('id');

				$('#modal_confirmation') .data('nome', nome);
				$('#modal_confirmation') .data('id', id);
				$('#modal_confirmation') .data('show');
			});

			$('#modal_confirmation') .on('show.bs.modal', function()) {
				var nome = $(this) .data('nome');
				document.location.href = base_url + "index.php/cadastro/delete" +id;
			});

		});
	</script>

</body>

</html>	

