<?php
session_start();


include '../../../backend/config/db.php';



// New File create in database

if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $text = $_POST['text'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $explode = explode(".", $image);
    $extension = end($explode);
    $img_name = date("d-m-Y") . "-" . time() . '.' . $extension;
    $localpath = "../../public/uploads/testimonials/" . $img_name;

    if ($name && $designation && $text) {
        if ($name && $designation && $text && $image) {
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "INSERT INTO testimonials (name,designation,text,image) VALUES ('$name','$designation','$text', '$img_name')";
                mysqli_query($db_connect, $query);
                $_SESSION['create_success'] = "New Review Added Successfull!";
                header('location: testimonial.php');
            }

        }

    } else {
        $_SESSION['create_fail'] = "New Review Added Fail!";
        header('location: testimonial.php');
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = "SELECT * FROM testimonials WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $testimonial = mysqli_fetch_assoc($connect);
    $oldimage = $testimonial['image'];
    $existspath = "../../public/uploads/testimonials/" . $oldimage;

    if ($oldimage) {
        if (file_exists($existspath)) {
            unlink($existspath);
        }
    }
    if ($id) {
        $query = "DELETE FROM testimonials WHERE id='$id'";
        mysqli_query($db_connect, $query);
        $_SESSION['delete_success'] = "The Testimonial Deleted Successfull!";
        header('location: Testimonial.php');
    } else {
        $_SESSION['delete_fail'] = "The Testimonial Deleted Fail!";
        header('location: Testimonial.php');
    }
}



if (isset($_GET['statusid'])) {
    $id = $_GET['statusid'];

    $select_query = "SELECT * FROM testimonials WHERE id='$id'";
    $connect = mysqli_query($db_connect, $select_query);
    $service = mysqli_fetch_assoc($connect);

    if ($service['status'] == 'deactive') {
        $update_query = "UPDATE testimonials SET status='active' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "The review's status successfully activated!";
        header('location: testimonial.php');
    } else {
        $update_query = "UPDATE testimonials SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "The review's status successfully deactivated!";
        header('location: testimonial.php');
    }

}


if (isset($_POST['update'])) {
    if (isset($_GET['update_id'])) {
        $id = $_GET['update_id'];
        $query = "SELECT * FROM testimonials WHERE id='$id'";
        $connect = mysqli_query($db_connect, $query);
        $testimonial = mysqli_fetch_assoc($connect);
        $oldimage = $testimonial['image'];
        $existspath = "../../public/uploads/testimonials/" . $oldimage;

        $name = $_POST['name'];
        $text = $_POST['text'];
        $designation = $_POST['designation'];
        $image = $_FILES['image']['name'];

        $tmp = $_FILES['image']['tmp_name'];
        $explode = explode(".", $image);
        $extension = end($explode);
        $new_img = date("d-m-Y") . "-" . time() . '.' . $extension;
        $localpath = "../../public/uploads/testimonials/" . $new_img;

        if ($name) {
            $query = "UPDATE testimonials SET name='$name' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "Testimonial Updated Successfull!";
            header('location: testimonial.php');
        }
        if ($text) {
            $query = "UPDATE testimonials SET text='$text' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "Testimonial Updated Successfull!";
            header('location: testimonial.php');
        }
        if ($designation) {
            $query = "UPDATE testimonials SET designation='$designation' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "Testimonial Updated Successfull!";
            header('location: testimonial.php');
        }
        if ($image) {
            if ($oldimage) {
                if (file_exists($existspath)) {
                    unlink($existspath);
                }
            }
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "UPDATE testimonials SET image='$new_img' WHERE id='$id'";
                mysqli_query($db_connect, $query);
                $_SESSION['update_success'] = "Project Updated Successfull!";
                header('location: testimonial.php');
            }
        }

        if ($name && $text && $designation && $image) {
            if ($oldimage) {
                if (file_exists($existspath)) {
                    unlink($existspath);
                }
            }
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "UPDATE testimonials SET name='$name', text='$text', $designation='$designation' image='$new_img' WHERE id='$id'";
                mysqli_query($db_connect, $query);
                $_SESSION['update_success'] = "Testimonial Updated Successfull!";
                header('location: testimonial.php');
            }
        }
    } else {
        $_SESSION['update_fail'] = "Testimonial Updated Fail!";
        header('location: testimonial.php');
    }
}