 <?php
 class Usuario extends AppModel
 {
 	public $validate = array(
        'usuario' => array(
            'rule' => array('minLength', 8),
            'message' => 'El nombre de usuario debe ser mínimo 8 caracteres'
        ),
        'usuario' => array(
            'rule' => 'isUnique',
            'message' => 'El usuario ya está registrado'
        ),
 		'nombre' => array(
            'Ingrese su nombre' => array(
                'rule' => 'notBlank',
                'message' => 'Ingrese su nombre'
            )
 		),
 		'correo' => array(
            'Correo valido' => array(
                'rule' => array('email'),
                'message' => 'Ingrese una dirección de correo valida'
            ),
        'correo' => array(
            'rule' => 'isUnique',
            'message' => 'el correo ya está registrado'
        )
        ),
 		'contrasena' => array(
            'rule' => 'notBlank',
            'message' => 'Ingrese su contraseña'
 		),
        'confirmar' => array(
            'rule' => array('confirmar'),
            'message' => 'Las contraseñas no coinciden!'
        ),
 		'telefono' => array(
            'required' => array(
                'rule' => 'notBlank',
                'message' => 'requerido'
            ),
 			'numeric' => array(
 				'rule' => 'numeric',
 				'message' => 'Solo valores numericos'
            ),
        'telefono' => array(
            'rule' => 'isUnique',
            'message' => 'el telefono ya esta registrado'
        )    
 		),
 	);

    public function confirmar($data)
    {
        if ($data['confirmar'] == $this->data['Usuario']['contrasena']) 
        {
            return true;
        }
        $this->invalidate('confirme su contraseña', 'Las contraseñas no coinciden');
        return false;
    }
    
    public function beforeSave($options = array()) {
        
        if ( !empty($this->data['Usuario']['contrasena']) ) {
            $this->data['Usuario']['contrasena'] = sha1($this->data['Usuario']['contrasena']);

        }
        return true;
    }    
 }