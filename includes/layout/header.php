<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 5/19/2021
 * Time: 12:15 AM
 */
?>

<!DOCTYPE html>
<html>
<head>
    <title>

        <?php
            if(isset($titleSite)) {
                echo $titleSite;
            }
            else {
                echo "وب سایت موزیک پلیر";
            }
        ?>

    </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">-->
    <link
        rel="stylesheet"
        href="https://cdn.rtlcss.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-cSfiDrYfMj9eYCidq//oGXEkMc0vuTxHXizrMOFAaPsLt1zoCUVnSsURN+nef1lj"
        crossorigin="anonymous">
    <?php

    $assets = array("/assets/css/font-awesome.min.css", "/assets/css/animate.css", "/assets/css/font.css", "/assets/css/li-scroller.css",
        "/assets/css/slick.css", "/assets/css/slick.css", "/assets/css/jquery.fancybox.css", "/assets/css/theme.css",
        "/assets/css/style.css",  "/assets/css/styles.css"
        );
    foreach($assets as $asset) {
        $href = ROOT_SITE_ASSET . $asset;
        echo "<link rel='stylesheet' type='text/css' href='$href' />";
        echo "&nbsp";
    }
    ?>
    <![endif]-->
</head>
