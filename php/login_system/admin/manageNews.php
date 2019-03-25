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
    <title>Manage News</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'include/menu.php'; ?>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>Sl No.</th>
                            <th>News Title</th>
                            <th>News Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        <tr>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
