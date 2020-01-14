<?php
    $conn = mysqli_connect("localhost", "root", "", "declaration");
    $date=date("Y-m-d");
    $sql="SELECT n_voyage FROM voyage WHERE date_v < '$date'";
    $result=mysqli_query($conn, $sql);
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $n_voyage=$row["n_voyage"];
            $sql1="SELECT id_formulaire FROM formulaire WHERE n_voyage = '$n_voyage' AND valide = '0'";
            $result1=mysqli_query($conn, $sql1);
            if($result1->num_rows>0){
                while($row1=$result1->fetch_assoc()){
                    $id=$row1["id_formulaire"];
                    echo " hello ".$id;
                    $query="DELETE FROM modification WHERE id_formulaire=$id";
                    mysqli_query($conn, $query);
                    $query="DELETE FROM formulaire WHERE id_formulaire=$id";
                    mysqli_query($conn, $query); 
                    $query="DELETE FROM apurement WHERE id_formulaire=$id";
                    mysqli_query($conn, $query); 
                    $query="DELETE FROM `change` WHERE id_formulaire=$id";
                    mysqli_query($conn, $query);    
                    $query="DELETE FROM depot WHERE id_formulaire=$id";
                    mysqli_query($conn, $query);
                    $query="DELETE FROM `echang` WHERE id_formulaire=$id";
                    mysqli_query($conn, $query);  
                    $query="DELETE FROM etat WHERE id_formulaire=$id";
                    mysqli_query($conn, $query); 
                    $query="DELETE FROM importations WHERE id_formulaire=$id";
                    mysqli_query($conn, $query); 
                     
                }
            }

        }
    }
?>