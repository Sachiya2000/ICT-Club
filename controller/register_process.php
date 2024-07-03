<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'], $_POST['email'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];

       

        $stmt = $conn->prepare("INSERT INTO admin (username, email, password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $username, $email, $password);

        if ($stmt->execute()) {
            header("Location: ../admin/login.php");
            exit();
        } else {
            header("Location: ../admin/register.php?error=registration_failed");
            exit();
        }

        $stmt->close();
        $conn->close();
    } else {
        header("Location: ../admin/register.php?error=missing_fields");
        exit();
    }
} else {
    header("Location: register.php");
    exit();
}
?>
