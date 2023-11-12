<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/stylecotiza.css">
    <title>Cotiza con Nosotros</title>
</head>

<body>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $city = $_POST["city"];
    $eventDate = $_POST["event_date"];
    $eventType = $_POST["event_type"];
    $message = $_POST["message"];

    // Información para ser enviada al correo electrónico
    $to = "dkgr176@gmail.com";
    $subject = "Solicitud de Cotización";
    $body = "Nombre Completo: $name\nEmail: $email\nTeléfono: $phone\nCiudad: $city\nFecha del Evento: $eventDate\nTipo de Evento: $eventType\nMensaje: $message";

    if (mail($to, $subject, $body)) {
        echo "¡La solicitud de cotización ha sido enviada con éxito!";
    } else {
        echo "Hubo un error al enviar la solicitud de cotización.";
    }
}
?>

<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="text" name="name" placeholder="Nombre Completo" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="tel" name="phone" placeholder="Teléfono" required>
    <input type="text" name="city" placeholder="Ciudad" required>
    <input type="date" name="event_date" required>
    <input type="text" name="event_type" placeholder="Tipo de Evento" required>
    <textarea name="message" placeholder="Mensaje"></textarea>
    <button type="submit">Enviar</button>
</form>

</body>

</html>