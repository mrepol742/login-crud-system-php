<?php
$fullname = $email = $password = $cpassword = "";
$fullnameErr = $emailErr = $passwordErr = $cpasswordErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

 if (empty($_POST["fullname"])) {
	 $fullnameErr = "Fullname is required!";
 } else {
	 $fullname = $_POST["fullname"];
 }
 if (empty($_POST["email"])) {
	 $emailErr = "Email is required!";
 } else {
	 $email = $_POST["email"];
 }
 if (empty($_POST["password"])) {
	 $passwordErr = "Password is required!";
 } else {
	 $password = $_POST["password"];
 }
 if (empty($_POST["cpassword"])) {
	 $cpasswordErr = "Confirm Password is required!";
 } else {
	 $cpassword = $_POST["cpassword"];
 }
 
 
 
 
 
 if (isset($_POST['loginB'])) {
     header('Location: login.php');
 }
}


?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta name="hostname" content="mrepol742.github.io">

        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="assets/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
		    <title>Create Account</title>

    </head>
    <body>
        <div class="container">
            <div class="cover">
            <img src="img/bestlinkcollegeofthephilippines.png" alt="Bestlink College of the Philippines" width="100" class="icon">
            <h1 id="login">Signup</h1>
            <form action="<?php htmlspecialchars('php_self'); ?>" method="post">
                <?php if (isset($_GET['error'])) { ?>
                    <p style="float: left;">
                        <?php echo $_GET['error']; ?>
                    </p>
                <?php } ?>
                <label for="fullname">Fullname:</label> <br>
                <input id="fullname" placeholder="" type="text"> <br>
                <label for="email">Email:</label> <br>
                <input id="email" placeholder="something@gmail.com" type="email"> <br>
                <label for="password">Password:</label> <br>
                <input id="password" placeholder="**********" type="password"> <br>
                <label for="cpassword">Confirm Password:</label> <br>
                <input id="cpassword" placeholder="**********" type="password"> <br>
            <br>
                <button id="createNewAccount" type="submit">Create Account</button>
               
                <button id="loginB" name="loginB">Login</button>
            </form>
            </div>
        </div>

        <script src="assets/bootstrap.min.js"></script>
        <script src="assets/typed.js"></script>
        <script src="js/main.js"></script>

    </body>
</html>