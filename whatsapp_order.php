<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $product = $_POST['product'];
    $price = $_POST['price'];
    $phone_number = '22390684586'; // Remplacez par votre numéro WhatsApp au format international, par exemple : 33612345678

    $message = "Commande pour $product au prix de $price€";
    $whatsapp_url = "https://api.whatsapp.com/send?phone=$phone_number&text=" . urlencode($message);

    header("Location: $whatsapp_url");
    exit();
} else {
    header('Location: index.html');
}
?>
