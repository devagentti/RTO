<?php
class cadastroProfissionalController extends Controller {

    public function index() {

        $this->loadTemplate('cadastro-profissional'); 
    }

    public function incluir() {

        echo "test de cadastro do profissional";
        exit;
    }
}

?>