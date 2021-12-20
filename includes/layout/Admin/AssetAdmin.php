<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/20/2021
 * Time: 7:44 PM
 */
$assets = array(
    "assets/css/bootstrap.css",
    "assets/css/dashboard.css",
    "assets/css/styles.css"
);
foreach($assets as $asset) {
    $href = ROOT_SITE_ASSET . $asset;
    echo "<link rel='stylesheet' type='text/css' href='$href' />";
    echo "\r\n";
}