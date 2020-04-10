<?php
include "app_config.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit Images</title>
  </head>
  <body>
    <table style="margin:0 auto;">
      <tr>
        <td style="border: 1px solid black;padding: 20px;"> <button type="button" name="add" style="height:100px;width:50%;margin:0 25%;" onclick="location.href='image_new.php'">Toevoegen</button> </td>
      </tr>
      <?php

        $query = mysqli_query($con,"SELECT * FROM images");
        // if (!$check1_res) {
        //     printf("Error: %s\n", mysqli_error($con));
        //     exit();
        // }

        while($uitkomst = mysqli_fetch_array($query)){
            $id 			= $uitkomst["id"];
            $url			= $uitkomst["url"];

      ?>
      <tr>
        <td style="border: 1px solid black;padding: 20px;"> <img src="<?php echo $url ?>" alt=""> </td>
        <td style="border: 1px solid black;padding: 20px;"> <button type="button" name="del" onclick="location.href='image_delete.php?id=<?php echo $id ?>'">Verwijderen</button> </td>
        <td style="border: 1px solid black;padding: 20px;"> <button type="button" name="edit" onclick="location.href='images_edit.php?id=<?php echo $id ?>'">Wijzig</button> </td>
      </tr>

      <?php } ?>

    </table>
  </body>
</html>
