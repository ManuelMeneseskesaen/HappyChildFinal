<?php

include('db.php');

if (isset($_POST['agregar'])) {
  $title = $_POST['title'];
  $description = $_POST['description'];
  $link = $_POST['link'];
  $query= "INSERT INTO contenido(titulo, descripcion,link) VALUES ('$title', '$description','$link')";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("Query Failed.");
  }

  $_SESSION['message'] = 'guardado exitoso';
  $_SESSION['message_type'] = 'success';
  header('Location: crud.php');

}

?>