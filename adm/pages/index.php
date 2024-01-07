
<!DOCTYPE html>
<html lang="en">

<?php 

$pages = isset($_GET['page']) ?$_GET['page'] : "dashboard";;

if($pages =='dashboard'){

    $current=1;

}else if($pages =='posts' || $pages =='post_add'){

    $current= 2;

}else if($pages =='user' || $pages =='user_add'){

    $current= 3;

}

 ?>



 <?php include '../includes/header.php' ?>
    
<?php include('../includes/session.php'); ?>

<body class="g-sidenav-show   bg-gray-100">

        <div id="overlay">
            <div class="cv-spinner">
                <span class="spinner"></span>
            </div>
        </div>
  <div class="min-height-300 bg-gradient-primary position-absolute w-100"></div>

        <?php include '../includes/sidebar.php' ?>


            <?php 


            $page = isset($_GET['page']) ?$_GET['page'] : "dashboard";
            include $page.'.php';

            ?>

            </div>
        <?php include '../includes/footer.php' ?>
    </div>
  </main>
  
  <?php include '../includes/settings.php'; ?>
</body>

<?php include '../includes/script.php'; ?>

</html>
