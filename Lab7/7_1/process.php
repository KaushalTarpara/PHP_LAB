<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $accountNumber = $_POST["account_number"];
    $currentBalance = $_POST["current_balance"];
    $amount = $_POST["amount"];
    
    include 'Bank.php';

    $bank = new Bank($accountNumber, $currentBalance);

    if (isset($_POST["deposit"])) {
        $bank->deposit($amount);
    } elseif (isset($_POST["withdraw"])) {
        $bank->withdraw($amount);
    }

    $accountInfo = $bank->getAccountInfo();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Bank Account Operations Result</title>
</head>
<body>
    <h1>Bank Account Operations Result</h1>
    <?php
    if (isset($accountInfo)) {
        echo "<p>{$accountInfo}</p>";
    }

    ?>
    <a href="index.html">Go Back</a>
    <?php
     echo "<hr>Today is " . date("d/m/Y") . "<br>";
     echo "The time is " . date("h:i:sa");
    ?>
</body>
</html>
