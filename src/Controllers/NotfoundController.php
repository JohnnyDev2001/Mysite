<?php

namespace src\Controllers;

use src\Core\Controller;
use src\Core\Mensagem;

class NotfoundController extends Controller
{

    public function __construct()
    {
        parent::__construct("Views/error");
    }

    public function index()
    {
        print $this->template->renderizar('404.html', [
        ]);
    }
}