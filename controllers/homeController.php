<?php
class homeController extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $data = array();
        $e = new Event();
        $e->getEvents();
        $this->loadTemplate('home', $data);
    }
    
}
?>