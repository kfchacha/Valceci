<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
    
</head>
<body>
    <section class="logheader">
        <div class="loginbox">
            <img src="images/images.png" class="avatar">
            <h1>Login Here</h1>
            <form action="logincon1.php" id="login" method="post">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username" >
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter password" required>
                <input type="submit" id='login1' name="login1" value="login">
                <a href="#">Lost your password?</a><br>
                <a href="signupform.php">Don't have an account?</a>
                
             </form>



        </div>





    </section>    
    
</body>
</html>
