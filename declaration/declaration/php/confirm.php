<?php 

if(isset($_GET["general"], $_GET["from_date"], $_GET["to_date"])) {

    header('Content-Type: application/json');
    $connect = mysqli_connect("localhost", "root", "", "declaration");
    
    
    
    print json_encode($data);
    
} 

?>