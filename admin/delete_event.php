<?php  
include '../includes/config.php';

if (isset($_GET['id'])) {
    $event_id = $_GET['id'];

    // Delete the event from the database
    $sql = "DELETE FROM event WHERE event_id = '$event_id'";

    if (mysqli_query($conn, $sql)) {
        header("Location: ./admin/previous_events.php"); // Redirect to previous events page after successful deletion
        exit();
    } else {
        echo "Error deleting event: " . mysqli_error($conn);
    }
} else {
    echo "Event ID not specified.";
}
?>
