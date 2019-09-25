<?php 


session_start();
 include 'ConnexionDB.php';
 $ds = "'%".$_SESSION['date']."%'"; 

$sql = "INSERT INTO `marche`.`reception` (`idrec`, `idfour`, `daterec`, `idproduit`, `nbcol`, `typeem`) VALUES (NULL,"; 
$sql .= $_SESSION['fournisseur'];

$sql .=  ",".$ds;
$sql .= ",".$_POST["produit1"];
$sql .= ",".$_POST["nbcoli"];
$sql .= ",'".$_POST["type"];
$sql .= "')";


$bdd ->exec ($sql) ;

echo "<script type='text/javascript'>window.location='index.html';</script>";






?>