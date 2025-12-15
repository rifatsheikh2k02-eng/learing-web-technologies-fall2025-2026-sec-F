<?php
$dobErr = "";
$dd = $mm = $yy = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yy"])) {
        $dobErr = "Date of birth cannot be empty";
    } else {
        $dd = $_POST["dd"];
        $mm = $_POST["mm"];
        $yy = $_POST["yy"];

        if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yy < 1953 || $yy > 1998) {
            $dobErr = "Invalid date of birth";
        }
    }
}
?>
<html>
<head>
    <title>DOB</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Date of Birth</legend>

        <input type="number" name="dd" placeholder="DD" size="2">
        <input type="number" name="mm" placeholder="MM" size="2">
        <input type="number" name="yy" placeholder="YYYY" size="4">

        <span style="color:red"><?php echo $dobErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
