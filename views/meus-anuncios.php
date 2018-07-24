<<<<<<< HEAD
<div class="container">
	<h1>Meus Anúncios</h1>

	<a href="<?php echo BASE_URL; ?>anuncios/cadastrarProduto" class="btn btn-default">Adicionar Produto</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Titulo</th>
				<th>Valor</th>
				<th>Ações</th>
			</tr>
		</thead>
		<?php	    
		    foreach($anuncios as $anuncio):
		?>
		<tr>
			<td>
				<?php if(!empty($anuncio['url'])): ?>
				<img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="0" />
				<?php else: ?>
				<img src="<?php echo BASE_URL; ?>assets/images/default.jpg" height="50" border="0" />
				<?php endif; ?>
			</td>
			<td><?php echo $anuncio['titulo']; ?></td>
			<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
			<td>
				<a href="<?php echo BASE_URL; ?>anuncios/alterarProduto?id=<?php echo $anuncio['id']; ?>" class="btn btn-default">Editar</a>
				<a href="<?php echo BASE_URL; ?>anuncios/excluir?id=<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
=======
<div class="container">
	<h1>Meus Anúncios</h1>

	<a href="<?php echo BASE_URL; ?>anuncios/cadastrarProduto" class="btn btn-default">Adicionar Produto</a>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Foto</th>
				<th>Titulo</th>
				<th>Valor</th>
				<th>Ações</th>
			</tr>
		</thead>
		<?php	    
		    foreach($anuncios as $anuncio):
		?>
		<tr>
			<td>
				<?php if(!empty($anuncio['url'])): ?>
				<img src="<?php echo BASE_URL; ?>assets/images/anuncios/<?php echo $anuncio['url']; ?>" height="50" border="0" />
				<?php else: ?>
				<img src="<?php echo BASE_URL; ?>assets/images/default.jpg" height="50" border="0" />
				<?php endif; ?>
			</td>
			<td><?php echo $anuncio['titulo']; ?></td>
			<td>R$ <?php echo number_format($anuncio['valor'], 2); ?></td>
			<td>
				<a href="<?php echo BASE_URL; ?>anuncios/alterarProduto?id=<?php echo $anuncio['id']; ?>" class="btn btn-default">Editar</a>
				<a href="<?php echo BASE_URL; ?>anuncios/excluir?id=<?php echo $anuncio['id']; ?>" class="btn btn-danger">Excluir</a>
			</td>
		</tr>
		<?php endforeach; ?>
	</table>
>>>>>>> ee9005307494224feaa0340bc566c79104a532c0
</div>