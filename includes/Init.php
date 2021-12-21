<?php
header("Access-Control-Allow-Origin: *");
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 5/22/2021
 * Time: 11:53 PM
 */
// This File Initialize All Included File

defined('DS') ? null : define('DS', "/");
$pathInPieces = explode('\\', __DIR__);
$basPath = "";;
$basPathAsset = "/";
foreach ($pathInPieces as $path) {
    if($path != "includes") {
        $basPath = $basPath . $path . DS;
    }
    else break;
}
// Root Of Site !
defined('ROOT_SITE') ? null : define('ROOT_SITE', $basPath);

require_once (ROOT_SITE . DS . "includes/function.php");
require_once (ROOT_SITE . DS . "includes/session.php");
require_once (ROOT_SITE . DS . "includes/Consts.php");
require_once (ROOT_SITE . DS . "includes/database.php");
require_once (ROOT_SITE . DS . "includes/auth.php");

$b = __DIR__;
str_replace($b,"","includes");
$pathInPieces = explode('\\', $b);

$p = "/";
// این شماره باید تغییر کند برحسب این که کدام پوشه میباشد
for($i = Consts::NUMBER_OF_ROOT_FOLDER; $i < count($pathInPieces); $i++) {
   $path = $pathInPieces[$i];
   if($path != "includes") {
       $p = $p . $path . "/";
   }
   else break;
}

// This constant use for asset and link !
defined('ROOT_SITE_ASSET') ? null : define('ROOT_SITE_ASSET', $p);



