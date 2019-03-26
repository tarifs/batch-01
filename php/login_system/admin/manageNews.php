<?php
session_start();
if($_SESSION['id'] == NULL){
    header('Location:login.php');
}

require_once "../vendor/autoload.php";
use App\classes\Login;
use App\Classes\News;

$login = new Login();
if(isset($_GET['logout'])){
    $login->adminLogout();
}

$news = new News();
$result = $news->getNewsInfo();
$msg = '';

if (isset($_GET['delete']))
{
    $id = $_GET['id'];
    $delete = new News();
    $msg = $delete->deleteNewsInfo($id);
}


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
                <?php echo $msg?>
                <div class="card-body">
                    <table class="table">

                        <tr>
                            <th>Sl No.</th>
                            <th>News Title</th>
                            <th>News Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
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
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
