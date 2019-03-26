<?php
    require_once("Hashingpassword.php");
?>
   <?php
    function Redirect_TO($Location){
        header("Location:".$Location);
            exit;
    }

function CheackEmail($Email){
    global $conectionDb;
    $Query="SELECT * FROM admin_panel WHERE email='$Email'";
    $Execute=mysql_query($Query);
    if(mysql_num_rows($Execute)>0){
        return true;
    }
    else{
        return false;
    }
}

function login($Email, $Password){
    $Query="SELECT * FROM admin_panel WHERE email='$Email'";
    $Execute=mysql_query($Query);
    if($admin=mysql_fetch_assoc($Execute)){
         if(Password_Check($Password,$admin["password"])){
             return $admin;
         }
        else{
            return null;
        }
    }
}
?>