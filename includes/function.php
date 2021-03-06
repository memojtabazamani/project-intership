<?php
require_once "session.php";

/**
 * @param $location
 * This function return url site to $location !
 */
function redirectTo($location)
{
    return header('Location: ' . $location);

}

/**
 * @param $file
 * @return string
 */
function uploadfile($file, $dirUpload)
{
    $nameOfFile = md5(pathinfo($file["name"], PATHINFO_FILENAME)) . "-" . strtotime('now') . "." . pathinfo($file['name'], PATHINFO_EXTENSION);

    move_uploaded_file($file["tmp_name"], $dirUpload . $nameOfFile);
    return $nameOfFile;
}

/**
 * @param $filename
 * @param $file
 */
function uploadfileupdate($filename, $file, $dirUpload)
{
    move_uploaded_file($file["tmp_name"], $dirUpload . $filename);
}


/**
 * @param array $params
 * @param array $messages
 * @return bool
 * This function validation for required inputs
 */
function validationRequired($params = array(), $messages = array())
{
    foreach ($params as $key => $value) {
        if (empty($value)) {
            $_SESSION['messages'][$key] = $messages[$key];
        }
    }
    // if isset error
    if (isset($_SESSION['messages'])) {
        return false;
    }
    unset($_SESSION['messages']);
    return true;
}


/**
 * @param array $params
 * @param array $messages
 * @return bool
 * Check are params numeric or not!?
 */
function validationNumeric($params = array(), $messages = array())
{
    foreach ($params as $key => $value) {
        // use check numeric function!
        if (checkNumeric($value) == false) {
            $_SESSION['messages'][$key] = $messages[$key];
        }
    }
    // if isset error
    if (isset($_SESSION['messages'])) {
        return false;
    }
    unset($_SESSION['messages']);
    return true;
}

/**
 * This function use session message for show all message!
 */
function showMessages()
{
    if (isset($_SESSION['messages'])) {
        $type = isset($_SESSION['messages']['type']) ? $_SESSION['messages']['type'] : "danger";
        echo "<div class='alert alert-" . $type . " '>";
        echo " <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\">
    <span aria-hidden=\"true\">&times;</span>
  </button>";
        echo "<ul>";
        foreach ($_SESSION['messages'] as $key => $message) {
            if ($key != "type") {
                echo "<li>";
                echo $message;
                echo "</li>";
            }
        }
        echo "</ul>";
        echo "</div>";
        unset($_SESSION['messages']);
    }
    unset($_SESSION['messages']);
}

/**
 * @param array $params
 * @return bool
 * This function check the confirm password to other password!
 */
function checkPasswordConfirm($params = array())
{
    if ($params['users_password'] != $params['users_password_confirm']) {
        $_SESSION['messages']['passwordConfirm'] = "?????????? ?????? ???????? ???? ?????? ???????? ???????? ???????????? ??????????.";
        return false;
    }
    return true;
}

/**
 * @param $file
 * @return bool
 * This function check image are selected or no?
 */
function checkFileUpload($file, $message = true)
{
    // Check are file selected?!
    if ($file['tmp_name'] == "") {
        if ($message) {
            $_SESSION['messages']['imageUpload'] = "Please Select A File ";
        }
        return false;
    }
    return true;
}

/**
 * @param $file
 * @return bool
 * This function check type of selected image!
 */
function checkTypeImage($file)
{
    // Valid Tpye Images
    $imageTypes = array("jpg", "png", "jpeg", "gif");
    // Get extension use pathinfo function
    $thisExt = pathinfo($file['name'])['extension'];
    // and check
    $check = in_array($thisExt, $imageTypes);
    if ($check == false) {
        $_SESSION['messages']['imageUpload'] = " Please elect Valid Image Format : jpg , png , jpeg , gif";
    }
    return $check;
}

function checkTypeMusic($file)
{
    // Valid Tpye Images
    $imageTypes = array("mp3", "mp4");
    // Get extension use pathinfo function
    $thisExt = pathinfo($file['name'])['extension'];
    // and check
    $check = in_array($thisExt, $imageTypes);
    if ($check == false) {
        $_SESSION['messages']['imageUpload'] = " Please Select A Valid Format Music! : mp3 , mp4 ";
    }
    return $check;
}


/**
 * @param $file
 * @return bool
 * Check size of image file
 */
function checkSize($file)
{
    if ($file['size'] > 10000000) {
        $_SESSION['messages']['imageUpload'] = "?????? ???????? ?????? ?????????? ???? 1 ?????????????? ?????????? ????????";
        return false;
    }
    return true;
}

/**
 * @param $value
 * @return bool
 * This function check input value numeric or not?
 */
function checkNumeric($value)
{
    return is_numeric($value);
}


function deleteImage($fileName)
{
    unlink(ROOT_SITE . DS . "assets/uploads/$fileName");
}

function fetchSecure($item) {
    $item = trim($item);
    $item = stripslashes($item);
    $item = htmlspecialchars($item);
    return $item;
}

/**
 * @param $requests
 * @return mixed
 */
function removeBlockXSSForms($requests) {
    foreach ($requests as $item => $key) {
        $requests[$key] = fetchSecure($item);
    }

    return $requests;
}

?>