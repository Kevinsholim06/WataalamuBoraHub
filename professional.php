<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login.css">
    <title>registration</title>


</head>

<body>
    <?php
    $nameError = $emailError = $telError = $genderErro = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valid = true;

        if (empty($_POST["email"])) {
            $valid = false;
            $emailError = "* Email is required";
        }

        if (empty($_POST["tel"])) {
            $valid = false;
            $telError = "* Mobile no is required";
        } else {

            if (!preg_match("/^[0-9]*$/", $tel)) {
                $valid = false;
                $telError = "* Only numeric value is allowed.";
            }
        }

        if (empty($_POST["gender"])) {
            $valid = false;
            $genderError = "* Gender is required";
        }
        if ($valid) {
            header('location:app.php');
            exit();
        }
    }
    ?>


    <div class="container">
        <h2>Wataalamu Registration</h2>
        <form action="" method="post">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter email"><br>
            <span class="error"><?php echo " $emailError"; ?> </span><br>

            <label for="phone">Enter phone number</label>
            <input type="tel" name="phone" id="phone" placeholder="Enter phone number"><br>
            <span class="error"><?php echo "$mobilenoError"; ?> </span><br>

            <label for="FirstName">First Name</label><br>
            <input type="text" name="FirstName" id="FirstName" placeholder="Enter first name"><br>
            <span class="error"><?php echo " $nameError"; ?> </span><br>

            <label for="LastName">Last Name</label><br>
            <input type="text" name="LastName" id="LastName" placeholder="Enter last name"><br>
            <span class="error"> <?php echo " $nameError"; ?> </span><br>

            <label for="location">Enter your city</label>
            <select name="location" id="location">
                <option value="Nairobi">Nairobi</option>
                <option value="eldoret">Eldoret</option>
                <option value="mombasa">mombasa</option>
                <option value="kisumu">Kisumu</option>
                <option value="nyeri">Nyeri</option>
                <option value="thika">thika</option>
            </select><br>


            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="male">
            <label for="male">Male</label>
            <input type="radio" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" name="gender" value="other">
            <label for="other">Other</label><br>
            <span class="error"><?php echo "$genderError"; ?> </span><br>

            <label for="password1">Enter password</label>
            <input type="password" name="password1" id="password1" required><br>
            <label for="password2">Re-enter password</label>
            <input type="password" name="password2" id="password2" required><br>

            <input type="submit" name="submit" id="submit"><br>

            <a href="/client.php">Register as a client</a>

        </form>

    </div>
</body>

</html>