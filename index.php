<?php
   $pageTitle = "Bocchi The Rock";
   $paragraph = " adalah anime komedi slice-of-life yang mengikuti perjalanan seorang gadis introvert dan canggung bernama Hitori 'Bocchi' Gotou dalam mengejar impian bermusik bersama band-nya, sambil menghadapi kecemasan sosialnya dengan cara yang kocak dan relatable. 🎸🎶 Tonton keseruan mereka di platform berikut!";
   $gambar = "timboxy.png";
    
   ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <title>Bootstrap Example</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div style="padding-top: 40px;" class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="box"><?php echo $pageTitle ?></h1>
                </div>

                <div style="padding: 60px; padding-top: 75px;" class="col-12 col-md-6 col-lg-6 text-center">  
                    <p class="cage"> 
                        <a href="https://myanimelist.net/anime/47917/Bocchi_the_Rock">Bocchi the Rock!</a>
                        <?php echo $paragraph ?>                   
                    </p>
                    <button class="button">
                        <img style="margin-bottom: 2px;" src="brando.jpg" width="30px" height="30px">
                        <a href="https://www.bilibili.tv/en/search-result?q=bocchi">PLAY</a>
                    </button>
                </div>

                <div style="padding-top: 30px;" class="col-12 col-md-6 col-lg-6 text-center">
                    <img src="<?php echo $gambar ?>" width="450px">
                </div>
            </div>
        </div>

    </body>
</html>