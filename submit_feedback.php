<?php
session_start();
ob_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connect.php");

if (isset($_POST['submit_feedback'])) {

    // ✅ Check how your login stores session
    if (isset($_SESSION['email'])) {
        $user_email = $_SESSION['email'];
    } elseif (isset($_SESSION['user_email'])) {
        $user_email = $_SESSION['user_email'];
    } elseif (!empty($_POST['user_email'])) {
        $user_email = mysqli_real_escape_string($conn, $_POST['user_email']);
    } else {
        echo "<script>
            alert('❌ Error: User email not found');
            window.location.href='package.php';
        </script>";
        exit;
    }

    $subject = mysqli_real_escape_string($conn, $_POST['subject']);
    $feedback_text = mysqli_real_escape_string($conn, $_POST['feedback_text']);

    $sql = "INSERT INTO feedbacks (user_email, subject, feedback_text, created_at) 
            VALUES ('$user_email', '$subject', '$feedback_text', NOW())";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('✅ Feedback submitted successfully');
            window.location.href='package.php';
        </script>";
    } else {
        echo "<script>
            alert('❌ Error submitting feedback');
            window.location.href='package.php';
        </script>";
    }
}
?>
