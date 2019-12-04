<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="styles.css">
<title> Bit Acedamy </title>
</head>
<body>

<h1 class="rainbow"> Baasketballen #1 </h1>
<img src="img_hamster1.jpg" width="150" height="150">
<h1 class="rainbow"> Voetballen #2 </h1>
<img src="img_hamster3.jpg" width="150" height="150">
<h1 class="rainbow"> Hokey #3 </h1>
<img src="img_hamster2.jpg" width="150" height="150">

<form action="" method="post" class="form-example">
    <div class="form-example">
        <input name="User" type="number" placeholder="welke actievitijd wil je selecteren" id="num" required min="1" max="3" maxlength="1">
    </div>
    <div class="form-example">
        <input name="Button" type="submit" value="Commitment!" id="sub">
    </div>
</form>

<?php
if(isset($_POST["Button"])){
if(isset($_POST["User"]) < 1 || isset($_POST["User"]) > 3){
exit("Wel een goede keuze maken hé.");
    } else { setcookie("koekjes", $_POST["User"]); }
    header("refresh: 0 ");
}

if (isset($_COOKIE["koekjes"])){
    echo("YAY je hebt sport") . " " . "#" .$_COOKIE["koekjes"]. " " . "gekozen";
}

?>

</body>
</html>