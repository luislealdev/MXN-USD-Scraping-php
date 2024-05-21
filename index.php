<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Pesos a Dolares</title>
</head>

<body>
    <main>
        <h1>Conversor de Pesos a Dolares</h1>
        <form method="GET">
            <input type="number" name="pesos" placeholder="Ingrese los Pesos a convertir" required>
            <button type="submit">Convertir</button>
        </form>

        <?php
        if (isset($_GET['pesos'])) {
            $pesos = $_GET['pesos'];
            $url = 'https://www.xe.com/currencyconverter/convert/?Amount=' . $pesos  . '&From=MXN&To=USD';
            $result = file_get_contents($url);
            $result = explode('<span class="faded-digits">', $result)[0];
            $result = explode('<p class="sc-1c293993-1 fxoXHw">', $result)[1];
            echo "<p>{$pesos} pesos son {$result} dólares.</p>";
        };
        ?>
    </main>
</body>

</html>