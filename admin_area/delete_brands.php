<?php

    if(isset($_GET['delete_brands'])){
        $delete_brand = $_GET['delete_brands'];
        $delete_query = "delete from brands where brand_id='$delete_brand'";
        $result = mysqli_query($con, $delete_query);
        if($result){
            echo "<script>alert('Brand has been deleted!')</script>";
            echo "<script>window.open('./index.php?view_brands','_self')</script>";
        }
    }

?>