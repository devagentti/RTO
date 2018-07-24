<?php
class cadastroLojaController extends Controller {

    public function index() {

        $this->loadTemplate('cadastro-loja');       
    }

    public function incluir() {

        if(isset($_POST['nome']) && !empty($_POST['nome'])) {
            
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = $_POST['senha'];
            $celular = addslashes($_POST['celular']);
            
            $nomeFantasia = addslashes($_POST['nomeFantasia']);
            $razaoSocial = addslashes($_POST['razaoSocial']);
            $cpf = addslashes($_POST['cpf']);
            $cnpj = addslashes($_POST['cnpj']);                    
            $facebook = addslashes($_POST['facebook']);   
            
            $usuario = new Usuarios();                        

            if(!empty($nome) && !empty($email) && !empty($senha)) {

                $id_usuario = $usuario->cadastrar($nome, $email, $senha, $celular);

                if($id_usuario > 0) {

                    $loja = new Loja();
                    if($loja->cadastrar($nomeFantasia, $razaoSocial, $cpf, $cnpj, $facebook, $id_usuario)) {
                        ?>
                            <div class="alert alert-success">
                                <strong>Parabéns!!</strong> O cadastro foi realizado com sucesso! <a href="<?php echo BASE_URL; ?>login" class="alert-link">Faça o login agora</a>
                            </div>
                        <?php
                    } 
                } else {
                ?>
                    <div class="alert alert-warning">
                        Este e-mail de usuário já existe! <a href="<?php echo BASE_URL; ?>login" class="alert-link">Faça o login agora</a>
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