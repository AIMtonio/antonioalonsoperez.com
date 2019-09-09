<?php
session_start();
$db=mysqli_connect('localhost','root','','antonioalonsoperez');
$nombre="";
$apellido="";

//$id=0;
//$update=false;
//$validarAlerta=0;

if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    mysqli_query($db,"INSERT INTO ejemplo(id,nombre,apellido)VALUES('null','$nombre','$apellido')");
    $_SESSION['mensaje']='<script name="accion">alert("Registro guardado") </script>';
    $validarAlerta=1;
    //$_SESSION['mensaje']=$validarAlerta;
    header('location:login.php');
}


if(isset($_POST['ingresar2'])){
   $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];


   // $results=mysqli_query($db,"SELECT id FROM ejemplo where nombre='$nombre' and apellido='$apellido'");
$results=mysqli_query($db,"SELECT * FROM ejemplo where nombre='$nombre' and apellido='$apellido'");
  while($row = mysqli_fetch_array($results)){
    echo '<font size="6">'.$row['id'].'</font>';
}
    $_SESSION['mensaje']=$results;
    $validarAlerta=1;
    //$_SESSION['mensaje']=$validarAlerta;
    header('location:login.php');

}







if(isset($_GET['del'])){
    $id=$_GET['del'];
    mysqli_query($db,"DELETE FROM informacion where id=$id");
    $_SESSION['mensaje']='<script name="accion">alert("Registro eliminado") </script>';
    $validarAlerta=2;
    //$_SESSION['mensaje']=$validarAlerta;
    header('location: index.php');
}

if(isset($_POST['update'])){
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $direccion=$_POST['direccion'];
    
    mysqli_query($db, "UPDATE informacion set nombre='$nombre', direccion='$direccion' where id=$id");
    $_SESSION['mensaje']='<script name="accion">alert("Registro actualizado") </script>';
    $validarAlerta=3;
   // $_SESSION['mensaje']=$validarAlerta;
    header('location: index.php');
}
?>


