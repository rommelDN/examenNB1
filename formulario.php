<?php

?>
<?php include_once "encabezado.php" ?>
<div class="row">
    <div class="col-12">
        <h1>Agregar</h1>
        <form action="insertar.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" required name="nombre" id="nombre" placeholder="Nombre de mascota" class="form-control">
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="numbre" required name="edad" id="edad" placeholder="Edad de mascota" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="./listar.php"  class="btn btn-warning">Ver Todas</a>
        </form>

    </div>
</div>
<?php include_once  "pie.php" ?>