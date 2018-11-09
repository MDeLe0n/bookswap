<?php
class LibrosController extends AppController
{
	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Session');

	public function index()
	{
		$this->set('libros', $this->Libro->find('all'));
	}

	public function ver($id = null)
	{
		if (!$id)
		{
			throw new NotFoundException('Datos Invalidos');
		}
		$libro = $this->Libro->findById($id);

		if (!$libro)
		{
			throw new NotFoundException('El libro no existe');
		}
		$this->set('libro', $libro);
	}

	public function nuevo()
	{
		if ($this->request->is('post')) 
		{
			$this->Libro->create();
			if ($this->Libro->save($this->request->data)) 
			{
				$this->Session->setFlash('Libro Creado', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('No se pudo crear el Libro');
		}
	}

	public function editar($id = null)
	{
		if (!$id) 
		{
			throw new NotFoundException('Datos Invalidos');	
		}

		$libro = $this->Libro->findById($id);
		if (!$libro) 
		{
			throw new NotFoundException('Libro no encontrado');
		}

		if ($this->request->is('post', 'put'))
		{
			$this->Libro->id = $id;

			if ($this->Libro->save($this->request->data))
			{
				$this->Session->setFlash('Libro Modificado'. $element = 'default', $params = array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El registro no pudo ser modificado');
		}

		if (!$this->request->data) 
		{
			$this->request->data = $libro;
		}
	}

	public function eliminar($id)
	{
		if ($this->request->is('get')) 
		{
			throw new MethodNotAllowedException('ERROR');
		}
		if ($this->Libro->delete($id))
		{
			$this->Session->setFlash('Libro eliminado', $element = 'default', $params = array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
	}
}	