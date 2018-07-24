<<<<<<< HEAD
<div class="container">
	<h1>Adicionar Produto</h1>

	<form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>anuncios/incluir">

		<div class="form-group">
			<label for="categoria">Categoria:</label>
			<select name="categoria" id="categoria" class="form-control">
				<?php					
					foreach($cats as $cat):
				?>
					<option value="<?php echo $cat['id']; ?>"><?php echo utf8_encode($cat['nome']); ?></option>
				<?php
					endforeach;
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo" id="titulo" class="form-control" />
		</div>
		<div class="form-group">
			<label for="valor">Valor:</label>
			<input type="text" name="valor" id="valor" class="form-control" />
		</div>
		<div class="form-group">
			<label for="descricao">Descrição:</label>
			<textarea class="form-control" name="descricao"></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado de Conservação:</label>
			<select name="estadoConservacao" id="estadoConservacao" class="form-control">
				<option value="0">Ruim</option>
				<option value="1">Bom</option>
				<option value="2">Ótimo</option>
			</select>
		</div>
		<input type="submit" value="Adicionar" class="btn btn-default" />
	</form>
=======
<div class="container">
	<h1>Adicionar Produto</h1>

	<form method="POST" enctype="multipart/form-data" action="<?php echo BASE_URL; ?>anuncios/incluir">

		<div class="form-group">
			<label for="categoria">Categoria:</label>
			<select name="categoria" id="categoria" class="form-control">
				<?php					
					foreach($cats as $cat):
				?>
					<option value="<?php echo $cat['id']; ?>"><?php echo utf8_encode($cat['nome']); ?></option>
				<?php
					endforeach;
				?>
			</select>
		</div>
		<div class="form-group">
			<label for="titulo">Titulo:</label>
			<input type="text" name="titulo" id="titulo" class="form-control" />
		</div>
		<div class="form-group">
			<label for="valor">Valor:</label>
			<input type="text" name="valor" id="valor" class="form-control" />
		</div>
		<div class="form-group">
			<label for="descricao">Descrição:</label>
			<textarea class="form-control" name="descricao"></textarea>
		</div>
		<div class="form-group">
			<label for="estado">Estado de Conservação:</label>
			<select name="estadoConservacao" id="estadoConservacao" class="form-control">
				<option value="0">Ruim</option>
				<option value="1">Bom</option>
				<option value="2">Ótimo</option>
			</select>
		</div>
		<input type="submit" value="Adicionar" class="btn btn-default" />
	</form>
>>>>>>> ee9005307494224feaa0340bc566c79104a532c0
</div>