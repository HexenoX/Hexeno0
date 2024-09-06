<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Form verilerini al
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // E-posta ayarları
    $to = "Hexenoplayground@gmail.com";
    $subject = "Yeni Geri Bildirim: $name";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    // E-posta içeriği
    $email_message = "Ad: $name\nE-posta: $email\n\nMesaj:\n$message";
    
    // E-posta gönder
    if (mail($to, $subject, $email_message, $headers)) {
        $result = "Geri bildiriminiz başarıyla gönderildi.";
    } else {
        $result = "Geri bildirim gönderilemedi. Lütfen tekrar deneyin.";
    }
} else {
    $result = "";
}
?>
