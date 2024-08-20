<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Veracity University</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>



    <header class="header">
        <nav class="navbar">
            <a href="#">Home</a>
            <a href="#">About</a>
            <a href="#">Service</a>
            <a href="#">Contact</a>
        </nav>





        <div class="dropdown">
            <button class="dropbtn">Courses</button>
            <div class="dropdown-content">
                <div class="dropdown-line"></div>
                <a href="#">Link 1</a>
                <div class="dropdown-line"></div>
                <a href="#">Link 2</a>
                <div class="dropdown-line"></div>
                <a href="#">Link 3</a>
                <div class="dropdown-line"></div>
            </div>
        </div>




        <form action="#" class="search-bar">
            <input type="text" placeholder="Search">
            <button type="submit"><i class='bx bx-search-alt-2'></i></button>
        </form>
    </header>




    <div class="background"></div>





    <div class="container">
        <div class="content">

            <h2 class="logo"><i class='bx bxl-pocket'></i>VM</h2>
            <div class="text-sci">

                <h2>Welcome! <br><span>to Veracity University.</span></h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati a nobis placeat facere impedit
                    quam consequuntur, consectetur aliquam quos odit eos ipsam vero! Sint exercitationem sapiente quis
                    harum quam inventore.</p>

                <div class="social-icons">
                    <a href="#"><i class='bx bxl-linkedin-square'></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-google'></i></a>
                </div>
            </div>
        </div>



        <div class="log-reg-box">
            <div class="form-box login">
                <form action="verify_signup.php" method="post">

                    <h2>Sign in</h2>


                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" id="email" name="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bx-dialpad'></i></span>
                        <input type="password" id="password" name="password" required>
                        <label>Password</label>
                    </div>

                    <!-- Display error message if exists -->
                    <?php
            if (isset($_SESSION['error'])) {
                echo '<div style="color: red;
                
                 margin-bottom: 30px;
                 border-radius: 5px;
                 text-align: center;">' . $_SESSION['error'] . '</div>';
                unset($_SESSION['error']); // Clear the error message after displaying it
            }
            ?>

                    <div class="remember-forgot">
                        <label><input type="checkbox">Remember me</label>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" name="submit" class="btn">Sign in</button>

                    <div class="login_register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>

            </div>


            <div class="form-box register">
                <form action="#">
                    <h2>Sign Up</h2>

                    <div class="input-box">
                        <span class="icon"><i class='bx bx-user-circle'></i></i></span>
                        <input type="text" required>
                        <label>Username</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bx-dialpad'></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>

                    <div class="remember-forgot">
                        <label><input type="checkbox">I agree the terms & conditions</label>

                    </div>

                    <button type="submit" class="btn">Sign Up</button>

                    <div class="login_register">
                        <p>Already have an account? <a href="#" class="login-link">Sign In</a></p>
                    </div>
                </form>
            </div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
        </script>
        <script src="tool.js"></script>

</body>




</html>