<?php
session_start();
if($_SESSION['id'] == NULL){
    header('Location:login.php');
}

require_once "../vendor/autoload.php";
use App\classes\Login;


$login = new Login();
if(isset($_GET['logout'])){
    $login->adminLogout();
}

?>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
    <?php include 'include/menu.php'; ?>

</body>
</html>


