<?php 
	session_start();
		$_SESSION['date'] = "0";
		$_SESSION['fournisseur'] = 0;
	 include 'ConnexionDB.php';
	
	 
	 
	 
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Carreau 52</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<!-- //lined-icons -->


<script>
function init2(){
  var printContents = document.getElementById("wahid").innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;

  window.print();
  document.body.innerHTML = originalContents;
 };
 function init3(){
  var printContents = document.getElementById("wahid2").innerHTML;
  var originalContents = document.body.innerHTML;
  document.body.innerHTML = printContents;

  window.print();
  document.body.innerHTML = originalContents;
 };

//window.onLoad = init();



</script>


</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.html">Carreau 52 Khoudi Said</a></h1>
							</div>

						 <div class="w3layouts-right">
							<div class="profile_details_left"><!--notifications of menu start -->
							
							</div>
							<!--notification menu end -->
							
							<div class="clearfix"> </div>				
						</div>
						<div class="profile_details w3l">		
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">	
												<span class="prfil-img"><img src="images/in4.jpg" alt=""> </span> 
												<div class="user-name">
													<p>Malorum</p>
													<span>Administrator</span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>	
											</div>	
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
											<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
											<li> <a href="signin.php"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->
		<div class="four-grids">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
							<a href="Fournisseur.html" >	<i class="glyphicon glyphicon-user" aria-hidden="true"></i> </a>
							</div>
							<div class="four-text">
								<h3>Fournisseur</h3>
								
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Clients</h3>
								

							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Factures</h3>
								
								
							</div>
							
						</div>
					</div>
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
							<i class="glyphicon glyphicon-user" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Employes</h3>
								
								
							</div>
							
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->
<!--agileinfo-grap-->
<div class="agileinfo-grap">
<div class="agileits-box">
<div class="agile-grids">	
				<!-- tables -->
				


					
					
					
					   
				 
<div class="agileits-box-body clearfix">
<div id="hero-area"></div>
</div>
</div>
</div>

		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->



<?php 


$_SESSION['date'] = $_POST["d"];
$_SESSION['fournisseur'] = $_POST["four"];
 $ds = "'%".$_SESSION['date']."%'";  
 $for = "select nomfour from fournisseur where idfour = ".$_SESSION['fournisseur'];
  $for1 = $bdd ->query($for);
  $for2 = $for1 ->fetch();
?>
<div align="centre" ><h1><?php echo $for2["nomfour"].'******************************************'.$_POST["d"];    ?></h1></div>
<hr/>

<h1>Reception</h1>





 <form method="POST" action="reception.php" >

<table border="2px">
<tr>

<td>Produit :    </td>      
  <td> <select name="produit1" id="selector1"  class="form-control1">
 <?php
				
				$list2 = $bdd ->query('SELECT * FROM Produit order by nomp');
				                $tmp1='';
								while($datap = $list2->fetch()){
									$tmp1 .= '<option value="' ;
									$tmp1 .=  $datap['idP'];
						            $tmp1.= '"';
									$tmp1 .= '>';
									$tmp1 .= $datap['nomp'];
									$tmp1 .= '</option>';
								}echo $tmp1;
?></td>

</select> 
  <td>   N°de colis : 
  <input type="number" name="nbcoli" />
  
 
  </td>
  
   <td>  Type d'embalage : 
  <input type="text" name="type" />
  
  
  </td>
   <td>  
  <input type="submit" value="Ajouter" />
  
  
  </td>

</tr></table>

 </form>
 
 <div id="wahid2">
 <h4>KHOUDI SAID Mandataire en Fruits et Legumes Careau -N°52-</h4>
<h4>Date : <?php echo $_SESSION['date']; ?></h4>
<h4>Le Compte de Mr: <?php   echo $for2["nomfour"];  ?></h4>

 
 <table id="table">
 
     <thead>
						  <tr>
						    <th>produit</th>
							<th>nombre de colis</th>
							<th>embalage</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
						
							$sqlr = "select * from  reception where idfour=".$_SESSION['fournisseur']." and daterec like ".$ds;
							 $tmpr= $bdd ->query($sqlr);
							 $str = "";
						while(	$rep = $tmpr->fetch())
						{
							$str .= "<tr>";
								$sqlr1 = "select * from  produit where idP=".$rep["idproduit"];
							 $tmpr1= $bdd ->query($sqlr1);
						
							$rep1 = $tmpr1->fetch();
							
							$str .= "<td>".$rep1["nomp"]."</td>";
								$str .= "<td>".$rep["nbcol"]."</td>";
									$str .= "<td>".$rep["typeem"]."</td>";
									
							
							
							
							$str .= "</tr>";
							
							
							
						}
						
						echo $str;
						
						
						
						
						?>
						
						</tbody>
 </table>
 
 
 
 </div><button onclick="init3()"   > imprimer</button>
 
 
 
 
 
 
 
 
 




<hr/>
<h1>Avance</h1>
Avance producteur	: <?php 
$ds = "'%".$_SESSION['date']."%'";  
$sql = "select * from  avance where idfour=".$_POST["four"]." and dateav like ".$ds;
 $tmp= $bdd ->query($sql);
