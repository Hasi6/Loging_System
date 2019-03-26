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
        $Email =mysql_real_escape_string($_POST["email"]);
        $Password =mysql_real_escape_string($_POST["pwd"]);
        
        if(empty($Password) || empty($Email)){
            $_SESSION["message"]="**Enter Email and Password";
            header("Location: login.php");
            exit();
        }
        else{
            $found_account = login($Email,$Password);
            if($found_account){
            $_SESSION["message"]="You Loged in";
            header("Location: login.php");
            exit();
            }
            else{
            $_SESSION["message"]="Email or Password Invalid";
            header("Location: login.php");
            exit();
            }
        }
    }

?>
