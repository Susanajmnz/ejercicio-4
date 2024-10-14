<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cantidad = $_POST['cantidad'];
    $divisaDesde = $_POST['divisaDesde'];
    $divisaA = $_POST['divisaA'];

    // Tasas de conversión
    $tasas = [
        "EUR" => 1.0,
        "USD" => 1.1,   
        "GBP" => 0.85,  
        "CNY" => 7.5
    ];

    // Conversión
    $resultado = 0;

    if ($divisaDesde != $divisaA) {
        switch ($divisaDesde) {
            case "EUR":
                $resultado = $cantidad * $tasas[$divisaA];
                break;
            case "USD":
                $resultado = $cantidad / $tasas["USD"] * $tasas[$divisaA];
                break;
            case "GBP":
                $resultado = $cantidad / $tasas["GBP"] * $tasas[$divisaA];
                break;
            case "CNY":
                $resultado = $cantidad / $tasas["CNY"] * $tasas[$divisaA];
                break;
        }
    } else {
        $resultado = $cantidad; 
    }

    echo "<h3>Resultado:</h3>";
    echo "<p>$cantidad $divisaDesde es igual a $resultado $divisaA</p>";
    echo "<a href='index.php'>Volver</a>"; 
}
?>
