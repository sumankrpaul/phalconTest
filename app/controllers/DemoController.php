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

}

