<?php

class DemoController extends ControllerBase
{
	public $model;
	
	public function initialize () {
		
		$this->model = new Demotable();
	}
    public function indexAction()
    {
    	$this->view->contents = $this->model::find();
    	$this->view->msg = "Congratulation db connection is working !!!! try more :)";
    }
    
    public function deleteAction($firstname){
    	//return $firstname;
    	$this->view->disable();
    	if($this->model->deleteValue($firstname)){
    		echo true;
    	}else{
    		echo false;
    	}
    	//return $result;
    }
    
    public function insertAction($firstname,$lastname,$middlename = null) {
    	$this->view->disable();
    	$data = array("firstname" => $firstname,"middlename" => $middlename, "lastname" => $lastname);
    	//var_dump($data);
    	if($this->model->insertValue($data)){
    		echo true;
    	}else{
    		echo false;
    	}
    }

}

