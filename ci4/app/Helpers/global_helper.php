<?php
require_once APPPATH."Libraries/PHPMailer/Exception.php";
require_once APPPATH."Libraries/PHPMailer/PHPMailer.php";
require_once APPPATH."Libraries/PHPMailer/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

if(!function_exists('sendMail')){
    function sendMail($to, $subject, $body){
        set_time_limit(0);

        $mail = new PHPMailer();

        $mail->IsSMTP();
        $mail->Host = 'mail.momentum.bio';
        $mail->Username = 'info@momentum.bio';
        $mail->Password = 'ItUMH3b({cA!';
        $mail->Port = 465;

        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'ssl';
        $mail->SMTPDebug  = 1;  

        $mail->isHTML();

        $mail->From = 'info@momentum.bio';
        $mail->FromName = 'Info MomentumBio';

        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AddAddress($to);

        if(!$mail->Send()) {
            return [
                'success' => false,
                'error' => $mail->ErrorInfo
            ];
        }
        return [
            'success' => true
        ];
    }
}
