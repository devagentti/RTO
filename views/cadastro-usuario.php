<div class="container">
	<h2>Informe os seus dados abaixo</h2><br />
    <form method="POST" action="<?php echo BASE_URL; ?>cadastroUsuario/incluir">
		<div class="form-group">
			<label for="nome">Nome:</label>
			<input type="text" name="nome" id="nome" class="form-control" placeholder="seu nome" />
		</div>
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" placeholder="seu e-mail" />
		</div>
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control" placeholder="sua senha" />
		</div>
		<div class="form-group">
			<label for="celular">Celular:</label><span> Ex: (99)99999-9999</span>
			<input type="text" name="celular" id="celular" class="form-control" placeholder="seu celular" />
		</div>

        <input type="submit" value="Cadastrar" class="btn btn-default" />
	</form>
</div>
<br /><br />