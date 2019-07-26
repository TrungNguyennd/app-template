<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once "paritals/head.php"

    ?>

</head>
<body>
<?php include_once "paritals/header.php"

?>
<?php include_once "paritals/footer.php"

?>
<?php
if(isset($_GET["page"]) && $_GET["page"]){
    $filepath=dirname(__FILE__)."/pages/".trim($_GET["page"])."php";
    echo "<br> FILE path:  ".$filepath;
    if (file_exists($filepath)){
        include_once "pages/".trim($_GET["page"])."php";
    }

}else{
    include_once "pages/home.php";
}
include_once "pages/home.php"

?>


<!-- jQuery Plugins -->
<script src="asset/js/jquery.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
<script src="asset/js/main.js"></script>

</body>
</html>
