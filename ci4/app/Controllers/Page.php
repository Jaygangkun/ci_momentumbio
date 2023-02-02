<?php

namespace App\Controllers;


class Page extends BaseController
{
    protected $helpers = ['form', 'global']; 

    public function index()
    {
        $data = [
            'color' => 'dark',
            'page' => 'home'
        ];

        return view('layout', $data);
    }

    public function about()
    {
        $data = [
            'page' => 'about'
        ];

        return view('layout', $data);
    }

    public function management()
    {
        $data = [
            'page' => 'management'
        ];

        return view('layout', $data);
    }

    public function services()
    {
        $data = [
            'page' => 'services'
        ];

        return view('layout', $data);
    }

    public function platforms()
    {
        $data = [
            'page' => 'platforms'
        ];

        return view('layout', $data);
    }

    public function publications()
    {
        $data = [
            'page' => 'publications'
        ];

        return view('layout', $data);
    }

    public function news()
    {
        $data = [
            'page' => 'news'
        ];

        return view('layout', $data);
    }

    public function blog()
    {
        $data = [
            'page' => 'blog'
        ];

        return view('layout', $data);
    }

    public function contact()
    {
        $data = [
            'page' => 'contact'
        ];

        return view('layout', $data);
    }
}
