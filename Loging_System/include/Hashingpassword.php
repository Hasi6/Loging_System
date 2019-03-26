<?php
    require_once("db-connection.php");
    ?>
    <?php
    require_once("functions.php");
    ?>
<?php

function Password_Encryption($Password){
    $BlowFish_Hash_Format ="$2y$10$";
    $salt_Lenght = 22;
    $Salt= Generate_Salt($Salt_Lenght);
    $Formatting_Blowfish_With_Salt = $BlowFish_H;
    $Hash = crypt($password, $Formatting_Blowfish_With_Salt);
    return $Hash;
}

function Generate_Salt($length){
    
    $Unique_Random_String = md5(Uniqid(mt_rand(), true));
    $Base64_String = base64_encode($Unique_Random_String);
    
    $modified_Base64_String = str_replace('+','.', $Base64_String);
    $Salt = substr($Modified_Base64_String, 0, $length);
    
    return $Salt;
    
}

function Password_Check($Password, $Existing_Hash){
    $Hash =crypt($Password, $Existing_Hash);
    if($Hash === $Existing_Hash){
        return true;
    }
    else{
        return false;
    }
}

?>
