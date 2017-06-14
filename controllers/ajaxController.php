<?php
class ajaxController extends controller {
    
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        
    }

    public function insertEvent() {
    	
    	$title = addslashes($_POST['title']);
    	$start = $_POST['start'];
    	$end = $_POST['end'];

    	$event = new Event();
    	echo json_encode($event->add($title, $start, $end));
    	
    }

    public function getEvents() {
    	$event = new Event();
    	echo json_encode($event->getEvents());
    }

    public function removeEvent() {
    	$event = new Event();

    	if (isset($_POST['id']) && !empty($_POST['id'])) {
    		$id = $_POST['id'];
            $event->remove($id);
            echo json_encode('1');
    	}
    }

    public function updateEvent() {
        $event = new Event();
        
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $id = $_POST['id'];
            $start = $_POST['start'];
            $end = $_POST['end'];
            //$allDay = $_POST['allDay'];

            $event->update($id, $start, $end);
           
            echo json_encode("1");

        }
    }
    
}