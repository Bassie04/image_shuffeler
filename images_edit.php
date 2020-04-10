<?php
include "app_config.php";

$query = mysqli_query($con,"SELECT * FROM images WHERE id = '$_GET[id]'");

$uitkomst = mysqli_fetch_array($query);
		$id 	= $uitkomst["id"];
		$url 	= $uitkomst["url"];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="editor" style="margin: 250px 33%;">
      <form class="" action="images_verwerk.php?id=<?php echo $id ?>" method="post">
        <label for="url-edit">Wijzig url:</label><br>
        <textarea name="url-edit" rows="8" cols="80"><?php echo $url ?></textarea><br>
        <input type="submit" name="Verzend" value="Verzend">
      </form>
    </div>
  </body>
</html>
