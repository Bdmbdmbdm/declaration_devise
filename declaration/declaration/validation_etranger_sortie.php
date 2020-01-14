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
		Appurement
		</title>
	</head>
<?php
function miroire($chaine){
		$str = strrev($chaine);
	
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

	$m1="";
	
	if (isset($_POST['submit'])) {
		$p=miroire($_POST['np2']);
		$p2=miroire($_POST['nvoy2']);
		
		$sql="SELECT id_formulaire FROM formulaire WHERE n_voyage=$p2 AND n_passport=$p AND valide='1'";
		$result= mysqli_query($conn, $sql);
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$id_form=$row['id_formulaire'];	
			}
			$etat="";
			$sql="SELECT * FROM apurement WHERE id_formulaire=$id_form";
			$result= mysqli_query($conn, $sql);
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$etat="entree";	
				}
			}
			if($etat != "entree"){
				echo "<script type='text/javascript'>alert('erreur: aucune formulaire trouvé!!');</script>";
			}else{
				$sql="SELECT n_passport,nom, prenom, profession, nationalite, adr_alg, adr_etr FROM voyageur WHERE n_passport = $p";
				$result= mysqli_query($conn, $sql);
				if($result->num_rows>0){
					while($row = mysqli_fetch_array($result)){ 
						$n=miroire($row['nom']);
						$_POST['nomv']= $n;
						$n1=miroire($row['prenom']);
						$_POST['pren']= $n1;
						$n2=miroire($row['profession']);
						$_POST['prof']= $n2;
						$n3=miroire($row['nationalite']);
						$_POST['nat']= $n3;
						$n4=miroire($row['adr_alg']);
						$_POST['adr_a']= $n4;
						$n5=miroire($row['adr_etr']);
						$_POST['adr_e']= $n5;
					}
				}else{
					echo "NO RESULT FOUND VOYAGEUR";
				}
		
				$sql1="SELECT type, date_v FROM voyage WHERE n_voyage=$p2";
				$result= mysqli_query($conn, $sql1);
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						$m1=miroire($row['type']);
						$_POST['type_v']= $m1;
						$m2=strftime('%Y-%m-%d',strtotime($row['date_v']));
						$_POST['datev']= $m2; 
					}
				}
				else{
					echo "NO RESULT FOUND VOYAGE";
				}
				
				$sql2="SELECT devise_declare, val_chiffre, val_lettre, metaux_declare, poids_chiffre, poids_lettre, devise_declare2, val_chiffre2, val_lettre2, metaux_declare2, poids_chiffre2, poids_lettre2 FROM importations WHERE id_formulaire=$id_form";
				$result= mysqli_query($conn, $sql2);
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						$l=miroire($row['devise_declare']);
						$_POST['desc']= $l;
						$l1=($row['val_chiffre']);
						$_POST['vc']= $l1;
						$l2=miroire($row['val_lettre']);
						$_POST['vl']= $l2;
						$l3=miroire($row['metaux_declare']);
						$_POST['md']= $l3;
						$l4=miroire($row['poids_chiffre']);
						$_POST['pc']= $l4;
						$l5=miroire($row['poids_lettre']);
						$_POST['pl']= $l5;
						$l6=miroire($row['devise_declare2']);
						$_POST['desc2']= $l6;
						$l7=miroire($row['val_chiffre2']);
						$_POST['vc2']= $l7;
						$l8=miroire($row['val_lettre2']);
						$_POST['vl2']= $l8;
						$l9=miroire($row['metaux_declare2']);
						$_POST['md2']= $l9;
						$l10=miroire($row['poids_chiffre2']);
						$_POST['pc2']= $l10;
						$l11=miroire($row['poids_lettre2']);
						$_POST['pl2']= $l11;
					}
				}
				else{
					echo "NO RESULT FOUND IMPORTATIONS";
				}
			
				
					$_POST['natur']='0';
					$_POST['natur2']='0';
					$_POST['mont']='0';
					$_POST['mont2']='0';
				

				$sql3="SELECT nature, nature2, montant, montant2, date_e, date_e2 FROM `change` WHERE id_formulaire=$id_form";
				$result= mysqli_query($conn, $sql3);
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						$c1 = miroire($row['nature']);
						$_POST['nature_cd']=$c1;
						$c2 = miroire($row['nature2']);
						$_POST['nature2_cd']=$c2;
						$c3 = $row['montant'];
						$_POST['mont_cd']=$c3;
						$c4 = $row['montant2'];
						$_POST['mont2_cd']=$c4;
						if($row['date_e']!="2000-01-01") 
							$c5 = strftime('%Y-%m-%d',strtotime($row['date_e']));
						else
							$c5 = "";
						$_POST['date1_cd']=$c5;
	
						if($row['date_e2']!="2000-01-01") 
							$c6 = strftime('%Y-%m-%d',strtotime($row['date_e2']));
						else 
							$c6 = "";
						$_POST['date2_cd']=$c6;
					}
				}else{
					$_POST['nature_cd']='0';
					$_POST['nature2_cd']='0';
					$_POST['mont_cd']='0';
					$_POST['mont2_cd']='0';
				}
			}
		}else{
			echo "<script type='text/javascript'>alert('erreur: aucune formulaire trouvé');</script>";
		}
	}

	$id_user = $_SESSION['username'];
	if (isset($_POST['valider'])) {

		$p=miroire($_POST['np2']);
		$p2=miroire($_POST['nvoy2']);

		$sql="SELECT id_formulaire FROM formulaire WHERE n_voyage=".$p2." AND n_passport=$p AND valide='1'";
		$result= mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
		if($result->num_rows>0){
			while($row=$result->fetch_assoc()){
				$id_form=$row['id_formulaire'];	
			}

			$etat="";
			$sql="SELECT * FROM apurement WHERE id_formulaire=$id_form";
			$result= mysqli_query($conn, $sql);
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$etat="entree";	
				}
			}
			if($etat != "entree"){
				echo "<script type='text/javascript'>alert('erreur: aucune formulaire trouvé');</script>";
			}else{
				$sql="SELECT n_passport,nom, prenom, profession, nationalite, adr_alg, adr_etr FROM voyageur WHERE n_passport = $p";
				$result= mysqli_query($conn, $sql) or die("Error: ".mysqli_error($conn));
				if($result->num_rows>0){
					while($row = mysqli_fetch_array($result)){ 
						$n=miroire($row['nom']);
						$n1=miroire($row['prenom']);
						$n2=miroire($row['profession']);
						$n3=miroire($row['nationalite']);
						$n4=miroire($row['adr_alg']);
						$n5=miroire($row['adr_etr']);
					}
				}else{
					echo "NO RESULT FOUND VOYAGEUR";
				}
				$sql1="SELECT type, date_v FROM voyage WHERE n_voyage=$p2";
				$result= mysqli_query($conn, $sql1) or die("Error: ".mysqli_error($conn));
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						$m1=miroire($row['type']);
						$m2=strftime('%Y-%m-%d',strtotime($row['date_v']));
					}
				}
				else{
					echo "NO RESULT FOUND VOYAGE";
				}
				
				$sql2="SELECT devise_declare, val_chiffre, val_lettre, metaux_declare, poids_chiffre, poids_lettre, devise_declare2, val_chiffre2, val_lettre2, metaux_declare2, poids_chiffre2, poids_lettre2 FROM importations WHERE id_formulaire=$id_form";
				$result= mysqli_query($conn, $sql2) or die("Error: ".mysqli_error($conn));
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						$l=miroire($row['devise_declare']);
						$l1=($row['val_chiffre']);
						$l2=miroire($row['val_lettre']);
						$l3=miroire($row['metaux_declare']);
						$l4=miroire($row['poids_chiffre']);
						$l5=miroire($row['poids_lettre']);
						$l6=miroire($row['devise_declare2']);
						$l7=miroire($row['val_chiffre2']);
						$l8=miroire($row['val_lettre2']);
						$l9=miroire($row['metaux_declare2']);
						$l10=miroire($row['poids_chiffre2']);
						$l11=miroire($row['poids_lettre2']);
					}
				}
				else{
					echo "NO RESULT FOUND IMPORTATIONS";
				}
				$sql3="SELECT nature, nature2, montant, montant2, date_e, date_e2 FROM `change` WHERE id_formulaire=$id_form";
				$result= mysqli_query($conn, $sql3) or die("Error: ".mysqli_error($conn));
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						$c1 = miroire($row['nature']);
						$c2 = miroire($row['nature2']);
						$c3 = $row['montant'];
						$c4 = $row['montant2'];
						$c5 = $row['date_e'];if ($c5=='2000-01-01') $c5='';
						$c6 = $row['date_e2'];if ($c6=='2000-01-01') $c6='';				
					}
				}else{
					$c1 = '0';
					$c2 = '0';
					$c3 = '0';
					$c4 = '0';
					$c5 = '2000-01-01';
					$c6 = '2000-01-01';
					$sql6="INSERT INTO echang(nature, nature2, montant, montant2, date_e, date_e2, id_formulaire) VALUES('$c1','$c2','$c3','$c4','$c5','$c6','$id_form')";
					mysqli_query($conn, $sql6);
					$c5 = '';
					$c6 = '';
				}

				$x1 = $_POST['natur'];
				$x12 = miroire($x1);
				$x2 = $_POST['natur2'];
				$x22 = miroire($x2);
				$x3 = $_POST['mont'];
				$x32 = $x3;
				$x4 = $_POST['mont2'];
				$x42 = $x4;
				$x52 = $_POST['date1'];if($x52=="") $x52="2000-01-01";
				$x62 = $_POST['date2'];if($x62=="") $x62="2000-01-01";

				$c12=miroire($_POST['nature_cd']);
				$c22=miroire($_POST['nature2_cd']);
				$c32=$_POST['mont_cd'];
				$c42=$_POST['mont2_cd'];
				$c52=$_POST['date1_cd'];if($c52=="") $c52="2000-01-01";
				$c62=$_POST['date2_cd'];if($c62=="") $c62="2000-01-01";

				if ($_POST['nomv']==$n && $_POST['pren']==$n1 && $_POST['prof']==$n2 && $_POST['nat']==$n3 &&
					$_POST['adr_a']==$n4 && $_POST['adr_e']==$n5 && miroire($p2)==$_POST['nvoy2'] && $_POST['type_v']==$m1 && $_POST['datev']==$m2 && 
					$_POST['desc']==$l && $_POST['vc']==$l1 && $_POST['vl']==$l2 && $_POST['md']==$l3 && $_POST['pc']==$l4 && $_POST['pl']==$l5 && 
					$_POST['desc2']==$l6 && $_POST['vc2']==$l7 && $_POST['vl2']==$l8 && $_POST['md2']==$l9 && $_POST['pc2']==$l10 && $_POST['pl2']==$l11 )
				{
					if ($_POST['nature_cd']=="0" || $_POST['mont_cd']=="0" || $_POST['date1_cd']==""){
						echo "<script type='text/javascript'>alert('cette formulaire est invalide ! veuillez vous la signaler');</script>";
					}else{
						echo "<script type='text/javascript'>alert('Valider');</script>";
						$sql = "UPDATE formulaire SET valide='2' WHERE id_formulaire=$id_form";
						$conn->query($sql);
						$date1 = new DateTime("now");
						$d=$date1->format('D M d, Y');
						$date=strftime('%Y-%m-%d',strtotime($d));
						$sql2 = "UPDATE apurement SET id_utilisateur='$id_user', date_ap='$date' WHERE id_formulaire=$id_form";
						$conn->query($sql2);
						$sql5="UPDATE `change` SET nature='$c12', nature2='$c22', montant='$c32', montant2='$c42', date_e='$c52', date_e2='$c62' WHERE id_formulaire=$id_form";
						mysqli_query($conn, $sql5) or die("Error: ".mysqli_error($conn));
						$sql6="INSERT INTO `echang`(nature, nature2, montant, montant2, date_c, date_c2, id_formulaire,image) VALUES('$x12','$x22','$x3','$x4','$x52','$x62','$id_form',NULL)";
						$result=mysqli_query($conn, $sql6) or die("Error: ".mysqli_error($conn));
					}
					
				}else{
					$n02=miroire($_POST['nomv']);
					$n12=miroire($_POST['pren']);
					$n22=miroire($_POST['prof']);
					$n32=miroire($_POST['nat']);
					$n42=miroire($_POST['adr_a']);
					$n52=miroire($_POST['adr_e']);
					$m12=miroire($_POST['type_v']);
					$m22=$_POST['datev'];
					$l02=miroire($_POST['desc']);
					$l12=$_POST['vc'];
					$l22=miroire($_POST['vl']);
					$l32=miroire($_POST['md']);
					$l42=$_POST['pc'];
					$l52=miroire($_POST['pl']); 
					$l62=miroire($_POST['desc2']);
					$l72=$_POST['vc2'];
					$l82=miroire($_POST['vl2']);
					$l92=miroire($_POST['md2']);
					$l102=$_POST['pc2'];
					$l112=miroire($_POST['pl2']);
					

					$justif = $_POST['justif'];
					$observ = $_POST['observ'];
					if($justif == "" || $observ == ""){
						echo "<script type='text/javascript'>alert('justification ou observation introuvable');</script>";
					}else{
						$date1 = new DateTime("now");
						$date2 = new DateTime($_POST["datev"]);
						if($date1 > $date2){
							echo "<script type='text/javascript'>alert('erreur: date de voyage non valide !!');</script>";
						}else{
							echo "<script type='text/javascript'>if (confirm('veulliez vous vraiment modifier cette formulaire ! ')){alert('Valider');}</script>";						
	
								$req1 ="INSERT INTO modification(id_formulaire,observation,justification) VALUES ('$id_form','$observ','$justif')";
								mysqli_query($conn, $req1);

								$date1 = new DateTime("now");
								$d=$date1->format('D M d, Y');
								$date=strftime('%Y-%m-%d',strtotime($d));
								$sql2 = "UPDATE apurement SET id_utilisateur='$id_user', date_ap='$date' WHERE id_formulaire=$id_form";
								$conn->query($sql2);

								$sql1="UPDATE voyageur SET nom='$n02', prenom='$n12', profession='$n22', nationalite='$n32', adr_alg='$n42', adr_etr='$n52' WHERE n_passport='$p'";
								mysqli_query($conn, $sql1);
								
								$sql2="UPDATE voyage SET type='$m12', date_v='$m22' WHERE n_voyage='$p2'";
								mysqli_query($conn, $sql2);
								
								$sql4="UPDATE formulaire SET id_utilisateur='$id_user', valide='2', modifie='3' WHERE id_formulaire='$id_form'";
								mysqli_query($conn, $sql4);
														
								$sql3="UPDATE importations SET devise_declare='$l02', val_chiffre='$l12', val_lettre='$l22', metaux_declare='$l32', poids_chiffre=". floatval('$l42').", poids_lettre='$l52',avis_autorisation='nope', devise_declare2='$l62', val_chiffre2=". floatval('$l72').", val_lettre2='$l82', metaux_declare2='$l92', poids_chiffre2=". floatval('$l102').", poids_lettre2='$l112' WHERE id_formulaire='$id_form'";
								mysqli_query($conn, $sql3);

								if ($c52=='') $c52='2000-01-01'; 
								if ($c62=='') $c62='2000-01-01';
								$sql5="UPDATE `change` SET nature='$c12', nature2='$c22', montant='$c32', montant2='$c42', date_e='$c52', date_e2='$c62' WHERE id_formulaire=$id_form";
								mysqli_query($conn, $sql5) or die("Error: ".mysqli_error($conn));	
								$sql2 = "UPDATE apurement SET id_utilisateur='$id_user', date_ap='25-05-2018' WHERE id_formulaire=$id_form";
								$conn->query($sql2);
								$sql6="INSERT INTO `echang`(nature, nature2, montant, montant2, date_c, date_c2, id_formulaire,image) VALUES('$x12','$x22','$x3','$x4','$x52','$x62','$id_form',NULL)";
								$result=mysqli_query($conn, $sql6) or die("Error: ".mysqli_error($conn));				
						}
					}
				}
			}
		}else{
			echo "<script type='text/javascript'>alert('cette formulaire n\'exist pas veuillez l\'inseré à nouveau');</script>";
		}

	}	
	
	if (isset($_POST['depot'])) {
		function miroire1($chaine){
			$str = strrev($chaine);
			if ($str==""){
				$str="0";
			}
			return $str;
		}

		$v1 = $_POST['desc_saisi'];
		$var1 = miroire($v1);
		$v2 = $_POST['desc_saisi2'];
		$var2 = miroire($v2);
		$v3 = $_POST['vc_saisi'];
		$var3 = miroire($v3);
		$v4 = $_POST['vc_saisi2'];
		$var4 = miroire1($v4);
		$v5 = $_POST['vl_saisi'];
		$var5 = miroire($v5);
		$v6 = $_POST['vl_saisi2'];
		$var6 = miroire($v6);
		$v7 = $_POST['md_saisi'];
		$var7 = miroire($v7);
		$v8 = $_POST['md_saisi2'];
		$var8 = miroire($v8);
		$v9 = $_POST['pc_saisi'];
		$var9 = miroire1($v9);
		$v10 = $_POST['pc_saisi2'];
		$var10 = miroire1($v10);
		$v11 = $_POST['pl_saisi'];
		$var11 = miroire($v11);
		$v12 = $_POST['pl_saisi2'];
		$var12 = miroire($v12);
	
		
		$p=miroire($_POST['np2']);
		$p2=miroire($_POST['nvoy2']);
		
		if ($v1=="" || $v3=="" || $v5==""){
			echo "<script type='text/javascript'>alert('erreur: saisi les champes de depot');</script>";			
		}else{
			$sql="SELECT id_formulaire FROM formulaire WHERE n_voyage=$p2 AND n_passport=$p AND valide='1'";
			$result= mysqli_query($conn, $sql);
			if($result->num_rows>0){
				while($row=$result->fetch_assoc()){
					$id_form=$row['id_formulaire'];	
				}
		
				$etat="";//assurer que cette formulaire est correspand à un voyageur en entrée
				$sql="SELECT etat FROM etat WHERE id_formulaire=$id_form";
				$result= mysqli_query($conn, $sql);
				if($result->num_rows>0){
					while($row=$result->fetch_assoc()){
						$etat=$row['etat'];	
					}
				}
				if($etat == "entree"){
					echo "<script type='text/javascript'>alert('erreur: aucune formulaire trouvé');</script>";
				}else{
					$req1 ="INSERT INTO depot(id_formulaire,nat_devise_saisie,val_chiffre,val_lettre,nat_metaux_saisie, poids_chiffre, poids_lettre,nat_devise_saisie2,val_chiffre2,val_lettre2,nat_metaux_saisie2, poids_chiffre2, poids_lettre2) VALUES ('$id_form','$var1','$v3','$var5','$var7','$var9','$var11','$var2','$var4','$var6','$var8','$var10','$var12')";
					mysqli_query($conn, $req1) or die("Error: ".mysqli_error($conn));
					$sql = "UPDATE formulaire SET valide='3', id_utilisateur='$id_user' WHERE id_formulaire=$id_form";
					$conn->query($sql);
					echo "<script type='text/javascript'>alert('depot ajourer');</script>";
				}
		
			}else{
				echo "<script type='text/javascript'>alert('erreur: aucune formulaire trouvé');</script>";
			}
		}
		
	}

	$conn->close();
	
	
