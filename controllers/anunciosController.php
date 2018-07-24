<?php
class anunciosController extends Controller {

    public function index() {

        $dados = array();
        $anuncio = new Anuncios();
        $dados['anuncios'] = $anuncio->getMeusAnuncios();

        $this->loadTemplate('meus-anuncios', $dados);
    }

    public function cadastrarProduto() {
        
        $dados = array();        
		$categoria = new Categorias();
		$cats = $categoria->getLista();

        $dados['cats'] = $cats; 

        $this->loadTemplate('add-anuncio', $dados);
    }

    public function incluir() {
        
        $array = array();
        $anuncio = new Anuncios();

        if ((!empty($_POST['titulo'])) && (!empty($_POST['valor'])) && (!empty($_POST['descricao']))) {
            $categoria = $_POST['categoria'];
            $titulo = addslashes($_POST['titulo']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes($_POST['descricao']);
            $estadoConservacao = $_POST['estadoConservacao'];

            $anuncio->addAnuncio($titulo, $categoria, $valor, $descricao, $estadoConservacao);
            
            ?>
                <div class="alert alert-success">
                    <strong>Produto</strong> cadastrado com sucesso.                     
                </div>
            <?php
        } else {
            ?>
                <div class="alert alert-warning">
                    Ocorreu algum erro no cadastro de produto.                     
                </div>
            <?php
        }

        $dados['anuncios'] = $anuncio->getMeusAnuncios();
        $this->loadTemplate('meus-anuncios', $dados);
    }

    public function alterarProduto() { 
        
        $dados = array();

        $categoria = new Categorias();
        $cats = $categoria->getLista();

        $anuncio = new Anuncios();

        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $info = $anuncio->getAnuncio($_GET['id']);
        } else {
        ?>
            <div class="alert alert-warning">
                    Ocorreu algum erro durante o processo.
            </div>
        <?php        
        }    

        $dados['info'] = $info;
        $dados['cats'] = $cats;

        $this->loadTemplate('editar-produto', $dados);
    }

    public function editar() {

        $anuncio = new Anuncios();
        if(isset($_POST['titulo']) && !empty($_POST['titulo'])) {
        
            $titulo = addslashes($_POST['titulo']);
            $categoria = addslashes($_POST['categoria']);
            $valor = addslashes($_POST['valor']);
            $descricao = addslashes($_POST['descricao']);
            $estado = addslashes($_POST['estado']);
        
            if(isset($_FILES['fotos'])) {
                $fotos = $_FILES['fotos'];
            } else {
                $fotos = array();
            }                       

            $anuncio->editAnuncio($titulo, $categoria, $valor, $descricao, $estado, $fotos, $_GET['id']);

            ?>
                <div class="alert alert-success">
                    Produto editado com sucesso!
                </div>
            <?php
        }                

        $dados['anuncios'] = $anuncio->getMeusAnuncios();
        $this->loadTemplate('meus-anuncios', $dados);        
    }

    public function excluir() {

        if(empty($_SESSION['cLogin'])) {
            header("Location: ".BASE_URL);
            exit;
        }

        $dados = array();        
        $anuncio = new Anuncios();
        
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $anuncio->excluirAnuncio($_GET['id']);
            
            ?>
                <div class="alert alert-success">
                    Produto excluído com sucesso!
                </div>
            <?php
        }
                        
        $dados['anuncios'] = $anuncio->getMeusAnuncios();
        $this->loadTemplate('meus-anuncios', $dados);        
    }

    public function excluirFoto() {

        if(empty($_SESSION['cLogin'])) {
            header("Location: ".BASE_URL);            
            exit;
        }
                    
        $anuncio = new Anuncios();        
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $id_anuncio = $anuncio->excluirFoto($_GET['id']);            
        }
        
        if(isset($id_anuncio)) {            
            header("Location: ".BASE_URL."/anuncios/alterarProduto?id=".$id_anuncio);
        } else {
            $dados['anuncios'] = $anuncio->getMeusAnuncios();
            $this->loadTemplate('meus-anuncios', $dados);                       
        } 
    }

}