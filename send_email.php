<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $to = "nozaruddin222@gmail.com"; // Ganti dengan email Anda
    $subject = "Pesan dari Form Kontak";
    $message = "Nama: $name\nEmail: $email\nNo HP: $phone";

    // Menambahkan header untuk email
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Mengirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "Pesan telah dikirim.";
    } else {
        echo "Pesan gagal dikirim.";
    }
}
?>
