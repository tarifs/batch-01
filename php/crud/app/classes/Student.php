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

    public function deleteStudentInfo()
    {

    }



}