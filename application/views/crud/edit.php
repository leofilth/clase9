<!--clase edit que no funciona-->
<div class="container">
    <h1>Editar Persona</h1>
    <a href="<?php echo base_url()?>crud">Volver Atrás</a>
    <h3>Ingrese campos de formulario</h3>
    <?php $atributos=array('role'=>'form','class'=>'form-group','id'=>'form','name'=>'form');
    echo form_open_multipart(null,$atributos);//utulizar siempre null, recomendado
    ?>
    <div class="row">
        <div class="col-md-5">
            <label class="control-label">Nombre: </label>
            <?php
            $nombre=$datitos->nombre;
            $datos=array
            (
                'name'=>'nom',
                'id'=>'nom',
                'class'=>'form-control',
                'value'=>$nombre
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
            $correo=$datitos->correo;
            $datos=array
            (
                'name'=>'correo',
                'id'=>'correo',
                'class'=>'form-control',
                'value'=>$correo
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
            $telefono=$datitos->telefono;
            $datos=array
            (
                'name'=>'tel',
                'id'=>'tel',
                'class'=>'form-control',
                'value'=>$telefono
            );
            echo form_input($datos);
            ?>
            <label><?php echo form_error('tel'); ?></label>
        </div>
    </div>
    <input type="hidden" name="id" value="<?php echo $id?>">
    <div class="row">
        <div class="col-md-5">
            <?php
            $datos=array
            (
                'name'=>'boton',
                'id'=>'boton',
                'type'=>'submit',
                'class'=>"btn btn-primary btn-md",
                'value'=>'Guardar'
            );
            echo form_submit($datos);
            ?>
        </div>
    </div>
    <?php
    echo form_close();
    ?>
</div>
<!--clase edit que no funciona-->
