<!DOCTYPE html>
<html>
<head>
    <title>Primzahlenrechner</title>
</head>
<body>
    <form method="post" action="">
        <label for="Primzahl">Primzahl eingeben:</label>
        <input type="text" id="Primzahl" name="Primzahl"><br><br>
        
        <input type="submit" name="berechnen" value="Berechnen">
    </form>

    <?php
    if (isset($_POST['berechnen'])) {
        $zahl = $_POST['Primzahl'];
        echo "Primzahlen von 0 bis $zahl <br>";
        for ($checker = 2; $checker <= $zahl; $checker++) {
            $isPrime = true;
            for ($i = 2; $i <= $checker/2; $i++) {
                if ($checker % $i == 0) {
                    $isPrime = false;
                    break;
                }
            }
            if ($isPrime) {
                echo $checker . " ";
            }
        }
    }
    ?>
</body>
</html>