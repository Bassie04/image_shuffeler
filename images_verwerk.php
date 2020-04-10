<?php
include "app_config.php";

$url = $_POST['url-edit'];

mysqli_query($con,"UPDATE images SET url = '$url' WHERE id = '$_GET[id]'");

?>

<meta HTTP-EQUIV="REFRESH" content="0; url=./images.php">
