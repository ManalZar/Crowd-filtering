<?php
include_once 'db_connection.php';
$tab=$_GET["tab"];
$name =$_GET["name"];
$sql = "DELETE FROM $tab WHERE $name='" . $_GET["id"] . "'";
if (mysqli_query($conn, $sql)) {
    //echo "Record deleted successfully";
    header('Location: dashboard.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
mysqli_close($conn);
?>