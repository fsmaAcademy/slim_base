<?php

namespace app\controllers;

use Slim\Http\Request;
use Slim\Http\Response;

class AdminController {
    public function index(Request $request, Response $response, array $args) {
        if (count($args) == 0){
            echo 'AdminController:index()';
        } else {
            echo 'AdminController:index()' . ' ' . $args['id'];
        }
    }
}