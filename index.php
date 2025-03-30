<?php
$pageTitle = "Inicio | Mi Portafolio";
include 'includes/header.php';
?>

<main class="container my-5">
    <!-- Sección de Proyectos Destacados -->
    <section class="py-5">
        <h2 class="text-center mb-5 fw-bold">Proyectos Destacados</h2>
        <div class="row g-4 " id="featured-projects">
            <!-- Proyectos cargados dinámicamente -->
        </div>
        <div class="text-center mt-4">
            <a href="projects.php" class="btn btn-outline-primary btn-lg">
                <i class="fas fa-folder-open me-1"></i> Ver Todos los Proyectos
            </a>
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
    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-5 fw-bold">Lo Que Dicen de Mí</h2>
            <div class="row g-4">
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <p class="fw-light">"Wilber fue clave en el éxito de nuestro proyecto. Su conocimiento y dedicación son inigualables."</p>
                            <h5 class="mt-4 fw-bold">- Cliente Satisfecho</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <p class="fw-light">"Siempre cumple los plazos con resultados de alta calidad. 100% recomendado."</p>
                            <h5 class="mt-4 fw-bold">- Empresa Asociada</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="py-5 bg-light rounded-3">
        <div class="container text-center py-4">
            <h2 class="fw-bold mb-4">¿Interesado en trabajar juntos?</h2>
            <p class="lead">¡Estaré encantado de saber más sobre tu proyecto!</p>
            <!-- Contacto por correo gmail -->
            <a href="mailto:jimenezherrerawilber@gmail.com" class="btn btn-primary btn-lg px-4">
                <i class="fas fa-envelope me-1"></i> Contactame
            </a>
            <a href="https://api.whatsapp.com/send?phone=50687246932&text=Hola%20Wilber%20Jimen%C3%A9z%20Herrera!%20Quiero%20ver%20tu%20portafolio%20web." class="btn btn-outline-primary btn-lg px-4">
                <i class="fab fa-whatsapp me-1"></i>Whatsapp
            </a>
        </div>
    </section>
</main>

<?php include 'includes/footer.php'; ?>