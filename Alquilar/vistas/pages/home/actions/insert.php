<?php
ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL);
?>

<div class="">
    <div class="card-header">
      <h3 class="card-title">Añadir Cliente</h3>
    </div>
    <form action="" method="post">
        <div class="card-body">
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Nombre" name="nombre">
          </div>
          <div class="form-group">
            <label for="exampleInputEspecialidad">Especialidad</label>
            <input type="text" class="form-control" id="exampleInputEspecialidad" placeholder="Enter Especialidad" name="especialidad">
          </div>
          <div class="form-group">
            <label for="exampleInputEdad">Edad</label>
            <input type="number" class="form-control" id="exampleInputEdad" placeholder="Enter Edad" name="edad">
          </div>
          <div class="form-check">
            <input type="submit" class="btn btn-primary" name="guardar" value="Guardar">
          </div>
        </div>
    </form>
</div>

<?php 
$url = "http://localhost/ArTeM02-053/psy/apirest/controllers/psycologas.php?op=insert"; 
if(isset($_POST['guardar'])){

$datos = [
    'cliente_id' => 'cliente_id',
    'nombre' => $_POST['nombre'],
    'direccion' => $_POST['direccion'],
    'contacto' => $_POST['contacto']
];

$curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($datos));
    $response = curl_exec($curl);
    curl_close($curl);
    var_dump($response);


}
?>
