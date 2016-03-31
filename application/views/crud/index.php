<div class="container">
    <h1>Hola mundo Crud, utilizando Layout</h1>
    <p>Algún texto de prueba, ñandú</p>
</div>
<div class="container">
    <h2>Registro de Persona</h2>
    <p>
        <a href="<?php echo base_url()?>crud/add">Agregar</a>
    </p>
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
            echo "<tr>";
            echo "<td>".$dato->id."</td>";
            echo "<td>".$dato->nombre."</td>";
            echo "<td>".$dato->correo."</td>";
            echo "<td>".$dato->tel."</td>";
            echo "<td>".$dato->fecha."</td>";
            echo "<td><a href=''>Editar</a>  <a href=''>Eliminar</a></td>";
            echo "</tr>";
        }

        ?>
    </table>
</div>
