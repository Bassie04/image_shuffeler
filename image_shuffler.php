<?php
include "app_config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
  <?php

    $query = mysqli_query($con,"SELECT * FROM images ORDER BY rand() LIMIT 1");
    // if (!$check1_res) {
    //     printf("Error: %s\n", mysqli_error($con));
    //     exit();
    // }

    while($uitkomst = mysqli_fetch_array($query)){
        $url			= $uitkomst["url"];

  ?>
    <img id="img_placeholder" style="width:50%;margin: 0 auto;display:block;" src="<?php echo $url; ?>">

  <?php } ?>

    <script>

        // stap 1: maak een database aan, en zet de url's van onderstaande afbeeldingen in een database-tabel
        // stap 2: haal de afbeeldingen dmv een query weer uit de database, en vervang de statische lijst in een database loop
        // stap 3: maak een simpel CRUD pagina waarmee je afbeeldingen aan database kunt toevoegen/wijzigen/verwijderen
        // stap 4: implementeer alles op je raspberry-pi
        // stap 5: verstuur de link naar http://ip-van-jouw-raspberry/pvb/image_shuffler.php via discord naar @Jan van Os

        // var imgList = [
        //     "https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1508138221679-760a23a2285b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1493612276216-ee3925520721?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1501426026826-31c667bdf23d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1489533119213-66a5cd877091?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1505678261036-a3fcc5e884ee?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1501457191481-671f811805de?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1504937551116-cb8097e6f02a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1572164625211-6723762c0e3a?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60",
        //     "https://images.unsplash.com/photo-1511963211013-83bba110595d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=600&q=60"
        //
        // ];
        //
        // document.getElementById("img_placeholder").src = imgList[Math.floor(Math.random()*imgList.length)];

    </script>
</body>

</html>
