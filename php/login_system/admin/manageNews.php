<?php
session_start();
if($_SESSION['id'] == NULL){
    header('Location:login.php');
}

require_once "../vendor/autoload.php";
use App\classes\Login;
<<<<<<< HEAD
use App\Classes\News;
=======
>>>>>>> 9de9e46a6167d114375f1945b4423b1bbd420df5

$login = new Login();
if(isset($_GET['logout'])){
    $login->adminLogout();
}
<<<<<<< HEAD

$news = new News();
$result = $news->getNewsInfo();
$msg = '';

if (isset($_GET['delete']))
{
    $id = $_GET['id'];
    $delete = new News();
    $msg = $delete->deleteNewsInfo($id);
}


=======
>>>>>>> 9de9e46a6167d114375f1945b4423b1bbd420df5
?>
<html>
<head>
    <title>Manage News</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'include/menu.php'; ?>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-8 m-auto">
            <div class="card">
<<<<<<< HEAD
                <?php echo $msg?>
                <div class="card-body">
                    <table class="table">

=======
                <div class="card-body">
                    <table class="table">
>>>>>>> 9de9e46a6167d114375f1945b4423b1bbd420df5
                        <tr>
                            <th>Sl No.</th>
                            <th>News Title</th>
                            <th>News Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
<<<<<<< HEAD
                        <?php $i=1;?>
                        <?php while ($news = mysqli_fetch_assoc($result)){?>
                        <tr>
                            <td><?php echo $i++?></td>
                            <td><?php echo $news['news_title']?></td>
                            <td><?php echo $news['news_description']?></td>
                            <td><?php echo $news['status'] == 1? 'Published' : 'Unpublished' ?></td>
                            <td>
                                <a href="editNews.php?id=<?php echo $news['id']?>" style="color: green">Edit</a>
                                <a  href="?delete=true&id=<?php echo $news['id']?>" style="color: red">Delete</a>
                            </td>
                        </tr>
                        <?php }?>
=======
                        <tr>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>Demo</td>
                            <td>
                                <a href="">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
>>>>>>> 9de9e46a6167d114375f1945b4423b1bbd420df5
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
