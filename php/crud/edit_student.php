<?php
require_once "vendor/autoload.php";
use App\classes\Student;
$id = $_GET['id'];
$student = new Student();
$result = $student->editStudentInfo($id);
$getStudent = mysqli_fetch_assoc($result);

if (isset($_POST['btn']))
{
    Student::updateStudentInfo($_POST);

}

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
            <td>
                <input type="text" name="name" value="<?php echo $getStudent['name']?>">
                <input type="hidden" name="id" value="<?php echo $getStudent['id']?>">
            </td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $getStudent['email']?>"></td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td><input type="text" name="mobile" value="<?php echo $getStudent['mobile']?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="Update"></td>
        </tr>
    </table>
</form>
