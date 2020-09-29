<?php 

define ('EUR_CZK', 27);
$amount = filter_input(INPUT_POST, 'amount');
$switch = filter_input(INPUT_POST, 'switch');
$final = $amount * EUR_CZK;


if($switch == 'czk_eur' )
 ($final = $amount / 27);
else ($final = $amount);
 

$eur = filter_input(INPUT_POST, 'eur');
$czk = 26.95;
$sub = filter_input(INPUT_POST, 'odeslat');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Převody</title>
</head>
<body>

<?php
if (isset($sub)) { ?>
   Výsledek v Kč: <?= $eur * $czk ?>
<?php
} else { ?>
    <form action="index.php" method="post">
Převod:    <input type="text" name="eur" id="eur"> <br>
        <input type="submit" value="odeslat" name="odeslat">


    <input type="radio" name="switch" id="eur">EUR->CZK
    <input type="radio" name="switch" id="czk">CZK->EUR
    </form>
<?php
} ?>

</body>
</html>