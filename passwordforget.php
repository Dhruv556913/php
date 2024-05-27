<?php
include("config.php");
if (isset($_POST['submit'])) {
    include('config.php');
    $email = $_POST['email'];
    $sql = "select * from tbl_login where email = '$email' and status = 0";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $pass = $row['password'];
        }

        if ($pass) {
            echo "<script language='javascript'>window.location.href='reset.php?email=" . $email . "';</script>";
        }
    } else {
        echo "<script language='javascript'>alert('Your Account is not Active');</script>";
    }
}
?>


-----------resetpassword---------

<?php
if (isset($_POST['submit'])) {
    global $email;
    global $pass;

    $email = $_GET['email'];

    $newp = $_POST['newpass'];
    $cpass=$_POST['confirmpass'];

    $sql = "select * from tbl_login where email='$email' and status = 0";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result))

            if ($newp==$cpass) {
                $sql1 = "update tbl_login set password = '$newp' where email='$email' and status = 0";
                $result1 = mysqli_query($conn, $sql1);

                $sql3 = "update tbl_register set password = '$newp' where email='$email' and status = 0";
                $result3 = mysqli_query($conn, $sql3);


                if ($result1 && $result3) {
                    echo "<script language='javascript'>alert('Your Password is successfully Changed');</script>";
                    echo "<script language='javascript'>window.location.href='index.php';</script>";

                    $sql2 = "select * from tbl_login where email='$email' and status=0";
                    $result2 = mysqli_query($conn, $sql2);
                    $count2 = mysqli_num_rows($result2);
                    if ($count2 > 0) {
                        while ($row2 = mysqli_fetch_array($result2)) {
                            $passnew = $row2['password'];
                        }
                    }
                }
            } else {
                echo "<script language='javascript'>alert('please enter same New Password and Confirm Password');</script>";
            }
    } else {
        echo "<script language='javascript'>alert('Please enter your Current Password');</script>";
    }
}
?>
