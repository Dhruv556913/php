if (isset($_FILES['image'])) {
        $cat_id = $_POST['cat_id'];
        $pro_name = $_POST['pro_name'];

        $image = trim($_FILES['image']['name']);
        if ($_FILES["image"]["name"] == '') {
            $image = $_POST['image'];
        } else {
            $image = $_FILES['image']['name'];
        }
        move_uploaded_file($_FILES['image']['tmp_name'], "img/" . $_FILES['image']['name']);
        $sql = "update product SET image='$image' WHERE pro_id='$pro_id' and status= 0";
        $result = mysqli_query($con, $sql);
        if ($result) {

            echo "<script>alert('Image updated');</script>";
            echo "<script>window.location.href='product.php'</script>";
        }
    }
