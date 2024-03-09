<?php
session_start();
unset($_SESSION['username']);
session_destroy();
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon" type="image/png" href="a68-douanes-algerienne.jpg"/>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta charset="utf-8">
	<title>
		Authentification
	</title>
</head>
<body>
	<?php
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
		if (isset($_POST['log'])){
			$id1 = mysqli_real_escape_string($conn,$_POST['user']);
			$mdp1 = mysqli_real_escape_string($conn,$_POST['pwd']); 
			
			$sql = "SELECT * FROM login WHERE id_utilisateur = '$id1' and mdp = '$mdp1'";
			$result = mysqli_query($conn,$sql);
			$row = mysqli_fetch_array($result,MYSQLI_ASSOC);

			$count = mysqli_num_rows($result);
			
			if($count == 1) {
			   //session_register($id1);
			   $_SESSION['logged']=true;
			   $_SESSION['username'] = $id1;
			   header("location: espace_travail.php");
			}else {
			   echo "<script type='text/javascript'>alert('username ou mot de passe incorrect');</script>";			   
			}
		}
		$conn->close();
	?>
	<style type="text/css">
		body {
		  background: url('images/2014_DOUANE_261536149.jpg') no-repeat center center fixed;
		  -webkit-background-size: cover;
		  -moz-background-size: cover;
		  -o-background-size: cover;
		  background-size: cover;
		}

		.panel-default {
		  opacity: 0.9;
		  margin-top:30px;
		
		</div>
	</div>
	<div class="container">
	    <div class="row">
	        <div class="col-md-5 col-md-offset-4">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <img src="imgserver.jpg"> Authentification</div>
	                <div class="panel-body">
	                    <form class="form-horizontal" method="POST">
	                        <div class="form-group">
	                            <label  class="col-md-3 control-label">
	                                Utilisateur</label>
	                            <div class="col-md-9">
	                                <input type="text" name="user" class="form-control" placeholder="Utilisateur" required>
	                            </div>
	                        </div>
	                        <div class="form-group">
	                            <label class="col-md-3 control-label">
	                                Mot de pasee</label>
	                            <div class="col-md-9">
	                                <input type="password" name="pwd" class="form-control" placeholder="Mot de passe" required >
	                            </div>
	                        </div>
	                        <button type="submit" name="log" class="btn btn-success btn-sm">
	                                    S'authentifier</button>
	                        <div class="form-group last">
	                            <div class="col-md-offset-3 col-md-9">
	                               
	                            </div>
	                        </div>
	                    </form>
	                </div>
	                <div class="panel-footer">
	                  </div>
	            </div>
	        </div>
	    </div>
	</div>

</body>
</html>
