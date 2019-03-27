<?php

namespace App\classes;
use App\Classes\Connection;


class News
{

    public function saveNewsInfo()
    {


        $sql = "INSERT INTO news (news_title,news_description,news_image,status) VALUES ('$_POST[news_title]','$_POST[news_description]','$_POST[news_image]','$_POST[status]')";


        if (mysqli_query(Connection::dbConnection(),$sql))
        {
            $msg = '<div class="alert alert-success">News Info Saved successfully</div>';
            return $msg;
        }else
        {
            die('Connection Problem'.mysqli_error(Connection::dbConnection()));
        }
    }


    public function getNewsInfo()
    {
        $sql = "SELECT * FROM news";
        if(mysqli_query(Connection::dbConnection(),$sql))
        {
            $result = mysqli_query(Connection::dbConnection(),$sql);
            return $result;

        }else
        {
            die('Connection Problem'.mysqli_error(Connection::dbConnection()));
        }
    }

    public function editNewsInfo($id)
    {
        $sql = "SELECT * FROM news WHERE id='$id'";
        if (mysqli_query(Connection::dbConnection(),$sql))
        {
            $result = mysqli_query(Connection::dbConnection(),$sql);
            return $result;
        }else
        {
            die('Connection error'.mysqli_error(Connection::dbConnection()));
        }
    }

    public function updateNewsInfo()
    {
        $sql = "UPDATE news SET news_title='$_POST[news_title]',news_description='$_POST[news_description]',news_image='$_POST[news_image]',status='$_POST[status]' WHERE id='$_POST[id]'";
        if (mysqli_query(Connection::dbConnection(),$sql))
        {
            header('Location: manageNews.php');

        }else
        {
            die('Query Problem'.mysqli_error(Connection::dbConnection()));
        }

    }

    public function deleteNewsInfo($id)
    {
        $sql = "DELETE FROM news WHERE id='$id'";
        if (mysqli_query(Connection::dbConnection(),$sql))
        {
            $msg = "<div class='alert alert-danger'>News Deleted Successfully</div>";
            return $msg;
        }else
        {
            die('Connection Problem'.mysqli_error(Connection::dbConnection()));
        }
    }

}
?>