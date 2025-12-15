<?php
$degreeErr = "";
$degree = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST["degree"]) || count($_POST["degree"]) < 2) {
        $degreeErr = "At least two degrees must be selected";
    } else {
        $degree = $_POST["degree"];
    }
}
?>
<html>
<head>
    <title>degree</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Degree</legend>

        <input type="checkbox" name="degree[]" value="SSC"> SSC
        <input type="checkbox" name="degree[]" value="HSC"> HSC
        <input type="checkbox" name="degree[]" value="BSc"> BSc
        <input type="checkbox" name="degree[]" value="MSc"> MSc

        <br>
        <span style="color:red"><?php echo $degreeErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
