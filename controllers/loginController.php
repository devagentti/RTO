<<<<<<< HEAD
<?php
class loginController extends Controller {

    public function index() {                
        $this->loadTemplate('login');
    }

    public function logar() {
        
        $dados = array();
        $usuario = new Usuarios();

        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);        
            $senha = $_POST['senha'];                          
                        
            if($usuario->login($email, $senha)) { 
                header('Location: '.BASE_URL);
                exit;
            } else {                
                $dados['msg'] = "Usuário e/ou Senha errados!";
            }
            
        } else {
            $dados['msg'] = "Favor informar o login e/ou senha";
        }

        $this->loadTemplate('login', $dados);
    }
    
    public function sair() {
    
        session_start();
        unset($_SESSION['cLogin']);
        header("Location: ".BASE_URL);
    }

}

=======
<?php
class loginController extends Controller {

    public function index() {                
        $this->loadTemplate('login');
    }

    public function logar() {
        
        $dados = array();
        $usuario = new Usuarios();

        if(isset($_POST['email']) && !empty($_POST['email'])) {
            $email = addslashes($_POST['email']);        
            $senha = $_POST['senha'];                          
                        
            if($usuario->login($email, $senha)) { 
                header('Location: '.BASE_URL);
                exit;
            } else {                
                $dados['msg'] = "Usuário e/ou Senha errados!";
            }
            
        } else {
            $dados['msg'] = "Favor informar o login e/ou senha";
        }

        $this->loadTemplate('login', $dados);
    }
    
    public function sair() {
    
        session_start();
        unset($_SESSION['cLogin']);
        header("Location: ".BASE_URL);
    }

}

>>>>>>> ee9005307494224feaa0340bc566c79104a532c0
