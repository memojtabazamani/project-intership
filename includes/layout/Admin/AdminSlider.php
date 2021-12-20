<?php
$currentURL = isset($currentURL) ? $currentURL : 'admin';
// get roles
$pages = $connect->query("SELECT * from table_roles");

// get this roles
$prepare = $connect->prepare("SELECT * from table_roles_permission WHERE rp_users_id=:rp_users_id");
$prepare->execute([':rp_users_id' => auth::id()]);
$userRoles =$prepare->fetchAll();
//$pages = array(
//    'post' => "اخبار ها",
//    'gallery' => "تصاویر",
//    'members' => "اعضای شورا",
//    'product' => "کالا ها",
//    'user' => "کاربران/مدیران",
//    'actionLogOut.php' => 'خروج از حساب کاربری');
//?>
<div class="col-lg-3 col-md-3 col-sm-3">
    <div class="latest_post" id="menuOfSite">
        <h2 style="margin: 0"><span>منو های سایت</span></h2>
        <ul class="latest_postnav">
            <li>
                <div class="media">
                    <div class="media-body">
                        <h3>
                            <a <?php if ($currentURL == "admin") echo "class='activePage'"; ?>
                                    href="<?php echo ROOT_SITE_ASSET . DS . 'admin'; ?>">داشبورد مدیریت</a>
                        </h3>
                    </div>
                </div>
            </li>
            <?php
            foreach ($pages as $page) {
                foreach ($userRoles as $ur) {
                    if ($ur['rp_roles_id'] == $page['roles_id']) {
                        echo "<li>";
                        echo "<div class=\"media\">";
                        echo "<div class=\"media-body\">";
                        echo "<h4>";
                        echo "<a ";
                        if ($page['roles_page'] == $currentURL)
                            echo "class = 'activePage' ";
                        echo "href = '" . ROOT_SITE_ASSET . DS . "admin" . DS . $page['roles_page'] . "'>";
                        echo $page['roles_description'];
                        echo "</a>";
                        echo "</h4></div></div></li><li><hr></li>";
                    }
                }
            }
            ?>
            <li>
                <div class="media">
                    <div class="media-body">
                        <h4>
                            <a class="logout" href="<?php echo ROOT_SITE_ASSET . DS . "admin" . DS . "actionLogOut.php" ?>">خروج از حساب
                                کاربری</a>
                        </h4>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>