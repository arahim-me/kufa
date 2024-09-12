<?php
session_start();


include '../../../backend/config/db.php';
$id = $_SESSION['author_id'];
$query = "SELECT * FROM admins where id= '$id'";
$admins = mysqli_query($db_connect, $query);
$admin = mysqli_fetch_assoc($admins);


// username update here

if (isset($_POST['editname'])) {

    $name = $_POST['name'];


    if ($name) {
        $query = "UPDATE admins set name='$name' WHERE id='$id'";

        mysqli_query($db_connect, $query);
        $_SESSION['update_success'] = "Your username successfully updated!";
        $_SESSION['author_name'] = $name;
        header('location: index.php');
    } else {
        $_SESSION['update_fail'] = "Your username updated fail!";
        header('location: username.php');
    }
}
// Phone no update here

if (isset($_POST['editphone'])) {

    $phone = $_POST['phone'];

    if ($phone) {
        $query = "UPDATE admins set cel='$phone' WHERE id='$id'";
        mysqli_query($db_connect, $query);
        $_SESSION['update_success'] = "Your phone no successfully updated!";
        header('location: index.php');
    } else {
        $_SESSION['update_fail'] = "Your phone no updated fail!";
        header('location: phone.php');
    }
}
// Email address update here

if (isset($_POST['editemail'])) {

    $email = $_POST['email'];

    if ($email) {
        $query = "UPDATE admins set email='$email' WHERE id='$id'";
        mysqli_query($db_connect, $query);
        $_SESSION['update_success'] = "Your email address successfully updated!";
        header('location: index.php');
    } else {
        $_SESSION['update_fail'] = "Your email address updated fail!";
        header('location: email.php');
    }
}


// Profile picture update here

if (isset($_POST['editavatar'])) {

    $avatar = $_FILES['avatar']['name'];
    $tmp = $_FILES['avatar']['tmp_name'];

    $oldimage = $admin['avatar'];
    $existspath = "../../public/uploads/profile/" . $oldimage;

    $explode = explode(".", $avatar);
    $extension = end($explode);
    $new_img = $id . "-" . date("d-m-Y") . "-" . time() . '.' . $extension;
    $localpath = "../../public/uploads/profile/" . $new_img;

    if ($avatar) {
        if ($oldimage) {
            if (file_exists($existspath)) {
                unlink($existspath);
            }
        }
        if (move_uploaded_file($tmp, $localpath)) {
            $query = "UPDATE admins SET avatar='$new_img' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "Your profile picture successfully updated!";
            header('location: index.php');
        }
    } else {
        $_SESSION['update_fail'] = "Your profile picture updated fail!";
        header('location: profile-pic.php');
    }
}


// Edit password here

if (isset($_POST['editpass'])) {
    $old_pass = $_POST['oldpass'];
    $new_pass = $_POST['newpass'];

    if ($old_pass && $new_pass) {
        $id = $_SESSION['author_id'];
        $old_e = sha1($old_pass);        
        $new_e = sha1($new_pass);
        $count_query = "SELECT COUNT(*) AS 'result' FROM `admins` WHERE id='$id' AND pass='$old_e'";
        $connect = mysqli_query($db_connect, $count_query);
        $result = mysqli_fetch_assoc($connect)['result'];

        if ($result == 1) {
            if ($new_pass) {
                $update_query = "UPDATE admins SET pass='$new_e' WHERE id='$id'";
                mysqli_query($db_connect, $update_query);
                $_SESSION['update_success'] = "password update successfull";
                header("location: ./index.php");
            } else {
                $_SESSION['update_fail'] = "beta age mila then entry kor!";
                header("location: ./password.php");
            }
        } else {
            $_SESSION['update_fail'] = "error paise";
            header("location: ./password.php");
        }

    } else {
        $_SESSION['update_fail'] = "please fillup pass field!";
        header("location: ./password.php");
    }

}

// if (isset($_POST['editpass'])) {

//     $oldpass = $_POST['oldpass'];
//     $newpass = $_POST['newpass'];
//     $hashnew = sha1($newpass);
//     $hashold = sha1($oldpass);
//     if ($oldpass == $newpass) {
//         if(){

//         }
//         $query = "UPDATE admins set email='$email' WHERE id='$id'";
//         mysqli_query($db_connect, $query);
//         $_SESSION['update_success'] = "Your email address successfully updated!";
//         header('location: index.php');
//     } else {
//         $_SESSION['update_fail'] = "Your email address updated fail!";
//         header('location: email.php');
//     }
// }
