<?php
<<<<<<< HEAD
=======


>>>>>>> 9de9e46a6167d114375f1945b4423b1bbd420df5
namespace App\classes;
use App\Classes\Connection;


class News
{

    public function saveNewsInfo()
    {
<<<<<<< HEAD
        $sql = "INSERT INTO news (news_title,news_description,news_image,status) VALUES ('$_POST[news_title]','$_POST[news_description]','$_POST[news_image]','$_POST[status]')";
=======
        $sql = "INSERT INTO news (news_title,news_description,news_image,status) VALUES ('$_POST[news_title]','$_POST[news_description]','$_POST[news_image]','$_POST[status]'";
>>>>>>> 9de9e46a6167d114375f1945b4423b1bbd420df5

        if (mysqli_query(Connection::dbConnection(),$sql))
        {
            $msg = '<div class="alert alert-success">News Info Saved successfully</div>';
            return $msg;
        }else
        {
            die('Connection Problem'.mysqli_error(Connection::dbConnection()));
        }
    }

<<<<<<< HEAD
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

    public function updateNewsInfo($data)
    {
        $sql = "UPDATE news SET news_title='$data[news_title]',news_description='$data[news_description]',news_image='$data[news_image]',status='$data[status]' WHERE id='$data[id]'";
        if (mysqli_query(Connection::dbConnection(),$sql))
        {
            header('Location: manageNews.php');
        }else
        {
            die('Connection Problem '.mysqli_error(Connection::dbConnection()));
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

=======
>>>>>>> 9de9e46a6167d114375f1945b4423b1bbd420df5
}