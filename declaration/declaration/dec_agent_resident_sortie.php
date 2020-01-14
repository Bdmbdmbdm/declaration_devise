<?php
session_start(); // Right at the top of your script

if($_SESSION['logged']==true)
    { 
		echo '<a href="authentification.php" class="btn btn-default btn-sm float-right" style="margin:10px"><span class="glyphicon glyphicon-log-out"></span> Log out</a>';
    }
  elseif($_SESSION['logged']==false)
    {
      header('Location: authentification.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="a68-douanes-algerienne.jpg"/>
		<link rel="stylesheet" href="css/docs.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/dec_css.css"/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
		<meta charset="utf-8" lang="ar,fr">
		<title>
		Déclaration à la sortie
		</title>
	</head>
	<body>
		<div class="container">
		<div class="panel panel-default">
		<p align="center"><b> الجمهــــــوريـــــــــة الجــزائريـــــــــة الـديمقراطــــيــــــة الشعبـــــيـــــــة </b></p>
		<p align="center"><b> REPUBLIQUE ALGERIENNE DEMOCRATIQUE ET POPULAIRE </b></p>
		<table border="0" align="center">
			<tr>
				<td width="30%">
					<p align="center" style="font-size: 15px;"><b>MINISTERE DES FINANCES</b></p>
				    <hr align="center" width="80px" color="black">
					<p align="center"  ><b>DIRECTION GENERALE DES DOUANES</b></p>
					<hr align="center" width="80px" color="black">
				</td>
				<td width="30%">
					<p align="center"><img src="douane.jpg"></p>
				</td>
				<td width="30%">
					<p align="center"><b>وزارة المــــاليــــــــة</b></p>
						<hr align="center" width="80px" color="black">
						<p align="center"><b>المديريــة العامــة للجمــــارك</b></p>
						<hr align="center" width="80px" color="black">
				</td>
			</tr>
		</table>
		<p class="coul" align="center"><b>Déclaration à la sortie d'un résident</b></p>
	</div>
</div>
		<style type="text/css">
			@media print{
				#impr{
				display: none;
				}
				input{
					border-width: 0;
					border: none;
				}
				body{
			    	background-image: none;
				}
				.inv{
					width: 70%;
				}
				.container{
					margin-bottom: none;
					margin-top: none;
				}
			}

					.coul{
				color: blue;
				font-size: 20px;
			}
			.panel{
				background: rgba(255, 255, 255, 0.8);
				box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
			}

						/* The container */
						.container {
						    display: block;
						    position: relative;
						    padding-left: 35px;
						    
						    cursor: pointer;
						    
						    -webkit-user-select: none;
						    -moz-user-select: none;
						    -ms-user-select: none;
						    user-select: none;
						}

						/* Hide the browser's default radio button */
						.container_input {
						    position: absolute;
						    opacity: 0;
						    cursor: pointer;
						}

						/* Create a custom radio button */
						.checkmark {
						    position: absolute;
						    top: 0;
						    left: 0;
						    height: 25px;
						    width: 25px;
						    background-color: #eee;
						    border-radius: 50%;
						}

						/* On mouse-over, add a grey background color */
						.container:hover input ~ .checkmark {
						    background-color: #ccc;
						}

						/* When the radio button is checked, add a blue background */
						.container input:checked ~ .checkmark {
						    background-color: #2196F3;
						}

						/* Create the indicator (the dot/circle - hidden when not checked) */
						.checkmark:after {
						    content: "";
						    position: absolute;
						    display: none;
						}

						/* Show the indicator (dot/circle) when checked */
						.container input:checked ~ .checkmark:after {
						    display: block;
						}

						/* Style the indicator (dot/circle) */
						.container .checkmark:after {
						 	top: 9px;
							left: 9px;
							width: 8px;
							height: 8px;
							border-radius: 50%;
							background: white;
						}
						body {
						  background: url('images/2014_DOUANE_261536149.jpg') no-repeat center center fixed;
						  -webkit-background-size: cover;
						  -moz-background-size: cover;
						  -o-background-size: cover;
						  background-size: cover;
						}
						input.control:valid {
						  border: 1px solid ;
						  border-color: green;
						}
						input.control:invalid {
						  border:1px solid ;
						  border-color: red;
						}
						.valide{
							border: 1px solid ;
						  border-color: green;
						}
						.invalide{
							border:1px solid ;
						  border-color: red;
						}
		</style>
		
		<div class="container">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<h3 class="panel-title">Informations Personnelles</h3>
			 	</div>
			 	<div class="panel-body">
			    	<form method="POST" enctype="multipart/form-data">
			    		<table border="0" style="width: 90%;" align="center">
			    			<tr>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</label>
				                		<input type="text" name="nomv" class="form-control input-sm bordcol control" placeholder="Nom" style="width: 40%;" id="nom" required="required" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" title="Exp: Nom / nom / NOM">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Prénom &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</label>
				                		<input type="text" name="pren" class="form-control input-sm control" placeholder="Prénom" style="width: 40%;" required="required" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" title="Exp: Prénom / prénom">
			    					</div>
			    				</td>
			    			</tr>
			    			<tr>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Profession : &nbsp;&nbsp;</label>
				               			*<input type="text" name="prof" class="form-control input-sm control" placeholder="Profession" style="width: 40%;" required="required" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" title="Exp: Profession / profession"><br>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Nationalité : &nbsp;&nbsp;</label>
				               			*<input id="nat" onkeyup="fonc()" type="text" name="nat" class="form-control input-sm control" placeholder="Nationalité" style="width: 40%;" required="required" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" title="Exp: Nationalité / nationalité"><br>
			    						<script>
					    					function fonc(){
				    							if(document.getElementById("nat").value=="algerien"){
				    								document.getElementById("id1").setAttribute("readonly","");
				    								document.getElementById("id").removeAttribute("readonly");
				    							}else{
				    								document.getElementById("id").setAttribute("readonly","");
				    								document.getElementById("id1").removeAttribute("readonly");
				    							}
					    					}
			    						</script>
			    					</div>
			    				</td>
			    			</tr>
			    			<tr>
			    				<td colspan="2">
			    					<div class="row" style="margin-left: 2.5%; margin-bottom: 1%;">
				    					<label>Adresse en Algérie &nbsp;&nbsp;:</label>
				               			<input id="id" type="text" name="adr_a" class="form-control input-sm control" placeholder="Adresse en Algérie" style="margin-left: 2.5%; width: 61.5%;" pattern="[^(&§!?{$¤£<'>}_=+[°|#~@µ]%)]|[/]" title="Exp: 02 Rue didouche mourad ALGER ou /" required="required">
			    					</div>
			    				</td>
			    			</tr>
			    			<tr>
			    				<td colspan="2">
			    					<div class="row" style="margin-left: 2.5%; margin-bottom: 1%;">
				    					<label>Adresse à l'étranger : &nbsp;&nbsp;&nbsp;&nbsp;</label>
				               			<input id="id1" type="text" name="adr_e" class="form-control input-sm control" placeholder="Adresse à l'étranger" style="width: 61.5%;" pattern="[^(&§!?{$¤£<'>}_=+[°|#~@µ]%)]+|[/]" title="Exp: 02 Rue ... PARIS ou /" required="required">
			    					</div>
			    				</td>
			    			</tr>
			    			<tr>
			    				<td colspan="2">
			    					<div class="row" style="margin-left: 2.5%;">
				    					<label>N° Passeport / Carte de résidence : &nbsp;</label>
				               			*<input type="text" name="np" class="form-control input-sm control" placeholder="N° Passeport / Carte de résidence" style="width: 51%;" required="required" pattern="\d{2}[A-Z]{2}\d{5}|\d{9}" title="Exp: 12AA12345 ou 123456789">
			    					</div>
			    				</td>
			    			</tr>
			    		</table>
			    	</div>
			    </div>
			</div>
			   <div class="container">
        			<div class="panel panel-default">
			    			<div class="panel-heading">
					    		<h3 class="panel-title">Informations sur le voyage</h3>
					 			</div>
					 			<div class="panel-body">
					 				<div class="container" id="principal">
					 					<div class="row" style="margin-left: 3%; margin-bottom: 3%;">
				    						<label>N° Voyage : &nbsp;&nbsp;</label>
				                			<input type="text" name="nvoy" class="form-control input-sm" placeholder="N° voyage" style="width: 40%;" required="required" id="nv" pattern="[^(&§!?{$¤£<'>}_=+[°|#~@µ]%)]|[/]">
				                			<div class="char">
				                			<!--<span id="char" class="glyphicon glyphicon-remove" style="color:#FF0004;">les car...
				                			</span>-->
				                			</div>
				                			<script type="text/javascript">
				                				document.getElementById(char).hide();
				                				 var ucase = new RegExp("[a-z]+");
				                				 	if(ucase.test($("#nv").val())){
				                				 		document.getElementById(char).hide();
														$("#8char").removeClass("glyphicon-remove");
														$("#8char").addClass("glyphicon-ok");
														$("#8char").css("color","#00A41E");
													}else{
														document.getElementById(char).show();
														$("#8char").removeClass("glyphicon-ok");
														$("#8char").addClass("glyphicon-remove");
														$("#8char").css("color","#FF0004");
													}
				                			</script>

				                			<?php /*
				                			$pseudo = htmlspecialchars($_POST['nvoy']);
											if(preg_match('/php/i', $pseudo))
											{
											     $msg = 'Seul les caractères alpha-numérique et le _ sont acceptés';
											     ?>
											     <script type="text/javascript">
											     	var monLien = document.getElementById("nv");
											     	monLien.setAttribute("class", "invalide");
											     </script>
											     <?php
											}
											else
											{
											 ?>
											     <script type="text/javascript">
											     	var monLien = document.getElementById("nv");
											     	monLien.setAttribute("class", "valide");
											     </script>
											     <?php
											} */
											?>
				                			<label>&nbsp;&nbsp; Date :&nbsp;&nbsp;</label>
				                			<input type="date" name="datev" class="form-control" style="width: 20%" required>
			    						</div>
										<div class="row">
											<div class="col-md-6">
												<div class="col-md-6">
													<label class="container">Aérien
															  <input type="radio" name="voyage" class="container_input" value="aerien" required>
															  <span class="checkmark"></span>
													</label>
												</div>
												<div class="col-md-6">
													<label class="container">Maritime
															  <input type="radio" name="voyage" class="container_input" value="maritime">
															  <span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="col-md-6">
												<div class="col-md-6">
													<label class="container">Train
															  <input type="radio" name="voyage" class="container_input" value="train" >
															  <span class="checkmark"></span>
													</label>
												</div>
												<div class="col-md-6">
													<label class="container">Vehicule
															  <input type="radio" name="voyage" class="container_input" value="vehicule" >
															  <span class="checkmark"></span>
													</label>
												</div>
											</div>
										</div>
					 		</div>
			    	</div>
	    			</div>
	    			</div>
	    			<div class="container">
        				<div class="panel panel-default">
			    			<div class="panel-heading">
					    		<h3 class="panel-title">Importations</h3>
					 			</div>
					 			<div class="panel-body">
					 				<div>
						 				<div class="col-md-6">
						 					<label>Description et nature des devises déclarés</label><br>
						 					<input type="text" name="desc" style="width: 100%; margin-bottom: 1%;" id="invisible" required>
						 					<input type="text" name="desc2" style="width: 100%; margin-bottom: 1%;" id="invisible">
						 				</div>
						 				<div class="col-md-6">
						 					<div class="col-md-6">
							 					<label>Valeur En Chiffres</label><br>
							 					<input type="Number" name="vc" style="width: 100%; margin-bottom: 2%;" id="invisible" min="1000" required><br>
							 					<input type="Number" name="vc2" style="width: 100%; margin-bottom: 2%;" id="invisible" min="1000">
						 					</div>
						 					<div class="col-md-6">
							 					<label>Valeur En Lettres</label><br>
							 					<input type="text" name="vl" style="width: 100%; margin-bottom: 2%;" id="invisible" required><br>
							 					<input type="text" name="vl2" style="width: 100%; margin-bottom: 2%;" id="invisible">
						 					</div>
						 				</div>
					 				</div>
					 				<br>
					 				<div>
					 				</div>
					 				</div>
					 				<div class="panel-body">
						 				<div class="col-md-6">
						 					<label>Description et nature des métaux précieux déclarés</label><br>
						 					<input type="text" name="md" style="width: 100%; margin-bottom: 1%;" id="invisible" pattern="[a-zA-Z]">
						 					<input type="text" name="md2" style="width: 100%; margin-bottom: 1%;" id="invisible">
						 				</div>
						 				<div class="col-md-6">
						 					<div class="col-md-6">
							 					<label>Poids En Chiffres</label><br>
							 					<input type="Number" name="pc" style="width: 100%; margin-bottom: 2%;" id="invisible" min="100">
							 					<input type="Number" name="pc2" style="width: 100%; margin-bottom: 2%;" id="invisible" min="100">
						 					</div>
						 					<div class="col-md-6">
							 					<label>Poids En Lettres</label><br>
							 					<input type="text" name="pl" style="width: 100%; margin-bottom: 2%;" id="invisible"
							 					>
							 					<input type="text" name="pl2" style="width: 100%; margin-bottom: 2%;" id="invisible">
						 					</div>
						 				</div>
					 				</div>
					 	</div>
					 </div>
					 <div class="container">
        				<div class="panel panel-default">
			    			<div class="panel-heading">
					    		<h3 class="panel-title">ECHANGE</h3>
					 			</div>
					 			<div class="panel-body">
					 				<div>
						 				<div class="col-md-6">
						 					<label>Nature des devises cédées</label><br>
						 					<input type="text" name="natur_cd" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['natur_cd'])) echo $_POST['natur_cd']; ?>" >
						 					<input type="text" name="natur2_cd" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['natur2_cd'])) echo $_POST['natur2_cd']; ?>" >
						 				</div>
						 				<div class="col-md-6">
						 					<div class="col-md-6">
							 					<label>Montant</label><br>
							 					<input type="Number" name="mont_cd" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['mont_cd'])) echo $_POST['mont_cd']; ?>" min="1"><br>
							 					<input type="Number" name="mont2_cd" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['mont2_cd'])) echo $_POST['mont2_cd']; ?>" min="1">
						 					</div>
						 					<div class="col-md-6">
							 					<label>date</label><br>
							 					<input type="date" name="date1_cd" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['date1_cd'])) echo $_POST['date1_cd']; ?>"><br>
							 					<input type="date" name="date2_cd" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['date2_cd'])) echo $_POST['date2_cd']; ?>">
						 					</div>
						 				</div>
					 				</div>
					 				<br>
					 				<div>
					 				</div>
					 				</div>
					 				<div align="right">
					 				<input type="file" name="image" accept="image/*" id="impr">
					 				</div>
					 	</div>
					 </div>
					 <div align="center">
					 <button class="btn btn-success btn-sm" id="impr" style="cursor:pointer;" type="submit" name="confirmer"> Confirmer </button>
					</div>

				</div>
				
	</form>
		<!-- <table border="0" align="center">
						<tr>
							<td>
								<button class="btn btn-success btn-sm" onclick="window.print();return false" id="impr" style="cursor:pointer; width: 140px;"><img src="imprimante.jpg"/> Print</button>
							</td>
							<td style="width: 500px;">
								
							</td>
							<td>
								<button href="" class="btn btn-success btn-sm" id="impr" style="cursor:pointer;" type="submit"> Valider </button>
							</td>
						</tr>
					</table> -->

