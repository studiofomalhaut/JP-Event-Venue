<?php
    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $eventtype = $_POST["event"] ;
    $date = $_POST["date"];
    $plan = $_POST["plan"] ;
    $pavillion = $_POST["pavillion"];
    $guestnum = $_POST["guestnum"];
    $guestages = $_POST["guestages"];
    $newsletter = $_POST["news"];
    $message = trim($_POST["message"]);

    // Check the data.
    if (empty($name) OR empty($message) OR empty($date) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: https://www.jardinspaloma.com/index.php?success=-1#contact");
        exit;
    }
    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "info@jardinspaloma.nl";
    // Set the email subject.
    $subject = "New contact from $name";
    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Event type: $eventtype\n";
    $email_content .= "Scheduled date: $date\n";
    $email_content .= "Event duration: $duration\n";
    $email_content .= "Plano de reserva: $plan\n";
    $email_content .= "Pavilhões: $pavillion\n";
    $email_content .= "Número de convidados: $guestnum\n";
    $email_content .= "Idades/demografia: $guestages\n\n";
    $email_content .= "Mensagem: $message\n";
    // Build the email headers.
    $email_headers = "New Message from: $name <$email>";
    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: https://www.jardinspaloma.com/index.php?success=1#contact");
?>