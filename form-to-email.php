<?php
  if (isset($_POST['submit'])) {
    // process form submission

    // retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $phone = $_POST['phone'];

    // set email recipient and subject
    $to = 'ayilarafemi@gmail.com';
    $subject = 'Form submission';

    // build email message
    $message = "Name: $name\nEmail: $email\nphone: $phone\nMessage:\n$message";

    // send the email
    mail($to, $subject, $message);

    // redirect to thank you page
    header('Location: thank-you.html');
    exit;
  }
?>
