<?php
include('config.php');
if (isset($_POST['submit'])) {

    $user = $_POST['email'];
    $password = $_POST['password'];
    $sql = "select * from tbl_login where email = '$user' and password = '$password' and status=0";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $type = $row['type'];
        }
        if (($type == "admin") || ($type == 'Admin')) {
            $_SESSION['user'] = $user;
            echo "<script language='javascript'>window.location.href='admin/index.php';</script>";
        } elseif (($type == "user") || ($type == 'User')) {
            $_SESSION['user'] = $user;
            echo "<script language='javascript'>window.location.href='user/index.php';</script>";
        }
    } else {
        echo "<script language='javascript'>alert('Your Emailid  or Password is wrong');</script>";
    }
}
?>
