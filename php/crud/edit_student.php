<?php
require_once "vendor/autoload.php";
use App\classes\Student;
$id = $_GET['id'];
$student = new Student();
$result = $student->editStudentInfo($id);
$student = mysqli_fetch_assoc($result);

?>
<table>
    <tr>
        <td><a href="add_student.php">Add</a></td>
        <td><a href="view_student.php">View</a></td>
    </tr>
</table>

<form action="" method="post">
    <h1></h1>
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" value="<?php echo $student['name']?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $student['email']?>"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile" value="<?php echo $student['mobile']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>
