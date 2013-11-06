<?php
class TareasController extends AppController {
	var $name = 'Tareas';
	var $helpers = array('Html', 'Form');

function index() {
	$this->set('tareas', $this->Tarea->find('all'));
}

function add() {
	if (!empty($this->data)) {
		$this->Tarea->create();
	if ($this->Tarea->save($this->data)) {
		$this->Session->setFlash('La Tarea ha sido salvada');
		$this->redirect(array('action'=>'index'), null, true);
	} else {
		$this->Session->setFlash('Tarea no salvada. Prueba de nuevo.');
	}
	}
}

}
?>