$data = $tmp->fetch();
echo $data["avance"]; 

?>
<hr/>
Ajouter Avance : 
<form method="POST" action="avance.php">
<input type="number" name="avance2" /><input value="Ajouter" type="submit"> 
 </form>












<hr/>
 <div id="wahid"><h1>BORDEREAU RECAPITULATIF</h1>
<hr/>
	<h4>KHOUDI SAID Mandataire en Fruits et Legumes Careau -N°52-</h4>
	<h4>Date : <?php echo $_SESSION['date']; ?></h4>
	<h4>Le Compte de Mr: <?php   echo $for2["nomfour"];  ?></h4>
    
 <table id="table">
 
     <thead>
						  <tr>
						    <th>nb de colis</th>
							<th>Produit</th>
							<th>poid net</th>
							<th>prix detail</th>
							<th>prix Total</th>
						  </tr>
						</thead>
						<tbody>
						<?php 
						$total = 0;
							$sqlr1 = "select * from  wazna where idfour=".$_SESSION['fournisseur']." and datew like ".$ds;
							 $tmpr1= $bdd ->query($sqlr1);
							 $str1 = "";
							 $nb=0;
						while(	$w = $tmpr1->fetch())
						{
							$nb = $w["cp2"]+$w["cp3"]+$w["cp4"]+$w["t6"]+$w["raw"]+$w["m"]+$w["s"];
							$str1 .= "<tr>";
							$str1 .=  "<td>".$nb."</td>";
							
								$wp = "select * from  produit where idP=".$w["idP"];
							 $wpp= $bdd ->query($wp);
						
							$wppp = $wpp->fetch();
							
							$str1 .= "<td>".$wppp["nomp"]."</td>";
								$str1 .= "<td>".$w["poidnet"]."</td>";
									$str1 .= "<td>".$w["prixw"]."</td>";
										$str1 .= "<td>".$w["prixwt"]."</td>";
									$total += $w["prixwt"];
							
							
							
							$str1 .= "</tr>";
							
							
							
						}
						
						echo $str1;
						
						
						
						
						?>
						
						</tbody>
 </table>
	 
<?php 

echo "Prix Total : ".$total;
$com = ($total*$_POST["comission"])/100;
echo "<hr/>Comission :".$com ;
echo "<hr/>Avance  : ".$data["avance"];
$netp =  $total - $com -$data["avance"];
echo "<hr/>Net a Payer :".$netp;





?>	
	 
	</div>
<button onclick="init2()"   > imprimer</button>
	
	 
	 

<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo1">
						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
					</header>
						<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div>
                           <div class="menu">
									<ul id="menu" >
										<li><a href="index.html"><i class="fa fa-tachometer"></i> <span>Dashboard</span><div class="clearfix"></div></a></li>
										
										
										 <li id="menu-academico" ><a href="newfac.php"><i class="fa fa-envelope nav_icon"></i><span>Nouveau Facture</span><div class="clearfix"></div></a></li>
									<li><a href="Facture.html"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Facturs</span><div class="clearfix"></div></a></li>
									<li id="menu-academico" ><a href="Client.html"><i class="fa fa-bar-chart"></i><span>Client</span><div class="clearfix"></div></a></li>
									 <li><a href="Fournisseur.html"><i class="fa fa-table"></i>  <span>Fournisseur</span><div class="clearfix"></div></a></li>
									 <li id="menu-academico" ><a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span> NEW</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="newproduit.php">Produit</a></li>
											<li id="menu-academico-avaliacoes" ><a href="newfournisseur.php">Fournisseur</a></li>
											<li id="menu-academico-avaliacoes" ><a href="faq.html">Employe</a></li>
										  </ul>
										</li>
									<li id="menu-academico" ><a href="errorpage.html"><i class="fa fa-exclamation-triangle" aria-hidden="true"></i><span>Error Page</span><div class="clearfix"></div></a></li>
									  <li id="menu-academico" ><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i><span> embalage</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										   <ul id="menu-academico-sub" >
										   <li id="menu-academico-avaliacoes" ><a href="tar.php">Tar</a></li>
											<li id="menu-academico-avaliacoes" ><a href="consing.php">Consing</a></li>
										  </ul>
										</li>
									
									<li><a href="maps.html"><i class="fa fa-map-marker" aria-hidden="true"></i>  <span>Maps</span><div class="clearfix"></div></a></li>
							        <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i>  <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
										 <ul id="menu-academico-sub" >
											<li id="menu-academico-boletim" ><a href="calendar.html">Calendar</a></li>
											<li id="menu-academico-avaliacoes" ><a href="signin.html">Sign In</a></li>
											<li id="menu-academico-avaliacoes" ><a href="signup.html">Sign Up</a></li>
											

										  </ul>
									 </li>
									<li><a href="#"><i class="fa fa-check-square-o nav_icon"></i><span>Forms</span> <span class="fa fa-angle-right" style="float: right"></span><div class="clearfix"></div></a>
									  <ul>
										<li><a href="input.html"> Input</a></li>
										<li><a href="validation.html">Validation</a></li>
									</ul>
									</li>
								  </ul>
								</div>
							  </div>
						
					
<!--js -->
<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>

</body>
</html>