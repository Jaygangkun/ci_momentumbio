<?php

namespace App\Controllers;


class Ajax extends BaseController
{
    protected $helpers = ['form', 'global']; 
    
    public function contact()
    {

        $name = (!empty($_POST['first_name']) ? $_POST['first_name'] : '').' '.(!empty($_POST['last_name']) ? $_POST['last_name'] : '');
        $email = !empty($_POST['email']) ? $_POST['email'] : '';
        $company = !empty($_POST['company']) ? $_POST['company'] : '';
        $interest_area = !empty($_POST['interest_area']) ? $_POST['interest_area'] : '';

        $to = 'info@momentum.bio';
        $subject = 'Momentum website contact form submission';
        $body = 'You have a contact request from:<br>
        NAME:  '.$name.'
        EMAIL:  '.$email.'<br><br>
        COMPANY: '.$company.'
        INTEREST AREA: '.$interest_area.'
        ';

        $resp = sendMail($to, $subject, $body);
        
        echo json_encode($resp);
    }

    public function unlock() {
        if(empty($_POST['password'])) {
            echo json_encode([
                'success' => false,
                'error' => 'No found password'
            ]);

            return;
        }

        if($_POST['password'] != '123') {
            echo json_encode([
                'success' => false,
                'error' => 'Password is incorrect'
            ]);

            return;
        }

        createUnlockFile();

        echo json_encode([
            'success' => true,
        ]);
    }
}
