<?php
$emailErr = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["email"])) {
        $emailErr = "Email cannot be empty";
    } else {
        $email = $_POST["email"];

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email address";
        }
    }
}
?>
<html>
<head>
    <title>email</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Email</legend>
        <input type="text" name="email">
        <span style="color:red"><?php echo $emailErr; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
