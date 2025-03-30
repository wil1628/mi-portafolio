<?php
// Ruta del archivo JSON donde se almacenarán los datos
$file = 'contact_form_data.json';

// Recibir los datos del formulario
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$phone = $_POST['phone'] ?? '';
$message = $_POST['message'] ?? '';

// Verificar que los datos sean válidos
if ($name && $email && $phone && $message) {
    // Crear un array con los datos recibidos
    $data = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'message' => $message,
        'timestamp' => time(),
    ];

    // Leer el archivo JSON
    $existingData = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    // Agregar el nuevo dato al archivo
    $existingData[] = $data;

    // Guardar los datos actualizados en el archivo JSON
    file_put_contents($file, json_encode($existingData, JSON_PRETTY_PRINT));

    // Enviar una respuesta en formato JSON
    echo json_encode(['success' => true]);
} else {
    echo json_encode(['success' => false]);
}

?>
