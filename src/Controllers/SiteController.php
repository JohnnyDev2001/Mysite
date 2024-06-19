<?php

namespace src\Controllers;

use src\Core\Controller;

class SiteController extends Controller
{

    public function __construct()
    {
        parent::__construct("Views/site/view");
    }

    public function index()
    {
        print $this->template->renderizar('index.html', [

        ]);
    }

    public function sobre()
    {
        print $this->template->renderizar('sobre.html', [
            "pagina" => "Sobre"
        ]);
    }
}