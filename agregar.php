<?php
  include('database.php');
if(isset($_POST['nombre'])) {
  # echo $_POST['name'] . ', ' . $_POST['description'];
  $task_gender = $_POST['gender'];
  $task_nombre = $_POST['nombre'];
  $task_apellido = $_POST['apellido'];
  $task_principal = $_POST['principal'];
  $task_celular = $_POST['celular'];
  $task_correop = $_POST['correop'];
  $task_cargo = $_POST['cargo'];
  $task_origen = $_POST['origen'];
  $task_pais = $_POST['pais'];
  $task_departamento = $_POST['departamento'];
  $task_ciudad = $_POST['ciudad'];
  $task_pagina = $_POST['pagina'];
  $task_empresa = $_POST['empresa'];
  $task_industria = $_POST['industria'];
  $task_direccion = $_POST['direccion'];
  $task_ps = $_POST['ps'];
  $task_buscadormarca = $_POST['buscadormarca'];
  $task_buscadorp = $_POST['buscadorp'];
  $task_precontacto = $_POST['precontacto'];
  $task_descripcion = $_POST['descripcion'];
  $task_fecha = $_POST['fecha'];
  $task_conver = $_POST['conver'];
  $query = "INSERT into precontacto (gender, 
                                    nombre, 
                                    apellido, 
                                    principal, 
                                    celular, 
                                    correop,
                                    cargo, 
                                    origen,
                                    pais, 
                                    departamento, 
                                    ciudad, 
                                    pagina, 
                                    empresa, 
                                    industria, 
                                    direccion, 
                                    ps, 
                                    buscadormarca, 
                                    buscadorp, 
                                    precontacto, 
                                    descripcion, 
                                    fecha,
                                    conver) 
                                    VALUES 
                                    ('$task_gender',
                                    '$task_nombre', 
                                    '$task_apellido', 
                                    '$task_principal', 
                                    '$task_celular',
                                    '$task_correop',  
                                    '$task_cargo', 
                                    '$task_origen',
                                    '$task_pais', 
                                    '$task_departamento', 
                                    '$task_ciudad',
                                    '$task_pagina', 
                                    '$task_empresa', 
                                    '$task_industria', 
                                    '$task_direccion', 
                                    '$task_ps', 
                                    '$task_buscadormarca', 
                                    '$task_buscadorp', 
                                    '$task_precontacto', 
                                    '$task_descripcion',  
                                    '$task_fecha',
                                    '$task_conver')";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Query Failed.');
  }
  echo "Registrado con Éxito";  

}
?>