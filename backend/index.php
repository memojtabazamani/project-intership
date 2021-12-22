<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 12/20/2021
 * Time: 7:38 PM
 */

require_once "../includes/Init.php";

?>
<?php $titleSite = "Dashboard";
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
            <div class="row">
                <div class="col-md-12">
                    <p>
                        <?php showMessages() ?>
                    </p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <?php if(!empty($result)) { ?>
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Signer</th>
                        <th>Genre</th>
                        <th>Actions</th>
                    </tr>
                    </thead>


                    <tbody>
                        <?php foreach ($result as $row) { ?>
                            <tr>

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

                                <td>
                                    <a href="#" class="text-decoration-none text-danger"
                                       id="triggerOfModalDelete"
                                       data-id="<?= $row['musics_id'] ?>"
                                       data-title="<?= $row['musics_title'] ?>"
                                       data-target="deleteModal"
                                    > <span>
                                        <i class="glyphicon glyphicon-remove"></i>
                                    </span></a>
                                    <a href="#" class="text-decoration-none text-info"> <span>
                                        <i class="glyphicon glyphicon-edit"></i>
                                    </span></a>
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
<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="actions/actionDelete.php" method="POST">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel"></h4>
                </div>

                <input type="hidden" name="idOfMusic">

                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
