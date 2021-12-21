<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/20/2021
 * Time: 7:38 PM
 */

require_once "../includes/Init.php";

?>
<?php $titleSite = "صفحه اضافه کردن موزیک";
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
            <form>
                <div class="row" >
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Signer</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <div class="row " style="margin-top: 2%;">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Music</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Image</label>
                        <input type="file" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>
                <div class="row " style="margin-top: 2%;">
                    <div class="col-md-6">
                        <label for="exampleInputEmail1">Genre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Email">
                    </div>
                </div>

                <div class="row" style="margin-top: 2%;">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
<?php include("../includes/layout/Admin/AdminFooter.php") ?>
