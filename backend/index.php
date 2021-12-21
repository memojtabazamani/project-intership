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
                <li class="active"><a  href="index.php">Musics</a></li>
                <li ><a href="create.php">Add Music <i class="glyphicon glyphicon-plus"> </i></a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Dashboard</h1>
            <h2 class="sub-header">Section title</h2>
            <div class="table-responsive">
                <table class="table table-striped">
                    <?php if(!empty($result)) { ?>
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Signer</th>
                        <th>Genre</th>
                    </tr>
                    </thead>


                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>
                                <td width="8%">
                                    <a href="#">
                                        <img src="<?= Consts::DIR_OF_UPLOAD_IMAGES . $row['musics_image'] ?>" alt="" class="img img-thumbnail img-responsive img-rounded " width="100%">
                                    </a>
                                </td>
                                <td>
                                    <?= $row['musics_title'] ?>
                                </td>
                                <td>
                                    <?= $row['musics_signer'] ?>
                                </td>
                                <td>
                                    <span class="badge info small bg-info">
                                        <?= $row['musics_genre'] ?>
                                    </span>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>

                    <?php } else { ?> No Data For Show <?php } ?>

                </table>
            </div>
        </div>
    </div>
</div>
</body>
<?php include("../includes/layout/Admin/AdminFooter.php") ?>
