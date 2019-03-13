<?php
require './ExamController.php';





$a = '';
$b = '';
$c = '';
$d = '';
$e = '';
$result = '';

if (isset($_POST['btn']))
{
    $a = $_POST['first_number'];
    $b = $_POST['secound_number'];
    $c = $_POST['third_number'];
    $d = $_POST['fourth_number'];
    $e = $_POST['fifth_number'];
    $exam = new ExamController();
    $result = $exam->exam($_POST);
}

?>


<form action="" method="post">

    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="first_number" value="<?php echo $a?>"></td>
        </tr>
        <tr>
            <td>Secound Number</td>
            <td><input type="text" name="secound_number" value="<?php echo $b?>"></td>
        </tr>
        <tr>
            <td>Third Number</td>
            <td><input type="text" name="third_number" value="<?php echo $c?>"></td>
        </tr>
        <tr>
            <td>Fourth Number</td>
            <td><input type="text" name="fourth_number" value="<?php echo $d?>"></td>
        </tr>
        <tr>
            <td>Fifth Number</td>
            <td><input type="text" name="fifth_number" value="<?php echo $e?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn" value="submit"></td>
        </tr>
    </table>
</form>
<hr>

<table border="1">

    <tr>
        <th>1st</th>
        <th>2nd</th>
        <th>3rd</th>
        <th>4th</th>
        <th>5th</th>
        <th>Result</th>
    </tr>
    <tr>
        <td><?php echo $a;?></td>
        <td><?php echo $b;?></td>
        <td><?php echo $c;?></td>
        <td><?php echo $d;?></td>
        <td><?php echo $e;?></td>
        <td><?php echo $result;?></td>
    </tr>

</table>
