<?php
include'config.php';
include'header.php';
if (isset($_POST['submit1'])) {
    global $pass;
    $oldp = $_POST['old'];
    $newp = $_POST['newpass'];
    $conp = $_POST['con'];
    $sql = "select * from tbl_login where email= '$user' and status = 0";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $pass = $row['password'];
        }
        if ($pass == $oldp) {
            if ($newp == $conp) {
                $sql1 = "update tbl_login set password = '$newp' where email= '$user' and status = 0";
                $sql2 = "update tbl_register set password = '$newp' where email= '$user' and status = 0";
                $result2 = mysqli_query($conn, $sql2);
                $result1 = mysqli_query($conn, $sql1);
                if ($result1) {
                    echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
                    echo "<script language='javascript'>window.location.href='../index.php';</script>";
                }
            } else {
                echo "<script language='javascript'>alert('Please Enter Confirm Password Same As New Password');</script>";
                echo "<script>window.location.href='changepassword.php'</script>";
            }
        } else {
            echo "<script language='javascript'>alert('Please Enter Right Currant Password');</script>";
            echo "<script>window.location.href='changepassword.php'</script>";
        }
    }
}
?>
