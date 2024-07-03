<?php   
include '../includes/config.php';

// Check if form is submitted and process update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    
    $eventName = mysqli_real_escape_string($conn, $_POST['event_name']);
    $eventDescription = mysqli_real_escape_string($conn, $_POST['event_description']);
    $eventDate = mysqli_real_escape_string($conn, $_POST['event_date']);


    $img_name = $_FILES['event_image']['name'];
    $img_size = $_FILES['event_image']['size'];
    $tmp_name = $_FILES['event_image']['tmp_name'];
    $error = $_FILES['event_image']['error'];

    if ($error === 0) {
        if ($img_size > 1250000) {
            $em = "Sorry, your file is too large.";
            header("Location: index.php?error=$em");
            exit();
        } else {
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);
            $allowed_exs = array("jpg", "jpeg", "png");

            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                $img_upload_path = '../uploads/' . $new_img_name;

                if (move_uploaded_file($tmp_name, $img_upload_path)) {
                    // Update event details in the database
                    $sql = "UPDATE event SET `event_name`='$eventName', `description`='$eventDescription', `date`='$eventDate', `event_img`='$new_img_name' WHERE `event_id` = '$event_id'";

                    if (mysqli_query($conn, $sql)) {
                        header("Location: index.php"); // Redirect to view page after successful update
                        exit();
                    } else {
                        $em = "Error: " . mysqli_error($conn);
                        header("Location: index.php?error=$em");
                        exit();
                    }
                } else {
                    $em = "Failed to upload image.";
                    header("Location: index.php?error=$em");
                    exit();
                }
            } else {
                $em = "You can't upload files of this type.";
                header("Location: index.php?error=$em");
                exit();
            }
        }
    } else {
        $em = "Unknown error occurred!";
        header("Location: index.php?error=$em");
        exit();
    }
}

// Fetch event details for update if event_id is set
if (isset($_GET['id'])) {
    $event_id = $_GET['id'];
    $sql = "SELECT * FROM `event` WHERE `event_id`='$event_id'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $event_image = $row['event_img'];
            $event_name = $row['event_name'];
            $event_description = $row['description'];
            $event_date = $row['date'];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Event Registration</title>
    <link rel="stylesheet" href="../src/css/event_registration.css">
</head>
<body>
    <div class="container">
        <h2>Event Registration</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="input-group">
                <label for="event_image">Event Image</label>
                <input type="file" id="event_image" name="event_image" accept="image/*" required>
            </div>
            <div class="input-group">
                <label for="event_name">Event Name</label>
                <input type="text" id="event_name" name="event_name" required value="<?php echo $event_name; ?>">
                <input type="hidden" id="event_id" name="event_id" value="<?php echo $event_id; ?>">
            </div>
            <div class="input-group">
                <label for="event_description">Event Description (Max 20 words)</label>
                <textarea id="event_description" name="event_description" maxlength="100" required><?php echo $event_description; ?></textarea>
            </div>
            <div class="input-group">
                <label for="event_date">Event Date</label>
                <input type="date" id="event_date" name="event_date" required value="<?php echo $event_date; ?>">
            </div>
            <button type="submit" name="submit">Update</button>
        </form>
    </div>
</body>
</html>
