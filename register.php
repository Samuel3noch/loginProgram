<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register page</title>
</head>
<body>
    <nav> 

    </nav>
    <section>
        <h1>Registration Form</h1>
            <form>
                    <!-- Voer hier uw voornaam in. -->
                <label for="fName">First Name:</label> <br>
                <input type="text" id="fName" name="fName"><br><br>

                    <!-- Voer hier uw achternaam in. -->
                <label for="lName">Last Name:</label> <br>
                <input type="text" id="lName" name="lName"><br><br>

                    <!-- Voer hier uw telefoon nummer in. -->
                <label for="cNumber">Contact Number:</label> <br>
                <input type="integer" id="cNumber" name="cNumber"> <br><br>
                
                    <!-- Voer hier uw email in. -->
                <label for="email">Email:</label> <br>
                <input type="email" id="email" name="email"> <br><br>

                    <!-- Voer hier uw gebruikersnaam in. -->
                <label for="fname">Username:</label> <br>
                <input type="text" id="uname" name="uname"><br><br>

                     <!-- Voer hier uw wachtwoord in. -->
                <label for="fname">Password:</label> <br>
                <input type="password" id="pname" name="pname"><br><br>
            </form>

            <a href="inlog.php"><--Back</a> <br><br>
            <button>
                Register
            </button>
    </section>
</body>
</html>