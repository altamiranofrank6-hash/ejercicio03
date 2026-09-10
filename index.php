<?php
$productos = [
    ["nombre" => "Laptop", "precio" => 2500, "stock" => 5],
    ["nombre" => "Mouse", "precio" => 50, "stock" => 10],
    ["nombre" => "Teclado", "precio" => 120, "stock" => 0],
    ["nombre" => "Monitor", "precio" => 800, "stock" => 3]
];
$totalInventario = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<main>
    <p class="numero">Ejercicio 03 · Fundamentos de PHP</p>
    <h1>Catálogo de productos</h1>
    <p>Productos de la tienda y sus existencias actuales.</p>
    <div class="tabla">
        <table>
            <thead>
                <tr><th scope="col">Producto</th><th scope="col">Precio</th><th scope="col">Stock</th><th scope="col">Estado</th></tr>
            </thead>
            <tbody>
                <?php foreach ($productos as $producto): ?>
                    <?php
                    if ($producto["stock"] > 0) {
                        $estado = "Disponible";
                    } else {
                        $estado = "Agotado";
                    }
                    $totalInventario += $producto["precio"] * $producto["stock"];
                    ?>
                    <tr>
                        <td><?php echo $producto["nombre"]; ?></td>
                        <td>S/ <?php echo number_format($producto["precio"], 2); ?></td>
                        <td><?php echo $producto["stock"]; ?></td>
                        <td><?php echo $estado; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <p class="resultado total">Valor total del inventario disponible: S/ <?php echo number_format($totalInventario, 2); ?></p>
</main>
</body>
</html>
