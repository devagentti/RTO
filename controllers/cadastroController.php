<?php
class cadastroController extends Controller {

    public function index() {

        $this->loadTemplate('cadastro');       
    }

    public function incluir() {

        $usuario = new Usuarios();
        if(isset($_POST['nome']) && !empty($_POST['nome'])) {

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];
            $telefone = addslashes($_POST['telefone']);

            if(!empty($nome) && !empty($email) && !empty($senha)) {
                if($usuario->cadastrar($nome, $email, $senha, $telefone)) {
                ?>
                    <div class="alert alert-success">
                        <strong>Parabéns!</strong> Cadastrado com sucesso. <a href="<?php echo BASE_URL; ?>login" class="alert-link">Faça o login agora</a>
                    </div>
                <?php
                } else {
                ?>
                    <div class="alert alert-warning">
                        Este usuário já existe! <a href="<?php echo BASE_URL; ?>login" class="alert-link">Faça o login agora</a>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class="alert alert-warning">
                    Preencha todos os campos!
                </div>
                <?php
            }
        } else {
            ?>
            <div class="alert alert-warning">
                Preencha todos os campos!
            </div>
            <?php
        }
        
        $this->loadTemplate('cadastro');
    }

}