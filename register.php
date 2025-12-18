<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
   <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <nav> 
        
    </nav>
    <section class="sectionForm">
        <h1>Registration Form</h1>
            <form action="" method="POST">
                    <!-- Voer hier uw voornaam in. -->
                <label for="fName">First Name:</label> <br>
                <input type="text" id="fName" name="firstName" placeholder="Your FirstName" minlength="4" maxlength="32" required><br><br>

                    <!-- Voer hier uw achternaam in. -->
                <label for="lName">Last Name:</label> <br>
                <input type="text" id="lName" name="lastName" placeholder="Your LastName" minlength="4" maxlength="32" required><br><br>

                    <!-- Voer hier uw telefoon nummer in. -->
                <label for="cNumber">Contact Number:</label> <br>
                <input type="tel" id="cNumber" name="contactNumber" placeholder="Your Contact Number" minlength="4" maxlength="32" required> <br><br>
                
                    <!-- Voer hier uw email in. -->
                <label for="email">Email:</label> <br>
                <input type="email" id="email" name="email" placeholder="Your Email" minlength="4" maxlength="32" required> <br><br>

                    <!-- Voer hier uw gebruikersnaam in. -->
                <label for="uName">Username:</label> <br>
                <input type="text" id="uName" name="userName" placeholder="Your UserName" minlength="4" maxlength="32" required><br><br>

                     <!-- Voer hier uw wachtwoord in. -->
                <label for="password">Password:</label> <br>
                <input type="password" id="password" name="password" placeholder="Your Password" minlength="4" maxlength="32" required><br><br>
                    <!-- een link om naar de inlog page. -->
                <a href="inlog.php"><--Back</a> <br><br>
                
                    <!-- een button om een account te maken op de webpage. -->
                <button type="submit">
                    Register
                </button>
            </form>          
    </section>
</body>
</html>
