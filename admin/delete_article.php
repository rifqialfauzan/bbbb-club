<?php include "../connection/config.php"; ?>

<?php 

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM article WHERE id=$id";

    if ($conn->query($sql)) {
        echo "Article deleted successfully!";
        header("Location: ../admin/index.php");
    }else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
