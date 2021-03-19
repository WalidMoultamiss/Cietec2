<?php
session_start() ;
include_once 'dbconnect.php.php';

if(isset($_POST['LOGIN']))
{
    $sql=mysqli_query($conn,"SELECT * FROM employe where nom_prenom= '". $_POST['user_name1'] ."' AND  motdepass='". $_POST['pass_word'] ."' ");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {

        // $_SESSION["ID"] = $row['id_employe'];
         $_SESSION["Name"]=$row['nom_prenom'];
        // $_SESSION["fonction"]=$row['fonction'];
        // $_SESSION["Mpass"]=$row['motdepass']; 
        // header("Location:dashboard.php"); 
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}



?>