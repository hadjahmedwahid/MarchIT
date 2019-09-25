<?php 

session_start();
 include 'ConnexionDB.php';
 
 $ds = "'%".$_SESSION['date']."%'";  
$sql = "select * from  avance where idfour=".$_SESSION['fournisseur']." and dateav like ".$ds;
 $tmp= $bdd ->query($sql);
$data = $tmp->fetch();
if($data["avance"] > 0  ){
	
	
	$sql2 = "UPDATE `marche`.`avance` SET `avance` = avance +";
$sql2 .= $_POST["avance2"]." where idfour=".$_SESSION['fournisseur']." and dateav like ".$ds; ;

 	$bdd ->exec ($sql2) ;
	
	
}else{
 
 
 
 
 
 
 
$sql = "INSERT INTO `marche`.`avance` (`idfour`, `dateav`, `avance`) VALUES (";
$sql .= $_SESSION['fournisseur'];
$sql .=  ",'".$_SESSION['date']."'";
$sql .=   ",".$_POST["avance2"]; 
$sql .=")";

 	$bdd ->exec ($sql) ;}
	echo "<script type='text/javascript'>window.location='index.html';</script>";



?>