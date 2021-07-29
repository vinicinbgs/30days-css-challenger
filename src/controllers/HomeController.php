<?php

namespace App\Controllers;

use App\Http\View;
use App\Http\Request;
use App\Http\Response;

class HomeController
{
    public function __construct() {
      $this->request = new Request();
    }

    public function index()
    {
        $challange = $this->request->get('challange');

        View::load($challange . '/index', [
            'name' => 'Vinicius'
        ]);
    }

    public function store()
    {
        if ($_SERVER['CONTENT_TYPE'] == 'application/json') {
            $post = json_decode(file_get_contents('php://input', 'r'), true);
        } else {
            parse_str(file_get_contents("php://input"), $post);
        }
        var_dump(0x00000010);
        exit();

        return Response::send($post);
    }
}
