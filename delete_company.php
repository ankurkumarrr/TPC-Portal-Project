<?php
require 'config.php';
session_start();

if(!isset($_SESSION['sess_user'])){
    header('Location: login_company.php');
}

$Email = $_SESSION['sess_user'];

if(isset($_POST["Yes"])){

$query = "delete from company where Email = '$Email'";
$result = mysqli_query($conn, $query);

if($result){
    echo '<script type="text/javascript">alert("Account Deleted Succesfully!")</script>';
    echo '<script language="javascript">window.location = "http://localhost/miniproject/login_company.php";</script>';
}
else{
    echo '<script type="text/javascript">alert("Error!")</script>';
}
}


if(isset($_POST["No"])){
    echo '<script language="javascript">window.location = "http://localhost/miniproject/welcome_company.php";</script>';

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Accout</title>
    <link rel="stylesheet" href="styles.css">
</head>


<body>
    <p class = "heading">
    <center><p class = "top"> Are you sure you want to delete your account?</p>

    <form method="post">
        <input type="submit" name="Yes"
                class="my-button" value="Yes, Delete My Account!" />
        <input type="submit" name="No"
                class="my-button" value="No, Take me Back!" />

    </form>
</center>
</body>
</html>