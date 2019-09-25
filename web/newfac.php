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
<script src="jquery-1.9.1.min.js" type="text/javascript"></script>
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

function change(n) {
	
	var str = ".".n;
	$(".chek1").prop('checked',true);
}




</script>
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div   width="95%">
	   <div class="mother-grid-inner">
       
	

<!--agileinfo-grap-->
<div class="agileinfo-grape">
<div class="agileits-box">
<div class="agile-grids">	
				<!-- tables -->
				                          <div id="wahid" >
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					<div align="center">  <h2>Nouveau Facture</h2>  </div>
			


  <div class="form-group">
    
	<form class="form-inline" action="calcul.php" method="POST">
	<table>
		<tr>
		<td>Client :</td>
		<td> <input class="form-control" id="exampleInputName2" name ="nom" placeholder="Name" type="text"></td>
		<td>Date facture</td>
		<td> <input class="form-control" id="exampleInputName2" name ="datef" placeholder="Name" type="date"></td>
		
		</tr>
		
		</table>
	
   
  </div>



					
					
					
					    <table id="table">
						<thead>
						  <tr>
						    <th>used</th>
							<th>Fournisseur</th>
							<th>produit</th>
							<th>poid</th>
							<th>prix</th>
							<th>CP 0.2</th>
							<th>CP 0.3</th>
							<th>CP 0.4</th>
							<th>T 0.6</th>
							<th>RAW</th>
							<th>M 1KG</th>
							<th>S 2KG</th>
							<th>RV</th>
								<th>Date RV</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
						       <td  width="4px"  >  <input type="checkbox"  class="chek1" name="ligne1">  </td>
							<td>
									<select name="f1" id="selector1"  class="form-control1" onChange="change();">
										<option selected="true">fellah</option>
										
										                <?php
				include 'ConnexionDB.php';
				$list = $bdd ->query('SELECT * FROM fournisseur order by nomfour');
				                $tmp='';
								while($data = $list->fetch()){
									
									
									$tmp .= '<option value="' ;
									$tmp .=  $data['idfour'];
						             $tmp.= '"';
									$tmp .= '>';
									$tmp .= $data['nomfour'];
									$tmp .= '</option>';
									
									
								}echo $tmp;
				

?>
									</select>
							</td>
							<td>
							
							  <select name="produit1" id="selector1"  class="form-control1">
									
															                <?php
				
				$list2 = $bdd ->query('SELECT * FROM Produit order by nomp');
				                $tmp1='';
								while($data2 = $list2->fetch()){
									
									
									$tmp1 .= '<option value="' ;
									$tmp1 .=  $data2['idP'];
						            $tmp1.= '"';
									$tmp1 .= '>';
									$tmp1 .= $data2['nomp'];
									$tmp1 .= '</option>';
									
									
								}echo $tmp1;
				

?>
									
									</select>
							
							</td>
							<td    width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="poid1" type="number">
							
							</td>
							<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name ="prix1" type="number">
							  
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c2p1" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p1" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c4p1" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="t1" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="raw1" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="m1" type="number">
							
							</td>
							
							
								<td     width="100px" bgcolor="D8E709" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="s1" type="number">
							
							</td>
							
							  <td  width="4px"  >  <input type="checkbox" name="rv1">  </td>
							
							
								<td  width="10px" >	<input type="date" name="d1"  style=" width: 50px;   "  />     </td>
							
							

						
						  </tr>
						
	<!-- *********************************************************************************************************************** -->

<tr>
						       <td  width="4px"  >  <input type="checkbox" name="ligne2">  </td>
							<td>
									<select name="f2" id="selector1"  class="form-control1">
										<option selected="true">fellah</option>
										<?php  echo $tmp; ?>
									</select>
							</td>
							<td>
							
							  <select name="produit2" id="selector1"  class="form-control1">
									
									<?php  echo $tmp1; ?>
									</select>
							
							</td>
							<td    width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="poid2" type="number">
							
							</td>
							<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name ="prix2" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c2p2" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p2" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c4p2" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="t2" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="raw2" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="m2" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="s2" type="number">
							
							</td>
							 <td  width="4px"  >  <input type="checkbox" name="rv2">  </td>
							 	<td  width="10px" >	<input type="date" name="d2"  style=" width: 50px;   "  />     </td>
							
							</tr>
							
<!-- *********************************************************************************************************************** -->		
							
							

						
						  
						
						
						
						
						
						
						
						<tr>
						       <td  width="4px"  >  <input type="checkbox" name="ligne3">  </td>
							<td>
									<select name="f3" id="selector1"  class="form-control1">
										<option selected="true">fellah</option>
										<?php  echo $tmp; ?>
									</select>
							</td>
							<td>
							
							  <select name="produit3" id="selector1"  class="form-control1">
										<?php  echo $tmp1; ?>
									</select>
							
							</td>
							<td    width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="poid3" type="number">
							
							</td>
							<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0"  name ="prix3" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c2p3" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p3" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c4p3" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="t3" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="raw3" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="m3" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="s3" type="number">
							
							</td>
							
							
							
							
							
							 <td  width="4px"  >  <input type="checkbox" name="rv3">  </td>
								<td  width="10px" >	<input type="date" name="d3"  style=" width: 50px;   "  />     </td>

						
						  </tr>
						
						
						
						
						
