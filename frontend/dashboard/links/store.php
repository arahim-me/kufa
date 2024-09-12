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
        header('location: links.php');
    } else {
        $_SESSION['create_fail'] = "New Link Added fail!";
        header('location: links.php');
    }
}

// Link Delete here

if (isset($_GET['deletelink'])) {
    $id = $_GET['deletelink'];
    $delete_query = "DELETE FROM links WHERE id='$id'";
    mysqli_query($db_connect, $delete_query);
    $_SESSION['delete_success'] = "The link successfully deleted!";
    header('location: links.php');
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
        header('location: links.php');
    } else {
        $update_query = "UPDATE links SET status='deactive' WHERE id='$id'";
        mysqli_query($db_connect, $update_query);

        $_SESSION['update_success'] = "Link Status Successfully Deactivated!";
        header('location: links.php');
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
            header('location: links.php');
        } else {
            $query = "UPDATE links SET name='$name',address='$address',icon='$icon' WHERE id='$id'";
            mysqli_query($db_connect, $query);
            $_SESSION['update_success'] = "The Link Update Successfull!";
            header('location: links.php');
        }
    } else {
        $_SESSION['update_fail'] = "The link updated fail!";
        header('location: links.php');
    }
}

