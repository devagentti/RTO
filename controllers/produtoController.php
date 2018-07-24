<?php
class produtoController extends Controller {

    public function index() {

    }

    public function abrir($id) {
        
        $dados = array();
        $anuncio = new Anuncios();
        $usuario = new Usuarios();

        if (empty($id)) {
            header('Location: '.BASE_URL);
            exit;
        }

        $info = $anuncio->getAnuncio($id);
        $dados['info'] = $info;

        $this->loadTemplate('produto', $dados);
    }
}

?>