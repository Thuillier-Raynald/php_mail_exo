<?php
    /////////////////////////
    // envoi d'un email
    ////////////////////////
    $to = "legrandstrateguere@gmail.com";
    $subject = "Test messagerie";
    $message = "Bonjour, ceci est un test d'envoi mail";
    $headers = "From:thuillier.raynald@gmail.com";
    // fonction mail
    mail($to, $subject, $message, $headers);
    // envoi pour plusieurs destinataires avec ajout de style
    $to = "legrandstrateguere@gmail.com, sandramira27@gmail.com";
    $subject = "Test messagerie2";
    $message = '<html>
                <head>
                    <style>
                        img {
                            margin: 1rem;
                        }
                    </style>
                </head>
                <body>
                    <p>Bonjour, ceci est un test d\'envoi mail pour plusieurs destinataires avec ajout de style !</p>
                    <img src="azerty.jpg" alt="image">
                </body>
                </html>';
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= "From:thuillier.raynald@gmail.com";
    $headers .= "Cc:lebossdu27.raynald@gmail.com";
    $headers .= "Cci:lafemmeduboss27.raynald@gmail.com";
    mail($to, $subject, $message, $headers);