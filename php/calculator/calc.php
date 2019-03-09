<?php
include './Calculator.php';
$result = '';
if (isset($_POST['btn'])) {
    $calculator = new Calculator();
    $result = $calculator->cal($_POST);

}




?>





<form action="" method="post">
    <table>
        <tr>
            <td>First Number</td>
            <td><input type="text" name="first_number" value="<?php echo $_POST['first_number']?>"></td>
        </tr>
        <tr>
            <td>Last Number</td>
            <td><input type="text" name="last_number" value="<?php echo $_POST['last_number']?>"></td>
        </tr>
        <tr>
            <td>Result</td>
            <td><input type="text" name="result" value="<?php echo $result?>"></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="+">
                <input type="submit" name="btn" value="-">
                <input type="submit" name="btn" value="*">
                <input type="submit" name="btn" value="/">
                <input type="submit" name="btn" value="%">
            </td>
        </tr>
    </table>
</form>
