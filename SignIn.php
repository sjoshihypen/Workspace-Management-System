<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Signup Form</title>
    <!-- CSS -->
    <link rel = "stylesheet" href="Sign-up-sheet.css">
    
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<body>
    <section class = "container forms">
        <div class = "form login">
            <div class = "form-content">
                <header>Login</header>
                
                <!-- Sign In Form -->
                
                <form action="SignInback.php" method="post">
                    
                    <div class = "field input-field">
                        <input type = "email" placeholder = "Email" class = "input" required>
                    </div>

                    <div class = "field input-field">
                        <input type = "password" placeholder = "Password" class = "password" required>
                        <i class='bx bx-hide eye-icon'></i>
                    </div>

                    <!-- <div class="form-link">
                        <a href = "#" class="Forget-Password">Forget Password?</a>
                    </div> -->

                    <div class = "field button-field">
                        <button>Login</button>
                    </div>
                </form>
                <div class="form-link">
                        <span>Do not have an account?<a href = "#" class = "link signup-link">Signup</a></span>
                    </div>
                </div>
            </section>
        </div>
         <!-- JavaScript -->
    <script src = "script.js"></script>

</body>
</html>