<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Xabar yuborish funktsiyasini chaqirish
    mail('sanjarbekrahmatov@gmail.com', 'Yangi Xabar', "Ism: $name\nEmail: $email\nXabar: $message");

    // Foydalanuvchini rahmat sahifasiga yo'naltirish
    header("Location: thank-you.html");
    exit();
}
?>
