<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/login.css">
    <title>Login</title>
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
        <h2>Wataalamu Log in</h2>
        <form action="" method="post">
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email" placeholder="Enter email"><br>
            <span> <?php echo $emailError; ?></span><br>

            <label for="password">password:</label><br>
            <input type="password" name="password" id="password" required><br>

            <input type="submit" value="submit" id="submit"><br>
            <a href="/professional.php">Dont have an account?</a><br>

        </form>
    </div>
</body>

</html>