<?php
namespace App\classes;

use App\classes\Connection;

class Login
{
    public function adminLogin($data)
    {
        $email = $data['email'];
        $password = md5($data['password']);
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        if($result = mysqli_query(Connection::dbConnection(),$sql))
        {
            $use = mysqli_fetch_assoc($result);
            if ($use){
                header('Location: add_student.php');
            }else{
                $msg = "<div class='alert alert-danger'>Please use valid email and password</div>";
                    return $msg;
            }
        }else
        {
            die('Connection Problem'.mysqli_error(Connection::dbConnection()));
        }
        

    }

    public function adminLogout()
    {
        header('Location: login.php');
    }


     }