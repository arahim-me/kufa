<?php
session_start();

include '../../../backend/config/db.php';


// Skill create here

if (isset($_POST['createskill'])) {

    $degree = $_POST['degree'];
    $year = $_POST['year'];
    $ratio = $_POST['ratio'];

    if ($degree && $year && $ratio) {
        $query = "INSERT INTO education (degree,year,ratio) VALUES ('$degree','$year','$ratio')";
        mysqli_query($db_connect, $query);
        $_SESSION['create_success'] = "New Skill Added Successfull!";
        header('location: skills.php');
    } else {
        $_SESSION['create_fail'] = "New Skill Added fail!";
        header('location: skills.php');
    }
}

// Skill Delete here

if (isset($_GET['deleteskill'])) {
    $id = $_GET['deleteskill'];
    $delete_query = "DELETE FROM education WHERE id='$id'";
    mysqli_query($db_connect, $delete_query);
    $_SESSION['delete_success'] = "The Skill successfully deleted!";
    header('location: skills.php');
}

// Skill status update here

if (isset($_GET['skillstatus'])) {
    $id = $_GET['skillstatus'];

    $query = "SELECT * FROM education WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $skill = mysqli_fetch_assoc($connect);

    if ($skill['status'] == 'deactive') {
        $update_query = "UPDATE education SET status='active' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "The Skill Status Successfully Activated!";
        header('location: skills.php');
    } else {
        $update_query = "UPDATE education SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "The Skill Status Successfully Deactivated!";
        header('location: skills.php');
    }

}

// Link Edit here

if (isset($_POST['editskill'])) {

    if (isset($_GET['editskill'])) {
        $id = $_GET['editskill'];
        $degree = $_POST['degree'];
        $year = $_POST['year'];
        $ratio = $_POST['ratio'];

        if ($degree || $year || $ratio) {
            $query = "UPDATE education SET degree='$degree',year='$year',ratio='$ratio' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Skill Update Successfull!";
            header('location: skills.php');
        } elseif ($degree && $year && $ratio) {
            $query = "UPDATE education SET degree='$degree',year='$year',ratio='$ratio' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Skill Update Successfull!";
            header('location: skills.php');
        } else {
            $_SESSION['update_fail'] = "The Skill updated fail!";
            header('location: skills.php');
        }
    }
}
