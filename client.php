<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login.css">
    <title>ClientLogin</title>
</head>

<body>
    <?php
    $nameError = $emailError = $telError = $genderError = "";
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
        <h2>Wataalamu</h2>
        <form action="" method="post">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter email"><br>
            <span> <?php echo $emailError; ?> </span><br>

            <label for="tel">Mobile number</label><br>
            <input type="tel" name="tel"><br>
            <span><?php echo $telError; ?></span><br>
            <label for="password1">Enter password</label><br>
            <input type="password" name="password1" id="password1" required><br>

            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other <br>
            <span class="error"> <?php echo $genderError; ?> </span><br>

            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>

</html>