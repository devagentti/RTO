<?php
class Model {

    protected $con_db; // serve para armazenar o global $db.

    public function __construct() {
        global $db; // para pegar o global que criamos no config.
        $this->con_db = $db;
    }
}