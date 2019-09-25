 <?php 
 $i=1;
 $cp2total=0;
  $cp3total=0;
   $cp4total=0;
   $ttotal=0;
   $rawtotal=0;
   $mtotal=0;
   $stotal=0;
   $prixconsing = 0;
   $prixtotal = 0;
 include 'ConnexionDB.php';
 $t=time();
 $d=getdate($t);
 $dat = "";
 $dat = $d['year'] ."-".$d['mon'] ."-".$d['mday'] ;

echo $dat;
 	  $contenu = " INSERT INTO `marche`.`facture` (`idfact`, `datef`, `nomclient`, `prixproduit`, `prixconsing`, `prixtotal`, `rcp2`, `rcp3`, `rcp4`, `r6`, `rraw`, `rm`, `rs`) VALUES (NULL,";
$contenu .=	 "'".$_POST["datef"]."'";
$contenu .=	 ",'";
$contenu .=	 $_POST["nom"];
 $contenu .=  "', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)";
									
										$bdd ->exec ($contenu) ;
									
												$tmp1= $bdd ->query('SELECT max(idfact) as NB FROM facture');
												$tmp = $tmp1->fetch();
												$idfacture = $tmp['NB'];
 
 
 
 
 for($i=1;$i<=7;$i++){
	 $ligne="";
	 $ligne = "ligne".$i;
	 $fellah =""; $fellah ="f".$i;
	 $produit ="";$produit ="produit".$i;
	 $prix = ""; $prix = "prix".$i;
	 $poid =""; $poid ="poid".$i;
	 $cp2 =""; $cp2 ="c2p".$i;
	 $cp3 =""; $cp3 ="c3p".$i;
	 $cp4 =""; $cp4 ="c4p".$i;
	 $t = ""; $t = "t".$i;
	 $raw = ""; $raw = "raw".$i;
	 $m="";$m="m".$i;
	 $s= ""; $s= "s".$i;
	 $rv = ""; $rv = "rv".$i;
	 $rvd = ""; $rvd = "d".$i;
	 
	 
	  if( isset($_POST[$ligne])){
		  // insere wazna *****************************************
		  
		  
	$wazna ="INSERT INTO `marche`.`wazna` (`idw`, `prixw`, `poid`, `cp2`, `cp3`, `cp4`, `t6`, `raw`, `m`, `s`, `idfact`, `idfour`, `prixwt`,`poidnet`,`idP`, `datew`) VALUES (NULL, ";
    $wazna .=$_POST[$prix]	;
	$wazna .= ",";
	if($_POST[$poid]!= null){$wazna .= $_POST[$poid];}else{$wazna .="0";};
	$wazna .= ",";
	if($_POST[$cp2]!= null){$wazna .= $_POST[$cp2];}else{$wazna .="0";};
	$wazna .= ",";
	if($_POST[$cp3]!= null){$wazna .= $_POST[$cp3];}else{$wazna .="0";};
	$wazna .= ",";
	if($_POST[$cp4]!= null){$wazna .= $_POST[$cp4];}else{$wazna .="0";};
	$wazna .= ",";
	if($_POST[$t]!= null){ $wazna .= $_POST[$t];   }else{$wazna .="0";};
	$wazna .= ",";
	if($_POST[$raw]!= null){$wazna .= $_POST[$raw];}else{$wazna .="0";};
	$wazna .= ",";
	if($_POST[$m]!= null){$wazna .= $_POST[$m];}else{$wazna .="0";};
	$wazna .= ",";
	if($_POST[$s] != null){$wazna .= $_POST[$s];}else{$wazna .="0";};
	$wazna .= ",";
	$wazna .= $idfacture;
	$wazna .= ",";
	$wazna .= $_POST[$fellah];
	
	$tar = $_POST[$cp2]*0.2 + $_POST[$cp3]*0.3 + $_POST[$cp4]*0.4 +  $_POST[$t] * 0.6 + $_POST[$raw] + $_POST[$m] +  $_POST[$s]*2 ;
	$poidnet = $_POST[$poid] -  $tar;
	$prixw = $poidnet * $_POST[$prix] ;
	$prixtotal += $prixw;
	
	
	$wazna .= ",";
	$wazna .=$prixw  ;
	$wazna .= ",";
	$wazna .=  $poidnet;
	$wazna .= ",";
	$wazna .=  $_POST[$produit];
	$wazna .= ",";
	if(isset($_POST[$rv])){    $wazna .= "'".$_POST[$rvd]."'";          }else{ $wazna .= "'".$_POST["datef"]."'"; }
	
	
	
	
	$wazna .= ")";
	
	$bdd ->exec ($wazna) ;
	
		  
		  
		  
		  
		  
		  
		  
		  //******************************************************
		   $cp2total +=$_POST[$cp2];
		   $cp3total +=$_POST[$cp3];
		   $cp4total +=$_POST[$cp4];
		   $ttotal +=$_POST[$t];
		   $rawtotal +=$_POST[$raw];
		   $mtotal +=$_POST[$m];
		   $stotal +=$_POST[$s]; 
		  
		  
		  
	  }
	 
	 
 }
 
 
 
 //*********************calcul de prix consing*************************************************************
    if(isset($_POST["vider"]))
	{
		 $prixconsing = 0;
		 $rcp2 = 0;
		  $rcp3 = 0;
		   $rcp4 = 0;
		   $r6 = 0;
		   $rraw = 0;
		   $rm=0;
		   $rs=0;
	}
		else
			{
				
					$tmp4= $bdd ->query("SELECT consing FROM `embalage` WHERE nomemb like 'cp0.2'");
												$tmpcons = $tmp4->fetch();
												$tmpp = $tmpcons['consing'];
				
				             $prixconsing += ($cp2total - $_POST["v2"])*$tmpp;
							 
							 $rcp2 = $cp2total - $_POST["v2"];
							 
							 
							 
					 $tmp4= $bdd ->query("SELECT consing FROM `embalage` WHERE nomemb like 'cp0.3'");
												$tmpcons = $tmp4->fetch();
												$tmpp = $tmpcons['consing'];
				
				             $prixconsing += ($cp3total - $_POST["v3"])*$tmpp;
							 $rcp3 = $cp3total - $_POST["v3"];
							 
							 
					$tmp4= $bdd ->query("SELECT consing FROM `embalage` WHERE nomemb like 'cp0.4'");
												$tmpcons = $tmp4->fetch();
												$tmpp = $tmpcons['consing'];
				
				             $prixconsing += ($cp4total - $_POST["v4"])*$tmpp;
							 $rcp4 = $cp4total - $_POST["v4"];
							 
				    $tmp4= $bdd ->query("SELECT consing FROM `embalage` WHERE nomemb like 'T'");
												$tmpcons = $tmp4->fetch();
												$tmpp = $tmpcons['consing'];
				
				             $prixconsing += ($ttotal - $_POST["v6"])*$tmpp;
							 $r6 = $ttotal - $_POST["v6"];
							 
							 
					$tmp4= $bdd ->query("SELECT consing FROM `embalage` WHERE nomemb like 'raw'");
												$tmpcons = $tmp4->fetch();
												$tmpp = $tmpcons['consing'];
				
				             $prixconsing += ($rawtotal - $_POST["vraw"])*$tmpp;
							 $rraw = $rawtotal - $_POST["vraw"];
							 
					$tmp4= $bdd ->query("SELECT consing FROM `embalage` WHERE nomemb like 'm'");
												$tmpcons = $tmp4->fetch();
												$tmpp = $tmpcons['consing'];
				
				             $prixconsing += ($mtotal - $_POST["vm"])*$tmpp;
							 $rm = $mtotal - $_POST["vm"];
							 
							 
				    $tmp4= $bdd ->query("SELECT consing FROM `embalage` WHERE nomemb like 's'");
												$tmpcons = $tmp4->fetch();
												$tmpp = $tmpcons['consing'];
				
				             $prixconsing += ($stotal - $_POST["vs"])*$tmpp;
							 $rs = $stotal - $_POST["vs"];
							 
				
			}
 
 
 
 $pt = $prixtotal+$prixconsing;
 $sqlfacture = "UPDATE `marche`.`facture` SET  `prixproduit` = ";
 $sqlfacture .=      $prixtotal.",";         
  $sqlfacture .= "`prixconsing` = ";
 $sqlfacture .=       $prixconsing.",";
 $sqlfacture .=  "`prixtotal` = ".$pt ;
 
 $sqlfacture .= ",rcp2 =".$rcp2.",";
 $sqlfacture .= "rcp3 =".$rcp3.",";
 $sqlfacture .= "rcp4 =".$rcp4.","; 
 $sqlfacture .= "r6 =".$r6.","; 
 $sqlfacture .= "rraw =".$rraw.","; 
 $sqlfacture .= "rm =".$rm.","; 
 $sqlfacture .= "rs =".$rs." "; 
 
 
 
 
 
 
 
 
 
 $sqlfacture .= "  WHERE `facture`.`idfact` = ".$idfacture;
 
 
 $bdd ->exec ( $sqlfacture) ;
 echo "<script type='text/javascript'>window.location='index.html';</script>";
 
 
 //***************************************************** imprimer*********************************************************
 
 
 ?>
 <!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
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
<div class="copyrights">
	 <table></table>
</div>	
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
 
 
 