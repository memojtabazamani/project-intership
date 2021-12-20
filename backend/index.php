<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/20/2021
 * Time: 7:38 PM
 */

require_once "../includes/Init.php";

?>
<?php $titleSite = "صفحه مدیریت";
include("../includes/layout/Admin/adminHeader.php") ?>

<?php
require_once "../includes/Models/Musics.php";
$musics = new Musics();
$result = $musics->FindAll(true);

?>
<body>
<!-- start: navigation -->
<?php include_once "../includes/layout/Admin/AdminNavigation.php" ?>
<!-- end: navigation -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li class="active"><a href="#">Musics</a></li>
                <li><a href="#">Add Music <i class="glyphicon glyphicon-plus"> </i></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <h2 class="sub-header">Section title</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Signer</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
<?php include("../includes/layout/Admin/AdminFooter.php") ?>
