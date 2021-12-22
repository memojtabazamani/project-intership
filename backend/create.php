<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/20/2021
 * Time: 7:38 PM
 */

require_once "../includes/Init.php";

?>
<?php $titleSite = "Add Music";
include("../includes/layout/Admin/adminHeader.php") ?>

<body>
<!-- start: navigation -->
<?php include_once "../includes/layout/Admin/AdminNavigation.php" ?>
<!-- end: navigation -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a  href="index.php">Musics</a></li>
                <li class="active"><a href="create.php">Add Music <i class="glyphicon glyphicon-plus"> </i></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <form action="actions/actionInsert.php" method="post" enctype="multipart/form-data">
                <div class="row" >
                    <div class="col-md-6">
                        <label for="titleInput">Title</label>
                        <input type="text" class="form-control" id="titleInput" placeholder="Santouri" required name="musics_title" value="<?php oldValues('musics_title') ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="signerInput">Signer</label>
                        <input type="text" class="form-control" id="signerInput" placeholder="Mohsen Chavoshi" required name="musics_signer" value="<?php oldValues('musics_signer') ?>">
                    </div>
                </div>
                <div class="row " style="margin-top: 2%;">
                    <div class="col-md-6">
                        <label for="musicFile">Music</label>
                        <input type="file" class="form-control" id="musicFile" name="musics_address"  required value="<?php oldValues('musics_address') ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="imageFile">Image</label>
                        <input type="file" class="form-control" id="imageFile" name="musics_image" required value="<?php oldValues('musics_image') ?>">
                    </div>
                </div>
                <div class="row " style="margin-top: 2%;">
                    <div class="col-md-6">
                        <label for="genreInput">Genre</label>
                        <input type="text" class="form-control" id="genreInput" placeholder="Pop, Rock" name="musics_genre" value="<?php oldValues('musics_genre') ?>">
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info" name="submitBtn" value="insert">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<?php include("../includes/layout/Admin/AdminFooter.php") ?>
