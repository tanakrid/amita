<?php

namespace App\Controllers;

use Exception;

class HelloController extends Controller
{
    public function index()
    {
        return $this->render('hello/index', ['name' => 'php-starter']);
    }

    public function params()
    {
        return $this->request;
    }

    public function go() {
        return $this->redirect('hello/index');
    }

    public function form() {
        return $this->render('hello/form');
    }

    public function formSubmit() {
        $this->shouldBePost();
        $data = $this->request->input;
        return $data->name;
    }
}