<?php
$genderErr = "";
$gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST["gender"])) {
        $genderErr = "At least one option must be selected";
    } else {
        $gender = $_POST["gender"];
    }
}
?>
<html>
<head>
    <title>gender</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Gender</legend>

        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <input type="radio" name="gender" value="Other"> Other

        <br>
        <span style="color:red"><?php echo $genderErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