<?php 
	function miroire($chaine){
		$str = strrev($chaine);
		if ($str == ""){
			$str = 0;
		}
		return $str;
	}
		
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "declaration";
	//creation de la connexion

	$conn=new mysqli($servername,$username,$password,$dbname);

	if(!$conn){
		echo"not connected to server";
	}

	if(!mysqli_select_db($conn,'declaration')){
		echo"base de donnee no trouve";
		
	}
	$id_user = $_SESSION['username'];
	if (isset($_POST['confirmer'])) {
		//recuperer tous les champes
		$v7 = $_POST['np'];
		$var7 = miroire($v7);
		$v8 = $_POST['nvoy'];
		$var8 = miroire($v8);
		$v1 = $_POST['nomv'];
		$var1 = miroire($v1);
		$v2 = $_POST['pren'];
		$var2 = miroire($v2);
		$v3 = $_POST['prof'];
		$var3 = miroire($v3);
		$v4 = $_POST['nat'];
		$var4 = miroire($v4);
		$v5 = $_POST['adr_a'];
		$var5 = miroire($v5);
		$v6 = $_POST['adr_e'];
		$var6 = miroire($v6);
		$t = $_POST['voyage'];
		$type = miroire($t);
		$da = $_POST['datev'];
		$dc = $_POST['desc'];
		$dcm = miroire($dc);
		$v9 = $_POST['vc'];
		$var9 = miroire($v9);
		$v10 = $_POST['vl'];
		$var10 = miroire($v10);
		$m = $_POST['md'];
		$mm = miroire($m);
		$p1 = $_POST['pc'];
		$p1m = miroire($p1);
		$p2 = $_POST['pl'];
		$p2m = miroire($p2);
		$dc2 = $_POST['desc2'];
		$dcm2 = miroire($dc2);
		$v92 = $_POST['vc2'];
		$var92 = miroire($v92);
		$v102 = $_POST['vl2'];
		$var102 = miroire($v102);
		$m2 = $_POST['md2'];
		$mm2 = miroire($m2);
		$p12 = $_POST['pc2'];
		$p1m2 = miroire($p12);
		$p22 = $_POST['pl2'];
		$p2m2 = miroire($p22);
		$n1 = $_POST['natur_cd'];
		$n12 = miroire($n1);
		$n2 = $_POST['natur2_cd'];
		$n22 = miroire($n2);
		$n3 = $_POST['mont_cd'];
		$n32 = miroire($n3);
		$n4 = $_POST['mont2_cd'];
		$n42 = miroire($n4);
		$n52 = $_POST['date1_cd'];if($n52=="") $n52="2000-01-01";
		$n62 = $_POST['date2_cd'];
		if($n62=="") $n62="2000-01-01";

		$date1 = new DateTime("now");
		$date2 = new DateTime($da);
		if($date1 > $date2){
			echo "<script type='text/javascript'>alert('erreur: date de voyage non valide !!');</script>";
		}else{

			if($v4 != "algerien"){
				echo "<script type='text/javascript'>alert('erreur: la déclaration à la sortie est concerne un voyageur resident seulement !!');</script>";
			}else{
				//verifier si cette formulaire est exist déja
				$sql="SELECT id_formulaire, id_utilisateur FROM formulaire WHERE n_voyage=$var8 AND n_passport=$var7";
				$result = mysqli_query($conn, $sql);
				if(mysqli_num_rows($result) > 0)  {  
					while($row = mysqli_fetch_array($result)){ 
						$id2=$row['id_formulaire'];	
						$id_us=$row['id_utilisateur'];
					}
					if($id_us != 'non'){
						echo "<script type='text/javascript'>alert('erreur: ce N° de voyage est déja valider !!');</script>";
					}else{
						$etat="";//assurer que cette formulaire est correspand à un voyageur en entrée
						$sql="SELECT etat FROM etat WHERE id_formulaire=$id2";
						$result= mysqli_query($conn, $sql);
						if($result->num_rows>0){
							while($row=$result->fetch_assoc()){
								$etat=$row['etat'];	
							}
						}
						if($etat == "entree"){
							echo "<script type='text/javascript'>alert('erreur: cette formulaire est conserne un voyageur en entree!!');</script>";
						}else{
							echo "<script type='text/javascript'>if (confirm('veulliez vous vraiment modifier cette formulaire ! ')){alert('Valider');}</script>";						
							
								$sql1="UPDATE voyageur SET nom='$var1', prenom='$var2', profession='$var3', nationalite='$var4', adr_alg='$var5', adr_etr='$var6' WHERE n_passport='$var7'";
								mysqli_query($conn, $sql1);
								
								$sql2="UPDATE voyage SET type='$type', date_v='$da' WHERE n_voyage='$var8'";
								mysqli_query($conn, $sql2);
								
								$sql4="UPDATE formulaire SET n_voyage='$var8', n_passport='$var7', id_utilisateur='$id_user', valide='1', modifie='2' WHERE id_formulaire='$id2'";
								mysqli_query($conn, $sql4);
														
								$sql3="UPDATE importations SET devise_declare='$dcm', val_chiffre='$v9', val_lettre='$var10', metaux_declare='$mm', poids_chiffre=". floatval('$p1m').", poids_lettre='$p2m',avis_autorisation='nope', devise_declare2='$dcm2', val_chiffre2=". floatval('$var92').", val_lettre2='$var102', metaux_declare2='$mm2', poids_chiffre2=". floatval('$p1m2').", poids_lettre2='$p2m2' WHERE id_formulaire='$id2'";
								mysqli_query($conn, $sql3);
	
								$sql5="UPDATE `echang` SET nature='$n12', nature2='$n22', montant='$n3', montant2='$n4', date_c='$n52', date_c2='$n62' WHERE  `echang`.`id_formulaire`='$id2'";
								mysqli_query($conn, $sql5) or die("Error: ".mysqli_error($conn));
							
						}				
					}
				} else {
					//si non
					
					echo "<script type='text/javascript'>alert('Sauvegardé avec succès');</script>";
					$sql1="INSERT INTO voyageur (nom, prenom, profession, nationalite, adr_alg, adr_etr, n_passport) VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7')";
					mysqli_query($conn, $sql1);
					
					$sql2="INSERT INTO voyage (n_voyage, type, date_v) VALUES('$var8','$type','$da')";
					mysqli_query($conn, $sql2);
					
					$sql4="INSERT INTO formulaire(n_voyage, n_passport, id_utilisateur, valide, modifie) VALUES ('$var8','$var7','$id_user', '1', '0' )";
					if (mysqli_query($conn, $sql4)) {
						$id2 = $conn->insert_id;
					}
					
					$sql="INSERT INTO etat(id_formulaire, etat) VALUES ('$id2', 'sortie')";
					mysqli_query($conn, $sql);
								
					$sql3="INSERT INTO importations (devise_declare, val_chiffre, val_lettre, metaux_declare, poids_chiffre, poids_lettre,avis_autorisation, devise_declare2, val_chiffre2, val_lettre2, metaux_declare2, poids_chiffre2, poids_lettre2, id_formulaire) VALUES('$dcm','$v9','$var10','$mm',". floatval('$p1m').",'$p2m', 'nope', '$dcm2', ". floatval('$var92').",'$var102','$mm2',". floatval('$p1m2')." ,'$p2m2', '$id2')";
					mysqli_query($conn, $sql3);
	
					$sql6="INSERT INTO `echang` (`id_formulaire`, `date_c`, `montant`, `nature`, `nature2`, `montant2`, `date_c2`, `image`) VALUES ('$id2', '$n52', '$n32', '$n12', '$n22', '$n42', '$n62', NULL);";
					mysqli_query($conn, $sql6) or die("Error: ".mysqli_error($conn));
	
				}
			}
		}
	}
	
	$conn->close();
		
?>
					
</body>
</html>