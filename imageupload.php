<?php
                        if (isset($_FILES['img'])) {
                            $file_name0 = $_FILES['img']['name'];
                            $file_tmp = $_FILES['img']['tmp_name'];
                            $file_size = $_FILES['img']['size'];
                            // echo $file_size;

                            if ($_FILES['img']['size'] > 10485760) {
                                echo "<br><br>Photo size is greater";
                            } else {
                                if (move_uploaded_file($file_tmp, 'img/' . $file_name0)) {
                                }
                            }
                        }
                        ?>
