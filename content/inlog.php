<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
   <link rel="stylesheet" href="/loginProgram/style.css">
</head>
<body>
    <nav> 
        <h1><a href="/loginProgram/index.php">Home</a></h1>
    </nav>
    <section>
        <h1> Login form </h1>
            <form action="" method="POST">
                     <!-- Voer hier uw gebruikersnaam in. -->
                <label for="uName">Username:</label> <br>
                <input type="text" id="userNameInlog" name="userName" minlength="6" maxlength="64" placeholder="Your Username" required><br><br>

                    <!-- Voer hier uw wachtwoord in. -->
                <label for="password">Password:</label> <br>
                <input type="password" id="userpassword" name="password" minlength="6" maxlength="64" placeholder="Your Password" required><br><br>

                    <!-- een link om naar de register page te gaan. -->
                <a href="register.php">No account? Register Here.</a> <br><br>

                    <!-- een button om in te loggen op de webpage. -->
                <button type="submit">
                    Login
                </button>
            </form>      
    </section>
</body>
</html>