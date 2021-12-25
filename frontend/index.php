<?php
require_once "../includes/Init.php";
require_once "../includes/Models/Musics.php";

$musics = new Musics();

$result = $musics->FindAll(true);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>-</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <script>
    function openNavigations() {
        var x = document.getElementById("navigation");
        if (x.classList.contains("close")) {
            x.classList.add("open");
            x.classList.remove("close");
        } else {
            x.classList.add("close");
            x.classList.remove("open");
        }
    }
    </script>

</head>
<body>
    <div class="container">
        <div class="header clearfix">
            <ul class="navigation close" id="navigation">
                <li class="responsiveLink" onclick="openNavigations()">
                    <a href="#">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
                <li><a href="#" class="active">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">Account</a></li>
            </ul>
            <div class="section">
                <table>
                    <tr>
                        <td>
                            <h1 class="xxxlarge">
                                <i class="fas fa-music"></i>
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h1 class="large" style="    margin: 2% 0%;">
                                INSERTION
                            </h1>
                        </td>
                    </tr>
                    <tr>
                        <td>Player of 2024</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="content">
            <div class="gallery">
                <div><img src="images/g1.jpg" alt=""></div>
                <div><img src="images/g2.jpg" alt=""></div>
                <div><img src="images/g3.jpg" alt=""></div>
                <div><img src="images/g4.jpg" alt=""></div>
            </div>
            <div class="middleBox">
                <h2>
                    MUSIC IS POWER OF LIFE!
                </h2>
            </div>
            <div class="itemsBox">
                <?php foreach ($result as $item) { ?>
                <div class="item">
                    <div class="image">
                        <img  src="<?php echo Consts::DIR_OF_UPLOAD_IMAGES . $item['musics_image'] ?>" alt="" class="itemImage">
                    </div>
                    <div class="contentItem">
                        <div class="contentImage" style="width: 400px">
                            <h3>
                                <?= $item['musics_title'] ?>
                            </h3>
                            <br>
                            <div style="width: auto">
                                <audio controls>
                                    <source src="<?= Consts::DIR_OF_UPLOAD_MUSICS . $item['musics_address'] ?>">
                                    Your browser does not support the audio element.
                                </audio>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>
