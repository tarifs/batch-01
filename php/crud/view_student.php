<?php
require_once "vendor/autoload.php";
use App\classes\Student;


$student = new Student();
$result = $student->viewStudentInfo();


//while ($f = mysqli_fetch_assoc($result)) {
//    echo '<pre>';
//    print_r($f);
//}


?>
<table>
    <tr>
        <td><a href="add_student.php">Add</a></td>
        <td><a href="view_student.php">View</a></td>
    </tr>
</table>

<table border="1" width="500">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Action</th>
    </tr>
    <?php while($student = mysqli_fetch_assoc($result)){?>
    <tr>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['email']?></td>
        <td><?php echo $student['mobile']?></td>
        <td>

            <a href="edit_student.php?id=<?php echo $student['id']?>" style="color: #1c7430">Edit ||</a>
            <a href="" style="color: red;">Delete</a>

        </td>

    </tr>
    <?php }?>
</table>
