<html>
<head>
    <title>VAT Calculator</title>
</head>
<body>

<form method="post">
    Enter Amount: <input type="number" name="amount" required>
    <input type="submit" value="Calculate VAT">
</form>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $amount = $_POST["amount"];
    $vat = $amount * 0.15;
    $total = $amount + $vat;

    echo "<h3>Amount: $amount</h3>";
    echo "<h3>VAT (15%): $vat</h3>";
    echo "<h3>Total with VAT: $total</h3>";
}
?>

</body>
</html>
