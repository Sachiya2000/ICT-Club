<?php
include '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['username'], $_POST['password']) && !empty($_POST['username']) && !empty($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $stmt = $conn->prepare("SELECT id, username FROM admin WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['username'] = $row['username'];

            header("Location: ../admin/dashboard.php");
            exit();
        } else {
            header("Location: ../admin/login.php?error=invalid_credentials");
            exit();
        }

        $stmt->close();
    } else {
        header("Location: ../admin/login.php?error=missing_fields");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}
?>
