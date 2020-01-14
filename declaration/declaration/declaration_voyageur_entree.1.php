<!DOCTYPE html>
<html>
	<head>
		<link rel="icon" type="image/png" href="a68-douanes-algerienne.jpg"/>
		<link rel="stylesheet" href="css/docs.min.css"/>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<link rel="stylesheet" href="css/dec_css.css"/>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<meta charset="utf-8" lang="ar,fr">
		<title>
		Formulaire de déclaration de devise
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
		<p class="coul" align="center"><b>DECLARATION DE DEVISES ET OBJETS DE VALEUR</b></p>
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
						.bordcol{
							border-color: red;
						}
		</style>
		<div class="container">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    	<h3 class="panel-title">Informations Personnelles</h3>
			 	</div>
			 	<div class="panel-body">
			    	<form method="POST" onclick="swal()" id="from">
			    		<table border="0" style="width: 90%;" align="center">
			    			<tr>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</label>
				                		*<input type="text" name="nomv" class="form-control input-sm bordcol" placeholder="Nom" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" style="width: 40%;" required="required">
			    					</div>
			    				</td>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Prénom &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</label>
				                		*<input type="text" name="pren" class="form-control input-sm" placeholder="Prénom" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" style="width: 40%;" required="required">
			    					</div>
			    				</td>
			    			</tr>
			    			<tr>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Profession : &nbsp;&nbsp;</label>
				               			*<input type="text" name="prof" class="form-control input-sm" placeholder="Profession" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" style="width: 40%;" required="required"><br>
			    					</div>
			    				</td>
			    				<td>
			    					<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
				    					<label>Nationalité : &nbsp;&nbsp;</label>
				               			*<input onkeyup="fonc()" id="nat" type="text" name="nat" class="form-control input-sm" pattern="[A-Z ]{1}[a-z ]+|[a-z ]+|[A-Z ]+" placeholder="Nationalité" style="width: 40%;" required="required"><br>
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
				               			<input id="id" type="text" name="adr_a" class="form-control input-sm" placeholder="Adresse en Algérie" style="margin-left: 2.5%; width: 61.5%;" required>
			    					</div>
			    				</td>
			    			</tr>
			    			<tr>
			    				<td colspan="2">
			    					<div class="row" style="margin-left: 2.5%; margin-bottom: 1%;">
				    					<label>Adresse à l'étranger : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
				               			<input id="id1" type="text" name="adr_e" class="form-control input-sm" placeholder="Adresse à l'étranger" style="width: 61.5%;" required>
			    					</div>
			    				</td>
			    			</tr>
			    			<tr>
			    				<td colspan="2">
			    					<div class="row" style="margin-left: 2.5%;">
				    					<label>N° Passeport / Carte de résidence : &nbsp;</label>
				               			*<input type="text" name="np" class="form-control input-sm" placeholder="N° Passeport / Carte de résidence" style="width: 51%;" required="required">
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
				                			*<input type="text" name="nvoy" class="form-control input-sm" placeholder="N° voyage" style="width: 40%;" required="required"><label>&nbsp;&nbsp; Date :&nbsp;&nbsp;</label>
				                			<input type="date" name="datev" class="form-control" style="width: 20%" required>
			    						</div>
										<div class="row">
											<div class="col-md-6">
												<div class="col-md-6">
													<label class="container">Aérien
															  <input type="radio" name="voyage" class="container_input" value="aerien"  required>
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
							 					<input type="Number" name="vc" style="width: 100%; margin-bottom: 2%;" id="invisible" required><br>
							 					<input type="Number" name="vc2" style="width: 100%; margin-bottom: 2%;" id="invisible">
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
						 					<input type="text" name="md" style="width: 100%; margin-bottom: 1%;" id="invisible">
						 					<input type="text" name="md2" style="width: 100%; margin-bottom: 1%;" id="invisible">
						 				</div>
						 				<div class="col-md-6">
						 					<div class="col-md-6">
							 					<label>Poids En Chiffres</label><br>
							 					<input type="Number" name="pc" style="width: 100%; margin-bottom: 2%;" id="invisible">
							 					<input type="Number" name="pc2" style="width: 100%; margin-bottom: 2%;" id="invisible">
						 					</div>
						 					<div class="col-md-6">
							 					<label>Poids En Lettres</label><br>
							 					<input type="text" name="pl" style="width: 100%; margin-bottom: 2%;" id="invisible">
							 					<input type="text" name="pl2" style="width: 100%; margin-bottom: 2%;" id="invisible">
						 					</div>
						 				</div>
					 				</div>
					 	</div>
					 </div>
					 <div align="center">
					 <button class="btn btn-success btn-sm" id="impr" style="cursor:pointer;" type="submit" name="confirmer"> Confirmer </button>
					</div>
					<!-- <table border="0" align="center">
						<tr>
							<td>
								<button class="btn btn-success btn-sm" onclick="window.print();return false" id="impr" style="cursor:pointer; width: 140px;"><img src="imprimante.jpg"/> Print</button>
							</td>
							<td style="width: 500px;">
								
							</td>
							<td>
							</td>
						</tr>
					</table> -->
					</form>

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

		//verifier si cette formulaire est exist déja
		$sql="SELECT id_formulaire, id_utilisateur FROM formulaire WHERE n_voyage='$var8' AND n_passport='$var7'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0)  {  
			while($row = mysqli_fetch_array($result)){ 
				$id2=$row['id_formulaire'];	
				$id_user=$row['id_utilisateur'];
			}
			if($id_user != 'non'){
				echo "<script type='text/javascript'>alert('erreur: ce N° de voyage est déja valider !!');</script>";
			}else{?>
			<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
			<script type='text/javascript'>//confirmé la modification
				function swal() {
			        var form = this;
			
			        //e.preventDefault(); // <--- prevent form from submitting
			
			        swal({
			            title: "Are you sure?",
			            text: "Are You Sure You Want To Delete This Person",
			            icon: "warning",
			            buttons: [
			              'No, cancel it!',
			              'Yes, I am sure!'
			            ],
			            dangerMode: true,
			          }).then(function(isConfirm) {
			            if (isConfirm) {
			              swal({
			                title: 'Shortlisted!',
			                text: 'Candidates are successfully shortlisted!',
			                icon: 'success'
			              }).then(function() {
			                form.submit();
			                /************** le code de modification dans la BDD ici *****************/
			                <?php
								$conn = mysqli_connect("localhost", "root", "", "declaration");
								$sql1="UPDATE voyageur SET nom='$var1', prenom='$var2', profession='$var3', nationalite='$var4', adr_alg='$var5', adr_etr='$var6' WHERE n_passport='$var7'";
								mysqli_query($conn, $sql1);
								
								$sql2="UPDATE voyage SET type='$type', date_v='$da' WHERE n_voyage='$var8'";
								mysqli_query($conn, $sql2);
								
								$sql4="UPDATE formulaire SET n_voyage='$var8', n_passport='$var7', id_utilisateur='non', valide='0', modifie='1' WHERE id_formulaire='$id2'";
								mysqli_query($conn, $sql4);
														
								$sql3="UPDATE importations SET devise_declare='$dcm', val_chiffre='$v9', val_lettre='$var10', metaux_declare='$mm', poids_chiffre=". floatval('$p1m').", poids_lettre='$p2m',avis_autorisation='nope', devise_declare2='$dcm2', val_chiffre2=". floatval('$var92').", val_lettre2='$var102', metaux_declare2='$mm2', poids_chiffre2=". floatval('$p1m2').", poids_lettre2='$p2m2' WHERE id_formulaire='$id2'";
								mysqli_query($conn, $sql3);
							?>
			              });
			            } else {
			              swal("Cancelled", "Your are safe now :)", "error");
			            }
			          })
			    });
				
			</script><?php				
			}
		} else {
			//si non
			echo "<script type='text/javascript'>alert('Sauvegardé avec succès');</script>";
			$sql1="INSERT INTO voyageur (nom, prenom, profession, nationalite, adr_alg, adr_etr, n_passport) VALUES('$var1','$var2','$var3','$var4','$var5','$var6','$var7')";
			mysqli_query($conn, $sql1);
			
			$sql2="INSERT INTO voyage (n_voyage, type, date_v) VALUES('$var8','$type','$da')";
			mysqli_query($conn, $sql2);
			
			$sql4="INSERT INTO formulaire(n_voyage, n_passport, id_utilisateur, valide, modifie) VALUES ('$var8','$var7','non', '0', '0' )";
			if (mysqli_query($conn, $sql4)) {
				$id2 = $conn->insert_id;
			}
			
			if ($v4 == "algerien"){
				$sql="INSERT INTO etat(id_formulaire, etat) VALUES ('$id2', 'entree')";
				mysqli_query($conn, $sql);
			}else{
				$sql="INSERT INTO apurement(id_formulaire, date_ap) VALUES ('$id2','0000-00-00')";
				mysqli_query($conn, $sql);
			}
			
			$sql3="INSERT INTO importations (devise_declare, val_chiffre, val_lettre, metaux_declare, poids_chiffre, poids_lettre,avis_autorisation, devise_declare2, val_chiffre2, val_lettre2, metaux_declare2, poids_chiffre2, poids_lettre2, id_formulaire) VALUES('$dcm','$v9','$var10','$mm',". floatval('$p1m').",'$p2m', 'nope', '$dcm2', ". floatval('$var92').",'$var102','$mm2',". floatval('$p1m2')." ,'$p2m2', '$id2')";
			mysqli_query($conn, $sql3);
			
			/*
			$image = $_FILES['image']['name'];
			$file_tmp_name=$_FILES['image']['tmp_name'];
			move_uploaded_file($file_tmp_name,"/images/$image");
			
			$req="INSERT INTO echange(image) VALUES ('$image') WHERE id_formulaire == $id2";
			
			mysqli_query($conn, $req) or die("Error: ".mysqli_error($conn));
			*/
		}
	}
	$conn->close();
		
		
?>
</body>
</html>