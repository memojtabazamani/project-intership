<?php
/**
 * Created by PhpStorm.
 * User: Mojtaba
 * Date: 6/16/2021
 * Time: 12:55 PM
 */
class auth {

    public static function login($user) {
        $_SESSION['auth'] = $user;
    }

    public static function isHaveAccess($roleID) {
        $id = $_SESSION['auth']['users_id'];

        global $connect;

        $sql = "SELECT * FROM `table_roles_permission` INNER JOIN `table_roles` ON `table_roles`.`roles_id`=`table_roles_permission`.`rp_roles_id` WHERE rp_users_id=:users_id and  rp_roles_id = :rp_id";

        $pre = $connect->prepare($sql);
        $pre->execute(['users_id' => $id, 'rp_id' => $roleID]);
        $result = $pre->fetchAll();
        if(!$result) {
            flashMessage("کاربر گرامی، شما به این صفحه دسترسی ندارید!",'danger');
            return redirectTo("../");
        }
    }

    /**
     * @return mixed
     */
    public static function id() {
        return $_SESSION['auth']['users_id'];
    }

    /**
     * @return string
     */
    public static function fullName() {
        return $_SESSION['auth']['users_firstname'] . " " . $_SESSION['auth']['users_lastname'];
    }
    /**
     * logout auth.
     */
    public static function logOut() {
        unset($_SESSION['auth']);
        flashMessage("با موفقیت از حساب کاربری خود خارج شدید", 'info');
    }

}