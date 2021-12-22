<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/22/2021
 * Time: 9:12 PM
 */
require_once "../../includes/Init.php";
require_once "../../includes/Models/Musics.php";
$backURL = "../create.php";
if(isset($_POST['submitBtn'])) {
    // Get all post requests
    $requests = array(
        'musics_title' => $_POST['musics_title'],
        'musics_signer' => $_POST['musics_signer'],
        'musics_address' => $_FILES['musics_address'],
        'musics_image' => $_FILES['musics_image'],
        'musics_genre' => $_POST['musics_genre']
    );
    $_messagesRequired = array(
        'musics_title' => "Title Of Music Must Be Entred",
        'musics_signer' => "Signer Of Music Must Be Entred",
        'musics_address' => "Please Select Music File",
        'musics_image' => "Please Select Image File");

    $state = validationRequired($requests, $_messagesRequired);
    if ($state == 0) {
        // Set old values to sessions
        setOldValues($_POST);
        return redirectTo($backURL);
    }

    $fileMusic = $_FILES['musics_address'];
    $fileImage = $_FILES['musics_image'];
//    if (checkFileUpload($file) == false) {
//        // Set old values to sessions
//        setOldValues($_POST);
//        return redirectTo($backURL);
//    }
    if (checkTypeMusic($fileMusic) == false) {
        // Set old values to sessions
        setOldValues($_POST);
        return redirectTo($backURL);
    }
    if (checkTypeImage($fileImage) == false) {
        // Set old values to sessions
        setOldValues($_POST);
        return redirectTo($backURL);
    }
//    if (checkSize($file) == false) {
//        // Set old values to sessions
//        setOldValues($_POST);
//        return redirectTo($backURL);
//    }

    $requests['musics_address']  = uploadfile($_FILES['musics_address'], Consts::DIR_OF_UPLOAD_FORM_MUSICS);
    $requests['musics_image']    = uploadfile($_FILES['musics_image'], Consts::DIR_OF_UPLOAD_FORM_IMAGES);

    $model = new Musics();
    $model->load($requests);

    if($model->insertToDB()) {
        successMessage();
    } else {
        failureMessage();
    }

    return redirectTo("../index.php");
}
failureMessage();
redirectTo($backURL);