<?php
                if (isset($_POST['submit1'])) {
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $email = $_POST['email'];
                    $mobile = $_POST['mobile'];
                    $password = $_POST['password'];
                    $state = $_POST['state'];
                    $img = $_FILES['img']['name'];
                    $gender = $_POST['gender'];

                    $sql = "select * from tbl_login where email = '$email' and status = 0";
                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);
                    if ($count >= 1) {
                        echo "<script language='javascript'>alert('This Email ID Is Already Registered Here.');</script>";
                        echo "<script language='javascript'>window.location.href='index.php';</script>";
                    } else {
                        $sql1 = "insert into tbl_register (first_name,last_name,email,mobile,password,state,img,gender) values('$first_name','$last_name','$email','$mobile','$password','$state','$img','$gender')";

                        $result1 = mysqli_query($conn, $sql1);
                        if ($result1) {
                            echo "<script language='javascript'>alert('You Have Register Successfully');</script>";
                            echo "<script language='javascript'>window.location.href='index.php';</script>";
                        }
                        $sql2 = "insert tbl_login(email,password,type)value('$email','$password','user')";
                        $result2 = mysqli_query($conn, $sql2);
                        if ($result2) {
                        } else {
                            echo "<script language='javascript'>alert('Invalid File');</script>";
                        }
                    }
                }
                ?>
