
<!DOCTYPE HTML>
<html>
<head>
<title>Carreau 52</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<
</head> 
<body>
<form method="POST" >
<input type="date" name="d" />
<input type="submit" value="ok"/>
<?php 

if(isset($_POST["d"])){
echo $_POST["d"];}else {    echo "bghal";}


?>








</form>

</body>
</html>