<?php

namespace src\Core;

use src\Helper\Template;

class Controller{
    protected Template $template;

    public function __construct(string $diretorio)
    {
        $this->template = new Template($diretorio);
    }
}