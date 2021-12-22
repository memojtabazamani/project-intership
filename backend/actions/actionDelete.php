<?php
require_once( "../../includes/Init.php" );
require_once( "../../includes/Models/Musics.php" );
$backurl = "../index.php";
if ( isset( $_POST[ "idOfMusic" ] ) ) {
    $requests = array(
        "musics_id" => $_POST['idOfMusic']
    );

    $music = new Musics();
    $music->load($requests);
    if ( $music->deleteFromDb() ) {
        flashMessage("Your Music Has Ben Deleted", "info");
        return redirectTo( $backurl );
    }

}
failureMessage();
return redirectTo("../index.php");

?>