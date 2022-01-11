<?php
include 'connect_crud.php';
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    $sql = "delete from name_artist where id_artist=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo "Deleted successfully";
    } else {
        die(mysqli_error($con));
    }
}
