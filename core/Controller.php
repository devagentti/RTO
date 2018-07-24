<<<<<<< HEAD
<?php
class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData); // Extrai o array transformando cada item do mesmo em um variável!! 
        require 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }


=======
<?php
class Controller {

    public function loadView($viewName, $viewData = array()) {
        extract($viewData); // Extrai o array transformando cada item do mesmo em um variável!! 
        require 'views/'.$viewName.'.php';
    }

    public function loadTemplate($viewName, $viewData = array()) {
        require 'views/template.php';
    }

    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/'.$viewName.'.php';
    }


>>>>>>> ee9005307494224feaa0340bc566c79104a532c0
}