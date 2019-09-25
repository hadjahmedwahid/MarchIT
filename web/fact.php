<?php 
	session_start();
	
	
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
<h2>Imprimer Facture</h2>
<div  id="wahid">
	 
	 <?php 
	  include 'ConnexionDB.php';
	 	$f= $bdd ->query('SELECT * FROM `facture` where idfact = '.$_POST["f"]);
		  $data3 = $f->fetch();
		echo ('<div align="centre"><h2>Carreau n°52 Khoudi Said</h2></div>');
			echo ('<div align="centre"><h4>Date :'.$data3["datef"].'</h4></div>');
		
		echo "Client :".$data3["nomclient"]  ; 
			 $sql = 'select * FROM  wazna  where  wazna.idfact = '.$_POST["f"];
			  $f1= $bdd ->query($sql);
	 
	  $q=0;
				 
				 $aff = '<table border="2px" id="table"><thead>
	<tr><th>fournisseur</th><th>produit</th><th>Quentite</th><th>poid</th><th>poid net</th><th>prix detail</th><th> prix total </th></tr></thead><tbody>';
           while($data2 = $f1->fetch()){
$q=0;			   
		   $q= $data2["cp2"]+$data2["cp3"]+$data2["cp4"]+$data2["t6"]+$data2["raw"]+$data2["m"]+$data2["s"];
		   $aff .= "<tr>";
		   //****************************************************************************
		      $aff .= "<td>";
			  $sql2 = 'select * FROM  fournisseur  where  idfour = '.$data2["idfour"];
                $tmp= $bdd ->query($sql2);
                $nom = $tmp->fetch(); 				
		    $aff .= $nom["nomfour"]; $aff .= "</td>";
			//*****************************************************************************
			 $aff .= "<td>";
			  $sql3 = 'select * FROM  produit  where  idP = '.$data2["idP"];
                $tmp3= $bdd ->query($sql3);
                $nom3 = $tmp3->fetch(); 				
		    $aff .= $nom3["nomp"]; $aff .= "</td>";
			
			
			
			
			
			
			 $aff .= "<td>";
			 
		    $aff .= $q; $aff .= "</td>";
			
			
			
			 $aff .= "<td>";
			 $aff .= $data2["poid"]; $aff .= "</td>";
			  $aff .= "<td>";
			  $aff .= $data2["poidnet"]; $aff .= "</td>";
			   $aff .= "<td>";
			   $aff .= $data2["prixw"]; $aff .= "</td>";
			    $aff .= "<td>";
			    $aff .= $data2["prixwt"]; $aff .= "</td>";
				 $aff .= "</tr>";
				 
		   
		   
		   
		   
		   }	
		    $aff .= "</table>";
			echo $aff;
	        echo "<h4>Prix des produit:</h4>".$data3["prixproduit"];
	         echo "<h4>Prix de Consing:</h4>".$data3["prixconsing"];
			  echo "<h4>Prix Total:</h4>".$data3["prixtotal"];
	 
	 
	 
	 
	 
	 
	 
	 ?>
	 <hr/>
	 <h3>Embalage :</h3><table><tr>
<?php 
$emt = "<td>cp02 =".$data3["rcp2"]." </td><td>cp03 =".$data3["rcp3"]." </td><td>cp04 = ".$data3["rcp4"]." </td><td>T = ".$data3["r6"]."</td><td>Raw =".$data3["rraw"]." </td><td>M =".$data3["rm"]." </td><td>S =".$data3["rs"]." </td>";

echo $emt;

?>


	 </tr></table>
	 
</div>	 <button onclick="init2()"   > imprimer</button>
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