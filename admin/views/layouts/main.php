<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 9/26/2020
 * Time: 12:57 AM
 */
?>
<!--head -->
<?php require_once "views/layouts/head.php";?>
<!--/head-->
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <!-- left_col -->
        <?php require_once "views/layouts/left_col.php";?>
        <!-- /left_col -->

        <!-- top navigation -->
        <?php require_once "views/layouts/top_navigation.php";?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <?php echo $this->content;?>
        </div>
        <!-- /page content -->

        <!-- footer content -->
<?php require_once "views/layouts/footer.php"; ?>
