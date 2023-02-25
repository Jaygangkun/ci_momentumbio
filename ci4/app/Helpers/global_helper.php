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

if(!function_exists('slugify')){
    function slugify($text, $divider = '-'){
        // replace non letter or digits by divider
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, $divider);

        // remove duplicate divider
        $text = preg_replace('~-+~', $divider, $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }
}

if(!function_exists('getUnlockFileName')){
    function getUnlockFileName(){
        // $browser = $_SERVER['HTTP_USER_AGENT'];
        $ip = $_SERVER['REMOTE_ADDR'];

        return 'unlocks/'.slugify($ip).".unlock";
    }
}

if(!function_exists('createUnlockFile')){
    function createUnlockFile(){        
        $fp = fopen(getUnlockFileName(), "w");
        fclose($fp);
    }
}

if(!function_exists('deleteUnlockFile')){
    function deleteUnlockFile(){
        if(file_exists(getUnlockFileName())) {
            unlink(getUnlockFileName());
        }
    }
}

if(!function_exists('checkUnlockFile')){
    function checkUnlockFile(){
        return true;
        if(file_exists(getUnlockFileName())) {
            return true;
        }
        
        return false;
    }
}