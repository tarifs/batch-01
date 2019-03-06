<?php

//if ($_GET['name'] || $_GET['email'] || $_GET['mobile'])
//{
//    echo "Welcome ".$_GET['name']."<br>";
//    echo "Your Email is ".$_GET['email']."<br>";
//    echo "Your Phone Number is ".$_GET['mobile'];
//}

if ($_POST['name'] || $_POST['email'] || $_POST['mobile'])
{
    echo "Welcome ".$_POST['name']."<br>";
    echo "Your Email is ".$_POST['email']."<br>";
    echo "Your Phone Number is ".$_POST['mobile'];
}


?>


<form action="" method="post">

    Name: <input type="text" name="name"><br>
    Email: <input type="email" name="email"><br>
    Mobile: <input type="number" name="mobile"><br>


    <input type="submit" name="btn" value="Submit">

</form>
