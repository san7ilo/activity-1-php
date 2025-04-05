<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Publicaciones</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Publicaciones</h2>
            <div>
                <span class="me-3">Bienvenido, <strong><?php echo htmlspecialchars($user['name']); ?></strong></span>
                <a href="../controllers/fileManagerController.php" class="btn btn-outline-primary me-2">Gestor de Archivos</a>
                <a href="../controllers/logoutController.php" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>

        <div class="row">
            <?php foreach ($publishedPosts as $post): ?>
                <div class="col-md-4">
                    <div class="card mb-3">
                        <img src="<?php echo htmlspecialchars($post['image']); ?>" class="card-img-top" alt="Imagen">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo htmlspecialchars($post['title']); ?></h5>
                            <p class="card-text"><?php echo htmlspecialchars($post['description']); ?></p>
                            <p class="text-muted">Publicado el <?php echo htmlspecialchars($post['created_at']); ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>