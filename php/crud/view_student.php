<?php
require_once "vendor/autoload.php";
use App\classes\Student;

$msg = '';

if (isset($_GET['status']))
{
    $id = $_GET['id'];
    $student = new Student();
    $msg = $student->deleteStudentInfo($id);
}



$student = new Student();
$result = $student->viewStudentInfo();



//while ($f = mysqli_fetch_assoc($result)) {
//    echo '<pre>';
//    print_r($f);
//}


if(isset($_POST['btn']))
{
    $result = $student->searchStudentInfo();
}
?>
<h1 style="color: red"><?php echo $msg?></h1>
<form action="" method="post">
    <tr>
        <td>Search:</td>
        <td><input type="text" name="searchText"></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="btn" value="Search"></td>
    </tr>

</form>
<hr>
<table>

    <tr>
        <td><a href="add_student.php">Add</a></td>
        <td><a href="view_student.php">View</a></td>
    </tr>
</table>

<table border="1" width="500">
    <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Action</th>
    </tr>
    <?php
    $i = 1;
    ?>
    <?php while($student = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $i++;?></td>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['email']?></td>
        <td><?php echo $student['mobile']?></td>
        <td>

            <a href="edit_student.php?id=<?php echo $student['id']?>" style="color: #1c7430">Edit ||</a>
            <a onclick="return confirm('Are Sure to Delete?');" href="?status=delete&id=<?php echo $student['id']?>" style="color: red;">Delete</a>

        </td>

    </tr>
    <?php }?>
</table>

