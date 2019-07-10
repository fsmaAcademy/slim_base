<?php

namespace app\controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class HomeController extends Controller {
    public function index(Request $request, Response $response, array $args) {
        $this->view('home', Array(
            'nome' => 'Thiago',
            'title' => 'Home'
            )
        );
    }
}