<?php 
		
		
		
							$_SESSION['utilisateur'] = '';
							
							$contenu = '';
							
							$name = $_POST["nomP"];
							
							include 'ConnexionDB.php';
                            							
				
						
							
	 						if(isset($_POST["nomP"])!='' )
							{ 
						
						$contenu = " INSERT INTO `marche`.`produit` ( `nomp`) VALUES ( '";
							$contenu .= $name;
							$contenu .= "')";
							$bdd ->exec ($contenu) ;
						
							echo "<script type='text/javascript'>alert('Produit ajouté');</script>";
						     echo "<script type='text/javascript'>window.location='index.html';</script>";
						
							}
						
						
						
						
						
						?>