<?php
session_start();


include '../../../backend/config/db.php';

if (isset($_POST['create'])) {


    $title = $_POST['title'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_FILES['image']['name'];
    $tmp = $_FILES['image']['tmp_name'];
    $explode = explode(".", $image);
    $extension = end($explode);
    $img_name = date("d-m-Y") . "-" . time() . '.' . $extension;
    $localpath = "../../public/uploads/projects/" . $img_name;


    if ($title && $category && $description && $image) {
        if (move_uploaded_file($tmp, $localpath)) {
            $query = "INSERT INTO projects (title, category, description, image) VALUES ('$title', '$category', '$description','$img_name')";
            mysqli_query($db_connect, $query);
            $_SESSION['create_success'] = "New Project Added Successfull!";
            header('location: projects.php');
        }
    }
}


if (isset($_GET['statusid'])) {
    $id = $_GET['statusid'];
    $query = "SELECT * FROM projects WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $project = mysqli_fetch_assoc($connect);

    if ($project['status'] == 'deactive') {
        $update_query = "UPDATE projects SET status='active' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);
        $_SESSION['update_success'] = "Project Status Successfully Activated!";
        header('location: projects.php');
    } elseif ($project['status'] == 'active') {
        $update_query = "UPDATE projects SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);
        $_SESSION['update_success'] = "Project Status Successfully Deactivated!";
        header('location: projects.php');
    } else {
        $_SESSION['update_fail'] = "Project Status Updated Fail!";
        header('location: projects.php');
    }
}


if (isset($_POST['update'])) {
    if (isset($_GET['update_id'])) {
        $id = $_GET['update_id'];
        $query = "SELECT * FROM projects WHERE id='$id'";
        $connect = mysqli_query($db_connect, $query);
        $project = mysqli_fetch_assoc($connect);
        $oldimage = $project['image'];
        $existspath = "../../public/uploads/projects/" . $oldimage;

        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $image = $_FILES['image']['name'];

        $tmp = $_FILES['image']['tmp_name'];
        $explode = explode(".", $image);
        $extension = end($explode);
        $new_img = date("d-m-Y") . "-" . time() . '.' . $extension;
        $localpath = "../../public/uploads/projects/" . $new_img;

        if ($title) {
            $query = "UPDATE projects SET title='$title' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "Project Updated Successfull!";
            header('location: Projects.php');
        }
        if ($description) {
            $query = "UPDATE projects SET description='$description' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "Project Updated Successfull!";
            header('location: Projects.php');
        }
        if ($category) {
            $query = "UPDATE projects SET category='$category' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "Project Updated Successfull!";
            header('location: Projects.php');
        }
        if ($image) {
            if ($oldimage) {
                if (file_exists($existspath)) {
                    unlink($existspath);
                }
            }
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "UPDATE projects SET image='$new_img' WHERE id='$id'";
                mysqli_query($db_connect, $query);
                $_SESSION['update_success'] = "Project Updated Successfull!";
                header('location: Projects.php');
            }
        }

        if ($title && $description && $category && $image) {
            if ($oldimage) {
                if (file_exists($existspath)) {
                    unlink($existspath);
                }
            }
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "UPDATE projects SET title='$title', description='$description', category='$category' image='$new_img' WHERE id='$id'";
                mysqli_query($db_connect, $query);
                $_SESSION['update_success'] = "Project Updated Successfull!";
                header('location: projects.php');
            }
        }
        if ($title && $description && $category && $image) {
            if ($oldimage) {
                if (file_exists($existspath)) {
                    unlink($existspath);
                }
            }
            if (move_uploaded_file($tmp, $localpath)) {
                $query = "UPDATE projects SET title='$title', description='$description', category='$category' image='$new_img' WHERE id='$id'";
                mysqli_query($db_connect, $query);
                $_SESSION['update_success'] = "Project Updated Successfull!";
                header('location: projects.php');
            }
        }
    } else {
        $_SESSION['update_fail'] = "Project Updated Fail!";
        header('location: projects.php');
    }
}



if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $query = "SELECT * FROM projects WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $project = mysqli_fetch_assoc($connect);
    $oldimage = $project['image'];
    $existspath = "../../public/uploads/projects/" . $oldimage;

    if ($oldimage) {
        if (file_exists($existspath)) {
            unlink($existspath);
        }
    }
    if ($id) {
        $query = "DELETE FROM projects WHERE id='$id'";
        mysqli_query($db_connect, $query);
        $_SESSION['delete_success'] = "Project Deleted Successfull!";
        header('location: projects.php');
    } else {
        $_SESSION['delete_fail'] = "Project Deleted Fail!";
        header('location: projects.php');
    }
}