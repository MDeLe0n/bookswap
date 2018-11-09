<?php
 class Libro extends AppModel
 {
 	public $validate = array(
 		'titulo' => array(
 			'rule' => 'notBlank'
 		),
 		'autor' => array(
 			'rule' => 'notBlank'
 		),
 		'editorial' => array(
 			'rule' => 'notBlank'
 		),
 		'precio' => array(
 			'rule' => 'notBlank'
 		),
 		'numeric' => array(
 			'rule' => 'numeric',
 			'message' => 'Solo valores numericos'
 		),
        'sipnosis' => array(
            'rule' => 'notBlank'
        ),
        'categoria' => array(
            'rule' => 'notBlank'
        ),
        'estado' => array(
            'rule' => 'notBlank'
        ),  
        'imagen' => array(
            'rule' => 'notBlank'
        ),              
 	);   
 }