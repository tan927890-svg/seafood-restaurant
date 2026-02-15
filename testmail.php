<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/includes/PHPMailer-master/src/Exception.php';
require __DIR__ . '/includes/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/includes/PHPMailer-master/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';

    $mail->isSMTP();
    $mail->Host = 'smtp-relay.brevo.com';
    $mail->SMTPAuth = true;
    $mail->AuthType = 'a1f367001@smtp-brevo.com'; // 🔥 DÒNG QUAN TRỌNG
    $mail->Username = 'apikey'; // phải đúng chữ này
    $mail->Password = 'SMTP_KEY_CUA_BREVO';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    $mail->setFrom('no-reply@seafood.test', 'Nhà Hàng Hải Sản Biển Xanh');
    $mail->addAddress('tanm4901@gmail.com');

    $mail->isHTML(true);
    $mail->Subject = 'Test gửi mail';
    $mail->Body = 'Gửi mail test thành công 🎉';

    $mail->send();
    echo '✅ GỬI MAIL THÀNH CÔNG';
} catch (Exception $e) {
    echo '❌ LỖI: ' . $mail->ErrorInfo;
}
