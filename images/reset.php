<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <style>
    /* Style the close button */
    .close {
      position: absolute;
      top: 0;
      right: 0;
      padding: 50px;
      cursor: pointer;
      
    }
  </style>
</head>
<body>
<div class="container" id="recovery">
        <h1 class="form-title">Recovery Password</h1>
        <form method="post" action="reset.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              <label for="email">Email</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required pattern="^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,8}$" title="Password must be 8 characters long and contain at least one lowercase letter, one uppercase letter, one number, and one special character">
              <label for="password">Password</label>
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="cpassword" name="cpassword" id="cpassword" placeholder="Password" required pattern="^(?=.[a-z])(?=.[A-Z])(?=.\d)(?=.[@$!%?&])[A-Za-z\d@$!%?&]{8,8}$" title="Password must be 8 characters long and contain at least one lowercase letter, one uppercase letter, one number, and one special character">
              <label for="cpassword">Confirm Password</label>
          </div>
          
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        
        <span class="close" onclick="closeAndRedirect() ">
    <i class="fas fa-times fa-3x"></i>
  </span>
      </div>
      <script src="script.js"></script>
      <script>
  // Function to close the login form
  function closeAndRedirect() {
  window.location.href = "frontpage.html";
}
</script>
</body>
</html>