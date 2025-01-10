<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id']; // Directly retrieve the `id` from the URL
    $sql = "DELETE FROM items WHERE id = '$id'"; // Basic SQL query
    $result=mysqli_query($conn, $sql);
    if ($result) {
        echo "Record deleted successfully.";
        header("location:view.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "No ID provided.";
}
?>
