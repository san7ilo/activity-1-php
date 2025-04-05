<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manager</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .file-card {
            transition: transform 0.2s;
        }
        .file-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .file-icon {
            font-size: 2rem;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h2>Gestor de Archivos</h2>
            <div>
                <span class="me-3">Bienvenido, <strong><?php echo htmlspecialchars($user['name']); ?></strong></span>
                <a href="postsController.php" class="btn btn-outline-primary me-2">Ver Posts</a>
                <a href="logoutController.php" class="btn btn-danger">Cerrar sesión</a>
            </div>
        </div>

        <?php if (!empty($message)): ?>
            <div class="alert alert-success"><?php echo $message; ?></div>
        <?php endif; ?>

        <?php if (!empty($error)): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <h5 class="card-title mb-0">Subir un nuevo archivo</h5>
            </div>
            <div class="card-body">
                <form action="../controllers/fileManagerController.php" method="POST" enctype="multipart/form-data" class="row g-3">
                    <div class="col-md-6">
                        <input type="file" class="form-control" name="file" required>
                    </div>
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-primary">Subir archivo</button>
                    </div>
                </form>
            </div>
        </div>

        <h4 class="mb-3">Mis archivos</h4>
        
        <ul class="nav nav-tabs mb-3" id="fileTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="all-tab" data-bs-toggle="tab" data-bs-target="#all" type="button" role="tab">Todos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="images-tab" data-bs-toggle="tab" data-bs-target="#images" type="button" role="tab">Imágenes</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="documents-tab" data-bs-toggle="tab" data-bs-target="#documents" type="button" role="tab">Documentos</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="audio-tab" data-bs-toggle="tab" data-bs-target="#audio" type="button" role="tab">Audio</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="video-tab" data-bs-toggle="tab" data-bs-target="#video" type="button" role="tab">Video</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="others-tab" data-bs-toggle="tab" data-bs-target="#others" type="button" role="tab">Otros</button>
            </li>
        </ul>

        <div class="tab-content" id="fileTabsContent">
            <!-- Todos los archivos -->
            <div class="tab-pane fade show active" id="all" role="tabpanel">
                <div class="row">
                    <?php if (empty($allFiles)): ?>
                        <div class="col-12">
                            <div class="alert alert-info">No hay archivos disponibles.</div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($allFiles as $file): ?>
                            <div class="col-md-3 mb-4">
                                <div class="card file-card h-100">
                                    <div class="card-body text-center">
                                        <div class="file-icon">
                                            <?php
                                            $icon = 'fa-file';
                                            switch ($file['type']) {
                                                case 'images':
                                                    $icon = 'fa-file-image';
                                                    break;
                                                case 'documents':
                                                    $icon = 'fa-file-pdf';
                                                    break;
                                                case 'audio':
                                                    $icon = 'fa-file-audio';
                                                    break;
                                                case 'video':
                                                    $icon = 'fa-file-video';
                                                    break;
                                            }
                                            ?>
                                            <i class="fas <?php echo $icon; ?>"></i>
                                        </div>
                                        <h6 class="card-title text-truncate" title="<?php echo htmlspecialchars($file['name']); ?>"><?php echo htmlspecialchars($file['name']); ?></h6>
                                        <p class="card-text text-muted small">
                                            <?php echo round($file['size'] / 1024, 2); ?> KB<br>
                                            <?php echo $file['modified']; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-primary" target="_blank">Ver</a>
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-success" download>Descargar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Imágenes -->
            <div class="tab-pane fade" id="images" role="tabpanel">
                <div class="row">
                    <?php
                    $imagesFiles = array_filter($allFiles, function($file) {
                        return $file['type'] === 'images';
                    });
                    
                    if (empty($imagesFiles)): ?>
                        <div class="col-12">
                            <div class="alert alert-info">No hay imágenes disponibles.</div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($imagesFiles as $file): ?>
                            <div class="col-md-3 mb-4">
                                <div class="card file-card h-100">
                                    <div class="card-body text-center">
                                        <div class="file-icon">
                                            <i class="fas fa-file-image"></i>
                                        </div>
                                        <h6 class="card-title text-truncate" title="<?php echo htmlspecialchars($file['name']); ?>"><?php echo htmlspecialchars($file['name']); ?></h6>
                                        <p class="card-text text-muted small">
                                            <?php echo round($file['size'] / 1024, 2); ?> KB<br>
                                            <?php echo $file['modified']; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-primary" target="_blank">Ver</a>
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-success" download>Descargar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Documentos -->
            <div class="tab-pane fade" id="documents" role="tabpanel">
                <!-- Similar al bloque de imágenes pero para documentos -->
                <div class="row">
                    <?php
                    $docsFiles = array_filter($allFiles, function($file) {
                        return $file['type'] === 'documents';
                    });
                    
                    if (empty($docsFiles)): ?>
                        <div class="col-12">
                            <div class="alert alert-info">No hay documentos disponibles.</div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($docsFiles as $file): ?>
                            <div class="col-md-3 mb-4">
                                <div class="card file-card h-100">
                                    <div class="card-body text-center">
                                        <div class="file-icon">
                                            <i class="fas fa-file-pdf"></i>
                                        </div>
                                        <h6 class="card-title text-truncate" title="<?php echo htmlspecialchars($file['name']); ?>"><?php echo htmlspecialchars($file['name']); ?></h6>
                                        <p class="card-text text-muted small">
                                            <?php echo round($file['size'] / 1024, 2); ?> KB<br>
                                            <?php echo $file['modified']; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-primary" target="_blank">Ver</a>
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-success" download>Descargar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Audio -->
            <div class="tab-pane fade" id="audio" role="tabpanel">
                <!-- Similar al bloque de imágenes pero para audio -->
                <div class="row">
                    <?php
                    $audioFiles = array_filter($allFiles, function($file) {
                        return $file['type'] === 'audio';
                    });
                    
                    if (empty($audioFiles)): ?>
                        <div class="col-12">
                            <div class="alert alert-info">No hay archivos de audio disponibles.</div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($audioFiles as $file): ?>
                            <div class="col-md-3 mb-4">
                                <div class="card file-card h-100">
                                    <div class="card-body text-center">
                                        <div class="file-icon">
                                            <i class="fas fa-file-audio"></i>
                                        </div>
                                        <h6 class="card-title text-truncate" title="<?php echo htmlspecialchars($file['name']); ?>"><?php echo htmlspecialchars($file['name']); ?></h6>
                                        <p class="card-text text-muted small">
                                            <?php echo round($file['size'] / 1024, 2); ?> KB<br>
                                            <?php echo $file['modified']; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-primary" target="_blank">Ver</a>
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-success" download>Descargar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Video -->
            <div class="tab-pane fade" id="video" role="tabpanel">
                <!-- Similar al bloque de imágenes pero para video -->
                <div class="row">
                    <?php
                    $videoFiles = array_filter($allFiles, function($file) {
                        return $file['type'] === 'video';
                    });
                    
                    if (empty($videoFiles)): ?>
                        <div class="col-12">
                            <div class="alert alert-info">No hay archivos de video disponibles.</div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($videoFiles as $file): ?>
                            <div class="col-md-3 mb-4">
                                <div class="card file-card h-100">
                                    <div class="card-body text-center">
                                        <div class="file-icon">
                                            <i class="fas fa-file-video"></i>
                                        </div>
                                        <h6 class="card-title text-truncate" title="<?php echo htmlspecialchars($file['name']); ?>"><?php echo htmlspecialchars($file['name']); ?></h6>
                                        <p class="card-text text-muted small">
                                            <?php echo round($file['size'] / 1024, 2); ?> KB<br>
                                            <?php echo $file['modified']; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-primary" target="_blank">Ver</a>
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-success" download>Descargar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Otros -->
            <div class="tab-pane fade" id="others" role="tabpanel">
                <!-- Similar al bloque de imágenes pero para otros tipos -->
                <div class="row">
                    <?php
                    $otherFiles = array_filter($allFiles, function($file) {
                        return $file['type'] === 'others';
                    });
                    
                    if (empty($otherFiles)): ?>
                        <div class="col-12">
                            <div class="alert alert-info">No hay otros archivos disponibles.</div>
                        </div>
                    <?php else: ?>
                        <?php foreach ($otherFiles as $file): ?>
                            <div class="col-md-3 mb-4">
                                <div class="card file-card h-100">
                                    <div class="card-body text-center">
                                        <div class="file-icon">
                                            <i class="fas fa-file"></i>
                                        </div>
                                        <h6 class="card-title text-truncate" title="<?php echo htmlspecialchars($file['name']); ?>"><?php echo htmlspecialchars($file['name']); ?></h6>
                                        <p class="card-text text-muted small">
                                            <?php echo round($file['size'] / 1024, 2); ?> KB<br>
                                            <?php echo $file['modified']; ?>
                                        </p>
                                    </div>
                                    <div class="card-footer bg-transparent border-0">
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-primary" target="_blank">Ver</a>
                                        <a href="<?php echo str_replace('../', '', $file['path']); ?>" class="btn btn-sm btn-outline-success" download>Descargar</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Activar los tabs de Bootstrap
        const triggerTabList = document.querySelectorAll('#fileTabs button');
        triggerTabList.forEach(triggerEl => {
            const tabTrigger = new bootstrap.Tab(triggerEl);
            triggerEl.addEventListener('click', event => {
                event.preventDefault();
                tabTrigger.show();
            });
        });
    </script>
</body>
</html>