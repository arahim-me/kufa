<?php
session_start();

// include "../../public/uploads/brands"

include '../../../backend/config/db.php';


if (isset($_POST['add'])) {
    $brand_name = $_POST['name'];
    $image = $_FILES['image']['name'];
    if ($brand_name && $image) {
        $tmp = $_FILES['image']['tmp_name'];
        $explode = explode(".", $image);
        $extension = end($explode);
        $img_name = date("d-m-Y") . "-" . time() . '.' . $extension;
        $localpath = "../../public/uploads/brands/" . $img_name;
        if (move_uploaded_file($tmp, $localpath)) {
            $query = "INSERT INTO brands (name, logo) VALUES ('$brand_name', '$img_name')";
            mysqli_query($db_connect, $query);
            $_SESSION['brand_added_success'] = "Brand Successfully Added!";
            header("location: brands.php");
        } else {
            $_SESSION['brand_added_failed'] = "Brand Added Failed!";
            header("location: brands.php");
        }
    } else {
        $_SESSION['brand_added_failed'] = "Brand Added Failed!";
        header("location: brands.php");
    }
}


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $delete_query = "DELETE FROM brands WHERE id='$id'";
    mysqli_query($db_connect, $delete_query);
    $_SESSION['brand_delete_success'] = "The Brand Successfully Deleted!";
    header('location: brands.php');
}


if (isset($_GET['statusid'])) {
    $id = $_GET['statusid'];

    $query = "SELECT * FROM brands WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $brand = mysqli_fetch_assoc($connect);

    if ($brand['status'] == 'deactive') {
        $query = "UPDATE brands SET status='active' WHERE id='$id'";
        mysqli_query($db_connect, $query);

        $_SESSION['brand_status_active'] = "The Brand Status Successfully Activated!";
        header('location: brands.php');
    } else {
        $query = "UPDATE brands SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $query);

        $_SESSION['brand_status_deactive'] = "The Brand Status Successfully Deactivated!";
        header('location: brands.php');
    }

}


if (isset($_POST['update'])) {

    if (isset($_GET['editid'])) {
        $id = $_GET['editid'];
        $name = $_POST['name'];
        $logo = $_POST['logo'];

        if ($name) {
            $query = "UPDATE brands SET name='$name' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['brand_update_success'] = "The Brand ( " . $name . ") Successfully Updated!";
            header('location: brands.php');
        }
        if ($logo) {
            $query = "UPDATE brands SET logo='$logo' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['brand_update_success'] = "The Brand ( " . $name . ") Successfully Updated!";
            header('location: brands.php');
        }
        if ($name && $logo) {
            $query = "UPDATE brands SET name='$name', logo='$logo' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['brand_update_success'] = "The Brand ( " . $name . ") Successfully Updated!";
            header('location: brands.php');
        }
    } else {
        $_SESSION['brand_update_failed'] = "The Brand ( " . $name . ") Updated Fail!";
        header('location: brands.php');
    }
}
