<?php
$pasgeTitle = "Proyectos - Wilber Jimenéz";
include 'includes/header.php';
?>

<main class="container my-5">
    <!-- Sección de Proyectos -->
    <section class="py-5">
        <h2 class="text-center mb-5 fw-bold">Proyectos Destacados</h2>
        <div class="row g-4 " id="featured-projects">
            <!-- Proyectos cargados dinámicamente -->
        </div>
    </section>
    <!-- Sección: Habilidades -->
    <section class="py-5 bg-dark text-white rounded-3">
        <div class="container text-center">
            <h2 class="fw-bold mb-4">Mis Habilidades</h2>
            <div class="row">
                <div class="col-md-6">
                    <i class="fas fa-code fa-3x mb-3"></i>
                    <h4>Desarrollo Backend</h4>
                    <p>Programador en PHP, MySQL, y creación de APIs RESTful.</p>
                </div>
                <div class="col-md-6">
                    <i class="fas fa-laptop-code fa-3x mb-3"></i>
                    <h4>Desarrollo Frontend</h4>
                    <p>Dominio de JavaScript, HTML5, CSS3 y frameworks modernos como Bootstrap.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Sección: Testimonios -->
    <!-- Sección: Testimonios -->
<section id="testimonios" class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Lo Que Dicen de Mí</h2>
        <div id="testimonios-container">
            <!-- Testimonios cargados dinámicamente -->
        </div>
    </div>
</section>

</main>

    <?php include 'includes/footer.php'; ?>