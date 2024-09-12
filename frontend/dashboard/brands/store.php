<?php
session_start();

// include "../../public/uploads/brands"

include '../../../backend/config/db.php';

// Add new brand here
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
            $_SESSION['create_success'] = "Brand Successfully Added!";
            header("location: brands.php");
        }
    } else {
        $_SESSION['create_fail'] = "Brand Added Failed!";
        header("location: brands.php");
    }
}




// Edit brand status here
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


// Brand update here


if (isset($_POST['update'])) {

    if (isset($_GET['editid'])) {
        $id = $_GET['editid'];
        $query = "SELECT * FROM brands WHERE id='$id'";
        $connect = mysqli_query($db_connect, $query);
        $brand = mysqli_fetch_assoc($connect);
        $oldlogo = $brand['logo'];
        $existspath = "../../public/uploads/brands/" . $oldlogo;

        $name = $_POST['name'];
        $logo = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];



        $explode = explode(".", $logo);
        $extension = end($explode);
        $new_img_name = date("d-m-Y") . "-" . time() . '.' . $extension;
        $localpath = "../../public/uploads/brands/" . $new_img_name;



        if ($name || $logo) {
            if ($oldlogo) {
                if (file_exists($existspath)) {
                    unlink($existspath);
                }
            }
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "UPDATE brands SET name='$name', logo='$new_img_name' WHERE id='$id'";
                mysqli_query($db_connect, $query);
                $_SESSION['update_success'] = "The Brand ( " . $name . ") Successfully Updated!";
                header('location: brands.php');
            }
        } else {
            if ($oldlogo) {
                if (file_exists($existspath)) {
                    unlink($existspath);
                }
            }
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "UPDATE brands SET name='$name', logo='$new_img_name' WHERE id='$id'";
                mysqli_query($db_connect, $query);
                $_SESSION['update_success'] = "The Brand ( " . $name . ") Successfully Updated!";
                header('location: brands.php');
            }
        }
    } else {
        $_SESSION['brand_update_failed'] = "The Brand ( " . $name . ") Updated Fail!";
        header('location: brands.php');
    }
}


if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $query = "SELECT * FROM brands WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $brand = mysqli_fetch_assoc($connect);
    $oldlogo = $brand['logo'];
    $existspath = "../../public/uploads/brands/" . $oldlogo;

    if ($oldlogo) {
        if (file_exists($existspath)) {
            unlink($existspath);
        }
    }
    if ($id) {
        $query = "DELETE FROM brands WHERE id='$id'";
        mysqli_query($db_connect, $query);
        $_SESSION['delete_success'] = "The Brand Successfully Deleted!";
        header('location: brands.php');
    } else {
        $_SESSION['delete_fail'] = "Project Deleted Fail!";
        header('location: brands.php');
    }
}