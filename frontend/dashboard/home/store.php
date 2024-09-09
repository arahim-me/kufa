<?php
session_start();


include '../../../backend/config/db.php';


// Link create here

if (isset($_POST['createlink'])) {

    $name = $_POST['name'];
    $link = $_POST['link'];
    $icon = $_POST['icon'];

    if ($name && $link && $icon) {
        $query = "INSERT INTO links (name,address,icon) VALUES ('$name','$link','$icon')";

        mysqli_query($db_connect, $query);
        $_SESSION['create_success'] = "New Link Added Successfull!";
        header('location: home.php');
    } else {
        $_SESSION['create_fail'] = "New Link Added fail!";
        header('location: home.php');
    }
}

// Link Delete here

if (isset($_GET['deletelink'])) {
    $id = $_GET['deletelink'];
    $delete_query = "DELETE FROM links WHERE id='$id'";
    mysqli_query($db_connect, $delete_query);
    $_SESSION['delete_success'] = "The link successfully deleted!";
    header('location: home.php');
}
// Link status update here

if (isset($_GET['linkstatus'])) {
    $id = $_GET['linkstatus'];

    $query = "SELECT * FROM links WHERE id='$id'";
    $connect = mysqli_query($db_connect, $query);
    $link = mysqli_fetch_assoc($connect);

    if ($link['status'] == 'deactive') {
        $update_query = "UPDATE links SET status='active' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "Link Status Successfully Activated!";
        header('location: home.php');
    } else {
        $update_query = "UPDATE links SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "Link Status Successfully Deactivated!";
        header('location: home.php');
    }

}
// Link Edit here

if (isset($_POST['editlink'])) {

    if (isset($_GET['editlink'])) {
        $id = $_GET['editlink'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $icon = $_POST['icon'];

        if ($name || $address || $icon) {
            $query = "UPDATE links SET name='$name', address='$address', icon='$icon'  WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Link's name Update Successfull!";
            header('location: home.php');
        } else {
            $query = "UPDATE links SET name='$name',address='$address',icon='$icon' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Link Update Successfull!";
            header('location: home.php');
        }
    } else {
        $_SESSION['update_fail'] = "The link updated fail!";
        header('location: home.php');
    }
}


// Skill create here

if (isset($_POST['createskill'])) {

    $degree = $_POST['degree'];
    $year = $_POST['year'];
    $ratio = $_POST['ratio'];

    if ($degree && $year && $ratio) {
        $query = "INSERT INTO education (degree,year,ratio) VALUES ('$degree','$year','$ratio')";
        mysqli_query($db_connect, $query);
        $_SESSION['create_success'] = "New Skill Added Successfull!";
        header('location: home.php');
    } else {
        $_SESSION['create_fail'] = "New Skill Added fail!";
        header('location: home.php');
    }
}

// Skill Delete here

if (isset($_GET['deleteskill'])) {
    $id = $_GET['deleteskill'];
    $delete_query = "DELETE FROM education WHERE id='$id'";
    mysqli_query($db_connect, $delete_query);
    $_SESSION['delete_success'] = "The Skill successfully deleted!";
    header('location: home.php');
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
        header('location: home.php');
    } else {
        $update_query = "UPDATE education SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "The Skill Status Successfully Deactivated!";
        header('location: home.php');
    }

}

// Link Edit here

if (isset($_POST['editskill'])) {

    if (isset($_GET['editskill'])) {
        $id = $_GET['editskill'];
        $degree = $_POST['degree'];
        $year = $_POST['year'];
        $ratio = $_POST['ratio'];

        if ($degree) {
            $query = "UPDATE education SET degree='$degree'  WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Skill's name Update Successfull!";
            header('location: home.php');
        } elseif ($year) {
            $query = "UPDATE education SET link='$year'  WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Skill's year Update Successfull!";
            header('location: home.php');
        } elseif ($ratio) {
            $query = "UPDATE education SET icon='$ratio'  WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Skill's ratio Update Successfull!";
            header('location: home.php');
        } elseif ($degree && $year && $ratio) {
            $query = "UPDATE education SET degree='$degree',year='$year',ratio='$ratio' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Skill Update Successfull!";
            header('location: home.php');
        } else {
            $_SESSION['update_fail'] = "The Skill updated fail!";
            header('location: home.php');
        }
    }
}
