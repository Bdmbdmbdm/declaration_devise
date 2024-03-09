<?php
session_start(); // Right at the top of your script

if($_SESSION['logged']==true)
    { 
			//echo "<script type='text/javascript'>alert('Bienvenue');</script>";			   			   
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
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<meta charset="utf-8">
	<title>
		Espace de travail
	</title>
</head>
<body>
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
		}
		.form-group.last { margin-bottom:0px; }t { margin-bottom:0px; }
		.container{
			margin-top: 0;
			margin-bottom: 0 !important;
		}
	</style>
	
		</div>
	</div>
</div>
	<div class="container">
	    <div class="row">
	        <div class="col-md-6">
	            <div class="panel panel-default">
	                <div class="panel-heading">
	                    <img src="imgserver.jpg"><b> Déclaration</b></div>
	                <div class="panel-body">
	                    
	                    <div>
	                    <div class="col-md-6">
	                		<b>Entrée :</b><hr>
	                    </div>
	                    <div class="col-md-6">
	                		<a href="dec_agent_entree.php" target="_blank"> Nouvelle déclaration </a><hr>
	                    </div>
	                	</div>
	                	<div>
	                    <div class="col-md-6">
	                		<b>Sortie (Résident) :</b><hr>
	                    </div>
	                    <div class="col-md-6">
	                		<a href="dec_agent_resident_sortie.php" target="_blank"> Nouvelle déclaration </a><hr>
	                    </div>
	                	</div>
	                	<div >
		                    <div class="col-md-6">
		                		<b>Tableau de bord :</b><hr>
		                    </div>
		                    <div class="col-md-6">
		                		<a href="../../project/production/index4.php" >Consulter </a><hr>
		                    </div>
	                	</div>
	                    	</div>
	                <div class="panel-footer">
	                   </div>
	            </div>
	        </div>
	        <div class="col-md-6">
	        	<div class="panel panel-default">
	                <div class="panel-heading">
	                    <img src="imgserver.jpg"><b> Validation</b></div>
	                <div class="panel-body">
	                	<div >
		                    <div class="col-md-6">
		                		<b>Entrée :</b><hr>
		                    </div>
		                    <div class="col-md-6">
		                		<a href="validation_agent_entree.php" target="_blank">Valider déclaration entrée </a><hr>
		                    </div>
	                	</div>
	                	<div >
		                    <div class="col-md-6">
		                		<b>Sortie (Résident) :</b><hr>
		                    </div>
		                    <div class="col-md-6">
		                		<a href="validation_resident_sortie.php" target="_blank"> Valider sortie résident </a><hr>
		                    </div>
	                	</div>
	                	<div>
	                		<div class="col-md-6">
		                		<b>Sortie (Etranger) :</b><hr>
		                    </div>
		                    <div class="col-md-6">
		                		<a href="validation_etranger_sortie.php" target="_blank"> Valider sortie étranger </a><hr>
		                    </div>
	                	</div>
	                </div>
	                
	                <div class="panel-footer">
	                  </div>
	              </div>
	            </div>
	        </div>
	    </div>
	        </div>
	    </div>
	</div>

</body>
</html>
