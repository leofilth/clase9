<div class="container">
    <h1>Agregar Persona</h1>
    <a href="<?php echo base_url()?>crud">Volver Atrás</a>
    <h3>Ingrese campos de formulario</h3>
    <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'form','name'=>'form');
    echo form_open_multipart(null,$atributos);//utulizar siempre null, recomendado
    ?>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Nombre: </label>
            <?php
            $value=set_value("nom");
            $datos=array
            (
                'name'=>'nom',
                'id'=>'nom',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('nom'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Correo: </label>
            <?php
            $value=set_value("correo");
            $datos=array
            (
                'name'=>'correo',
                'id'=>'correo',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('correo'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Telefono: </label>
            <?php
            $value=set_value("tel");
            $datos=array
            (
                'name'=>'tel',
                'id'=>'tel',
                'class'=>'form-control',
                'value'=>$value
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('tel'); ?></label>
        </div>
    </div>
    <div class="row">
        <div class="col-md-5">
            <?php
            $datos=array
            (
                'name'=>'boton',
                'id'=>'boton',
                'type'=>'submit',
                'class'=>"btn btn-primary btn-md",
                'value'=>'Enviar'
            );
            echo form_submit($datos);
            ?>
        </div>
    </div>
    <?php
    echo form_close();
    ?>
</div>