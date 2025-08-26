<?php 

include 'connect.php';

if(isset($_POST['signUp'])){
    $fName = $_POST['fName'];
    $lName = $_POST['lName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        echo "<script>
                alert('Email already registered');
                window.location.href='login.php'; // Replace with the page you want to redirect to after the confirmation
              </script>";
    } else {
        $insertQuery = "INSERT INTO users(fName, lName, email, password)
                        VALUES ('$fName', '$lName', '$email', '$hashedPassword')";
        if($conn->query($insertQuery) === TRUE){
            header("location: package.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows == 0) {
        echo "<script>
                alert('Incorrect Email');
                window.location.href='login.php'; // Replace with the page you want to redirect to after the confirmation
              </script>";
    } else {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];
        
        if (!password_verify($password, $hashedPassword)) {
            echo "<script>
                    alert('Incorrect Password');
                    window.location.href='login.php'; // Replace with the page you want to redirect to after the confirmation
                  </script>";
        } else {
            session_start();
            $_SESSION['email'] = $row['email'];
            header("Location: package.php");
            exit();
        }
    }
}
?> 
