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

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hexeno - Kişisel Web Sayfası</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
            color: #333;
            text-align: center;
        }
        header {
            background: linear-gradient(135deg, #1e90ff, #ff6347);
            color: #fff;
            padding: 2em 0;
        }
        header h1 {
            font-size: 3em;
            margin: 0;
            text-transform: uppercase;
        }
        header p {
            font-size: 1.2em;
            margin: 0;
            font-weight: bold;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2em;
            display: flex;
            justify-content: space-between;
            position: relative;
        }
        .content {
            flex: 1;
            margin-right: 2em;
        }
        .sidebar {
            width: 250px;
            background: #fff;
            padding: 1em;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .section {
            background: #fff;
            padding: 2em;
            margin-bottom: 2em;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            position: relative;
            overflow: hidden;
        }
        .section h2 {
            margin-top: 0;
            font-size: 2em;
            color: #333;
            text-decoration: underline;
        }
        .contact a {
            display: block;
            font-size: 1.2em;
            color: #1e90ff;
            text-decoration: none;
            margin-bottom: 0.5em;
        }
        .contact a:hover {
            text-decoration: underline;
        }
        .banner-editor, .feedback-form, .video-gallery {
            background: #eee;
            border: 1px solid #ddd;
            padding: 2em;
            border-radius: 8px;
        }
        .faq {
            background: #fff;
            border: 1px solid #ddd;
            padding: 2em;
            border-radius: 8px;
            text-align: left;
            margin-top: 2em;
        }
        .faq h2 {
            font-size: 2em;
            color: #333;
            margin-top: 0;
        }
        .faq p {
            font-size: 1em;
            margin: 0.5em 0;
        }
        .faq .answer {
            color: #28a745;
        }
        footer {
            background: #333;
            color: #fff;
            padding: 1em;
            margin-top: 2em;
            position: relative;
            text-align: center;
        }
        footer a {
            color: #1e90ff;
            text-decoration: none;
            display: block;
            margin: 0.5em 0;
        }
        footer a:hover {
            text-decoration: underline;
        }
        .video-gallery iframe {
            width: 100%;
            height: 315px;
            border: none;
            margin-bottom: 1em;
        }
        .feedback-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .feedback-form input, .feedback-form textarea {
            width: 80%;
            max-width: 600px;
            padding: 1em;
            margin: 0.5em 0;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        .feedback-form button {
            padding: 1em 2em;
            border: none;
            border-radius: 8px;
            background: #1e90ff;
            color: #fff;
            font-size: 1em;
            cursor: pointer;
        }
        .feedback-form button:hover {
            background: #0b76d6;
        }
        .social-media-widget {
            display: flex;
            justify-content: center;
            gap: 1em;
            margin-top: 1em;
        }
        .social-media-widget a {
            text-decoration: none;
            color: #1e90ff;
            font-size: 1.5em;
        }
        .social-media-widget a:hover {
            color: #0b76d6;
        }
        .notification, .instagram-popup {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background: #1e90ff;
            color: #fff;
            padding: 1em;
            border-radius: 8px;
            display: none;
            z-index: 1000;
        }
        .instagram-popup {
            bottom: 60px;
            right: 20px;
        }
        .instagram-popup a {
            color: #1e90ff;
            text-decoration: none;
        }
        .instagram-popup a:hover {
            text-decoration: underline;
        }
        .instagram-popup button {
            background: #ff6347;
            color: #fff;
            border: none;
            padding: 0.5em 1em;
            border-radius: 8px;
            cursor: pointer;
        }
        .instagram-popup button:hover {
            background: #e5533c;
        }
        .leadership-table {
            width: 100%;
            margin-top: 2em;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .leadership-table th, .leadership-table td {
            padding: 1em;
            border: 1px solid #ddd;
            text-align: center;
        }
        .leadership-table th {
            background: #ffcc00;
        }
        .leadership-table td {
            background: #fff;
        }
        .leadership-table .winner {
            background: #ffcc00;
        }
        .raining-text {
            font-size: 2em;
            background: linear-gradient(90deg, #ff0000, #ff7f00, #ffff00, #7fff00, #00ff00, #00ff7f, #00ffff, #007fff, #0000ff, #7f00ff, #ff00ff, #ff007f);
            background-size: 400% 400%;
            animation: gradientBG 5s ease infinite;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        @keyframes gradientBG {
            0% { background-position: 0% 0%; }
            50% { background-position: 100% 100%; }
            100% { background-position: 0% 0%; }
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Instagram popup
            var instagramPopup = document.querySelector('.instagram-popup');
            var instagramLink = document.querySelector('#instagram-link');
            var closeInstagramBtn = document.querySelector('#close-instagram');
            instagramLink.addEventListener('click', function(event) {
                event.preventDefault();
                instagramPopup.style.display = 'block';
            });
            closeInstagramBtn.addEventListener('click', function() {
                instagramPopup.style.display = 'none';
            });
            
            // Notification every 5 minutes
            setInterval(function() {
                var notification = document.querySelector('.notification');
                notification.style.display = 'block
