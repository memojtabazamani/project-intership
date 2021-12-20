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
    <?php include_once "AssetAdmin.php"; ?>
    <![endif]-->
</head>