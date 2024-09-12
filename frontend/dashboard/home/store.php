<?php

include '../../../backend/config/db.php';



// Admin Delete here

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete_query = "DELETE FROM admins WHERE id='$id'";
    mysqli_query($db_connect, $delete_query);
    $_SESSION['delete_success'] = "The Admins successfully deleted!";
    header('location: ./home.php');
}