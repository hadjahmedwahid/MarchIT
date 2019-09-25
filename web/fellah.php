<?php 
		
		
		
							$_SESSION['utilisateur'] = '';
							
							$contenu = '';
							
							$name = $_POST["nomfour"];
							
							include 'ConnexionDB.php';
                            							
				
						
							
	 						if(isset($_POST["nomfour"])!='' )
							{ 
						
						$contenu = " INSERT INTO `marche`.`fournisseur` ( `nomfour`) VALUES ( '";
							$contenu .= $name;
							$contenu .= "')";
							$bdd ->exec ($contenu) ;
						
							echo "<script type='text/javascript'>alert('fournisseur ajouté');</script>";
						     echo "<script type='text/javascript'>window.location='index.html';</script>";
						
							}
						
						
						
						
						
						?>