<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="description" content="Sistema de inventario para agregar, gestionar y listar productos de manera eficiente. Ideal para empresas que buscan optimizar su gestión de inventario.">
    <meta name="keywords" content="sistema de inventario, agregar productos, gestionar inventario, listado de productos, software de gestión, control de stock">
    <meta name="author" content="Tu Nombre o Empresa">
    <meta name="robots" content="index, follow">
    
    <!-- Meta Open Graph for Social Media -->
    <meta property="og:title" content="Sistema de Inventario para Agregar Productos">
    <meta property="og:description" content="Gestiona tu inventario de productos de forma sencilla y eficaz. Ideal para empresas de todos los tamaños.">
    <meta property="og:image" content="URL_de_la_imagen_de_previsualización">
    <meta property="og:url" content="URL_de_tu_página">
    <meta property="og:type" content="website">
    
    <!-- Meta Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sistema de Inventario para Agregar Productos">
    <meta name="twitter:description" content="Sistema que permite gestionar tu inventario de productos de forma fácil y eficiente.">
    <meta name="twitter:image" content="URL_de_la_imagen_de_previsualización">
    <meta name="twitter:site" content="@tu_usuario_de_twitter">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <title>Sistema de Inventario para Agregar Productos</title>
</head>
<body>
    <div class="container">
        <h1>Inventario</h1>

        <?php
        include 'conexion.php';

        // Listar registros
        echo "<div class='text-end'>";
        echo "<a href='crear.php' class='btn btn-primary'>Crear Nuevo Producto</a>";
        echo "</div>";

        $sql = "SELECT id, nombre, marca, stock FROM tb_telefonos";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo "<div class='table-container'><table class='table table-striped'><thead><tr><th>ID</th><th>Nombre del Producto</th><th>Marca</th><th>Stock</th><th>Acciones</th></tr></thead><tbody>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['marca']}</td>
                    <td>{$row['stock']}</td>
                    <td >
                        <a class='btn btn-warning' href='actualizar.php?id={$row['id']}'>Editar</a>
                        <a class='btn btn-danger' href='eliminar.php?id={$row['id']}'>Eliminar</a>
                    </td>
                  </tr>";
            }
            echo "</tbody></table></div>";
        } else {
            echo "<div class='alert alert-warning'>No hay registros.</div>";
        }

        $conn->close();
        ?>
    </div>

</body>

</html>