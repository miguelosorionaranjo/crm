<?php
  include('database.php');
if(isset($_POST['id_opor'])) { 
  $id_opor = $_POST['id_opor'];
  $query = "UPDATE oportunidad SET eo = if(eo='Inactiva', 'Activa', 'Inactiva') WHERE id_opor = '$id_opor'";
  $result = mysqli_query($connection, $query);
  if (!$result) {
    die('Consulta Fallida.');
  }
  echo "Cambios Realizados con Éxito";  
}
?>