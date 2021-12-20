
<section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav main_nav">
                <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">صحفه اصلی</span></a></li>
                <li><a href="<?php echo ROOT_SITE_ASSET . DS . "website/posts.php" ?>">اخبار ها</a></li>
                <li ><a href="<?php echo ROOT_SITE_ASSET . DS . "website/products.php" ?>">کالاها</a></li>
                <li><a href="<?php echo ROOT_SITE_ASSET . DS . "website/gallery.php" ?>">گالری</a></li>
                <?php
                    if(!isLogin()) {
                ?>
                <li><a href="<?php echo ROOT_SITE_ASSET . DS . "website/login.php" ?>">ورود به پنل مدیریت</a></li>
                <?php }  else { ?>
                <li><a href="<?php echo ROOT_SITE_ASSET . DS . "admin/" ?>">حساب کاربری</a></li>
                <?Php } ?>
            </ul>
        </div>
    </nav>
</section>