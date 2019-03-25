<?php


namespace App\classes;
use App\Classes\Connection;


class News
{

    public function saveNewsInfo()
    {
        $sql = "INSERT INTO news (news_title,news_description,news_image,status) VALUES ('$_POST[news_title]','$_POST[news_description]','$_POST[news_image]','$_POST[status]'";

        if (mysqli_query(Connection::dbConnection(),$sql))
        {
            $msg = '<div class="alert alert-success">News Info Saved successfully</div>';
            return $msg;
        }else
        {
            die('Connection Problem'.mysqli_error(Connection::dbConnection()));
        }
    }

}