<?php
require '../vendor/autoload.php';
use App\classes\Login;

$login = new Login();
$msg = '';
if (isset($_POST['btn'])){
    $msg = $login->adminLogin($_POST);

}

?>


    <html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    </head>
    <body>

    <div class="container" style="margin-top: 25%">
        <div class="row">
            <div class="col-md-6 m-auto">
                <div class="card">
                    <div class="card-title">
                        <h3 class="text-center">Admin Login</h3>
                    </div>
                    <div class="card-body">
                        <?php echo $msg?>
                        <form action="" method="post">
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Email Address</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="email">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="" class="col-form-label col-md-3">Password</label>
                            <div class="col-md-9">
                                <input type="password" class="form-control" name="password">
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="offset-3 col-md-9">
                                <input type="submit" name="btn" class="btn btn-primary btn-block">
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
