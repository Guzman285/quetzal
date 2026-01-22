<?php
require_once '../config/database.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quetzal - Sistema de Finanzas Personales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="text-center">
            <h1 class="display-4">🦜 Quetzal</h1>
            <p class="lead">Sistema de Gestión Financiera Personal</p>
            <hr class="my-4">
        </div>
        
        <div class="row mt-4">
            <div class="col-md-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Estado del Sistema</h5>
                        <?php
                        $database = new Database();
                        $conn = $database->getConnection();
                        
                        if($conn) {
                            echo '<div class="alert alert-success" role="alert">';
                            echo '✓ Servidor web funcionando correctamente<br>';
                            echo '✓ Conexión a base de datos exitosa';
                            echo '</div>';
                        } else {
                            echo '<div class="alert alert-danger" role="alert">';
                            echo '✗ Error en la conexión a base de datos';
                            echo '</div>';
                        }
                        ?>
                        <div class="mt-3">
                            <p><strong>Accesos:</strong></p>
                            <ul class="list-group">
                                <li class="list-group-item">Aplicación: <a href="http://localhost:8080" target="_blank">http://localhost:8080</a></li>
                                <li class="list-group-item">phpMyAdmin: <a href="http://localhost:8081" target="_blank">http://localhost:8081</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>