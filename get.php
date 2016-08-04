<?php
include 'conexion.php';

$id = isset($_GET['id'])==true?$_GET['id']:"";
if(!empty($id)){
  $getData = "SELECT * FROM usuarios WHERE id='$id'";
  $qur = mysqli_query($conexion,$getData);

  while($r = mysqli_fetch_assoc($qur)){

  $msg[] = array("name" => $r['name'], "email" => $r['email'], "status" => $r['status']);
  }
  $json = $msg;

  header('content-type: application/json');
  echo json_encode($json);
}



@mysqli_close($conn);

?>
