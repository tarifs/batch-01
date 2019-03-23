<?php
session_start();

require_once "../vendor/autoload.php";
use App\classes\Login;

$login = new Login();
if(isset($_GET['logout']))
{
    $login->adminLogout();
}




?>


<table>
    <tr>
        <td><a href="?logout=true">Logout</a></td>
    </tr>
</table>

<form action="" method="post">
    <h1><?php echo $_SESSION['name']?></h1>
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Enter"></td>
        </tr>
    </table>
</form>
