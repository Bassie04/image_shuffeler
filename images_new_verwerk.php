<?php
include "app_config.php";

$url = $_POST['url-new'];

mysqli_query($con, "INSERT INTO images (url) VALUES ('$url')"  );

?>

<meta HTTP-EQUIV="REFRESH" content="0; url=./images.php">
