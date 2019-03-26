<?php
    require_once("include/db-connection.php");
?>
<?php
    require_once("register.php");
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
<!--
    <div class="container-fluid header">
        <img src="images/download.png" alt="" style="float:left; width:75px;height:75px;border-radius:50px">
        <h2 style="float:left;"><em>Software Engineering </em><br>University of Kelaniya</h2>
        <form class="form-inline m-4" action="www.facebook.com" style="float: right;">
            <label for="email" class="mr-sm-2">Email address:</label>
            <input type="email" class="form-control mb-2 mr-sm-2" id="email" placeholder="Enter Your Email" name="email-log">
            <label for="pwd" class="mr-sm-2">Password:</label>
            <input type="password" class="form-control mb-2 mr-sm-2" id="pwd" placeholder="Enter Your Password" name="pwd-log">
            <div class="form-check mb-2 mr-sm-2">
                <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                </label>
            </div>
            <input type="Submit" name="Submit" value="Log">
        </form>
    </div>
-->

    <div class="registration">
        <img src="images/download.png" height="150px" width="150px" class="login_icon">
        <h1 style="text-align:left">Register <br>Here</h1>
        <h6>(Only for UOK SE Undergraduates)</h6>
        <form action="index.php" method="post">
            <p>Username</p>
            <input type="text" name="uname" value="" placeholder="User name">
            <p>Email</p>
            <input type="email" name="email" value="" placeholder="Email">
            <p>Password</p>
            <input type="Password" name="pwd" value="" placeholder="Password">
            <p>Confirm Password</p>
            <input type="Password" name="cpwd" value="" placeholder="Conform Password">

            <input type="Submit" name="Submit" value="Register"><br>
        </form>
    </div>
            <?php
                echo Message();
            ?>
</body>

</html>
