<!doctype html>
<head>
    <title>My own website</title>
</head>
<body>
    <h1>Idk what i'm doing man i'm just making a website</h1>
    <h2>Wanna know how much fuel to use in mc? Lmao its useless but here</h2>
    <form method="post">
    <p>
        <input type="text" name="fuel" id="fuel" required="required">What fuel are you using?</input>
    </p>
    <p>
        <input type="number" name="amount" id="amount" required="required">How much do you want to smelt/cook?</input>
    </p>
    <button name="start">Calculate</button>
<?php
$fuel = $_POST['fuel'];
$amount = $_POST['amount'];
$start = $_POST['start'];
if ($start == true) {
    if ($fuel == "Coal" || $fuel == "Lava" || $fuel == "Wood planks" || $fuel == "Sticks" || $fuel == "Coal block" || $fuel == "Charcoal" || $fuel == "Logs") {
    } else {
        echo '<h2>That isnt a valid fuel source</h2>';
        exit;
    }
    $amount = $amount / 64;
    if ($fuel == "Lava") {
        $use = $amount * 0.64;
    } elseif ($fuel == "Coal block") {
        $use = $amount * 0.8;
    } elseif ($fuel == "Coal" || $fuel == "Charcoal") {
        $use = $amount * 8;
    } elseif ($fuel == "Wood planks" || $fuel == "Logs") {
        $use = $amount * 42.67;
    } elseif ($fuel == "Sticks") {
        $use = $amount * 128;
    }
    echo "You need at least ". ceil($use) . "$fuel to burn it all";
} 