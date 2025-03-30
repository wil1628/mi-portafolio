<?php
if (isset($_GET['toggleDarkMode'])) {
    $darkMode = filter_input(INPUT_GET, 'toggleDarkMode', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    if ($darkMode !== null) {
        setcookie('darkMode', $darkMode ? 'true' : 'false', time() + (86400 * 30), "/");
        header("Location: " . htmlspecialchars($_SERVER['PHP_SELF']));
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="es" data-bs-theme="<?php echo isset($_COOKIE['darkMode']) && $_COOKIE['darkMode'] === 'true' ? 'dark' : 'light'; ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?? 'Mi Portafolio'; ?></title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- CSS Personalizado -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <button class="btn btn-outline-light me-2" id="darkModeToggle" onclick="toggleDarkMode()">
                <i class="fas fa-moon"></i>
            </button>
            <a class="navbar-brand fw-bold" href="index.php">
                <i class="fas fa-code me-2"></i>Mi Portafolio
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><i class="fas fa-home me-1"></i> Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobreMi.php"><i class="fas fa-user me-1"></i> Sobre Mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="projects.php"><i class="fas fa-project-diagram me-1"></i> Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contacto.php"><i class="fas fa-envelope me-1"></i> Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero-section py-5">
    <div class="container text-center py-5 mt-5">
        <img src="assets/img/20211224_193525.jpg" alt="Foto de Wilber Jimenéz Herrera" class="rounded-circle mb-4" style="width: 150px; height: 150px; object-fit: cover;">
        <h1 class="display-4 fw-bold mb-3">Hola, soy <span class="text-primary">Wilber Jimenéz Herrera</span></h1>
        <p class="lead mb-4">Desarrollador Web | PHP | JavaScript | Python</p>
        <div class="hero-buttons">
            <a href="projects.php" class="btn btn-lg px-4 me-2">
                <i class="fas fa-eye me-1"></i> Ver Proyectos
            </a>
            <a href="/contacto.php" class="btn btn-outline btn-lg px-4">
                <i class="fas fa-paper-plane me-1"></i> Contactarme
            </a>
        </div>
    </div>
</header>
</body>
</html>
