<div class="container">
	<h2>Informe os seus dados abaixo</h2><br />
    <form method="POST" action="<?php echo BASE_URL; ?>cadastroLoja/incluir">
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
		<br />

		<hr />
		
		<br />
		<div class="form-group">
			<label for="nome-fantasia">Nome fantasia:</label>
			<input type="text" name="nomeFantasia" id="nomeFantasia" class="form-control" placeholder="nome fantasia" />
		</div>
		<div class="form-group">
			<label for="razao-social">Razão Social:</label>
			<input type="text" name="razaoSocial" id="razaoSocial" class="form-control" placeholder="razão social" />
		</div>
		<div class="form-group">
			<label for="cpf">CPF:</label><span>  Caso tenha CNPJ o CPF é OPCIONAL.</span>
			<input type="text" name="cpf" id="cpf" class="form-control" placeholder="seu CPF" />
		</div>
		<div class="form-group">
			<label for="cnpj">CNPJ:</label>
			<input type="text" name="cnpj" id="cnpj" class="form-control" placeholder="CNPJ" />
		</div>
		<div class="form-group">
			<label for="facebook">Facebook:</label>
			<input type="text" name="facebook" id="facebook" class="form-control" placeholder="facebook da loja" />
		</div>

		<input type="submit" value="Cadastrar" class="btn btn-default" />
	</form>
</div>
<br /><br />


