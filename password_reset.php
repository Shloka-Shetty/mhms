<?php
require_once "connect.php";

$email_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $new_password = $_POST["password"];

    // Hash the new password
    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    // Update the password in the database
    $sql = "UPDATE users SET password = ? WHERE email = ?";
    $stmt = mysqli_prepare($link, $sql);
    mysqli_stmt_bind_param($stmt, "ss", $hashed_password, $email);
    mysqli_stmt_execute($stmt);

    // Check if password was updated successfully
    if (mysqli_stmt_affected_rows($stmt) > 0) {
        // Password reset successfully
        echo "<script>alert('Password reset successfully.');</script>";
        echo "<script>window.location.href = 'login.php';</script>";
    } else {
        // Username not found
        $email_err = "Email not found.";
    }

    mysqli_stmt_close($stmt);
    mysqli_close($link);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
         .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 10px;
      cursor: pointer;
    }

       

        .error {
            color: red;
        }

       

       
    </style>
</head>
<body>
<div class="container" >
<h1 class="form-title">Password Reset</h1>
   <form method="post" action="">
   <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <span class="error"><?php echo $email_err; ?></span>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" maxlength="16" required pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$" title="Password must be at least 8 characters long and contain at least one lowercase letter, one uppercase letter, one number, and one special character">
            <label for="password">Password</label>
        </div>
        <input type="submit" class="btn" value="Reset Password" >
        </form>
        
      <p class="or">
        ---------------------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      </div>
<div>
<span class="close" onclick="closeAndRedirect() ">
    <i class="fas fa-times fa-3x"></i>
  </span>

</div>
     

<script src="script.js"></script>
      <script>
  // Function to close the login form
  function closeAndRedirect() {
  window.location.href = "index.php";
}
</script>

</body>

</html>
