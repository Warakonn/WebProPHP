 <?php  include('../connection/connection.php'); ?>
 <?php  include('include/script.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <?php  include('include/head.php'); ?>
    <body class="app">
        <?php  include('include/header.php'); ?>

        <div class="app-wrapper">
            <div class="app-content pt-3 p-md-3 p-lg-4">
                <div class="container-xl">
                    <?php 
                    if(!isset($_GET['page']) && empty($_GET['page'])){
                        include('dashboard/index.php');
                    }elseif (isset($_GET['page']) && $_GET['page']=='about') {
                        include('about/index.php');
                    } elseif (isset($_GET['page']) && $_GET['page']=='product') {
                        include('product/index.php');
                    } elseif (isset($_GET['page']) && $_GET['page']=='product_type') {
                        include('product_type/index.php');
                    } elseif (isset($_GET['page']) && $_GET['page']=='admin') {
                        include('admin/index.php');
                    }
                    ?>
                   
                </div>
                <!--//container-fluid-->
            </div>
            <!--//app-content-->

            <?php  include('include/footer.php'); ?>

            <!--//app-footer-->
        </div>
        <!--//app-wrapper-->
    </body>
</html>
