<?php
require_once "vendor/autoload.php";
use App\classes\Student;

$msg = '';

if (isset($_POST['btn']))
{
    $student = new Student();
    $msg = $student->saveStudentInfo();
}


?>
<table>
    <tr>
        <td><a href="add_student.php">Add</a></td>
        <td><a href="view_student.php">View</a></td>
    </tr>
</table>



<form action="" method="post">
    <h1><?php echo $msg?></h1>
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
