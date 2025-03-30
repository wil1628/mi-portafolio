
// Carga dinámica de proyectos
document.addEventListener('DOMContentLoaded', () => {
    const projects = [
        {
            title: "E-commerce",
            description: "Tienda online con carrito de compras y pasarela de pago.",
            image: "",
            tags: ["PHP", "JavaScript", "Bootstrap"],
            link: "#"
        },
        {
            title: "Blog Personal",
            description: "Sistema de blog con autenticación y comentarios.",
            image: "",
            tags: ["HTML", "Bootstrap", "CSS"],
            link: "#"
        },
        {
            title: "Gestor de Tareas",
            description: "Aplicación para la gestión de tareas con filtros y notificaciones.",
            image: "",
            tags: ["Vue.js", "Node.js", "MongoDB"],
            link: "#"
        }
    ];

    const container = document.getElementById('featured-projects');

    // Evitar uso directo de innerHTML por motivos de seguridad
    projects.forEach((project, index) => {
        const col = document.createElement('div');
        col.className = 'col-md-6 col-lg-4';

        // Crear estructura de la tarjeta
        col.innerHTML = `
            <div class="card project-card mb-4" data-aos="fade-up" data-aos-delay="${index * 100}">
                <img src="assets/img/${project.image}" class="card-img-top" alt="${project.title}">
                <div class="card-body">
                    <h5 class="card-title fw-bold">${project.title}</h5>
                    <p class="card-text">${project.description}</p>
                    <div class="mb-3">
                        ${project.tags.map(tag => `<span class="badge bg-primary me-1">${tag}</span>`).join('')}
                    </div>
                    <a href="${project.link}" class="btn btn-outline-primary">Ver Proyecto</a>
                </div>
            </div>`;
        container.appendChild(col);
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const testimonios = [
        {
            nombre: "Ana Rodríguez",
            cargo: "Empresaria",
            comentario: "Estoy muy satisfecha con el trabajo de Wilber. Desarrolló una página web profesional para mi negocio, mejorando nuestra presencia en línea y aumentando nuestras ventas.",
            imagen: "https://th.bing.com/th/id/OIP.OlhAMwDmOdp5xDlBN7D2eAHaEP?rs=1&pid=ImgDetMain"
        },
        {
            nombre: "Luis Gómez",
            cargo: "Freelancer",
            comentario: "Wilber creó una plataforma personalizada que optimizó mi flujo de trabajo. Su atención al detalle y conocimiento técnico hicieron la diferencia.",
            imagen: "https://img.freepik.com/foto-gratis/joven-hombre-negocios-feliz-expresion_1194-1551.jpg"
        },
        {
            nombre: "Gabriela Fernández",
            cargo: "Dueña de Tienda Online",
            comentario: "Gracias a Wilber, mi tienda en línea ahora es rápida, segura y fácil de usar. Me ayudó a implementar pagos en línea y a mejorar la experiencia de usuario.",
            imagen: "https://1.bp.blogspot.com/-9QfkhTOmqf4/XTCu1_gxhEI/AAAAAAAAGYg/8LGZGTdlF8QUjjZfnzUaRQZa6G4eKX24ACLcBGAs/s1600/emprendedora.jpg"
        }
    ];

    const testimoniosContainer = document.getElementById("testimonios-container");

    if (testimoniosContainer) {
        testimonios.forEach(testimonio => {
            const testimonioElement = document.createElement("div");
            testimonioElement.classList.add("row", "mb-4", "align-items-center");

            testimonioElement.innerHTML = `
                <div class="col-md-3 text-center">
                    <img src="${testimonio.imagen}" class="rounded-circle" width="80" height="80" alt="${testimonio.nombre}">
                </div>
                <div class="col-md-9">
                    <h5 class="fw-bold">${testimonio.nombre}</h5>
                    <p class="text-muted">${testimonio.cargo}</p>
                    <p>"${testimonio.comentario}"</p>
                </div>
            `;

            testimoniosContainer.appendChild(testimonioElement);
        });
    }
});


// Modo Oscuro
const darkModeToggle = document.getElementById('darkModeToggle');

// Actualizar ícono de modo oscuro
const updateDarkModeIcon = () => {
    const isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
    darkModeToggle.innerHTML = isDark ? '<i class="fas fa-sun"></i>' : '<i class="fas fa-moon"></i>';
};

// Inicializar ícono y tema en el primer cargado
updateDarkModeIcon();

// Evento para cambiar el tema
darkModeToggle.addEventListener('click', () => {
    const isDark = document.documentElement.getAttribute('data-bs-theme') === 'dark';
    document.documentElement.setAttribute('data-bs-theme', isDark ? 'light' : 'dark');
    localStorage.setItem('darkMode', !isDark);
    updateDarkModeIcon();
});

// Sincronizar preferencia de modo oscuro al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    const storedMode = localStorage.getItem('darkMode');
    if (storedMode === 'true') {
        document.documentElement.setAttribute('data-bs-theme', 'dark');
    } else {
        document.documentElement.setAttribute('data-bs-theme', 'light');
    }
});

// Contacto
function enviarFormulario() {
    // Obtener los valores de los campos
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    const message = document.getElementById('message').value;
    
    // Validar los campos antes de enviar
    if (!name || !email || !phone || !message) {
        // Mostrar mensaje de error si algún campo está vacío
        document.getElementById('formResponse').innerHTML = '<div class="alert alert-danger">Por favor completa todos los campos.</div>';
        return;
    }

    // Realizar una petición al servidor para guardar los datos
    const formData = new FormData();
    formData.append('name', name);
    formData.append('email', email);
    formData.append('phone', phone);
    formData.append('message', message);

    fetch('procesar_contacto.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Mostrar mensaje de éxito
            document.getElementById('formResponse').innerHTML = '<div class="alert alert-success">¡Formulario enviado exitosamente! Te responderemos pronto.</div>';
            // Limpiar el formulario
            document.getElementById('contactForm').reset();
        } else {
            // Mostrar mensaje de error
            document.getElementById('formResponse').innerHTML = '<div class="alert alert-danger">Hubo un error al enviar el formulario. Intenta nuevamente.</div>';
        }
    })
    .catch(error => {
        document.getElementById('formResponse').innerHTML = '<div class="alert alert-danger">Error en el envío. Intenta nuevamente.</div>';
    });
}