<?php
$nameErr = "";
$name = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name cannot be empty";
    } else {
        $name = $_POST["name"];

        // Must start with a letter & only allowed characters
        if (!preg_match("/^[A-Za-z][A-Za-z.\- ]*$/", $name)) {
            $nameErr = "Invalid name format";
        }
        // Must contain at least two words
        elseif (str_word_count($name) < 2) {
            $nameErr = "Name must contain at least two words";
        }
    }
}
?>
<html>
<head>
    <title>name</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Name</legend>
        <input type="text" name="name">
        <span style="color:red"><?php echo $nameErr; ?></span>
        <br><br>
        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
