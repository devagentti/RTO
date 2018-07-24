<<<<<<< HEAD
<?php
class produtoController extends Controller {

    public function index() {

    }

    public function abrir($id) {
        
        $dados = array();
        $a = new Anuncios();
        $u = new Usuarios();

        if (empty($id)) {
            header('Location: '.BASE_URL);
            exit;
        }

        $info = $a->getAnuncio($id);
        $dados['info'] = $info;

        $this->loadTemplate('produto', $dados);
    }
}

=======
<?php
class produtoController extends Controller {

    public function index() {

    }

    public function abrir($id) {
        
        $dados = array();
        $a = new Anuncios();
        $u = new Usuarios();

        if (empty($id)) {
            header('Location: '.BASE_URL);
            exit;
        }

        $info = $a->getAnuncio($id);
        $dados['info'] = $info;

        $this->loadTemplate('produto', $dados);
    }
}

>>>>>>> ee9005307494224feaa0340bc566c79104a532c0
?>