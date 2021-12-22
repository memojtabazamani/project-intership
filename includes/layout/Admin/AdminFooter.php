<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 5/19/2021
 * Time: 12:15 AM
 */
?>
<footer id="footer">
    <div class="footer_bottom">
        <p class="developer" style="color: white"></p>
    </div>
</footer>
</div>
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">-->
<?php

$assets = array(
    "assets/js/jquery.min.js",
        "assets/js/bootstrap.min.js",
    "assets/js/myjavascipt.js",

);
foreach($assets as $asset) {
    $href = ROOT_SITE_ASSET . $asset;
    echo "<script src='$href'>";
    echo "</script>";
    echo "&nbsp";
}
?>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</body>
</html>
