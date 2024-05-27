<img src="img/<?php echo $img; ?>" style="height:100px;width:120px;display:inline;margin-right:20px;float:left;" /><br /><br /><input type="file" name="img" id="img" style="float:left;" />
<input type="hidden" name="img" id="img"  
value="<?php if(isset($_SERVER['PHP_SELF']))
		{echo $img;} ?>"/>



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
