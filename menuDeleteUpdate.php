<?php 
    include "db.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM zeromenu WHERE id = $id";
    $query = mysqli_query($db_con,$sql);

    $row = mysqli_fetch_assoc($query);

    if(isset($_POST["submit"])){

        $menu = $_POST['menu'];
        
            $sql = "UPDATE `zeromenu` SET `id`='$id', `menu`='$menu', WHERE id=$id";

            
            $query = mysqli_query($db_con,$sql);

                if($query){
                    header("Location:editMenu.php");
                }else{
                    echo "fatal  error";
                }

    }
    ?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body class="loginEnter">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <script src="assets/js/vendor/jquery.js"></script>
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.min.js" integrity="sha256-eGE6blurk5sHj+rmkfsGYeKyZx3M4bG+ZlFyA7Kns7E=" crossorigin="anonymous"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>

        <div class="container">
            <div class="col-md-offset-3 col-md-5">
                <form action="" method="post">
                    <label>Menu</label>
                    <input class="form-control" name="menu" value="<?=$row['menu']?>">
                    <div class="col-md-offset-4 col-md-3">
                            <input class="btn btn-success" type="submit" value="Change">
                    </div>
                  
                    </div>
                </form>
            </div>
        </div> 
    
    </body>
</html>