<!-- *********************************************************************************************************************** -->						
						
						
						
						
						
						
						<tr>
						       <td  width="4px"  >  <input type="checkbox" name="ligne4">  </td>
							<td>
									<select name="f4" id="selector1"  class="form-control1">
										<option selected="true">fellah</option>
									<?php  echo $tmp; ?>
									</select>
							</td>
							<td>
							
							  <select name="produit4" id="selector1"  class="form-control1">
										<?php  echo $tmp1; ?>
									</select>
							
							</td>
							<td    width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="poid4" type="number">
							
							</td>
							<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name ="prix4" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c2p4" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p4" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c4p4" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="t4" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="raw4" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="m4" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="s4" type="number">
							
							</td>
							
							
							
							
							 <td  width="4px"  >  <input type="checkbox" name="rv4">  </td>
							
								<td  width="10px" >	<input type="date" name="d4"  style=" width: 50px;   "  />     </td>

						
						  </tr>
						
						
						
						
<!-- *********************************************************************************************************************** -->						
						
						
						
						
						
						
						
						
						
						
						<tr>
						       <td  width="4px"  >  <input type="checkbox" name="ligne5">  </td>
							<td>
									<select name="f5" id="selector1"  class="form-control1">
										<option selected="true">fellah</option>
									<?php  echo $tmp; ?>
									</select>
							</td>
							<td>
							
							  <select name="produit5" id="selector1"  class="form-control1">
										<?php  echo $tmp1; ?>
									</select>
							
							</td>
							<td    width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="poid5" type="number">
							
							</td>
							<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name ="prix5" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p5" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p5" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c4p5" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="t5" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="raw5" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="m5" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="s5" type="number">
							
							</td>
							
							 <td  width="4px"  >  <input type="checkbox" name="rv5">  </td>
							
								<td  width="10px" >	<input type="date" name="d5"  style=" width: 50px;   "  />     </td>
							
							
							

						
						  </tr>
						
						
						
<!-- *********************************************************************************************************************** -->						
						
						
						
						
						
						
						
						
						
						
						
						
						<tr>
						       <td  width="4px"  >  <input type="checkbox" name="ligne6">  </td>
							<td>
									<select name="f6" id="selector1"  class="form-control1">
										<option selected="true">fellah</option>
									<?php  echo $tmp; ?>
									</select>
							</td>
							<td>
							
							  <select name="produit6" id="selector1"  class="form-control1">
										<?php  echo $tmp1; ?>
									</select>
							
							</td>
							<td    width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="poid6" type="number">
							
							</td>
							<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name ="prix6" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c2p6" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p6" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c4p6" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="t6" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="raw6" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="m6" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="s6" type="number">
							
							</td>
							
							
							
							
							 <td  width="4px"  >  <input type="checkbox" name="rv6">  </td>
							
								<td  width="10px" >	<input type="date" name="d6"  style=" width: 50px;   "  />     </td>

						
						  </tr>
						
						
						
<!-- *********************************************************************************************************************** -->						
						
						
						
						
						
						
						
						
						
						
						
						
						<tr>
						       <td  width="4px"  >  <input type="checkbox" name="ligne7">  </td>
							<td>
									<select name="f7" id="selector1"  class="form-control1">
										<option selected="true">fellah</option>
									<?php  echo $tmp; ?>
									</select>
							</td>
							<td>
							
							  <select name="produit7" id="selector1"  class="form-control1">
										<?php  echo $tmp1; ?>
									</select>
							
							</td>
							<td    width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="poid7" type="number">
							
							</td>
							<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name ="prix7" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c2p7" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c3p7" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="c4p7" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="t7" type="number">
							
							</td>
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="raw7" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="m7" type="number">
							
							</td>
							
							
								<td     width="100px" >
							
							  <input class="form-control" id="exampleInputName2" placeholder="0" name="s7" type="number">
							
							</td>
							
							
							
							 <td  width="4px"  >  <input type="checkbox" name="rv7">  </td>
							
						<td  width="10px" >	<input type="date" name="d7"  style=" width: 50px;   "  />     </td>
							

						
						  </tr>
						


<!-- *********************************************************************************************************************** -->






	
						</tbody>
					  </table>
					  <hr/><h3>Embalage Rander</h3>
					  <table>
					  <tr>
					<td>   <input type="checkbox" name="vider"><label>Vider</label>
					 <td>   <input class="form-control" id="exampleInputName2" placeholder="0" name="v2" type="number"><label>cp0.2</label></td>
					 <td>   <input class="form-control" id="exampleInputName2" placeholder="0" name="v3" type="number"><label>cp0.3</label></td>
					 <td>   <input class="form-control" id="exampleInputName2" placeholder="0" name="v4" type="number"><label>cp0.4</label></td>
					 <td>   <input class="form-control" id="exampleInputName2" placeholder="0" name="v6" type="number"><label>t0.6</label></td>
					<td>    <input class="form-control" id="exampleInputName2" placeholder="0" name="vraw" type="number"><label>raw</label></td>
					<td>    <input class="form-control" id="exampleInputName2" placeholder="0" name="vm" type="number"><label>M</label></td>
					<td>    <input class="form-control" id="exampleInputName2" placeholder="0" name="vs" type="number"><label>S</label></td>
					  </tr>
					  </table>
					   
					   
					   
					   
					   
					   
					   
					   
					   
					  
					  		<div class="row" align="center">
			<div class="col-sm-8 col-sm-offset-2">
			          <input value="Valider" type="submit">
				       
				
			</div>
		</div>
					  
					  </form>
					</div>
				 
		</div></div>
		
		<div>   
		
	    </div>
				 
<div class="agileits-box-body clearfix">
<div id="hero-area"></div>
</div>
</div>
</div>
                                                                 </div>
																 <button onclick="init2()"   > imprimer</button>
	
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
 </form>
						
					
<!--js -->

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