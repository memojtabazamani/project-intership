<?php
session_start();

/**
 * @param $key
 * This function return old values from session
 */
function oldValues($key) {
    if(isset($_SESSION['oldValues'][$key])) {
        echo $_SESSION['oldValues'][$key];
    }
    else echo "";
    unset($_SESSION['oldValues'][$key]);
}

/**
 * @param $params
 * this function set a forms request in session!
 */
function setOldValues($params) {
    unset($_SESSION['oldValues']);
    foreach ($params as $key => $value){
        $_SESSION['oldValues'][$key] = $value;
    }
}

/**
 * here remove all session from old values
 */
function removeFlash() {
    unset($_SESSION['oldValues']);
}

/**
 * @param $message
 * @param string $type
 */
function flashMessage($message, $type = 'success') {
    $_SESSION['messages']['type'] = $type;
    $_SESSION['messages'][] = $message;
}

function failureMessage() {
    $_SESSION['messages']['type'] = "danger";
    $_SESSION['messages'][] = "متأسفانه مشکلی پیش آمده، مجددا امتحان کنید";
}

/**
 * @return bool
 * This function check be a user login or not?
 */
function isLogin() {
    if(isset($_SESSION['auth'])) {
        return true;
    }
    return false;
}

?>