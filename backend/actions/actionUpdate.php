<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/22/2021
 * Time: 9:12 PM
 */
require_once "../../includes/Init.php";
require_once "../../includes/Models/Musics.php";

if(isset($_POST['submitBtn'])) {
    $id = fetchSecure($_POST['musics_id']);
    $model = new Musics();
    $model->load($model->FindOne($id, true)[0]);
    $backURL = "../edit.php?musics_id=".$id;
    // Get all post requests
    $requestsRequired = array(
        'musics_title' => $_POST['musics_title'],
        'musics_signer' => $_POST['musics_signer'],
    );
    $requestsForm = array(
        'musics_title' => $_POST['musics_title'],
        'musics_signer' => $_POST['musics_signer'],
        'musics_genre' => $_POST['musics_genre']
    );
    // Block XSS
    $requestsForm = removeBlockXSSForms($requestsForm);

    $_messagesRequired = array(
        'musics_title' => "Title Of Music Must Be Entred",
        'musics_signer' => "Signer Of Music Must Be Entred");

    $state = validationRequired($requestsRequired, $_messagesRequired);

    if ($state == 0) {
        // Set old values to sessions
        setOldValues($_POST);
        return redirectTo($backURL);
    }

    $fileMusic = $_FILES['musics_address'];
    $fileImage = $_FILES['musics_image'];

    // Music File
    if ($fileMusic['tmp_name'] != null) {
        if (checkTypeMusic($fileMusic) == false) {
            // Set old values to sessions
            setOldValues($_POST);
            return redirectTo($backURL);
        }
        uploadfileupdate($model->fields_form['musics_address'],$fileMusic, Consts::DIR_OF_UPLOAD_FORM_MUSICS);
    }
    // Image
    if ($fileImage['tmp_name'] != null) {
        if (checkTypeImage($fileImage) == false) {
            // Set old values to sessions
            setOldValues($_POST);
            return redirectTo($backURL);
        }
        uploadfileupdate($model->fields_form['musics_image'],$fileImage, Consts::DIR_OF_UPLOAD_FORM_IMAGES);
    }


    $requestsForm['musics_address'] = $model->fields_form['musics_address'];
    $requestsForm['musics_image'] = $model->fields_form['musics_image'];
    $requestsForm['musics_id'] = $model->fields_form['musics_id'];
    $model = new Musics();

    $model->load($requestsForm);
    if($model->updateToDB()) {
        successMessage();
    } else {
        failureMessage();
    }

    return redirectTo("../index.php");
}
failureMessage();
redirectTo($backURL);