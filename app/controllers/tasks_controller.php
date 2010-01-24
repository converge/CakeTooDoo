<?php

class TasksController extends AppController {

	var $name = 'Tasks';
	var $helpers = array('Html', 'Form');

	function index() {
		$this->set('tasks', $this->Task->find('all'));
	}
	
	function add() {
		// verifica se os dados do POST existem
		if (!empty($this->data)) {			
			// prepara o model p/ gravar no banco
			$this->Task->create();
			// grava no banco
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash('The Task has been saved');
				$this->redirect(array('action'=>'index'), null, true);
			} else {
				$this->Session->setFlash('The not saved, try again.');
			}
		}
	}
	
	function edit($id = null) {
		if (!$id) {
			$this->Session->setFlash('Invalid Task');
			$this->redirect(array('action' => 'index'), null, true);
		}
		
		if (empty($this->data)) {
			$this->data = $this->Task->find(array('id' => $id));
		} else {
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash('This task has been saved');
				$this->redirect(array('action'=>'index'), null, true);				
			} else {
				$this->Session->setFlash('The task could not be saved, try again');
			}
		}
	}
}

?>