<?php

include "app_config.php";

mysqli_query($con,"DELETE FROM images WHERE id = '$_GET[id]'");

 ?>

<meta http-equiv="refresh" content="0; URL=./images.php" />
