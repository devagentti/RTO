
<?php if (!empty($msg)) { ?>
    <div class="alert alert-danger">
        <?php echo $msg; ?>
    </div>
<?php } ?>  

<div class="container">
    <h1>Login</h1>
    <form method="POST" action="<?php echo BASE_URL; ?>login/logar">
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control" />
		</div>
		<input type="submit" value="Fazer Login" class="btn btn-default" />
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		Ainda não se cadastrou? <a href="<?php echo BASE_URL; ?>cadastroUsuario">Clique aqui</a>
	</form>
</div>