<?php
    require_once("include/db-connection.php");
?>
<?php
    require_once("log.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Welcome to hasi's loging system</title>
    <link rel="icon" type="image/jpg" href="images/icon.jpg">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body background="images/realhack.jpg">
       <div class="registration">
        <img src="images/download.png" height="150px" width="150px" class="login_icon">
        <h1 style="text-align:left">Register <br>Here</h1>
        <h6>(Only for UOK SE Undergraduates)</h6>
        
        <form action="login.php" method="post">
            <p>Email</p>
            <input type="email" name="email" value="" placeholder="Email">
            <p>Password</p>
            <input type="Password" name="pwd" value="" placeholder="Password">
            <input type="Submit" name="Submit" value="Register"><br>
        </form>
        
    </div>
    <?php
                echo Message();
            ?>
</body>

</html>
