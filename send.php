<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = htmlspecialchars($_POST["nom"] ?? "");
    $email = filter_var($_POST["email"] ?? "", FILTER_VALIDATE_EMAIL);
    $tel = htmlspecialchars($_POST["tel"] ?? "");
    $localisation = htmlspecialchars($_POST["localisation"] ?? "");
    $type = htmlspecialchars($_POST["type"] ?? "");
    $message = htmlspecialchars($_POST["message"] ?? "");

    if (!$email) {
        die("Adresse email invalide.");
    }

    $mail = new PHPMailer(true);

    try {
        // Config SMTP Brevo
        $mail->isSMTP();
        $mail->Host       = 'smtp-relay.brevo.com';
        $mail->SMTPAuth   = true;
       $mail->Username = getenv('BREVO_SMTP_LOGIN');
        $mail->Password = getenv('BREVO_SMTP_KEY');
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;
        $mail->CharSet    = 'UTF-8'; // encodage correct pour les accents

        // Expéditeur = ton adresse validée dans Brevo
        $mail->setFrom('soupy.baptiste.soupy@gmail.com', 'DV Design Dumont & Vauban');

        // Destinataire = l’utilisateur
        $mail->addAddress($email, $nom);

        // Reply-To = l’utilisateur (quand tu réponds, ça part vers lui)
        $mail->addReplyTo($email, $nom);

        // Copie cachée pour toi (optionnel)
        $mail->addBCC('soupy.baptiste.soupy@gmail.com');

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = "Votre demande de contact a bien été reçue";
        $mail->Body    = "
            <h3>Bonjour $nom,</h3>
            <p>Merci pour votre demande nous avons bien reçu votre message, </p>
            <p>Nous reviendrons vers vous rapidement.</p>
        ";
        $mail->AltBody = "Nom: $nom\nEmail: $email\nTéléphone: $tel\nLocalisation: $localisation\nType: $type\nMessage:\n$message";

        $mail->send();
        echo "✅ Message envoyé avec succès à $email.";
    } catch (Exception $e) {
        echo "❌ Erreur: {$mail->ErrorInfo}";
    }
}
?>
