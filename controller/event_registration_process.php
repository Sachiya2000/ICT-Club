<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $eventName = mysqli_real_escape_string($conn, $_POST['event_name']);
    $eventDescription = mysqli_real_escape_string($conn, $_POST['event_description']);
    $eventDate = mysqli_real_escape_string($conn, $_POST['event_date']);

    $img_name = $_FILES['event_image']['name'];
    $img_size = $_FILES['event_image']['size'];
    $tmp_name = $_FILES['event_image']['tmp_name'];
    $error = $_FILES['event_image']['error'];

    if ($error === 0) {
        if ($img_size > 125000) {
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
                    // Insert into Database
                    $sql = "INSERT INTO event (event_img, event_name, description, date) 
                            VALUES ('$new_img_name', '$eventName', '$eventDescription', '$eventDate')";

                    if (mysqli_query($conn, $sql)) {
                        header("Location: ../admin/event_registration.php?success=1");
                        exit();
                    } else {
                        $em = "Error: " . mysqli_error($conn);
                        header("Location: ../admin/event_registration.php?error=$em");
                        exit();
                    }
                } else {
                    $em = "Failed to upload image.";
                    header("Location: ../admin/event_registration.php?error=$em");
                    exit();
                }
            } else {
                $em = "You can't upload files of this type.";
                header("Location: ../admin/event_registration.php?error=$em");
                exit();
            }
        }
    } else {
        $em = "Unknown error occurred!";
        header("Location: ../admin/event_registration.php?error=$em");
        exit();
    }
} else {
    header("Location: ../admin/event_registration.php");
    exit();
}
?>
