<?php
class Core {
    
    public function run() {
        
        $url = '/';
        if (isset($_GET['url'])) { // se foi enviado alguma coisa.
            $url .= $_GET['url'];
        }

        $params = array();

        if (!empty($url) && $url != '/') {
            $url = explode('/', $url); // quebra a url em array pela '/'
            array_shift($url); // remove o primeiro item do array.

            $currentController = $url[0].'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }

            //print_r($url);
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }   

        $c = new $currentController(); 
        call_user_func_array(array($c, $currentAction), $params); 

        // echo "<hr/>";
        // echo "CONTROLLER: ".$currentController."<br/>";
        // echo "ACTION: ".$currentAction."<br/>";
        // echo "PARAMS: ".print_r($params, true)."<br/>";
    }
}