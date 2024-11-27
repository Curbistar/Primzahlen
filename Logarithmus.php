<!DOCTYPE html>
<html>
<head>
    <title>Logarithmus</title>
    <style>
        .log-curve {
            font-size: 3pt;
            white-space: pre;
        }
    </style>
</head>

<body>
    <form method="post" action="">
        <label for="Grundzahl">Grundzahl eingeben:</label>
        <input type="text" id="Grundzahl" name="Grundzahl"><br><br>
        
        <label for="Multiplikator">Multiplikator eingeben:</label>
        <input type="text" id="Multiplikator" name="Multiplikator"><br><br>

        <input type="submit" name="berechnen" value="Berechnen"><br><br>
    </form>

    <?php
    if (isset($_POST['berechnen'])) {
        $base = $_POST['Grundzahl'];
        $multiplier = $_POST['Multiplikator'];
        
        for ($i = 1; $i <= 100; $i++) {
            $logValue = log($i * $multiplier) / log($base); // Logarithmus zur Basis $base^
            $stars  = str_repeat('*', round($logValue * $multiplier));
            echo  "<div class='log-curve'>$stars</div>" ;
        }
    }
    ?>
</body>
</html>