<?php

namespace App\Controllers;


class Page extends BaseController
{
    protected $helpers = ['form', 'global']; 

    public function index()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'color' => 'dark',
            'page' => 'home'
        ];

        return view('layout', $data);
    }

    public function about()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'about'
        ];

        return view('layout', $data);
    }

    public function management()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'management'
        ];

        return view('layout', $data);
    }

    public function services()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'services'
        ];

        return view('layout', $data);
    }

    public function laboratory()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'laboratory'
        ];

        return view('layout', $data);
    }

    public function publications()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'publications'
        ];

        return view('layout', $data);
    }

    public function news()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'news'
        ];

        return view('layout', $data);
    }

    public function blog()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'blog'
        ];

        return view('layout', $data);
    }

    public function contact()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'contact'
        ];

        return view('layout', $data);
    }

    public function media_kit()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'media-kit'
        ];

        return view('layout', $data);
    }
    
    public function privacy_policy()
    {
        if(!checkUnlockFile()) {
            return redirect()->to(base_url('/lock'));
        }

        $data = [
            'page' => 'privacy-policy'
        ];

        return view('layout', $data);
    }

    public function lock()
    {
        $data = [
            'page' => 'lock'
        ];

        deleteUnlockFile();

        return view('layout', $data);
    }

    public function check_lock()
    {
        if(!checkUnlockFile()) {
            echo json_encode([
                'login' => false
            ]);
        }
        else {
            echo json_encode([
                'login' => true
            ]);
        }
    }

    public function test()
    {
        sendMail('jaygangkun@hotmail.com', 'asd', 'test body');
    }
}