?>
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
					<p class="coul" align="center"><b>Appurement</b></p>
			</div>
		</div>
		<style type="text/css">
		@media print {
			#impr {
				display: none;
			}
			input {
				border-width: 0;
				border: none;
			}
			body {
				background-image: none;
			}
			.inv {
				width: 70%;
			}
			.container {
				margin-bottom: none;
				margin-top: none;
			}
		}

		.coul {
			color: blue;
			font-size: 20px;
		}

		.panel {
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

		.container:hover input~.checkmark {
			background-color: #ccc;
		}

		/* When the radio button is checked, add a blue background */

		.container input:checked~.checkmark {
			background-color: #2196F3;
		}

		/* Create the indicator (the dot/circle - hidden when not checked) */

		.checkmark:after {
			content: "";
			position: absolute;
			display: none;
		}

		/* Show the indicator (dot/circle) when checked */

		.container input:checked~.checkmark:after {
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
	</style>

		<form method="POST">
			<div class="container">

				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">Informations Personnelles</h3>
					</div>
					<div class="panel-body">
						
							<table border="0" style="width: 90%;" align="center">
								<td colspan="2">
									<div class="row" style="margin-left: 2.5%;">
										<label>N° Passeport / Carte de résidence : &nbsp;&nbsp;</label>
										*
										<input type="text" name="np2" class="form-control input-sm" placeholder="N° Passeport / Carte de résidence" style="width: 48%;"
										 value="<?php if(isset($_POST['np2'])) echo $_POST['np2']; ?>" required="required">
									</div>
								</td>
								<td>
									<button class="btn btn-success btn-sm" id="impr" style="cursor:pointer;" type="submit" name="submit"> Afficher </button>
								</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="row" style="margin-left: 2.5%; margin-bottom: 1%;">
											<label>N° voyage &nbsp; : &nbsp;&nbsp;</label>
											*
											<input type="text" name="nvoy2" class="form-control input-sm" placeholder="N° voyage" style="width: 20%;" value="<?php if(isset($_POST['nvoy2'])) echo $_POST['nvoy2']; ?>"
											 required="required">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
											<label>Nom &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</label>
											*
											<input type="text" name="nomv" class="form-control input-sm" placeholder="Nom" style="width: 40%;" value="<?php if(isset($_POST['nomv'])) echo $_POST['nomv']; ?>">
										</div>
									</td>
									<td>
										<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
											<label>Prénom &nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;</label>
											*
											<input type="text" name="pren" class="form-control input-sm" placeholder="Prénom" style="width: 40%;" value="<?php if(isset($_POST['pren'])) echo $_POST['pren']; ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
											<label>Profession : &nbsp;&nbsp;</label>
											*
											<input type="text" name="prof" class="form-control input-sm" placeholder="Profession" style="width: 40%;" value="<?php if(isset($_POST['prof'])) echo $_POST['prof']; ?>">
											<br>
										</div>
									</td>
									<td>
										<div class="row" style="margin-left: 5%; margin-bottom: 1%;">
											<label>Nationalité : &nbsp;&nbsp;</label>
											*
											<input type="text" name="nat" class="form-control input-sm" placeholder="Nationalité" style="width: 40%;" value="<?php if(isset($_POST['nat'])) echo $_POST['nat']; ?>">
											<br>
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="row" style="margin-left: 2.5%; margin-bottom: 1%;">
											<label>Adresse en Algérie &nbsp;&nbsp;:</label>
											<input type="text" name="adr_a" class="form-control input-sm" placeholder="Adresse en Algérie" style="margin-left: 2.5%; width: 61.5%;"
											 value="<?php if(isset($_POST['adr_a'])) echo $_POST['adr_a']; ?>">
										</div>
									</td>
								</tr>
								<tr>
									<td colspan="2">
										<div class="row" style="margin-left: 2.5%; margin-bottom: 1%;">
											<label>Adresse à l'étranger : &nbsp;&nbsp;&nbsp;&nbsp;</label>
											<input type="text" name="adr_e" class="form-control input-sm" placeholder="Adresse à l'étranger" style="width: 61.5%;" value="<?php if(isset($_POST['adr_e'])) echo $_POST['adr_e']; ?>">
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
								*
								<input type="text" name="nvoy" class="form-control input-sm" placeholder="N° voyage" style="width: 40%;" 
								 value="<?php if(isset($_POST['nvoy2'])) echo $_POST['nvoy2']; ?>">
								<label>&nbsp;&nbsp; Date :&nbsp;&nbsp;</label>
								<input type="date" name="datev" class="form-control" style="width: 20%" value="<?php if(isset($_POST['datev'])) echo $_POST['datev']; ?>">
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="col-md-6">
										<label class="container">Aérien
											<input type="radio" name="type_v" class="container_input" value="aerien" <?php if(isset($_POST[ 'type_v'])){if($m1=='aerien' ){?> checked
											<?php }} ?>>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="col-md-6">
										<label class="container">Maritime
											<input type="radio" name="type_v" class="container_input" value="maritime" <?php if(isset($_POST['type_v'])){if($m1=='maritime' ){?> checked
											<?php }} ?>>
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<div class="col-md-6">
									<div class="col-md-6">
										<label class="container">Train
											<input type="radio" name="type_v" class="container_input" value="train" <?php if(isset($_POST[ 'type_v'])){if($m1=='train' ){?> checked
											<?php }} ?>>
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="col-md-6">
										<label class="container">Vehicule
											<input type="radio" name="type_v" class="container_input" value="vehicule" <?php if(isset($_POST[ 'type_v'])){if($m1=='vehicule' ){?> checked
											<?php }} ?>>
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
								<label>Description et nature des devises déclarés</label>
								<br>
								<input type="text" name="desc" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['desc'])) echo $_POST['desc']; ?>">
								<input type="text" name="desc2" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['desc2'])) echo $_POST['desc2']; ?>">
							</div>
							<div class="col-md-6">
								<div class="col-md-6">
									<label>Valeur En Chiffres</label>
									<br>
									<input type="Number" require min="1000" name="vc" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vc'])) echo $_POST['vc']; ?>">
									<br>
									<input type="Number" name="vc2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vc2'])) echo $_POST['vc2']; ?>">
								</div>
								<div class="col-md-6">
									<label>Valeur En Lettres</label>
									<br>
									<input type="text" name="vl" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vl'])) echo $_POST['vl']; ?>">
									<br>
									<input type="text" name="vl2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vl2'])) echo $_POST['vl2']; ?>">
								</div>
							</div>
						</div>
						<br>
						<div>
						</div>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<label>Description et nature des métaux précieux déclarés</label>
							<br>
							<input type="text" name="md" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['md'])) echo $_POST['md']; ?>">
							<input type="text" name="md2" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['md2'])) echo $_POST['md2']; ?>">
						</div>
						<div class="col-md-6">
							<div class="col-md-6">
								<label>Poids En Chiffres</label>
								<br>
								<input type="Number" name="pc" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pc'])) echo $_POST['pc']; ?>">
								<input type="Number" name="pc2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pc2'])) echo $_POST['pc2']; ?>">
							</div>
							<div class="col-md-6">
								<label>Poids En Lettres</label>
								<br>
								<input type="text" name="pl" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pl'])) echo $_POST['pl']; ?>">
								<input type="text" name="pl2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pl2'])) echo $_POST['pl2']; ?>">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container">
        				<div class="panel panel-default">
			    			<div class="panel-heading">
					    		<h3 class="panel-title">ECHANGE DES RELIQUATS DES BILLETS DE BANQUE ALGERIENS</h3>
					 			</div>
					 			<div class="panel-body">
					 				<div>
						 				<div class="col-md-6">
						 					<label>Nature des devises rétrocédées</label><br>
						 					<input type="text" name="natur" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['natur'])) echo $_POST['natur']; ?>">
						 					<input type="text" name="natur2" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['natur2'])) echo $_POST['natur2']; ?>">
						 				</div>
						 				<div class="col-md-6">
						 					<div class="col-md-6">
							 					<label>Montant</label><br>
							 					<input type="Number" name="mont" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['mont'])) echo $_POST['mont']; ?>"><br>
							 					<input type="Number" name="mont2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['mont2'])) echo $_POST['mont2']; ?>">
						 					</div>
						 					<div class="col-md-6">
							 					<label>date</label><br>
							 					<input type="date" name="date1" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['date1'])) echo $_POST['date1']; ?>"><br>
							 					<input type="date" name="date2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['date2'])) echo $_POST['date2']; ?>">
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
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">CHANGE</h3>
					</div>
					<div class="panel-body">
						<div>
							<div class="col-md-6">
								<label>Nature des devises cédées</label>
								<br>
								<input type="text" name="nature_cd" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['nature_cd'])) echo $_POST['nature_cd']; ?>">
								<input type="text" name="nature2_cd" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['nature2_cd'])) echo $_POST['nature2_cd']; ?>">
							</div>
							<div class="col-md-6">
								<div class="col-md-6">
									<label>Montant</label>
									<br>
									<input type="Number" name="mont_cd" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['mont_cd'])) echo $_POST['mont_cd']; ?>">
									<br>
									<input type="Number" name="mont2_cd" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['mont2_cd'])) echo $_POST['mont2_cd']; ?>">
								</div>
								<div class="col-md-6">
									<label>date</label>
									<br>
									<input type="date" name="date1_cd" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['date1_cd'])) echo $_POST['date1_cd']; ?>">
									<br>
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
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<h3 class="panel-title">MODIFICATION</h3>
					</div>
					<div class="panel-body">
							<div class="col-md-6">
								<b>
									Observation :
								</b>
								<br>
								<textarea cols="55" rows="3" name="observ"></textarea>
							</div>
							<div class="col-md-6">
								<b> Justification :</b>
								<br>
								<br>
								<input type="file" name="justif">
							</div>
					</div>
				</div>
			</div>
			</div>
			<style type="text/css">
				.ap {
					height: 50px;
					width: 90px;
					font-size: 10;
				}
			</style>
			<div align="center">
				<button class="btn btn-success  ap" id="impr" style="cursor:pointer;" type="submit" name="valider"> Appuré </button>
			</div>
			<hr>
			<br>
			<!--==========================================================================================
					============================================================================================
					=================================================================================================
					====================================================================================-->
			<div class="container">
				<div class="panel panel-default">
					<div class="panel-heading">
						<table>
							<tr>
								<td>
									<h3 class="panel-title">DEPOT</h3>
								</td>
								<td style="width: 700px;"></td>
								<td>
									<button class="btn btn-danger"> Signaler </button>
								</td>
							</tr>
						</table>
					</div>
					<div class="panel-body">
						<div>
							<div class="col-md-6">
								<label>Description et nature des devises saisies</label>
								<br>
								<input type="text" require name="desc_saisi" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['desc_saisi'])) echo $_POST['desc_saisi']; ?>">
								<input type="text" name="desc_saisi2" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['desc_saisi2'])) echo $_POST['desc_saisi2']; ?>">
							</div>
							<div class="col-md-6">
								<div class="col-md-6">
									<label>Valeur En Chiffres</label>
									<br>
									<input type="Number" require name="vc_saisi" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vc_saisi'])) echo $_POST['vc_saisi']; ?>">
									<br>
									<input type="Number" name="vc_saisi2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vc_saisi2'])) echo $_POST['vc_saisi2']; ?>">
								</div>
								<div class="col-md-6">
									<label>Valeur En Lettres</label>
									<br>
									<input type="text" require name="vl_saisi" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vl_saisi'])) echo $_POST['vl_saisi']; ?>">
									<br>
									<input type="text" name="vl_saisi2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['vl_saisi2'])) echo $_POST['vl_saisi2']; ?>">
								</div>
							</div>
						</div>
						<br>
						<div>
						</div>
					</div>
					<div class="panel-body">
						<div class="col-md-6">
							<label>Description et nature des métaux précieux saisis</label>
							<br>
							<input type="text" name="md_saisi" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['md_saisi'])) echo $_POST['md_saisi']; ?>">
							<input type="text" name="md_saisi2" style="width: 100%; margin-bottom: 1%;" id="invisible" value="<?php if(isset($_POST['md_saisi2'])) echo $_POST['md_saisi2']; ?>">
						</div>
						<div class="col-md-6">
							<div class="col-md-6">
								<label>Poids En Chiffres</label>
								<br>
								<input type="Number" name="pc_saisi" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pc_saisi'])) echo $_POST['pc_saisi']; ?>">
								<input type="Number" name="pc_saisi2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pc_saisi2'])) echo $_POST['pc_saisi2']; ?>">
							</div>
							<div class="col-md-6">
								<label>Poids En Lettres</label>
								<br>
								<input type="text" name="pl_saisi" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pl_saisi'])) echo $_POST['pl_saisi']; ?>">
								<input type="text" name="pl_saisi2" style="width: 100%; margin-bottom: 2%;" id="invisible" value="<?php if(isset($_POST['pl_saisi2'])) echo $_POST['pl_saisi2']; ?>">
							</div>
						</div>
						<div align="right">
							<button name="depot" class="btn btn-danger" style="margin-right: 40px; margin-top: 1%;" align="right"> Ajouter au dépôt </button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</body>
</html>

		