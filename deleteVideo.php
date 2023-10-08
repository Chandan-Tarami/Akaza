<?php

// Establish database connection
$conn = new mysqli("localhost", "root", "", "akaza");

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if vid_id is set in the URL
if (isset($_GET['vid_id'])) {
    // Get the vid_id from the URL
    $vid_id = $_GET['vid_id'];

    // Prepare SQL statement to delete the record
    $sql = "DELETE FROM anime_list WHERE vid_id = ?";
    $stmt = $conn->prepare($sql);

    // Bind parameters and execute the statement
    $stmt->bind_param("i", $vid_id);
    $stmt->execute();

    // Close the prepared statement and database connection
    $stmt->close();
    $conn->close();

    // Redirect back to the original page after deletion
    header("Location: adminpanel.php");
    exit();
} else {
    // Redirect to an error page if vid_id is not set in the URL
    header("Location: error_page.php");
    exit();
}
?>
