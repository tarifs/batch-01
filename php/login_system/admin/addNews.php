<?php
session_start();
if($_SESSION['id'] == NULL){
    header('Location:login.php');
}

require_once "../vendor/autoload.php";
use App\classes\Login;
use App\Classes\News;

$msg = '';

if (isset($_POST['btn']))
{
    $news = new News();
    $msg = $news->saveNewsInfo();
}

$login = new Login();
if(isset($_GET['logout'])){
    $login->adminLogout();
}
?>

<html>
<head>
    <title>Add News</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body>
<?php include 'include/menu.php'; ?>
<div class="container" style="margin-top: 100px;">
    <div class="row">
        <div class="col-md-6 m-auto">
            <div class="card">
                <div class="card-title">
                    <h3 class="text-center">Add News</h3>
                </div>
                <div class="card-body">
                    <div><h4><?php echo $msg?></h4></div>

                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">News Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="news_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">News Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="news_description"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-3">News Image</label>
                            <div class="col-md-9">
                                <input type="file" name="news_image" accept="image/*">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-md-4">Publication Status</label>
                            <div class="col-md-8">
                                <select name="status" id="" class="form-control">
                                    <option value="">----- Select Status -----</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>

                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                <input type="submit" name="btn" class="btn btn-primary btn-block" value="Save News Info">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="../assets/js/bootstrap.min.js"></script>
</body>
</html>