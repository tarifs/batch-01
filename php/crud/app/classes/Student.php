<?php

namespace App\classes;


class Student
{
    public function saveStudentInfo()
    {

        $link = mysqli_connect('localhost','root','','demo');

        $sql = "INSERT INTO demos (name,email,mobile) values ('$_POST[name]','$_POST[email]','$_POST[mobile]')";

        if(mysqli_query($link,$sql))
        {
            $msg = "Student Info Saved Succesfully";
            return $msg;
        }else
        {
            die('Query Problem'.mysqli_error($link));
        }



    }

    public function viewStudentInfo()
    {
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "SELECT * FROM demos";
        if (mysqli_query($link,$sql))
        {
            $result = mysqli_query($link,$sql);
            return $result;
        }else
        {
            die('Query Problem'.mysqli_error($link));
        }
    }

    public function editStudentInfo($id)
    {
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "SELECT * FROM demos WHERE id ='$id'";
        if (mysqli_query($link,$sql))
        {
            $result = mysqli_query($link,$sql);
            return $result;
        }else
        {
            die('Query Problem'.mysqli_error($link));
        }



    }

    public function updateStudentInfo($data)
    {
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "UPDATE demos SET name='$data[name]',email='$data[email]',mobile='$data[mobile]' WHERE id='$data[id]'";
        if (mysqli_query($link,$sql))
        {
            header('Location: view_student.php');

        }else
        {
            die('Query Problem'.mysqli_error($link));
        }
    }


    public function deleteStudentInfo($id)
    {
        $link = mysqli_connect('localhost','root','','demo');
        $sql = " DELETE FROM demos WHERE id='$id'";
        if (mysqli_query($link,$sql))
        {
            $msg = "Student info Delete Successfully";
            return $msg;

        }else
        {
            die('Query Problem '.mysqli_error($link));
        }

    }

    public function searchStudentInfo()
    {
        $link = mysqli_connect('localhost','root','','demo');
        $sql = "SELECT * FROM demos WHERE name LIKE '$_POST[searchText]%'";
        if (mysqli_query($link,$sql))
        {
            $result = mysqli_query($link,$sql);
            return $result;
        }else
        {
            die('Query Problem'.mysqli_error($link));
        }

    }



}