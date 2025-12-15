<?php
$bloodErr = "";
$blood = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (!isset($_POST["blood"]) || $_POST["blood"] == "") {
        $bloodErr = "Blood group must be selected";
    } else {
        $blood = $_POST["blood"];
    }
}
?>
<html>
<head>
    <title>blood</title>
</head>
<body>

<form method="post">
    <fieldset>
        <legend>Blood Group</legend>

        <select name="blood">
            <option value="">Select</option>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select>

        <br>
        <span style="color:red"><?php echo $bloodErr; ?></span>
        <br><br>

        <input type="submit" value="Submit">
    </fieldset>
</form>

</body>
</html>
