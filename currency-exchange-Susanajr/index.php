<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moneda</title>
</head>
<body>

<h2>Conversor de Moneda</h2>

<form action="procesar.php" method="POST">
    <label for="cantidad">Cantidad:</label>
    <input type="number" id="cantidad" name="cantidad" required>
    
    <label for="divisaDesde">Divisa desde:</label>
    <select id="divisaDesde" name="divisaDesde" required>
        <option value="EUR">Euro (EUR)</option>
        <option value="USD">Dólar (USD)</option>
        <option value="GBP">Libra Esterlina (GBP)</option>
        <option value="CNY">Yuan (CNY)</option>
    </select>
    
    <label for="divisaA">Divisa a:</label>
    <select id="divisaA" name="divisaA" required>
        <option value="EUR">Euro (EUR)</option>
        <option value="USD">Dólar (USD)</option>
        <option value="GBP">Libra Esterlina (GBP)</option>
        <option value="CNY">Yuan (CNY)</option>
    </select>
    
    <button type="submit">Convertir</button>
</form>

</body>
</html>
