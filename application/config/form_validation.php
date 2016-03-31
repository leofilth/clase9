<?php
$config=array
(
    /*
     *Formulario
     */
    'crud/add'
    =>array(
        array('field'=>'nom','label'=>'Nombre','rules'=>'required|is_string|trim'),
        array('field'=>'tel','label'=>'Telefono','rules'=>'numeric|trim'),
        array('field'=>'correo','label'=>'Correo','rules'=>'valid_email|required|trim')
    ),

);