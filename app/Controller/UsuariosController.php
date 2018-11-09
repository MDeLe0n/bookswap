<?php
class UsuariosController extends AppController
{
	public $helpers = array('Html', 'Form', 'Time');
	public $components = array('Session');

	public function beforeFilter()
	{
		parent::beforeFilter();
		if (!in_array($this->request->params['action'], array('login', 'logout'))) 
		{
			if (!$this->Session->check('usuario')) 
			{
				return $this->redirect(array('action'=>'login'));
			}
		}
	}

	public function index()
	{
		$this->set('usuarios', $this->Usuario->find('all'));
	}

	public function ver($id = null)
	{
		if (!$id)
		{
			throw new NotFoundException('Datos Invalidos');
		}
		$usuario = $this->Usuario->findById($id);

		if (!$usuario)
		{
			throw new NotFoundException('El usuario no existe');
		}
		$this->set('usuario', $usuario);
	}

	public function nuevo()
	{
		if ($this->request->is('post')) 
		{
			$this->Usuario->create();
			if ($this->Usuario->save($this->request->data)) 
			{
				$this->Session->setFlash('Usuario Creado', 'default', array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('No se pudo crear el Usuario');
		}
	}

	public function editar($id = null)
	{
		if (!$id) 
		{
			throw new NotFoundException('Datos Invalidos');	
		}

		$usuario = $this->Usuario->findById($id);
		if (!$usuario) 
		{
			throw new NotFoundException('Usuario no encontrado');
		}

		if ($this->request->is('post', 'put'))
		{
			$this->Usuario->id = $id;

			if ($this->Usuario->save($this->request->data))
			{
				$this->Session->setFlash('Usuario Modificado'. $element = 'default', $params = array('class' => 'success'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash('El registro no pudo ser modificado');
		}

		if (!$this->request->data) 
		{
			$this->request->data = $usuario;
		}
	}

	public function eliminar($id)
	{
		if ($this->request->is('get')) 
		{
			throw new MethodNotAllowedException('ERROR');
		}
		if ($this->Usuario->delete($id))
		{
			$this->Session->setFlash('Usuario eliminado', $element = 'default', $params = array('class' => 'success'));
			return $this->redirect(array('action' => 'index'));
		}
	}

	public function login() 
	    {
        //$this->layout = 'login';
        $this->request->data;
        
        if($this->Session->check('usuario')) return $this->redirect('/');

        if (!empty($this->request->data)) 
        {
            $usuario = $this->Usuario->find('first', array(
                'conditions' => array(
                    'Usuario.usuario' => $this->request->data['Login']['Usuario'],
                    'Usuario.contrasena' => sha1($this->request->data['Login']['Contraseña']),
                ),
            ));

            if (empty($usuario))
            {
                $this->Flash->error('Nombre de usuario o contraseña inválida.');
//                return $this->redirect(array('controller'=>'usuarios','action'=>'login'));
            } else 
            {
                $this->Flash->success('Bienvenido.');
                $this->Session->write('usuario', $usuario['Usuario']['id']);
                return $this->redirect(array('controller' => 'usuarios', 'action' => 'index'));
            }
        }
    }

    public function logout() 
    {
        $this->Session->delete('usuario');
        return $this->redirect('/');
    }
}