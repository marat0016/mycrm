<?php

class Theme extends CI_Model {

    private $title = '';

    function __construct()
    {
        parent::__construct();
    }
    
    public function setTitle($t){
        $this->title = $t;
    }
    
    public function getTitle(){
        return $this->title;
    }

}