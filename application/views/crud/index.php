<div class="container">
    <h1>Hola mundo Crud, utilizando Layout</h1>
    <p>Algún texto de prueba, ñandú</p>
</div>
<div class="container">
    <h2>Registro de Persona</h2>
    <h3 style="color: orangered"><?php if($this->session->flashdata('ControllerMessage')!='')
        {
            echo " <span class='glyphicon glyphicon-info-sign'></span> ".$this->session->flashdata('ControllerMessage');
        }
        ?>
    </h3>
    <!--<a href="<?php echo base_url()?>crud/add">Agregar</a>-->
    <button type="button" class=" btn btn-primary btn-md" onclick="location.href='<?php echo base_url()?>crud/add'">
        <span class="glyphicon glyphicon-plus"></span> Agregar
    </button>
    <h3>Lista de Personas</h3>
    <table class="table table-striped table-hover">
        <tr class="info">
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </tr>
        <?php
        foreach ($datos as $dato ) {
            ?>
            <tr>
                <td><?php echo $dato->id?></td>
                <td><?php echo $dato->nombre?></td>
                <td><?php echo $dato->correo?></td>
                <td><?php echo $dato->tel?></td>
                <td><?php echo $dato->fecha?></td>
                <td>
                    <button type="button" class=" btn btn-warning btn-sm" onclick="location.href='<?php echo base_url()?>crud/edit/<?php echo $dato->id?>'">
                        <span class="glyphicon glyphicon-edit"></span> Editar
                    </button>
                    <!--<a href="<?php echo base_url()?>crud/edit/<?php echo $dato->id?>">
                        Editar
                    </a>-->
                    <button type="button" class=" btn btn-danger btn-sm" onclick="location.href='<?php echo base_url()?>crud/delete/<?php echo $dato->id?>'">
                        <span class="glyphicon glyphicon-remove"></span> Eliminar
                    </button>

                    <!--<a href="javascript:void(0);"onclick="eliminar('<?php echo base_url()?>crud/delete/<?php echo $dato->id?>')">
                        Eliminar
                    </a>-->
                </td>
            </tr>
            <!--echo "<tr>";
            echo "<td>".$dato->id."</td>";
            echo "<td>".$dato->nombre."</td>";
            echo "<td>".$dato->correo."</td>";
            echo "<td>".$dato->tel."</td>";
            echo "<td>".$dato->fecha."</td>";
            echo "<td><a href=".base_url()."crud/edit/".$dato->id.">Editar</a>";
            echo "  ";
            echo "<a href=javascript:void(0);onclick='eliminar('".base_url()."crud/delete/".$dato->id."')''>Eliminar</a></td>";
            /*" <a href="javascript:void(0);"".
            "onclick="eliminar('<?php echo base_url()?>crud/delete<?php echo $dato->id?>')"".">Eliminar</a></td>";
            echo "</tr>";*/-->
        <?php
        }

        ?>
    </table>
</div>
