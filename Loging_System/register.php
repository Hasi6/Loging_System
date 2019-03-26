<?php
    require_once("include/Session.php");
?>
<?php
    require_once("include/Hashingpassword.php");
    ?>
<?php
    require_once("include/functions.php")
    ?>
<?php
    require_once("include/db-connection.php");
    ?>
<?php
    
    if(isset($_POST["Submit"])){
        $Username =mysql_real_escape_string($_POST["uname"]);
        $Email =mysql_real_escape_string($_POST["email"]);
        $Password =mysql_real_escape_string($_POST["pwd"]);
        $ConfirmPassword =mysql_real_escape_string($_POST["cpwd"]);
        
        if(empty($Username) && empty($Password) && empty($Email) && empty($ConfirmPassword)){
            $_SESSION["message"]="**All Fields Must be filled out!!";
            header("Location: index.php");
            exit();
        }
        else if($Password != $ConfirmPassword){
            $_SESSION["message"]="**Passwords must be same!!";
            header("Location: index.php");
            exit();
        }
        else if(strlen($Password)<8){
            $_SESSION["message"] ="**Your Password include at least 8 values";
            header("Location: index.php");
            exit();
        }
         else if(CheackEmail($Email)){
            $_SESSION["message"] ="**Your Email already used";
            header("Location: index.php");
            exit();
        }
        else{
            global $conectionDb;
            $Hashed_Password = Password_Encryption($Password);
            $Query="INSERT INTO admin_panel(username,email,password)VALUES('$Username','$Email','$Hashed_Password')";
            $Execute = mysql_query($Query);
            
            if($Execute){
                $_SESSION["message"] = "**You Have Successfully Registerd";
            header("Location: index.php");
            exit();
            }
            else{
                $_SESSION["message"] = "**Something is worng please try again later";
            header("Location: index.php");
            exit();
            }
        }
    }

?>
