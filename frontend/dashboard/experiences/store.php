<?php
session_start();


include '../../../backend/config/db.php';

if (isset($_POST['create'])) {

    $name = $_POST['name'];
    $description = $_POST['description'];
    $icon = $_POST['icon'];

    if ($name && $description && $icon) {
        $query = "INSERT INTO experiences (name,description,icon) VALUES ('$name','$description','$icon')";
        mysqli_query($db_connect, $query);
        $_SESSION['service_complete'] = "New Service Added Successfull!";
        header('location: experiences.php');
    } else {
        header('location: experiences.php');
    }
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $delete_query = "DELETE FROM experiences WHERE id='$id'";
    mysqli_query($db_connect, $delete_query);
    $_SESSION['service_complete_delete'] = "Service Delete Successfull!!";
    header('location: experiences.php');
}


if (isset($_GET['statusid'])) {
    $id = $_GET['statusid'];

    $select_query = "SELECT * FROM experiences WHERE id='$id'";
    $connect = mysqli_query($db_connect, $select_query);
    $experience = mysqli_fetch_assoc($connect);

    if ($experience['status'] == 'deactive') {
        $update_query = "UPDATE experiences SET status='active' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['service_status'] = "Service Status successfully updated!";
        header('location: experiences.php');
    } else {
        $update_query = "UPDATE experiences SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['service_status'] = "Service Status successfully updated";
        header('location: experiences.php');
    }

}


if (isset($_POST['update'])) {

    if (isset($_GET['update_id'])) {
        $id = $_GET['update_id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $icon = $_POST['icon'];

        if ($name && $description && $icon) {
            $query = "UPDATE experiences SET name='$name',description='$description',icon='$icon' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['service_complete'] = "Service Update Successfull!!";
            header('location: experiences.php');
        } else {
            header('location: experiences.php');
        }
    }
}
