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
$projectRoot = "";
$basPath = "";;
$basPathAsset = "/";
foreach ($pathInPieces as $path) {
    if($path != $projectRoot) {
        $basPath = $basPath . $path . DS;
    }
    else break;
}
$basPath .= $projectRoot;
defined('ROOT_SITE') ? null : define('ROOT_SITE', $basPath);
require_once (ROOT_SITE . DS . "function.php");
require_once (ROOT_SITE . DS . "session.php");
require_once (ROOT_SITE . DS . "Consts.php");
require_once (ROOT_SITE . DS . "database.php");
require_once (ROOT_SITE . DS . "auth.php");

$b = __DIR__;
str_replace($b,"","includes");
$pathInPieces = explode('\\', $b);

$p = "/";
for($i = 3; $i < count($pathInPieces); $i++) {
   $path = $pathInPieces[$i];
   if($path != "includes") {
       $p = $p . $path . "/";
   }
   else break;
}
$p .= $projectRoot;

// This constant use for asset and link !
defined('ROOT_SITE_ASSET') ? null : define('ROOT_SITE_ASSET', $p);