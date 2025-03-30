<?php
$pageTitle = 'Contacto';
include 'includes/header.php';
?>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5 fw-bold">Contacto</h2>
        <form id="contactForm" onsubmit="enviarFormulario(); return false;">
            <div class="row g-3">
                <div class="col-md-4">
                    <label for="name" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                    <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                </div>
                <div class="col-md-4">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Por favor ingresa un email válido.</div>
                </div>
                <div class="col-4">
                    <label for="phone" class="form-label">Teléfono</label>
                    <input type="text" class="form-control" id="phone" name="phone" required>
                    <div class="invalid-feedback">Por favor ingresa tu teléfono.</div>
                </div>
                <div class="col-12">
                    <label for="message" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    <div class="invalid-feedback">Por favor ingresa tu mensaje.</div>
                </div>
                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </div>
        </form>
        <div id="formResponse" class="mt-3"></div>
    </div>
</section>

<?php include 'includes/footer.php';?>
