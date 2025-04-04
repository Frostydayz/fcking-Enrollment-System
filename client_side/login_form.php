<!DOCTYPE html>
<html>

<head>
    <meta ssrset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/login_form.css">
</head>

<body>  
    <div class="main"> 

        <div class="header">
             <h2>Lucena South II Elementary School</h2>
        </div>
 
        <div id="logo-container">
            <img src="../imgs/R(1).png" 
            alt="School Logo" id="school-logo">
        </div>

        <div class = "page-title">
             <h3>Log-In</h3>
             <BR>
             <hr>
        </div>

       <div class="form-container">
            <br>
            <div class="error-msg">
                <span class="em-login"> Error Message Here </span>
            </div>
           <form action="" method="post">
               <div class="box">
                   <BR>
                   <input type="text" id="email" name="email" placeholder="Email Address* " required>
                   <BR>
                   <input type="password" id="password" name="password" placeholder="Password* "  required>
                </div>
                
                <div class="wrap">
                    <button type="submit">
                        Submit
                    </button>
                </div>
            </form>
        </div>
        
        <p>Don't have an account?
            <a href="#" class="register" style="text-decoration: none;">
                Create a New Account.
            </a>
        </p>
    </div>

    <div class="vlorange"></div>
    <div class="vlyellow"></div>

    <div id="img-container">
        <img src="../imgs/student.jpg" 
        alt="student" id="student">
    </div>

</body>
</html>
